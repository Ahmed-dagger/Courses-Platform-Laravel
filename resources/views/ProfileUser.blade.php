@extends('layout.layout')

@section('content')
    <!--Profile-->
    <div class="container mt-5 Profile">
        <div class="row">
            <div>
                @include('shared.success')
            </div>
            <div class="col-12">
                <div class="card">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" class="ProfileBack img-fluid" alt="Academy Image">
                    <div class="card-body">

                        <div class="ProfileInfo">
                            <div class="profile-section mb-3">

                                <div class="container text-center col-md-2">
                                    <img src="{{ $user->getImageUrl() }}" class="rounded-circle AcademyImg"
                                        alt="Profile Image">
                                    <h5 class="card-title mt-3">{{ Auth::user()->name }}</h5>
                                    <p class="card-text">1250 Courses Enrolled</p>
                                </div>

                            </div>

                            <div class="d-flex justify-content-center mb-3">
                                <a href="{{ route('UserConfigure.show' , $user->id) }}"><button class="ConfgButton me-2">Configuration</button></a>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 col-md-12">

    </div>



    <div class="mt-4 col-md-12">
        <!--Margin Space-->
    </div>
    <div class="mt-4 col-md-12">
        <!--Margin Space-->
    </div>
    <div class="mt-4 col-md-12">
        <!--Margin Space-->
    </div>


    <div class="container-fluid BannerAcademyinfo align-items-center">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-7  text-center BannerCol align-items-center">
                <h5 class="text-light align-items-center BannerAcademyHead">Best blace for enhancing your skills</h5>
                <p class="text-light BannerAcademyP">Access for easy learning <br>
                    Access for courses forever <br>
                    Expert tutors
                </p>
                <button class="btn btn-danger text-light">Look for courses</button>
            </div>



            <div class="col-md-5 justify-content-start">
                <img src="img/freepik-export-20240701083100pwgA.png" class="BannerAcademyImg pt-5" alt="">

            </div>

        </div>

    </div>

    <div class="mt-4 col-md-12">
        <!--Margin Space-->
    </div>
    <div class="mt-4 col-md-12">
        <!--Margin Space-->
    </div>
    <div class="mt-4 col-md-12">
        <!--Margin Space-->
    </div>
@endsection
