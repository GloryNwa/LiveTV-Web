<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Listen App - Online Music Streaming App Template">
    <meta name="keywords" content="music template, music app, music web app, responsive music app, music, themeforest, html music app template, css3, html5">
    <title>LiveTV- Web App</title>
    <link href="../assets/img/logo-icon.png" rel="icon">
    <link rel="apple-touch-icon" href="../assets/images/logos/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/logos/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/logos/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="../assets/images/logos/touch-icon-ipad-retina.png">
    <link href="../assets/css/vendors.bundle.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/styles.bundle.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- <div id="loading">
    <div class="loader">
      <div class="eq"><span class="eq-bar eq-bar--1"></span> <span class="eq-bar eq-bar--2"></span> <span class="eq-bar eq-bar--3"></span> <span class="eq-bar eq-bar--4"></span> <span class="eq-bar eq-bar--5"></span> <span class="eq-bar eq-bar--6"></span></div><span class="text">Loading</span>
    </div>
  </div> -->
    <div id="wrapper" data-scrollable="true">
        <aside id="sidebar" class="sidebar-primary">
            <div class="sidebar-header d-flex align-items-center"><a href="#" class="brand"><img src="/assets/img/logo-icon.png" alt="LiveTV"> </a><button type="button" class="btn p-0 ml-auto" id="hideSidebar"><i class="ion-md-arrow-back h3"></i></button> <button type="button" class="btn toggle-menu" id="toggleSidebar"><span></span> <span></span> <span></span></button></div>
            <nav class="navbar">
                <ul class="navbar-nav" data-scrollable="true">
                    <li class="nav-item nav-header">Browse Categories</li>
                    <li class="nav-item"><a href="{{route('index')}}" class="nav-link"><i class="la la-home"></i><span>Home</span></a></li>
                    <li class="nav-item"><a href="{{route('stations')}}" class="nav-link"><i class="la la-tv"></i><span>LiveTV</span></a></li>
                    <li class="nav-item"><a href="{{route('category')}}" class="nav-link"><i class="la la-bullseye"></i><span>Catch-Up</span></a></li>
                    <li class="nav-item"><a href="{{route('profile')}}" class="nav-link"><i class="la la-users"></i><span>Profile</span></a></li>
                    <!-- <li class="nav-item"><a href="{{route('stations')}}" class="nav-link"><i class="la la-bullseye"></i><span>Stations</span></a></li> -->
                </ul>
            </nav>
            <div class="sidebar-footer"><a href="{{route('logout')}}" class="btn btn-block btn-danger btn-air btn-bold"><i class="ion-md-log-out"></i> <span>Sign Out</span></a></div>
        </aside>
        <main id="pageWrapper">
            <header id="header" class="" style="background-color:#253dcb !important">
                <div class="d-flex align-items-center"><button type="button" class="btn toggle-menu mr-3" id="openSidebar"><span></span> <span></span> <span></span></button>

                    <form action="#" id="searchForm"><input type="text" class="form-control">
                        <div class="search-card" data-scrollable="true">
                            <div class="mb-3">
                                <!-- <div class="d-flex"><span class="text-uppercase mr-auto font-weight-bold text-dark">Artists</span> <a href="artists.html">View All</a></div> -->
                                <hr>
                                <div class="row">
                                    <div class="col-xl-2 col-md-4 col-6">
                                        <ul class="list-unstyled h-bg-1-dark">

                                            <div class="custom-card mb-3"><a href="" class="text-dark">
                                                    <p class="text-truncate mt-2"></p>
                                                </a></div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="header-options d-flex align-items-center">
                        <!-- <li><a href="javascript:void(0);" data-toggle="modal" data-target="#lang" class="language"><span>Language</span> <img src="../assets/images/svg/translate.svg" alt=""></a></li> -->
                        <li class="dropdown fade-in"><a href="#" class="d-flex align-items-center py-2" role="button" id="userMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-sm avatar-circle"><img src="../assets/img/logo-icon.png" alt="user"></div><span class="pl-2"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userMenu"><a class="dropdown-item" href="{{route('profile')}}"><i class="ion-md-contact"></i> <span>Profile</span></a>

                                <!-- <a class="dropdown-item" href="plan.html"><i class="ion-md-radio-button-off"></i> <span>Your Plan</span></a> <a class="dropdown-item" href="settings.html"><i class="ion-md-settings"></i> <span>Settings</span></a> -->

                                <div class="dropdown-divider"></div>
                                <div class="px-4 py-2"><a href="{{route('logout')}}" class="btn btn-sm btn-air btn-pill btn-danger">Logout</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>
            <div class=""></div>
            <br><br><br><br><br><br>
            <div class="main-container under-banner-content" id="appRoute">
                <div class="row section">
                    <div class="col-xl-10 mx-auto">
                        <div class="row">
                            <div class="col-xl-4 col-md-5">
                                <div class="card h-auto">
                                    <div class="card-body text-center">
                                        <div class="avatar avatar-xl avatar-circle mx-auto mb-4"><img src="../assets/images/users/thumb.jpg" alt="user"></div>
                                        <h6 class="mb-3">Glory</h6>
                                        <p class="mb-1">Country: U.S.A</p>
                                        <!-- <p>Minimum: 128x128(px)</p> -->
                                        <button type="button" class="btn btn-danger btn-air">Update Profile</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-md-7">
                                <div class="card h-auto">
                                    <div class="card-body">
                                        <h6 class="mb-3">User Details</h6>
                                        <form action="#" class="row">

                                            <div class="col-xl-10 form-group"><label for="firstName" class="form-label"> Name</label> <input type="text" id="firstName" class="form-control" value="Admin"></div>
                                            <div class="col-xl-10 form-group"><label for="lastName" class="form-label">Email</label> <input type="text" id="lastName" class="form-control" value="admin@gmail.com"></div>
                                            <div class="col-10 form-group"><label for="displayName" class="form-label">Country</label> <input type="text" id="displayName" class="form-control" value="U.S.A"></div>
                                            <!-- <div class="col-xl-6 form-group"><label for="userType" class="form-label">User Type</label> <select name="userType" id="userType" class="form-control">
                                        <option value="0">Admin</option>
                                        <option value="1">Artist</option>
                                        <option value="2">Producer</option>
                                        <option value="3">User</option>
                                    </select></div> -->
                                            <!-- <div class="col-xl-6 form-group"><label for="loc" class="form-label">Location</label> <input type="text" id="loc" class="form-control" value="USA"></div>
                                <div class="col-12 form-group"><label for="about" class="form-label">About</label> <textarea name="about" id="about" cols="30" rows="5" class="form-control"></textarea></div>
                                <div class="col-12"><button type="button" class="btn btn-primary btn-air">Save Changes</button></div> -->
                                        </form>
                                    </div>
                                </div>
                                <!-- <div class="plan-info-card text-center px-sm-5 py-sm-4 p-3">
                        <h6>No plan selected yet</h6>
                        <p>Your 30 days free subscription is going to expired within 2 days please select you plan.</p><a href="plan.html" class="btn btn-pill btn-air btn-success">Select Plan</a>
                    </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('include/footer')