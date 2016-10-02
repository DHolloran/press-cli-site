<!DOCTYPE html>
<html lang="en">
    @include('_partials.head')
    <body>
        @include('_partials.header')
        <div class="content container">
            <h1 class="page-header">{{ $title }}</h1>
            <div class="content-wrap">
                @yield('content')
            </div>
        </div>
        @include('_partials.footer')
    </body>
</html>
