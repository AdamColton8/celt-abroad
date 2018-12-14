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
                <div class="wrapper-student-inside">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="student-info__title">
                                    <h2>
                                        Study Destination
                                    </h2>
                                </div>
                                <div class="student-info__sub">
                                    Program Filters
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-5">
                                <div>
                                    <div class="form-group">
                                        <label for="ProgramLevels">Program Levels*</label>
                                        <select class="form-control" id="ProgramLevels">
                                            <option selected>Select</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="StartDates">Start Dates*</label>
                                        <select class="form-control" id="StartDates">
                                            <option selected>Select Dates</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Discipline">Discipline Your desired area of study</label>
                                        <select class="form-control" id="Discipline">
                                            <option selected>Select...</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="wrap-checkbox-student rounded">
                                    <div class="">
                                        <label class="container-checkbox">Engineering and Technology
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="">
                                        <label class="container-checkbox">Sciences
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="">
                                        <label class="container-checkbox">Arts
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="">
                                        <label class="container-checkbox">Business, Management and Economics
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="">
                                        <label class="container-checkbox">Law, Politics, Social, Community Service and Teaching
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="">
                                        <label class="container-checkbox">English for Academic Studies
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="">
                                        <label class="container-checkbox">Health Sciences, Medicine, Nursing, Paramedic and Kinesiology
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-students-button">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="wrap-student-buttons">
                                    <div class="btn-save-block">
                                        <button type="submit" class="btn-save btn">
                                            Save

                                        </button>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn-save-next btn">
                                            Save and Next
                                            <img src="{{ asset('img/students/next-arrow.svg') }}" alt="">
                                        </button>
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
<style>

</style>
<footer class="footer-main">
    @include('footer.footer')
</footer>
<script src="{{ asset('js/app.js') }}"></script>