@extends('layouts.app', ['title' => 'Logo - Admin'])

@section('content')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300 mt-4">
    <div class="container mx-auto px-6 py-8">
    @foreach($logos as $logo)
    <div class="float-end flex">
            <a href="{{ route('admin.logo.edit', $logo->id) }}" class="bg-indigo-600 px-2 py-2 mx-2 rounded shadow-sm text-xs text-white focus:outline-none"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">  <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" /></svg></a>
        </div>
        <div class="mt-4 mb-4">
            <h3>Logo</h3>
            <img src="{{asset('storage/identities/'.$logo->company_logo)}}" class="thumbnails">
            <hr>
            <h4>Favicon</h4>
            <img src="{{asset('storage/identities/'.$logo->favicon)}}" class="thumbnails">
        </div>
        @endforeach

    </main>
@endsection