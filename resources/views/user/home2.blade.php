@extends('user.layout.header')

@section('content')
<section class="productsItems pt-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>BASKETBALL</h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-3 text-center pb-sm-4">
                <div class="card card-basketBall">
                  <div class="py-4"><img class="img-fluid" alt="BasketBall"
                    src="{{url('img/shirtIcon.png')}}"></div>
                    <div class="card-body">
                        <h4 class="card-title text-white fs-18">NON REV UNIFORM</h4>
                        </div>
                </div>
            </div>

            <div class="col-md-3 text-center pb-sm-4">
                <div class="card card-basketBall">
                  <div class="py-4"><img class="img-fluid" alt="BasketBall"
                    src="{{url('img/shirtIcon.png')}}"></div>
                    <div class="card-body">
                        <h4 class="card-title text-white fs-18">REV UNIFORM</h4>
                        </div>
                </div>
            </div>

            <div class="col-md-3 text-center pb-sm-4">
                <div class="card card-basketBall">
                  <div class="py-4"><img class="img-fluid" alt="BasketBall"
                    src="{{url('img/shirtIcon.png')}}"></div>
                    <div class="card-body">
                        <h4 class="card-title text-white fs-18">PRACTICE UNIFORM</h4>
                        </div>
                </div>
            </div>

            <div class="col-md-3 text-center">
                <div class="card card-basketBall">
                  <div class="py-4"><img class="img-fluid" alt="BasketBall"
                    src="{{url('img/shirtIcon.png')}}"></div>
                    <div class="card-body">
                        <h4 class="card-title text-white fs-18">WARM UP SHIRT</h4>
                        </div>
                </div>
            </div>
        </div>

        <div class="row mt-4 mt-sm-4">
            <div class="col-md-3 text-center pt-sm-0">
                <div class="card card-basketBall">
                  <div class="py-4"><img class="img-fluid" alt="BasketBall"
                    src="{{url('img/shirtIcon.png')}}"></div>
                    <div class="card-body">
                        <h4 class="card-title text-white fs-18">WARM UP PANTS</h4>
                        </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection


