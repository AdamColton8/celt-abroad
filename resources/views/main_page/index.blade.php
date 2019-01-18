<div class="wrap-main-top">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 col-12 d-flex justify-content-center">
                <div class="wrap-search-main">
                    <form action="" class="">
                        <div class=" search-main">
                            <div class="form-group m-0">
                                <input type="text" class="form-control search-block rounded-0 border-right-0" id="" aria-describedby="" placeholder="Subject area*">
                            </div>
                            <div class="form-group m-0">
                                <div class="btn-group">
                                    <button  type="button" class="btn rounded-0 dropdown-toggle search-block form-control border border-right-0 " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Destination <span class="caret"> </span>
                                    </button>
                                    <ul class="dropdown-menu search-dropdown-menu">
                                        <li class="text-center"><a href='#'>Variant One</a></li>
                                        <li class="text-center"><a href='#'>Variant Two</a></li>
                                        <li class="text-center"><a href='#'>Variant Three</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group m-0">
                                <div class="btn-group ">
                                    <button  type="button" class="btn rounded-0 dropdown-toggle search-block form-control border" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Qualification <span class="caret"> </span>
                                    </button>
                                    <ul class="dropdown-menu search-dropdown-menu">
                                        <li class="text-center"><a href='#'>Variant One</a></li>
                                        <li class="text-center"><a href='#'>Variant Two</a></li>
                                        <li class="text-center"><a href='#'>Variant Three</a></li>
                                    </ul>
                                </div>
                            </div>
                            <button class="btn btn-primary ml-2 search-button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        <div class="search-main-mob">
                            <div class="form-group m-0">
                                <input type="text" class="form-control rounded-0 input-search_mob border" id="" aria-describedby="" placeholder="Subject area*">
                            </div>
                            <div class="form-group mb-0 mt-2">
                                <div class="btn-group input-search_mob">
                                    <button  type="button" class="btn rounded-0 dropdown-toggle form-control border" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Destination <span class="caret"> </span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-search-mob">
                                        <li class="text-center"><a href='#'>Variant One</a></li>
                                        <li class="text-center"><a href='#'>Variant Two</a></li>
                                        <li class="text-center"><a href='#'>Variant Three</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group mb-0 mt-2">
                                <div class="btn-group input-search_mob">
                                    <button  type="button" class="btn rounded-0 dropdown-toggle form-control border" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Qualification <span class="caret"> </span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-search-mob">
                                        <li class="text-center"><a href='#'>Variant One</a></li>
                                        <li class="text-center"><a href='#'>Variant Two</a></li>
                                        <li class="text-center"><a href='#'>Variant Three</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary mt-3 w-50">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>

                        </div>

                    </form>
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

            @for ($i = 0; $i < 2; $i++)
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
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-4 grid-item">
                    <div class="wrap-new-card">
                        <div class="wrap-new-img-card">
                            <img src="{{ asset('img/build1.jpg') }}" alt="">
                            <span class="label-lvl-grade-2">
                                Master
                            </span>
                            <span class="label-tution-fee">
                                $1000
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
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-4 grid-item">
                    <div class="wrap-new-card">
                        <div class="wrap-new-img-card">
                            <img src="{{ asset('img/comp.jpg') }}" alt="">
                        </div>
                        <div class="wrap-new-card-text">
                            <span class="new-card-txt">College of Business Administration Alumni Chapter Scholarship</span>

                            <div class="row">
                                <div class="col-md-8 col-8">

                                    <p class="mb-2 font-weight-bold h5">Engineering</p>
                                    <a class="uni-address">Stanford Uni. Stanford, CA, USA</a>

                                </div>
                                <div class="col-md-4 col-4 d-flex align-items-center">
                                    <div class="d-flex justify-content-center ">
                                        <a href="#" class="btn btn-primary btn-details">Details <i class="ml-2 fa fa-angle-right fa-right"></i></a>
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
                    <h2>Featured Universities</h2>
                    <a href="">View more</a>
                </div>
            </div>
        </div>
        <div class="row">
            @for ($i = 0; $i < 3; $i++)
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-4 grid-item">
                    <div class="wrap-new-card">
                        <div class="wrap-new-img-card">
                            <img src="{{ asset('img/univ.jpg') }}" alt="">
                        </div>
                        <div class="wrap-new-card-text">
                            <span class="new-card-txt">College of Business Administration Alumni Chapter Scholarship</span>

                            <div class="row">
                                <div class="col-md-8 col-8">

                                    <p class="mb-2 font-weight-bold h5">Engineering</p>
                                    <a class="uni-address">Stanford Uni. Stanford, CA, USA</a>

                                </div>
                                <div class="col-md-4 col-4 d-flex align-items-center">
                                    <div class="d-flex justify-content-center ">
                                        <a href="#" class="btn btn-primary btn-details">Details <i class="ml-2 fa fa-angle-right fa-right"></i></a>
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

