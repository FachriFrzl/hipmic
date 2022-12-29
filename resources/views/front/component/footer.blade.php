<section class="footer-ads " style="background-image:url({{asset('assets/img/ais-achievement.jpg')}})">
    <div class="container">
        <div class="footer-ads-block">
            <div class="row align-items-center">
                <div class="col-sm-9 t-white">
                    <h1 class="footer-ads-title">Pendaftaran Murid Baru</h1>
                    <h4>TK | SD | SMP | SMA | Takhasus Tahfidz</h4>
                </div>
                <div class="col-sm-3"><a href="{{route('home')}}/formdaftar" class="btn btn-light"><b>DAFTAR SEKARANG</b></a></div>
            </div>
        </div>
    </div>
</section>
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 text-center t-white">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{asset('assets/img/logo_ais_retina.png')}}" alt="Al Lathif Islamic School" class="logo">
                </a>
                <p class="footer-program"><a href="">PRESCHOOL</a> | <a href="">PRIMARY SCHOOL</a> | <a href="">SECONDARY SCHOOL</a> | <a href="">TAHFIDZ TAKHASUS</a> </p>
                @include('front.component.sosmed')
            </div>
            <div class="col-sm-3 mt-20">
                <h5 class="title-footer">TAUTAN CEPAT</h5>
                <div class="footer-menu-block">
                    <a href="{{route('home')}}/pendaftaran">Pendaftaran 2023/24</a>
                    <hr>
                    <a href="{{route('home')}}/prosedur">Prosedur Pendaftaran</a>
                    <hr>
                    <a href="{{route('home')}}/preschool">Preschool (TK)</a>
                    <hr>
                    <a href="{{route('home')}}/primary-school">Primary School (SD)</a>
                    <hr>
                    <a href="{{route('home')}}/secondary-school">Secondary School (SMP - SMA)</a>
                    <hr>
                    <a href="{{route('home')}}/tahfidz">Takhasus Tahfidz Bersanad</a>
                    <hr>
                    <a href="{{route('home')}}/investasi">Investasi Pendidikan</a>
                    <hr>
                    <a href="{{route('home')}}/beasiswa">Informasi Beasiswa</a>
                    <hr>
                    <a href="{{route('home')}}/faq">FAQ</a>
                </div>
            </div>
            <div class="col-sm-3 mt-20">
                <h5 class="title-footer">KENAL LEBIH DEKAT</h5>
                <div class="footer-menu-block t-white">
                    <p class="t-yellow">Contact Us:</p>
                    <h3>(022) 8260-2738</h3>
                    <h6 class="flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
</svg>
 +62 821-1731-9090</h6>
                    <p class="flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" /></svg>
                    allathif.sch@gmail.com</p>
                    <hr>
                    <p class="t-yellow">Waktu Layanan:</p>
                    <p>Senin - Jum'at</p>
                    <p>08.00 - 15.30 WIB</p>
                </div>

            </div>
            <div class="col-sm-3 mt-20">
                <h5 class="title-footer">ALAMAT SEKOLAH</h5>
                <div class="footer-menu-block t-white">
                    <p>Jalan Cipedes Selatan No. 85, Sukajadi, Kota Bandung, <br>40162</p>
                    <a href="https://goo.gl/maps/r8zjqEmkga2bjsL29" class="btn btn-secondary btn-sm mt-20 t-green">Lihat Peta</a>
                </div>
            </div>
        </div>
    </div>
</section>
@include('front.component.mobile_menu')
