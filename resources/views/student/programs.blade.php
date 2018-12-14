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
                                            @for ($i = 0; $i < 4; $i++)
                                                <div>
                                                    <div class="row py-3">
                                                        <div class="col-md-5 col-12">
                                                            <div class="wrap-img-programs">
                                                                <img src="https://cdn.the-scientist.com/assets/articleNo/64292/iImg/26721/a6aab0fc-06c7-4bf9-8d4e-d52de026550e-uni-640.jpg"
                                                                     alt="univer" class="w-100">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7 col-12">
                                                            <div class="d-flex justify-content-between mb-lg-4 mb-2 title-programs">
                                                                <span class="h5 mb-0">
                                                                     Computer Science
                                                                </span>
                                                                    <span class="h6 mb-0">
                                                                    56 000 $/per year
                                                                </span>
                                                            </div>
                                                            <div class="mb-lg-5 mb-2">
                                                                <span class="d-block font-weight-bold">
                                                                   Engineering
                                                                </span>
                                                            </div>
                                                            <div class="mb-lg-5 mb-2">
                                                                <span class="h6 font-weight-normal">
                                                                    Stanford University
                                                                </span>
                                                            </div>
                                                            <div class="">
                                                                <span class="h6 text-decoration-underline font-weight-normal">
                                                                    Stanford, CA, USA
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
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

<footer class="footer-main">
    @include('footer.footer')
</footer>
<script src="{{ asset('js/app.js') }}"></script>