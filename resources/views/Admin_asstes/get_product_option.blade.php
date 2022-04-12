<meta name="csrf-token" content="{{ csrf_token() }}" />

<div class="col-12 mt-2">
    <div class="row">
        <div class="col-6">
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne" style="background-color: #c3d2e1;">
                        <h5 class="">
                            <button aria-controls="collapseOne" aria-expanded="true" class="btn btn-link tabclick text-dark" data-target="#collapseOne" data-toggle="collapse" type="button">
                                Product Option
                            </button>
                        </h5>
                    </div>
                    <div aria-labelledby="headingOne" class="collapse " data-parent="#accordion" id="collapseOne">
                        <div class="col-lg-12 my-2">
                            Fabric Choice
                            <div class="float-right">
                                <i class="fas fa-plus mr-1 pluscolor pro_op" val="Product Option" val2="Fabric Choice">
                                </i>
                                <i class="fas fa-edit editcolor pro_edit" val="Product Option" val2="Fabric Choice" val3="{{$id}}">
                                </i>
                            </div>
                        </div>
                        <div class="col-lg-12 my-2">
                            Neck Style
                            <div class="float-right">
                                <i class="fas fa-plus mr-1 pluscolor pro_op" val="Product Option" val2="Neck Style">
                                </i>
                                <i class="fas fa-edit editcolor pro_edit" val="Product Option" val2="Neck Style" val3="{{$id}}">
                                </i>
                            </div>
                        </div>
                        <div class="col-lg-12 my-2">
                            Jersy Fit
                            <div class="float-right">
                                <i class="fas fa-plus mr-1 pluscolor pro_op" val="Product Option" val2="Jersy Fit">
                                </i>
                                <i class="fas fa-edit editcolor pro_edit" val="Product Option" val2="Jersy Fit" val3="{{$id}}">
                                </i>
                            </div>
                        </div>
                        <div class="col-lg-12 my-2">
                            Short Inseam
                            <div class="float-right">
                                <i class="fas fa-plus mr-1 pluscolor pro_op" val="Product Option" val2="Short Inseam" >
                                </i>
                                <i class="fas fa-edit editcolor pro_edit" val="Product Option" val2="Short Inseam" val3="{{$id}}">
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div id="accordion2">
                <div class="card">
                    <div class="card-header" id="headingOne" style="background-color: #c3d2e1;">
                        <h5 class="mb-0">
                            <button aria-controls="collapseTwo" aria-expanded="true" class="btn btn-link tabclick text-dark" data-target="#collapseTwo" data-toggle="collapse" type="button">
                                Color Version
                            </button>
                        </h5>
                    </div>
                    <div aria-labelledby="headingTwo" class="collapse " data-parent="#accordion2" id="collapseTwo">
                        <div class="">
                            <div class="col-lg-12 my-2">
                                Neck
                                <div class="float-right">
                                    <i class="fas fa-plus mr-1 pluscolor" data-target="#exampleModal" data-toggle="modal">
                                    </i>
                                    <i class="fas fa-edit editcolor">
                                    </i>
                                </div>
                            </div>
                            <div class="col-lg-12 my-2">
                                Acent
                                <div class="float-right">
                                    <i class="fas fa-plus mr-1 pluscolor" data-target="#exampleModal" data-toggle="modal">
                                    </i>
                                    <i class="fas fa-edit editcolor">
                                    </i>
                                </div>
                            </div>
                            <div class="col-lg-12 my-2">
                                Bu logo
                                <div class="float-right">
                                    <i class="fas fa-plus mr-1 pluscolor" data-target="#exampleModal" data-toggle="modal">
                                    </i>
                                    <i class="fas fa-edit editcolor">
                                    </i>
                                </div>
                            </div>
                            <div class="col-lg-12 my-2">
                                Body
                                <div class="float-right">
                                    <i class="fas fa-plus mr-1 pluscolor" data-target="#exampleModal" data-toggle="modal">
                                    </i>
                                    <i class="fas fa-edit editcolor">
                                    </i>
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
                <div class="card-header" id="headingOne" style="background-color: #c3d2e1;">
                    <h5 class="mb-0">
                        <button aria-controls="collapseThree" aria-expanded="true" class="btn btn-link tabclick text-dark" data-target="#collapseThree" data-toggle="collapse" type="button">
                            Color
                        </button>
                    </h5>
                </div>
                <div aria-labelledby="headingThree" class="collapse " data-parent="#accordion3" id="collapseThree">
                    <div class="">
                        <div class="col-lg-12 my-2">
                            Color 1
                            <div class="float-right">
                                <i class="fas fa-plus mr-1 pluscolor" data-target="#exampleModal" data-toggle="modal">
                                </i>
                                <i class="fas fa-edit editcolor">
                                </i>
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
                        <button type="button" class="btn btn-link tabclick text-dark" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
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
                        
               
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>


<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal" role="dialog" tabindex="-1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                Add Product Option
                            </h5>
                            <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                <span aria-hidden="true">
                                    ×
                                </span>
                            </button>
                        </div>
                        <form  method="POST" enctype="multipart/form-data" id="myform">
                        @csrf
                        <div class="modal-body">
                           

              
                                <div class="row p-3">
                                    <div class="col-12 mt-2">
                                        <label>
                                            <b>
                                                Name
                                            </b>
                                        </label>
                                        <br>
                                            <input type="hidden" name="product_id" value="{{$id}}">
                                            <input type="hidden" name="parent" value="" class="pro_vari">
                                            <input type="hidden" name="chalid" value="" class="pro_vari2">

                                            <input class="form-control mt-1" name="name" placeholder="Product Option Name" required="" type="text">
                                            </input>
                                        </br>
                                    </div>
                                   
                                </div>
                            
                        </div>
                        <div class="modal-footer">
                            {{--
                            <button class="btn btn-secondary" data-dismiss="modal" type="button">
                                Close
                            </button>
                            --}}
                            <button class="btn btn-primary btnSubmit" type="submit">
                                Add
                            </button>
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>
          

            <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="xlarge" role="dialog" tabindex="-1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                Add Product Option
                            </h5>
                            <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                <span aria-hidden="true">
                                    ×
                                </span>
                            </button>
                        </div>
                        <form  method="POST" enctype="multipart/form-data" id="myform">
                        @csrf
                        <div class="modal-body" id="products_op">
                           

              
                                
                            
                        </div>
                        <div class="modal-footer">
                            {{--
                            <button class="btn btn-secondary" data-dismiss="modal" type="button">
                                Close
                            </button>
                            --}}
                            <button class="btn btn-primary btnSubmit" type="submit">
                                Add
                            </button>
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>

    $(document).ready(function () {
            $('.pro_op').on('click', function () {
               
                jQuery.noConflict();

               
                var id = $(this).attr('val');
                var id2 = $(this).attr('val2');
                $(".pro_vari").val(id);
                $(".pro_vari2").val(id2);

                
                $('#exampleModal').modal('show');
                


                
            });
            $('.pro_edit').on('click', function () {

                var id = $(this).attr('val');
                var id2 = $(this).attr('val2');
                var p_id = $(this).attr('val3');
                
                $.ajax({

                    type: 'get',
                    url: '{{URL::to('admin/get_edit_product')}}',
                    data: {'id':id,'id2':id2,'p_id':p_id},

                    success: function (data) {
                        jQuery.noConflict();
                        $('#products_op').empty().append(data);
                        $('#xlarge').modal('show');

                    },


                });
            });
            



        
 
    $(".btnSubmit").click(function (event) {
 
        //stop submit the form, we will post it manually.
        event.preventDefault();
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
 
        // Get form
        var data = $('#myform').serializeArray();
 
     
        console.log(data);
 
      
 
       // disabled the submit button
        $("#btnSubmit").prop("disabled", true);
 
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: '{{URL::to('admin/save_product_option')}}',
            data: data,
            success: function (data) {
                $('#exampleModal').modal('hide');
                swal("Success", "Request Submitted Successfully!", "success");

 
                
 
            },
            error: function (e) {
 
               swal ( "Oops" ,  "Something went wrong!" ,  "error" )

 
            }
        });
 
    });

    
 
});
</script>

</script>            