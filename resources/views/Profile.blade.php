@extends('layout.layout')

@section('content')
    <!--Profile-->
    <div class="container mt-5 Profile">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <img src="img/59ac7f4c765cff2aeb4784b83897e0af.jpeg" class="ProfileBack" alt="Academy Image">
                    <div class="card-body">

                        <div class="ProfileInfo">
                            <div class="profile-section mb-3">

                                <div class="container text-center">
                                    <img src="img/343372f2adb67e579a407730cd256afd.jpeg" class="rounded-circle AcademyImg"
                                        alt="Profile Image" width="50" height="50">
                                    <h5 class="card-title">{{ Auth::guard('owner')->user()->Owner_name }}</h5>
                                    <p class="card-text">1250 Subscriber</p>
                                </div>

                            </div>

                            <div class="d-flex justify-content-center mb-3">
                                <a href="{{ route('Configure') }}"><button class="ConfgButton me-2">Configuration</button></a>
                                <a href="AddingCourses" class="  text-decoration-none"><button
                                        class="ConfgButton d-flex text-center">Add Courses</button></a>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 col-md-12">

    </div>

    <div class="container">

        <div class="justify-content-center">
            <ul class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active TabsTitle text-danger" id="info-tab" data-bs-toggle="tab" href="#info"
                        role="tab" aria-controls="info" aria-selected="true">Academy information</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link TabsTitle text-danger" id="overview-tab" data-bs-toggle="tab" href="#overview"
                        role="tab" aria-controls="overview" aria-selected="false">Gallery</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link TabsTitle text-danger" id="courses-tab" data-bs-toggle="tab" href="#courses"
                        role="tab" aria-controls="courses" aria-selected="false">Courses and Training</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link TabsTitle text-danger" id="videos-tab" data-bs-toggle="tab" href="#videos"
                        role="tab" aria-controls="videos" aria-selected="false">Videos</a>
                </li>
            </ul>
            <br>
            <div class="mt-4 col-md-12">

            </div>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">

                    <div class="container justify-content-center">
                        <div class="row text-center gx-5 justify-content-center CounterRow">
                            <div class="class col-md-3 justify-content-center AcadmeyCounter">
                                <p>Views</p>
                                <h4 class="text-danger counter" data-count="2500">0</h4>
                            </div>
                            <div class="class col-md-3 justify-content-center AcadmeyCounter">
                                <p>Trainings</p>
                                <h4 class="text-danger counter" data-count="36540">0</h4>
                            </div>
                            <div class="class col-md-3 justify-content-center text-center AcadmeyCounter">
                                <p>Students</p>
                                <h4 class="text-danger counter" data-count="321540">0</h4>
                            </div>
                            <div class="class col-md-3 justify-content-center AcadmeyCounter">
                                <p>Trainings</p>
                                <h4 class="text-danger counter" data-count="66598">0</h4>
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

                    <div class="container">
                        <div class="row g-3">
                            <div class="class col-md-5 AcademyInfoImg">


                            </div>
                            <div class="class col-md-7" data-aos="fade-right">
                                <h3>The infos</h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Dolores aliquam, asperiores ex quibusdam facere quis ipsa
                                    voluptate eius excepturi perspiciatis voluptatibus hic est
                                    nam velit animi aliquid sequi. Incidunt, in!
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Dolores aliquam, asperiores ex quibusdam facere quis ipsa
                                    voluptate eius excepturi perspiciatis voluptatibus hic est
                                    nam velit animi aliquid sequi. Incidunt, in!
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Dolores aliquam, asperiores ex quibusdam facere quis ipsa
                                    voluptate eius excepturi perspiciatis voluptatibus hic est
                                    nam velit animi aliquid sequi. Incidunt, in!
                                </p>
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



                </div>
                <div class="tab-pane fade" id="overview" role="tabpanel" aria-labelledby="overview-tab">

                    <!-- Gallery -->
                    <div class="row gallery">
                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                                class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
                                class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
                        </div>

                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                                class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                                class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                        </div>

                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                                class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
                                class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
                        </div>
                    </div>
                    <div class="row gallery" id="secondRowgallery">
                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                                class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
                                class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
                        </div>

                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                                class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                                class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                        </div>

                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                                class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
                                class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
                        </div>
                    </div>

                    <div class="row gallery" id="thirdRowgallery">
                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                                class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
                                class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
                        </div>

                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                                class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                                class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                        </div>

                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                                class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
                                class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
                        </div>
                    </div>


                    <div class="container Loading justify-content-center text-center d-flex" id="loading">
                        <div class="loader">
                            <div class="crystal"></div>
                            <div class="crystal"></div>
                            <div class="crystal"></div>
                            <div class="crystal"></div>
                            <div class="crystal"></div>
                            <div class="crystal"></div>
                        </div>
                    </div>


                    <div class="container align-items-center justify-content-center d-flex">
                        <button class="btn btn-danger" id="loadmoregallery">Load More</button>
                        <button class="btn btn-secondary ml-2" id="showlessgallery" style="display:none;">Show
                            Less</button>
                    </div>



                    <!-- Gallery -->

                </div>


                <div class="tab-pane fade" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                    <div class="container mt-5">
                        <div class="row g-3">
                            @foreach($courses as $course)
                            <div class="col-md-3 mb-4">
                                @include('Components.CourseCard')
                            </div>
                            @endforeach
                        </div>
                        <div class="row g-3" id="secondRowCourses" style="display: none;">
                            <div class="col-md-3 mb-4">
                                <div class="card shadow-sm">
                                    <img src="img/cardImage.jpeg" class="card-img-top" alt="Card Image">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <p class="card-text text-center online">Online</p>
                                            <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>

                                        </div>
                                        <h5 class="card-title cardCourseTitle">Angular – The Complete Guide(2020 Edition)
                                        </h5>


                                        <h5 class="card-title text-danger cardCourseTitle">49.99$</h5>

                                        <div class="d-flex justify-content-between">
                                            <p class="Location">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                    fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                                </svg>

                                                Riydah, Qasr Rabie
                                            </p>

                                            <p class="Location">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                    fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                                </svg>

                                                50 videos
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="card shadow-sm">
                                    <img src="img/course.jpg" class="card-img-top" alt="Card Image">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <p class="card-text text-center offline">Offline</p>
                                            <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>

                                        </div>
                                        <h6 class="card-title cardCourseTitle">Angular – The Complete Guide(2020 Edition)
                                            </h5>


                                            <h5 class="card-title text-danger cardCourseTitle">49.99$</h5>
                                            <div class="d-flex justify-content-between">
                                                <p class="Location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        fill="currentColor" class="bi bi-geo-alt-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                                    </svg>

                                                    Riydah, Qasr Rabie
                                                </p>

                                                <p class="Location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                                    </svg>

                                                    50 videos
                                                </p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="card shadow-sm">
                                    <img src="img/course.jpg" class="card-img-top" alt="Card Image">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <p class="card-text text-center online">Online</p>
                                            <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>

                                        </div>
                                        <h6 class="card-title cardCourseTitle">Angular – The Complete Guide(2020 Edition)
                                            </h5>


                                            <h5 class="card-title text-danger cardCourseTitle">49.99$</h5>
                                            <div class="d-flex justify-content-between">
                                                <p class="Location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        fill="currentColor" class="bi bi-geo-alt-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                                    </svg>

                                                    Riydah, Qasr Rabie
                                                </p>

                                                <p class="Location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                                    </svg>

                                                    50 videos
                                                </p>
                                            </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="card shadow-sm">
                                    <img src="img/cardImage.jpeg" class="card-img-top" alt="Card Image">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <p class="card-text text-center offline">Offline</p>
                                            <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>

                                        </div>
                                        <h6 class="card-title cardCourseTitle">Angular – The Complete Guide(2020 Edition)
                                            </h5>


                                            <h5 class="card-title text-danger cardCourseTitle">49.99$</h5>
                                            <div class="d-flex justify-content-between">
                                                <p class="Location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        fill="currentColor" class="bi bi-geo-alt-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                                    </svg>

                                                    Riydah, Qasr Rabie
                                                </p>

                                                <p class="Location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                                    </svg>

                                                    50 videos
                                                </p>
                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3" id="thirdRowCourses" style="display: none;">
                            <div class="col-md-3 mb-4">
                                <div class="card shadow-sm">
                                    <img src="img/cardImage.jpeg" class="card-img-top" alt="Card Image">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <p class="card-text text-center online">Online</p>
                                            <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>

                                        </div>
                                        <h5 class="card-title cardCourseTitle">Angular – The Complete Guide(2020 Edition)
                                        </h5>


                                        <h5 class="card-title text-danger cardCourseTitle">49.99$</h5>

                                        <div class="d-flex justify-content-between">
                                            <p class="Location">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                    fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                                </svg>

                                                Riydah, Qasr Rabie
                                            </p>

                                            <p class="Location">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                    fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                                </svg>

                                                50 videos
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="card shadow-sm">
                                    <img src="img/course.jpg" class="card-img-top" alt="Card Image">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <p class="card-text text-center offline">Offline</p>
                                            <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>

                                        </div>
                                        <h6 class="card-title cardCourseTitle">Angular – The Complete Guide(2020 Edition)
                                            </h5>


                                            <h5 class="card-title text-danger cardCourseTitle">49.99$</h5>
                                            <div class="d-flex justify-content-between">
                                                <p class="Location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        fill="currentColor" class="bi bi-geo-alt-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                                    </svg>

                                                    Riydah, Qasr Rabie
                                                </p>

                                                <p class="Location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                                    </svg>

                                                    50 videos
                                                </p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="card shadow-sm">
                                    <img src="img/course.jpg" class="card-img-top" alt="Card Image">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <p class="card-text text-center online">Online</p>
                                            <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>

                                        </div>
                                        <h6 class="card-title cardCourseTitle">Angular – The Complete Guide(2020 Edition)
                                            </h5>


                                            <h5 class="card-title text-danger cardCourseTitle">49.99$</h5>
                                            <div class="d-flex justify-content-between">
                                                <p class="Location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        fill="currentColor" class="bi bi-geo-alt-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                                    </svg>

                                                    Riydah, Qasr Rabie
                                                </p>

                                                <p class="Location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                                    </svg>

                                                    50 videos
                                                </p>
                                            </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <div class="card shadow-sm">
                                    <img src="img/cardImage.jpeg" class="card-img-top" alt="Card Image">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <p class="card-text text-center offline">Offline</p>
                                            <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>

                                        </div>
                                        <h6 class="card-title cardCourseTitle">Angular – The Complete Guide(2020 Edition)
                                            </h5>


                                            <h5 class="card-title text-danger cardCourseTitle">49.99$</h5>
                                            <div class="d-flex justify-content-between">
                                                <p class="Location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        fill="currentColor" class="bi bi-geo-alt-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                                    </svg>

                                                    Riydah, Qasr Rabie
                                                </p>

                                                <p class="Location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                        fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                                    </svg>

                                                    50 videos
                                                </p>
                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container align-items-center justify-content-center d-flex">
                            <button class="btn btn-danger" id="loadmoreCourses">Load More</button>
                            <button class="btn btn-secondary ml-2" id="showlessCourses" style="display:none;">Show
                                Less</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab">
                    <div class="container">
                        <div class="row g-3">
                            <div class="col-sm">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                </div>

                            </div>
                            <div class="col-sm">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                </div>

                            </div>
                            <div class="col-sm">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                </div>

                            </div>
                            <div class="col-sm">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                </div>

                            </div>


                        </div>
                        <div class="mt-4 col-md-12">
                            <!--Margin Space-->
                        </div>

                        <div class="row g-3">
                            <div class="col-sm">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                </div>

                            </div>
                            <div class="col-sm">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                </div>

                            </div>
                            <div class="col-sm">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                </div>

                            </div>
                            <div class="col-sm">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                </div>

                            </div>


                        </div>


                    </div>
                </div>

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
