@extends('layout.layout')

@section('content')
    <div class="container-fluid SubHeaderAbout pb-4">
        <div class="container ">
            <div class="row g-3">
                <div class="col-sm-5">
                    <div class="container d-flex my-4">
                        <a href="{{ route('home') }}" class="text-decoration-none">
                            <h4 class="text-secondary mr-2">Home </h4>
                        </a>
                        <h4 class="text-secondary mr-2"> / </h4>
                        <a href="{{ route('About') }}" class="text-decoration-none">
                            <h4 class="text-secondary"> About </h4>
                        </a>
                    </div>
                    <div class="container my-4">
                        <h3>
                            You can reach out all Knowledge <br> with fair fees and <br> keep going on your passion.
                        </h3>

                    </div>

                </div>

            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <img class="SubHeaderAboutImg mb-4" src="img/SubHeaderAbout.png" alt="">

                    </div>


                </div>

            </div>

        </div>

    </div>

    <div class="container-fluid justify-content-center py-2 align-items-center InfoCounterAbout">
        <div class="row my-5 justify-content-center text-center align-items-center">
            <div class="col-sm-2">

            </div>
            <div class=" col-sm-2 justify-content-center my-5 text-center">
                <div class="container justify-content-center text-center">
                    <img src="img/coursesIcon.png" class="InfoCounterAbouticon" alt="">
                    <h5 class="my-4 text-center text-danger">Courses</h5>
                    <h5 class="text-danger text-center counter" data-count="1205">0</h5>


                </div>
            </div>
            <div class=" col-sm-2 justify-content-center mx-5 my-5 text-center">
                <div class="container justify-content-center text-center">
                    <img src="img/studentsbrainicon.png" alt="" class="InfoCounterAbouticon">
                    <h5 class="my-4 text-center text-danger">Students</h5>
                    <h5 class="text-danger text-center counter" data-count="251300">0</h5>

                </div>
            </div>
            <div class=" col-sm-2 justify-content-center my-5 text-center">
                <div class="container justify-content-center text-center">
                    <img src="img/tutorsicon.png" alt="" class="InfoCounterAbouticon">
                    <h5 class="my-4 text-center text-danger">Tutors</h5>
                    <h4 class="text-danger text-center counter" data-count="20">0</h4>

                </div>
            </div>

            <div class="col-sm-2">

            </div>

        </div>

    </div>

    <div class="container d-flex">
        <div class="row align-items-center">
            <div class="col-sm-3 align-items-center">
                <div class="justify-content-end text-left container mt-5 align-items-center">
                    <h2 class="text-left">
                        Opinions about <br> our courses
                    </h2>
                    <p class="text-left">these reviews are all considered</p>
                    <button class="btn btn-outline-danger text-left">View more</button>

                </div>

            </div>

            <div class="col-sm-9">
                <div id="carouselExampleIndicators" class="carousel slide carouselAbout" data-ride="carousel">
                    <div class="container">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="carousel-grid align-items-center">
                                    <div class="carousel-grid-item">
                                        <div class="card">
                                            <div class="container col-sm-4 float-start text-left">
                                                <img class="card-img text-left rounded-circle float-start cardimgtop"
                                                    src="img/handsome.jpg" alt="">
                                            </div>
                                            <div class="card-body">
                                                <p class="text-left">can't stop using this website cause i
                                                    found all i want from courses and exams and quizes i
                                                    recommend it for all my freinds seeing this comment and
                                                    hope you all reach out alot of knowledge keep it up!</p>
                                                <div class="card-title align-items-center">
                                                    <h5 class="text-right">Ahmed Dagger</h5>
                                                    <p class="text-right">Developer</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="carousel-grid-item">
                                        <div class="card">
                                            <div class="container col-sm-4 float-start text-left">
                                                <img class="card-img text-left rounded-circle float-start cardimgtop"
                                                    src="img/handsome.jpg" alt="">
                                            </div>
                                            <div class="card-body">
                                                <p class="text-left">can't stop using this website cause i
                                                    found all i want from courses and exams and quizes i
                                                    recommend it for all my freinds seeing this comment and
                                                    hope you all reach out alot of knowledge keep it up!</p>
                                                <div class="card-title align-items-center">
                                                    <h5 class="text-right">Ahmed Dagger</h5>
                                                    <p class="text-right">Developer</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="carousel-grid-item">
                                        <div class="card">
                                            <div class="container col-sm-4 float-start text-left">
                                                <img class="card-img text-left rounded-circle float-start cardimgtop"
                                                    src="img/handsome.jpg" alt="">
                                            </div>
                                            <div class="card-body">
                                                <p class="text-left">can't stop using this website cause i
                                                    found all i want from courses and exams and quizes i
                                                    recommend it for all my freinds seeing this comment and
                                                    hope you all reach out alot of knowledge keep it up!</p>
                                                <div class="card-title align-items-center">
                                                    <h5 class="text-right">Ahmed Dagger</h5>
                                                    <p class="text-right">Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-grid">
                                    <div class="carousel-grid-item">
                                        <div class="card">
                                            <div class="container col-sm-4 float-start text-left">
                                                <img class="card-img text-left rounded-circle float-start cardimgtop"
                                                    src="img/handsome.jpg" alt="">
                                            </div>
                                            <div class="card-body">
                                                <p class="text-left">can't stop using this website cause i
                                                    found all i want from courses and exams and quizes i
                                                    recommend it for all my freinds seeing this comment and
                                                    hope you all reach out alot of knowledge keep it up!</p>
                                                <div class="card-title align-items-center">
                                                    <h5 class="text-right">Ahmed Dagger</h5>
                                                    <p class="text-right">Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-grid-item">
                                        <div class="card">
                                            <div class="container col-sm-4 float-start text-left">
                                                <img class="card-img text-left rounded-circle float-start cardimgtop"
                                                    src="img/handsome.jpg" alt="">
                                            </div>
                                            <div class="card-body">
                                                <p class="text-left">can't stop using this website cause i
                                                    found all i want from courses and exams and quizes i
                                                    recommend it for all my freinds seeing this comment and
                                                    hope you all reach out alot of knowledge keep it up!</p>
                                                <div class="card-title align-items-center">
                                                    <h5 class="text-right">Ahmed Dagger</h5>
                                                    <p class="text-right">Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-grid-item">
                                        <div class="card">
                                            <div class="container col-sm-4 float-start text-left">
                                                <img class="card-img text-left rounded-circle float-start cardimgtop"
                                                    src="img/handsome.jpg" alt="">
                                            </div>
                                            <div class="card-body">
                                                <p class="text-left">can't stop using this website cause i
                                                    found all i want from courses and exams and quizes i
                                                    recommend it for all my freinds seeing this comment and
                                                    hope you all reach out alot of knowledge keep it up!</p>
                                                <div class="card-title align-items-center">
                                                    <h5 class="text-right">Ahmed Dagger</h5>
                                                    <p class="text-right">Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-grid">
                                    <div class="carousel-grid-item">
                                        <div class="card">
                                            <div class="container col-sm-4 float-start text-left">
                                                <img class="card-img text-left rounded-circle float-start cardimgtop"
                                                    src="img/handsome.jpg" alt="">
                                            </div>
                                            <div class="card-body">
                                                <p class="text-left">can't stop using this website cause i
                                                    found all i want from courses and exams and quizes i
                                                    recommend it for all my freinds seeing this comment and
                                                    hope you all reach out alot of knowledge keep it up!</p>
                                                <div class="card-title align-items-center">
                                                    <h5 class="text-right">Ahmed Dagger</h5>
                                                    <p class="text-right">Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-grid-item">
                                        <div class="card">
                                            <div class="container col-sm-4 float-start text-left">
                                                <img class="card-img text-left rounded-circle float-start cardimgtop"
                                                    src="img/handsome.jpg" alt="">
                                            </div>
                                            <div class="card-body">
                                                <p class="text-left">can't stop using this website cause i
                                                    found all i want from courses and exams and quizes i
                                                    recommend it for all my freinds seeing this comment and
                                                    hope you all reach out alot of knowledge keep it up!</p>
                                                <div class="card-title align-items-center">
                                                    <h5 class="text-right">Ahmed Dagger</h5>
                                                    <p class="text-right">Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-grid-item">
                                        <div class="card">
                                            <div class="container col-sm-4 float-start text-left">
                                                <img class="card-img text-left rounded-circle float-start cardimgtop"
                                                    src="img/handsome.jpg" alt="">
                                            </div>
                                            <div class="card-body">
                                                <p class="text-left">can't stop using this website cause i
                                                    found all i want from courses and exams and quizes i
                                                    recommend it for all my freinds seeing this comment and
                                                    hope you all reach out alot of knowledge keep it up!</p>
                                                <div class="card-title align-items-center">
                                                    <h5 class="text-right">Ahmed Dagger</h5>
                                                    <p class="text-right">Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <ol class="carousel-indicators mt-5 pt-5">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-dark"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-dark"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-dark"></li>
                    </ol>
                </div>

            </div>

        </div>

    </div>





    <div class="container-fluid text-light my-5 py-5 sectionOfvideotrailer align-items-center">
        <div class="row my-5 py-3 justify-content-between align-items-center">
            <div class="col-sm-6 px-5 my-5 py-2 justify-content-center text-center align-items-center">
                <h3 style="font-weight: 700; font-size: 35px;">Life Improvements</h3>
                <p style="font-size: 25px;">By learning from <br> <span class="text-danger">Subul Elmaharat</span></p>
            </div>
            <div class="col-sm-6 justify-content-center text-center">
                <button class="VideoButton">
                    <img width="50" height="50" src="https://img.icons8.com/ios/128/ffffff/circled-play--v1.png"
                        alt="circled-play--v1" />
                    Watch the <br> Introduction</button>

            </div>

        </div>

    </div>

    <div class="container-fluid TeamMembers">
        <div class="container justify-content-between d-flex my-4">
            <h5>Meet our team members</h5>
            <div class="col-sm-2">
                <button class=" text-center LogINBtn">Join Our Team</button>

            </div>
        </div>
        <div class="container text-center justify-content-center text-center TeamMembers">
            <div class="row g-3 mb-4">
                <div class="col-sm justify-content-center text-center">
                    <img class="rounded-circle img-fluid MembersImg" src="img/member.png" alt="">
                    <div class="container my-3">
                        <h5 class="text-dark text-center">Mark hughes</h5>
                        <p class="text-secondary text-center">Web Developer</p>

                    </div>

                </div>
                <div class="col-sm text-center">
                    <img class="rounded-circle img-fluid MembersImg" src="img/member2.png" alt="">
                    <div class="container my-3">
                        <h5 class="text-dark text-center">Ted hughes</h5>
                        <p class="text-secondary text-center">App Developer</p>

                    </div>

                </div>
                <div class="col-sm text-center">
                    <img class="rounded-circle img-fluid MembersImg" src="img/member3.png" alt="">
                    <div class="container my-3">
                        <h5 class="text-dark text-center">muhammed qader</h5>
                        <p class="text-secondary text-center">system Analyst</p>

                    </div>

                </div>
                <div class="col-sm text-center">
                    <img class="rounded-circle img-fluid MembersImg" src="img/freepik-export-20240701083100pwgA.png"
                        alt="">
                    <div class="container my-3">
                        <h5 class="text-dark text-center">Alicia Keys</h5>
                        <p class="text-secondary text-center">Database Admin</p>

                    </div>

                </div>


            </div>

            <div class="row g-3 justify-content-center">
                <div class="col-sm text-center">
                    <img class="rounded-circle img-fluid MembersImg" src="img/member5.png" alt="">
                    <div class="container my-3">
                        <h5 class="text-dark text-center">Maged Aly</h5>
                        <p class="text-secondary text-center">Graphic Designer</p>

                    </div>

                </div>
                <div class="col-sm text-center">
                    <img class="rounded-circle img-fluid MembersImg" src="img/member6.png" alt="">
                    <div class="container my-3">
                        <h5 class="text-dark text-center">Shady Muhammed</h5>
                        <p class="text-secondary text-center">Cs Engineer</p>

                    </div>

                </div>
                <div class="col-sm text-center">

                    <img class="rounded-circle img-fluid MembersImg" src="img/member7.png" alt="">
                    <div class="container my-3">
                        <h5 class="text-dark text-center">Muhammed ali</h5>
                        <p class="text-secondary text-center">Office Boy</p>
                    </div>

                </div>
                <div class="col-sm text-center">
                    <img class="rounded-circle img-fluid MembersImg" src="img/member8.png" alt="">
                    <div class="container my-3">
                        <h5 class="text-dark text-center">John doe</h5>
                        <p class="text-secondary text-center">CEO</p>

                    </div>


                </div>

            </div>
        </div>
    </div>
@endsection
