<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Our;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class OurController extends Controller
{
    public function index()
    {
       $our = Our::all();
       return view('admin.our.index', compact('our'));
        
    }

    public function edit($id)
    {
        $our = our::findOrfail($id);
        return view('admin.our.edit', compact('our'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'         => 'required',
        ]); 

        //check jika image kosong
        if($request->file('image') == '') {
            
            //update data tanpa image
            $our = our::findOrfail($id);
            $our->update([
                'title'                   => $request->title,
                'slug'                   => Str::slug($request->title, '-'),
                'description'            => $request->description,
               
                
            ]);

        } else {
            $our = our::findOrfail($id);
            //hapus image lama
            Storage::disk('local')->delete('public/ours/'.basename($our->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/ours', $image->hashName());

            //update dengan image baru
            $our = our::findOrfail($id);
            $our->update([
                'image'                => $image->hashName(),
                'title'                 => $request->title,
                'slug'                  => Str::slug($request->title, '-'),
                'description'            => $request->description,
                
            ]);
        }

        if($our){
            //redirect dengan pesan sukses
            return redirect()->route('admin.our.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.our.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
