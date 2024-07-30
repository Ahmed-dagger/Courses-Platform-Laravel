@extends('layout.layout')

@section('content')
    <div class="container-fluid justify-content-center align-items-center SubHeader">
        <div class="container align-items-center justify-content-center">
            <div class="row justify-content-center align-items-center">
                <div class="container pt-5">
                    <h3 class="text-center text-light py-4">Courses and trainings</h3>

                </div>
                <div class="container d-flex text-center justify-content-center pb-5">
                    <a class="text-decoration-none" href="Home.html">
                        <h5 class="text-light pr-1">Home </h5>
                    </a>
                    <h6 class="text-danger d-flex">🔴</h6>
                    <a href="Courses.html" class="text-decoration-none">
                        <h5 class="text-light pl-1">Courses</h5>
                    </a>

                </div>


            </div>

        </div>

    </div>


    <div class="container d-flex justify-content-between mt-5">
        <div class="text-right d-flex align-items-center">

            <button class="btn btn-light text-danger">
                <img width="15" height="15" src="https://img.icons8.com/ios/50/EF0000/filter--v1.png"
                    alt="filter--v1" />

                Recommendations</button>
            </div>

        <div class="text-left align-items-center pt-3">
            <p>There are {{$coursesCount  }} courses Here</p>

        </div>

    </div>

    <div class="container mt-2">
        <!-- Pagination -->


        <!-- Content Sections -->
        <div id="content-1" class="content-section active">
            <div class="row g-3">
                @foreach($courses as $course)
                <div class="col-md-3 mb-4">
                   @include('Components.CourseCard')
                </div>
                @endforeach
            </div>

            <div class="text-danger">
                {{ $courses-> links() }}
            </div>
            
           
        </div>
        

        




       <!-- <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center navpagUl text-center align-items-center">
                <li class="page-item">
                    <a id="prev" class="navPag text-decoration-none text-center align-items-center"
                        href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item text-center align-items-center active"><a
                        class="navPag text-decoration-none text-center align-items-center" href="#"
                        data-page="1">1</a></li>
                <li class="page-item align-items-center text-center"><a
                        class="navPag text-decoration-none text-center align-items-center" href="#"
                        data-page="2">2</a></li>
                <li class="page-item align-items-center text-center"><a
                        class="navPag text-decoration-none text-center align-items-center" href="#"
                        data-page="3">3</a></li>
                <li class="page-item align-items-center text-center"><a
                        class="navPag text-decoration-none text-center align-items-center" href="#"
                        data-page="4">4</a></li>
                <li class="page-item align-items-center text-center"><a
                        class="navPag text-decoration-none text-center align-items-center" href="#"
                        data-page="5">5</a></li>
                <li class="page-item align-items-center text-center"><a
                        class="navPag text-decoration-none text-center align-items-center" href="#"
                        data-page="6">6</a></li>
                <li class="page-item">
                    <a id="next" class="navPag text-decoration-none text-center align-items-center"
                        href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>-->
    </div>
@endsection
