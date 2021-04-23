@include('include/header')
<div class=""></div>

<div class="main-container under-banner-content" id="appRoute">
    <div class="row section">
        <div class="col-xl-10 mx-auto">
            <div class="row">
                <div class="col-xl-4 col-md-5">
                    <div class="card h-auto">
                        <div class="card-body text-center">
                            <div class="avatar avatar-xl avatar-circle mx-auto mb-4"><img src="/assets/img/logo-icon.png" alt="user"></div>
                            <h6 class="mb-3">{{Session::get('name')}}</h6>

                            <p class="mb-1">{{Session::get('country')}}</p>
                            <!-- <p>Minimum: 128x128(px)</p> -->
                            <!-- <button type="button" class="btn btn-danger btn-air">Update Profile</button> -->
                            <br><br><br>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-md-7">
                    <div class="card h-auto">
                        <div class="card-body">
                            <h6 class="mb-3">User Details</h6>
                            <form action="#" class="row">

                                <div class="col-xl-10 form-group"><label for="firstName" class="form-label"> Name</label> <input type="text" id="firstName" class="form-control" value="{{Session::get('name')}}"></div>
                                <div class="col-xl-10 form-group"><label for="lastName" class="form-label">Email</label> <input type="text" id="lastName" class="form-control" value="{{Session::get('email')}}"></div>
                                <div class="col-xl-10 form-group"><label for="lastName" class="form-label">Country</label> <input type="text" id="lastName" class="form-control" value="{{Session::get('country')}}"></div>

                                <!-- <div class="col-xl-6 form-group"><label for="userType" class="form-label">User Type</label> <select name="userType" id="userType" class="form-control">
                                        <option value="0">Admin</option>
                                        <option value="1">Artist</option>
                                        <option value="2">Producer</option>
                                        <option value="3">User</option>
                                    </select></div> -->
                                <!-- <div class="col-xl-6 form-group"><label for="loc" class="form-label">Location</label> <input type="text" id="loc" class="form-control" value="USA"></div>
                                <div class="col-12 form-group"><label for="about" class="form-label">About</label> <textarea name="about" id="about" cols="30" rows="5" class="form-control"></textarea></div>
                                <div class="col-12"><button type="button" class="btn btn-primary btn-air">Save Changes</button></div> -->
                            </form>
                        </div>
                    </div>
                    <!-- <div class="plan-info-card text-center px-sm-5 py-sm-4 p-3">
                        <h6>No plan selected yet</h6>
                        <p>Your 30 days free subscription is going to expired within 2 days please select you plan.</p><a href="plan.html" class="btn btn-pill btn-air btn-success">Select Plan</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@include('include/footer')