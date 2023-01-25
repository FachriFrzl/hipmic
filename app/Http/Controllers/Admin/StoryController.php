<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Story;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class StoryController extends Controller
{
    public function index()
    {
        $story = Story::all();
        return view('admin.story.index', compact('story'));
    }

    public function edit($id)
    {
        $story = Story::findOrfail($id);
        return view('admin.story.edit', compact('story'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'         => 'required',
        ]); 

        //check jika image kosong
        if($request->file('image') == '') {
            
            //update data tanpa image
            $story = story::findOrfail($id);
            $story->update([
                'title'                => $request->title,
                'company_name'                 => $request->company_name,
                'slug'                 => Str::slug($request->title, '-'),
                'description'          => $request->description,
                'location'               => $request->location,
                'video'               => $request->video,    
                
            ]);

        } else {
            $story = story::findOrfail($id);
            //hapus image lama
            Storage::disk('local')->delete('public/stories/'.basename($story->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/stories', $image->hashName());

            //update dengan image baru
            $story = story::findOrfail($id);
            $story->update([
                'image'                => $image->hashName(),
                'title'                => $request->title,
                'company_name'                 => $request->company_name,
                'slug'                 => Str::slug($request->title, '-'),
                'description'          => $request->description,
                'location'               => $request->location,
                'video'               => $request->video,                
            ]);
        }

        if($story){
            //redirect dengan pesan sukses
            return redirect()->route('admin.story.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.story.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
