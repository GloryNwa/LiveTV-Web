@include('include/header')


<style>
    .video-js-responsive-container.vjs-hd {
        padding-top: 56.25%;
    }

    .video-js-responsive-container.vjs-sd {
        padding-top: 75%;
    }

    .video-js-responsive-container {
        width: 100%;
        position: relative;
    }

    .video-js-responsive-container .video-js {
        height: 100% !important;
        width: 100% !important;
        position: absolute;
        top: 0;
        left: 0;
    }
</style>

<div class=""></div>


<div class="row section ">

    @if(count($response) ==1)
    <div class="col-xl-9 col-lg-8 col-sm-7">
        <div class="row pt-4">
            <div class="text-warning stars"><i class=""></i></div><span class=""></span>
            <div class="container" id="">
                <div class="video-js-responsive-container vjs-hd">
                    <video id="video-js" class="video-js" controls preload="auto" poster="{{$response->data[0]->banner}}" data-setup="{}" autoplay>
                        <source src="{{$response->data[0]->file}}" type="application/x-mpegURL" />

                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                        </p>
                    </video>
                </div><br>

                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                    <p>{{$response->data[0]->title}}</p>
                    <!-- <ul class="list-group list-group-flush">
                        <li class="list-group-item pl-0 border-0">Title: <span class=""> </span></li>
                        <li class="list-group-item pl-0 border-0">Category: <span class=""> {{$response->data[0]->category}} </span></li>
                        <li class="list-group-item pl-0 border-0">Posted: <span class=""> {{$response->data[0]->created_at}} </span></li>
                        <li class="list-group-item pl-0 border-0">Views: <span class=""><i class="la la-eye"></i> 10,234,014</span></li>
                    </ul> -->
                </div>
                <hr>

            </div>
        </div>

    </div>



    <div class="col-md-3 d-none d-sm-block ">
        <div class="footer-content"><a class="email" style="font-weight: bold;">Download LiveTV App<br><br /></a>

            <div class=""><a href="https://play.google.com/store/apps/details?id=com.celivetv.mobile2" class="btn btn-dark btn-air platform-btn" target="_blank"><i class="ion-logo-android"></i>
                    <div class="platform-btn-info"><span class="platform-desc"> App Available on</span> <span class="platform-name">Android</span></div>
                </a>

                <br />
                <br />
                <a href="https://apps.apple.com/us/app/livetv-mobile/id438032250" class="btn btn-danger btn-air platform-btn" target="_blank"><i class="ion-logo-apple"></i>
                    <div class="platform-btn-info"><span class="platform-desc">App Available on</span> <span class="platform-name">App Store</span></div>
                </a></div>
        </div>
    </div>


    @else


    <div class="col-xl-9 col-lg-8 col-sm-7">
        <div class="row pt-4">
            <div class="text-warning stars"><i class=""></i></div><span class=""></span>
            <div class="container" id="">
                <div class="video-js-responsive-container vjs-hd">
                    <video id="video-js" class="video-js" controls preload="auto" poster="" data-setup="{}" autoplay>
                        <source src="" type="application/x-mpegURL" />

                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                        </p>
                    </video>
                </div><br>

                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                    <h4</h4> </div> <hr>

                </div>
            </div>

        </div>



        <div class="col-md-3 d-none d-sm-block ">
            <div class="footer-content"><a class="email" style="font-weight: bold;">Download LiveTV App<br><br /></a>

                <div class=""><a href="https://play.google.com/store/apps/details?id=com.celivetv.mobile2" class="btn btn-dark btn-air platform-btn" target="_blank"><i class="ion-logo-android"></i>
                        <div class="platform-btn-info"><span class="platform-desc"> App Available on</span> <span class="platform-name">Android</span></div>
                    </a>

                    <br />
                    <br />
                    <a href="https://apps.apple.com/us/app/livetv-mobile/id438032250" class="btn btn-danger btn-air platform-btn" target="_blank"><i class="ion-logo-apple"></i>
                        <div class="platform-btn-info"><span class="platform-desc">App Available on</span> <span class="platform-name">App Store</span></div>
                    </a></div>
            </div>
        </div>

        @endif


    </div>




    <h4>Browse Category</h4>
    <hr>
    <div class="row">

        @foreach($category->data as $cat)
        <div class="col-xl-3 col-lg-4 col-sm-6 pb-4">
            <ul class="list-unstyled h-bg-1-dark">

                <div class="custom-card mb-3"><a href="/catch/up/{{$cat->category_id}}" class="text-dark">
                        <p class="text-truncate mt-2"><i class="la la-diamond"></i>{{$cat->name}}</p>
                    </a></div>
            </ul>
        </div>
        @endforeach
    </div>


    <div class="">
        <div class=" heading">
            <div class="d-flex flex-wrap align-items-end">
                <div class="flex-grow-1">
                    <!-- <h4>Category</h4> -->

                    <!-- </div><a href="songs.html" class="btn btn-sm btn-pill btn-air btn-primary">View Album</a> -->
                </div>
                <hr>
            </div>

            @if(count($response) > 0)
            <h4>{{$response->data[0]->category}}</h4>
            <hr>
            <div class="carousel-item-5 arrow-pos-3">


                @foreach($response->data as $cat_video)
                <div class="custom-card">
                    <div class="custom-card--img">
                        <div class="custom-card--info">
                            <div class="dropdown dropdown-icon"><a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ion-md-more"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><i class="la la-heart-o"></i></a></li>
                                    <li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-plus"></i></a></li>
                                    <li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i></a></li>
                                    <li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div><a href="/catch/up/{{$cat_video->video_id}}"><img src="{{$cat_video->banner}}" alt="{{$cat_video->title}}" class=""></a>
                    </div><a class="custom-card--link mt-2">
                        <p>Title: {{$cat_video->title}}...</p>
                        <p>Posted: {{$cat_video->created_at}}</p>
                    </a>
                </div>

                @endforeach
                @else
                <div class="col-xl-12 col-lg-12 col-sm-12 alert alert-warning">
                    No video found in this category, kindly check back later!
                </div>

            </div>
            @endif
        </div>
        <br>
        <div class="section">

            <form class="">
                <div class="">

                    <input type="text" class="form-control" placeholder="Leave a Comment"><br>
                    <button class="btn btn-primary btn-sm" name="button">Submit</button>
                </div>
            </form>
        </div>
    </div>


</div>

@include('include/footer')