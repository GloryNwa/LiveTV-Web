<footer id="footer" class="">
    <div class="footer-content"><a class="email">Download LiveTV App<br></a>

        <div class=""><a href="https://play.google.com/store/apps/details?id=com.celivetv.mobile2" class="btn btn-dark btn-air platform-btn" target="_blank"><i class="ion-logo-android"></i>
                <div class="platform-btn-info"><span class="platform-desc"> App Available on</span> <span class="platform-name">Android</span></div>
            </a>
            <a href="https://apps.apple.com/us/app/livetv-mobile/id438032250" class="btn btn-danger btn-air platform-btn" target="_blank"><i class="ion-logo-apple"></i>
                <div class="platform-btn-info"><span class="platform-desc">App Available on</span> <span class="platform-name">App Store</span></div>
            </a></div>
    </div>
</footer>



</main>



</div>



<div class="backdrop header-backdrop"></div>
<div class="backdrop sidebar-backdrop"></div>



<button type="button" id="customSettings" class="btn btn-pill btn-air btn-brand btn-icon-only">
    <i class=" ion-md-settings"></i>
</button>
<div id="settingsWrapper">
    <header style="background-color:#253dcb !important;">
        <span class="title-bold font-md text-uppercase">Mode</span>
        <a href="javascript:void(0)" class="ml-auto">
            <i class="ion-md-close"></i>
        </a>
    </header>
    <div class="theme-settings-body">
        <ul class="custom-list">
            <li class="custom-list--item">
                <label for="to0">Dark Mode</label>
                <div class="custom-control custom-checkbox ml-auto">
                    <input type="checkbox" class="custom-control-input" id="to0">
                    <label class="custom-control-label" for="to0"></label>
                </div>
            </li>

        </ul>
    </div>
</div>

<script src="/assets/js/vendors.bundle.js"></script>
<script src="/assets/js/scripts.bundle.js"></script>
<script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/3.0.2/videojs-contrib-hls.js"></script>

<script>
    $(document).ready(function() {


        $(".change_stream").click(function() {
            var new_url = $(this).attr("stream_url")
            var stream_type = $(this).attr("stream_type")

            var player = videojs("video-js");
            player.src({
                src: new_url,

            });

            player.load();
            player.play();

            $("#stream_type").html(stream_type);


        });

        $("#btn").on("click", function() {
            $("#video").html("<source src='" + $("#url").val() + "' type='application/x-mpegURL'>");
            var ply = videojs("video");
            ply.play();
        });
    });
</script>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/5.10.2/video.js"></script>-->



</body>

</html>