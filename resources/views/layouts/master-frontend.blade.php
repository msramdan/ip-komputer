<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    @include('layouts._frontEnd.meta')
    <title>Toko Online</title>
    {{-- style --}}
    @include('layouts._frontEnd.style')

</head>

<body>
    {{-- header --}}
    @include('layouts._frontEnd.header')
    @yield('content')
    {{-- footer --}}
    @include('layouts._frontEnd.footer')
    {{-- script --}}
    @include('layouts._frontEnd.script')
</body>

</html>
