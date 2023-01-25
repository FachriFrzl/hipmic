@extends('layouts.app', ['title' => 'Tambah Data Pendaftarr - Admin'])

@section('content')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
    <div class="container mx-auto px-6 py-8">

        <div class="p-6 bg-white rounded-md shadow-md">
            <h2 class="text-lg text-gray-700 font-semibold capitalize">TAMBAH DATA PENDAFTAR</h2>
            <hr class="mt-4">
            <form action="{{ route('admin.formdaftar.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="row">
                    <div class="col-md-6 mt-4">
                        <label class="text-gray-700" for="image">PAS FOTO</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white p-3" type="file" name="image">
                        @error('image')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-6 mt-5">
                        <div>
                            <label class="text-gray-700" for="image">Tanda Pengenal</label>
                            <select class="w-full border bg-gray-200 focus:bg-white rounded px-3 py-2 outline-none" aria-label=".form-select-sm example" name="tanda_pengenal">
                                <option selected>Pilih Tanda Pengenal</option>
                                <option value="KTP">KTP</option>
                                <option value="SIM">SIM</option>
                                <option value="PASSPORT">PASSPORT</option>
                            </select>
                            @error('tanda_pengenal')
                                <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                    <div class="px-4 py-2">
                                        <p class="text-gray-600 text-sm">{{ $message }}</p>
                                    </div>
                                </div>
                            @enderror
                        </div>
                    

                    </div>
                    <di class="col-md-6 mt-4">
                        <label class="text-gray-700" for="name">NAMA LENGKAP CALON MEMBER</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="name" value="{{ old('name') }}" placeholder="Full Name">
                        @error('name')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </di>
                    <di class="col-md-6 mt-4">
                        <label class="text-gray-700" for="id_number">NO KTP / NO SIM / NOMOR PASPOR</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="id_number" value="{{ old('id_number') }}" placeholder="ID Number or Passport">
                        @error('id_number')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </di>
                    <di class="col-md-6 mt-4">
                        <label class="text-gray-700" for="id_number">TEMPAT & TANGGAL LAHIR</label>
                        <div class="row">
                            <div class="col-md-7">
                                <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="birth_place" value="{{ old('birth_place') }}" placeholder="Place of birth">
                                @error('birth_place')
                                    <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                        <div class="px-4 py-2">
                                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                                        </div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-5">
                                <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white p-3" type="date" name="birth_date" value="{{ old('birth_date') }}">
                                @error('birth_date')
                                    <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                        <div class="px-4 py-2">
                                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                                        </div>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        
                    </di>
                    <di class="col-md-6 mt-4">
                        <label class="text-gray-700" for="phone">NOMOR HANDPHONE CALON MEMBER</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone Number">
                        @error('phone')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </di>
                    <div class="col-md-6 mt-4">
                        <label class="text-gray-700" for="address">ALAMAT LENGKAP</label>
                        <textarea class="w-full mt-2 rounded-md bg-gray-200 focus:bg-white" name="address" rows="7">{{ old('address') }}</textarea>
                        @error('address')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
        
                    <div class="col-md-6 mt-4">
                        <label class="text-gray-700" for="address">DESKRIPSI PERUSAHAAN</label>
                        <textarea class="w-full mt-2 rounded-md bg-gray-200 focus:bg-white" name="description" rows="7">{{ old('description') }}</textarea>
                        @error('description_perusahaan')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <br>
                    <hr>
                    <div class="col-md-6 mt-4">
                        <label class="text-gray-700" for="name">Provinsi</label>
                        <select class="w-full border bg-gray-200 focus:bg-white rounded px-3 py-2 outline-none" aria-label=".form-select-sm example" name="provinsi">
                            <option selected>Jawa Barat</option>
                        </select>
                        <br>
                        <br>
                        <label class="text-gray-700" for="name">Kota</label>
                        <select class="w-full border bg-gray-200 focus:bg-white rounded px-3 py-2 outline-none" aria-label=".form-select-sm example" name="kota">
                            <option selected>Cimahi</option>
                        </select>
                        <br>
                    </div>
                    <div class="col-md-6 mt-4">
                        <label class="text-gray-700" for="name">Kecamatan</label>
                        <select class="w-full border bg-gray-200 focus:bg-white rounded px-3 py-2 outline-none" aria-label=".form-select-sm example" name="kecamatan">
                            <option selected>Pilih Kecamatan</option>
                            <option value="Cimahi Utara">Cimahi Utara</option>
                            <option value="Cimahi Tengah">Cimahi Tengah</option>
                            <option value="Cimahi Selatan">Cimahi Selatan</option>
                        </select>
                        <br>
                        <br>
                        <label class="text-gray-700" for="name">Kelurahan</label>
                        <select class="w-full border bg-gray-200 focus:bg-white rounded px-3 py-2 outline-none" aria-label=".form-select-sm example" name="kelurahan">
                            <option selected>Pilih Kelurahan</option>
                            <option value="Cibeber">Cibeber</option>
                            <option value="Cibeurem">Cibereum</option>
                            <option value="Leuwigajah">Leuwigajah</option>
                            <option value="Melong">Melong</option>
                            <option value="Utama">Utama</option>
                            <option value="Baros">Baros</option>
                            <option value="Cigugur tengah">Cigugur tengah</option>
                            <option value="Cimahi">Cimahi</option>
                            <option value="Karang mekar">Karang mekar</option>
                            <option value="Padasuka">Padasuka</option>
                            <option value="Setiamanah">Setiamanah</option>
                            <option value="Cibabat">Cibabat</option>
                            <option value="Cipageran">Cipageran</option>
                            <option value="Citereup">Citereup</option>
                            <option value="Pasirkaliki">Pasirkaliki</option>
                        </select>
                    </div>
                </div>


                <div class="flex justify-start mt-4">
                    <button type="submit" class="px-4 py-2 bg-gray-600 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">SIMPAN</button>
                </div>
            </form>
        </div>
        
    </div>
</main>
@endsection
