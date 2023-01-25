<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visi;
use Illuminate\Support\Facades\Storage;

class VisiController extends Controller
{
    public function index()
    {
        $visi = Visi::all();
        return view('admin.visi.index', compact('visi'));
    }

    public function create()
    {
        return view('admin.visi.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        $visi = Visi::findOrfail($id);
        return view('admin.visi.edit', compact('visi'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'         => 'required',
        ]); 

        //check jika image kosong
        if($request->file('image') == '') {
            
            //update data tanpa image
            $visi = visi::findOrfail($id);
            $visi->update([
                'title'                 => $request->title,
                'subtitle'               => $request->subtitle,
                'visi'                  => $request->visi,
                'content'                => $request->content,
                
            ]);

        } else {
            $visi = visi::findOrfail($id);
            //hapus image lama
            Storage::disk('local')->delete('public/visi/'.basename($visi->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/visi', $image->hashName());

            //update dengan image baru
            $visi = visi::findOrfail($id);
            $visi->update([
                'image'                 => $image->hashName(),
                'title'                 => $request->title,
                'subtitle'              => $request->subtitle,
                'visi'                  =>$request->visi,
                'content'               => $request->content,
            ]);
        }

        if($visi){
            //redirect dengan pesan sukses
            return redirect()->route('admin.visi.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.visi.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        //
    }
}
