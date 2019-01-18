<head>
    @include('head.head')


</head>
<header class="nav-main" id="top">
    <div class="container">
        @include('header.header')
    </div>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">

</header>
<section class="wrap-main-mid">
    <form action="" class="mb-0">
    <div class="d-flex">
        @include('representative.sidebar.sidebar')
        <div class="wrap-representative-inside">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-12">
                        <div class="wrapper-student-profile">
                           <div class="row">
                               <div class="col-12">
                                   <div class="form-group">
                                       <label for="representativeInstTitle">Institution title</label>
                                       <input type="text" class=" form-control" id="representativeInstTitle"
                                              placeholder="">
                                   </div>
                               </div>
                           </div>
                            <div class="row justify-content-between">
                                <div class="col-md-5 col-12">
                                    <div class="form-group">
                                        <label for="TypeofInst">Type of Institution</label>
                                        <select class="form-control" id="TypeofInst">
                                            <option selected>University</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5 col-12">
                                    <div class="form-group">
                                        <label for="representativeInstCity">City</label>
                                        <input type="text" class=" form-control" id="representativeInstCity"
                                               placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-md-5 col-12">
                                    <div class="form-group">
                                        <label for="StartDates">Country of an institution</label>
                                        <select class="form-control" id="StartDates">
                                            <option selected></option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5 col-12">
                                    <div class="form-group">
                                        <label for="representativeInstState">State/Province</label>
                                        <input type="text" class=" form-control" id="representativeInstState"
                                               placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-12">
                        <div class="wrapper-student-edu-sum institution-page">
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <h5>
                                        Description
                                    </h5>
                                </div>
                                <div class="col-12">
                                    <div id="summernote"></div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <h5 class="mb-3 mt-4">
                                        Add photos
                                    </h5>
                                </div>
                                <div class="col-12 col-md-3 ">
                                    <div>

                                        <label class="btn btn-primary institution-label d-flex flex-column" for="inputImg">
                                            <img src="{{ asset('img/representative/upload.svg') }}" alt="" class="mb-2">
                                            <span>
                                                 Select images
                                            </span>

                                        </label>
                                        <input type="file"
                                               class="demo input-img "
                                               id="inputImg"
                                               multiple
                                               data-jpreview-container="#preview-container">
                                    </div>

                                </div>
                                <div class="col-md-9">
                                    <div id="preview-container"
                                         class="jpreview-container jpreview-container-institution">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-center mt-5">
                                        <button type="submit" class="btn btn-save-institution">
                                            Save and add program
                                        </button>
                                    </div>
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
<style>
    div.card-header.note-toolbar {
        position: relative!important;
    }
</style>
<footer class="footer-main">
    @include('footer.footer')
</footer>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>

<script>
    $('#summernote').summernote({
        placeholder: '',
        tabsize: 2,
        height: 200
    });
    $('.demo').jPreview();
</script>