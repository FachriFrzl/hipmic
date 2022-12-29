@extends('layouts.app', ['title' => 'Idenity - Admin'])

@section('content')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
    <div class="container mx-auto px-6 py-8">

        @if (session('status'))
        <div class="bg-green-500 p-3 rounded-md shadow-sm mt-3">
            @if (session('status')=='name')
            Name has been updated.
            @endif
            @if (session('status')=='description')
            Description has been updated.
            @endif
            @if (session('status')=='address')
            Address hes been disabled.
            @endif
            @if (session('status')=='gmap')
            Google Map has been enabled.
            @endif
            @if (session('status')=='phone')
            Phone has been enabled.
            @endif
            @if (session('status')=='email')
            Email has been enabled.
            @endif
            @if (session('status')=='fb')
            Facebook ID has been enabled.
            @endif
            @if (session('status')=='ig')
            Instagram ID has been enabled.
            @endif
            @if (session('status')=='tt')
            Tiktok ID has been enabled.
            @endif
            @if (session('status')=='yt')
            Youtube ID has been enabled.
            @endif
            @if (session('status')=='logo')
            Logo has been enabled.
            @endif
            @if (session('status')=='favicon')
            Favicon has been enabled.
            @endif
        </div>
        @endif

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">

            

            <div>
                <div class="p-6 bg-white rounded-md shadow-md">
                    <h2 class="text-lg text-gray-700 font-semibold capitalize">EDIT PROFILE</h2>
                    <hr class="mt-4">
                    <form class="mt-4" action="{{ route('admin.identity.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <label class="block">
                                <span class="text-gray-700 text-sm">Nama Lengkap</span>
                                <input type="text" name="name" value="{{ old('name') ?? auth()->user()->name }}"
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
                                <span class="text-gray-700 text-sm">Alamat Email</span>
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

        </div>

    </div>
</main>
@endsection