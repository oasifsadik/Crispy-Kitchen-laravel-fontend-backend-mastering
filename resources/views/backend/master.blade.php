@include('backend.layout.header')
@include('backend.layout.navbar')

<div id="layoutSidenav">
    @include('backend.layout.sidebar')
    <div id="layoutSidenav_content">
        <main>
            @yield('back-content')
        </main>
        @include('backend.layout.copyright')
    </div>
</div>

@include('backend.layout.footer')
