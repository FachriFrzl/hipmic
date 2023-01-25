@extends('layouts.app', ['title' => 'Logo - Admin'])

@section('content')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
    <div class="container mx-auto px-6 py-8">

        @if (session('status'))
        <div class="bg-green-500 p-3 rounded-md shadow-sm mt-3">
            @if (session('status')=='logo')
            Logo has been updated.
            @endif
        </div>
        @endif

                <div class="p-6 bg-white rounded-md shadow-md">
                    <h2 class="text-lg text-gray-700 font-semibold capitalize">EDIT LOGO</h2>
                    <hr class="mt-4">
                    <form action="{{ route('admin.logo.update', $logo->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-1 gap-6 mt-4">

                            <div class="row">
                                <div class="col-sm-7">
                                    <div>
                                        <label class="text-gray-700" for="company_logo">LOGO</label>
                                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white p-3" type="file" name="company_logo">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <img src="{{asset('storage/identities/'.$logo->company_logo)}}" class="admin-edit-image">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-7">
                                    <div>
                                        <label class="text-gray-700" for="favicon">LOGO</label>
                                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white p-3" type="file" name="favicon">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <img src="{{asset('storage/identities/'.$logo->favicon)}}" class="admin-edit-image">
                                </div>
                            </div>

                            
                        </div>

                        <div class="flex justify-start mt-4">
                            <button type="submit" class="px-4 py-2 bg-gray-600 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">UPDATE</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.7.0/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector:'textarea',
            forced_root_block: false,
        });
        
    </script>
@endsection