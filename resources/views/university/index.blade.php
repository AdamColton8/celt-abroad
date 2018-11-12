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
        <div class="row mb-3 mt-5">
            <div class="col-12">
                <div class="font-weight-normal h5">
                    <span>Home</span>
                    <span> > </span>
                    <span>Universities</span>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-6">
                <h3>Stanford University</h3>
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
                <h5 class="font-weight-normal"><u>Stanford, CA, USA</u></h5>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="position-relative">
                        <div class="prev-uni-for"></div>
                        <div class="next-uni-for"></div>
                    <div class="slider-uni-for ">
                        <div class="item">
                            <img
                                src="https://onlinelearningtips.com/wp-content/uploads/sites/15/2013/10/life-hacks-and-education.jpg"
                                alt="image" draggable="false"/>
                        </div>
                        <div class="item">
                            <img
                                src="http://www.gettingsmart.com/wp-content/uploads/2016/04/Digital-Learning-Feature-Image.jpg"
                                alt="image" draggable="false"/>
                        </div>
                        <div class="item">
                            <img src="https://bdcnetwork.s3.amazonaws.com/s3fs-public/fitts-woolard-hall.jpg"
                                 alt="image" draggable="false"/>
                        </div>
                        <div class="item">
                            <img src="http://www.bam.co.uk/images/default-source/default-album/adelphi.jpg" alt="image"
                                 draggable="false"/>
                        </div>
                        <div class="item">
                            <img src="http://img.hamptonu.edu/assets/map/buildings/large/research_center.jpg"
                                 alt="image" draggable="false"/>
                        </div>

                    </div>

                </div>
                <div>
                    <div class="slider-uni-nav mb-5">
                        <div class="item">
                            <img
                                    src="https://onlinelearningtips.com/wp-content/uploads/sites/15/2013/10/life-hacks-and-education.jpg"
                                    alt="image" draggable="false"/>
                        </div>
                        <div class="item">
                            <img
                                    src="http://www.gettingsmart.com/wp-content/uploads/2016/04/Digital-Learning-Feature-Image.jpg"
                                    alt="image" draggable="false"/>
                        </div>
                        <div class="item">
                            <img src="https://bdcnetwork.s3.amazonaws.com/s3fs-public/fitts-woolard-hall.jpg"
                                 alt="image" draggable="false"/>
                        </div>
                        <div class="item">
                            <img src="http://www.bam.co.uk/images/default-source/default-album/adelphi.jpg" alt="image"
                                 draggable="false"/>
                        </div>
                        <div class="item">
                            <img src="http://img.hamptonu.edu/assets/map/buildings/large/research_center.jpg"
                                 alt="image" draggable="false"/>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="wrap-tab-university">
                            <ul class="nav nav-pills justify-content-between mb-3 pills-univer-main" id="pills-tab-top"
                                role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-Programs-tab" data-toggle="pill"
                                       href="#pills-home"
                                       role="tab" aria-controls="pills-Programs" aria-selected="true">Programs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-Scholarships-tab" data-toggle="pill"
                                       href="#pills-profile"
                                       role="tab" aria-controls="pills-Scholarships"
                                       aria-selected="false">Scholarships</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-Description-tab" data-toggle="pill"
                                       href="#pills-contact"
                                       role="tab" aria-controls="pills-Description"
                                       aria-selected="false">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-Video-tab" data-toggle="pill" href="#pills-video"
                                       role="tab" aria-controls="pills-Video" aria-selected="false">Video</a>
                                </li>
                            </ul>
                            <div class="tab-content tabs-university" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                     aria-labelledby="pills-home-tab">
                                    <ul class="nav nav-pills mb-3 justify-content-between" id="pills-tab-inside"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill"
                                               href="#pills-bach" role="tab" aria-controls="pills-bach"
                                               aria-selected="true">Bachelor's degrees</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill"
                                               href="#pills-master" role="tab" aria-controls="pills-master"
                                               aria-selected="false">Master's degrees</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill"
                                               href="#pills-foundation" role="tab" aria-controls="pills-master"
                                               aria-selected="false">Foundation year</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-lang-tab" data-toggle="pill"
                                               href="#pills-lang" role="tab" aria-controls="pills-master"
                                               aria-selected="false">Foundation year</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-bach" role="tabpanel"
                                             aria-labelledby="pills-bach-tab">
                                            @for ($i = 0; $i < 3; $i++)
                                                <div>
                                                    <div class="row py-3">
                                                        <div class="col-md-5 col-12">
                                                            <div>
                                                                <img src="{{ asset('img/university/technical.jpg') }}"
                                                                     alt="univer" class="w-100">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7 col-12">
                                                            <div class="d-flex justify-content-between mb-2">
                                                            <span class="h5">
                                                                Electrical Engineering
                                                            </span>
                                                                <span class="h6">
                                                                56 000 $/per year
                                                            </span>
                                                            </div>
                                                            <div class="mb-4">
                                                            <span class="h6 font-weight-normal">
                                                                Faculty of Engineering
                                                            </span>
                                                            </div>
                                                            <div class="mb-4">
                                                            <span class="d-block text-danger">
                                                                -free travel
                                                            </span>
                                                                <span class="d-block text-danger">
                                                                -no application fee
                                                            </span>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <div>
                                                                    <button class="btn btn-danger font-weight-bold">
                                                                        Apply
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary text-dark">Set
                                                                        Admission Requirments</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
                                            @for ($i = 0; $i < 3; $i++)
                                                <div>
                                                    <div class="row py-3">
                                                        <div class="col-md-5 col-12">
                                                            <div>
                                                                <img src="{{ asset('img/university/axademic.jpg') }}"
                                                                     alt="univer" class="w-100">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7 col-12">
                                                            <div class="d-flex justify-content-between mb-2">
                                                            <span class="h5">
                                                                Electrical Engineering
                                                            </span>
                                                                <span class="h6">
                                                                56 000 $/per year
                                                            </span>
                                                            </div>
                                                            <div class="mb-4">
                                                            <span class="h6 font-weight-normal">
                                                                Faculty of Engineering
                                                            </span>
                                                            </div>
                                                            <div class="mb-4">
                                                            <span class="d-block text-danger">
                                                                -free travel
                                                            </span>
                                                                <span class="d-block text-danger">
                                                                -no application fee
                                                            </span>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <div>
                                                                    <button class="btn btn-danger font-weight-bold disabled" disabled>
                                                                        Apply
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary text-dark ">Set
                                                                        Admission Requirments</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                        <div class="tab-pane fade" id="pills-master" role="tabpanel"
                                             aria-labelledby="pills-master-tab">2
                                        </div>
                                        <div class="tab-pane fade" id="pills-foundation" role="tabpanel"
                                             aria-labelledby="pills-foudation-tab">3
                                        </div>
                                        <div class="tab-pane fade" id="pills-lang" role="tabpanel"
                                             aria-labelledby="pills-lang-tab">4
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                     aria-labelledby="pills-profile-tab">2
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                     aria-labelledby="pills-contact-tab">
                                    <div>
                                        <section>
                                            <article class="mb-2">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry’s standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesetting, remaining
                                                essentially unchanged. It was popularised in the 1960s with the release
                                                of Letraset sheets containing Lorem Ipsum passages, and more recently
                                                with desktop publishing software like Aldus PageMaker including versions
                                                of Lorem Ipsum.
                                            </article>
                                        </section>
                                        <section>
                                            <article>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry’s standard dummy text ever
                                                since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five
                                                centuries, but also the leap into electronic typesetting, remaining
                                                essentially unchanged. It was popularised in the 1960s with the release
                                                of Letraset sheets containing Lorem Ipsum passages, and more recently
                                                with desktop publishing software like Aldus PageMaker including versions
                                                of Lorem Ipsum.
                                            </article>
                                        </section>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-video" role="tabpanel"
                                     aria-labelledby="pills-contact-tab">

                                    <div>
                                        <div class="video_wrapper video_wrapper_full js-videoWrapper">
                                            <!--
                                           1. Ссылку на видео храним в data-src, а не src
                                           2. Обратим внимание, что выставлены параметры автовоспроизведения(autoplay=1), отмены воспроизведения похожих видео(rel=0), не показываем информацию об авторе(showinfo=0), отключаем лого ютуб (modestbranding=1)

                                           Полный список параметров: https://developers.google.com/youtube/player_parameters?hl=ru
                                           -->
                                            <iframe class="videoIframe js-videoIframe" src="" frameborder="0"
                                                    allowTransparency="true" allowfullscreen
                                                    data-src="https://www.youtube.com/embed/FKWwdQu6_ok?autoplay=1&modestbranding=1&rel=0&hl=ru&showinfo=0&color=white"></iframe>
                                            <button class="videoPoster js-videoPoster"><img
                                                    class="d-block mx-auto play-btn"
                                                    src="{{ asset('img/university/play-btn.svg') }}" alt=""></button>
                                        </div>
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
<style>

</style>
<script>
    $(document).on('click', '.js-videoPoster', function (e) {
        //отменяем стандартное действие button
        e.preventDefault();
        var poster = $(this);
        // ищем родителя ближайшего по классу
        var wrapper = poster.closest('.js-videoWrapper');
        videoPlay(wrapper);
    });

    //вопроизводим видео, при этом скрывая постер
    function videoPlay(wrapper) {
        var iframe = wrapper.find('.js-videoIframe');
        // Берем ссылку видео из data
        var src = iframe.data('src');
        // скрываем постер
        wrapper.addClass('videoWrapperActive');
        // подставляем в src параметр из data
        iframe.attr('src', src);
    }
</script>
