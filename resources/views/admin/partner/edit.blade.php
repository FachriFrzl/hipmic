@extends('layouts.app', ['title' => 'Edit partner Us - Admin'])

@section('content')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
    <div class="container mx-auto px-6 py-8">

        <div class="p-6 bg-white rounded-md shadow-md">
            <h2 class="text-lg text-gray-700 font-semibold capitalize">EDIT partner </h2>
            <hr class="mt-4">
            <form action="{{ route('admin.partner.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
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
                            <img src="{{asset('storage/partners/'.$partner->image)}}" class="admin-edit-image">
                        </div>
                        
                    </div>

                    <div>
                        <label class="text-gray-700" for="address">Nama</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="name" value="{{ old('name', $partner->name) }}">
                        @error('name')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                </div>

                <div>
                    <label class="text-gray-700" for="title">Title</label>
                    <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="title" value="{{ old('title', $partner->title) }}">
                    @error('title')
                        <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                            <div class="px-4 py-2">
                                <p class="text-gray-600 text-sm">{{ $message }}</p>
                            </div>
                        </div>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-700" for="address">Address</label>
                    <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="address" value="{{ old('address', $partner->address) }}">
                    @error('address')
                        <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                            <div class="px-4 py-2">
                                <p class="text-gray-600 text-sm">{{ $message }}</p>
                            </div>
                        </div>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-700" for="contact">Contact</label>
                    <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="contact" value="{{ old('contact', $partner->contact) }}">
                    @error('contact')
                        <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                            <div class="px-4 py-2">
                                <p class="text-gray-600 text-sm">{{ $message }}</p>
                            </div>
                        </div>
                    @enderror
                </div>
                
                <div>
                    <label class="text-gray-700" for="web">Web</label>
                    <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="web" value="{{ old('web', $partner->web) }}">
                    @error('web')
                        <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                            <div class="px-4 py-2">
                                <p class="text-gray-600 text-sm">{{ $message }}</p>
                            </div>
                        </div>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-700" for="fb">Facebook (link)</label>
                    <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="fb" value="{{ old('fb', $partner->fb) }}">
                    @error('fb')
                        <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                            <div class="px-4 py-2">
                                <p class="text-gray-600 text-sm">{{ $message }}</p>
                            </div>
                        </div>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-700" for="ig">Instagram (link)</label>
                    <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="ig" value="{{ old('ig', $partner->ig) }}">
                    @error('ig')
                        <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                            <div class="px-4 py-2">
                                <p class="text-gray-600 text-sm">{{ $message }}</p>
                            </div>
                        </div>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-700" for="tt">tt</label>
                    <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="tt" value="{{ old('tt', $partner->tt) }}">
                    @error('tt')
                        <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                            <div class="px-4 py-2">
                                <p class="text-gray-600 text-sm">{{ $message }}</p>
                            </div>
                        </div>
                    @enderror
                </div>

                <div>
                    <label class="text-gray-700" for="linkedin">linkedin</label>
                    <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="linkedin" value="{{ old('linkedin', $partner->linkedin) }}">
                    @error('linkedin')
                        <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                            <div class="px-4 py-2">
                                <p class="text-gray-600 text-sm">{{ $message }}</p>
                            </div>
                        </div>
                    @enderror
                </div>
                
                <div>
                    <label class="text-gray-700" for="tw">Twitter</label>
                    <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="tw" value="{{ old('tw', $partner->tw) }}">
                    @error('tw')
                        <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                            <div class="px-4 py-2">
                                <p class="text-gray-600 text-sm">{{ $message }}</p>
                            </div>
                        </div>
                    @enderror
                </div>
                <br>

            <div>
                <label class="text-gray-700" for="name">DESKRIPSI</label>
                <textarea name="description" rows="15">{{ old('description', $partner->description) }}</textarea>
                @error('description')
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
        
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.7.0/tinymce.min.js"></script>
<script>
    tinymce.init({selector:'textarea'});
</script>
@endsection