
<div class="student-sidebar">
    <div class="wrapper">
        <div class="wrap-collapse">
            <button type="button" id="sidebarCollapse" class="btn btn-info">
                {{--<svg class="svg-inline--fa fa-align-left fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="align-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M288 44v40c0 8.837-7.163 16-16 16H16c-8.837 0-16-7.163-16-16V44c0-8.837 7.163-16 16-16h256c8.837 0 16 7.163 16 16zM0 172v40c0 8.837 7.163 16 16 16h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16zm16 312h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm256-200H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16h256c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16z"></path></svg><!-- <i class="fas fa-align-left"></i> -->--}}

                <span><i class="fas fa-align-left"></i> My menu</span>
            </button>
        </div>
        <!-- Sidebar -->
        <nav id="sidebar">
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle dropdown-student">
                        <i class="fas fa-info-circle"></i>
                        <span class="d-block personal-info__text">Personal Information</span>
                        {{--Personal info--}}
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="{{ url('student/Info-summary') }}" class="wrap-done-item">
                                <i class="fas fa-check done-item"></i>
                            <span class="d-block">Education Summary</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('student/Info-destination') }}" class="wrap-done-item">
                                <i class="fas fa-check done-item"></i>
                                <span class="d-block">Study Destination</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('student/Info-scores') }}" class="wrap-done-item">
                                <i class="fas fa-exclamation warn-item"></i>
                                <span class="d-block">Test Scores</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('student/profile') }}" class="student-sidebar__item-link">
                        <img src="{{ asset('img/students/user.svg') }}" class="mr-3" alt="">
                        My Profile</a>

                </li>

                <li>
                    <a href="{{ url('student/programs') }}" class="student-sidebar__item-link">
                        <img src="{{ asset('img/students/doc.svg') }}" class="mr-3" alt="">
                        My Programs</a>
                </li>
                <li>
                    <a href="{{ url('student/favorites') }}" class="student-sidebar__item-link">
                        <img src="{{ asset('img/students/heart.svg') }}" class="mr-3" alt="">
                        My Favorites</a>
                </li>
            </ul>
        </nav>

    </div>
</div>
<script type="text/javascript">

</script>