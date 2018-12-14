<head>
    @include('head.head')
</head>
<header class="nav-main" id="top">
    <div class="container">
        @include('header.header')
    </div>
</header>
<section class="wrap-main-mid">
    <div class="d-flex">
        @include('representative.sidebar.sidebar')
        <div class="wrap-representative-inside">
            <div class="wrapper-student-profile mb-5">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-12">
                            <h2 class="mb-3">
                                Stanford University
                            </h2>
                        </div>
                    </div>
                    @for ($i = 0; $i < 4; $i++)
                        <div class="row py-3">
                            <div class="col-md-4 col-12">
                                <div class="wrap-img-programs">
                                    <img src="https://cdn.the-scientist.com/assets/articleNo/64292/iImg/26721/a6aab0fc-06c7-4bf9-8d4e-d52de026550e-uni-640.jpg"
                                         alt="univer" class="w-100">
                                </div>
                            </div>
                            <div class="col-md-8 col-12">

                                <div class="d-flex justify-content-between mb-1">
                                    <div>
                                        <span class="h5">Computer Science</span>
                                    </div>
                                    <div>
                                        <div class="d-flex justify-content-evenly mb-3">
                                            <div class="cursor-pointer">
                                                <i class="fas fa-pencil-alt"></i>
                                            </div>
                                            <div class="cursor-pointer">
                                                <i class="fas fa-times-circle"></i>
                                            </div>
                                        </div>

                                        <span class="h5 mr-5">40 000 $/per year</span>
                                    </div>
                                </div>
                                <div class="mb-5">
                                                                <span class="d-block font-weight-bold">
                                                                   Engineering
                                                                </span>
                                </div>

                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer-main">
    @include('footer.footer')
</footer>
<script src="{{ asset('js/app.js') }}"></script>