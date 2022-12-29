@extends('layouts.frontapp', ['title' => 'Sambutan Direktur'])

@section('content')
    <section class="header-page" style="background-image:url({{asset('assets/img/graduation-bg.jpg')}})">
        <div class="container">
            <h1 class="center-text fw-600 lt-2 mb-10">SAMBUTAN DIREKTUR</h1>
        </div>
    </section>
    @include('front.component.profile_menu')
    <section class="pages-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 text-center scroll-element js-scroll slide-left">
                    <img src="{{asset('assets/img/H-Dahawanen-SH-MH.jpg')}}" alt="H. Dahawanen, S.H., M.H. Direktur Al Lathif Islamic School"><br>
                    <h5"><b><u>H. Dahawanen, S.H., M.H.</u></b></h5>
                    <div>Direktur AIS</div>
                </div>
                <div class="col-sm-9 scroll-element js-scroll slide-right">
                    <p>السلام عليكم ورحمة الله وبركاته</p>
                    <p></p>
                    <p>Kami mengucapkan selamat datang di website resmi Al Lathif Islamic School. Semoga apa yang kami sampaikan dalam website ini dapat memberikan gambaran pendidikan di sekolah kami.</p>
                    <p>Al Lathif Islamic School merupakan sekolah Islam dengan kurikulum Internasional. Sejak usia prasekolah (TK) para siswa-siswi dibiasakan untuk dekat dan cinta terhadap Al Qur’an sebagai way of life dengan membaca dan mengafalkannya setiap hari memahami maknanya dan berusaha untuk dibiasakan mengamalkannya dalam kehidupan sehari-hari. Para siswa juga akan belajar tentang adab/akhlak, aqidah, fiqih, sirah, dan muamalah dengan materi yang disesuaikan dengan jenjang pendidikan siswa tersebut. Selain itu, para siswa akan belajar menggunakan kurikulum internasional (Cambridge) agar mereka memiliki kompetensi yang cukup untuk bersaing di dunia global</p>                    
                    <p>Kami percaya bahwa setiap siswa/siswi adalah unik dan memiliki potensi untuk berhasil. Tugas sekolah adalah menemukan dan membimbing potensi tersebut menjadi sebuah prestasi bagi kesuksesan mereka. Di AIS, setiap siswa/siswi yang masuk akan mendapatkan tes psikologi untuk mengetahui bakat dan potensi mereka. Hasil dari tes ini akan menjadi acuan dalam membina prestasi mereka baik dalam akademik ataupun non-akademik. Yang unik di sekolah kami adalah adanya program Master Day Class, yaitu satu hari dalam satu minggu siswa boleh memilih mata pelajaran sesuai dengan minat dan potensinya. Ini membuat para siswa MERDEKA untuk belajar dengan semaksimal mungkin secara menyenangkan</p>
                    <p>Dengan mengharap ridha Allah Swt dan didukung oleh para guru dan staf yang kompeten baik dari dalam dan luar negeri serta dukungan dari orang tua murid, masyarakat, dan juga pemerintah kami berharap para lulusan Al Lathif ini menjadi generasi penerus yang unggul, hafidz Qur'an, berakhlak mulia, dan mampu bersaing di dunia global</p>
                    <p>Terima kasih atas kunjungan Ayah/Bunda di website ini. Semoga Allah Swt memberikan kekuatan dan kecukupan kepada kita dalam mendidik anak-anak kita dan menjadikan anak-anak kita anak yang solih/solihah yang membanggakan orang tuanya baik di dunia dan akhirat.</p>
                    <p></p>
                    <p>والسلام عليكم ورحمة الله وبركاته</p>

                </div>
            </div>
        </div>
    </section>

@endsection