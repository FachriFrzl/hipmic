@extends('layouts.app', ['title' => 'Sambutan - Admin'])

@section('content')
<main class="flex-1 overflow-x-hidden overflow-y-auto">
    <div class="container mx-auto px-6 py-8">
    @foreach ($sambutans as $sambutan)
        <div class="flex justify-between">
            <h2 class="t-purplee">Sambutan</h2><a href="{{ route('admin.sambutan.edit', $sambutan->id) }}" class="bg-indigo-600 px-2 py-2 rounded shadow-sm text-xs text-white focus:outline-none"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">  <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" /></svg></a>
        </div>
        <hr>
        <div class="row mt-4 align-items-center text-center">
            <div class="col-md-4">
                <img src="{{asset('storage/identities/'.$sambutan->image)}}" alt="" class="thumbnails profile-image">
                <h4 class="text-gray-500 ">{{ $sambutan->name}}</h4>
                <p>{{$sambutan->title}}</p>
            </div>
            <div class="col-md-8">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{$sambutan->video}}" title="Sambutan" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    @endforeach
</main>

@endsection