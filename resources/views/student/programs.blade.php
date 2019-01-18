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
        @include('student.sidebar.student')
        <div class="wrapper-student">
            <form action="">
                <div class="wrapper-student-tabs">
                    <ul class="nav nav-pills nav-tabs-programs" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill"
                               href="#programs-scholarship" role="tab"
                               aria-controls="programs-scholarship" aria-selected="true">Scholarship
                                Eligible</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill"
                               href="#programs-applied" role="tab" aria-controls="programs-applied"
                               aria-selected="false">Scholarship Applied</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill"
                               href="#programs-offered" role="tab" aria-controls="programs-offered"
                               aria-selected="false">Scholarship Offered</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill"
                               href="#programs-rejected" role="tab" aria-controls="programs-rejected"
                               aria-selected="false">Scholarship Rejected</a>
                        </li>
                    </ul>
                </div>
                <div class="wrapper-student-programs">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="tabs-programs">

                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="programs-scholarship" role="tabpanel"
                                             aria-labelledby="pills-home-tab">
                                            <div class="row">
                                                @for ($i = 0; $i < 5; $i++)
                                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-4 grid-item">
                                                        <div class="wrap-new-card">
                                                            <div class="wrap-new-img-card">
                                                                <img src="{{ asset('img/build1.jpg') }}" alt="">
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
                                        <div class="tab-pane fade" id="programs-applied" role="tabpanel"
                                             aria-labelledby="pills-profile-tab">Applied
                                        </div>
                                        <div class="tab-pane fade" id="programs-offered" role="tabpanel"
                                             aria-labelledby="pills-contact-tab">Offered
                                        </div>
                                        <div class="tab-pane fade" id="programs-rejected" role="tabpanel"
                                             aria-labelledby="pills-contact-tab">Rejected
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<style>
    .wrapper-student-programs{
        padding: unset;
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