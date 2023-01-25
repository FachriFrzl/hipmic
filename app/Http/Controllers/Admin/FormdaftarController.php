<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Formdaftar;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Carbon\Carbon;


class FormdaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formdaftars = Formdaftar::latest()->when(request()->q, function($formdaftars) {
            $formdaftars = $formdaftars->where('name', 'like', '%'. request()->q . '%');
        })->paginate(10);

        return view('admin.formdaftar.index', compact('formdaftars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formdaftar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image'                     => 'required|image|mimes:jpeg,jpg,png|max:2000',
            'name'                      => 'required',
            
            
        ]); 
 
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/formdaftars', $image->hashName());
 
        //save to DB
        $formdaftar = Formdaftar::create([
            'image'                     => $image->hashName(),
            'name'                      => $request->name,
            'id_number'                 => $request->id_number,
            'tanda_pengenal'            => $request->tanda_pengenal,
            'birth_place'               => $request->birth_place,
            'birth_date'                => $request->birth_date,
            'phone'                     => $request->phone,
            'description'               => $request->description,
            'address'                   => $request->address,
            'provinsi'                  => $request->provinsi,
            'kota'                      => $request->kota,
            'kecamatan'                 => $request->kecamatan,
            'kelurahan'                 => $request->kelurahan,
            ]);
        
        if($formdaftar){
             //redirect dengan pesan sukses
             return redirect()->route('admin.formdaftar.index')->with(['success' => 'Data Berhasil Disimpan!']);
         }else{
             //redirect dengan pesan error
             return redirect()->route('admin.formdaftar.index')->with(['error' => 'Data Gagal Disimpan!']);
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(formdaftar $formdaftar)
    {
        return view('admin.formdaftar.show', compact('formdaftar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(formdaftar $formdaftar)
    {
        return view('admin.formdaftar.edit', compact('formdaftar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image'                     => 'required|image|mimes:jpeg,jpg,png|max:2000',
            'name'                      => 'required',
        ]); 

        //check jika image kosong
        if($request->file('image') == '') {
            
            //update data tanpa image
            $formdaftar = Formdaftar::findOrfail($id);
            $formdaftar->update([
            'name'                      => $request->name,
            'id_number'                 => $request->id_number,
            'tanda_pengenal'            => $request->tanda_pengenal,
            'birth_place'               => $request->birth_place,
            'birth_date'                => $request->birth_date,
            'phone'                     => $request->phone,
            'description'               => $request->description,
            'address'                   => $request->address,
            'provinsi'                  => $request->provinsi,
            'kota'                      => $request->kota,
            'kecamatan'                 => $request->kecamatan,
            'kelurahan'                 => $request->kelurahan,
            ]);

        } else {
            $formdaftar = Formdaftar::findOrfail($id);
            //hapus image lama
            Storage::disk('local')->delete('public/formdaftars/'.basename($formdaftar->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/formdaftars', $image->hashName());

            //update dengan image baru
            $formdaftar = Formdaftar::findOrfail($id);
            $formdaftar->update([
            'image'                     => $image->hashName(),
            'name'                      => $request->name,
            'id_number'                 => $request->id_number,
            'tanda_pengenal'            => $request->tanda_pengenal,
            'birth_place'               => $request->birth_place,
            'birth_date'                => $request->birth_date,
            'phone'                     => $request->phone,
            'description'               => $request->description,
            'address'                   => $request->address,
            'provinsi'                  => $request->provinsi,
            'kota'                      => $request->kota,
            'kecamatan'                 => $request->kecamatan,
            'kelurahan'                 => $request->kelurahan,
            ]);
        }

        if($formdaftar){
            //redirect dengan pesan sukses
            return redirect()->route('admin.formdaftar.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.formdaftar.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formdaftar = Formdaftar::findOrFail($id);
        Storage::disk('local')->delete('public/formdaftars/'.basename($formdaftar->image));
        $formdaftar->delete();

        if($formdaftar){
            return response()->json([
                'status' => 'success'
            ]);
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}
