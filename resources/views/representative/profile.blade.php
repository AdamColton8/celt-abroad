<head>
    @include('head.head')
</head>
<header class="nav-main" id="top">
    <div class="container">
        @include('header.header')
    </div>
</header>
<section class="wrap-main-mid">
    <form action="" class="mb-0">
    <div class="d-flex">
        @include('representative.sidebar.sidebar')

            <div class="wrap-representative-inside">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="wrap-representative-block">
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
                        <div class="col-md-8 wrap-representative-left  ">
                            <div class="row justify-content-between bg-white rounded">
                                <div class="col-md-5 pt-3 pb-3">
                                    <div class="form-group">
                                        <label for="representativeFirstName">First name*</label>
                                        <input type="text" class=" form-control" id="representativeFirstName"
                                               placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="representativeFirstName">E-mail*</label>
                                        <input type="email" class=" form-control" id="representativeEmail"
                                               placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="representativeTel">Phone Number*</label>
                                        <input type="text" class="form-control" id="representativeTel"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-5 pt-3 pb-3">
                                    <div class="form-group">
                                        <label for="representativeLastName">Last name*</label>
                                        <input type="text" class=" form-control" id="representativeLastName"
                                               placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="representativeTitle">Title/Position*</label>
                                        <input type="text" class=" form-control" id="representativeTitle"
                                               placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="representativeCitizenship">Country of citizenship*</label>
                                        <input type="text" class=" form-control" id="representativeCitizenship"
                                               placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 bg-white justify-content-between rounded mb-5">
                                <div class="col-12">
                                    <div class="mt-4">
                                        <h6>
                                            Сhange password
                                        </h6>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="representativeOldPassword">Old Password</label>
                                        <input type="password" class=" form-control" id="representativeOldPassword"
                                               placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="representativeNewPassword">New Password</label>
                                        <input type="password" class=" form-control" id="representativeNewPassword"
                                               placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="representativeConfirmNew">Confirm New Password</label>
                                        <input type="password" class=" form-control" id="representativeConfirmNew"
                                               placeholder="">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Update password</button>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div>
                                        <h6>
                                            Delete account
                                        </h6>
                                    </div>
                                    <div>
                                        <button class="btn btn-danger">
                                            Delete my account
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="btn-save-block d-flex justify-content-center mt-5 mb-3">
                                        <button type="submit" class="btn-save btn">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

    </div>
    </form>
</section>

<footer class="footer-main">
    @include('footer.footer')
</footer>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $('.demo').jPreview();
</script>