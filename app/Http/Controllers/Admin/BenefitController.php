<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Benefit;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BenefitController extends Controller
{
    public function index()
    {
    $benefit = Benefit::all();
    return view('admin.benefit.index', compact('benefit'));
    }

    public function create()
    {
        //
    }

    public function edit($id)
    {
        $benefit = Benefit::findOrfail($id);
        return view('admin.benefit.edit', compact('benefit'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'         => 'required',
        ]); 

        //check jika image kosong
        if($request->file('image') == '') {
            
            //update data tanpa image
            $benefit = benefit::findOrfail($id);
            $benefit->update([
                'name'                   => $request->name,
                'slug'                   => Str::slug($request->name, '-'),
                'description'            => $request->description,
                'content'                => $request->content,
                
            ]);

        } else {
            $benefit = benefit::findOrfail($id);
            //hapus image lama
            Storage::disk('local')->delete('public/benefits/'.basename($benefit->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/benefits', $image->hashName());

            //update dengan image baru
            $benefit = benefit::findOrfail($id);
            $benefit->update([
                'image'                => $image->hashName(),
                'name'                 => $request->name,
                'slug'                  => Str::slug($request->name, '-'),
                'description'            => $request->description,
                'content'                => $request->content,
            ]);
        }

        if($benefit){
            //redirect dengan pesan sukses
            return redirect()->route('admin.benefit.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.benefit.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
