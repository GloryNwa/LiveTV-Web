<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Listen App - Online Music Streaming App Template">
    <meta name="keywords" content="music template, music app, music web app, responsive music app, music, themeforest, html music app template, css3, html5">
    <title>Listen App - Online Music Streaming App</title>
    <link href="../assets/images/logos/favicon.png" rel="icon">
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
    <div id="loading">
        <div class="loader">
            <div class="eq">
                <span class="eq-bar eq-bar--1"></span>
                <span class="eq-bar eq-bar--2"></span>
                <span class="eq-bar eq-bar--3"></span>
                <span class="eq-bar eq-bar--4"></span>
                <span class="eq-bar eq-bar--5"></span>
                <span class="eq-bar eq-bar--6"></span>
            </div>
            <span class="text">Loading</span>
        </div>
    </div>
    <div id="wrapper" data-scrollable="true">
        <aside id="sidebar" class="sidebar-primary">
            <div class="sidebar-header d-flex align-items-center">
                <a href="../index.html" class="brand">
                    <img src="../assets/images/logos/logo.svg" alt="listen-app">
                </a>
                <button type="button" class="btn p-0 ml-auto" id="hideSidebar">
                    <i class="ion-md-arrow-back h3"></i>
                </button>
                <button type="button" class="btn toggle-menu" id="toggleSidebar">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            <nav class="navbar">
                <ul class="navbar-nav" data-scrollable="true">
                    <li class="nav-item nav-header">Browse Music</li>
                    <li class="nav-item">
                        <a href="home.html" class="nav-link active">
                            <i class="la la-home"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="genres.html" class="nav-link">
                            <i class="la la-diamond"></i>
                            <span>Genres</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="music.html" class="nav-link">
                            <i class="la la-music"></i>
                            <span>Free Music</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="artists.html" class="nav-link">
                            <i class="la la-microphone"></i>
                            <span>Artists</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="stations.html" class="nav-link">
                            <i class="la la-bullseye"></i>
                            <span>Stations</span>
                        </a>
                    </li>
                    <li class="nav-item nav-header">Your Music</li>
                    <li class="nav-item">
                        <a href="analytics.html" class="nav-link">
                            <i class="la la-bar-chart"></i>
                            <span>Analytics</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="favorites.html" class="nav-link">
                            <i class="la la-heart-o"></i>
                            <span>Favorites</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="history.html" class="nav-link">
                            <i class="la la-history"></i>
                            <span>History</span>
                        </a>
                    </li>
                    <li class="nav-item nav-header">Music Events</li>
                    <li class="nav-item">
                        <a href="events.html" class="nav-link">
                            <i class="la la-calendar"></i>
                            <span>Events</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="event-details.html" class="nav-link">
                            <i class="la la-newspaper-o"></i>
                            <span>Event Details</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="add-event.html" class="nav-link">
                            <i class="la la-pencil-square-o"></i>
                            <span>Add Event</span>
                        </a>
                    </li>
                    <li class="nav-item nav-header">Extra Pages</li>
                    <li class="nav-item">
                        <a href="error.html" class="nav-link load-page">
                            <i class="la la-times-circle-o"></i>
                            <span>Error</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="blank.html" class="nav-link">
                            <i class="la la-file"></i>
                            <span>Blank</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="sidebar-footer">
                <a href="add-music.html" class="btn btn-block btn-danger btn-air btn-bold">
                    <i class="ion-md-musical-note"></i>
                    <span>Add Music</span>
                </a>
            </div>
        </aside>
        <main id="pageWrapper">
            <header id="header" class="bg-primary">
                <div class="d-flex align-items-center">
                    <button type="button" class="btn toggle-menu mr-3" id="openSidebar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <form action="#" id="searchForm">
                        <button type="button" class="btn ion-ios-search"></button>
                        <input type="text" placeholder="Search..." id="searchInput" class="form-control">
                        <div class="search-card" data-scrollable="true">
                            <div class="mb-3">
                                <div class="d-flex">
                                    <span class="text-uppercase mr-auto font-weight-bold text-dark">Artists</span>
                                    <a href="artists.html">View All</a>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xl-2 col-md-4 col-6">
                                        <div class="custom-card mb-3">
                                            <a href="artist-details.html" class="text-dark">
                                                <img src="../assets/images/cover/medium/1.jpg" alt="" class="card-img--radius-md">
                                                <p class="text-truncate mt-2">Arebica Luna</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-md-4 col-6">
                                        <div class="custom-card mb-3">
                                            <a href="artist-details.html" class="text-dark">
                                                <img src="../assets/images/cover/medium/2.jpg" alt="" class="card-img--radius-md">
                                                <p class="text-truncate mt-2">Gerrina Linda</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-md-4 col-6">
                                        <div class="custom-card mb-3">
                                            <a href="artist-details.html" class="text-dark">
                                                <img src="../assets/images/cover/medium/3.jpg" alt="" class="card-img--radius-md">
                                                <p class="text-truncate mt-2">Zunira Willy</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-md-4 col-6">
                                        <div class="custom-card mb-3">
                                            <a href="artist-details.html" class="text-dark">
                                                <img src="../assets/images/cover/medium/4.jpg" alt="" class="card-img--radius-md">
                                                <p class="text-truncate mt-2">Johnny Marro</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-md-4 col-6">
                                        <div class="custom-card mb-3">
                                            <a href="artist-details.html" class="text-dark">
                                                <img src="../assets/images/cover/medium/5.jpg" alt="" class="card-img--radius-md">
                                                <p class="text-truncate mt-2">Jina Moore</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-md-4 col-6">
                                        <div class="custom-card mb-3">
                                            <a href="artist-details.html" class="text-dark">
                                                <img src="../assets/images/cover/medium/6.jpg" alt="" class="card-img--radius-md">
                                                <p class="text-truncate mt-2">Rasomi Pelina</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex">
                                    <span class="text-uppercase mr-auto font-weight-bold text-dark">Track</span>
                                    <a href="songs.html">View All</a>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <div class="custom-card mb-3">
                                            <a href="song-details.html" class="text-dark custom-card--inline">
                                                <div class="custom-card--inline-img">
                                                    <img src="../assets/images/cover/small/1.jpg" alt="" class="card-img--radius-sm">
                                                </div>
                                                <div class="custom-card--inline-desc">
                                                    <p class="text-truncate mb-0">I Love You Mummy</p>
                                                    <p class="text-truncate text-muted font-sm">Arebica Luna</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <div class="custom-card mb-3">
                                            <a href="song-details.html" class="text-dark custom-card--inline">
                                                <div class="custom-card--inline-img">
                                                    <img src="../assets/images/cover/small/2.jpg" alt="" class="card-img--radius-sm">
                                                </div>
                                                <div class="custom-card--inline-desc">
                                                    <p class="text-truncate mb-0">Shack your butty</p>
                                                    <p class="text-truncate text-muted font-sm">Gerrina Linda</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <div class="custom-card mb-3">
                                            <a href="song-details.html" class="text-dark custom-card--inline">
                                                <div class="custom-card--inline-img">
                                                    <img src="../assets/images/cover/small/3.jpg" alt="" class="card-img--radius-sm">
                                                </div>
                                                <div class="custom-card--inline-desc">
                                                    <p class="text-truncate mb-0">Do it your way(Female)</p>
                                                    <p class="text-truncate text-muted font-sm">Zunira Willy & Nutty Nina</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex">
                                    <span class="text-uppercase mr-auto font-weight-bold text-dark">Albums</span>
                                    <a href="songs.html">View All</a>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <div class="custom-card mb-3">
                                            <a href="song-details.html" class="text-dark custom-card--inline">
                                                <div class="custom-card--inline-img">
                                                    <img src="../assets/images/cover/small/4.jpg" alt="" class="card-img--radius-sm">
                                                </div>
                                                <div class="custom-card--inline-desc">
                                                    <p class="text-truncate mb-0">Say yes</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <div class="custom-card mb-3">
                                            <a href="song-details.html" class="text-dark custom-card--inline">
                                                <div class="custom-card--inline-img">
                                                    <img src="../assets/images/cover/small/5.jpg" alt="" class="card-img--radius-sm">
                                                </div>
                                                <div class="custom-card--inline-desc">
                                                    <p class="text-truncate mb-0">Where is your letter</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <div class="custom-card mb-3">
                                            <a href="song-details.html" class="text-dark custom-card--inline">
                                                <div class="custom-card--inline-img">
                                                    <img src="../assets/images/cover/small/6.jpg" alt="" class="card-img--radius-sm">
                                                </div>
                                                <div class="custom-card--inline-desc">
                                                    <p class="text-truncate mb-0">Hey not me</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="header-options d-flex align-items-center">
                        <li>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#lang" class="language">
                                <span>Language</span>
                                <img src="../assets/images/svg/translate.svg" alt="">
                            </a>
                        </li>
                        <li class="dropdown fade-in">
                            <a href="javascript:void(0);" class="d-flex align-items-center py-2" role="button" id="userMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-sm avatar-circle">
                                    <img src="../assets/images/users/thumb.jpg" alt="user">
                                </div>
                                <span class="pl-2">Halo Admin</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userMenu">
                                <a class="dropdown-item" href="profile.html">
                                    <i class="ion-md-contact"></i>
                                    <span>Profile</span>
                                </a>
                                <a class="dropdown-item" href="plan.html">
                                    <i class="ion-md-radio-button-off"></i>
                                    <span>Your Plan</span>
                                </a>
                                <a class="dropdown-item" href="settings.html">
                                    <i class="ion-md-settings"></i>
                                    <span>Settings</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <div class="px-4 py-2">
                                    <a href="home.html#" class="btn btn-sm btn-air btn-pill btn-danger">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>
            <div class="banner bg-home"></div>
            <div class="main-container" id="appRoute">
                <div class="section">
                    <div class="heading">
                        <div class="d-flex flex-wrap align-items-end">
                            <div class="flex-grow-1">
                                <h4>Top Charts</h4>
                                <p>Listen top chart</p>
                            </div>
                            <a href="songs.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                        </div>
                        <hr>
                    </div>
                    <div class="carousel-item-5 arrow-pos-3">
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <div class="custom-card--info">
                                    <ul class="custom-card--labels d-flex">
                                        <li>
                                            <span class="badge badge-pill badge-warning">
                                                <i class="la la-star"></i>
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="dropdown dropdown-icon">
                                        <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ion-md-more"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="external" data-audio='{"name": "I Love You Mummy", "artist": "Arebica Luna", "album": "Mummy", "url": "../assets/audio/ringtone-1.mp3", "cover_art_url": "../assets/images/cover/small/1.jpg"}'>
                                    <img src="../assets/images/cover/large/1.jpg" alt="I Love You Mummy" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="song-details.html" class="custom-card--link mt-2">
                                <h6>I Love You Mummy</h6>
                                <p>Arebica Luna</p>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <div class="custom-card--info">
                                    <div class="dropdown dropdown-icon">
                                        <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ion-md-more"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="external" data-audio='{"name": "Shack your butty", "artist": "Gerrina Linda", "album": "Hot Shot", "url": "../assets/audio/ringtone-2.mp3", "cover_art_url": "../assets/images/cover/small/2.jpg"}'>
                                    <img src="../assets/images/cover/large/2.jpg" alt="Shack your butty" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="song-details.html" class="custom-card--link mt-2">
                                <h6>Shack your butty</h6>
                                <p>Gerrina Linda</p>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <div class="custom-card--info">
                                    <ul class="custom-card--labels d-flex">
                                        <li>
                                            <span class="badge badge-pill badge-danger">
                                                <i class="la la-heart"></i>
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="dropdown dropdown-icon">
                                        <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ion-md-more"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="external" data-audio='{"name": "Do it your way(Female)", "artist": "Zunira Willy & Nutty Nina", "album": "Own Way", "url": "../assets/audio/ringtone-3.mp3", "cover_art_url": "../assets/images/cover/small/3.jpg"}'>
                                    <img src="../assets/images/cover/large/3.jpg" alt="Do it your way(Female)" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="song-details.html" class="custom-card--link mt-2">
                                <h6>Do it your way(Female)</h6>
                                <p>Zunira Willy & Nutty Nina</p>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <div class="custom-card--info">
                                    <div class="dropdown dropdown-icon">
                                        <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ion-md-more"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="external" data-audio='{"name": "Say yes", "artist": "Johnny Marro", "album": "Say yes", "url": "../assets/audio/ringtone-4.mp3", "cover_art_url": "../assets/images/cover/small/4.jpg"}'>
                                    <img src="../assets/images/cover/large/4.jpg" alt="Say yes" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="song-details.html" class="custom-card--link mt-2">
                                <h6>Say yes</h6>
                                <p>Johnny Marro</p>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <div class="custom-card--info">
                                    <ul class="custom-card--labels d-flex">
                                        <li>
                                            <span class="badge badge-pill badge-warning">
                                                <i class="la la-star"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="badge badge-pill badge-danger">
                                                <i class="la la-heart"></i>
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="dropdown dropdown-icon">
                                        <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ion-md-more"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="external" data-audio='{"name": "Where is your letter", "artist": "Jina Moore & Lenisa Gory", "album": "Letter", "url": "../assets/audio/ringtone-5.mp3", "cover_art_url": "../assets/images/cover/small/5.jpg"}'>
                                    <img src="../assets/images/cover/large/5.jpg" alt="Where is your letter" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="song-details.html" class="custom-card--link mt-2">
                                <h6>Where is your letter</h6>
                                <p>Jina Moore & Lenisa Gory</p>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <div class="custom-card--info">
                                    <ul class="custom-card--labels d-flex">
                                        <li>
                                            <span class="badge badge-pill badge-warning">
                                                <i class="la la-star"></i>
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="dropdown dropdown-icon">
                                        <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ion-md-more"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="external" data-audio='{"name": "Hey not me", "artist": "Rasomi Pelina", "album": "Find Soul", "url": "../assets/audio/ringtone-6.mp3", "cover_art_url": "../assets/images/cover/small/6.jpg"}'>
                                    <img src="../assets/images/cover/large/6.jpg" alt="Hey not me" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="song-details.html" class="custom-card--link mt-2">
                                <h6>Hey not me</h6>
                                <p>Rasomi Pelina</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="section col-xl-7 col-lg-6">
                        <div class="row h-100">
                            <div class="col-sm-5 pb-4">
                                <div class="h-100 event event-v bg-img bg-img-radius-lg" style="background-image: url('../assets/images/background/vertical/1.jpg')">
                                    <div class="event-content p-4">
                                        <a href="event-details.html">
                                            <h6>New Year Party</h6>
                                        </a>
                                        <span class="countdown mb-3"></span>
                                        <a href="home.html#" class="btn btn-bold btn-pill btn-air btn-warning btn-sm">Buy Ticket</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="h-50 pb-4">
                                    <div class="h-100 event event-h bg-img bg-img-radius-lg" style="background-image: url('../assets/images/background/horizontal/1.jpg')">
                                        <div class="event-content p-4">
                                            <a href="event-details.html">
                                                <h6>Dance with DJ Nowan</h6>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae consectetur, ex explicabo.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-50 pb-4">
                                    <div class="h-100 event event-h bg-img bg-img-radius-lg" style="background-image: url('../assets/images/background/horizontal/2.jpg')">
                                        <div class="event-content p-4">
                                            <a href="event-details.html">
                                                <h6>Move You's Legs</h6>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae consectetur, ex explicabo.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section col-xl-5 col-lg-6">
                        <ul class="nav nav-tabs line-tabs line-tabs-primary text-uppercase mb-4" id="songsList" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="recent-tab" data-toggle="tab" href="home.html#recent" role="tab" aria-controls="recent" aria-selected="true">Recent</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="trending-tab" data-toggle="tab" href="home.html#trending" role="tab" aria-controls="trending" aria-selected="false">Trending</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="international-tab" data-toggle="tab" href="home.html#international" role="tab" aria-controls="international" aria-selected="false">International</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="songsListContent">
                            <div class="tab-pane fade show active" id="recent" role="tabpanel" aria-labelledby="recent-tab">
                                <div class="custom-list">
                                    <div class="custom-list--item">
                                        <div class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/1.jpg" alt="" class="card-img--radius-sm">
                                            </div>
                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">I Love You Mummy</p>
                                                <p class="text-truncate text-muted font-sm">Arebica Luna</p>
                                            </div>
                                        </div>
                                        <ul class="custom-card--labels d-flex ml-auto">
                                            <li>
                                                <span class="badge badge-pill badge-warning">
                                                    <i class="la la-star"></i>
                                                </span>
                                            </li>
                                            <li class="dropleft">
                                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-ellipsis-h"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                                            <i class="la la-heart-o"></i>
                                                            <span>Favorite</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-plus"></i>
                                                            <span>Add to Playlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-download"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-share-alt"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="song-details.html" class="dropdown-link">
                                                            <i class="la la-info-circle"></i>
                                                            <span>Song Info</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="custom-list--item">
                                        <div class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/2.jpg" alt="" class="card-img--radius-sm">
                                            </div>
                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Shack your butty</p>
                                                <p class="text-truncate text-muted font-sm">Gerrina Linda</p>
                                            </div>
                                        </div>
                                        <ul class="custom-card--labels d-flex ml-auto">
                                            <li class="dropleft">
                                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-ellipsis-h"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                                            <i class="la la-heart-o"></i>
                                                            <span>Favorite</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-plus"></i>
                                                            <span>Add to Playlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-download"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-share-alt"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="song-details.html" class="dropdown-link">
                                                            <i class="la la-info-circle"></i>
                                                            <span>Song Info</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="custom-list--item">
                                        <div class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/3.jpg" alt="" class="card-img--radius-sm">
                                            </div>
                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Do it your way(Female)</p>
                                                <p class="text-truncate text-muted font-sm">Zunira Willy & Nutty Nina</p>
                                            </div>
                                        </div>
                                        <ul class="custom-card--labels d-flex ml-auto">
                                            <li>
                                                <span class="badge badge-pill badge-danger">
                                                    <i class="la la-heart"></i>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="badge badge-pill badge-warning">
                                                    <i class="la la-star"></i>
                                                </span>
                                            </li>
                                            <li class="dropleft">
                                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-ellipsis-h"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                                            <i class="la la-heart-o"></i>
                                                            <span>Favorite</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-plus"></i>
                                                            <span>Add to Playlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-download"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-share-alt"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="song-details.html" class="dropdown-link">
                                                            <i class="la la-info-circle"></i>
                                                            <span>Song Info</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="custom-list--item">
                                        <div class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/4.jpg" alt="" class="card-img--radius-sm">
                                            </div>
                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Say yes</p>
                                                <p class="text-truncate text-muted font-sm">Johnny Marro</p>
                                            </div>
                                        </div>
                                        <ul class="custom-card--labels d-flex ml-auto">
                                            <li class="dropleft">
                                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-ellipsis-h"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                                            <i class="la la-heart-o"></i>
                                                            <span>Favorite</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-plus"></i>
                                                            <span>Add to Playlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-download"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-share-alt"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="song-details.html" class="dropdown-link">
                                                            <i class="la la-info-circle"></i>
                                                            <span>Song Info</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="custom-list--item">
                                        <div class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/5.jpg" alt="" class="card-img--radius-sm">
                                            </div>
                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Where is your letter</p>
                                                <p class="text-truncate text-muted font-sm">Jina Moore & Lenisa Gory</p>
                                            </div>
                                        </div>
                                        <ul class="custom-card--labels d-flex ml-auto">
                                            <li>
                                                <span class="badge badge-pill badge-danger">
                                                    <i class="la la-heart"></i>
                                                </span>
                                            </li>
                                            <li class="dropleft">
                                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-ellipsis-h"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                                            <i class="la la-heart-o"></i>
                                                            <span>Favorite</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-plus"></i>
                                                            <span>Add to Playlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-download"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-share-alt"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="song-details.html" class="dropdown-link">
                                                            <i class="la la-info-circle"></i>
                                                            <span>Song Info</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="custom-list--item">
                                        <div class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/6.jpg" alt="" class="card-img--radius-sm">
                                            </div>
                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Hey not me</p>
                                                <p class="text-truncate text-muted font-sm">Rasomi Pelina</p>
                                            </div>
                                        </div>
                                        <ul class="custom-card--labels d-flex ml-auto">
                                            <li class="dropleft">
                                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-ellipsis-h"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                                            <i class="la la-heart-o"></i>
                                                            <span>Favorite</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-plus"></i>
                                                            <span>Add to Playlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-download"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-share-alt"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="song-details.html" class="dropdown-link">
                                                            <i class="la la-info-circle"></i>
                                                            <span>Song Info</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="custom-list--item">
                                        <div class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/7.jpg" alt="" class="card-img--radius-sm">
                                            </div>
                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Deep inside</p>
                                                <p class="text-truncate text-muted font-sm">Pimila Holliwy</p>
                                            </div>
                                        </div>
                                        <ul class="custom-card--labels d-flex ml-auto">
                                            <li class="dropleft">
                                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-ellipsis-h"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                                            <i class="la la-heart-o"></i>
                                                            <span>Favorite</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-plus"></i>
                                                            <span>Add to Playlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-download"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-share-alt"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="song-details.html" class="dropdown-link">
                                                            <i class="la la-info-circle"></i>
                                                            <span>Song Info</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="trending" role="tabpanel" aria-labelledby="trending-tab">
                                <div class="custom-list">
                                    <div class="custom-list--item">
                                        <div class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/1.jpg" alt="" class="card-img--radius-sm">
                                            </div>
                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">I Love You Mummy</p>
                                                <p class="text-truncate text-muted font-sm">Arebica Luna</p>
                                            </div>
                                        </div>
                                        <ul class="custom-card--labels d-flex ml-auto">
                                            <li>
                                                <span class="badge badge-pill badge-warning">
                                                    <i class="la la-star"></i>
                                                </span>
                                            </li>
                                            <li class="dropleft">
                                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-ellipsis-h"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                                            <i class="la la-heart-o"></i>
                                                            <span>Favorite</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-plus"></i>
                                                            <span>Add to Playlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-download"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-share-alt"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="song-details.html" class="dropdown-link">
                                                            <i class="la la-info-circle"></i>
                                                            <span>Song Info</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="custom-list--item">
                                        <div class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/2.jpg" alt="" class="card-img--radius-sm">
                                            </div>
                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Shack your butty</p>
                                                <p class="text-truncate text-muted font-sm">Gerrina Linda</p>
                                            </div>
                                        </div>
                                        <ul class="custom-card--labels d-flex ml-auto">
                                            <li class="dropleft">
                                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-ellipsis-h"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                                            <i class="la la-heart-o"></i>
                                                            <span>Favorite</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-plus"></i>
                                                            <span>Add to Playlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-download"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-share-alt"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="song-details.html" class="dropdown-link">
                                                            <i class="la la-info-circle"></i>
                                                            <span>Song Info</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="custom-list--item">
                                        <div class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/3.jpg" alt="" class="card-img--radius-sm">
                                            </div>
                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Do it your way(Female)</p>
                                                <p class="text-truncate text-muted font-sm">Zunira Willy & Nutty Nina</p>
                                            </div>
                                        </div>
                                        <ul class="custom-card--labels d-flex ml-auto">
                                            <li>
                                                <span class="badge badge-pill badge-danger">
                                                    <i class="la la-heart"></i>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="badge badge-pill badge-warning">
                                                    <i class="la la-star"></i>
                                                </span>
                                            </li>
                                            <li class="dropleft">
                                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-ellipsis-h"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                                            <i class="la la-heart-o"></i>
                                                            <span>Favorite</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-plus"></i>
                                                            <span>Add to Playlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-download"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-share-alt"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="song-details.html" class="dropdown-link">
                                                            <i class="la la-info-circle"></i>
                                                            <span>Song Info</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="custom-list--item">
                                        <div class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/4.jpg" alt="" class="card-img--radius-sm">
                                            </div>
                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Say yes</p>
                                                <p class="text-truncate text-muted font-sm">Johnny Marro</p>
                                            </div>
                                        </div>
                                        <ul class="custom-card--labels d-flex ml-auto">
                                            <li class="dropleft">
                                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-ellipsis-h"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                                            <i class="la la-heart-o"></i>
                                                            <span>Favorite</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-plus"></i>
                                                            <span>Add to Playlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-download"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-share-alt"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="song-details.html" class="dropdown-link">
                                                            <i class="la la-info-circle"></i>
                                                            <span>Song Info</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="custom-list--item">
                                        <div class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/5.jpg" alt="" class="card-img--radius-sm">
                                            </div>
                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Where is your letter</p>
                                                <p class="text-truncate text-muted font-sm">Jina Moore & Lenisa Gory</p>
                                            </div>
                                        </div>
                                        <ul class="custom-card--labels d-flex ml-auto">
                                            <li>
                                                <span class="badge badge-pill badge-danger">
                                                    <i class="la la-heart"></i>
                                                </span>
                                            </li>
                                            <li class="dropleft">
                                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-ellipsis-h"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                                            <i class="la la-heart-o"></i>
                                                            <span>Favorite</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-plus"></i>
                                                            <span>Add to Playlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-download"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-share-alt"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="song-details.html" class="dropdown-link">
                                                            <i class="la la-info-circle"></i>
                                                            <span>Song Info</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="custom-list--item">
                                        <div class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/6.jpg" alt="" class="card-img--radius-sm">
                                            </div>
                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Hey not me</p>
                                                <p class="text-truncate text-muted font-sm">Rasomi Pelina</p>
                                            </div>
                                        </div>
                                        <ul class="custom-card--labels d-flex ml-auto">
                                            <li class="dropleft">
                                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-ellipsis-h"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                                            <i class="la la-heart-o"></i>
                                                            <span>Favorite</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-plus"></i>
                                                            <span>Add to Playlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-download"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-share-alt"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="song-details.html" class="dropdown-link">
                                                            <i class="la la-info-circle"></i>
                                                            <span>Song Info</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="custom-list--item">
                                        <div class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/7.jpg" alt="" class="card-img--radius-sm">
                                            </div>
                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Deep inside</p>
                                                <p class="text-truncate text-muted font-sm">Pimila Holliwy</p>
                                            </div>
                                        </div>
                                        <ul class="custom-card--labels d-flex ml-auto">
                                            <li class="dropleft">
                                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-ellipsis-h"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                                            <i class="la la-heart-o"></i>
                                                            <span>Favorite</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-plus"></i>
                                                            <span>Add to Playlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-download"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-share-alt"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="song-details.html" class="dropdown-link">
                                                            <i class="la la-info-circle"></i>
                                                            <span>Song Info</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="international" role="tabpanel" aria-labelledby="international-tab">
                                <div class="custom-list">
                                    <div class="custom-list--item">
                                        <div class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/1.jpg" alt="" class="card-img--radius-sm">
                                            </div>
                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">I Love You Mummy</p>
                                                <p class="text-truncate text-muted font-sm">Arebica Luna</p>
                                            </div>
                                        </div>
                                        <ul class="custom-card--labels d-flex ml-auto">
                                            <li>
                                                <span class="badge badge-pill badge-warning">
                                                    <i class="la la-star"></i>
                                                </span>
                                            </li>
                                            <li class="dropleft">
                                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-ellipsis-h"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                                            <i class="la la-heart-o"></i>
                                                            <span>Favorite</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-plus"></i>
                                                            <span>Add to Playlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-download"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-share-alt"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="song-details.html" class="dropdown-link">
                                                            <i class="la la-info-circle"></i>
                                                            <span>Song Info</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="custom-list--item">
                                        <div class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/2.jpg" alt="" class="card-img--radius-sm">
                                            </div>
                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Shack your butty</p>
                                                <p class="text-truncate text-muted font-sm">Gerrina Linda</p>
                                            </div>
                                        </div>
                                        <ul class="custom-card--labels d-flex ml-auto">
                                            <li class="dropleft">
                                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-ellipsis-h"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                                            <i class="la la-heart-o"></i>
                                                            <span>Favorite</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-plus"></i>
                                                            <span>Add to Playlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-download"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-share-alt"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="song-details.html" class="dropdown-link">
                                                            <i class="la la-info-circle"></i>
                                                            <span>Song Info</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="custom-list--item">
                                        <div class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/3.jpg" alt="" class="card-img--radius-sm">
                                            </div>
                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Do it your way(Female)</p>
                                                <p class="text-truncate text-muted font-sm">Zunira Willy & Nutty Nina</p>
                                            </div>
                                        </div>
                                        <ul class="custom-card--labels d-flex ml-auto">
                                            <li>
                                                <span class="badge badge-pill badge-danger">
                                                    <i class="la la-heart"></i>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="badge badge-pill badge-warning">
                                                    <i class="la la-star"></i>
                                                </span>
                                            </li>
                                            <li class="dropleft">
                                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-ellipsis-h"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                                            <i class="la la-heart-o"></i>
                                                            <span>Favorite</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-plus"></i>
                                                            <span>Add to Playlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-download"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-share-alt"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="song-details.html" class="dropdown-link">
                                                            <i class="la la-info-circle"></i>
                                                            <span>Song Info</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="custom-list--item">
                                        <div class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/4.jpg" alt="" class="card-img--radius-sm">
                                            </div>
                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Say yes</p>
                                                <p class="text-truncate text-muted font-sm">Johnny Marro</p>
                                            </div>
                                        </div>
                                        <ul class="custom-card--labels d-flex ml-auto">
                                            <li class="dropleft">
                                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-ellipsis-h"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                                            <i class="la la-heart-o"></i>
                                                            <span>Favorite</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-plus"></i>
                                                            <span>Add to Playlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-download"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-share-alt"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="song-details.html" class="dropdown-link">
                                                            <i class="la la-info-circle"></i>
                                                            <span>Song Info</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="custom-list--item">
                                        <div class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/5.jpg" alt="" class="card-img--radius-sm">
                                            </div>
                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Where is your letter</p>
                                                <p class="text-truncate text-muted font-sm">Jina Moore & Lenisa Gory</p>
                                            </div>
                                        </div>
                                        <ul class="custom-card--labels d-flex ml-auto">
                                            <li>
                                                <span class="badge badge-pill badge-danger">
                                                    <i class="la la-heart"></i>
                                                </span>
                                            </li>
                                            <li class="dropleft">
                                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-ellipsis-h"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                                            <i class="la la-heart-o"></i>
                                                            <span>Favorite</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-plus"></i>
                                                            <span>Add to Playlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-download"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-share-alt"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="song-details.html" class="dropdown-link">
                                                            <i class="la la-info-circle"></i>
                                                            <span>Song Info</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="custom-list--item">
                                        <div class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/6.jpg" alt="" class="card-img--radius-sm">
                                            </div>
                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Hey not me</p>
                                                <p class="text-truncate text-muted font-sm">Rasomi Pelina</p>
                                            </div>
                                        </div>
                                        <ul class="custom-card--labels d-flex ml-auto">
                                            <li class="dropleft">
                                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-ellipsis-h"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                                            <i class="la la-heart-o"></i>
                                                            <span>Favorite</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-plus"></i>
                                                            <span>Add to Playlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-download"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-share-alt"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="song-details.html" class="dropdown-link">
                                                            <i class="la la-info-circle"></i>
                                                            <span>Song Info</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="custom-list--item">
                                        <div class="text-dark custom-card--inline">
                                            <div class="custom-card--inline-img">
                                                <img src="../assets/images/cover/small/7.jpg" alt="" class="card-img--radius-sm">
                                            </div>
                                            <div class="custom-card--inline-desc">
                                                <p class="text-truncate mb-0">Deep inside</p>
                                                <p class="text-truncate text-muted font-sm">Pimila Holliwy</p>
                                            </div>
                                        </div>
                                        <ul class="custom-card--labels d-flex ml-auto">
                                            <li class="dropleft">
                                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-ellipsis-h"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                                            <i class="la la-heart-o"></i>
                                                            <span>Favorite</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-plus"></i>
                                                            <span>Add to Playlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-download"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="javascript:void(0);" class="dropdown-link">
                                                            <i class="la la-share-alt"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="song-details.html" class="dropdown-link">
                                                            <i class="la la-info-circle"></i>
                                                            <span>Song Info</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="heading">
                        <div class="d-flex flex-wrap align-items-end">
                            <div class="flex-grow-1">
                                <h4>New Releases</h4>
                                <p>Listen recently release music</p>
                            </div>
                            <a href="songs.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                        </div>
                        <hr>
                    </div>
                    <div class="carousel-item-5 arrow-pos-3">
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <div class="custom-card--info">
                                    <ul class="custom-card--labels d-flex">
                                        <li>
                                            <span class="badge badge-pill badge-warning">
                                                <i class="la la-star"></i>
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="dropdown dropdown-icon">
                                        <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ion-md-more"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="external" data-audio='{"name": "I Love You Mummy", "artist": "Arebica Luna", "album": "Mummy", "url": "../assets/audio/ringtone-1.mp3", "cover_art_url": "../assets/images/cover/small/1.jpg"}'>
                                    <img src="../assets/images/cover/large/1.jpg" alt="I Love You Mummy" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="song-details.html" class="custom-card--link mt-2">
                                <h6>I Love You Mummy</h6>
                                <p>Arebica Luna</p>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <div class="custom-card--info">
                                    <div class="dropdown dropdown-icon">
                                        <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ion-md-more"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="external" data-audio='{"name": "Shack your butty", "artist": "Gerrina Linda", "album": "Hot Shot", "url": "../assets/audio/ringtone-2.mp3", "cover_art_url": "../assets/images/cover/small/2.jpg"}'>
                                    <img src="../assets/images/cover/large/2.jpg" alt="Shack your butty" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="song-details.html" class="custom-card--link mt-2">
                                <h6>Shack your butty</h6>
                                <p>Gerrina Linda</p>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <div class="custom-card--info">
                                    <ul class="custom-card--labels d-flex">
                                        <li>
                                            <span class="badge badge-pill badge-danger">
                                                <i class="la la-heart"></i>
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="dropdown dropdown-icon">
                                        <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ion-md-more"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="external" data-audio='{"name": "Do it your way(Female)", "artist": "Zunira Willy & Nutty Nina", "album": "Own Way", "url": "../assets/audio/ringtone-3.mp3", "cover_art_url": "../assets/images/cover/small/3.jpg"}'>
                                    <img src="../assets/images/cover/large/3.jpg" alt="Do it your way(Female)" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="song-details.html" class="custom-card--link mt-2">
                                <h6>Do it your way(Female)</h6>
                                <p>Zunira Willy & Nutty Nina</p>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <div class="custom-card--info">
                                    <div class="dropdown dropdown-icon">
                                        <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ion-md-more"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="external" data-audio='{"name": "Say yes", "artist": "Johnny Marro", "album": "Say yes", "url": "../assets/audio/ringtone-4.mp3", "cover_art_url": "../assets/images/cover/small/4.jpg"}'>
                                    <img src="../assets/images/cover/large/4.jpg" alt="Say yes" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="song-details.html" class="custom-card--link mt-2">
                                <h6>Say yes</h6>
                                <p>Johnny Marro</p>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <div class="custom-card--info">
                                    <ul class="custom-card--labels d-flex">
                                        <li>
                                            <span class="badge badge-pill badge-warning">
                                                <i class="la la-star"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="badge badge-pill badge-danger">
                                                <i class="la la-heart"></i>
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="dropdown dropdown-icon">
                                        <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ion-md-more"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="external" data-audio='{"name": "Where is your letter", "artist": "Jina Moore & Lenisa Gory", "album": "Letter", "url": "../assets/audio/ringtone-5.mp3", "cover_art_url": "../assets/images/cover/small/5.jpg"}'>
                                    <img src="../assets/images/cover/large/5.jpg" alt="Where is your letter" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="song-details.html" class="custom-card--link mt-2">
                                <h6>Where is your letter</h6>
                                <p>Jina Moore & Lenisa Gory</p>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <div class="custom-card--info">
                                    <ul class="custom-card--labels d-flex">
                                        <li>
                                            <span class="badge badge-pill badge-warning">
                                                <i class="la la-star"></i>
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="dropdown dropdown-icon">
                                        <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ion-md-more"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="external" data-audio='{"name": "Hey not me", "artist": "Rasomi Pelina", "album": "Find Soul", "url": "../assets/audio/ringtone-6.mp3", "cover_art_url": "../assets/images/cover/small/6.jpg"}'>
                                    <img src="../assets/images/cover/large/6.jpg" alt="Hey not me" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="song-details.html" class="custom-card--link mt-2">
                                <h6>Hey not me</h6>
                                <p>Rasomi Pelina</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="heading">
                        <div class="d-flex flex-wrap align-items-end">
                            <div class="flex-grow-1">
                                <h4>Featured Artists</h4>
                                <p>Select you best to listen</p>
                            </div>
                            <a href="artists.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                        </div>
                        <hr>
                    </div>
                    <div class="carousel-item-6 arrow-pos-2">
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="artist-details.html">
                                    <img src="../assets/images/cover/large/1.jpg" alt="Arebica Luna" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="artist-details.html" class="custom-card--link mt-2">
                                <h6 class="mb-0">Arebica Luna</h6>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="artist-details.html">
                                    <img src="../assets/images/cover/large/2.jpg" alt="Gerrina Linda" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="artist-details.html" class="custom-card--link mt-2">
                                <h6 class="mb-0">Gerrina Linda</h6>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="artist-details.html">
                                    <img src="../assets/images/cover/large/3.jpg" alt="Zunira Willy" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="artist-details.html" class="custom-card--link mt-2">
                                <h6 class="mb-0">Zunira Willy</h6>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="artist-details.html">
                                    <img src="../assets/images/cover/large/4.jpg" alt="Johnny Marro" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="artist-details.html" class="custom-card--link mt-2">
                                <h6 class="mb-0">Johnny Marro</h6>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="artist-details.html">
                                    <img src="../assets/images/cover/large/5.jpg" alt="Jina Moore" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="artist-details.html" class="custom-card--link mt-2">
                                <h6 class="mb-0">Jina Moore</h6>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="artist-details.html">
                                    <img src="../assets/images/cover/large/6.jpg" alt="Rasomi Pelina" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="artist-details.html" class="custom-card--link mt-2">
                                <h6 class="mb-0">Rasomi Pelina</h6>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="artist-details.html">
                                    <img src="../assets/images/cover/large/9.jpg" alt="Lenisa Gory" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="artist-details.html" class="custom-card--link mt-2">
                                <h6 class="mb-0">Lenisa Gory</h6>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="artist-details.html">
                                    <img src="../assets/images/cover/large/10.jpg" alt="Nutty Nina" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="artist-details.html" class="custom-card--link mt-2">
                                <h6 class="mb-0">Nutty Nina</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="heading">
                        <div class="d-flex flex-wrap align-items-end">
                            <div class="flex-grow-1">
                                <h4>Your Playlist</h4>
                                <p>You best to listen</p>
                            </div>
                            <a href="https://www.kri8thm.in/html/listen/theme/demo/playlist.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                        </div>
                        <hr>
                    </div>
                    <div class="carousel-item-4 arrow-pos-1">
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="javascript:void(0);">
                                    <img src="../assets/images/background/horizontal/1.jpg" alt="DJ Remix" class="card-img--radius-lg">
                                    <span class="bg-blur">DJ Remix</span>
                                </a>
                            </div>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="javascript:void(0);">
                                    <img src="../assets/images/background/horizontal/2.jpg" alt="Rock Band" class="card-img--radius-lg">
                                    <span class="bg-blur">Rock Band</span>
                                </a>
                            </div>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="javascript:void(0);">
                                    <img src="../assets/images/background/horizontal/3.jpg" alt="Solo Special" class="card-img--radius-lg">
                                    <span class="bg-blur">Solo Special</span>
                                </a>
                            </div>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="javascript:void(0);">
                                    <img src="../assets/images/background/horizontal/4.jpg" alt="Romantic" class="card-img--radius-lg">
                                    <span class="bg-blur">Romantic</span>
                                </a>
                            </div>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="javascript:void(0);">
                                    <img src="../assets/images/background/horizontal/5.jpg" alt="GYM" class="card-img--radius-lg">
                                    <span class="bg-blur">GYM</span>
                                </a>
                            </div>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="javascript:void(0);">
                                    <img src="../assets/images/background/horizontal/6.jpg" alt="Retro Special" class="card-img--radius-lg">
                                    <span class="bg-blur">Retro Special</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="heading">
                        <div class="d-flex flex-wrap align-items-end">
                            <div class="flex-grow-1">
                                <h4>Retro Classic</h4>
                                <p>Old is gold</p>
                            </div>
                            <a href="songs.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                        </div>
                        <hr>
                    </div>
                    <div class="carousel-item-6 arrow-pos-3">
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <div class="custom-card--info">
                                    <ul class="custom-card--labels d-flex">
                                        <li>
                                            <span class="badge badge-pill badge-warning">
                                                <i class="la la-star"></i>
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="dropdown dropdown-icon">
                                        <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ion-md-more"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="external" data-audio='{"name": "I Love You Mummy", "artist": "Arebica Luna", "album": "Mummy", "url": "../assets/audio/ringtone-1.mp3", "cover_art_url": "../assets/images/cover/small/1.jpg"}'>
                                    <img src="../assets/images/cover/large/1.jpg" alt="I Love You Mummy" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="song-details.html" class="custom-card--link mt-2">
                                <h6>I Love You Mummy</h6>
                                <p>Arebica Luna</p>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <div class="custom-card--info">
                                    <div class="dropdown dropdown-icon">
                                        <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ion-md-more"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="external" data-audio='{"name": "Shack your butty", "artist": "Gerrina Linda", "album": "Hot Shot", "url": "../assets/audio/ringtone-2.mp3", "cover_art_url": "../assets/images/cover/small/2.jpg"}'>
                                    <img src="../assets/images/cover/large/2.jpg" alt="Shack your butty" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="song-details.html" class="custom-card--link mt-2">
                                <h6>Shack your butty</h6>
                                <p>Gerrina Linda</p>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <div class="custom-card--info">
                                    <ul class="custom-card--labels d-flex">
                                        <li>
                                            <span class="badge badge-pill badge-danger">
                                                <i class="la la-heart"></i>
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="dropdown dropdown-icon">
                                        <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ion-md-more"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="external" data-audio='{"name": "Do it your way(Female)", "artist": "Zunira Willy & Nutty Nina", "album": "Own Way", "url": "../assets/audio/ringtone-3.mp3", "cover_art_url": "../assets/images/cover/small/3.jpg"}'>
                                    <img src="../assets/images/cover/large/3.jpg" alt="Do it your way(Female)" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="song-details.html" class="custom-card--link mt-2">
                                <h6>Do it your way(Female)</h6>
                                <p>Zunira Willy & Nutty Nina</p>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <div class="custom-card--info">
                                    <div class="dropdown dropdown-icon">
                                        <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ion-md-more"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="external" data-audio='{"name": "Say yes", "artist": "Johnny Marro", "album": "Say yes", "url": "../assets/audio/ringtone-4.mp3", "cover_art_url": "../assets/images/cover/small/4.jpg"}'>
                                    <img src="../assets/images/cover/large/4.jpg" alt="Say yes" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="song-details.html" class="custom-card--link mt-2">
                                <h6>Say yes</h6>
                                <p>Johnny Marro</p>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <div class="custom-card--info">
                                    <ul class="custom-card--labels d-flex">
                                        <li>
                                            <span class="badge badge-pill badge-warning">
                                                <i class="la la-star"></i>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="badge badge-pill badge-danger">
                                                <i class="la la-heart"></i>
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="dropdown dropdown-icon">
                                        <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ion-md-more"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="external" data-audio='{"name": "Where is your letter", "artist": "Jina Moore & Lenisa Gory", "album": "Letter", "url": "../assets/audio/ringtone-5.mp3", "cover_art_url": "../assets/images/cover/small/5.jpg"}'>
                                    <img src="../assets/images/cover/large/5.jpg" alt="Where is your letter" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="song-details.html" class="custom-card--link mt-2">
                                <h6>Where is your letter</h6>
                                <p>Jina Moore & Lenisa Gory</p>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <div class="custom-card--info">
                                    <ul class="custom-card--labels d-flex">
                                        <li>
                                            <span class="badge badge-pill badge-warning">
                                                <i class="la la-star"></i>
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="dropdown dropdown-icon">
                                        <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ion-md-more"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link favorite">
                                                    <i class="la la-heart-o"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-plus"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-download"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="javascript:void(0);" class="dropdown-link">
                                                    <i class="la la-share-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="external" data-audio='{"name": "Hey not me", "artist": "Rasomi Pelina", "album": "Find Soul", "url": "../assets/audio/ringtone-6.mp3", "cover_art_url": "../assets/images/cover/small/6.jpg"}'>
                                    <img src="../assets/images/cover/large/6.jpg" alt="Hey not me" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="song-details.html" class="custom-card--link mt-2">
                                <h6>Hey not me</h6>
                                <p>Rasomi Pelina</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="heading">
                        <div class="d-flex flex-wrap align-items-end">
                            <div class="flex-grow-1">
                                <h4>Radio</h4>
                                <p>Listen live now</p>
                            </div>
                            <a href="stations.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                        </div>
                        <hr>
                    </div>
                    <div class="carousel-item-6 arrow-pos-2">
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="javascript:void(0);">
                                    <img src="../assets/images/cover/large/1.jpg" alt="International" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="custom-card--link mt-2">
                                <h6 class="mb-0">International</h6>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="javascript:void(0);">
                                    <img src="../assets/images/cover/large/2.jpg" alt="Network" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="custom-card--link mt-2">
                                <h6 class="mb-0">Network</h6>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="javascript:void(0);">
                                    <img src="../assets/images/cover/large/3.jpg" alt="Alpha Gamma" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="custom-card--link mt-2">
                                <h6 class="mb-0">Alpha Gamma</h6>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="javascript:void(0);">
                                    <img src="../assets/images/cover/large/4.jpg" alt="Leanne Hutton" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="custom-card--link mt-2">
                                <h6 class="mb-0">Leanne Hutton</h6>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="javascript:void(0);">
                                    <img src="../assets/images/cover/large/5.jpg" alt="K S N F" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="custom-card--link mt-2">
                                <h6 class="mb-0">K S N F</h6>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="javascript:void(0);">
                                    <img src="../assets/images/cover/large/6.jpg" alt="Clay Gandy" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="custom-card--link mt-2">
                                <h6 class="mb-0">Clay Gandy</h6>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="javascript:void(0);">
                                    <img src="../assets/images/cover/large/9.jpg" alt="Get Reehl" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="custom-card--link mt-2">
                                <h6 class="mb-0">Get Reehl</h6>
                            </a>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="javascript:void(0);">
                                    <img src="../assets/images/cover/large/10.jpg" alt="Morning one" class="card-img--radius-lg">
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="custom-card--link mt-2">
                                <h6 class="mb-0">Morning one</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="heading">
                        <div class="d-flex flex-wrap align-items-end">
                            <div class="flex-grow-1">
                                <h4>Genres</h4>
                                <p>Select you genre</p>
                            </div>
                            <a href="genres.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                        </div>
                        <hr>
                    </div>
                    <div class="carousel-item-6 arrow-pos-1">
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="javascript:void(0);">
                                    <img src="../assets/images/background/horizontal/1.jpg" alt="Remix Songs" class="card-img--radius-md">
                                    <span class="bg-blur">Remix Songs</span>
                                </a>
                            </div>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="javascript:void(0);">
                                    <img src="../assets/images/background/horizontal/2.jpg" alt="Rock Songs" class="card-img--radius-md">
                                    <span class="bg-blur">Rock Songs</span>
                                </a>
                            </div>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="javascript:void(0);">
                                    <img src="../assets/images/background/horizontal/3.jpg" alt="Sufi Songs" class="card-img--radius-md">
                                    <span class="bg-blur">Sufi Songs</span>
                                </a>
                            </div>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="javascript:void(0);">
                                    <img src="../assets/images/background/horizontal/4.jpg" alt="Romantic Songs" class="card-img--radius-md">
                                    <span class="bg-blur">Romantic Songs</span>
                                </a>
                            </div>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="javascript:void(0);">
                                    <img src="../assets/images/background/horizontal/5.jpg" alt="Sports Songs" class="card-img--radius-md">
                                    <span class="bg-blur">Sports Songs</span>
                                </a>
                            </div>
                        </div>
                        <div class="custom-card">
                            <div class="custom-card--img">
                                <a href="javascript:void(0);">
                                    <img src="../assets/images/background/horizontal/6.jpg" alt="Old Songs" class="card-img--radius-lg">
                                    <span class="bg-blur">Old Songs</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer id="footer" class="bg-img">
                <div class="footer-content">
                    <a href="home.html#" class="email">info@listenapp.com</a>
                    <div class="platform-btn-inline">
                        <a href="home.html#" class="btn btn-dark btn-air platform-btn">
                            <i class="ion-logo-android"></i>
                            <div class="platform-btn-info">
                                <span class="platform-desc">Available on</span>
                                <span class="platform-name">Android</span>
                            </div>
                        </a>
                        <a href="home.html#" class="btn btn-danger btn-air platform-btn">
                            <i class="ion-logo-apple"></i>
                            <div class="platform-btn-info">
                                <span class="platform-desc">Available on</span>
                                <span class="platform-name">App Store</span>
                            </div>
                        </a>
                    </div>
                </div>
            </footer>
            <div id="audioPlayer" class="player-primary">
                <div id="progress-container">
                    <input type="range" class="amplitude-song-slider">
                    <progress class="audio-progress audio-progress--played amplitude-song-played-progress"></progress>
                    <progress class="audio-progress audio-progress--buffered amplitude-buffered-progress" value="0"></progress>
                </div>
                <div class="audio">
                    <div class="song-image">
                        <img data-amplitude-song-info="cover_art_url" src="../assets/images/cover/small/1.jpg" alt="">
                    </div>
                    <div class="song-info pl-3">
                        <span class="song-name d-inline-block text-truncate" data-amplitude-song-info="name"></span>
                        <span class="song-artists d-block text-muted" data-amplitude-song-info="artist"></span>
                    </div>
                </div>
                <div class="audio-controls">
                    <div class="audio-controls--left d-flex mr-auto">
                        <button class="btn btn-icon-only amplitude-repeat">
                            <i class="ion-md-sync"></i>
                        </button>
                    </div>
                    <div class="audio-controls--main d-flex">
                        <button class="btn btn-icon-only amplitude-prev">
                            <i class="ion-md-skip-backward"></i>
                        </button>
                        <button class="btn btn-air btn-pill btn-default btn-icon-only amplitude-play-pause">
                            <i class="ion-md-play"></i>
                            <i class="ion-md-pause"></i>
                        </button>
                        <button class="btn btn-icon-only amplitude-next">
                            <i class="ion-md-skip-forward"></i>
                        </button>
                    </div>
                    <div class="audio-controls--right d-flex ml-auto">
                        <button class="btn btn-icon-only amplitude-shuffle amplitude-shuffle-off">
                            <i class="ion-md-shuffle"></i>
                        </button>
                    </div>
                </div>
                <div class="audio-info d-flex align-items-center pr-4">
                    <span class="mr-4">
                        <span class="amplitude-current-minutes"></span> :
                        <span class="amplitude-current-seconds"></span> /
                        <span class="amplitude-duration-minutes"></span> :
                        <span class="amplitude-duration-seconds"></span>
                    </span>
                    <div class="audio-volume dropdown">
                        <button class="btn btn-icon-only" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ion-md-volume-low"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right volume-dropdown-menu">
                            <input type="range" class="amplitude-volume-slider" value="100">
                        </div>
                    </div>
                    <div class="dropleft">
                        <button class="btn btn-icon-only" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="la la-ellipsis-v"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <a href="javascript:void(0);" class="dropdown-link">
                                    <i class="la la-heart-o"></i>
                                    <span>Favorite</span>
                                </a>
                            </li>
                            <li class="dropdown-item">
                                <a href="javascript:void(0);" class="dropdown-link">
                                    <i class="la la-plus"></i>
                                    <span>Add to Playlist</span>
                                </a>
                            </li>
                            <li class="dropdown-item">
                                <a href="javascript:void(0);" class="dropdown-link">
                                    <i class="la la-download"></i>
                                    <span>Download</span>
                                </a>
                            </li>
                            <li class="dropdown-item">
                                <a href="javascript:void(0);" class="dropdown-link">
                                    <i class="la la-share-alt"></i>
                                    <span>Share</span>
                                </a>
                            </li>
                            <li class="dropdown-item">
                                <a href="song-details.html" class="dropdown-link">
                                    <i class="la la-info-circle"></i>
                                    <span>Song Info</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <button class="btn btn-icon-only" id="playList">
                        <i class="ion-md-musical-note"></i>
                    </button>
                </div>
            </div>
        </main>
        <aside id="rightSidebar">
            <div class="right-sidebar-header">Listen Special</div>
            <div class="right-sidebar-body" data-scrollable="true">
                <ul class="list-group list-group-flush">
                    <li class="custom-list--item list-group-item">
                        <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="0" data-amplitude-playlist="special">
                            <div class="custom-card--inline-img">
                                <img src="../assets/images/cover/small/1.jpg" alt="" class="card-img--radius-sm">
                            </div>
                            <div class="custom-card--inline-desc">
                                <p class="text-truncate mb-0">I Love You Mummy</p>
                                <p class="text-truncate text-muted font-sm">Arebica Luna</p>
                            </div>
                        </div>
                        <ul class="custom-card--labels d-flex ml-auto">
                            <li class="dropleft">
                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-ellipsis-h"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                            <i class="la la-heart-o"></i>
                                            <span>Favorite</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link">
                                            <i class="la la-plus"></i>
                                            <span>Add to Playlist</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link">
                                            <i class="la la-download"></i>
                                            <span>Download</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link">
                                            <i class="la la-share-alt"></i>
                                            <span>Share</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="song-details.html" class="dropdown-link">
                                            <i class="la la-info-circle"></i>
                                            <span>Song Info</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="custom-list--item list-group-item">
                        <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="1" data-amplitude-playlist="special">
                            <div class="custom-card--inline-img">
                                <img src="../assets/images/cover/small/2.jpg" alt="" class="card-img--radius-sm">
                            </div>
                            <div class="custom-card--inline-desc">
                                <p class="text-truncate mb-0">Shack your butty</p>
                                <p class="text-truncate text-muted font-sm">Gerrina Linda</p>
                            </div>
                        </div>
                        <ul class="custom-card--labels d-flex ml-auto">
                            <li class="dropleft">
                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-ellipsis-h"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                            <i class="la la-heart-o"></i>
                                            <span>Favorite</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link">
                                            <i class="la la-plus"></i>
                                            <span>Add to Playlist</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link">
                                            <i class="la la-download"></i>
                                            <span>Download</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link">
                                            <i class="la la-share-alt"></i>
                                            <span>Share</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="song-details.html" class="dropdown-link">
                                            <i class="la la-info-circle"></i>
                                            <span>Song Info</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="custom-list--item list-group-item">
                        <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="2" data-amplitude-playlist="special">
                            <div class="custom-card--inline-img">
                                <img src="../assets/images/cover/small/3.jpg" alt="" class="card-img--radius-sm">
                            </div>
                            <div class="custom-card--inline-desc">
                                <p class="text-truncate mb-0">Do it your way(Female)</p>
                                <p class="text-truncate text-muted font-sm">Zunira Willy & Nutty Nina</p>
                            </div>
                        </div>
                        <ul class="custom-card--labels d-flex ml-auto">
                            <li class="dropleft">
                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-ellipsis-h"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                            <i class="la la-heart-o"></i>
                                            <span>Favorite</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link">
                                            <i class="la la-plus"></i>
                                            <span>Add to Playlist</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link">
                                            <i class="la la-download"></i>
                                            <span>Download</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link">
                                            <i class="la la-share-alt"></i>
                                            <span>Share</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="song-details.html" class="dropdown-link">
                                            <i class="la la-info-circle"></i>
                                            <span>Song Info</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="custom-list--item list-group-item">
                        <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="3" data-amplitude-playlist="special">
                            <div class="custom-card--inline-img">
                                <img src="../assets/images/cover/small/4.jpg" alt="" class="card-img--radius-sm">
                            </div>
                            <div class="custom-card--inline-desc">
                                <p class="text-truncate mb-0">Say yes</p>
                                <p class="text-truncate text-muted font-sm">Johnny Marro</p>
                            </div>
                        </div>
                        <ul class="custom-card--labels d-flex ml-auto">
                            <li class="dropleft">
                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-ellipsis-h"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                            <i class="la la-heart-o"></i>
                                            <span>Favorite</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link">
                                            <i class="la la-plus"></i>
                                            <span>Add to Playlist</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link">
                                            <i class="la la-download"></i>
                                            <span>Download</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link">
                                            <i class="la la-share-alt"></i>
                                            <span>Share</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="song-details.html" class="dropdown-link">
                                            <i class="la la-info-circle"></i>
                                            <span>Song Info</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="custom-list--item list-group-item">
                        <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="4" data-amplitude-playlist="special">
                            <div class="custom-card--inline-img">
                                <img src="../assets/images/cover/small/5.jpg" alt="" class="card-img--radius-sm">
                            </div>
                            <div class="custom-card--inline-desc">
                                <p class="text-truncate mb-0">Where is your letter</p>
                                <p class="text-truncate text-muted font-sm">Jina Moore & Lenisa Gory</p>
                            </div>
                        </div>
                        <ul class="custom-card--labels d-flex ml-auto">
                            <li class="dropleft">
                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-ellipsis-h"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                            <i class="la la-heart-o"></i>
                                            <span>Favorite</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link">
                                            <i class="la la-plus"></i>
                                            <span>Add to Playlist</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link">
                                            <i class="la la-download"></i>
                                            <span>Download</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link">
                                            <i class="la la-share-alt"></i>
                                            <span>Share</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="song-details.html" class="dropdown-link">
                                            <i class="la la-info-circle"></i>
                                            <span>Song Info</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="custom-list--item list-group-item">
                        <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="5" data-amplitude-playlist="special">
                            <div class="custom-card--inline-img">
                                <img src="../assets/images/cover/small/6.jpg" alt="" class="card-img--radius-sm">
                            </div>
                            <div class="custom-card--inline-desc">
                                <p class="text-truncate mb-0">Hey not me</p>
                                <p class="text-truncate text-muted font-sm">Rasomi Pelina</p>
                            </div>
                        </div>
                        <ul class="custom-card--labels d-flex ml-auto">
                            <li class="dropleft">
                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-ellipsis-h"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                            <i class="la la-heart-o"></i>
                                            <span>Favorite</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link">
                                            <i class="la la-plus"></i>
                                            <span>Add to Playlist</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link">
                                            <i class="la la-download"></i>
                                            <span>Download</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link">
                                            <i class="la la-share-alt"></i>
                                            <span>Share</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="song-details.html" class="dropdown-link">
                                            <i class="la la-info-circle"></i>
                                            <span>Song Info</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="custom-list--item list-group-item">
                        <div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="6" data-amplitude-playlist="special">
                            <div class="custom-card--inline-img">
                                <img src="../assets/images/cover/small/7.jpg" alt="" class="card-img--radius-sm">
                            </div>
                            <div class="custom-card--inline-desc">
                                <p class="text-truncate mb-0">Deep inside</p>
                                <p class="text-truncate text-muted font-sm">Pimila Holliwy</p>
                            </div>
                        </div>
                        <ul class="custom-card--labels d-flex ml-auto">
                            <li class="dropleft">
                                <a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-ellipsis-h"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link favorite">
                                            <i class="la la-heart-o"></i>
                                            <span>Favorite</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link">
                                            <i class="la la-plus"></i>
                                            <span>Add to Playlist</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link">
                                            <i class="la la-download"></i>
                                            <span>Download</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0);" class="dropdown-link">
                                            <i class="la la-share-alt"></i>
                                            <span>Share</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="song-details.html" class="dropdown-link">
                                            <i class="la la-info-circle"></i>
                                            <span>Song Info</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
    </div>
    <div class="modal fade" id="lang" tabindex="-1" role="dialog" aria-labelledby="langTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title mb-1" id="langTitle">Language</h5>
                        <p class="text-muted">Please select the language(s) of the music you listen to.</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group row">
                        <li class="list-group-item border-0 col-sm-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ch1" checked="checked">
                                <label class="custom-control-label" for="ch1">Hindi</label>
                            </div>
                        </li>
                        <li class="list-group-item border-0 col-sm-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ch2">
                                <label class="custom-control-label" for="ch2">Punjabi</label>
                            </div>
                        </li>
                        <li class="list-group-item border-0 col-sm-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ch3">
                                <label class="custom-control-label" for="ch3">Tamil</label>
                            </div>
                        </li>
                        <li class="list-group-item border-0 col-sm-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ch4">
                                <label class="custom-control-label" for="ch4">Bengali</label>
                            </div>
                        </li>
                        <li class="list-group-item border-0 col-sm-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ch5">
                                <label class="custom-control-label" for="ch5">Kannada</label>
                            </div>
                        </li>
                        <li class="list-group-item border-0 col-sm-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ch6">
                                <label class="custom-control-label" for="ch6">Gujarati</label>
                            </div>
                        </li>
                        <li class="list-group-item border-0 col-sm-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ch7">
                                <label class="custom-control-label" for="ch7">Urdu</label>
                            </div>
                        </li>
                        <li class="list-group-item border-0 col-sm-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ch8">
                                <label class="custom-control-label" for="ch8">Rajasthani</label>
                            </div>
                        </li>
                        <li class="list-group-item border-0 col-sm-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ch9" checked="checked">
                                <label class="custom-control-label" for="ch9">English</label>
                            </div>
                        </li>
                        <li class="list-group-item border-0 col-sm-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ch10">
                                <label class="custom-control-label" for="ch10">Telugu</label>
                            </div>
                        </li>
                        <li class="list-group-item border-0 col-sm-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ch11">
                                <label class="custom-control-label" for="ch11">Bhojpuri</label>
                            </div>
                        </li>
                        <li class="list-group-item border-0 col-sm-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ch12">
                                <label class="custom-control-label" for="ch12">Malayalam</label>
                            </div>
                        </li>
                        <li class="list-group-item border-0 col-sm-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ch13">
                                <label class="custom-control-label" for="ch13">Marathi</label>
                            </div>
                        </li>
                        <li class="list-group-item border-0 col-sm-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ch14">
                                <label class="custom-control-label" for="ch14">Haryanvi</label>
                            </div>
                        </li>
                        <li class="list-group-item border-0 col-sm-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ch15">
                                <label class="custom-control-label" for="ch15">Assamese</label>
                            </div>
                        </li>
                        <li class="list-group-item border-0 col-sm-6">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ch16">
                                <label class="custom-control-label" for="ch16">Odia</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer text-center d-block">
                    <button type="button" class="btn btn-primary btn-pill" id="langApply">Apply</button>
                </div>
            </div>
        </div>
    </div>
    <div class="backdrop header-backdrop"></div>
    <div class="backdrop sidebar-backdrop"></div>
    <script src="../assets/js/vendors.bundle.js"></script>
    <script src="../assets/js/scripts.bundle.js"></script>
</body>

</html>