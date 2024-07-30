@extends('layout.layoutAuth')

@section('content')
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center background">
        <div class="login-box p-4">
            <div class="text-center mb-4">
                <img src="../img/Switch-container.png" alt="TURUQ Logo" class="mb-3 fromIMg">
            </div>
            <div class="container text-light">
                <h1 class="text-center">Email Verification</h1>

                @if (session('resent'))
                    <div>
                        A new verification link has been sent to your email address.
                    </div>
                @endif

                <p>Before proceeding, please check your email for a verification link.</p>
                <p>If you did not receive the email, click the button below to request another.</p>

                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="LogINBtn">Resend Verification Email</button>
                </form>
            </div>
        </div>
    </div>
@endsection
