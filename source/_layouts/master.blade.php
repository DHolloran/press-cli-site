<!DOCTYPE html>
<html lang="en">
    @include('_partials.head')
    <body>
        @include('_partials.header')
        <div class="content container">
            @if(isset($title))
            <h1 class="page-header">{{ $title }}</h1>
            @endif
            <div class="content-wrap">
                @yield('content')
            </div>
        </div>
        @include('_partials.footer')
    </body>
</html>
