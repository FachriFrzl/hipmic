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
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'title'         => 'required',
        ]); 

        //check jika image kosong
        if($request->file('image') == '') {
            
            //update data tanpa image
            $about = About::findOrfail($id);
            $about->update([
                'title'                 => $request->title,
                'subtitle'               => $request->subtitle,
                'description'            => $request->description,
                'content'                => $request->content,
                'link'                   => $request->link,
            ]);

        } else {
            $about = About::findOrfail($id);
            //hapus image lama
            Storage::disk('local')->delete('public/identities/'.basename($about->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/identities', $image->hashName());

            //update dengan image baru
            $about = About::findOrfail($id);
            $about->update([
                'image'                => $image->hashName(),
                'title'                 => $request->title,
                'subtitle'               => $request->subtitle,
                'description'            => $request->description,
                'content'                => $request->content,
                'link'                   => $request->link,
            ]);
        }

        if($about){
            //redirect dengan pesan sukses
            return redirect()->route('admin.about.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.about.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
