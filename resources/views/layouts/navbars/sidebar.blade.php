<div class="sidebar" data-color="black" data-image="{{ asset('light-bootstrap/img/full-screen-image-2.jpg')}}">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper bg-dark">
        <div class="logo">
            <a href="{{route('home')}}" class="p-1">
                <img class="bg-light rounded border border-dark border-5 p-1" width="40px" src="{{ asset('favicon.png')}}" alt="Back Home" />
            </a>
        </div>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item @if($activePage == 'search') active @endif">
                <a class="nav-link" href="{{route('home')}}">
                    <i class="nc-icon nc-app"></i>
                    <p>{{ __("Home") }}</p>
                </a>
            </li>
           
            <li class="nav-item @if($activePage == 'user') active @endif">
                <a class="nav-link" href="{{route('profile.edit')}}">
                    <i class="nc-icon nc-badge"></i>
                    <p>{{ __("User Profile") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'dashboard') active @endif">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="nc-icon nc-chart-pie-36"></i>
                    <p>{{ __("Admin Dashboard") }}</p>
                </a>
            </li>
            
            <li class="nav-item @if($activePage == 'maps') active @endif">
                <a class="nav-link" href="{{route('page.index', 'maps')}}">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>{{ __("Maps") }}</p>
                </a>
            </li>
            
            <li class="nav-item @if($activePage == 'typography') active @endif">
                <a class="nav-link" href="{{route('page.index', 'typography')}}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>{{ __("Typography") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'icons') active @endif">
                <a class="nav-link" href="{{route('page.index', 'icons')}}">
                    <i class="nc-icon nc-atom"></i>
                    <p>{{ __("Icons") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'notifications') active @endif">
                <a class="nav-link" href="{{route('page.index', 'notifications')}}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>{{ __("Notifications") }}</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active bg-danger" href="{{route('page.index', 'upgrade')}}">
                    <i class="nc-icon nc-alien-33"></i>
                    <p>{{ __("Upgrade to PRO") }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
