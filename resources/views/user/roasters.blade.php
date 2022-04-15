@extends('user.layout.header')
<link rel="stylesheet" href="{{asset('css/home.css')}}">

<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
<style>
    section.roster-bg {
    background-image: linear-gradient(315deg, #e0f1ff 0%, #f0e9e1 74%);
}
</style>

@section('content')
    <section class="roster-bg">
        <form action="{{url('user/add/roaster')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="or_id" value="{{$id}}">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                <div class="d-flex justify-content-start pt-4"> <a href="{{url('user/option')}}"> <input type="button" value="Go Back" class="btn btn-success mr-2"></a></div>
                </div>
                <div class="col-9">
                <div class="d-flex justify-content-end align-items-center pl-4 pt-4">
            <a href="{{url('print')}}"class="pr-3"> <input type="button" value="Print" class="btn btn-primary mr-2"></a>
           <input type="submit" value="Save" class="btn btn-success mr-2">

        </div>
                </div>
            </div>
        </div>
       
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-xl-3 col-md-3 col-12">
                    <div class="py-5 text-center pt-5">
                       <button class="btn btn-primary" id="btn_addsection" type="button" add_new="1" add_roast="0"><i class="fas fa-plus"></i>&nbsp; Add New Roster</button>
                    </div>
                </div>
                <div class="col-lg-9 col-xl-9 col-md-9 col-12" id="sectionadd">
                   
                    <div class="row mx-3 my-3 bg-white roster-border">
                        <div class="col-12">
                            <h3 class="pt-4 pl-4">ROSTER</h3>
                        </div>

                        <div class="col-12 pt-4 d-flex justify-content-between">
                            <div>
                                <div class="uploadLogo mt-2 p-2">
                                    <input name="file[0][]" type="file"  class="dropify" data-height="100" required />

                                  {{-- <img src="./img/uploadicon.png" class="img-fluid"> --}}
                                </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-center pl-4">
                                <button class="btn btn-primary btn_addRow" id="" val2="1" val3="0" type="button"><i class="fas fa-plus"></i>&nbsp; Add Row</button>

                            </div>
                        </div>
                        <div class="col-12 pt-5 text-center">
                            <textarea style="
    color: #FFF;
    background: transparent;
    color: black;
   border: none;
    outline: none;color: black" name="name[0][]" id="" cols="20" rows="3">Roster name</textarea>
    {{-- <h4>Roster Name</h4> --}}
                        </div>
                        <div class="col-12 pt-4">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead class="thead-dark">
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
                                        <th scope="row"><input type="text" size="2"  class="form-control" name="number[0][]"required></th>
                                        <td><input type="text" class="form-control" name="sname[0][]"required></td>
                                        <td><input type="text" class="form-control" name="top_size[0][]"required></td>
                                        <td><input type="text" class="form-control" name="bottom_size[0][]"required></td>
                                        <td><input type="text" class="form-control" name="notes[0][]"required></td>
                                        <td></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                  
                </div>


            </div>
        </div>
    </form>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
    <script>
        $( document ).ready(function() {
            var r=1;
            var rw=0;
            $('#btn_addsection').click(function () {
              
                
                    var val = $(".roster-border").attr('val');
                    var val2 = $(this).attr('add_new');
                    var val3 = $(this).attr('add_roast');
                    


val++;
val2++;
val3++;

$("#btn_addsection").attr('add_new',val2);
$("#btn_addsection").attr('add_roast',val3);
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
                                    <input name="file[${val3}][]" type="file"  class="dropify"  data-height="100" required/>


                                </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-center pl-4">
                                <button class="btn btn-primary btn_addRow btn_addRowone" id="${r}" val2="${val2}" val3="${val3}" type="button"><i class="fas fa-plus"></i>&nbsp; Add Row</button>

                            </div>
                        </div>
                        <div class="col-12 pt-5 text-center">
                            <textarea style="
    color: #FFF;
    background: transparent;
    color: black;
   border: none;
    outline: none;color: black" name="name[${val3}][]" id="" cols="20" rows="3">Roster name</textarea>
                        </div>
                        <div class="col-12 pt-4">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead class="thead-dark">
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
                                        <th scope="row"><input type="text" class="form-control"name="number[${val3}][]"required></th>
                                        <td><input type="text" class="form-control"name="sname[${val3}][]"required></td>
                                        <td><input type="text" class="form-control"name="top_size[${val3}][]"required></td>
                                        <td><input type="text" class="form-control"name="bottom_size[${val3}][]"required></td>
                                        <td><input type="text" class="form-control"name="notes[${val3}][]"required></td>
                                        <td></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>`;



var tableBody = $("#sectionadd").append(html);
$('.dropify').dropify();
});
r++;
  $(document).on('click', '#deletebn', function() {
          var button_id = $(this).attr("val4");

                $('#roster-border' + button_id + '').remove();


    });

                $('.btn_addRow').click(function () {
                  
                    var val = $(".rowadd").attr('val');
                    var val2 = $(this).attr('val2');
                    var val3 = $(this).attr('val3');

val++;
$(".rowadd").attr('val', val);
var html=`<tr class="rowadd" id="removeTr">
                         <th scope="row"><input type="text" class="form-control" name="number[${val3}][]" required></th>
                         <td><input type="text" class="form-control"name="sname[${val3}][]"required></td>
                                        <td><input type="text" class="form-control"name="top_size[${val3}][]"required></td>
                                        <td><input type="text" class="form-control"name="bottom_size[${val3}][]"required></td>
                                        <td><input type="text" class="form-control"name="notes[${val3}][]"required></td>
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
var val3 = $(this).attr("val3");

var html=`<tr class="rowadd" id="removeTr">
                         <th scope="row"><input type="text" class="form-control" name="number[${val3}][]"required></th>
                         <td><input type="text" class="form-control"name="sname[${val3}][]"required></td>
                                        <td><input type="text" class="form-control"name="top_size[${val3}][]"required></td>
                                        <td><input type="text" class="form-control"name="bottom_size[${val3}][]"required></td>
                                        <td><input type="text" class="form-control"name="notes[${val3}][]"required></td>
                            <td><i class="fa fa-trash text-danger "id="deletebtn"></i></td>
                                    </tr>`;
var tableBody = $('#add_row' + button_id2 + '').append(html);

 $(document).on('click', '#deletebtn', function() {

        $(this).closest('#removeTr').remove();
    });


        });
     });

        </script>
      
@endsection

