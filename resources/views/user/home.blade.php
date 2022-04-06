@extends('user.layout.header')

@section('content')
<section class="products pt-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>Choose a sports below to get started</h2>
            </div>
        </div>
        <div class="row mt-5">
            @foreach ($sports as $sport )
            <div class="col-md-3 col-12 mt-2 text-center">
                <a href="{{url('user/product/'.$sport->id)}}" class="hover_none">
                <div class="card card-bg">
                    <div class="card-body border-bottom pb-0">
                    <h4 class="card-title text-white">{{$sport->name}}</h4>
                    </div>
                  <div class="py-3"><img class="img-fluid" alt="BasketBall"
                    src="{{asset('upload/sports/'.$sport->image)}}"></div>
                </div>
            </a>
              </div>
            @endforeach

            {{-- <div class="col-md-3 text-center">
                <div class="card card-bg">
                    <div class="card-body border-bottom pb-0">
                    <h4 class="card-title text-white">BasketBall</h4>
                    </div>
                  <div class="py-3"><img class="img-fluid" alt="BasketBall"
                    src="./img/basketBall1.png"></div>
                </div>
            </div> --}}


              {{-- <div class="col-md-3 text-center">
                <div class="card card-bg">
                    <div class="card-body border-bottom pb-0">
                    <h4 class="card-title text-white">BasketBall</h4>
                    </div>
                  <div class="py-3"><img class="img-fluid" alt="BasketBall"
                    src="./img/basketBall1.png"></div>
                </div>
              </div>
              <div class="col-md-3 text-center">
                <div class="card card-bg">
                    <div class="card-body border-bottom pb-0">
                    <h4 class="card-title text-white">BasketBall</h4>
                    </div>
                  <div class="py-3"><img class="img-fluid" alt="BasketBall"
                    src="{{asset('img/basketBall1.png')}}"></div>
                </div>
              </div> --}}
        </div>

        {{-- <div class="row mt-5">
            <div class="col-md-3 text-center">
                <div class="card card-bg">
                    <div class="card-body border-bottom pb-0">
                    <h4 class="card-title text-white">BasketBall</h4>
                    </div>
                  <div class="py-3"><img class="img-fluid" alt="BasketBall"
                    src="{{url('img/basketBall1.png')}}"></div>
                </div>
              </div>

              <div class="col-md-3 text-center">
                <div class="card card-bg">
                    <div class="card-body border-bottom pb-0">
                    <h4 class="card-title text-white">BasketBall</h4>
                    </div>
                  <div class="py-3"><img class="img-fluid" alt="BasketBall"
                    src="{{url('img/basketBall1.png')}}"></div>
                </div>
              </div>


        </div> --}}
    </div>
</section>

@endsection

