@include('include/header3')
<div class=""></div>
<br><br><br><br><br><br><br><br><br><br><br>

<div class="row section ">
    @if(count($response) == 1)

    <div class="col-xl-12 col-lg-12 col-sm-12">
        <div class="row pt-4">
            <div class="text-warning stars"><i class=""></i></div><span class=""></span>
            <div class="container" id="">
                <video id="my-video" class="video-js" controls preload="auto" width="100%" height="auto" poster="{{$response->data->banner}}" data-setup='{}'>
                    <source src="{{$response->data->file}}" type="video/mp4" />
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                    </p>
                </video>

                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item pl-0 border-0">Title: <span class="">{{$response->data->title}}</span></li>
                        <li class="list-group-item pl-0 border-0">Category: <span class="">{{$response->data->category}} </span></li>
                        <li class="list-group-item pl-0 border-0">Posted: <span class="">{{$response->data->created_at}} </span></li>
                        <li class="list-group-item pl-0 border-0">Views: <span class=""><i class="la la-eye"></i> 10,234,014</span></li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
    @else
    <div class="col-xl-12 col-lg-12 col-sm-12 alert alert-warning">
        No available video, check back later!
    </div>
    @endif

</div>

<div class="row">
    <h4>Browse Category</h4>
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
                <h4>Category</h4>
                <hr>
                <!-- </div><a href="songs.html" class="btn btn-sm btn-pill btn-air btn-primary">View Album</a> -->
            </div>
            <hr>
        </div>


        <div class="carousel-item-5 arrow-pos-3">

            @if(count($response) > 0)
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
                    </div><a href="/catch/up/{{$cat_video->video_id}}"><img src="{{$cat_video->banner}}" alt="" class="card-img--radius-lg"></a>
                </div><a class="custom-card--link mt-2">
                    <p>Title:{{$cat_video->title}}...</p>
                    <p>Posted: {{$cat_video->created_at}}</p>
                </a>
            </div>

            @endforeach
            @else
            <div class="col-xl-12 col-lg-12 col-sm-12 alert alert-warning">
                No video found in this category, check back later!
            </div>
            @endif
        </div>
    </div>

    <div class="section">

        <form class="">
            <div class="">

                <input type="text" class="form-control" placeholder="Leave a Comment"><br>
                <button class="btn btn-primary btn-sm" name="button">Submit</button>
            </div>
        </form>
    </div>
</div>




@include('include/footer2')