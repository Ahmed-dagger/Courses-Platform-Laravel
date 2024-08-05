@extends('layout.layout')

@section('content')
    <div class="mt-4 col-md-12">

    </div>
    <div class="mt-4 col-md-12">

    </div>

    <div class="container">

        <form class="row shadow-sm p-3" method="POST" action="{{ route('UserConfigure.update', $user->id) }}"
            enctype="multipart/form-data">
            @method('put')
            @csrf
            <h2 class="text-left">Configure User information</h2>

            <div class="row">
              <label for="file-input" class="drop-container my-2 py-5">
                <span class="drop-title my-3">Drop Your Image here</span>
                <input type="file" name="imageUpload" class="mb-2" accept="image/*"  id="file-input">
              </label>

              @error('imageUpload')
                  <span class="text-danger mt-3">{{ $message }}</span>
              @enderror
            </div>
            <div class="row g-3 mx-3">

                <div class="col-md-6">
                    <label for="The Owner" class="form-label">UserName</label>
                    <input type="text" value="{{ $user-> name }}" class="form-control" name="username" id="username" placeholder="e.g. John Doe">
                    @error('username')
                  <span class="text-danger mt-3">{{ $message }}</span>
              @enderror
                </div>

                
                  <div class="col-md-6 justify-content-center">
                    <label for="name" class="form-label">Phone Number</label>
                    <input type="text" value="{{ $user-> phone }}" class="form-control" id="phone" name="phone"
                        placeholder="Enter Phone Number">

                        @error('phone')
                        <span class="text-danger mt-3">{{ $message }}</span>
                    @enderror 
                  </div>
                

            </div>

            <div class="mt-4 col-md-12">

            </div>

            <div class="row g-3 mx-3 p-3 align-items-end justify-content-center">
                

            </div>

            <div class="row justify-content-end">
                <div class="col-md-1 d-flex align-items-end text-end my-3 justify-content-end">
                    <div class="align-items-end">
                        <button type="submit" class="btn btn-danger mx-3">Save</button>
                    </div>
                </div>

                <div class="col-md-1 d-flex align-items-end text-end my-3 justify-content-end">
                    <div class="align-items-center">
                        <button type="reset" class="btn btn-outline-danger">Cancel</button>
                    </div>
                </div>
            </div>

            <div class="mt-4 col-md-12">

            </div>





            <div class="mt-4 col-md-12">

            </div>
        </form>

    </div>


    <div class="mt-4 col-md-12">

    </div>

    <div class="mt-4 col-md-12">

    </div>
@endsection
