<header>
  <nav class="top-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-6 d-none d-lg-block">

        </div>
        <div class="col-md-6">
          <div class="top-social-media">
            @include('front.component.sosmed')
          </div>
        </div>
      </div>
    </div>
  </nav>





  <nav class="nav navbar navbar-expand-lg navbar-dark " id="myNavbar">
    <div class="container">
      <a class="navbar-brand" href="{{route('home')}}">
        <img src="{{asset('assets/img/logo_hipmi_cimahi.png')}}" alt="Al Lathif Islamic School" class="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profil
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('home')}}/sambutan">Sambutan Direktur</a></li>
              <li><a class="dropdown-item" href="{{route('home')}}/tentang-kami">Tentang Al Lathif</a></li>
              <li><a class="dropdown-item" href="{{route('home')}}/prestasi">Prestasi</a></li>
              <li><a class="dropdown-item" href="{{route('home')}}/akreditasi">Akreditas</a></li>
              <li><a class="dropdown-item" href="{{route('home')}}/fasilitas">Fasilitas</a></li>
              <li><a class="dropdown-item" href="{{route('home')}}/testimony">Kata Mereka</a></li>
              <li><a class="dropdown-item" href="{{route('home')}}/karir">Karir</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Program
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('home')}}/preschool">Preschool (TK)</a></li>
              <li><a class="dropdown-item" href="{{route('home')}}/primary-school">Primary School (SD)</a></li>
              <li><a class="dropdown-item" href="{{route('home')}}/secondary-school">Secondary School (SMP-SMA)</a></li>
              <li><a class="dropdown-item" href="{{route('home')}}/tahfidz">Tahfdiz Takhasus</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pendaftaran
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('home')}}/pendaftaran">Pendaftaran 2023/24</a></li>
              <li><a class="dropdown-item" href="{{route('home')}}/prosedur">Prosedur Pendaftaran</a></li>
              <li><a class="dropdown-item" href="{{route('home')}}/investasi">Investasi Pendidikan</a></li>
              <li><a class="dropdown-item" href="{{route('home')}}/tanggal-penting">Daftar Tanggal Penting</a></li>
              <li><a class="dropdown-item" href="{{route('home')}}/beasiswa">Informasi Beasiswa</a></li>
              <li><a class="dropdown-item" href="{{route('home')}}/faq">FAQ</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              AIS Update
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('home')}}/post">Berita & Artikel</a></li>
              <li><a class="dropdown-item" href="{{route('home')}}/agenda">Event</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('home')}}/contact">Kontak</a> 
          </li>
        </ul>
      </div>
    </div>
  </nav>

  
</header>