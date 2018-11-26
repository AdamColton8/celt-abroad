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
                <div class="">
                    <div class="">
                        <img src="{{ asset('img/blog/edu.jpg') }}" alt="" class="w-100">
                    </div>
                    <div class="px-3 py-3 bg-white">
                        <article>
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be
                            sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                            generators on the Internet tend to repeat predefined chunks as necessary, making this the
                            first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined
                            with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                            The generated Lorem Ipsum is therefore always free from repetition, injected humour, or
                            non-characteristic words etc.
                        </article>
                        <h4 class="py-3">
                            Lorem Ipsum
                        </h4>
                        <article class="mb-3">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </article>
                        <div class="row mb-3">
                            @for ($i = 0; $i < 4; $i++)
                                <div class="col-md-3"><img src="{{ asset('img/blog/arch.jpg') }}" alt=""
                                                           class="img-blog-article"></div>
                            @endfor
                        </div>
                        <h4 class="mb-3">
                            Lorem Ipsum
                        </h4>
                        <article class="mb-3">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </article>
                        <div class=""><img src="{{ asset('img/blog/check.jpg') }}" alt="" class="img-blog-article-end">
                        </div>
                        <article>
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be
                            sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                            generators on the Internet tend to repeat predefined chunks as necessary, making this the
                            first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined
                            with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                            The generated Lorem Ipsum is therefore always free from repetition, injected humour, or
                            non-characteristic words etc.
                        </article>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="text-decoration-none text-dark">Next post <i class="fas fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="bg-white px-3 py-4 mb-3">
                    <label for="blogSearch" class="font-weight-bold mb-2">Blog Search</label>
                    <form class="form-inline my-2 my-lg-0" action="" method="">
                        <div class="input-group mb-3" style="width: 90%">
                            <input type="text" class="form-control border-right-0 rounded-0 " id="blogSearch"
                                   aria-describedby="btnSearch">
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
                        <a href="#" class="color-light-blue mb-1 hover-dec-none"><i class="fas fa-caret-right mr-2"></i>Universities
                            <span class="text-gray">(3)</span></a>
                        <a href="#" class="color-light-blue mb-1 hover-dec-none"><i class="fas fa-caret-right mr-2"></i>Scholarships
                            <span class="text-gray">(3)</span></a>
                        <a href="#" class="color-light-blue mb-1 hover-dec-none"><i class="fas fa-caret-right mr-2"></i>Programs
                            <span class="text-gray">(3)</span></a>
                    </div>
                </div>
                @include('slider.slider-right')
            </div>

        </div>
        <div class="row mb-3">
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
                                    <a href="" class="text-decoration-none">Continue reading<i class="ml-2 fas fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <form action="" method="">
        <div class="row mb-5">
            <div class="col-12">
                <div class="form-group">
                    <label class="h2 mb-2" for="comment">Join The Discussion</label>
                    <textarea class="form-control" id="comment" name="comment" rows="4"></textarea>
                </div>
            </div>
            <div class="col-md-6 col-12 mb-2">
                <label class="sr-only" for="usernameBlog">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text bg-white"><i class="fas fa-user"></i></div>
                    </div>
                    <input type="text" class="form-control border-left-0" id="usernameBlog" placeholder="Your Name">
                </div>
            </div>
            <div class="col-md-6 col-12 mb-2">
                <label class="sr-only" for="emailBlog">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text bg-white"><i class="fas fa-envelope"></i></div>
                    </div>
                    <input type="text" class="form-control border-left-0" id="emailBlog" placeholder="Your email">
                </div>
            </div>
                <div class="col-12 mt-3">
                    <button class="btn btn-primary">
                        Submit
                    </button>
                </div>

        </div>
        </form>

    </div>
</section>

<footer class="footer-main">
    @include('footer.footer')
</footer>
<script src="{{ asset('js/app.js') }}"></script>