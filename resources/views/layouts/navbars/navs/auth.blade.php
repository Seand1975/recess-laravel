<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"> {{ $navName }} </a>
        <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="nav navbar-nav mr-auto">
                
            </ul>
            <ul class="navbar-nav   d-flex align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href=" {{route('profile.edit') }} ">
                        <span class="no-icon">{{ __('Account') }}</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <form class="align-items-center justify-content-center" id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a class="border border-warning text-danger rounded p-2 bg-white" href="{{ route('home') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="nc-icon nc-button-power"></i> {{ __('Log Out') }} </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>