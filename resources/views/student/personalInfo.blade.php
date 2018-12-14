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
                                        Personal information
                                    </h2>
                                    <span class="d-block student-info__sub-title">
                                    (As indicated on your passport)
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-12">
                                <div class="">
                                    <div>
                                        <div id="preview-container"
                                             class="jpreview-container">
                                        </div>
                                        <label class="label-input-img" for="inputImg">
                                            Update profile picture
                                        </label>
                                        <input type="file"
                                               class="demo input-img"
                                               id="inputImg"
                                               data-jpreview-container="#preview-container">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <label for="firstNameStudent">First name*</label>
                                    <input type="text" class=" form-control" id="firstNameStudent"
                                           placeholder="Enter First name">
                                </div>
                                <div class="form-group">
                                    <label for="emailStudent">E-mail*</label>
                                    <input type="email" class=" form-control" id="emailStudent"
                                           placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="lastNameStudent">Last name*</label>
                                    <input type="text" class=" form-control" id="lastNameStudent"
                                           placeholder="Enter Last name">
                                </div>
                                <div class="form-group">
                                    <label for="telStudent">Phone number*</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text p-0 border-0">
                                                <select class="custom-select border-right-0 "
                                                        id="inputGroupSelect01">
                                                    <option value="turk">🇹🇷</option>
                                                    <option value="eng">🇬🇧</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control border-left-0 " id="telStudent"
                                               placeholder="+994401234587">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-3 col-md-12"></div>
                            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                                <span class="d-block info__sub-title mb-2">
                                    Residental adress
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-3"></div>
                            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="addressStudent">Address*</label>
                                    <input type="text" class=" form-control" id="addressStudent"
                                           placeholder="Enter Address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-3">
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="lastNameStudent">Country*</label>
                                    <select class="custom-select ">
                                        <option selected>Select Country...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="stateStudent">Province/State*</label>
                                    <input type="text" class=" form-control" id="stateStudent"
                                           placeholder="Enter Province...">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-12 col-md-12 col-lg-3">
                            </div>
                            <div class="col-md-4 col-sm-12 col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="cityStudent">City/Town*</label>
                                    <input type="text" class=" form-control" id="cityStudent"
                                           placeholder="Enter City/Town...">
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="zipStudent">Postal/Zip Code*</label>
                                    <input type="text" class=" form-control" id="zipStudent"
                                           placeholder="Enter Postal/Zip Code...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-3">
                            </div>
                            <div class="col-md-12 col-sm-12 col-12 col-lg-4">
                                <div class="font-weight-bold mb-2">
                                    Сhange password
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-12 col-lg-4">
                                <div class="font-weight-bold mb-2">
                                    Delete account
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-3">
                            </div>
                            <div class="col-md-12 col-sm-12 col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="oldPassStudent">Old Password</label>
                                    <input type="password" class=" form-control" id="oldPassStudent"
                                           placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-12 col-lg-4">
                                <button class="btn btn-danger">
                                    Delete my account
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-3">
                            </div>
                            <div class="col-md-12 col-sm-12 col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="newPassStudent">New Password</label>
                                    <input type="password" class=" form-control" id="newPassStudent"
                                           placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-3">
                            </div>
                            <div class="col-md-12 col-sm-12 col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="confirmPassStudent">Confirm New Password</label>
                                    <input type="password" class=" form-control" id="confirmPassStudent"
                                           placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-3">
                            </div>
                            <div class="col-md-12 col-sm-12 col-12 col-lg-4">
                                <button type="submit" class="btn btn-primary">Update password</button>
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

<footer class="footer-main">
    @include('footer.footer')
</footer>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $('.demo').jPreview();
</script>