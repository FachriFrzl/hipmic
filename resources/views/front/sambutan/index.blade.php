@extends('layouts.frontapp', ['title' => 'Agenda List'])

@section('content')
<section class="header-page" style="background-image:url({{asset('/assets/img/allathif_news_background.jpg')}});">
    <div class="container">
        <h1 class="center-text fw-600 lt-2 mb-10">SAMBUTAN</h1>
    </div>
</section>
<div class="container">
        @include('front.component.profile_menu')
        @foreach($sambutans as $sambutan)
        <div class="row mt-50">
            <div class="col-md-4 ">
                <img src="{{asset('storage/identities/'.$sambutan->image)}}" alt="" class="thumbnails profile-image img-fit">
            </div>
            <div class="col-md-8"></div>
        </div>
        @endforeach

</div>

@endsection