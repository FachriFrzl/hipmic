<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Support\Str; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $abouts = About::latest()->take(1)->get();

        return view('admin.about.index', compact('abouts'));
    }
    
    
    /**
     * edit
     *
     * @param  mixed $request
     * @param  mixed $about
     * @return void
     */
    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $about
     * @return void
     */
    public function update(Request $request, About $about)
    {
        $this->validate($request, [
            'image'                 => 'required|image|mimes:jpeg,jpg,png|max:2000',
        ]); 


        //hapus image lama
        Storage::disk('local')->delete('public/identities/'.basename($about->image));

        //upload image baru
        $image = $request->file('image');
        $image->storeAs('public/identities', $image->hashName());

        //update dengan image baru
        $about = About::findOrFail($about->id);
        $about->update([
            'image'         => $image->hashName(),
            'name'          => $request->name,
            'slug'          => Str::slug($request->name, '-'),
            'subtutle'      => $request->subtitle,
            'description'   => $request->description,
            'content'       => $request->conten,

        ]);

        if($about){
            //redirect dengan pesan sukses
            return redirect()->route('admin.about.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.about.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
