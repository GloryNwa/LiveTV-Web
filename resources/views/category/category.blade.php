@include('include/header')

<div class=""></div>
<br><br><br><br>

<!-- <div class="main-container" id="appRoute">
                <div class="section"> -->
<!-- <div class="heading"> -->
<!-- <div class="d-flex flex-wrap align-items-end">
                            <div class="flex-grow-1">
                                <h4>Top Charts</h4>
                                <p>Listen top chart</p>
                            </div><a href="songs.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
                        </div> -->

<!-- </div> -->
<div class="main-container" id="appRoute">
    <h4> Browse Categories</h4>
    <div class="section row">
        @if(count($category) > 0)
        @foreach($category->data as $cat_video)
        <div class="col-xl-3 col-lg-4 col-sm-6 pb-4">
            <div class="custom-card">
                <div class="custom-card--img">
                    <a href="/catch-up/{{$cat_video->category_id}}"><img src="../assets/img/z6.jpeg" alt="all category" class="card-img--radius-md"> <span class="bg-blur">{{$cat_video->name}}</span></a>
                </div>
            </div>
        </div>

        @endforeach
        @endif
    </div>
</div>


@include('include/footer')