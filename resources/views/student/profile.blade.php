<head>
    @include('head.head')
</head>
<header class="nav-main" id="top">
    <div class="container">
        @include('header.header')
    </div>
</header>
<section class="bg-dark-gray">
    <form class=" mb-0" action="">
        <div class="d-flex">
            @include('student.sidebar.student')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-5 col-12">
                        <div class="wrapper-student-profile rounded">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="row">
                                            <div class="col-xl-5 col-12">
                                                <div class="image-student">
                                                    <img src="{{ asset('img/students/profile-img.jpg') }}" alt="">
                                                    <span class="">Mehmet Mustafaogly</span>
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-12">
                                                <div class="student-profile-edit edit1">
                                                    <a href="#"><i class="fas fa-pencil-alt"></i></a>
                                                </div>
                                                <div class="profile-info">
                                                    <div class="wrap-profile-info">
                                                        <span class="title-profile_info font-weight-bold">Title</span>
                                                        <span class="title-profile_sub-info">Bachelor</span>
                                                    </div>
                                                    <div class="wrap-profile-info">
                                                        <span class="title-profile_info font-weight-bold">E-mail*</span>
                                                        <span class="title-profile_sub-info">mail@gmail.com</span>
                                                    </div>
                                                    <div class="wrap-profile-info">
                                                        <span class="title-profile_info font-weight-bold">Phone*</span>
                                                        <span class="title-profile_sub-info">+7 10 906270270</span>
                                                    </div>
                                                    <div class="wrap-profile-info">
                                                        <span class="title-profile_info font-weight-bold">Country</span>
                                                        <span class="title-profile_sub-info">Turkey</span>
                                                    </div>
                                                    <div class="wrap-profile-info">
                                                        <span class="title-profile_info font-weight-bold">Address</span>
                                                        <span class="title-profile_sub-info ">
                                                    Ulus Mahalle
                                                    1463 Sok. No. 3 Kat 5 D:13
                                                    07163 Antalya
                                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper-student-edu-sum rounded">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="student-profile-edit edit2">
                                                    <a href="#"><i class="fas fa-pencil-alt"></i></a>
                                                </div>
                                                <h4 class="text-center mb-3">
                                                    Education Summary
                                                </h4>
                                            </div>
                                            <div class="col-xl-6 col-12">
                                               <div class="mb-2">
                                                   <div class="font-weight-bold mb-1">
                                                       Country of Education
                                                   </div>
                                                   <div class="text-dark-gray">
                                                       Turkey
                                                   </div>
                                               </div>
                                               <div class="mb-2">
                                                   <div class="font-weight-bold mb-1">
                                                       Grade Average
                                                   </div>
                                                   <div class="text-dark-gray">
                                                       80
                                                   </div>
                                               </div>
                                            </div>
                                            <div class="col-xl-6 col-12">
                                                <div class="mb-2">
                                                    <div class="font-weight-bold mb-1">
                                                        Highest Level Of Education
                                                    </div>
                                                    <div class="text-dark-gray">
                                                        Bachelor
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <div class="font-weight-bold mb-1">
                                                        Grading Scheme
                                                    </div>
                                                    <div class="text-dark-gray">
                                                        Other
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="">
                                                    <h5 class="mb-3 text-center mt-2">
                                                       Schools Attended
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="mb-2">
                                                    <div class="font-weight-bold mb-1">
                                                        Level of Education
                                                    </div>
                                                    <div class="text-dark-gray">
                                                        Medium
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <div class="font-weight-bold mb-1">
                                                        Country of Institution
                                                    </div>
                                                    <div class="text-dark-gray">
                                                        Turkey
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <div class="font-weight-bold mb-1">
                                                        Name of Institution
                                                    </div>
                                                    <div class="text-dark-gray">
                                                        Bosphorus University
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <div class="font-weight-bold mb-1">
                                                        Primary Language of Institution
                                                    </div>
                                                    <div class="text-dark-gray">
                                                        Turkish
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-xl-6">
                                                <div class="mb-2">
                                                    <div class="font-weight-bold mb-1">
                                                        Attended Institution From
                                                    </div>
                                                    <div class="text-dark-gray">
                                                        2018-08-17
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <div class="font-weight-bold mb-1">
                                                        Attended Institution To
                                                    </div>
                                                    <div class="text-dark-gray">
                                                        2018-11-17
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <div class="font-weight-bold mb-1">
                                                        Degree Award
                                                    </div>
                                                    <div class="text-dark-gray">
                                                        Junior Specialist
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <div class="font-weight-bold mb-1">
                                                        Degree Awarded On
                                                    </div>
                                                    <div class="text-dark-gray">
                                                        2018-11-17
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="">
                                                    <h5 class="mb-3 text-center mt-2">
                                                        Schools Address
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div>
                                                    <div class="text-dark-gray">
                                                        Bebek Mh., 34342 Beshiktas
                                                    </div>
                                                    <div class="text-dark-gray">
                                                        Bebek
                                                    </div>
                                                    <div class="text-dark-gray">
                                                        123453234
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-12">
                        <div class="wrapper-student-study rounded">
                            <div class="student-profile-edit edit3">
                                <a href="#"><i class="fas fa-pencil-alt"></i></a>
                            </div>
                            <div class="text-center">
                                <h4>
                                    Study Destination
                                </h4>
                            </div>
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div>
                                        <div class="font-weight-bold mb-1">Program Levels</div>
                                        <div>
                                            level 2
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-weight-bold mb-1 mt-2">Start Dates</div>
                                        <div class="text-dark-gray">
                                            2018-08-21
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div>
                                        <div class="font-weight-bold mb-1 mt-2">Discipline Your desired area of study</div>
                                        <div class="text-dark-gray">
                                            Engineering and Technology <br> Scinces
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="wrapper-student-scores rounded">
                            <div class="student-profile-edit edit4">
                                <a href="#"><i class="fas fa-pencil-alt"></i></a>
                            </div>
                            <div class="text-center mb-3">
                                <h4>
                                    Test Scores
                                </h4>
                            </div>
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <div>
                                        <div class="font-weight-bold mb-2">English Exam Type</div>
                                        <div class="text-dark-gray">
                                            IELTS
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-weight-bold mb-1 mt-2">English Exam Date</div>
                                        <div class="text-dark-gray">
                                            2018-09-12
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-weight-bold mb-1 mt-2">Input Exact Scores</div>
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
                                    <div>
                                        <div class="font-weight-bold mb-1 mt-2">Overal Score</div>
                                        <div class="text-dark-gray">
                                            <span class="exact-scores">Score</span> <span>80%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <div>
                                        <div class="font-weight-bold mb-1 mt-2">English Type</div>
                                        <div class="text-dark-gray">
                                            SAT
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-weight-bold mb-1 mt-2">SAT Exam Date</div>
                                        <div class="text-dark-gray">
                                            2018-09-12
                                        </div>
                                    </div>

                                    <div>
                                        <div class="font-weight-bold mb-1 mt-2">Input Exact Scores</div>
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
                                        <div class="font-weight-bold mb-1 mt-2">Quantitative</div>
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
                                        <div class="font-weight-bold mb-1 mt-2">Writing</div>
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
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

<footer class="footer-main">
    @include('footer.footer')
</footer>
<script src="{{ asset('js/app.js') }}"></script>