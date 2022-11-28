<aside id="sidebar-wrapper">
	<br>
	<div class="sidebar-brand">
		<img src="public/img/logo_white.png" alt="logo" style="width: 70px; height: auto;">
	</div>
	<br><br><br>
	<ul class="sidebar-menu">


		<li class="{{(request()->is('admin')) ? 'active' : ''}}"><a class="nav-link" href="{{ route('index') }}"><i class="fas fa-home"></i><span>Dashboard</span></a></li>

		<li class="{{(request()->is('jasa')) ? 'active' : ''}}"><a class="nav-link" href="{{ route('jasa') }}"><i class="fas fa-solid fa-briefcase"></i><span>jasa</span></a></li>

		<li class="">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-file-contract"></i>
                <span>Informasi Perusahaan</span></a>
            <ul class="dropdown-menu">
            	<li class="{{(request()->is('beranda')) ? 'active' : ''}}"><a class="nav-link" href="{{ route('beranda') }}"><i class="fas fa-circle"></i><span>Beranda</span></a></li>

            	<li class="{{(request()->is('about')) ? 'active' : ''}}"><a class="nav-link" href="{{ route('about') }}"><i class="fas fa-circle"></i><span>About</span></a></li>

            	<li class="{{(request()->is('visi_misi')) ? 'active' : ''}}"><a class="nav-link" href="{{ route('visi_misi') }}"><i class="fas fa-circle"></i><span>Visi Misi</span></a></li>
            	
                <li class="{{(request()->is('kontak')) ? 'active' : ''}}"><a class="nav-link" href="{{ route('kontak') }}"><i class="fas fa-circle"></i><span>Kontak</span></a></li>

                <li class="{{(request()->is('carousel')) ? 'active' : ''}}"><a class="nav-link" href="{{ route('carousel') }}"><i class="fas fa-circle"></i><span>Carousel</span></a></li>

                <li class="{{(request()->is('kerjasama')) ? 'active' : ''}}"><a class="nav-link" href="{{ route('kerjasama') }}"><i class="fas fa-circle"></i><span>Kerjasama</span></a></li>

                <li class="{{(request()->is('portofolio')) ? 'active' : ''}}"><a class="nav-link" href="{{ route('portofolio') }}"><i class="fas fa-circle"></i><span>Portofolio</span></a></li>

               
            </ul>
        </li>

        <li class="{{(request()->is('team')) ? 'active' : ''}}"><a class="nav-link" href="{{ route('team') }}"><i class="fas fa-users"></i><span>Team</span></a></li>



		<!-- <li class="{{(request()->is('visi_misi')) ? 'active' : ''}}"><a class="nav-link" href="{{ route('visi_misi') }}"><i class="fas fa-file-contract"></i><span>Visi Misi</span></a></li> -->

		<!-- <li class="{{(request()->is('kontak')) ? 'active' : ''}}"><a class="nav-link" href="{{ route('kontak') }}"><i class="fas fas fa-book"></i><span>Kontak</span></a></li> -->

		<li class="{{(request()->is('logout')) ? 'active' : ''}}"><a class="nav-link" href="{{ route('logout') }}" style="color: red;"><i class="fas fa-sign-out-alt"></i></i><span>Logout</span></a></li>

	</ul>
</aside>