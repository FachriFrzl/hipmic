@extends('layouts.app', ['title' => 'About Us - Admin'])

@section('content')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
    <div class="container mx-auto px-6 py-8">
        <div class="row">
        @foreach ($abouts as $about)
          <div class="col-md-7">
            <h4 class="text-grey">{{$about->subtitle}}</h4>
            <h1 class="big mb-50">{{$about->title}}</h1>
            {!! $about->description !!}
            <hr>
            {!! $about->content !!}
          </div>
          <div class="col-md-5">
            <img src="{{asset('storage/identities/'.$about->image)}}" alt="{{$about->title}}" class="thubnails">
          </div>
          <div>
          <a href="{{ route('admin.about.edit', $about->id) }}" class="btn flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">  <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" /></svg><span>EDIT</span></a>
        </div>
        @endforeach 
        </div>
    </div>
</main>

@endsection