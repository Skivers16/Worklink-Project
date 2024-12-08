<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WorkLink</title>
    <link rel="stylesheet" href="/css/utama.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="/js/app.js" defer></script>
</head>

<body>
    <nav id="sidebar">
        <ul>
            <li>
                <a href="javascript:void(0);">
                    <img src="/img/assets/logo.png" alt="Logo" />
                    <span class="logo">WorkLink</span>
                </a>
                <button onclick="toggleSidebar()" id="toggle-btn">
                    <img src="/img/assets/List.svg" alt="toggle button" />
                </button>
            </li>
            <li>
                <a href="javascript:void(0);" data-section="dashboard">
                    <img src="/img/assets/home-2.svg" alt="" />
                    <span> Dashboard </span>
                </a>
            </li>
            <li>
                <a data-section="profile" href="javascript:void(0);">
                    <img src="/img/assets/profile.svg" alt="" />
                    <span> My Profile </span>
                </a>
            </li>
            <li class="active">
                <a data-section="career_showcase" href="javascript:void(0);">
                    <img src="/img/assets/document-text.svg" alt="" />
                    <span>Career Showcase</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <img src="/img/assets/brifecase-tick.svg" alt="" />
                    <span>Job Insight</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" data-section="liked_jobs">
                    <img src="/img/assets/heart.svg" alt="" />
                    <span>Liked Jobs</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <img src="/img/assets/key.svg" alt="" />
                    <span>Changed Password</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <img src="/img/assets/message-question.svg" alt="" />
                    <span>Help</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <img src="/img/assets/setting-2.svg" alt="" />
                    <span>Settings</span>
                </a>
            </li>
            <li>
                <a href="/login">
                    <img src="/img/assets/logout.svg" alt="" />
                    <span>Log Out</span>
                </a>
            </li>
        </ul>
        <img src="/img/assets/bottom_sidebar.png" alt="" />
    </nav>
    <main class="content-section">
        @foreach ($profile as $prf)
            <!--Profile-->
            <section id="profile" class="section active">
                <div class="menu_showcase">
                    <div class="flex_between">
                        <h1>My Profile</h1>
                    </div>
                    <div class="profile_container">
                        <img src="/img/assets/profile/labubu_profile_bg.png" class="profile_img" width="1184"
                            alt="">
                        <img src="/img/assets/profile/labubu_circle_img.png" class="labubu-circle" alt="">

                        <div class="ic-edit">
                            <img src="/img/assets/cards/ic_edit.svg" alt="Edit Icon" style="cursor: pointer"
                                data-toggle="modal" data-target="#myModal">
                        </div>
                        <!--Modal Starts here-->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <form action="/utama/profile/{{ $prf->id }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">First Name*</label>
                                                <input type="text" name="first_name" value="{{ $prf->first_name }}"
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Last Name*</label>
                                                <input type="text" name="last_name" value="{{ $prf->last_name }}"
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Username</label>
                                                <input type="text" name="username" value="{{ $prf->username }}"
                                                    class="form-control" id="recipient-name">
                                            </div>
                                            <br>
                                            <h5>Current Position</h5>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Industry*</label>
                                                <input type="text" name="industry" value="{{ $prf->industry }}"
                                                    class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Position*</label>
                                                <input type="text" name="position" value="{{ $prf->position }}"
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                            <br>
                                            <h5>Education</h5>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">School*</label>
                                                <input type="text" name="school"
                                                    value="{{ $prf->school }}"class="form-control"
                                                    id="recipient-name">
                                            </div>
                                            <br>
                                            <h5>Location</h5>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Country*</label>
                                                <input type="text" name="country" value="{{ $prf->country }}"
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">City</label>
                                                <input type="text" name="city" value="{{ $prf->city }}"
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--Modal Ends here-->
                        <div class="flex_between">
                            <div class="profile_bio">
                                <h2>{{ $prf->username }}</h2>
                                <h4>Hi There! I Am {{ $prf->user->name }}</h4>
                                <br>
                                <p>{{ $prf->city }}, {{ $prf->country }}</p>
                            </div>
                            <div class="profile_occ">
                                <img src="/img/assets/profile/pop_mart.png" width="35px" height="35px"
                                    alt="">
                                <p>Working In {{ !empty($prf->industry) ? $prf->industry : '-' }}</p>
                            </div>
                        </div>
                    </div>
        @endforeach
        <div class="profile_experience">
            <div class="flex_between">
                <h2>Work Experience</h2>
                <img src="/img/assets/cards/ic_edit.svg" alt="">
            </div>
            <div class="profile_experience_item">
                <img src="/img/assets/profile/pop_mart.png" width="50px" height="50px" alt="" />
                <div>
                    <h5>Pop Mart</h5>
                    <p>Full Time - 3 Years</p>
                </div>
            </div>
            <div class="profile_experience_list ">
                <div>
                    <h5>Product Manager</h5>
                    <p>July - Present</p>
                    <p>Manchester, UK</p>
                </div>
            </div>
            <div class="profile_experience_list">
                <div>
                    <h5>Product Sales</h5>
                    <p>July - Present</p>
                    <p>Manchester, UK</p>
                </div>
            </div>
        </div>
        </div>
        </section>
        {{-- CAREER SHOWCASE MULAI SINI --}}
        <section id="career_showcase" class="section">
            <div class="menu_showcase">
                <div class="header-content">
                    <input type="text" placeholder="Search" class="search-bar" />
                    <div class="profile">
                        <img src="/img/assets/labubu.png" alt="Profile Logo" class="profile-logo" />
                        <p>Labubu</p>
                    </div>
                </div>
                <h1>Career Showcase</h1>
                <div class="main_content">
                    <div class="editable_card">
                        <!------------------------------------------------->
                        <div class="d-flex justify-content-between">
                            <h3>Experience</h3>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modalAddExperience">Add Experience</button>
                        </div>
                        <!--Add Modal Experience Starts here-->
                        <div class="modal fade" id="modalAddExperience" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <form action="/utama/expr-add" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <h2>Add Data</h2>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Title</label>
                                                <input type="text" name="title" value=""
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Employment
                                                    Type</label>
                                                <input type="text" name="employment_type" value=""
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Company
                                                    Name</label>
                                                <input type="text" name="company_name" value=""
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Location</label>
                                                <input type="text" name="location" value=""
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="start-date" class="col-form-label">Start Date</label>
                                                <div class="flex_between">
                                                    <select class="form-control" id="start-date" name="start_date"
                                                        required>
                                                        <option value="January">January</option>
                                                        <option value="February">February</option>
                                                        <option value="March">March</option>
                                                        <option value="April">April</option>
                                                        <option value="May">May</option>
                                                        <option value="June">June</option>
                                                        <option value="July">July</option>
                                                        <option value="August">August</option>
                                                        <option value="September">September</option>
                                                        <option value="October">October</option>
                                                        <option value="November">November</option>
                                                        <option value="Desember">Desember</option>
                                                    </select>

                                                    <select class="form-control" id="start-year" name="start_year">
                                                        <option value="2010">2010</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                    </select>
                                                </div>

                                                <label for="end-date">End Date</label>
                                                <div class="flex_between">
                                                    <select class="form-control" id="end-date" name="end_date">
                                                        <option value="January">January</option>
                                                        <option value="February">February</option>
                                                        <option value="March">March</option>
                                                        <option value="April">April</option>
                                                        <option value="May">May</option>
                                                        <option value="June">June</option>
                                                        <option value="July">July</option>
                                                        <option value="August">August</option>
                                                        <option value="September">September</option>
                                                        <option value="October">October</option>
                                                        <option value="November">November</option>
                                                        <option value="Desember">Desember</option>
                                                    </select>

                                                    <select class="form-control" id="end-year" name="end_year">
                                                        <option value="2010">2010</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Profile
                                                    Headline</label>
                                                <input type="text" name="profile_headline" value=""
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Description</label>
                                                <input type="text" name="description" value=""
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--Add Modal Experience Ends here-->

                        @foreach ($experience as $expr)
                            <div class="card_content" id="card_expr-{{ $expr->id }}">
                                <img src="/img/assets/career_page/ub.png" alt="" />
                                <div>
                                    <h5>{{ $expr->profile_headline }}</h5>
                                    <p>{{ $expr->company_name }}</p>
                                    <p>{{ $expr->start_date }} {{ $expr->start_year }} - {{ $expr->end_date }}
                                        {{ $expr->end_year }}</p>
                                    <p>{{ $expr->employment_type }}</p>
                                    <p class="editable_card_desc">
                                        {{ $expr->description }}
                                    </p>
                                </div>
                            </div>
                            <div class="flex-center" id="flex_expr-{{ $expr->id }}">
                                <button type="button" data-toggle="modal"
                                    data-target="#modalEditExperience-{{ $expr->id }}" class="btn"><i
                                        class="fa fa-edit"></i><span>Edit Experience</span></button>
                                <button type="button" data-toggle="modal"
                                    data-target="#modalDeleteExperience-{{ $expr->id }}" class="btn"><i
                                        class="	fa fa-trash-o"></i><span>Delete Experience</span></button>
                            </div>
                            <!--Edit Modal Experience Starts here-->
                            <div class="modal fade" id="modalEditExperience-{{ $expr->id }}" tabindex="-1"
                                role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <form action="/utama/expr-edit/{{ $expr->id }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <h2>Add Data</h2>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Title</label>
                                                    <input type="text" name="title" value="{{ $expr->Title }}"
                                                        class="form-control" id="recipient-name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Employment
                                                        Type</label>
                                                    <input type="text" name="employment_type"
                                                        value="{{ $expr->employment_type }}" class="form-control"
                                                        id="recipient-name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Company
                                                        Name</label>
                                                    <input type="text" name="company_name"
                                                        value="{{ $expr->company_name }}" class="form-control"
                                                        id="recipient-name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Location</label>
                                                    <input type="text" name="location"
                                                        value="{{ $expr->location }}" class="form-control"
                                                        id="recipient-name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="start-date" class="col-form-label">Start Date</label>
                                                    <div class="flex_between">
                                                        <select class="form-control" id="start-date"
                                                            name="start_date" required>
                                                            <option value="January">January</option>
                                                            <option value="February">February</option>
                                                            <option value="March">March</option>
                                                            <option value="April">April</option>
                                                            <option value="May">May</option>
                                                            <option value="June">June</option>
                                                            <option value="July">July</option>
                                                            <option value="August">August</option>
                                                            <option value="September">September</option>
                                                            <option value="October">October</option>
                                                            <option value="November">November</option>
                                                            <option value="Desember">Desember</option>
                                                        </select>

                                                        <select class="form-control" id="start-year"
                                                            name="start_year">
                                                            <option value="2010">2010</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                        </select>
                                                    </div>

                                                    <label for="end-date">End Date</label>
                                                    <div class="flex_between">
                                                        <select class="form-control" id="end-date" name="end_date">
                                                            <option value="January">January</option>
                                                            <option value="February">February</option>
                                                            <option value="March">March</option>
                                                            <option value="April">April</option>
                                                            <option value="May">May</option>
                                                            <option value="June">June</option>
                                                            <option value="July">July</option>
                                                            <option value="August">August</option>
                                                            <option value="September">September</option>
                                                            <option value="October">October</option>
                                                            <option value="November">November</option>
                                                            <option value="Desember">Desember</option>
                                                        </select>

                                                        <select class="form-control" id="end-year" name="end_year">
                                                            <option value="2010">2010</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Profile
                                                        Headline</label>
                                                    <input type="text" name="profile_headline"
                                                        value="{{ $expr->profile_headline }}" class="form-control"
                                                        id="recipient-name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Description</label>
                                                    <input type="text" name="description"
                                                        value="{{ $expr->description }}" class="form-control"
                                                        id="recipient-name" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Edit Modal Experience Ends here-->
                            <!--Delete Modal Experience Starts here-->
                            <div class="modal fade" id="modalDeleteExperience-{{ $expr->id }}" tabindex="-1"
                                role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Delete this data?
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>This changes cannot be reversed.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <form action="/utama/expr-del/{{ $expr->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Delete Data</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Delete Modal Experience Ends here-->
                        @endforeach
                        <!------------------------------------------------->
                        <hr />
                    </div>
                    <div class="editable_card">
                        <!------------------------------------------------->
                        <div class="d-flex justify-content-between">
                            <h3>Licenses & Certifications</h3>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modalAddCertifications">Add Certifications</button>
                        </div>
                        <!--Add Modal Certifications Starts here-->
                        <div class="modal fade" id="modalAddCertifications" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <form action="/utama/cert-add" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <h2>Add Data</h2>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Name</label>
                                                <input type="text" name="name" value=""
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name"
                                                    class="col-form-label">Organization</label>
                                                <input type="text" name="organization" value=""
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="start-date" class="col-form-label">Start Date</label>
                                                <div class="flex_between">
                                                    <select class="form-control" id="start-date" name="start_date"
                                                        required>
                                                        <option value="January">January</option>
                                                        <option value="February">February</option>
                                                        <option value="March">March</option>
                                                        <option value="April">April</option>
                                                        <option value="May">May</option>
                                                        <option value="June">June</option>
                                                        <option value="July">July</option>
                                                        <option value="August">August</option>
                                                        <option value="September">September</option>
                                                        <option value="October">October</option>
                                                        <option value="November">November</option>
                                                        <option value="Desember">Desember</option>
                                                    </select>

                                                    <select class="form-control" id="start-year" name="start_year">
                                                        <option value="2010">2010</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                    </select>
                                                </div>

                                                <label for="end-date">End Date</label>
                                                <div class="flex_between">
                                                    <select class="form-control" id="end-date" name="end_date">
                                                        <option value="January">January</option>
                                                        <option value="February">February</option>
                                                        <option value="March">March</option>
                                                        <option value="April">April</option>
                                                        <option value="May">May</option>
                                                        <option value="June">June</option>
                                                        <option value="July">July</option>
                                                        <option value="August">August</option>
                                                        <option value="September">September</option>
                                                        <option value="October">October</option>
                                                        <option value="November">November</option>
                                                        <option value="Desember">Desember</option>
                                                    </select>

                                                    <select class="form-control" id="end-year" name="end_year">
                                                        <option value="2010">2010</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Location</label>
                                                <input type="text" name="location" value=""
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Description</label>
                                                <input type="text" name="description" value=""
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--Add Modal Certifications Ends here-->
                        @foreach ($certifications as $cert)
                            <div class="card_content">
                                <img src="/img/assets/career_page/coursera.png" alt="" />
                                <div>
                                    <h5>{{ $cert->name }}</h5>
                                    <p>{{ $cert->organization }}</p>
                                    <p>{{ $cert->start_date }} {{ $cert->start_year }} - {{ $cert->end_date }}
                                        {{ $cert->end_year }}</p>
                                    <p>{{ $cert->location }}</p>
                                    <p class="editable_card_desc">{{ $cert->description }}</p>
                                </div>
                            </div>
                            <div class="flex-center" id="flex_cert-{{ $cert->id }}">
                                <button type="button" data-toggle="modal"
                                    data-target="#modalEditCertifications-{{ $cert->id }}" class="btn"><i
                                        class="fa fa-edit"></i><span>Edit Certifications</span></button>
                                <button type="button" data-toggle="modal"
                                    data-target="#modalDeleteCertifications-{{ $cert->id }}" class="btn"><i
                                        class="	fa fa-trash-o"></i><span>Delete Certifications</span></button>
                            </div>
                            <!--Edit Modal Certifications Starts here-->
                            <div class="modal fade" id="modalEditCertifications-{{ $cert->id }}" tabindex="-1"
                                role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <form action="/utama/cert-edit/{{ $cert->id }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <h2>Add Data</h2>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Name</label>
                                                    <input type="text" name="name" value="{{ $cert->name }}"
                                                        class="form-control" id="recipient-name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Organization</label>
                                                    <input type="text" name="organization"
                                                        value="{{ $cert->organization }}" class="form-control"
                                                        id="recipient-name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="start-date" class="col-form-label">Start Date</label>
                                                    <div class="flex_between">
                                                        <select class="form-control" id="start-date"
                                                            name="start_date" required>
                                                            <option value="January">January</option>
                                                            <option value="February">February</option>
                                                            <option value="March">March</option>
                                                            <option value="April">April</option>
                                                            <option value="May">May</option>
                                                            <option value="June">June</option>
                                                            <option value="July">July</option>
                                                            <option value="August">August</option>
                                                            <option value="September">September</option>
                                                            <option value="October">October</option>
                                                            <option value="November">November</option>
                                                            <option value="Desember">Desember</option>
                                                        </select>

                                                        <select class="form-control" id="start-year"
                                                            name="start_year">
                                                            <option value="2010">2010</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                        </select>
                                                    </div>

                                                    <label for="end-date">End Date</label>
                                                    <div class="flex_between">
                                                        <select class="form-control" id="end-date" name="end_date">
                                                            <option value="January">January</option>
                                                            <option value="February">February</option>
                                                            <option value="March">March</option>
                                                            <option value="April">April</option>
                                                            <option value="May">May</option>
                                                            <option value="June">June</option>
                                                            <option value="July">July</option>
                                                            <option value="August">August</option>
                                                            <option value="September">September</option>
                                                            <option value="October">October</option>
                                                            <option value="November">November</option>
                                                            <option value="Desember">Desember</option>
                                                        </select>

                                                        <select class="form-control" id="end-year" name="end_year">
                                                            <option value="2010">2010</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Location</label>
                                                    <input type="text" name="location"
                                                        value="{{ $cert->location }}" class="form-control"
                                                        id="recipient-name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Description</label>
                                                    <input type="text" name="description"
                                                        value="{{ $cert->description }}" class="form-control"
                                                        id="recipient-name" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Edit Modal Certifications Ends here-->
                            <!--Delete Modal Certifications Starts here-->
                            <div class="modal fade" id="modalDeleteCertifications-{{ $cert->id }}" tabindex="-1"
                                role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Delete this data?
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>This changes cannot be reversed.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <form action="/utama/cert-del/{{ $cert->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Delete Data</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Delete Modal Experience Ends here-->
                        @endforeach
                        <hr />
                    </div>
                    <div class="editable_card">
                        <!------------------------------------------------->
                        <div class="d-flex justify-content-between">
                            <h3>Work Experience</h3>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modalAddWorkExperience">Add Work Experience</button>
                        </div>
                        <!--Add Modal Work Experience Starts here-->
                        <div class="modal fade" id="modalAddWorkExperience" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <form action="/utama/wrkexpr-add" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <h2>Add Data</h2>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Title</label>
                                                <input type="text" name="title" value=""
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Employment
                                                    Type</label>
                                                <input type="text" name="employment_type" value=""
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Company
                                                    Name</label>
                                                <input type="text" name="company_name" value=""
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Location</label>
                                                <input type="text" name="location" value=""
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="start-date" class="col-form-label">Start Date</label>
                                                <div class="flex_between">
                                                    <select class="form-control" id="start-date" name="start_date"
                                                        required>
                                                        <option value="January">January</option>
                                                        <option value="February">February</option>
                                                        <option value="March">March</option>
                                                        <option value="April">April</option>
                                                        <option value="May">May</option>
                                                        <option value="June">June</option>
                                                        <option value="July">July</option>
                                                        <option value="August">August</option>
                                                        <option value="September">September</option>
                                                        <option value="October">October</option>
                                                        <option value="November">November</option>
                                                        <option value="Desember">Desember</option>
                                                    </select>

                                                    <select class="form-control" id="start-year" name="start_year">
                                                        <option value="2010">2010</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                    </select>
                                                </div>

                                                <label for="end-date">End Date</label>
                                                <div class="flex_between">
                                                    <select class="form-control" id="end-date" name="end_date">
                                                        <option value="January">January</option>
                                                        <option value="February">February</option>
                                                        <option value="March">March</option>
                                                        <option value="April">April</option>
                                                        <option value="May">May</option>
                                                        <option value="June">June</option>
                                                        <option value="July">July</option>
                                                        <option value="August">August</option>
                                                        <option value="September">September</option>
                                                        <option value="October">October</option>
                                                        <option value="November">November</option>
                                                        <option value="Desember">Desember</option>
                                                    </select>

                                                    <select class="form-control" id="end-year" name="end_year">
                                                        <option value="2010">2010</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Profile
                                                    Headline</label>
                                                <input type="text" name="profile_headline" value=""
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Description</label>
                                                <input type="text" name="description" value=""
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--Add Modal Work Experience Ends here-->
                        @foreach ($work_experience as $wrkexpr)
                            <div class="card_content">
                                <img src="/img/assets/career_page/coursera.png" alt="" />
                                <div>
                                    <h5>{{ $wrkexpr->profile_headline }}</h5>
                                    <p>{{ $wrkexpr->company_name }}</p>
                                    <p>{{ $wrkexpr->start_date }} {{ $expr->start_year }} - {{ $expr->end_date }}
                                        {{ $wrkexpr->end_year }}</p>
                                    <p>{{ $wrkexpr->employment_type }}</p>
                                    <p class="editable_card_desc">
                                        {{ $wrkexpr->description }}
                                    </p>
                                </div>
                            </div>
                            <div class="flex-center" id="flex_cert-{{ $wrkexpr->id }}">
                                <button type="button" data-toggle="modal"
                                    data-target="#modalEditWorkExperience-{{ $wrkexpr->id }}" class="btn"><i
                                        class="fa fa-edit"></i><span>Edit Work Experience</span></button>
                                <button type="button" data-toggle="modal"
                                    data-target="#modalDeleteWorkExperience-{{ $wrkexpr->id }}" class="btn"><i
                                        class="	fa fa-trash-o"></i><span>Delete Work Experience</span></button>
                            </div>
                            <!--Edit Modal Work Experience Starts here-->
                            <div class="modal fade" id="modalEditWorkExperience-{{ $wrkexpr->id }}" tabindex="-1"
                                role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <form action="/utama/wrkexpr-edit/{{ $wrkexpr->id }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <h2>Add Data</h2>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Title</label>
                                                    <input type="text" name="Title"
                                                        value="{{ $wrkexpr->Title }}" class="form-control"
                                                        id="recipient-name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Employment
                                                        Type</label>
                                                    <input type="text" name="employment_type"
                                                        value="{{ $wrkexpr->employment_type }}" class="form-control"
                                                        id="recipient-name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Company
                                                        Name</label>
                                                    <input type="text" name="employment_type"
                                                        value="{{ $wrkexpr->company_name }}" class="form-control"
                                                        id="recipient-name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Location</label>
                                                    <input type="text" name="location"
                                                        value="{{ $wrkexpr->location }}" class="form-control"
                                                        id="recipient-name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="start-date" class="col-form-label">Start Date</label>
                                                    <div class="flex_between">
                                                        <select class="form-control" id="start-date"
                                                            name="start_date" required>
                                                            <option value="January">January</option>
                                                            <option value="February">February</option>
                                                            <option value="March">March</option>
                                                            <option value="April">April</option>
                                                            <option value="May">May</option>
                                                            <option value="June">June</option>
                                                            <option value="July">July</option>
                                                            <option value="August">August</option>
                                                            <option value="September">September</option>
                                                            <option value="October">October</option>
                                                            <option value="November">November</option>
                                                            <option value="Desember">Desember</option>
                                                        </select>

                                                        <select class="form-control" id="start-year"
                                                            name="start_year">
                                                            <option value="2010">2010</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                        </select>
                                                    </div>

                                                    <label for="end-date">End Date</label>
                                                    <div class="flex_between">
                                                        <select class="form-control" id="end-date"
                                                            name="end_date">
                                                            <option value="January">January</option>
                                                            <option value="February">February</option>
                                                            <option value="March">March</option>
                                                            <option value="April">April</option>
                                                            <option value="May">May</option>
                                                            <option value="June">June</option>
                                                            <option value="July">July</option>
                                                            <option value="August">August</option>
                                                            <option value="September">September</option>
                                                            <option value="October">October</option>
                                                            <option value="November">November</option>
                                                            <option value="Desember">Desember</option>
                                                        </select>

                                                        <select class="form-control" id="end-year"
                                                            name="end_year">
                                                            <option value="2010">2010</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Profile
                                                        Headline</label>
                                                    <input type="text" name="profile_headline"
                                                        value="{{ $wrkexpr->profile_headline }}"
                                                        class="form-control" id="recipient-name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Description</label>
                                                    <input type="text" name="description"
                                                        value="{{ $wrkexpr->description }}" class="form-control"
                                                        id="recipient-name" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Edit Modal Work Experience Ends here-->
                            <!--Delete Modal Work Experience Starts here-->
                            <div class="modal fade" id="modalDeleteWorkExperience-{{ $wrkexpr->id }}"
                                tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Delete this data?
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>This changes cannot be reversed.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <form action="/utama/wrkexpr-del/{{ $wrkexpr->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Delete Data</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Delete Modal Experience Ends here-->
                        @endforeach
                        <hr />
                    </div>
                    <div class="editable_card">
                        <!------------------------------------------------->
                        <div class="d-flex justify-content-between">
                            <h3>Skills</h3>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modalAddSkills">Add Skills</button>
                        </div>
                        <!--Add Modal Skills Starts here-->
                        <div class="modal fade" id="modalAddSkills" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <form action="/utama/skl-add" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <h2>Add Data</h2>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Name Skill</label>
                                                <input type="text" name="name_skill" value=""
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Work as</label>
                                                <input type="text" name="work_as" value=""
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Experience</label>
                                                <input type="text" name="experience" value=""
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Description</label>
                                                <input type="text" name="description" value=""
                                                    class="form-control" id="recipient-name" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--Add Modal Skills Ends here-->
                        @foreach ($skills as $skl)
                            <div class="card_content">
                                <img src="/img/assets/career_page/coursera.png" alt="" />
                                <div>
                                    <h5>{{ $skl->name_skill }}</h5>
                                    <p>{{ $skl->work_as }}</p>
                                    <p>{{ $skl->experience }}</p>
                                    <p>{{ $skl->description }}</p>
                                </div>
                            </div>
                            <div class="flex-center" id="flex_cert-{{ $skl->id }}">
                                <button type="button" data-toggle="modal"
                                    data-target="#modalEditSkills-{{ $skl->id }}" class="btn"><i
                                        class="fa fa-edit"></i><span>Edit Skill</span></button>
                                <button type="button" data-toggle="modal"
                                    data-target="#modalDeleteSkills-{{ $skl->id }}" class="btn"><i
                                        class="	fa fa-trash-o"></i><span>Delete Skill</span></button>
                            </div>
                            <!--Edit Modal Skills Starts here-->
                            <div class="modal fade" id="modalEditSkills-{{ $skl->id }}" tabindex="-1"
                                role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <form action="/utama/skl-edit/{{ $skl->id }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <h2>Add Data</h2>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Name Skill</label>
                                                    <input type="text" name="name_skill"
                                                        value="{{ $skl->name_skill }}" class="form-control"
                                                        id="recipient-name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Work as</label>
                                                    <input type="text" name="work_as"
                                                        value="{{ $skl->work_as }}" class="form-control"
                                                        id="recipient-name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Experience</label>
                                                    <input type="text" name="experience"
                                                        value="{{ $skl->experience }}" class="form-control"
                                                        id="recipient-name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name"
                                                        class="col-form-label">Description</label>
                                                    <input type="text" name="description"
                                                        value="{{ $skl->description }}" class="form-control"
                                                        id="recipient-name" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Edit Modal Skills Ends here-->
                            <!--Delete Modal Skills Starts here-->
                            <div class="modal fade" id="modalDeleteSkills-{{ $skl->id }}"
                                tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Delete this data?
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>This changes cannot be reversed.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <form action="/utama/skl-del/{{ $skl->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Delete Data</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Delete Modal Experience Ends here-->
                        @endforeach
                        <hr />
                    </div>
                </div>
        </section>
        <section id="career_showcase_edit" class="section">
            <div class="menu_showcase">
                <div class="header-content">
                    <input type="text" placeholder="Search" class="search-bar" />
                    <div class="profile">
                        <img src="/img/assets/labubu.png" alt="Profile Logo" class="profile-logo" />
                        <p>Labubu</p>
                    </div>
                </div>
                <h1>Career Showcase</h1>
                <div class="main_content">
                    <div class="editable_card">
                        <div class="flex_between">
                            <h3>Experience</h3>
                            <div class="ed_card_action">
                                <img src="/img/assets/cards/ic_delete.svg" alt="" />
                            </div>
                        </div>
                        <div>
                            <h6 class="subtitle">Show your Experience and be up to 2X more likely due receive
                                engangement</h6>
                            <div class="edit_card_content">
                                <img src="/img/assets/empty.png" alt="" />
                                <div>
                                    <p>Organizations/Volunteer</p>
                                    <p>Feb 2024 - Mar 2024</p>
                                </div>
                            </div>
                            <hr />
                        </div>
                    </div>
                    <div class="editable_card">
                        <div class="flex_between">
                            <h3>Licenses & Certifications</h3>
                            <div class="ed_card_action">
                                <img src="/img/assets/cards/ic_delete.svg" alt="" />
                            </div>
                        </div>
                        <div>
                            <h6 class="subtitle">Show your Licenses and be up to 2X more likely due receive
                                engangement
                            </h6>
                            <div class="edit_card_content">
                                <img src="/img/assets/empty.png" alt="" />
                                <div>
                                    <p>Licenses & Certifications</p>
                                    <p>Feb 2024 - Mar 2024</p>
                                </div>
                            </div>
                            <hr />
                            <div class="flex-center">
                                <button onclick="showPopUp(this.id)" id="add" class="btn"><i
                                        class="fa fa-plus"></i><span>Add Licenses</span></button>
                                <button onclick="showPopUp(this.id)" id="edit" class="btn"><i
                                        class="fa fa-edit"></i><span>Edit Licenses</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="editable_card">
                        <div class="flex_between">
                            <h3>Work Experience</h3>
                            <div class="ed_card_action">
                                <img src="/img/assets/cards/ic_delete.svg" alt="" />
                            </div>
                        </div>
                        <div>
                            <h6 class="subtitle">Show your Work Experience and be up to 2X more likely due receive
                                engangement</h6>
                            <div class="edit_card_content">
                                <img src="/img/assets/empty.png" alt="" />
                                <div>
                                    <p>Work Experience</p>
                                    <p>Feb 2024 - Mar 2024</p>
                                </div>
                            </div>
                            <hr />
                            <div class="flex-center">
                                <button onclick="showPopUp(this.id)" id="add" class="btn"><i
                                        class="fa fa-plus"></i><span>Add Work</span></button>
                                <button onclick="showPopUp(this.id)" id="edit" class="btn"><i
                                        class="fa fa-edit"></i><span>Edit Work</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="editable_card">
                        <div class="flex_between">
                            <h3>Skills</h3>
                            <div class="ed_card_action">
                                <img src="/img/assets/cards/ic_delete.svg" alt="" />
                            </div>
                        </div>
                        <div>
                            <h6 class="subtitle">Show your Skills and be up to 2X more likely due receive
                                engangement
                            </h6>
                            <div class="edit_card_content">
                                <img src="/img/assets/empty.png" alt="" />
                                <div>
                                    <p>Hardskill / Softskill</p>
                                    <p>Level</p>
                                </div>
                            </div>
                            <hr />
                            <div class="flex-center">
                                <button onclick="showPopUp(this.id)" id="add" class="btn"><i
                                        class="fa fa-plus"></i><span>Add Skill</span></button>
                                <button onclick="showPopUp(this.id)" id="edit" class="btn"><i
                                        class="fa fa-edit"></i><span>Edit Skill</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="liked_jobs" class="section ">
            <div class="menu_showcase">
                <div class="header-content">
                    <input type="text" placeholder="Search" class="search-bar" />
                    <div class="profile">
                        <img src="/img/assets/labubu.png" alt="Profile Logo" class="profile-logo" />
                        <p>Labubu</p>
                    </div>
                </div>
                <h1>Liked Job</h1>
                <div class="main_content">
                    <div class="editable_card">
                        <div class="flex_between">
                            <h3>Senior UI & UX Designer</h3>
                            <img src="/img/assets/cards/ic_heart_filled.svg" onclick="isFavorite(this)"
                                alt="" />
                        </div>
                        <div class="jobs_liked_content">
                            <p>Slack Company LLC <span><img src="/img/assets/cards/verified.png" width="12px"
                                        alt="" /> | Any work experience | $500 - $600</p>
                            <div class="flex-start">
                                <div class="tag-item">
                                    <p>Contract</p>
                                </div>
                                <div class="tag-item">
                                    <p>Remote</p>
                                </div>
                                <div class="tag-item">
                                    <p>Full time</p>
                                </div>
                                <div class="tag-item">
                                    <p>Entry level</p>
                                </div>
                            </div>
                            <hr />
                            <div class="flex_between">
                                <div class="flex-start">
                                    <img src="/img/assets/cards/location.svg" width="15px" alt="">
                                    <p>Los Angeles, CA</p>
                                </div>
                                <p>19 hours ago</p>
                            </div>
                        </div>
                    </div>

                    <div class="editable_card">
                        <div class="flex_between">
                            <h3>Senior UI & UX Designer</h3>
                            <img src="/img/assets/cards/ic_heart_filled.svg" onclick="isFavorite(this)"
                                alt="" />
                        </div>
                        <div class="jobs_liked_content">
                            <p>Slack Company LLC <span><img src="/img/assets/cards/verified.png" width="12px"
                                        alt="" /> | Any work experience | $500 - $600</p>
                            <div class="flex-start">
                                <div class="tag-item">
                                    <p>Contract</p>
                                </div>
                                <div class="tag-item">
                                    <p>Remote</p>
                                </div>
                                <div class="tag-item">
                                    <p>Full time</p>
                                </div>
                                <div class="tag-item">
                                    <p>Entry level</p>
                                </div>
                            </div>
                            <hr />
                            <div class="flex_between">
                                <div class="flex-start">
                                    <img src="/img/assets/cards/location.svg" width="15px" alt="">
                                    <p>Los Angeles, CA</p>
                                </div>
                                <p>19 hours ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="editable_card">
                        <div class="flex_between">
                            <h3>Senior UI & UX Designer</h3>
                            <img src="/img/assets/cards/ic_heart_filled.svg" alt=""
                                onclick="isFavorite(this)" />
                        </div>
                        <div class="jobs_liked_content">
                            <p>Slack Company LLC <span><img src="/img/assets/cards/verified.png" width="12px"
                                        alt="" /> | Any work experience | $500 - $600</p>
                            <div class="flex-start">
                                <div class="tag-item">
                                    <p>Contract</p>
                                </div>
                                <div class="tag-item">
                                    <p>Remote</p>
                                </div>
                                <div class="tag-item">
                                    <p>Full time</p>
                                </div>
                                <div class="tag-item">
                                    <p>Entry level</p>
                                </div>
                            </div>
                            <hr />
                            <div class="flex_between">
                                <div class="flex-start">
                                    <img src="/img/assets/cards/location.svg" width="15px" alt="">
                                    <p>Los Angeles, CA</p>
                                </div>
                                <p>19 hours ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="add_form">
            <form class="form-container">
                <div class="flex_between">
                    <h3>Add Data</h3>
                    <i onclick="closePopUp(this.id)" id="add_close" class="fa fa-close"></i>
                </div>
                <label for="title">Title</label>
                <input type="text" placeholder="ex: Retail Sales Manager">

                <label for="employment-type">Employment Type</label>
                <input type="text" placeholder="ex: Full Time">

                <label for="company">Company Name</label>
                <input type="text" placeholder="ex: Microsoft">

                <label for="location">Location</label>
                <input type="text" placeholder="ex: London, United Kingdom">



                <label for="headline">Profile Headline</label>
                <input type="text" placeholder="ex: Senior Retail Sales Manager">

                <label for="description">Description</label>
                <textarea type="text" placeholder="ex: List your major duties and successes, highlighting spesific project"></textarea>

                <input type="submit" value="Save" class="btn-submit">
        </div>
        <div class="edit_form">
            <form class="form-container">
                <div class="flex_between">
                    <h3>Edit Data</h3>
                    <i onclick="closePopUp(this.id)" id="edit_close" class="fa fa-close"></i>
                </div>
                <label for="title">Title</label>
                <input type="text" placeholder="ex: Retail Sales Manager">

                <label for="employment-type">Employment Type</label>
                <input type="text" placeholder="ex: Full Time">

                <label for="company">Company Name</label>
                <input type="text" placeholder="ex: Microsoft">

                <label for="location">Location</label>
                <input type="text" placeholder="ex: London, United Kingdom">

                <label for="start-date">Start Date</label>
                <div class="flex_between">
                    <select id="start-date" name="Start Date">
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                    </select>

                    <select id="start-year" name="Start Year">
                        <option value="2000">2010</option>
                        <option value="2001">2011</option>
                        <option value="2002">2012</option>
                        <option value="2003">2013</option>
                        <option value="2004">2014</option>
                        <option value="2005">2015</option>
                        <option value="2000">2016</option>
                        <option value="2001">2017</option>
                        <option value="2002">2018</option>
                        <option value="2003">2019</option>
                        <option value="2004">2020</option>
                        <option value="2005">2021</option>
                        <option value="2000">2022</option>
                        <option value="2001">2023</option>
                        <option value="2002">2024</option>
                    </select>
                </div>

                <label for="end-date">End Date</label>
                <div class="flex_between">
                    <select id="end-date" name="End Date">
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                    </select>

                    <select id="end-year" name="End Year">
                        <option value="2000">2010</option>
                        <option value="2001">2011</option>
                        <option value="2002">2012</option>
                        <option value="2003">2013</option>
                        <option value="2004">2014</option>
                        <option value="2005">2015</option>
                        <option value="2000">2016</option>
                        <option value="2001">2017</option>
                        <option value="2002">2018</option>
                        <option value="2003">2019</option>
                        <option value="2004">2020</option>
                        <option value="2005">2021</option>
                        <option value="2000">2022</option>
                        <option value="2001">2023</option>
                        <option value="2002">2024</option>
                    </select>
                </div>

                <label for="headline">Profile Headline</label>
                <input type="text" placeholder="ex: Senior Retail Sales Manager">

                <label for="description">Description</label>
                <textarea type="text" placeholder="ex: List your major duties and successes, highlighting spesific project"></textarea>

                <input type="submit" value="Save" class="btn-submit">
        </div>
    </main>
</body>

</html>
