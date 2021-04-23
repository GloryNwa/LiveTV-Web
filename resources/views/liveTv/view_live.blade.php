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
                <video id="video-js" class="video-js" controls preload="auto" poster="" data-setup="{}" autoplay>
                    <source src="{{$response->data[0]->url}}" type="application/x-mpegURL" />

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
                        <h4>{{$response->data[0]->stationName}} </h4> (<span id="stream_type">High Stream</span>)
                    </div>
                </div>
                <hr>
            </div>
        </div>

        <div class="col-md-3">
            <button class="btn btn-primary btn-xs change_stream" stream_url="{{$response->data[0]->url}}" stream_type="High Stream" style="background-color:#253dcb !important; border:none">High Stream</button>
            <button class="btn btn-primary btn-xs change_stream" stream_url="{{$response->data[0]->lowUrl}}" stream_type="Low Stream" style="background-color:#253dcb !important; border:none">Low Stream</button>

        </div>


    </div>


    <div class="section">
        <div class="heading">
            <div class="d-flex flex-wrap align-items-end">
                <div class="flex-grow-1">
                    <br />
                    <h4>Other Stations</h4>
                </div>
            </div>

        </div>
        <div class="carousel-item-5 arrow-pos-3">
            @if(count($related->data) > 0)
            @foreach($related->data as $video)
            <div class="custom-card">
                <div class="custom-card--img">
                    <div class="custom-card--info">

                    </div><a href="{{route('view_live',['id'=>$video->id])}}" class="external"><img src="{{$video->thumbnail}}" alt="{{$video->stationName}}" class="card-img--radius-lg"></a>
                </div><a href="{{route('view_live',['id'=>$video->id])}}" class="custom-card--link mt-2">

                    <p>{{$video->stationName}}</p>
                </a>
            </div>
            @endforeach
            @endif

        </div>
    </div>



</div>
@include('include/footer')