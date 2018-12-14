<div class="student-sidebar representative-sidebar">
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <ul class="list-unstyled components">

                <li>
                    <a href="{{ url('representative/profile') }}" class="student-sidebar__item-link">
                        <img src="{{ asset('img/representative/profile.svg') }}" class="mr-3" alt="">
                        My profile </a>

                </li>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle dropdown-representative">
                        <img src="{{ asset('img/representative/institution.svg') }}" class="mr-3" alt="">
                        <span class="d-block personal-info__text-representative">Add an Institution</span>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="{{ url('representative/institution-programs') }}" class="wrap-done-item">
                                <div class="add-program">Add Program</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('representative/programs') }}" class="student-sidebar__item-link">
                        <img src="{{ asset('img/representative/program.svg') }}" class="mr-3" alt="">
                        My Programs</a>
                </li>
                <li>
                    <a href="{{ url('representative/application') }}" class="student-sidebar__item-link">
                        <img src="{{ asset('img/representative/applications.svg') }}" class="mr-3" alt="">
                        Applications</a>
                </li>
            </ul>
        </nav>

    </div>
</div>
