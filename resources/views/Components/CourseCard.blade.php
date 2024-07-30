
    <div class="card shadow-sm">
        <a href="{{ route('coursePage', $course->id) }}"> <img src="img/cardImage.jpeg" class="card-img-top" alt="Card Image"></a>
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <p class="card-text text-center online">{{ $course -> courseType }}</p>
                <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>

            </div>
            <a href="{{ route('coursePage', $course->id) }}" class="text-decoration-none text-dark">
                <h5 class="card-title cardCourseTitle">{{ $course -> name }}</h5>
            </a>


            <h5 class="card-title text-danger cardCourseTitle">{{ $course -> Price }}$</h5>

            <div class="d-flex justify-content-between">
                <p class="Location">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor"
                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                    </svg>
                    {{ $course -> courseLocation }}
                    
                </p>

                <p class="Location">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor"
                        class="bi bi-calendar" viewBox="0 0 16 16">
                        <path
                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                    </svg>

                    50 videos
                </p>
            </div>
        </div>
    </div>
