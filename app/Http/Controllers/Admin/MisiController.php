<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Misi;
use Illuminate\Support\Facades\Storage;


class MisiController extends Controller
{
    public function index()
    {
        $misi = Misi::all();
        return view('admin.misi.index', compact('misi'));
    }

    public function create()
    {
        return view('admin.misi.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        $misi = Misi::findOrfail($id);
        return view('admin.misi.edit', compact('misi'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'         => 'required',
        ]); 

        //check jika image kosong
        if($request->file('image') == '') {
            
            //update data tanpa image
            $misi = misi::findOrfail($id);
            $misi->update([
                'title'                 => $request->title,
                'subtitle'               => $request->subtitle,
                'misi'                  => $request->misi,
                'content'                => $request->content,
                
            ]);

        } else {
            $misi = misi::findOrfail($id);
            //hapus image lama
            Storage::disk('local')->delete('public/misi/'.basename($misi->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/misi', $image->hashName());

            //update dengan image baru
            $misi = misi::findOrfail($id);
            $misi->update([
                'image'                 => $image->hashName(),
                'title'                 => $request->title,
                'subtitle'              => $request->subtitle,
                'misi'                  =>$request->misi,
                'content'               => $request->content,
            ]);
        }

        if($misi){
            //redirect dengan pesan sukses
            return redirect()->route('admin.misi.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.misi.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        //
    }
}
