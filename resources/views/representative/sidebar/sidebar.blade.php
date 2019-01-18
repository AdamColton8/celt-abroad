<div class="student-sidebar representative-sidebar">
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="wrap-collapse">
            <button type="button" id="sidebarCollapse" class="btn btn-info">
                {{--<svg class="svg-inline--fa fa-align-left fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="align-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M288 44v40c0 8.837-7.163 16-16 16H16c-8.837 0-16-7.163-16-16V44c0-8.837 7.163-16 16-16h256c8.837 0 16 7.163 16 16zM0 172v40c0 8.837 7.163 16 16 16h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16zm16 312h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm256-200H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16h256c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16z"></path></svg><!-- <i class="fas fa-align-left"></i> -->--}}

                <span ><i class="fas fa-align-left"></i> <span class="show-menu-sidebar">Show Menu</span></span>
            </button>
        </div>
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
                        <div onclick="location.href='institution/';" style="cursor: pointer;" class="d-block personal-info__text-representative mr-4">Add an Institution</div>

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
