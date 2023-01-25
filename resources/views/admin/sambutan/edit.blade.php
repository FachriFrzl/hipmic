@extends('layouts.app', ['title' => 'Edit Sambutan - Admin'])

@section('content')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
    <div class="container mx-auto px-6 py-8">
        <div class="flex justify-between">
            <h2 class="t-purplee">Edit Sambutan</h2>
        </div>
        <hr>
        <form action="{{ route('admin.sambutan.update', $sambutan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 gap-6 mt-4">

            <div class="row">
                    <div class="col-sm-7">
                        <div>
                            <label class="text-gray-700" for="image">GAMBAR</label>
                            <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white p-3" type="file" name="image">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <img src="{{asset('storage/identities/'.$sambutan->image)}}" class="admin-edit-image">
                    </div>
                    
                </div>

                
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div>
                        <label class="text-gray-700" for="name">Nama Lengkap</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="name" value="{{ old('name', $sambutan->name) }}" placeholder="">
                        @error('name')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                <label class="text-gray-700" for="video">ID Video Youtube</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="video" value="{{ old('video', $sambutan->video) }}" placeholder="">
                        @error('video')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                </div>
            </div>

            <div class="flex justify-start mt-4">
                <button type="submit" class="px-4 py-2 bg-gray-600 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">UPDATE</button>
            </div>
        </form>
        
    </div>
</main>
@endsection