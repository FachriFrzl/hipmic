<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Record;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LogoController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $logos = Logo::All();

        return view('admin.logo.index', compact('logos'));
    }


    /**
     * edit
     *
     * @param  mixed $request
     * @param  mixed $logo
     * @return void
     */
    public function edit(Logo $logo)
    {
        return view('admin.logo.edit', compact('logo'));
    }


    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $logo
     * @return void
     */
    public function update(Request $request, Logo $logo)
    {
        $this->validate($request, [
            'company_logo' => 'required|image|mimes:png,svg|max:500',
            'favicon' => 'required|image|mimes:png,svg,ico|max:200',
        ]); 

        //hapus image lama
        Storage::disk('local')->delete('public/identities/'.basename($logo->company_logo));

        //upload image baru
        $company_logo = $request->file('company_logo');
        $company_logo->storeAs('public/identities', $company_logo->hashName());

        //hapus image lama
        Storage::disk('local')->delete('public/identities/'.basename($logo->favicon));

        //upload image baru
        $favicon = $request->file('favicon');
        $favicon->storeAs('public/identities', $favicon->hashName());

        //update dengan image baru
        $logo = Logo::findOrFail($logo->id);
        $logo->update([
            'company_logo'  => $company_logo->hashName('logo'),
            'favicon'  => $favicon->hashName(),
        ]);

        if($logo){
            //redirect dengan pesan sukses
            return redirect()->route('admin.logo.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.logo.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

  
}
