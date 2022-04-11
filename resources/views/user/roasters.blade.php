@extends('user.layout.header')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
@section('content')
    <section>
        <div class="d-flex justify-content-end align-items-center pl-4">
            <a href="{{url('print')}}"class="pr-3"> <input type="button" value="print" class="btn btn-primary mr-2"></a>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-xl-3 col-md-3 col-12 pt-5 ">
                    <div class="py-5 text-center">
                       <button class="btn-none" id="btn_addsection" type="button" add_new="1"><i class="fas fa-plus"></i>Add New Section</button>
                    </div>
                </div>
                <div class="col-lg-9 col-xl-9 col-md-9 col-12 greyWhiteGradiant" id="sectionadd">
                   <form action="{{url('user/add/roaster')}}" method="POST" enctype="multipart/form-data">
                    <div class="row mx-3 my-3 bg-white roster-border">
                        <div class="col-12">
                            <h3 class="pt-4 pl-4">ROSTER</h3>
                        </div>

                        <div class="col-12 pt-4 d-flex justify-content-between">
                            <div>
                                <div class="uploadLogo mt-2 p-2">
                                    <input name="file" type="file"  class="dropify" data-height="100" />
                                  {{-- <img src="./img/uploadicon.png" class="img-fluid"> --}}
                                </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-center pl-4">
                                <button class="btn-none btn_addRow" id="" val2="1" type="button"><i class="fas fa-plus"></i>Add Row</button>

                            </div>
                        </div>
                        <div class="col-12 pt-5 text-center">
                            <textarea style="
    color: #FFF;
    background: transparent;
    color: black;
   border: none;
    outline: none;color: black" name="" id="" cols="20" rows="3">Roaster name</textarea>
                        </div>
                        <div class="col-12 pt-4">
                            <div class="table-responsive">
                                <table class="table table-bordered table-danger table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">Number</th>
                                        <th scope="col">Name(if Applicable)</th>
                                        <th scope="col">Top Size</th>
                                        <th scope="col">Bottom Size</th>
                                        <th scope="col">Notes</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="add_row1">
                                    <tr class="rowadd">
                                        <th scope="row"><input type="text" class="form-control"></th>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><i class="fa fa-trash text-danger "></i></td>
                                    </tr>
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                   </form>
                </div>


            </div>
        </div>
    </section>
  
    <script>
        $( document ).ready(function() {
            var r=1;
            $('#btn_addsection').click(function () {

                    var val = $(".roster-border").attr('val');
                    var val2 = $(this).attr('add_new');



val++;
val2++;
$("#btn_addsection").attr('add_new',val2);

$(".roster-border").attr('val', val);
var html=`  <div class="row mx-3 my-3 bg-white roster-border" id="roster-border${r}">
                        <div class="col-12">
                            <h3 class="pt-4 pl-4">ROSTER</h3>
                        </div>
                       <div class="col-12">
                       <div class="float-right">
                            <i class="fa fa-trash text-danger "id="deletebn" val4="${r}"></i>
                            </div>
                        </div>
                        <div class="col-12 pt-4 d-flex justify-content-between">
                            <div>
                                <div class="uploadLogo mt-2 p-2">
                                    <input name="file" type="file"  class="dropify" data-height="100" />
                                  {{-- <img src="./img/uploadicon.png" class="img-fluid"> --}}
                                </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-center pl-4">
                                <button class="btn-none btn_addRow btn_addRowone" id="${r}" val2="${val2}" type="button"><i class="fas fa-plus"></i>Add Row</button>

                            </div>
                        </div>
                        <div class="col-12 pt-5 text-center">
                            <textarea style="
    color: #FFF;
    background: transparent;
    color: black;
   border: none;
    outline: none;color: black" name="" id="" cols="20" rows="3">Roaster name</textarea>
                        </div>
                        <div class="col-12 pt-4">
                            <div class="table-responsive">
                                <table class="table table-bordered table-danger table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">Number</th>
                                        <th scope="col">Name(if Applicable)</th>
                                        <th scope="col">Top Size</th>
                                        <th scope="col">Bottom Size</th>
                                        <th scope="col">Notes</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="add_row${val2}">
                                    <tr class="rowadd">
                                        <th scope="row"><input type="text" class="form-control"></th>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><i class="fa fa-trash text-danger "></i></td>
                                    </tr>
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>`;



var tableBody = $("#sectionadd").append(html);

});
r++;
  $(document).on('click', '#deletebn', function() {
          var button_id = $(this).attr("val4");
       
                $('#roster-border' + button_id + '').remove();

       
    });

                $('.btn_addRow').click(function () {
                    var val = $(".rowadd").attr('val');
                    var val2 = $(this).attr('val2');

val++;
$(".rowadd").attr('val', val);
var html=`<tr class="rowadd" id="removeTr">
                         <th scope="row"><input type="text" class="form-control"></th>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><i class="fa fa-trash text-danger "id="deletebtn" ></i></td>
                                    </tr>`;



var tableBody = $("#add_row"+val2).append(html);

});

    $(document).on('click', '#deletebtn', function() {
           
        $(this).closest('#removeTr').remove();
    });



               

$(document).on('click', '.btn_addRowone', function () {
    
var button_id = $(this).attr("id");
var button_id2 = $(this).attr("val2");

var html=`<tr class="rowadd" id="removeTr">
                         <th scope="row"><input type="text" class="form-control"></th>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><i class="fa fa-trash text-danger "id="deletebtn"></i></td>
                                    </tr>`;
var tableBody = $('#add_row' + button_id2 + '').append(html);

 $(document).on('click', '#deletebtn', function() {
           
        $(this).closest('#removeTr').remove();
    });


        });
     });
   
        </script>
          <script>
        $('.dropify').dropify();
    </script>
@endsection

