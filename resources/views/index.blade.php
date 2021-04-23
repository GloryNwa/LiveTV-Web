@include('include/header')


@foreach($sections->data as $section)
<h6>{{$section->title}}</h6><br>

<div class="carousel-item-5 arrow-pos-3">

  @foreach($section->videos as $video)

  <div class="custom-card">
    <div class="custom-card--img">

      <a href="/livetv/web/{{$video->video_id}}/{{$video->category_id}}" class="external" data-audio=''><img src="{{$video->banner}}" alt="" class="card-img--radius-lg" style="max-height:400px !important"></a><br>


      <p>{{$video->title}}</p>
      <br>

    </div>

  </div>
  @endforeach
</div>

@endforeach

@include('include/footer')