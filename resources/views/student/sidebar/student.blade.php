<div class="student-sidebar">
    <div class="wrapper">
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
                            <a href="#" class="wrap-done-item">
                                <i class="fas fa-check done-item"></i>
                            <span class="d-block">Education Summary</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="wrap-done-item">
                                <i class="fas fa-check done-item"></i>
                                <span class="d-block">Study Destination</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="wrap-done-item">
                                <i class="fas fa-exclamation warn-item"></i>
                                <span class="d-block">Test Scores</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="student-sidebar__item-link">
                        <img src="{{ asset('img/students/user.svg') }}" class="mr-3" alt="">
                        My Profile</a>

                </li>

                <li>
                    <a href="#" class="student-sidebar__item-link">
                        <img src="{{ asset('img/students/doc.svg') }}" class="mr-3" alt="">
                        My Programs</a>
                </li>
                <li>
                    <a href="#" class="student-sidebar__item-link">
                        <img src="{{ asset('img/students/heart.svg') }}" class="mr-3" alt="">
                        My Favorites</a>
                </li>
            </ul>
        </nav>

    </div>
</div>
