
<div class="container">
    <div class="row h-100">
        <div class="col-sm-3">
            <a href="{{ route('coursePage', $cartItem->course->id) }}"> <img src="img/cardImage.jpeg"
                    class="card-img-top" alt="Card Image"></a>
        </div>

        <div class="col-sm-9 h-100">
            <div class="container justify-content-start my-5" id="stop">

                <div class="container d-flex justify-content-between">

                    <div class="container">
                        <a href="{{ route('coursePage', $cartItem->course->id) }}"
                            class="text-decoration-none text-dark">
                            <h5 class="card-title cardCourseTitle">{{ $cartItem->course->name }}</h5>
                        </a>
                        <p class="Location">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor"
                                class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                            </svg>
                            {{ $cartItem->course->courseLocation }}

                        </p>
                        <p class="Location">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor"
                                class="bi bi-calendar" viewBox="0 0 16 16">
                                <path
                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                            </svg>

                            50 videos
                        </p>

                        <form id="delete-form-{{ $cartItem->id }}" action="{{ route('cart.remove', $cartItem) }}"
                            method="POST" class="align-items-center">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger align-items-center"
                                onclick="confirmDelete({{ $cartItem->id }})">

                                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/drxwpfop.json" trigger="hover" stroke="bold"
                                    colors="primary:#ffffff,secondary:#ffffff" style="width:30px;height:30px">
                                </lord-icon>
                            </button>

                        </form>
                    </div>

                    <div class="d-flex">
                        <img width="25" height="25" class="mr-2 mt-1"
                            src="https://img.icons8.com/ios-filled/128/DB0000/price-tag.png" alt="price-tag" />
                        <h5 class="card-title text-danger cardCourseTitle">{{ $cartItem->course->Price }}$</h5>
                        
                    </div>


                </div>
            </div>


        </div>

    </div>

</div>

<hr>





<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                );
            }
        });
    }
</script>
