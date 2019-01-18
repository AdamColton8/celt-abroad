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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="computer-scien">
                            <h2 class="mb-2 ml-4 mt-4">
                                Computer Science
                            </h2>
                        </div>

                    </div>
                </div>
            </div>
            <div class="mb-5">
                @for ($i = 0; $i < 4; $i++)
                    <div class="bg-white ml-lg-4 mb-3 py-3 px-3">
                        <div class="container-fluid">
                            <div class="row ">
                                <div class="col-xl-3 col-md-12 col-sm-12 col-lg-12 col-12 border-right">
                                    <div class="application-card">
                                        <div>
                                            <div class="section-info">
                                                <div class="img-wrap">
                                                    <img src="{{ asset('img/students/profile-img.jpg') }}" alt="">
                                                </div>
                                                <div class="text-wrap">
                                        <span>
                                            Mehmet Mustafaogly
                                        </span>
                                                </div>
                                            </div>
                                            <div class="section-sub-info">
                                                <div class="title-info__wrap">
                                                    <div class="title">
                                                        Title
                                                    </div>
                                                    <div class="info">
                                                        Bachelor
                                                    </div>
                                                </div>
                                                <div class="title-info__wrap">
                                                    <div class="title">
                                                        E-mail*
                                                    </div>
                                                    <div>
                                                        mail@gmail.com
                                                    </div>
                                                </div>
                                                <div class="title-info__wrap">
                                                    <div class="title">
                                                        Phone*
                                                    </div>
                                                    <div>
                                                        +710906270270
                                                    </div>
                                                </div>
                                                <div class="title-info__wrap">
                                                    <div class="title">
                                                        Country
                                                    </div>
                                                    <div>
                                                        Turkey
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 col-sm-6 col-lg-6 col-6  border-right">
                                    <div class="d-flex justify-content-center flex-column align-items-center">
                                        <div class="mb-1">
                                            <div class="font-weight-bold mb-1">English Exam Type</div>
                                            <div class="text-dark-gray">
                                                IELTS
                                            </div>
                                        </div>
                                        <div class="mb-1">
                                            <div class="font-weight-bold mb-1">English Exam Date</div>
                                            <div class="text-dark-gray">
                                                2018-09-12
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-weight-bold mb-1">Input Exact Scores</div>
                                            <div class="text-dark-gray">
                                                <div>
                                                    <span class="exact-scores">Listening</span> <span>80%</span>
                                                </div>
                                                <div>
                                                    <span class="exact-scores">Reading</span> <span>96%</span>
                                                </div>
                                                <div>
                                                    <span class="exact-scores">Writing</span> <span>78%</span>
                                                </div>
                                                <div>
                                                    <span class="exact-scores">Speaking</span> <span>92%</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 col-sm-6 col-lg-6 col-6  border-right">
                                    <div class="sat-wrap">
                                        <div>
                                            <div class="font-weight-bold mb-1">English Type</div>
                                            <div class="text-dark-gray">
                                                SAT
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-weight-bold mb-1">SAT Exam Date</div>
                                            <div class="text-dark-gray">
                                                2018-09-12
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-weight-bold mb-1">Verbal</div>
                                            <div class="text-dark-gray">
                                                <div>
                                                    <span class="exact-scores">Score</span> <span>80%</span>
                                                </div>
                                                <div>
                                                    <span class="exact-scores">Rank</span> <span>80%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-weight-bold mb-1">Overal Score</div>
                                            <div class="text-dark-gray">
                                                <div>
                                                    <span class="exact-scores">Score</span> <span>80%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-3 col-md-12 col-sm-12 col-lg-12 col-12  border-right">
                                    <div class="sat-wrap mb-4">
                                        <div>
                                            <div class="font-weight-bold mb-2 mt-2">Quantitative</div>
                                            <div class="text-dark-gray">
                                                <div>
                                                    <span class="exact-scores">Score</span> <span>80%</span>
                                                </div>
                                                <div>
                                                    <span class="exact-scores">Rank</span> <span>80%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="font-weight-bold mb-2 mt-2">Writing</div>
                                            <div class="text-dark-gray">
                                                <div>
                                                    <span class="exact-scores">Score</span> <span>80%</span>
                                                </div>
                                                <div>
                                                    <span class="exact-scores">Rank</span> <span>80%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-give-bonus">Give Bonus</button>
                                        <button class="btn btn-reject">Reject</button>
                                        <button class="btn btn-accept">Accept</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>

        </div>
    </div>
</section>
<footer class="footer-main">
    @include('footer.footer')
</footer>
<script src="{{ asset('js/app.js') }}"></script>