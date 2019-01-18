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
            <div class="wrapper-student-profile mb-5 p-0">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-12">
                            <h2 class="mb-3 mt-5 mt-lg-3">
                                Stanford University
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        @for ($i = 0; $i < 7; $i++)
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-4 grid-item">
                                <div class="wrap-new-card">
                                    <div class="wrap-new-img-card">
                                        <img src="{{ asset('img/comp.jpg') }}" alt="">
                                        <span class="label-lvl-grade">
                                                                            Master
                                                                        </span>
                                        <span class="label-scholarship">
                                                                           Scholarship <span> $450</span>
                                                                        </span>
                                        <span class="add_fav" data-toggle="tooltip" data-original-title="Favorite">
                                                                            <i class="far fa-heart"></i>
                                                                        </span>
                                    </div>
                                    <div class="wrap-new-card-text">
                                        <span class="new-card-txt">College of Business Administration Alumni Chapter Scholarship</span>

                                        <div class="row">
                                            <div class="col-md-8 col-7">

                                                <p class="mb-2 font-weight-bold h5 profession-name">Engineering</p>
                                                <a class="uni-address">Stanford Uni. Stanford, CA, USA</a>

                                            </div>
                                            <div class="col-md-4 col-5 d-flex align-items-center">
                                                <div class="d-flex justify-content-center ">
                                                    <a href="#" class="btn btn-primary btn-details btn">Details <i class="ml-2 fa fa-angle-right fa-right"></i></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .wrapper-student-profile{
        background: unset;
        margin-left: 18px;
        max-width: 1038px;
        margin-top: 15px;
    }
</style>
<footer class="footer-main">
    @include('footer.footer')
</footer>
<script src="{{ asset('js/app.js') }}"></script>