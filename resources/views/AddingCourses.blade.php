@extends('layout.layout')

@section('content')
    <div class="container my-5">
        <div class="justify-content-center text-center">
            <form action="CourseAdder" method="POST">
                @csrf

                <div class="row my-4 g-3">
                    <div class="col-md-6">
                        <input type="text" placeholder="Course Name" name="CourseName" class="w-100 ContantFieldStyling">
                        @error('CourseName')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        
                    </div>
                    <div class="col-md-6">
                        <input type="text" placeholder="Price" name="Price" class="w-100 ContantFieldStyling">
                        @error('Price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="row my-4 g-3">
                    <div class="col-md-6">
                        <select class="ContantFieldStyling w-100" name="courseLanguage" required>

                            <option value="option1"> <label for="name" class="form__label">
    
    
                                    Course Language</label></option>
    
                            <option class="text-dark" value="English">English</option>
                            <option class="text-dark" value="Arabic">Arabic</option>
    
    
                        </select>
                        @error('courseLanguage')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <select class="ContantFieldStyling w-100" name="courseType" required>

                            <option value="option1"> <label for="name" class="form__label">
    
    
                                    Course Type</label></option>
    
                            <option class="text-dark" value="Offline">Offline</option>
                            <option class="text-dark" value="Online">Online</option>
                            <option class="text-dark" value="Hybrid">Hybrid</option>

    
    
                        </select>
                        @error('courseType')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="row my-4 g-3">
                    <div class="col-md-6">
                        <input type="text" placeholder="Course location" name="courseLocation"
                            class="w-100 ContantFieldStyling">
                        @error('courseLocation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <select class="ContantFieldStyling w-100" name="courseLevel" required>

                            <option value="option1"> <label for="name" class="form__label">
    
    
                                    Course Level</label></option>
    
                            <option class="text-dark" value="Begginer">Begginer</option>
                            <option class="text-dark" value="Intermediate">Intermediate</option>
                            <option class="text-dark" value="Advanced">Advanced</option>

    
    
                        </select>
                        @error('courseLevel')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="row my-4 g-3">
                    <div class="col-md-12">
                        <input type="date" placeholder="Course Date" name="CoursesDate"
                            class="w-100 ContantFieldStyling">
                        @error('CoursesDate')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                </div>
                <button class="btn btn-danger">Add Course</button>
            </form>

        </div>

    </div>
@endsection
