<head>
    @include('head.head')
</head>
<header class="nav-main" id="top">
    <div class="container">
        @include('header.header')
    </div>
</header>


<section>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-12 col-lg-8">
                @for ($i = 0; $i < 3; $i++)
                    <div class="">
                        <div class="">
                            <img src="{{ asset('img/blog/edu.jpg') }}" alt="" class="w-100">
                        </div>
                        <div class="px-3 py-4 bg-white">
                            <h2 class="mb-3">
                                Featured Scholarships
                            </h2>
                            <article>
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look even slightly believable. If you are going to use a passage of Lorem Ipsum, you
                                need to be sure there isn't anything embarrassing hidden in the middle of text. All the
                                Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                                making this the first true generator on the Internet. It uses a dictionary of over 200
                                Latin words, combined with a handful of model sentence structures, to generate Lorem
                                Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from
                                repetition, injected humour, or non-characteristic words etc.
                            </article>
                        </div>
                        <div class="d-flex justify-content-between px-4 py-4 bg-white">
                            <div class="d-flex align-items-center">
                                <i class="far fa-bookmark mr-2"></i><span class="color-light-blue">Scholarship</span>
                            </div>
                            <div>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="bg-white px-3 py-4 mb-3">
                    <label for="blogSearch" class="font-weight-bold mb-2">Blog Search</label>
                    <form class="form-inline my-2 my-lg-0" action="" method="">
                        <div class="input-group mb-3" style="width: 90%">
                            <input type="text" class="form-control border-right-0 rounded-0 " id="blogSearch" aria-describedby="btnSearch">
                            <div class="input-group-append">
                                <span class="input-group-text bg-transparent rounded-0" id="btnSearch" style="">
                                    <button type="submit" class="btn-search" style="">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="bg-white px-3 py-4 mb-3">
                    <h6>
                        Categories
                    </h6>
                    <div class="d-flex flex-column">
                        <a href="#" class="color-light-blue mb-1 hover-dec-none"><i class="fas fa-caret-right mr-2"></i>Universities <span class="text-gray">(3)</span></a>
                        <a href="#" class="color-light-blue mb-1 hover-dec-none"><i class="fas fa-caret-right mr-2"></i>Scholarships <span class="text-gray">(3)</span></a>
                        <a href="#" class="color-light-blue mb-1 hover-dec-none"><i class="fas fa-caret-right mr-2"></i>Programs <span class="text-gray">(3)</span></a>
                    </div>
                </div>
                @include('slider.slider-right')
            </div>

        </div>
    </div>
</section>


<footer class="footer-main">
    @include('footer.footer')
</footer>
<script src="{{ asset('js/app.js') }}"></script>
