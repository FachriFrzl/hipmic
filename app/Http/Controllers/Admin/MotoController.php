<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Moto;
use Illuminate\Support\Facades\Storage;

class MotoController extends Controller
{
    
    public function index()
    {
        $moto = Moto::all();
        return view('admin.moto.index', compact('moto'));
    }

    public function create()
    {
        return view('admin.moto.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        $moto = Moto::findOrfail($id);
        return view('admin.moto.edit', compact('moto'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'         => 'required',
        ]); 

        //check jika image kosong
        if($request->file('image') == '') {
            
            //update data tanpa image
            $moto = moto::findOrfail($id);
            $moto->update([
                'title'                 => $request->title,
                'subtitle'               => $request->subtitle,
                'moto'                  => $request->moto,
                'content'                => $request->content,
                
            ]);

        } else {
            $moto = moto::findOrfail($id);
            //hapus image lama
            Storage::disk('local')->delete('public/moto/'.basename($moto->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/moto', $image->hashName());

            //update dengan image baru
            $moto = moto::findOrfail($id);
            $moto->update([
                'image'                 => $image->hashName(),
                'title'                 => $request->title,
                'subtitle'              => $request->subtitle,
                'moto'                  =>$request->moto,
                'content'               => $request->content,
            ]);
        }

        if($moto){
            //redirect dengan pesan sukses
            return redirect()->route('admin.moto.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.moto.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        //
    }
}
