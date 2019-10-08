@auth()
    @if(request()->route()->getPrefix() == '/admin')
        @include('layouts.navbars.navs.auth')
    @else
        @include('layouts.navbars.navs.landing')
    @endif
@endauth

@guest()
    @include('layouts.navbars.navs.guest')
@endguest
