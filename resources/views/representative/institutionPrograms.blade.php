<head>
    @include('head.head')
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.css"/>
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
                <div class="wrapper-student-profile mb-5">
                    <div class="container-fluid">
                        <div class="row ">
                            <div class="col-12">
                                <h2 class="mb-3">
                                    Add a Program
                                </h2>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="representativeProgramTitle">Program Title</label>
                                    <input type="text" class=" form-control" id="representativeProgramTitle"
                                           placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="start-date">Start date</label>
                                    <input type="text" class="form-control mb-2" data-toggle="datepicker-from" id="start-date-0" value="">
                                    <div id="start-date">

                                    </div>
                                </div>
                                <div class="add-start-date float-right mb-2 cursor-pointer">+ Add start date</div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="">Deadline to apply</label>
                                    <input type="text" class=" form-control mb-2" data-toggle="datepicker-end" id="start-end-0" value="">
                                    <div id="end-date">

                                    </div>
                                </div>
                                <div class="add-deadline-date float-right mb-2 cursor-pointer">+ Add start date</div>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-md-5 col-12">
                                <div class="row" id="row-tution-fee-0">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="TutionFee">Tution fee</label>
                                            <select class="form-control" id="TutionFee">
                                                <option selected>Month</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="TypeofInst">&nbsp;</label>
                                            <input type="text" class=" form-control"  id="" value="" placeholder="1300$">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="Bonus">Bonus</label>
                                            <select class="form-control" id="Bonus">
                                                <option selected> </option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="add-tution-fee mb-2 cursor-pointer d-flex justify-content-center">
                                            <span>
                                                + Add tution fee
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-12">
                                <div class="form-group">
                                    <label for="">Application fee</label>
                                    <input type="text" class=" form-control " placeholder="None">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-md-5 col-12">
                                <div class="form-group">
                                    <label for="DegreeLevel">Degree level</label>
                                    <select class="form-control" id="DegreeLevel">
                                        <option selected>Bachelor</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5 col-12">
                                <div class="form-group">
                                    <label for="">Scholarship %</label>
                                    <input type="text" class=" form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-12 col-md-5">
                                <div class="form-group">
                                    <label for="">Duration</label>
                                    <input type="text" class=" form-control ">
                                </div>
                            </div>
                            <div class="col-12 col-md-5">
                                <div class="form-group">
                                    <label for="">Study type</label>
                                    <select class="form-control" id="">
                                        <option selected> </option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-5 mt-3">
                                <div class="">
                                    <label class="institution-label-addProgram d-flex flex-column" for="inputImg">
                                        <img src="{{ asset('img/representative/upload.svg') }}" alt="" class="mb-2">
                                        <span>
                                            Select photo from gallery
                                        </span>
                                    </label>
                                    <input type="file"
                                           class="demo input-img "
                                           id="inputImg"
                                           data-jpreview-container="#preview-container">
                                </div>
                                <div>
                                    <div id="preview-container"
                                         class="jpreview-container jpreview-container-institution">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-center">
                                    <button class="save-duplicate btn font-weight-bold mr-3">
                                        Save and duplicate
                                    </button>
                                    <button class="save-add-program btn font-weight-bold">
                                        Save
                                    </button>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.js"></script>
<script>
    $('[data-toggle="datepicker-from"]').datepicker();
    $('[data-toggle="datepicker-end"]').datepicker();

    // $('.add-start-date').on('click', function(){
    //     var $div = $('input[id^="start-date-0"]:last');
    //     var num = parseInt( $div.prop("id").match(/\d+/g), 10 ) +1;
    //     $('#start-date-0').clone(true).insertAfter($div).prop('id', 'start-date-0'+ num);
    //     $('body [data-toggle="datepicker-from"]').datepicker();
    // });
    //
    // $('.add-deadline-date ').on('click', function(){
    //     var $div = $('input[id^="start-end-0"]:last');
    //     var num = parseInt( $div.prop("id").match(/\d+/g), 10 ) +1;
    //     $('#start-end-0').clone(true).insertAfter($div).prop('id', 'start-end-0'+ num);
    //     $('body [data-toggle="datepicker-end"]').datepicker();
    //
    // });

    $('.add-start-date').click(function(){
        $('#start-date').append(' <input type="text" class="form-control mb-2" data-toggle="datepicker-from" id="" value="">');
        $('[data-toggle="datepicker-from"]').datepicker();
    });
    $('.add-deadline-date ').on('click', function(){
        $('#end-date').append(' <input type="text" class="form-control mb-2" data-toggle="datepicker-end" id="0" value="">');
        $('[data-toggle="datepicker-end"]').datepicker();
    });


    $('.add-tution-fee').on('click', function(){
        var $div = $('div[id^="row-tution-fee-0"]:last');
        var num = parseInt( $div.prop("id").match(/\d+/g), 10 ) +1;
        $('#row-tution-fee-0').clone(true).insertAfter($div).prop('id', 'start-date-0'+ num);

    });

    $('.demo').jPreview();
</script>