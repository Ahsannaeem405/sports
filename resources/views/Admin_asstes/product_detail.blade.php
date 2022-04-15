@extends('Admin_asstes.layouts.main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

<style>
    .size{
        font-size: 20px;
    }
    .selected{
    text:bold;
    }
    </style>
@section('content')




    <!-- BEGIN: Content-->
    
                <!-- app ecommerce details start -->
                <section class="app-ecommerce-details">
                    <div class="card">
                        <div class="card-header">
                           
                  
                        <div class="card-body">
                            
                            <div class="row mb-5 mt-2">
                               
                                <div class="col-12 col-md-5 ">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="{{asset('upload/'.$placeorder->file)}}" class="img-fluid" alt="product image">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                   
                                    <div class="col-md-6">
                                        <h2><b>Order Number:</b>&nbsp;{{$placeorder->id}}</h2>
                                            </div>
                                            <div class="col-md-6">
                                                <h2><b>Team:</b>&nbsp;{{$placeorder->team_name}}</h2>
                                                    </div>
                                
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    
                    <div class="card">
                        <div class="card-body">
                            <label class="font-weight-bold text-center"><h2><b>Product Options</b></h2></label>
                    <div class="col-md-12">
                        <div class="row">
                    {{-- product Options --}}
                          
                                    @php
                    $fabric = explode(",", ($placeorder->po1));
                    $neck = explode(",", ($placeorder->po2));
                    $jersy = explode(",", ($placeorder->po3));
                    $short = explode(",", ($placeorder->po4));
                    $co1 = explode(",", ($placeorder->co1));
                    $co2 = explode(",", ($placeorder->co2));
                    $co3 = explode(",", ($placeorder->co3));
                    $co4 = explode(",", ($placeorder->co4));
                    $size1 = explode(",", ($placeorder->size1));
                    $size2 = explode(",", ($placeorder->size2));
                    $size3 = explode(",", ($placeorder->size3));
                    @endphp

                                  

                                    <div class="col-md-6"> 
                                        <div class="form-group">  
                                    <ul class="list-unstyled mb-0 product-color-options">
                                        <li class="d-inline-block selected">
                                            <h4><strong> Choice:</strong></h4>
                                        </li>
                                     
                                        <li class="d-inline-block size">
                                            @foreach($fabric as $f)
                                            @php
                                                $product=App\Models\product_option::where('id',$f)->first();
                                                @endphp
                                     @if($product!==null)
                                    {{$product->property}}
                                     @endif

                                @endforeach
                                                   
                                        </li>
                                       
                                       
                                    </ul>
                                    </div>
                                </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                    <ul class="list-unstyled mb-0 product-color-options">
                                        <li class="d-inline-block selected">
                                            <h4><strong>Neck Style:</strong></h4>
                                        </li>
                                        <li class="d-inline-block size">
                                            @foreach($neck as $f)
                                            @php
                                                $product=App\Models\product_option::where('id',$f)->first();
                                                @endphp
                                     @if($product!==null)
                                     {{$product->property}}
                                     @endif

                                @endforeach
                                                   
                                        </li>
                                        
                                       
                                    </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <ul class="list-unstyled mb-0 product-color-options">
                                        <li class="d-inline-block selected">
                                             <ul class="list-unstyled mb-0 product-color-options">
                                        <li class="d-inline-block selected">
                                            <h4><strong>Jersey Fit/Style:</strong></h4>
                                        </li>
                                        <li class="d-inline-block size">
                                            @foreach($jersy as $f)
                                            @php
                                                $product=App\Models\product_option::where('id',$f)->first();
                                                @endphp
                                    @if($product!==null)
                                    {{$product->property}}
                                    @endif

                                @endforeach
                                                   
                                        </li>
                                       
                                       
                                   
                                       
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <ul class="list-unstyled mb-0 product-color-options">
                                        <li class="d-inline-block selected">
                                            <h4><strong>Short Inseam:</strong></h4>
                                        </li>
                                        <li class="d-inline-block size">
                                            @foreach($short as $f)
                                            @php
                                                $product=App\Models\product_option::where('id',$f)->first();
                                                @endphp
                                    @if($product!==null)
                                    {{$product->property}}
                                    @endif

                                @endforeach
                                                   
                                        </li>
                                       

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <ul class="list-unstyled mb-0 product-color-options">
                                        <li class="d-inline-block selected">
                                            <h4><strong>Notes:</strong></h4>
                                        </li>
                                        <li class="d-inline-block size">
                                            {{$placeorder->notes}}
                                        </li>
                                       
                                       
                                    </ul>
                                       
                                </div>
                            </div>  
                                </div>
                                    </div>
                                </div>
                            </div>
                      
                                    {{-- Color Options --}}
                                    <div class="card">
                                       
                                        
                                        
                                        <div class="card-body">
                                            <label class="font-weight-bold text-center"><h2><b>Color Options</b></h2></label> 
                                            <div class="col-md-12">
                                                <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                            
                                                                      
                                                                <ul class="list-unstyled mb-0 product-color-options">
                                                                    <li class="d-inline-block selected">
                                                                        <h4><strong> Neck:</strong></h4>
                                                                    </li>
                                                                    <li class="d-inline-block size">
                                                                        @foreach($co1 as $f)
                                                                        @php
                                                                            $product=App\Models\product_option::where('id',$f)->first();
                                                                            @endphp
                                                                 @if($product!==null)
                                                                 {{$product->property}}
                                                                 @endif
                
                                                            @endforeach
                                                                   
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <ul class="list-unstyled mb-0 product-color-options">
                                                                    <li class="d-inline-block selected">
                                                                        <h4><strong> Accent:</strong></h4>
                                                                    </li>
                                                                    <li class="d-inline-block size">
                                                                        @foreach($co2 as $f)
                                                                        @php
                                                                            $product=App\Models\product_option::where('id',$f)->first();
                                                                            @endphp
                                                                @if($product!==null)
                                                                {{$product->property}}
                                                                @endif
                
                                                            @endforeach
                                                                    
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <ul class="list-unstyled mb-0 product-color-options">
                                                                    <li class="d-inline-block selected">
                                                                         <ul class="list-unstyled mb-0 product-color-options">
                                                                    <li class="d-inline-block selected">
                                                                        <h4><strong> BU Logo: </strong></h4>
                                                                    </li>
                                                                    <li class="d-inline-block size">
                                                                        @foreach($co3 as $f)
                                                                        @php
                                                                            $product=App\Models\product_option::where('id',$f)->first();
                                                                            @endphp
                                                                 @if($product!==null)
                                                                 {{$product->property}}
                                                                 @endif
                
                                                            @endforeach
                                                                   
                                                                   
                                                               
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                        <ul class="list-unstyled mb-0 product-color-options">
                                      <li class="d-inline-block selected">
                                    <h4><strong> Body:</strong></h4>
                                </li>
                                <li class="d-inline-block size">
                                    @foreach($co4 as $f)
                                    @php
                                        $product=App\Models\product_option::where('id',$f)->first();
                                        @endphp
                          @if($product!==null)
                          {{$product->property}}
                          @endif

                        @endforeach
                        
                                                                   
                        </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                        <ul class="list-unstyled mb-0 product-color-options">
                            <li class="d-inline-block selected">
                          <h4><strong> Colors:</strong></h4>
                      </li>
              <li class="d-inline-block size">
                <input type="color" value="{{$placeorder->colo1}}">
                  </li>
                  <li class="d-inline-block size">
                    <input type="color" value="{{$placeorder->colo2}}">
                      </li>
                      <li class="d-inline-block size">
                        <input type="color" value="{{$placeorder->colo3}}">
                          </li>
                                                         
              </ul>
         
 

                                                              
                            </div>
                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                {{-- Lettering --}}
                <div class="card">
                                       
                   
                
                <div class="card-body">
                    <label class="font-weight-bold text-center"><h2><b>Lettering</b></h2></label>
                    <div class="col-md-12">
                        <div class="row">              
                           
                @foreach($placeorder->lettering as $letter)
                             <div class="col-md-6">
                                <div class="form-group">
                                                            
                      
                         <ul class="list-unstyled mb-0 product-color-options">
                             <li class="d-inline-block selected">
                                  <h4><strong> Location:</strong></h4>
                                    </li>
                                    <li class="d-inline-block size">
                                {{$letter->location}}
                                             </li>
                                   
                                                                   
                                            </ul>

                              @if($letter->type=="text")
                                                 <ul class="list-unstyled mb-0 product-color-options">
                                                                    <li class="d-inline-block selected">
                                                                        <h4><strong>Text:</strong></h4>
                                                                    </li>
                                                                    <li class="d-inline-block size">
                                                                        {{$letter->text}}
                                                                    </li>
                                                        
                                                                   
                                                                </ul>
                                                                @endif
                                                                <ul class="list-unstyled mb-0 product-color-options">
                                                                    <li class="d-inline-block selected">
                                                                         <ul class="list-unstyled mb-0 product-color-options">
                                                                    <li class="d-inline-block selected">
                                                                        <h4><strong>Main Color:</strong></h4>
                                                                    </li>
                                                                    <li class="d-inline-block size">
                                                                        {{$letter->main_color}}
                                                                    </li>
                                                                  
                                                                   
                                                               
                                                                   
                                                                </ul>
                                                                <ul class="list-unstyled mb-0 product-color-options">
                                                                    <li class="d-inline-block selected">
                                                                        <h4><strong>Trim Color:</strong></h4>
                                                                    </li>
                                                                    <li class="d-inline-block size">
                                                                        {{$letter->trim_color}}
                                                                    </li>
                                                                   
                                                                   
                                                                </ul>
                                                                <ul class="list-unstyled mb-0 product-color-options">
                                                                    <li class="d-inline-block selected">
                                                                        <h4><strong> Font Name:</strong></h4>
                                                                    </li>
                                                                    <li class="d-inline-block size">
                                                                        {{$letter->font_name}}
                                                                    </li>
                                                                   
                                                                   
                                                                </ul>
                                                                <ul class="list-unstyled mb-0 product-color-options">
                                                                    <li class="d-inline-block selected">
                                                                        <h4><strong>Size:</strong></h4>
                                                                    </li>
                                                                    <li class="d-inline-block size">
                                                                        {{$letter->size}}
                                                                    </li>
                                                                   
                                                                         
                                                                   
                                                                   
                                                                </ul>
                                                              
                                                            </div>
                                                                </div>

@endforeach
                        </div>
                    </div>
                </div>
                </div>
{{-- location --}}
<div class="card">
                                       
  

<div class="card-body">
    <label class="font-weight-bold text-center"><h2><b>Loction</b></h2></label>
    <div class="col-md-12">
        <div class="row"> 
           
            <div class="col-md-4">
                <div class="form-group">
               <ul class="list-unstyled mb-0 product-color-options">
                
                       <li class="d-inline-block size">
                        <img src="{{asset('upload/'.$placeorder->logo1)}}" style="height: 50px;width:50px;">
                                </li>
                      
                                                      
                               </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
               <ul class="list-unstyled mb-0 product-color-options">
                
                       <li class="d-inline-block size">
                        <img src="{{asset('upload/'.$placeorder->logo2)}}"style="height: 50px;width:50px;" >
                                </li>
                      
                                                      
                               </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
               <ul class="list-unstyled mb-0 product-color-options">
                
                       <li class="d-inline-block size">
                        <img src="{{asset('upload/'.$placeorder->logo3)}}"style="height: 50px;width:50px;" >
                                </li>
                      
                                                      
                               </ul>
                </div>
            </div>


                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                                                
                                                          
                                                             <ul class="list-unstyled mb-0 product-color-options">
                                                                 <li class="d-inline-block selected">
                                                                      <h4><strong> Location1:</strong></h4>
                                                                        </li>
                                                                        <li class="d-inline-block size">
                                                                        {{$placeorder->loc1}}
                                                                                 </li>
                                                                       
                                                                                                       
                                                                                </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                                <ul class="list-unstyled mb-0 product-color-options">
                                                                                    <li class="d-inline-block selected">
                                                                                         <h4><strong>Location2:</strong></h4>
                                                                                           </li>
                                                                                           <li class="d-inline-block size">
                                                                                           {{$placeorder->loc2}}
                                                                                                    </li>
                                                                                          
                                                                                                                          
                                                                                                   </ul>
                                                                    </div>
                                                                </div>
                                                                                                   <div class="col-md-4">
                                                                                                    <div class="form-group">
                                                                                                   <ul class="list-unstyled mb-0 product-color-options">
                                                                                                    <li class="d-inline-block selected">
                                                                                                         <h4><strong>Location3:</strong></h4>
                                                                                                           </li>
                                                                                                           <li class="d-inline-block size">
                                                                                                           {{$placeorder->loc3}}
                                                                                                                    </li>
                                                                                                          
                                                                                                                                          
                                                                                                                   </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-4">
                                                                                                    <div class="form-group">
                                                                                                                   <ul class="list-unstyled mb-0 product-color-options">
                                                                                                                    <li class="d-inline-block selected">
                                                                                                                  <h4><strong>Size1:</strong></h4>
                                                                                                              </li>
                                                                                                              <li class="d-inline-block size">
                                                                                                                  @foreach($size1 as $f)
                                                                                                                  @php
                                                                                                                      $product=App\Models\product_option::where('id',$f)->first();
                                                                                                                      @endphp
                                                                                                        @if($product!==null)
                                                                                                        {{$product->property}}
                                                                                                        @endif
                                                                              
                                                                                                      @endforeach
                                                                                                      
                                                                                                                                                 
                                                                                                      </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-4">
                                                                                                    <div class="form-group">
                                                                                                      <ul class="list-unstyled mb-0 product-color-options">
                                                                                                        <li class="d-inline-block selected ">
                                                                                                      <h4><strong>Size2:</strong></h4>
                                                                                                  </li>
                                                                                                  <li class="d-inline-block size">
                                                                                                      @foreach($size2 as $f)
                                                                                                      @php
                                                                                                          $product=App\Models\product_option::where('id',$f)->first();
                                                                                                          @endphp
                                                                                            @if($product!==null)
                                                                                            {{$product->property}}
                                                                                            @endif
                                                                  
                                                                                          @endforeach
                                                                                          
                                                                                                                                     
                                                                                          </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                          <div class="col-md-4">
                                                                                            <div class="form-group">
                                                                                          <ul class="list-unstyled mb-0 product-color-options">
                                                                                            <li class="d-inline-block selected">
                                                                                          <h4><strong>Size3:</strong></h4>
                                                                                      </li>
                                                                                      <li class="d-inline-block size">
                                                                                          @foreach($size3 as $f)
                                                                                          @php
                                                                                              $product=App\Models\product_option::where('id',$f)->first();
                                                                                              @endphp
                                                                                @if($product!==null)
                                                                                {{$product->property}}
                                                                                @endif
                                                      
                                                                              @endforeach
                                                                              
                                                                                                                         
                                                                              </ul>
                                                                                                    
                                                                            </div>
                                                                        </div>              
                                                                                                </div>
                                                                                                    </div>
                                    
                                    
        </div>
    </div>
{{-- <roaster> --}}
    <div class="card">
        <div class="card-body">
            <label class="font-weight-bold text-center"><h2><b>Roasters</b></h2></label>
    <div class="col-md-12">
      
               
       
        
        
           
@foreach($placeorder->roaster as $roasters)
        
{{-- <h6>{{$roasters->name}}</h6> --}}
        
        
 <img src={{asset('upload/roaster/'.$roasters->image)}} class="text-center" style="height:100px;width:100px;" >    
        
    <div class="col-md-12 col-sm-12">
        <table class="table">
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
</div>
</div>

                                
                                   
                                <!-- Add Arrows -->
                              

                         
                           
                </section>
                <!-- app ecommerce details end -->

           
  @endsection