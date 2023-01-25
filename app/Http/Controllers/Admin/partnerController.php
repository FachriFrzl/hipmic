<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class partnerController extends Controller
{
    public function index()
    {
        $partner = Partner::all();
        return view('admin.partner.index', compact('partner'));
    }

    public function edit($id)
    {
        $partner = partner::findOrfail($id);
        return view('admin.partner.edit', compact('partner'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'         => 'required',
        ]); 

        //check jika image kosong
        if($request->file('image') == '') {
            
            //update data tanpa image
            $partner = partner::findOrfail($id);
            $partner->update([
                'title'                   => $request->title,
                'name'                     => $request->name,
                'slug'                   => Str::slug($request->title, '-'),
                'description'            => $request->description,
                'address'               => $request->address,
                'contact'               => $request->contact,
                'web'                   => $request->web,
                'fb'                    => $request->fb,
                'ig'                    => $request->ig,
                'linkedin'              => $request->linkedin,
                'tt'                    => $request->tt,
                'tw'                    => $request->tw
                
            ]);

        } else {
            $partner = partner::findOrfail($id);
            //hapus image lama
            Storage::disk('local')->delete('public/partners/'.basename($partner->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/partners', $image->hashName());

            //update dengan image baru
            $partner = partner::findOrfail($id);
            $partner->update([
                'image'                => $image->hashName(),
                'title'                => $request->title,
                'name'                 => $request->name,
                'slug'                 => Str::slug($request->title, '-'),
                'description'          => $request->description,
                'address'               => $request->address,
                'contact'               => $request->contact,
                'web'                   => $request->web,
                'fb'                    => $request->fb,
                'ig'                    => $request->ig,
                'linkedin'              => $request->linkedin,
                'tt'                    => $request->tt,
                'tw'                    => $request->tw
                
            ]);
        }

        if($partner){
            //redirect dengan pesan sukses
            return redirect()->route('admin.partner.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.partner.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
