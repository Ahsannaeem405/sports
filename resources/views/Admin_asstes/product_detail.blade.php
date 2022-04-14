@extends('Admin_asstes.layouts.main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">


@section('content')




    <!-- BEGIN: Content-->
    
                <!-- app ecommerce details start -->
                <section class="app-ecommerce-details">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-5 mt-2">
                                <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="{{asset('img/shirtIcon.png')}}" class="img-fluid" alt="product image">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                   
                                   
                                    <hr>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
     <p class=" mb-25"><b>Team:</b>&nbsp;Testing </p>
                                            </div>
                             <div class="col-md-6">
      <p class=" mb-25"><b>Order Number:</b>&nbsp;13680666 </p>
                                                                                       </div>
                                        </div>
                                    </div>
    
                                    </p>
                                    <hr>
                                <div class="col-md-12">
                                    <div class="row">
                                {{-- product Options --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            
                                                <label class="font-weight-bold"><h4>Product Options</h4></label>
                                                <ul class="list-unstyled mb-0 product-color-options">
                                                    <li class="d-inline-block selected">
                                                        <h6>Fabric Choice:</h6>
                                                    </li>
                                                    <li class="d-inline-block">
                                                        Two,
                                                    </li>
                                                    <li class="d-inline-block">
                                                       Three
                                                    </li>
                                                   
                                                </ul>
                                                <ul class="list-unstyled mb-0 product-color-options">
                                                    <li class="d-inline-block selected">
                                                        <h6>Neck Style:</h6>
                                                    </li>
                                                    <li class="d-inline-block">
                                                        One,
                                                    </li>
                                                    <li class="d-inline-block">
                                                       Three
                                                    </li>
                                                   
                                                </ul>
                                                <ul class="list-unstyled mb-0 product-color-options">
                                                    <li class="d-inline-block selected">
                                                         <ul class="list-unstyled mb-0 product-color-options">
                                                    <li class="d-inline-block selected">
                                                        <h6>Jersey Fit/Style:</h6>
                                                    </li>
                                                    <li class="d-inline-block">
                                                        One,
                                                    </li>
                                                    <li class="d-inline-block">
                                                       Two
                                                    </li>
                                                   
                                               
                                                   
                                                </ul>
                                                <ul class="list-unstyled mb-0 product-color-options">
                                                    <li class="d-inline-block selected">
                                                        <h6>Short Inseam:</h6>
                                                    </li>
                                                    <li class="d-inline-block">
                                                        One,
                                                    </li>
                                                    <li class="d-inline-block">
                                                       Long
                                                    </li>
                                                   
                                                </ul>
                                                <ul class="list-unstyled mb-0 product-color-options">
                                                    <li class="d-inline-block selected">
                                                        <h6>Notes:</h6>
                                                    </li>
                                                    <li class="d-inline-block">
                                                   use Special Colors for the Shirts
                                                    </li>
                                                   
                                                   
                                                </ul>
                                            </div>
                                                </div>
                                    {{-- Color Options --}}
               
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            
                                                                <label class="font-weight-bold"><h4>Color Options</h4></label>
                                                                <ul class="list-unstyled mb-0 product-color-options">
                                                                    <li class="d-inline-block selected">
                                                                        <h6>Neck:</h6>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        Two,
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                       Three
                                                                    </li>
                                                                   
                                                                </ul>
                                                                <ul class="list-unstyled mb-0 product-color-options">
                                                                    <li class="d-inline-block selected">
                                                                        <h6>Accent:</h6>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        One,
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                       Three
                                                                    </li>
                                                                   
                                                                </ul>
                                                                <ul class="list-unstyled mb-0 product-color-options">
                                                                    <li class="d-inline-block selected">
                                                                         <ul class="list-unstyled mb-0 product-color-options">
                                                                    <li class="d-inline-block selected">
                                                                        <h6>BU Logo:</h6>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        One,
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                       Two
                                                                    </li>
                                                                   
                                                               
                                                                   
                                                                </ul>
                                        <ul class="list-unstyled mb-0 product-color-options">
                                      <li class="d-inline-block selected">
                                    <h6>Body:</h6>
                                </li>
                        <li class="d-inline-block">
                               One,
                            </li>
                        <li class="d-inline-block">
                              Long
                            </li>
                                                                   
                        </ul>
                                                              
                            </div>
                             </div>
                {{-- Lettering --}}
                             <div class="col-md-12">
                                <div class="form-group">
                                                            
                       <label class="font-weight-bold"><h4>Lettering</h4></label>
                         <ul class="list-unstyled mb-0 product-color-options">
                             <li class="d-inline-block selected">
                                  <h6>Location:</h6>
                                    </li>
                                    <li class="d-inline-block">
                                    Liberty Chowk Lahore
                                             </li>
                                   
                                                                   
                                            </ul>
                                                                <ul class="list-unstyled mb-0 product-color-options">
                                                                    <li class="d-inline-block selected">
                                                                        <h6>Text:</h6>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                             About The Loction What Want to Do
                                                                    </li>
                                                        
                                                                   
                                                                </ul>
                                                                <ul class="list-unstyled mb-0 product-color-options">
                                                                    <li class="d-inline-block selected">
                                                                         <ul class="list-unstyled mb-0 product-color-options">
                                                                    <li class="d-inline-block selected">
                                                                        <h6>Main Color:</h6>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                       Red
                                                                    </li>
                                                                  
                                                                   
                                                               
                                                                   
                                                                </ul>
                                                                <ul class="list-unstyled mb-0 product-color-options">
                                                                    <li class="d-inline-block selected">
                                                                        <h6>Trim Color:</h6>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                    Green
                                                                    </li>
                                                                   
                                                                   
                                                                </ul>
                                                                <ul class="list-unstyled mb-0 product-color-options">
                                                                    <li class="d-inline-block selected">
                                                                        <h6>Font Name:</h6>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                   Arial
                                                                    </li>
                                                                   
                                                                   
                                                                </ul>
                                                                <ul class="list-unstyled mb-0 product-color-options">
                                                                    <li class="d-inline-block selected">
                                                                        <h6>Size:</h6>
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                  Three,
                                                                    </li>
                                                                    <li class="d-inline-block">
                                                                        One
                                                                          </li>
                                                                         
                                                                   
                                                                   
                                                                </ul>
                                                              
                                                            </div>
                                                                </div>




                                </div>
                                </div>
                                   
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>

                            </div>
                   <h3>Roasters</h3>
                   @foreach($roaster as $roasters)
                                <div class="col-md-12">
                                    <div class="row">
                            <div class="col-md-6 col-sm-6">
                    <h6>{{$roasters->name}}</h6>
                                </div>
                                <div class="col-md-6 col-sm-6">
                               <img src={{asset('upload/roaster/'.$roasters->image)}} >    
                                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <table class="table zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>Number</th>
                                            <th>Name</th>
                                            <th>Top size</th>
                                            <th>Bottom size</th>
                                            <th>Notes</th>
                                          
            
                                        </tr>
                           @foreach($roasters->detail as $detail)
                                        <tr>
                                            <th>{{$detail->number}}</th>
                                            <th>{{$detail->name}}</th>
                                            <th>{{$detail->top_size}}</th>
                                            <th>{{$detail->bottom_size}}</th>
                                            <th>{{$detail->notes}}</th>
                                          
            
                                        </tr>
                                      @endforeach
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                                                 </div>
                             </div>
                             @endforeach
                        </div>
                    </div>
                </section>
                <!-- app ecommerce details end -->

           
  @endsection