@include('include/header2')

<div class=""></div>
<div class="main-container" id="appRoute">
    <div class="section">

        <!-- <div class="banner bg-home"></div> -->
        <br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br>
        <div class="main-container" id="appRoute">
            <div class="section row">
                @if(count($stations->data) > 0)
                @foreach($stations->data as $station)
                <div class="col-xl-3 col-lg-4 col-sm-6 pb-4">
                    <div class="custom-card">
                        <div class="custom-card--img">
                            <a href="/livetv/stations/{{$station->id}}"><img src="{{$station->thumbnail}}" alt="" class="card-img--radius-lg"> <span class="bg-blur">{{$station->stationName}}</span></a>
                        </div>
                    </div>
                </div>

                @endforeach
                @else
                <div class="col-xl-12 col-lg-12 col-sm-12 alert alert-warning">
                    No station available, check back later!
                </div>
                @endif
            </div>
        </div>


        @include('include/footer')