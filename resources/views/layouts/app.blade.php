<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.partials.head')
<body>

<section class="bg-dark sticky-top">
    @include('layouts.header')
    @yield('supporting.navbar')
</section>
<section>
    <main class="py-4 h-100">
        @yield('content')
    </main>
</section>

<section id="footer">
    @include('layouts.partials.footer')
</section>
</body>
</html>
