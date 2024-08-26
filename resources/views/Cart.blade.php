@extends('layout.layout')

@section('content')
    <div class="container">

        <div class="container d-flex align-items-center">
            <h1 class="my-3">Cart <span style="font-size: 12px">({{ $cartcount }} Course)</span></h1>

        </div>

        <div class="container mb-3 text-left justify-content-end">


        </div>

        <div class="row g-3 mb-5">
            @include('shared.success')
            @if (count($cartItems) <= 0)
                <div class="container justify-content-center align-items-center text-center my-5 col-sm-3">
                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                    <lord-icon src="https://cdn.lordicon.com/taymdfsf.json" trigger="loop" stroke="bold"
                        state="loop-oscillate-empty" colors="primary:#c71f16,secondary:#911710"
                        style="width:250px;height:250px">
                    </lord-icon>
                    <h3 class="text-center">Your Cart is Empty</h3>
                    <a class="text-decoration-none" href="{{ route('courses') }}"><button class="LogINBtn">Back To
                            courses</button></a>

                </div>
            @else
                <div class="row g-3">
                    <div class="col-sm-9">
                        <div class="container">
                            @foreach ($cartItems as $cartItem)
                                @include('Components.cartItem')
                            @endforeach
                        </div>
                    </div>
                    <div class="col-sm-3 border shadow-sm
                    " id="sidebar" style="height: fit-content; position:sticky; top:0;">
                        <div class="mt-5 container">
                                <h3 class="text-left"> <span class="text-grey h6">Total :</span> <br> {{ $sum_total }}$</h3>

                                <form action="" method="">
                                    @csrf
                                    <button class="w-100 LogINBtn" type="submit">Checkout</button>
                                </form>
                                
                            </div>
                            <hr>
                            <div class="container d-flex my-5">
                                <input type="text" placeholder="coupon?" class="form-control"
                                    id="exampleFormControlInput1">
                                <button class="btn btn-outline-danger ml-1">Apply</button>
                            </div>

                        </div>
                    </div>

                </div>
            @endif



        </div>

    </div>



    <script>
        // script.js
        window.addEventListener('scroll', function() {
            var sidebar = document.getElementById('sidebar');
            var stopElement = document.getElementById('stop'); // The element where the sidebar should stop

            var sidebarRect = sidebar.getBoundingClientRect();
            var stopElementRect = stopElement.getBoundingClientRect();

            if (stopElementRect.top <= sidebarRect.bottom) {
                sidebar.style.position = 'absolute';
                sidebar.style.top = (stopElementRect.top - sidebarRect.height) + 'px';
            } else {
                sidebar.style.position = 'fixed';
                sidebar.style.top = '0';
            }
        });
    </script>

    <style>
        
    </style>



@endsection
