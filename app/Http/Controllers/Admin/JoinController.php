<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Join;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class JoinController extends Controller
{
    public function index()
    {
        $join = Join::all();
        return view('admin.join.index', compact('join'));
    }

    public function edit($id)
    {
        $join = Join::findOrfail($id);
        return view('admin.join.edit', compact('join'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'         => 'required',
        ]); 

        //check jika image kosong
        if($request->file('image') == '') {
            
            //update data tanpa image
            $join = join::findOrfail($id);
            $join->update([
                'title'                 => $request->title,
                'slug'                  => Str::slug($request->title, '-'),
                'description'           => $request->description,
            ]);

        } else {
            $join = join::findOrfail($id);
            //hapus image lama
            Storage::disk('local')->delete('public/join/'.basename($join->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/join', $image->hashName());

            //update dengan image baru
            $join = join::findOrfail($id);
            $join->update([
                'image'                 => $image->hashName(),
                'title'                 => $request->title,
                'slug'                  => Str::slug($request->title, '-'),
                'description'           => $request->description,
            ]);
        }

        if($join){
            //redirect dengan pesan sukses
            return redirect()->route('admin.join.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.join.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
