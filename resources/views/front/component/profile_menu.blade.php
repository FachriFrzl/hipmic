<section class="profil-menu">
    <div class="container">
        <ul id="menu-profil" class="profil-menu-ul">
            <li class="{{ (request()->is('sambutan')) ? 'current-menu-item' : '' }}">
                <a href="{{route('home')}}/sambutan">Sambutan</a>
            </li>
            <li class="{{ (request()->is('tentang-kami')) ? 'current-menu-item' : '' }}">
                <a href="{{route('home')}}/tentang-kami">Tentang Kami</a>
            </li>
            <li class="{{ (request()->is('prestasi')) ? 'current-menu-item' : '' }}">
                <a href="{{route('home')}}/prestasi">Prestasi</a>
            </li>
            <li class="{{ (request()->is('akreditasi')) ? 'current-menu-item' : '' }}">
                <a href="{{route('home')}}/akreditasi">Akreditasi</a>
            </li>
            <li class="{{ (request()->is('fasilitas')) ? 'current-menu-item' : '' }}">
                <a href="{{route('home')}}/fasilitas">Fasilitas</a>
            </li>
            <li class="{{ (request()->is('testimony')) ? 'current-menu-item' : '' }}">
                <a href="{{route('home')}}/testimony">Kata Mereka</a>
            </li>
            <li class="{{ (request()->is('karir')) ? 'current-menu-item' : '' }}">
                <a href="{{route('home')}}/karir">Karir</a>
            </li>
        </ul>
    </div>
</section>