<head>
    @include('head.head')
</head>
<header class="nav-main" id="top">
    <div class="container">
        @include('header.header')
    </div>
</header>
<section>
    <div class="d-flex">
        @include('representative.sidebar.sidebar')
    </div>
</section>

<footer class="footer-main">
    @include('footer.footer')
</footer>
<script src="{{ asset('js/app.js') }}"></script>