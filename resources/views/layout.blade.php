<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('head.head')


</head>
<body>
<header class="nav-main" id="top">
<div class="container">
        @include('header.header')
</div>
</header>
<section>
    @include('main_page.index')
</section>

<footer class="footer-main">
    @include('footer.footer')
</footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
