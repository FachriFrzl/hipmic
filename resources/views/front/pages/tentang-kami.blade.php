@extends('layouts.frontapp', ['title' => 'Tentang Al Lathif Islamic School'])

@section('content')
<section class="header-page" style="background-image:url({{asset('assets/img/slider2.jpg')}})">
    <div class="container">
        <h1 class="center-text fw-600 lt-2 mb-10">TENTANG AIS</h1>
    </div>
</section>
@include('front.component.profile_menu')
<section class="home-agenda mt-50 mb-50 ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 scroll-element js-scroll slide-left">
                <img src="{{asset('assets/img/ais_6.jpg')}}" alt="" class="img-fit">
            </div>
            <div class="col-md-6 home-widget-agenda scroll-element js-scroll slide-right">
                <p>AL-LATHIF ISLAMIC SCHOOL (AIS) Bandung adalah Sekolah Islam Internasional dengan kurikulum Cambridge yang memadukan antara Ilmu Pengetahuan, Teknologi dan Islam serta Program Tahfidz dengan mengedepankan pendidikan Islam dalam pembentukan karakter anak. Perpaduan kurikulum yang kami gunakan memberikan ciri khas tersendiri dalam kehidupan pembelajaran di Al-Lathif.</p>
                <p>AIS menyediakan lingkungan belajar yang menantang yang berpusat pada anak, seimbang dan bertujuan untuk mengembangkan seluruh potensi anak dengan dasar Islam yang kokoh dan mampu bersaing di dunia internasional. Dengan didukung oleh tim pendidikan, psikolog, guru (ustadz), serta dokter yang profesional dan berpengalaman dalam bidangnya. Al Lathif tumbuh dan berkembang menjadi sebuah sekolah Islam unggulan Di Kota Bandung</p>
            </div>
        </div>
    </div>
</section>
<section class="philosophy scroll-element js-scroll fade-in-bottom" style="background-image:url({{asset('assets/img/allathif_islamic_school_in_playground.png')}}">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <h2 class="fw-600">FILOSOPI</h2>
                <h4>Al Lathif Islamic School</h4>
                <h5 class="mt-50 fw-700">“Dan hendaklah takut kepada Allah, orang – orang yang meninggalkan dibelakang mereka anak–anak yang lemah (yang mereka khawatir terhadapnya). Oleh karena itu, hendaklah bertakwa kepada Allah dan mendidik anak–anaknya dengan didikan yang benar” </h5>
                <br>
                <p>(Q.S. An Nisaa:9)</p>
            </div>
        </div>
    </div>
</section>
<section class="mt-10 mb-5">
    <div class="row align-items-center">
        <div class="col-sm-5 scroll-element js-scroll slide-left">
            <img src="{{asset('assets/img/visi.png')}}" alt="">
        </div>
        <div class="col-sm-6 scroll-element js-scroll slide-right">
            <h1 class="section-title">VISI AIS</h1>
            <hr class="under_title">
            <h4 class="mt-20">Mengembangkan Kecerdasan Anak Menuju Generasi Qur’ani Yang Berakhlak Mulia Dan Berwawasan Global Untuk Memenuhi Peran Mereka Sebagai Khalifah Di Muka Bumi.</h4>
        </div>
    </div>
</section>
<section class="mt-5 mb-10">
    <div class="row align-items-center justify-content-end">
        <div class="col-sm-6 scroll-element js-scroll slide-left">
            <h1 class="section-title">MISI AIS</h1>
            <hr class="under_title">
            <ul>
                <li>Menyediakan program–program pendidikan berkualitas yang berintegrasi antara ilmu pengetahuan, teknologi, dan Islam.</li>
                <li>Membentuk generasi penghafal Al Qur’an, rajin beribadah, dan berakhlak mulia.</li>
                <li>Membentuk kepribadian unggul, dinamis, kreatif, dan berdaya saing tinggi dalam perkembangan global.</li>
                <li>Menyediakan lingkungan sekolah yang nyaman dan kondusif disertai dengan sarana prasarana yang memadai.</li>
                <li>Meningkatkan kompetensi dan layanan dari para pendidik dan tenaga kependidikan untuk menjadi mitra yang professional dalam meningkatkan kompetensi siswa.</li>
                <li>Menyediakan iklim belajar yang inovatif, kompetetif, serta kolaboratif baik di tingkat local, nasional, maupun internasional yangberwawasan lingkungan dan budaya daerah.</li>

            </ul>
        </div>
        <div class="col-sm-5 scroll-element js-scroll slide-right">
            <img src="{{asset('assets/img/misi.png')}}" alt="">
        </div>
    </div>
</section>

@endsection