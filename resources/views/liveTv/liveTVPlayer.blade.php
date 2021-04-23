@include('include/header')





<div class="" style="margin-top:60px"></div>
<div class="main-container" id="appRoute">
    <div class="row section text-center text-md-left">
        <div class="col-xl-9 col-lg-8 col-sm-7">

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


            <div class="video-js-responsive-container vjs-hd">
                <video id="my-video" class="video-js" controls preload="auto" poster="{{$response->data->banner}}" data-setup="{}" autoplay>
                    <source src="{{$response->data->file}}" type="application/x-mpegURL" />

                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                    </p>
                </video>

            </div>

            <div class="heading">
                <div class="d-flex flex-wrap align-items-end">
                    <div class="flex-grow-1" style="margin-top:15px">
                        <h4>{{$response->data->title}}</h4>
                    </div>
                </div>
                <hr>
            </div>
        </div>


        <div class="col-md-3">
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


    </div>

    <div class="section">
        <div class="heading">
            <div class="d-flex flex-wrap align-items-end">
                <div class="flex-grow-1">
                    <br />
                    <h4>Related Videos</h4>
                </div>
            </div>

        </div>
        <div class="carousel-item-5 arrow-pos-3">
            @if(count($related->data) > 0)
            @foreach($related->data as $video)
            <div class="custom-card">
                <div class="custom-card--img">
                    <div class="custom-card--info">

                    </div><a href="{{route('liveTVPlayer',['video_id'=>$video->video_id,'cat_id'=>$video->category_id])}}" class="external"><img src="{{$video->banner}}" alt="{{$video->title}}" class="card-img--radius-lg"></a>
                </div><a href="{{route('liveTVPlayer',['video_id'=>$video->video_id,'cat_id'=>$video->category_id])}}" class="custom-card--link mt-2">

                    <p>{{$video->title}}</p>
                </a>
            </div>
            @endforeach
            @endif

        </div>
    </div>

</div>
@include('include/footer')