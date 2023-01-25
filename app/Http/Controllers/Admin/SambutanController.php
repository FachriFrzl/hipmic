<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sambutan;
use Illuminate\Support\Str; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SambutanController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $sambutans = Sambutan::latest()->take(1)->get();

        return view('admin.sambutan.index', compact('sambutans'));
    }

    /**
     * edit
     *
     * @param  mixed $request
     * @param  mixed $sambutan
     * @return void
     */
    public function edit(Sambutan $sambutan)
    {
        return view('admin.sambutan.edit', compact('sambutan'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $sambutan
     * @return void
     */
    public function update(Request $request, Sambutan $sambutan)
    {
        $this->validate($request, [
            'image'                 => 'required|image|mimes:jpeg,jpg,png|max:2000',
        ]); 

        
        //hapus image lama
        Storage::disk('local')->delete('public/identities/'.basename($sambutan->image));

        //upload image baru
        $image = $request->file('image');
        $image->storeAs('public/identities', $image->hashName());

        //update dengan image baru
        $sambutan = Sambutan::findOrFail($sambutan->id);
        $sambutan->update([
            'image'  => $image->hashName(),
            'name'   => $request->name,
            'slug'   => Str::slug($request->name, '-'),
            'video'   => $request->video,

        ]);

        if($sambutan){
            //redirect dengan pesan sukses
            return redirect()->route('admin.sambutan.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.sambutan.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
