<div class="main-panel">
    @include('layout.navbar')
    <div class="content">
        <div class="page-inner">
            <div class="page-category">

                @yield('content')

            </div>
        </div>
    </div>
    @include('layout.footer')
</div>
