<aside id="sidebar-wrapper">
    <br>
    <div class="sidebar-brand">
         <img src="../public/img/logo_white.png" alt="logo" style="width: 70px; height: auto;">
    </div>
    <br><br><br>
    <ul class="sidebar-menu">

       
        <li class="{{(request()->is('admin')) ? 'active' : ''}}"><a class="nav-link" href="{{ route('admin') }}"><i class="fas fa-user"></i><span>Admin</span></a></li>


       


     
    
       
    </ul>
</aside>