<!DOCTYPE html>
<html lang="en">
    @include('_partials.head')
    <body>
        @include('_partials.header')
        <div class="content container">
            @yield('content')
        </div>
        @include('_partials.footer')
    </body>
</html>
