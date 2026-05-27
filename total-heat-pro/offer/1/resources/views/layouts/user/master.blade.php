@include('layouts.user.header')

<div class="main-wrapper">

    @include('layouts.user.sidebar')

    <div class="content-area">
        @yield('content')
    </div>

</div>

@include('layouts.user.footer')
