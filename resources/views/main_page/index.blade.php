<div class="wrap-main-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="cursor-pointer wrap-figure-left">
                    <a href="#" class="text-education">
                    <span class="">
                        <img src="{{ asset('img/diploma.svg') }}" class="ml-2 mr-2" alt="">
                        Check your <span class="font-weight-bold">Scholarship eligibility</span>
                    </span>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="cursor-pointer wrap-figure-right">
                    <a href="#" class="text-education text-education-2 d-flex justify-content-end">
                    <span class="">
                        Check Your <span class="font-weight-bold">Admissions Eligibility</span>
                         <img src="{{ asset('img/hat.svg') }}" class="ml-2 mr-2" alt="">
                    </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrap-main-mid">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2>Featured Scholarships</h2>
                    <a href="" class="text-dark text-decoration-underline">View more</a>
                </div>
            </div>
        </div>
        <div class="row">
            @for ($i = 0; $i < 3; $i++)
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-4">
                    <div class="wrap-card">
                        <div class="wrap-img-card">
                            <img src="{{ asset('img/build1.jpg') }}" alt="">
                        </div>
                        <div class="wrap-card-text">
                            <span>College of Business Administration Alumni Chapter Scholarship</span>
                            <div class="dropdown-divider"></div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="mb-2">Stanford University</div>
                                    <p class="mb-2 font-weight-bold h5">Engineering</p>
                                    <a class=""><u>Stanford, CA, USA</u></a>

                                </div>
                                <div class="col-md-5">
                                    <div class="d-flex justify-content-center ">
                                        <a href="#" class="btn btn-primary mt-4">Details</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor

        </div>
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2>Featured Programs</h2>
                    <a href="">View more</a>
                </div>
            </div>
        </div>
        <div class="row">
            @for ($i = 0; $i < 3; $i++)
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-4">
                    <div class="wrap-card">
                        <div class="wrap-img-card">
                            <img src="{{ asset('img/comp.jpg') }}" alt="">
                        </div>
                        <div class="wrap-card-text">
                            <span>Computer Science</span>
                            <div class="dropdown-divider"></div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="mb-2">Stanford University</div>
                                    <p class="mb-2 font-weight-bold h5">Engineering</p>
                                    <a class=""><u>Stanford, CA, USA</u></a>

                                </div>
                                <div class="col-md-5">
                                    <div class="d-flex justify-content-center ">
                                        <a href="#" class="btn btn-primary mt-4">Details</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div>

                        </div>

                    </div>
                </div>
            @endfor
        </div>
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2>Featured Universities</h2>
                    <a href="">View more</a>
                </div>
            </div>
        </div>
        <div class="row">
            @for ($i = 0; $i < 3; $i++)
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-4">
                    <div class="wrap-card">
                        <div class="wrap-img-card">
                            <img src="{{ asset('img/univ.jpg') }}" alt="">
                        </div>
                        <div class="wrap-card-text">
                            <span>Computer Science</span>
                            <div class="dropdown-divider"></div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="mb-2">Stanford University</div>

                                    <a class=""><u>Stanford, CA, USA</u></a>

                                </div>
                                <div class="col-md-5">
                                    <div class="d-flex justify-content-center ">
                                        <a href="#" class="btn btn-primary mt-2">Details</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div>

                        </div>

                    </div>
                </div>
            @endfor
        </div>
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <h2>Most popular countries</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-4">
                <div class="wrap-country d-flex justify-content-center align-items-center">
                    <div class="text-country text-center">
                        <span class="d-block text-white h3 font-weight-bold">Ukraine</span>
                        <span class="d-block text-white h4">5 universities</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-4">
                <div class="wrap-country-austria d-flex justify-content-center align-items-center">
                    <div class="text-country text-center">
                        <span class="d-block text-white h3 font-weight-bold">Austria</span>
                        <span class="d-block text-white h4">10 universities</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-4">
                <div class="wrap-country-turkey d-flex justify-content-center align-items-center">
                    <div class="text-country text-center">
                        <span class="d-block text-white h3 font-weight-bold">Turkey</span>
                        <span class="d-block text-white h4">8 universities</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-4">
                <div class="wrap-country-germany d-flex justify-content-center align-items-center">
                    <div class="text-country text-center">
                        <span class="d-block text-white h3 font-weight-bold">Germany</span>
                        <span class="d-block text-white h4">7 universities</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-4">
                <div class="wrap-country-poland d-flex justify-content-center align-items-center">
                    <div class="text-country text-center">
                        <span class="d-block text-white h3 font-weight-bold">Poland</span>
                        <span class="d-block text-white h4">12 universities</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-4">
                <div class="wrap-country-italy d-flex justify-content-center align-items-center">
                    <div class="text-country text-center">
                        <span class="d-block text-white h3 font-weight-bold">Italy</span>
                        <span class="d-block text-white h4">6 universities</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <a class="h4" href="#"><u>VIEW ALL COUNTRIES</u></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2>Latest news from our blog</h2>
                    <a href="">View more</a>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            @for ($i = 0; $i < 3; $i++)
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-4">
                    <div class="wrap-card">
                        <div class="wrap-img-news">
                            <img src="{{ asset('img/news-img.jpg') }}" alt="news-img">
                        </div>
                        <div class="wrap-card-text">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-2 text-secondary"><i class="far fa-calendar-alt mr-2"></i>March 9,2018</div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-2 text-secondary"><i class="far fa-bookmark mr-2"></i><a href="">Business</a></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <span>Rules of Сommunication</span>
                                    <div class="dropdown-divider"></div>
                                </div>
                                <div class="col-12">
                                    <span class="font-weight-light mb-2 d-block">
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.
                                    </span>
                                </div>
                                <div class="col-12">
                                    <a href="" class="text-decoration-none">Continue reading<i class="ml-2 fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>

