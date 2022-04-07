@extends('Admin_asstes.layouts.main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">


@section('content')

    <div class="row">
        {{-- <div class="col-lg-12">
            <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal"
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

            <div class="" role="">

                <div class="modal-content">
    
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Option</h5>
                        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> --}}
                    </div>
                    <div class="modal-body">
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
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link tabclick text-dark" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Product Option
                                                    </button>
                                                </h5>
                                            </div>
                                
                                            <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="">
                                
                                <div class="col-lg-12   my-2">
                         Fabric Choice
                                </div>
                                <div class="col-lg-12   my-2">
                                    Neck Style
                                           </div>
                                           <div class="col-lg-12   my-2">
                                            Jersy Fit
                                                   </div>
                                                   <div class="col-lg-12   my-2">
                                                    Short Inseam
                                                           </div>
                                                    
                                            </div>
                                        </div>
                                    </div>
                               




                                </div>
    
    
                            </div>
                            <div class="col-6"> 
                                <div id="accordion2">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
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
                            </div>
                            <div class="col-lg-12   my-2">
                                Acent
                                       </div>
                                       <div class="col-lg-12   my-2">
                                        Bu logo
                                               </div>
                                               <div class="col-lg-12   my-2">
                                                Body
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
                                            <div class="card-header" id="headingOne">
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
                                </div>
                                <div class="col-lg-12   my-2">
                                Color 2
                                           </div>
                                          
                                                    
                                            </div>
                                        </div>
                                    </div>
                               




                                </div>
    
    
                            </div>
                            <div class="col-6"> 
                                <div id="accordion4">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
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
                            </div>
                            <div class="col-lg-12   my-2">
                             Size 2
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Option</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('admin/add_option')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row p-3">
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
                                <label><b>Option</b></label><br>

                                <input type="text" name="option" class="form-control" required>
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
