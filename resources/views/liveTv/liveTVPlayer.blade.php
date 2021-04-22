@include('include/header3')
<!-- <div class="banner bg-event"></div> -->
<br><br><br><br><br><br><br><br>
<div class="main-container" id="appRoute">
    <div class="section">
        <div class="heading">
            <div class="d-flex flex-wrap align-items-end">

            </div>
            <hr>
        </div>
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-sm-8">
                @if(count($response) == 1)



                <video id="my-video" class="video-js" controls preload="auto" width="100%" height="auto" poster="{{$response->data->banner}}" data-setup='{}'>
                    <source src="{{$response->data->file}}" type="video/mp4" />
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                    </p>
                </video>


                {{$response->data->title}}<br>

                {{$response->data->created_at}}
                | 10,234,014 views





                @endif
            </div>

            <div class="col-xl-2 col-lg-3 col-sm-3">
                <h4>Recommended</h4>
                <div style="overflow: scroll;height:500px;" id="scroll">
                    @foreach($category->data as $cat)





                    <a href="/livetv/web/{{$cat->video_id}}"><img src="{{$cat->banner}}" alt="" class=""> </a>
                    <br><br>




                    <p>{{$cat->title}}</p>




                    @endforeach
                </div>
            </div>
        </div>


    </div>

    <br><br>
    <br>
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
</div>

@include('include/footer2')