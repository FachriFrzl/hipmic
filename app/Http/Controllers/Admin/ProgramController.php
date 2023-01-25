<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{

    public function index()
    {
    $program = Program::all();
    return view('admin.program.index', compact('program'));
    }

    public function create()
    {
        //
    }

    public function edit($id)
    {
        $program = Program::findOrfail($id);
        return view('admin.program.edit', compact('program'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'         => 'required',
        ]); 

        //check jika image kosong
        if($request->file('image') == '') {
            
            //update data tanpa image
            $program = program::findOrfail($id);
            $program->update([
                'name'                   => $request->name,
                'slug'                   => Str::slug($request->name, '-'),
                'program'                => $request->program,
                'description'            => $request->description,
                'content'                => $request->content,
                'negara'                 => $request->negara
                
            ]);

        } else {
            $program = program::findOrfail($id);
            //hapus image lama
            Storage::disk('local')->delete('public/programs/'.basename($program->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/programs', $image->hashName());

            //update dengan image baru
            $program = program::findOrfail($id);
            $program->update([
                'image'                => $image->hashName(),
                'name'                   => $request->name,
                'slug'                   => Str::slug($request->name, '-'),
                'program'                => $request->program,
                'description'            => $request->description,
                'content'                => $request->content,
                'negara'                 => $request->negara
            ]);
        }

        if($program){
            //redirect dengan pesan sukses
            return redirect()->route('admin.program.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.program.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
