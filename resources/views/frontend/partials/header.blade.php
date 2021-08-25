<div class="col-md-12" class="header" id="header">
    <div id="header-left">
        <a href="{{ url("/") }}">
            <img id="header-logo-0" src="{{ asset("/storage/site_logo/logo-0.png") }}" alt="logo">
            <img id="header-logo-1" src="{{ asset("/storage/site_logo/logo-dark.png") }}" alt="logo">
        </a>
    </div>      
    <div id="header-right">
        @guest
            @if (Route::has('login'))
                <a href="{{ route("login") }}" style="color: brown; font-weight: bold">{{ __("Login") }}</a>
            @endif
        
            @if (Route::has('register'))
                <a href="{{ route('register') }}" style="color: brown">{{ __('Register') }}</a>
            @endif
        @else
            <div class="btn-group">
                <button type="button" class="btn dropdown-toggle btn-sm" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false" style="background: chocolate; color: #fafad2">
                    {{ Auth::user()->User_FullName }}
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#history" style="color: black;"><i class="fas fa-history"></i> History</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                            style="color: black;"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                    </a>
                </div>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @endguest
    </div>
</div>