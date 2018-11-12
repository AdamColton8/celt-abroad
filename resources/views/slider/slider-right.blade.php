<div>
    <div class="text-center">
        <h4>Featured Universities</h4>
    </div>

    <div class="slider-right-side">
        @for ($i = 0; $i < 3; $i++)
            <div>
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
                </div>
            </div>
        @endfor
    </div>
    <div class="text-center">
        <h4>Featured Programs</h4>
    </div>
    <div class="slider-right-side">
        @for ($i = 0; $i < 3; $i++)
            <div>
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
                </div>
            </div>
        @endfor
    </div>
    <div class="text-center">
        <h4>Featured Scholarships</h4>
    </div>
    <div class="slider-right-side">
        @for ($i = 0; $i < 3; $i++)
            <div>
                <div class="wrap-card">
                    <div class="wrap-img-card">
                        <img src="{{ asset('img/build1.jpg') }}" alt="">
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
                </div>
            </div>
        @endfor
    </div>
</div>
