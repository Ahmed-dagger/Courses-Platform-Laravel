@if(session()->has('error'))

    <div class="alert alert-danger alert-dismissible fade show">
        {{ session('error') }}

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Colse"></button>

    </div>
@endif