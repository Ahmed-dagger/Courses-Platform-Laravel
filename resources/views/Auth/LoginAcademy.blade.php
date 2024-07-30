@extends('layout.layoutAuth')

@section('content')
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center background">
        <div class="login-box p-4">
            <div class="text-center mb-4">
                <img src="../img/Switch-container.png" alt="TURUQ Logo" class="mb-3 fromIMg">
                <h4 class="text-light">Academy Logging In</h4>
            </div>
            <form method="post" action="{{ route('Academyauthnit') }}">
                @csrf
                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="Name" name="Owner_email">
                    <label for="name" class="form__label">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-envelope" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                        </svg>
                        Email
                    </label>

                        @error('Owner_email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="form__group field">
                    <input type="password" class="form__field" placeholder="Name" name="Owner_password">
                    <label for="name" class="form__label">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-shield-lock" viewBox="0 0 16 16">
                            <path
                                d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56" />
                            <path
                                d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415" />
                        </svg>
                        Password</label>
                        @error('Owner_password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="form-check mb-3 justify-content-between d-flex">
                    <input type="checkbox" class="form-check-input checky" id="remember">
                    <label class="form-check-label" for="remember">Remmber Me</label>
                    <div class="text-right">
                        <a href="" class="text-decoration-none text-right text-light">Forgot Your password</a>
                    </div>

                </div>
                <div class="d-grid">
                    <button type="submit" class="LogINBtn">Log In</button>
                </div>
                <div class="text-center mt-3">
                    <p class="text-light">Don't Have Account? <a href="{{ route('registerAcademy') }}"
                            class="text-decoration-none text-light text-bold"> Register</a></p>
                </div>
                <div class="text-center mt-3">
                    <button type="button" class="btn btn-outline-light text-center me-1"><i
                            class="fab fa-google"></i></button>
                    <button type="button" class="btn btn-outline-light text-center me-1"><i
                            class="fab fa-facebook"></i></button>
                    <button type="button" class="btn btn-outline-light text-center"><i class="fab fa-apple"></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection
