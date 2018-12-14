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
                                        Education Summary
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-between">
                            <div class="col-12 col-md-5">
                                <div>
                                    <div class="form-group">
                                        <label for="CountryofEducation">Country of Education*</label>
                                        <select class="form-control" id="CountryofEducation">
                                            <option selected>Select</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="GradeAverage">Grade Average</label>
                                        <input type="text" class="form-control" id="GradeAverage" aria-describedby="GradeAverage" placeholder="Enter Grade Average...">
                                    </div>
                                    <div class="">
                                        <label class="container-checkbox mb-4">Graduated from most recent school
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center cursor-pointer">
                                            <img src="{{ asset('img/students/plus.svg') }}" alt="" class="mr-2">
                                            <span class="add-attended">
                                                Add attended school
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5">
                                <div>
                                    <div class="form-group">
                                        <label for="HighestLevelofEducation">Highest Level of Education*</label>
                                        <select class="form-control" id="HighestLevelofEducation">
                                            <option selected>Select Highest Level of Education</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="GradingScheme">Grading Scheme*</label>
                                        <select class="form-control" id="GradingScheme">
                                            <option selected>Other</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper-schools-attended" id="schoolsAttended-0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="student-info__title">
                                    <h4>
                                        Schools Attended
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-between">
                            <div class="col-12 col-md-5">
                                <div>
                                    <div class="form-group">
                                        <label for="LevelofEducation">Level of Education</label>
                                        <select class="form-control" id="CountryofEducation">
                                            <option selected>Select Level of Education...</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="CountryofInstitution">Country of Institution</label>
                                        <select class="form-control" id="CountryofInstitution">
                                            <option selected>Select Country...</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="NameofInstitution">Name of Institution</label>
                                        <select class="form-control" id="NameofInstitution">
                                            <option selected>Enter Name of Institution...</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="NameofInstitution">Primary Language of Instruction</label>
                                        <select class="form-control" id="NameofInstitution">
                                            <option selected>Enter Language of Instruction...</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5">
                                <div>
                                    <div class="form-group">
                                        <label for="AttendedInstitutionForm">Attended Institution Form</label>
                                        <select class="form-control" id="AttendedInstitutionForm">
                                            <option selected>YYYY-MMM-DD</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="AttendedInstitutionTo">Attended Institution To</label>
                                        <select class="form-control" id="AttendedInstitutionTo">
                                            <option selected>YYYY-MMM-DD</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="GradingScheme">Degree Awarded</label>
                                        <select class="form-control" id="GradingScheme">
                                            <option selected>Enter Degree Awarded</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="DegreeAwardedOn">Degree Awarded On</label>
                                        <select class="form-control" id="DegreeAwardedOn">
                                            <option selected>YYYY-MMM-DD</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-between">
                            <div class="col-12">
                                <div class="font-weight-bold mt-4 mb-2">
                                    School Address
                                </div>
                            </div>
                            <div class="col-12 col-md-5">
                                <div class="form-group">
                                    <label for="addressAttend">Address</label>
                                    <input type="text" class="form-control" id="addressAttend" aria-describedby="addressAttend" placeholder="Enter Address...">
                                </div>
                                <div class="form-group">
                                    <label for="cityAttend">City/Town</label>
                                    <input type="text" class="form-control" id="cityAttend" aria-describedby="cityAttend" placeholder="Enter City/Town...">
                                </div>
                                <div>
                                    <div class="d-flex align-items-center cursor-pointer">
                                        <img src="{{ asset('img/students/plus.svg') }}" alt="" class="mr-2">
                                        <span class="add-attended">
                                                Add attended school
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5">
                                <div class="form-group">
                                    <label for="ProvinceAttend">Province</label>
                                    <input type="text" class="form-control" id="addressAttend" aria-describedby="ProvinceAttend" placeholder="Enter Province...">
                                </div>
                                <div class="form-group">
                                    <label for="zipCodeAttend">Postal/Zip Code</label>
                                    <input type="text" class="form-control" id="addressAttend" aria-describedby="zipCodeAttend" placeholder="Enter Postal/Zip Code...">
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
