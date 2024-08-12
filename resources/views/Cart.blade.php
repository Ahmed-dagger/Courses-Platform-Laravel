@extends('layout.layout')

@section('content')
    <div class="container">

        <div class="container d-flex align-items-center">  
            <h1 class="my-3">Cart <span style="font-size: 12px">({{ $cartcount }} Course)</span></h1> 

        </div>
        
        <div class="row g-3 mb-5">
            @if (count($cartItems) <= 0)
                <div class="container justify-content-center align-items-center text-center my-5">
                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                    <lord-icon src="https://cdn.lordicon.com/taymdfsf.json" trigger="loop" stroke="bold"
                        state="loop-oscillate-empty" colors="primary:#c71f16,secondary:#911710"
                        style="width:250px;height:250px">
                    </lord-icon>
                    <h3 class="text-center">Your Cart is Empty</h3>
                </div>
            @else
                @foreach ($cartItems as $cartItem)
                    <div class="col-md-3 mb-4">
                        @include('Components.cartItem')
                    </div>
                @endforeach
            @endif

        </div>
            


    </div>
        
        
    
@endsection
