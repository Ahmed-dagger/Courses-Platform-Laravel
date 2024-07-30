@extends('layout.layoutAuth')

@section('content')
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center background">
        <div class="container-fluid my-5 justify-content-center align-items-center text-center w-100">
            <h1 class="text-light" style="font-weight: 700">
                Choose user type who is using {{ Config('app.name') }}
            </h1>
            <div class="row my-5">
                <div class="col-sm my-5 justify-content-center align-items-center text-center">
                    <a class="text-decoration-none align-items-end" href="{{ route('login') }}"><button class="w-100 h-100 my-5 UserType align-items-end">
                        <img width="80" height="80" src="https://img.icons8.com/pastel-glyph/128/ffffff/person-male--v1.png"
                         alt="person-male--v1"/>
                        User</button></a>
                </div>
                <div class="col-sm my-5 justify-content-center align-items-center text-center">
                    <a class="text-decoration-none align-items-center" href="{{ route('loginAcademy') }}"><button class="w-100 h-100 my-5 align-items-center UserType">
                        <img width="70" height="70" class="mb-2" src="https://img.icons8.com/ios-glyphs/128/ffffff/student-center.png" 
                        alt="student-center"/>
                        Aacademy</button></a>
                </div>

            </div>
        </div>

    </div>
@endsection
