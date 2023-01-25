<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Opening;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class OpeningController extends Controller
{
    
    public function index()
    {
        $opening = Opening::all();
        return view('admin.opening.index', compact('opening'));
    }

    public function edit($id)
    {
        $opening = Opening::findOrfail($id);
        return view('admin.opening.edit', compact('opening'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'         => 'required',
        ]); 

        //check jika image kosong
        if($request->file('image') == '') {
            
            //update data tanpa image
            $opening = opening::findOrfail($id);
            $opening->update([
                'name'                   => $request->name,
                'slug'                   => Str::slug($request->name, '-'),
                'description'            => $request->description,
               
                
            ]);

        } else {
            $opening = opening::findOrfail($id);
            //hapus image lama
            Storage::disk('local')->delete('public/openings/'.basename($opening->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/openings', $image->hashName());

            //update dengan image baru
            $opening = opening::findOrfail($id);
            $opening->update([
                'image'                => $image->hashName(),
                'name'                 => $request->name,
                'slug'                  => Str::slug($request->name, '-'),
                'description'            => $request->description,
                
            ]);
        }

        if($opening){
            //redirect dengan pesan sukses
            return redirect()->route('admin.opening.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.opening.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

}
