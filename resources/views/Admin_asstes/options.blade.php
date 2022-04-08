@extends('Admin_asstes.layouts.main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<style>
    .pluscolor{
        color:rgb(0, 255, 128);
    }
    .editcolor{
        color:blueviolet
    }
    </style>
@section('content')

    <div class="row">
        {{-- <div class="col-lg-12">
            <button type="button" class="btn btn-success" style="float: right;" data-toggle="modal"
                    data-target="#exampleModal">
                Add Options
            </button>
        </div> --}}
    </div>
    <div class="">

        {{-- @if ($errors->has('product_id'))
            <div class="alert alert-danger">
                <span class="text-danger">Product Not Found</span>
            </div>
        @endif --}}

      
        <div class="">
            {{-- <form action="#">

             <div class="row p-3">

                <div class="col-lg-12 col-12 mt-2">
                    <input name="file1" type="file" class="dropify" data-height="100" />
                </div>
                 <div class="col-lg-10 col-12 mt-2">
                    <label><b>Header Text:</b></label><br>
                     <input type="text" class="form-control mt-1" name="text" placeholder="Header Text">
                 </div>
                 <div class="col-lg-2 col-12 mt-2">
                     <label><b> Select Color : </b></label><br>
                    <input type="color" class="mt-1"  id="favcolor" name="color" value="#ff0000">
                </div>

             </div>
            </form> --}}

            <div class="card" >

                <div class="card-content">
    
                    <div class="card-header">
                        <h5 class="card-title" id="exampleModalLabel">Add Option</h5>
                        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> --}}
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/add_option')}}" method="POST" enctype="multipart/form-data">
                            @csrf
    
                            <div class="row ">
                                <div class="col-lg-12 col-12 mt-2">
                                    <label><b>Sports Name</b></label><br>
                                    <select name="sports" class="form-control" id="sports">
                                        @if (isset($sports))
                                            <option value="">Select Sports</option>
    
                                            @foreach ($sports as $sport)
                                                <option value="{{$sport->id}}">{{$sport->name}}</option>
                                            @endforeach
                                        @endif
    
    
                                    </select>
                                </div>
                                <div class="col-lg-12 col-12 mt-2">
                                    <label><b>Product Name</b></label><br>
                                    <select name="product_id" class="form-control" id="products">
    
    
                                    </select>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="row">
                                    <div class="col-6"> 
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingOne"style="background-color: #c3d2e1;">
                                                <h5 class="">
                                                    <button class="btn btn-link tabclick text-dark" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Product Option
                                                    </button>
                                                </h5>
                                            </div>
                                
                                            <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                                                
                                
                                <div class="col-lg-12   my-2">
                         Fabric Choice
                         <div class="float-right">
                    
                             <i class="fas fa-plus mr-1 pluscolor" data-toggle="modal" data-target="#exampleModal"></i>
                             <i class="fas fa-edit editcolor"></i>
                         </div>
                                </div>
                                  
                                <div class="col-lg-12   my-2">
                                    Neck Style
                                    <div class="float-right">
                                        <i class="fas fa-plus mr-1 pluscolor" data-toggle="modal" data-target="#exampleModal"></i>
                                         <i class="fas fa-edit editcolor"></i>
                                    </div>
                                           </div>
                                           <div class="col-lg-12   my-2">
                                            Jersy Fit
                                            <div class="float-right">
                                                <i class="fas fa-plus mr-1 pluscolor" data-toggle="modal" data-target="#exampleModal"></i>
                                                 <i class="fas fa-edit editcolor"></i>
                                            </div>
                                                   </div>
                                                   <div class="col-lg-12   my-2">
                                                    Short Inseam
                                                    <div class="float-right">
                                                        <i class="fas fa-plus mr-1 pluscolor" data-toggle="modal" data-target="#exampleModal"></i>
                                                         <i class="fas fa-edit editcolor"></i>
                                                    </div>
                                                           </div>
                                                    
                                            
                                        </div>
                                    </div>
                               




                                </div>
    
    
                            </div>
                            <div class="col-6"> 
                                <div id="accordion2">
                                    <div class="card">
                                        <div class="card-header" id="headingOne"style="background-color: #c3d2e1;">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link tabclick text-dark" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                  Color Version
                                                </button>
                                            </h5>
                                        </div>
                            
                                        <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordion2">
                                            <div class="">
                            
                            <div class="col-lg-12   my-2">
                    Neck
                    <div class="float-right">
                        <i class="fas fa-plus mr-1 pluscolor" data-toggle="modal" data-target="#exampleModal"></i>
                         <i class="fas fa-edit editcolor"></i>
                    </div>
                            </div>
                            <div class="col-lg-12   my-2">
                                Acent
                                <div class="float-right">
                                    <i class="fas fa-plus mr-1 pluscolor" data-toggle="modal" data-target="#exampleModal"></i>
                                     <i class="fas fa-edit editcolor"></i>
                                </div>
                                       </div>
                                       <div class="col-lg-12   my-2">
                                        Bu logo
                                        <div class="float-right">
                                            <i class="fas fa-plus mr-1 pluscolor" data-toggle="modal" data-target="#exampleModal"></i>
                                             <i class="fas fa-edit editcolor"></i>
                                        </div>
                                               </div>
                                               <div class="col-lg-12   my-2">
                                                Body
                                                <div class="float-right">
                                                    <i class="fas fa-plus mr-1 pluscolor" data-toggle="modal" data-target="#exampleModal"></i>
                                                     <i class="fas fa-edit editcolor"></i>
                                                </div>
                                                       </div>
                                                
                                        </div>
                                    </div>
                                </div>
                           


                                </div>

                            </div>


                        </div>
                        
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="row">
                                    <div class="col-6"> 
                                    <div id="accordion3">
                                        <div class="card">
                                            <div class="card-header" id="headingOne"style="background-color: #c3d2e1;">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link tabclick text-dark" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                        Color
                                                    </button>
                                                </h5>
                                            </div>
                                
                                            <div id="collapseThree" class="collapse " aria-labelledby="headingThree" data-parent="#accordion3">
                                                <div class="">
                                
                                <div class="col-lg-12   my-2">
                         Color 1
                         <div class="float-right">
                            <i class="fas fa-plus mr-1 pluscolor" data-toggle="modal" data-target="#exampleModal"></i>
                             <i class="fas fa-edit editcolor"></i>
                        </div>
                                </div>
                                <div class="col-lg-12   my-2">
                                Color 2
                                <div class="float-right">
                                    <i class="fas fa-plus mr-1 pluscolor" data-toggle="modal" data-target="#exampleModal"></i>
                                     <i class="fas fa-edit editcolor"></i>
                                </div>
                                           </div>
                                          
                                                    
                                            </div>
                                        </div>
                                    </div>
                               




                                </div>
    
    
                            </div>
                            <div class="col-6"> 
                                <div id="accordion4">
                                    <div class="card">
                                        <div class="card-header" id="headingOne"style="background-color: #c3d2e1;">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link tabclick text-dark" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                 Size
                                                </button>
                                            </h5>
                                        </div>
                            
                                        <div id="collapseFour" class="collapse " aria-labelledby="headingFour" data-parent="#accordion4">
                                            <div class="">
                            
                            <div class="col-lg-12   my-2">
                     Size 1
                     <div class="float-right">
                        <i class="fas fa-plus mr-1 pluscolor" data-toggle="modal" data-target="#exampleModal"></i>
                         <i class="fas fa-edit editcolor"></i>
                    </div>
                            </div>
                            <div class="col-lg-12   my-2">
                             Size 2
                             <div class="float-right">
                                <i class="fas fa-plus mr-1 pluscolor" data-toggle="modal" data-target="#exampleModal"></i>
                                 <i class="fas fa-edit editcolor"></i>
                            </div>
                                       </div>
                                       
                                                
                                        </div>
                                    </div>
                                </div>
                           


                                </div>

                            </div>


                        </div>
                        
                                </div>
    
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                        <button type="submit" class="btn btn-primary">Add</button>
    
                    </div>
                    </form>
                </div>
    
            </div>


        </div>
    </div>

    <!-- Modal -->
    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
    
          <div class="modal-content">
    
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form >
                   
    
                    <div class="row p-3">
                        <div class="col-12 mt-2">
                           <label><b>Name</b></label><br>
    
                           <input type="text" class="form-control mt-1" name="name" placeholder="Product Name" required>
                        </div>
                        <div class="col-lg-12 col-12 mt-2">
                           <label><b>Address</b></label><br>
                            <input type="text" class="form-control mt-1" name="name" placeholder="Product Name" required>
                        </div>
                        <div class="col-lg-12 col-12 mt-2">
                            <label><b>Color</b></label><br>
                            <select name="sports_id" class="form-control">
                              <option>Color 1</option>
                            </select>
                         </div>
                        <div class="col-lg-12 col-12 mt-2">
                            <label><b>Product Description</b></label><br>
                            <textarea name="description" id="" class="form-control" rows="5" required></textarea>
                         </div>
    
    
    
    
                    </div>
    
    
            </div>
            <div class="modal-footer">
              {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
              <button type="submit" class="btn btn-primary">Add</button>
    
            </div>
        </form>
          </div>
    
        </div>
      </div>


    <script>
        $('.dropify').dropify();
    </script>


    <script>
        $(document).ready(function () {
            $('#sports').on('change', function () {
                // var value=$(this).val();
                var id = $(this).val();
                $.ajax({

                    type: 'get',
                    url: '{{URL::to('admin/get_product')}}',
                    data: {'id': id},

                    success: function (data) {

                        $('#products').empty().append(data);

                    },


                });
            });


        });
    </script>
@endsection
