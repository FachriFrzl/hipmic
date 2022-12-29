@extends('layouts.frontapp', ['title' => 'Home'])

@section('content')

@include('front.component.slider')

<section class="home-visi">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </h4>
            </div>
            <div class="col-sm-6">
                <img src="{{asset('/assets/img/about_hipmi.jpg')}}" alt="" class="thumbnail">
            </div>
        </div>
    </div>
    <div class="container mt-100">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 mb-20">
                        <div class="row">
                            <div class="col-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-15 h-15">  <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" /></svg>
                            </div>
                            <div class="col-8">
                                <h1 class=""><span class="counter counter-number" data-speed="2000" data-to="270">0</span></h1>
                                <h6 class="fw-600">YOUTH-LED BUSINESSES STARTED</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-20">
                        <div class="row">
                            <div class="col-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-15 h-15">  <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" /></svg>
                            </div>
                            <div class="col-8">
                                <h1 class="counter_number">
                                <span class="counter">562</span>
                                </h1>
                                <h6 class="fw-600">EXISTING BUSINESSES STRENGTHENED OR SUPPORTED TO GROW</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-20 scroll-element js-scroll slide-left">
                        <div class="row">
                            <div class="col-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-15 h-15">  <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" /></svg>
                            </div>
                            <div class="col-8">
                                <h1 class="counter_number">
                                <?php echo number_format("1000000");?>
                                </h1>
                                <h6 class="fw-600">YOUNG PEOPLE PROVIDED WITH ENTREPRENEURSHIP TRAINING</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-20 scroll-element js-scroll slide-right">
                        <div class="row">
                            <div class="col-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-15 h-15">  <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" /></svg>
                            </div>
                            <div class="col-8">
                                <h1 class="counter_number">
                                <?php echo number_format("1000000");?>
                                </h1>
                                <h6 class="fw-600">YOUNG PEOPLE SUPPORTED</h6>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-level text-center">
    <div class="row justify-content-md-center scroll-element js-scroll fade-in-bottom">
        <div class="col-md-2 col-sm-6 level-school" style="background-image:url({{asset('/assets/img/ais-preschool.jpg')}});">
            <a href="{{route('home')}}/preschool">
                <div class="level-title">
                    <h5>Preschool</h5>
                    <div>Usia 3 - 6 tahun (TK)</div>
                </div>
            </a>
        </div>
        <div class="col-md-2 col-sm-6 level-school" style="background-image:url({{asset('/assets/img/ais-primary.jpg')}});">
            <a href="{{route('home')}}/primary-school">
                <div class="level-title">
                    <h5>Primary School</h5>
                    <div>Usia 6 - 13 tahun (SD)</div>
                </div>
            </a>
        </div>
        <div class="col-md-2 col-sm-6 level-school" style="background-image:url({{asset('/assets/img/ais_upper_secondary_school.jpg')}});">
            <a href="{{route('home')}}/secondary-school">
                <div class="level-title">
                    <h5>Secondary School</h5>
                    <div>(SMP-SMA)</div>
                </div>
            </a>
            
        </div>
        <div class="col-md-2 col-sm-6 level-school" style="background-image:url({{asset('/assets/img/allathif-tahfidz-takhasus.jpg')}});">
            <a href="{{route('home')}}/tahfidz">
                <div class="level-title">
                    <h5>Hafidz Takhasus</h5>
                    <div>Mulai usia 12 tahun</div>
                </div>
            </a>
        </div>
    </div>
</section>
<section class="home-countdown">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h5>Hitung mundur menuju</h5>
                <h1 class="section-title-light">PENUTUPAN PENDAFTARAN<br>GELOMBANG I</h1>
                <p>Alhahamdulillah Pendaftaran Murid Baru Al Lathif Islamic School Gelombang Pertama sedang berlangsung dan akan ditutup pada tanggal 20 Desember 2022</p>
                <a href="{{route('home')}}/pendaftaran" class="btn btn-salaam">Pendaftaran 2023/24</a>
            </div>
            <div class="col-sm-4 align-self-center">
                <div class="count-down">
                    <div id="clockdiv">
                        <div class="row text-center">
                            <div class="col-sm-6 mb-20">
                                <div class="count-round">
                                    <span class="days"></span><span></span>
                                    <div class="smalltext" id="smalltext-sm">hari</div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-20">
                                <div class="count-round">
                                    <span class="hours"></span><span></span>
                                    <div class="smalltext" id="smalltext-sm">jam</div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-20">
                                <div class="count-round">
                                    <span class="minutes"></span><span></span>
                                    <div class="smalltext" id="smalltext-sm">menit</div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-20">
                                <div class="count-round">
                                    <span class="seconds"></span><span></span>
                                    <div class="smalltext" id="smalltext-sm">detik</div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
        </div>
    </div>
</section>
<section class="home-about-sec" style="background-image:url({{asset('/assets/img/al-lathif-islamic-school-bandung-syaikh-palestina.jpg')}});">
    <div class="home-about t-white" >
        <div class="row align-items-center">
            <div class="col-sm-7 home-about-left scroll-element js-scroll slide-left">
                <div class="container">
                    <h5>Tentang Kami</h5>
                    <h2>AL LATHIF ISLAMIC SCHOOL</h2>
                    <p>AL-LATHIF ISLAMIC SCHOOL (AIS) Bandung adalah Sekolah Islam Internasional dengan kurikulum Cambridge yang memadukan antara Ilmu Pengetahuan, Teknologi dan Islam serta Program Tahfidz dengan mengedepankan pendidikan Islam dalam pembentukan karakter anak. Perpaduan kurikulum yang kami gunakan memberikan ciri khas tersendiri dalam kehidupan pembelajaran di Al-Lathif.</p>
                    <a href="{{route('home')}}/tentang-kami" class="btn btn-salaam">selengkapnya >></a>
                </div>
            </div>
            <div class="col-sm-5 youtube-popup">
            <!-- Button trigger modal -->
                <a class="btn-wrap" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <div class="play-btn">
                    <div class="play-icon"></div>
                    </div>
                <div class="play-btn-pulse"></div>
                </a>
                <h5 class="watch-video">Watch Our Video</h5>
            <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <iframe id="ais" width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/zF6SwZ0k0Eg" title="YouTube video player" frameborder="5" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; " allowfullscreen></iframe>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-why">
    @include('front.component.unggulan')
</section>
@include('front.component.prestasi')
<section class="home-agenda">
    <div class="container">
        <div class="row">
            <div class="col-md-6 home-col-border scroll-element js-scroll slide-left">
                <div class="row row-flex ">
                    <div class="col-sm-6 home-col-text">
                        <h4>Belajar Al Qur'an Bersama Syaikh Palestina</h4><hr>
                        <p>Al Lathif Islamic School bekerjasama dengan Dar Al Qur'an Wa Sunnah, Gaza, Palestina untuk pembelajaran Tahfidz dan Sanadisasi bacaan Al Quran</p>
                    </div>
                    <div class="col-sm-6 home-col-img" style="background-image:url({{asset('assets/img/SYaikh-Ahmad-1.jpg')}})"></div>
                </div>
                <div class="row row-flex">
                    <div class="col-sm-6 home-col-img" style="background-image:url({{asset('assets/img/al-lathif-islamic-school-international-teacher1-1.jpg')}})"></div>
                    <div class="col-sm-6 home-col-text">
                        <h4>Guru Internasional</h4><hr>
                        <p>Para murid Al Lathif Islamic School belajar bersama guru dan murid dari mancanegara, sehingga mereka terbiasa untuk bersosialisasi secara global.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 home-widget-agenda scroll-element js-scroll slide-right">
                <h4 class="widget_title">Kegiatan Sekolah</h4>
                @foreach ($agendas as $agenda)
                <div class="row agenda-list">
                    <div class="col-3 col-agenda-list-left">
                        <div class="date-left">{{date('d', strtotime($agenda->start_date))}}</div>
                        <div>{{ date('M Y', strtotime($agenda->start_date)) }}</div>
                    </div>
                    <div class="col-9 col-agenda-list-right">
                        <h5><b>{{$agenda->title}}</b></h5>
                        <div class="agendas-time">
                            Mulai: <b>{{date('l, d M Y', strtotime($agenda->start_date))}}</b> pukul <b>{{ date('H.i A', strtotime($agenda->end_time)) }}</b><br>
                            Sampai: <b>{{date('l, d M Y', strtotime($agenda->end_date))}}</b> pukul <b>{{ date('H.i A', strtotime($agenda->end_time)) }}</b><br>
                            Lokasi: <b>{{$agenda->location}}</b>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@include('front.component.testimony')
<section class="home-news text-center">
    <div class="container">
        <h5 class="t-white">Berita & Artikel</h5>
        <h2 class="home-news-title mb-50">AL LATHIF UPDATE</h2>
        <div class="row col-news">
            @foreach($posts as $post)
            <div class="col-md-3 col-sm-6 box-home-news scroll-element js-scroll fade-in-bottom">
                
                    <img src="{{asset('/storage/posts/'.$post->image)}}" alt="" class="img-news">
                    <p class="mt-15">{{date('l, d F Y', strtotime($post->updated_at))}}</p>
                    <a href="{{route('post.post.show',['post'=>$post])}}"><h5 class="mt-15"><b>{{$post->title}}</b></h5></a>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection