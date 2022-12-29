@extends('layouts.app', ['title' => 'Idenity - Admin'])

@section('content')

<div>
                <div class="p-6 bg-white rounded-md shadow-md">
                    <h2 class="text-lg text-gray-700 font-semibold capitalize">EDIT PROFILE</h2>
                    <hr class="mt-4">
                    <form class="mt-4" action="{{ route('admin.identity.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <label class="block">
                                <span class="text-gray-700 text-sm">Nama Lembaga</span>
                                <input type="text" name="name" value="{{ old('name', $identity->names) }}"
                                    class="form-input mt-1 block w-full rounded-md" placeholder="Nama Lengkap">
                                @error('name')
                                <div
                                    class="inline-flex max-w-sm w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                    <div class="px-4 py-2">
                                        <p class="text-gray-600 text-sm">{{ $message }}</p>
                                    </div>
                                </div>
                                @enderror
                            </label>
                        </div>
                        <div class="mt-4">
                            <label class="block">
                                <span class="text-gray-700 text-sm">Alamat Lembaga</span>
                                <input type="email" name="email" value="{{ old('email') ?? auth()->user()->email }}"
                                    class="form-input mt-1 block w-full rounded-md" placeholder="Alamat Email">
                                @error('email')
                                <div
                                    class="inline-flex max-w-sm w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                    <div class="px-4 py-2">
                                        <p class="text-gray-600 text-sm">{{ $message }}</p>
                                    </div>
                                </div>
                                @enderror
                            </label>
                        </div>
                        <div class="flex justify-start mt-4">
                            <button type="submit"
                                class="px-4 py-2 bg-gray-600 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">UPDATE
                                PROFILE</button>
                        </div>
                    </form>
                </div>

            </div>

@endsection