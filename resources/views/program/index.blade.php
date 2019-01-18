<head>
    @include('head.head')
</head>
<header class="nav-main" id="top">
    <div class="container">
        @include('header.header')
    </div>
</header>
<section>
    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col-12">
                <div class="font-weight-normal h5">
                    <span>Home</span>
                    <span> > </span>
                    <span>Featured programs</span>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-6">
                <h3>Computer Science</h3>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end">
                    <div class="bg-share mr-2">
                        <i class="fas fa-share-alt"></i>
                    </div>
                    <div class="bg-share">
                        <i class="fas fa-heart"></i>
                    </div>
                </div>

            </div>
        </div>
        <div class="row mb-3">
            <div class="col-6">
                <h5 class="font-weight-normal"><u>Stanford University</u></h5>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end">
                    <h5 class="font-weight-bold">56 000 $/per year</h5>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="wrap-program-main-img">
                    <img src="{{ asset('img/program/program-img.jpg') }}" alt="img">
                </div>
                <div class="wrap-tabs-program mt-4">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link nav-program-item" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Admissions Eligibility</a>
                            <a class="nav-item nav-link nav-program-item" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Scholarships Eligibility</a>
                            <a class="nav-item nav-link active nav-program-item" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">General requirements</a>
                        </div>

                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">1</div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">2</div>
                        <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="wrap-tab bg-white">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h5>Submission of applications is up to:</h5>
                                        <span class="d-block font-weight-bold mb-2">For the first semester: <span class="font-weight-normal">05.11.2018</span></span>
                                        <span class="d-block font-weight-bold mb-2">For the second semester: <span>05.11.2018</span></span>
                                        <span class="d-block font-weight-bold mb-2">Result of a language examination: <span>80</span></span>
                                    </div>
                                    <div class="col-md-5">
                                        <h5>Аcademic demands:</h5>
                                        <span class="d-block font-weight-bold mb-2"> Success of a school certificate: <span class="font-weight-normal">80%</span></span>
                                        <span class="d-block font-weight-bold mb-2"> Success of a school certificate: <span class="font-weight-normal">80%</span></span>
                                        <span class="d-block font-weight-bold mb-2"> Success of a school certificate: <span class="font-weight-normal">80%</span></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                @include('slider.slider-right')
            </div>
        </div>
    </div>
</section>

<footer class="footer-main">
    @include('footer.footer')
</footer>
<script src="{{ asset('js/app.js') }}"></script>
