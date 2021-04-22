@include('include/header3')

<br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            @if(count($response) == 1)

            <video id="my-video" class="video-js" controls preload="auto" width="100%" height="auto" poster="" data-setup='{}'>
                <source src="{{$response->data->url}}" type="video/mp4" />
                <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a
                    web browser that
                    <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
            </video>
            @else
            <div class="col-xl-12 col-lg-12 col-sm-12 alert alert-warning">
                No available video yet, check back later!
            </div>

            @endif
        </div>
    </div>
</div>
<div class="">
    <div class="section">

        <form class="">
            <div class="">

                <input type="text" class="form-control" placeholder="Leave a Comment"><br>
                <button class="btn btn-primary btn-sm" name="button" style="background-color:#253dcb !important; border:none">Submit</button>
            </div>
        </form>
    </div>
</div>


@include('include/footer2')