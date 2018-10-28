<nav class="navbar navbar-expand-lg nav-main">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('img/logo.svg') }}" alt="logo" class="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Programs
                </a>
                <div class="dropdown-menu dropdown-prog" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Bachelors’s degree</a>
                    <a class="dropdown-item" href="#">Master’s degree</a>
                    <a class="dropdown-item" href="#">Foundation year</a>
                    <a class="dropdown-item" href="#">Language courses</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Universities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Scholarships</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Countries</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">SIGN IN/REGISTER</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('img/eng.svg') }}" alt="eng" class="">
                </a>
                <div class="dropdown-menu dropdown-lang" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">
                        <img src="{{ asset('img/eng.svg') }}" alt="eng" class="mr-2">English</a>
                    <a class="dropdown-item" href="#">
                        <img src="{{ asset('img/turk.svg') }}" alt="turk" class="mr-2">Turkish</a>
                </div>
            </li>
        </ul>

    </div>
</nav>
