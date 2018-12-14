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
                                    <h2 class="mb-4">
                                        Test Scores
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-between">
                            <div class="col-12 col-md-5">
                                <div class="wrap-info-scores">
                                    <div class="">
                                        <div class="eng-scores-test">
                                            <div class="mr-2">
                                                I have English exam scores
                                            </div>
                                            <label class="switch" data-toggle="collapse" data-target="#engExamScores">

                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <div id="engExamScores" class="collapse">
                                            <div class="form-group mt-4">
                                                <label for="EnglishExamType">English Exam Type</label>
                                                <select class="form-control" id="EnglishExamType">
                                                    <option selected>I dont have this</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="IELTSExamDate">IELTS Exam Date</label>
                                                <select class="form-control" id="IELTSExamDate">
                                                    <option selected>YYYY-MMM-DD</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="listeningScores">Input Exact Scores</label>
                                                <input type="text" class="form-control mb-2" id="listeningScores" placeholder="Listening">
                                                <input type="text" class="form-control mb-2" id="readingScores" placeholder="Reading">
                                                <input type="text" class="form-control mb-2" id="writingScores" placeholder="Writing">
                                                <input type="text" class="form-control mb-2" id="speakingScores" placeholder="Speaking">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5">
                                <div class="wrap-info-scores">
                                    <div class="">
                                        <div class="sat-scores-test">
                                            <div class="mr-2">
                                                I have YOS exam scores
                                            </div>
                                            <label class="switch" data-toggle="collapse" data-target="#yosExamScores">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <div id="yosExamScores" class="collapse">
                                            <div class="form-group mt-4">
                                                <label for="yosExamDate">YOS Exam Date</label>
                                                <select class="form-control" id="yosExamDate">
                                                    <option selected>YYYY-MMM-DD</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="yosVerbalScore">Verbal</label>
                                                <input type="text" class="form-control mb-2" id="yosVerbalScore" placeholder="Score">
                                                <input type="text" class="form-control mb-2" id="yosVerbalRank" placeholder="Rank%">
                                            </div>
                                            <div class="form-group">
                                                <label for="yosVerbalScore">Quantitative</label>
                                                <input type="text" class="form-control mb-2" id="yosQuantitativeScore" placeholder="Score">
                                                <input type="text" class="form-control mb-2" id="yosQuantitativeRank" placeholder="Rank%">
                                            </div>
                                            <div class="form-group">
                                                <label for="yosWritingScore">Writing</label>
                                                <input type="text" class="form-control mb-2" id="yosWritingScore" placeholder="Score">
                                                <input type="text" class="form-control mb-2" id="yosWritingRank" placeholder="Rank%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-5">
                                <h4 class="mt-3">
                                    Additional Qualifications
                                </h4>
                            </div>

                        </div>
                        <div class="row d-flex justify-content-between align-items-end">
                            <div class="col-12 col-md-5">
                                <div class="wrap-info-scores">
                                    <div class="">
                                        <div class="sat-scores-test">
                                            <div class="mr-2">
                                                I have SAT exam scores
                                            </div>
                                            <label class="switch" data-toggle="collapse" data-target="#satExamScores">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <div id="satExamScores" class="collapse">
                                            <div class="form-group mt-4">
                                                <label for="SATSExamDate">SAT Exam Date</label>
                                                <select class="form-control" id="SATSExamDate">
                                                    <option selected>YYYY-MMM-DD</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="satVerbalScore">Verbal</label>
                                                <input type="text" class="form-control mb-2" id="satVerbalScore" placeholder="Score">
                                                <input type="text" class="form-control mb-2" id="satVerbalRank" placeholder="Rank%">
                                            </div>
                                            <div class="form-group">
                                                <label for="satVerbalScore">Quantitative</label>
                                                <input type="text" class="form-control mb-2" id="satQuantitativeScore" placeholder="Score">
                                                <input type="text" class="form-control mb-2" id="satQuantitativeRank" placeholder="Rank%">
                                            </div>
                                            <div class="form-group">
                                                <label for="satWritingScore">Writing</label>
                                                <input type="text" class="form-control mb-2" id="satWritingScore" placeholder="Score">
                                                <input type="text" class="form-control mb-2" id="satWritingRank" placeholder="Rank%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5">
                                <div class="wrap-info-scores">
                                    <div class="">
                                        <div class="sat-scores-test">
                                            <div class="mr-2">
                                                I have GMAT exam scores
                                            </div>
                                            <label class="switch" data-toggle="collapse" data-target="#gmatExamScores">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <div id="gmatExamScores" class="collapse">
                                            <div class="form-group mt-4">
                                                <label for="gmatExamDate">GMAT Exam Date</label>
                                                <select class="form-control" id="gmatExamDate">
                                                    <option selected>YYYY-MMM-DD</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="gmatVerbalScore">Verbal</label>
                                                <input type="text" class="form-control mb-2" id="gmatVerbalScore" placeholder="Score">
                                                <input type="text" class="form-control mb-2" id="gmatVerbalRank" placeholder="Rank%">
                                            </div>
                                            <div class="form-group">
                                                <label for="gmatVerbalScore">Quantitative</label>
                                                <input type="text" class="form-control mb-2" id="gmatQuantitativeScore" placeholder="Score">
                                                <input type="text" class="form-control mb-2" id="gmatQuantitativeRank" placeholder="Rank%">
                                            </div>
                                            <div class="form-group">
                                                <label for="gmatWritingScore">Writing</label>
                                                <input type="text" class="form-control mb-2" id="gmatWritingScore" placeholder="Score">
                                                <input type="text" class="form-control mb-2" id="gmatWritingRank" placeholder="Rank%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-5">
                                <div class="wrap-info-scores">
                                    <div class="mt-4">
                                        <div class="gre-scores-test">
                                            <div class="mr-2">
                                                I have GRE exam scores
                                            </div>
                                            <label class="switch " data-toggle="collapse" data-target="#GREExamScores">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                        <div id="GREExamScores" class="collapse">
                                            <div class="form-group mt-4">
                                                <label for="GREExamDate">GRE Exam Date</label>
                                                <select class="form-control" id="GREExamDate">
                                                    <option selected>YYYY-MMM-DD</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="GREVerbalScore">Verbal</label>
                                                <input type="text" class="form-control mb-2" id="GREVerbalScore" placeholder="Score">
                                                <input type="text" class="form-control mb-2" id="GREVerbalRank" placeholder="Rank%">
                                            </div>
                                            <div class="form-group">
                                                <label for="GREVerbalScore">Quantitative</label>
                                                <input type="text" class="form-control mb-2" id="GREQuantitativeScore" placeholder="Score">
                                                <input type="text" class="form-control mb-2" id="GREQuantitativeRank" placeholder="Rank%">
                                            </div>
                                            <div class="form-group">
                                                <label for="GREWritingScore">Writing</label>
                                                <input type="text" class="form-control mb-2" id="GREWritingScore" placeholder="Score">
                                                <input type="text" class="form-control mb-2" id="GREWritingRank" placeholder="Rank%">
                                            </div>
                                        </div>
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

<footer class="footer-main">
    @include('footer.footer')
</footer>
<script src="{{ asset('js/app.js') }}"></script>
<script>

        // $(".collapse").removeClass("collapse");
        // $("input[type=checkbox]").attr("checked", 'checked');

</script>
<style>

</style>