<div class="row g-3">
    @if (count($courses) <= 0)
        <div class="container justify-content-center align-items-center text-center my-5">
            <script src="https://cdn.lordicon.com/lordicon.js"></script>
            <lord-icon src="https://cdn.lordicon.com/pagmnkiz.json" trigger="loop" stroke="bold"
                colors="primary:#c71f16,secondary:#ee6d66" style="width:250px;height:250px">
            </lord-icon>
            <h3 class="text-center">Can't find what you are looking for</h3>
        </div>
    @else
        @foreach ($courses as $course)
            <div class="col-md-3 mb-4" id="courses-list">
                @include('Components.CourseCard')
            </div>
        @endforeach
    @endif

    <!-- Pagination -->
    <div class="text-danger">
        {{ $courses->withQueryString()->links() }}
    </div>

</div>


<script>
    $(document).ready(function() {
        $('#search').on('input', function() {
            let query = $(this).val();

            $.ajax({
                url: "{{ route('courses') }}",
                type: "GET",
                data: { search: query },
                success: function(data) {
                    $('#courses-list').html(data.courses);
                }
            });
        });

        // Handle pagination click (if required)
        $(document).on('click', '.pagination a', function(e) {
            e.preventDefault();
            let url = $(this).attr('href');
            $.ajax({
                url: url,
                success: function(data) {
                    $('#courses-list').html(data.courses);
                }
            });
        });
    });
</script>