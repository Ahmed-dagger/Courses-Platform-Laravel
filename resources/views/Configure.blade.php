@extends('layout.layout')

@section('content')
    <div class="mt-4 col-md-12">

    </div>
    <div class="mt-4 col-md-12">

    </div>

    <div class="container">

        <form class="row shadow-sm p-3" method="POST" action="" enctype="multipart/form-data">

          @csrf
            <h2 class="text-left">Configure Owner information</h2>
            <div class="row g-3 mx-3">

                <div class="col-md-6">
                    <label for="The Owner" class="form-label">Owner Name</label>
                    <input type="text" class="form-control" id="username" placeholder="e.g. John Doe" required>
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">Owner Email</label><input type="email" class="form-control"
                        id="email" placeholder="e.g. Example@hotmail.com" required>
                </div>

            </div>

            <div class="mt-4 col-md-12">

            </div>

            <div class="row g-3 mx-3 p-3 align-items-end justify-content-between">
                <div class="col-md-4">
                    <label for="name" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Phone Number" required>
                </div>

                <div class="col-md-4 align-items-end text-end  justify-content-end">
                  <div class="d-flex align-items-end text-end justify-content-end">
                    <div class="align-items-end">
                      <button class="btn btn-danger mx-3">Save</button>
                  </div>
  
                  <div class="align-items-center">
                      <button class="btn btn-outline-danger">Cancel</button>
                  </div>
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

    <div class="container">

        <form class="row shadow-sm p-3" action="{{ route('updateinfo') }}" method="put">
          @csrf
          <h2 class="text-left">Academy Information</h2>
          <div class="row g-3">
                <div class="col-md-6">
                    <label for="text" class="form-label">Academy Type</label>
                    <input type="text" class="form-control" name="academyType" value="" id="email" placeholder="Enter Academy Type" required>
                </div>
                <div class="col-md-6">
                  <label for="text" class="form-label">Academy Name</label>
                  <input type="text" name="academyName" class="form-control" id="email" placeholder="Enter Academy Name" required>
              </div>

            </div>
            <div class="row g-3 justify-content-end d-flex ">
                                  
              <div class="container d-flex mx-3 justify-content-end text-end">
                <div class="align-items-center">
                  <button class="btn btn-danger btn-md mx-3">Save</button>
                </div>
                                     
                  <div class="align-items-center">
                    <button class="btn btn-outline-danger btn-md ">Cancel</button>
                    </div>     
                </div>          
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
