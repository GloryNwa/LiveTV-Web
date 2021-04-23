@include('include/header')

<div class=""></div>
<h4>Category: {{$response->data[0]->category}}</h4><br>
<div class="row section">
    @if(count($response->data) > 0)
    @foreach($response->data as $cat)
    <div class="col-xl-3 col-lg-4 col-sm-6 pb-4">
        <div class="custom-card">
            <div class="custom-card--img"><a href="/livetv/web/{{$cat->video_id}}/{{$cat->category_id}}"><img src="{{$cat->banner}}" alt="" class="card-img--radius-lg"></a></div><a href="/liveTV/web/{{$cat->video_id}}" class="custom-card--link mt-2">
                <p class="mb-0">{{$cat->title}}</p>
            </a>
        </div>
    </div>
    @endforeach
    @else
    <div class="col-xl-12 col-lg-12 col-sm-12 alert alert-warning">
        No video available in this category, check back later!
    </div>
    @endif


</div>





@include('include/footer')