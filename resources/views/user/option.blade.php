@extends('user.layout.header')


<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .table2,
    .th2,
    .td2 {
        border: 1px solid black;
        border-collapse: collapse;
    }

    .select2-multiple {
        width: 260px;
    }
</style>

@section('content')
<section class="productFeatures">

    <div class="container-fluid pre_record">
        <div class=" align-items-center pl-4 ">
            {{-- <a href="{{url('rosters')}}"> <input type="button" value="Roster" class="btn btn-success mr-2 bg-success"></a> --}}
            {{-- <a href="{{url("print")}}"> <input type="button" value="print" class="btn btn-primary mr-2"></a> --}}
        </div>
        <form action="{{url('user/add/order')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12 pt-5">


            </div>
            <!-- Place order section -->
            <div class="col-md-6 col-lg-3 col-12  placeOrder px-0">
                <div class="orderDetails px-5 py-5">
                    
                        <div class="form-group">
                            <label for="team"><b>Team:</b></label>
                            <input type="text" class="form-control form-control-sm" id="team" name="team_name">
                            <input type="hidden" class="form-control form-control-sm pro_id" id="" name="pro_id" value="{{$id}}">
                        </div>
                        <div class="form-group">
                            <label for="orderNumber"><b>Order Number:</b></label>
                            <input type="text" class="form-control form-control-sm" id="orderNumber">
                        </div>
                        <div class="">
                            <label for="ID"><b>WO ID:</b><span class="pl-2">auto generate code</span></label>
                        </div>
                        <div class="pt-2">
                            <div class="form-group">
                                <label for="location"><b>Reorder:</b></label>
                                <input type="checkbox" class="reorder_check" id="reorder_check">
                            </div>
                            <div class="form-group">
                                <label for="previousOrderNum"><b>Previous Order Number:</b></label>
                                <input type="text" class="form-control form-control-sm reorder" id="previousOrderNum" disabled>
                            </div>
                        </div>


                    

                   {{--  <a href="{{ url('rosters') }}"> <input type="button" value="Roster" class="btn btn-success mr-2 bg-info float-right"></a>
                    <a href="{{ url('rosters') }}"> <input type="button" value="Print" class="btn btn-success mr-2 bg-danger float-right"></a> --}}
                   

                </div>
                <div class="uploadArtwork text-center pt-5">
                    <h6>Upload Artwork</h6>
                    <div class="uploadLogo mt-2 p-2">
                        <input name="file" type="file" class="dropify" data-height="100" />
                        {{-- <img src="./img/uploadicon.png" class="img-fluid"> --}}
                    </div>
                </div>
            </div>
            <!-- Place order section -->


            <!-- Product and color section -->
            <div class="col-12 col-md-6 col-lg-3  pl-5 pr-4 py-5">

                <div class="productOptions">
                    <h3 class="productHeading pt-3 text-center">Product Options</h3>
                    <div class="px-3 py-2">
                        <div class="">

                            <div class="form-group">
                                <label for="location" class=""><b>Fabric Choice:</b></label>
                                <div class="">
                                <select name="po1[]" class="select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple">
                                    <option value="">Selet</option>
                                    @foreach($data as $row)
                                    @if($row->parent=='Product Option' && $row->chalid=='Fabric Choice')
                                    <option value="{{$row->id}}">{{$row->property}}</option>
                                    
                                    @endif
                                    @endforeach

                                </select>
                            </div>
                            </div>
                            
                        </div>
                        <div class="">

                            <div class="form-group">
                                <label for="location" class=""><b>Neck Style:</b></label>
                                <div class="">
                                <select name="po2[]" class="select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple">
                                    <option value="">Selet</option>
                                    @foreach($data as $row)
                                    @if($row->parent=='Product Option' && $row->chalid=='Neck Style')
                                    <option value="{{$row->id}}">{{$row->property}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            </div>
                           
                        </div>
                        <div class="">

                            <div class="form-group">
                                <label for="location" class=""><b>Jersey Fit/Style:</b></label>
                                <div class="">
                                <select name="po3[]" class="select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple">
                                    <option value="">Selet</option>
                                    @foreach($data as $row)
                                    @if($row->parent=='Product Option' && $row->chalid=='Jersy Fit')
                                    <option value="{{$row->id}}">{{$row->property}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            </div>
                            
                        </div>
                        <div class="">

                            <div class="form-group">
                                <label for="location" class=""><b>Short Inseam:</b></label>
                                <div class="">
                                <select name="po4[]" class="select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple">
                                    <option value="">Selet</option>
                                    @foreach($data as $row)
                                    @if($row->parent=='Product Option' && $row->chalid=='Short Inseam')
                                    <option value="{{$row->id}}">{{$row->property}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            </div>
                           
                        </div>
                        <div class="">

                            <div class="form-group">
                                <label for="location" class=""><b>Additional Notes:</b></label>
                                <div class="">
                                <textarea class="form-control" id="notes" rows="3"  name="notes"></textarea>
                            </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col pt-5">
                        <div class="colorOptions">
                            <h3 class="optionsHeading pt-3 text-center">Color Options</h3>
                            <div class="px-3 py-2">
                                <div class="">

                                    <div class="form-group">
                                        <label for="location" class=""><b>Neck:</b></label>
                                        <div class="">
                                        <select class="select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple" name="co1[]">
                                            <option value="">Selet</option>
                                            @foreach($data as $row)
                                            @if($row->parent=='Color Version' && $row->chalid=='Neck')
                                            <option value="{{$row->id}}">{{$row->property}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    </div>
                                    
                                </div>
                                <div class="">

                                    <div class="form-group">
                                        <label for="location" class=""><b>Accent:</b></label>
                                        <div class="">
                                        <select class="select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple" name="co2[]">
                                            <option value="">Selet</option>
                                            @foreach($data as $row)
                                            @if($row->parent=='Color Version' && $row->chalid=='Acent')
                                            <option value="{{$row->id}}">{{$row->property}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    </div>
                                   
                                </div>
                                <div class="">

                                    <div class="form-group">
                                        <label for="location" class=""><b>BU Logo:</b></label>
                                        <div class="">
                                        <select class="select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple" name="co3[]">
                                            <option value="">Selet</option>
                                            @foreach($data as $row)
                                            @if($row->parent=='Color Version' && $row->chalid=='Bu logo')
                                            <option value="{{$row->id}}">{{$row->property}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    </div>
                                   
                                </div>
                                <div class="">

                                    <div class="form-group">
                                        <label for="location" class=""><b>BODY:</b></label>
                                        <div class="">
                                        <select class="select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple" name="co4[]">
                                            <option value="">Selet</option>
                                            @foreach($data as $row)
                                            @if($row->parent=='Color Version' && $row->chalid=='Body')
                                            <option value="{{$row->id}}">{{$row->property}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    </div>
                                   
                                </div>




                                <div class="form-group">

                                    <table class="m-auto">
                                        <tr class="tr2">
                                            <th class="th2 p-2">
                                                <input type="color" name="colo1" >
                                            </th>
                                            <th class="th2 p-2">
                                                <input type="color" name="colo2" value="#195232">
                                            </th>
                                            <th class="th2 p-2">
                                                <input type="color" name="colo3" value="#5f1c1c">
                                            </th>
                                        </tr>

                                    </table>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product and color section -->

            <!-- Lettering and Logos -->

            <div class="col-lg-6 col-12  py-5">

                <div class="lettering">
                    <div class="row">
                        <div class="col-12 pt-2 pb-4">
                            <h3 class="text-center">Lettering</h3>
                        </div>
                        <div class="col-12">
                            <div action="" class="d-flex justify-content-center">
                                <div class="d-flex pr-5">
                                    {{-- <button class="btn-none" id="btn_text" type="button"><i class="fas fa-plus"></i>&nbsp; Add New Text</button>&nbsp; --}}
                                    <button class="btn" id="btn_text" type="button" ><i class="fas fa-plus"></i>&nbsp; Add New Text</button>&nbsp;

                                </div>

                                <div class="d-flex">
                                    {{-- <button class="btn-none" id="btn_number" type="button"><i class="fas fa-plus"></i>&nbsp;  Add New Number</button>&nbsp; --}}
                                    <button class="btn" id="btn_number" type="button"><i class="fas fa-plus"></i>&nbsp; Add New Number</button>&nbsp;

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row px-5 py-5" id="div_append">
                        <div class="col-md-6 pb-5 pt-2 add-new-product1" val='1' val2="1">
                            <div class="row">
                                <div class="col-md-12 px-3 Border_1">



                                    <div class="">
                                        <div class="form-group">
                                            <label for="location" class=""><b>Location:</b></label>
                                            <div class="">
                                            <input type="text" class="form-control form-control-sm" id="location" name="location[0]">
                                        </div>
                                        </div>
                                        
                                    </div>
                                    <div class="">
                                        <div class="form-group">
                                            <label for="location" class=""><b>Text:</b></label>
                                            <div class="">
                                            <input type="text" class="form-control form-control-sm " name="text[0]" id="location">
                                            <input type="hidden" class="form-control form-control-sm" name="type[0]" value="text">
                                        </div>
                                        </div>
                                       
                                    </div>
                                    <div class="">
                                        <div class="form-group">

                                            <label for="mainColor" class=""><b>Font Name:</b></label>
                                            <div class="">
                                            <input type="text" name="font_name[0]" class="form-control form-control-sm">
                                        </div>
                                        </div>
                                       
                                    </div>
                                    <div class="">



                                        <div class="form-group">

                                            <label for="mainColor" class=""><b>Main Color:</b></label>
                                            <div class="">
                                            <select class="select2-multiple form-control form-control-sm" aria-label=".form-control-sm example"  name="main_color[0][]" multiple="multiple">

                                                <option value="">Selet</option>
                                                @foreach($data as $row)
                                                @if($row->parent=='Color' && $row->chalid=='Color')
                                                <option value="{{$row->id}}">{{$row->property}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        </div>
                                       
                                    </div>
                                    <div class="">

                                        <div class="form-group">

                                            <label for="mainColor" class=""><b>Trim Color:</b></label>
                                            <div class="">
                                            <select class="select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" name="trim_color[0][]" multiple="multiple">

                                                <option value="">Selet</option>
                                                @foreach($data as $row)
                                                @if($row->parent=='Color' && $row->chalid=='Color')
                                                <option value="{{$row->id}}">{{$row->property}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        </div>
                                       
                                    </div>

                                    <div class="">
                                        <div class="form-group">
                                            <label for="size" class=""><b>Size:</b></label>
                                            <div class="">
                                            <select class="select2-multiple form-group  form-control" aria-label=".form-control-sm example" name="size[0][]" multiple="multiple" style="padding: 0.375rem 0.75rem!important;">

                                                <option value="">Selet</option>
                                                @foreach($data as $row)
                                                @if($row->parent=='Size' && $row->chalid=='Size')
                                                <option value="{{$row->id}}">{{$row->property}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        </div>
                                       
                                    </div>

                                </div>
                            </div>


                        </div>

                        <div class="col-md-6 pb-5 pt-2 add-new-product2" val='1'>
                            <div class="row ">
                                <div class="col-12 px-3 Border_1 padrem-5">
                                    <div class="">
                                        <div class="form-group">
                                            <label for="location" class=""><b>Location:</b></label>
                                            <div class="">
                                            <input type="text" class="form-control form-control-sm " name="location[1]" id="location">
                                        </div>
                                        </div>
                                        
                                    </div>
                                    <div class="">
                                        <div class="form-group">
                                            <label for="mainColor" class=""><b>Font Name:</b></label>
                                            <div class="">
                                                <input type="hidden" class="form-control form-control-sm" name="type[1]" value="nontext">
                                            <input type="text" name="font_name[1]" class="form-control form-control-sm">
                                        </div>
                                        </div>
                                        
                                    </div>

                                    <div class="">

                                        <div class="form-group">

                                            <label for="mainColor" class=""><b>Main Color:</b></label>
                                            <div class="">
                                            <select class="select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple"  name="main_color[1][]">

                                                <option value="">Selet</option>
                                                @foreach($data as $row)
                                                @if($row->parent=='Color' && $row->chalid=='Color')
                                                <option value="{{$row->id}}">{{$row->property}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>

                                        </div>
                                       
                                    </div>
                                    <div class="">

                                        <div class="form-group ">

                                            <label for="mainColor" class=""><b>Trim Color:</b></label>
                                            <div class="">
                                            <select class="select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple" name="trim_color[1][]">

                                                <option value="">Selet</option>
                                                @foreach($data as $row)
                                                @if($row->parent=='Color' && $row->chalid=='Color')
                                                <option value="{{$row->id}}">{{$row->property}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        </div>
                                       
                                    </div>

                                    <div class="">
                                        <div class="form-group">

                                            <label for="mainColor" class=""><b>Size:</b></label>
                                            <div class="">
                                            <select class="select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple" name="size[1][]">

                                                <option value="">Selet</option>
                                                @foreach($data as $row)
                                                @if($row->parent=='Size' && $row->chalid=='Size')
                                                <option value="{{$row->id}}">{{$row->property}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        </div>
                                      
                                    </div>

                                </div>
                            </div>



                        </div>


                    </div>
                </div>

                <div class="logos mt-5 pt-5 bg-white">
                    <div class="row px-3">
                        <div class="col-12 pt-2 pb-4">
                            <h3 class="text-center">Location</h3>
                        </div>
                        <div class="col-4 d-flex justify-content-center">
                            <div class="card border-0">
                                {{-- <img class="img-fluid" src="./img/uploadicon.png" alt="Upload Logo"> --}}
                                <input name="logo1" type="file" class="dropify" data-height="100" />
                                <div class="card-body">
                                    <h5 class="card-title">Upload Logo</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 d-flex justify-content-center">
                            <div class="card border-0">
                                {{-- <img class="img-fluid" src="./img/uploadicon.png" alt="Upload Logo"> --}}
                                <input name="file2" type="file" class="dropify" data-height="100" />
                                <div class="card-body">
                                    <h5 class="card-title">Upload Logo</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 d-flex justify-content-center">
                            <div class="card border-0">
                                {{-- <img class="img-fluid" src="./img/uploadicon.png" alt="Upload Logo"> --}}
                                <input name="file3" type="file" class="dropify" data-height="100" />
                                <div class="card-body">
                                    <h5 class="card-title">Upload Logo</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row px-3">
                        <div class="col-4 border-right p-3">
                            <form>
                                <div class="form-group ">
                                    <label for="product"><b>Location:</b></label>
                                    <input type="text" class="form-control form-control-sm" name="loc1" id="location">
                                </div>

                                <div class="form-group">
                                    <label for="size" class=""><b>Size:</b></label>
                                    <select class="form-control form-control-sm" name="size1" aria-label=".form-control-sm example">
                                        <option value="">Select</option>

                                       @foreach($data as $row)
                                                @if($row->parent=='Size' && $row->chalid=='Size')
                                                <option value="{{$row->id}}">{{$row->property}}</option>
                                                @endif
                                                @endforeach
                                    </select>
                                </div>
                            </form>
                        </div>

                        <div class="col-4 border-right p-3">
                          
                                <div class="form-group ">
                                    <label for="product"><b>Location:</b></label>
                                    <input type="text" class="form-control form-control-sm"  name="loc2">
                                </div>

                                <div class="form-group">
                                    <label for="size" class=""><b>Size:</b></label>
                                    <select class="form-control form-control-sm" name="size2" aria-label=".form-control-sm example">

                                        <option value="">Select</option>
                                                @foreach($data as $row)
                                                @if($row->parent=='Size' && $row->chalid=='Size')
                                                <option value="{{$row->id}}">{{$row->property}}</option>
                                                @endif
                                                @endforeach
                                    </select>
                                </div>
                           
                        </div>

                        <div class="col-4 p-3">
                           
                                <div class="form-group ">
                                    <label for="product"><b>Location:</b></label>
                                    <input type="text" class="form-control form-control-sm"  name="loc3" >
                                </div>

                                <div class="form-group">
                                    <label for="size" class=""><b>Size:</b></label>
                                    <select class="form-control form-control-sm" name="size3" aria-label=".form-control-sm example">

                                            <option value="">Select</option>
                                                @foreach($data as $row)
                                                @if($row->parent=='Size' && $row->chalid=='Size')
                                                <option value="{{$row->id}}">{{$row->property}}</option>
                                                @endif
                                                @endforeach
                                    </select>
                                </div>
                                 <button type="submit" class="btn btn-success mr-2 bg-success float-right">Next</button>
                            
                        </div>
                    </div>
                </div>
                <!-- Lettering and Logos -->

            </div>

        </div>
    </form>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
<!-- <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script> -->

<script>
    $(document).ready(function() {
        // Select2 Multiple
        $('.select2-multiple').select2({
            placeholder: "Select",
            allowClear: true
        });
    });
</script>
<script>
    $('.drop    ify').dropify();
</script>
<script>
    $(document).ready(function() {
        $('#btn_text').click(function() {
            var val = $(".add-new-product1").attr('val');
            var val2 =$(".add-new-product1").attr('val2');
            val++;
            val2++;
            $(".add-new-product1").attr('val', val);
            $(".add-new-product1").attr('val2', val2);
            
            var html = `
            <div class="col-md-6 pb-3  add-new-product1 mt-3" id="removeTr" val='` + val + `'>
                <div class="row ">

                        
                        <div class="col-md-12 px-3 Border_1">
                        <button class="float-right btn-none" id="deletebtn"><i class="fas fa-trash" style="color: red"></i></button><br>


<div class="">
    <div class="form-group">
        <label for="location" class=""><b>Location:</b></label>
        <div class="">
        <input type="text" class="form-control form-control-sm" id="location" name="location[`+ val2 +`]">
    </div>
    </div>
    
</div>
<div class="">
    <div class="form-group">
        <label for="location" class=""><b>Text:</b></label>
        <div class="">
        <input type="text" class="form-control form-control-sm " id="location" name="text[`+ val2 +`]">
    </div>
    </div>
    <input type="hidden" class="form-control form-control-sm" name="type[`+ val2 +`]" value="text">
   
</div>
<div class="">
    <div class="form-group">

        <label for="mainColor" class=""><b>Font Name:</b></label>
        <div class="">
        <input type="text" class="form-control form-control-sm" name="font_name[`+ val2 +`]">
    </div>
    </div>
   
</div>
<div class="">



    <div class="form-group">

        <label for="mainColor" class=""><b>Main Color:</b></label>
        <div class="">
        <select class="select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple" name="main_color[`+ val2 +`][]">

            <option value="">Selet</option>
            @foreach($data as $row)
            @if($row->parent=='Color' && $row->chalid=='Color')
            <option value="{{$row->id}}">{{$row->property}}</option>
            @endif
            @endforeach
        </select>
    </div>
    </div>
   
</div>
<div class="">

    <div class="form-group">

        <label for="mainColor" class=""><b>Trim Color:</b></label>
        <div class="">
        <select class="select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple" name="trim_color[`+ val2 +`][]">

            <option value="">Selet</option>
            @foreach($data as $row)
            @if($row->parent=='Color' && $row->chalid=='Color')
            <option value="{{$row->id}}">{{$row->property}}</option>
            @endif
            @endforeach
        </select>
    </div>
    </div>
   
</div>

<div class="">
    <div class="form-group">
        <label for="size" class=""><b>Size:</b></label>
        <div class="">
        <select class="select2-multiple form-group  form-control" aria-label=".form-control-sm example" multiple="multiple" style="padding: 0.375rem 0.75rem!important;" name="size[`+ val2 +`][]">

            <option value="">Selet</option>
            @foreach($data as $row)
            @if($row->parent=='Size' && $row->chalid=='Size')
            <option value="{{$row->id}}">{{$row->property}}</option>
            @endif
            @endforeach
        </select>
    </div>
    </div>
   
</div>

</div>
                    
                    </div>
                    </div>
</div>
            `;
            var tableBody = $("#div_append").append(html);
            $('.select2-multiple').select2();

        });
        $(document).on('click', '#deletebtn', function() {
            var val2 =$(".add-new-product1").attr('val2');
            val2--;
            $(".add-new-product1").attr('val2', val2);
            $(this).closest('#removeTr').remove();
        });
        $('#btn_number').click(function() {
            var val = $(".add-new-product2").attr('val');
            var val2 =$(".add-new-product1").attr('val2');
            val++;
            val2++;
            $(".add-new-product2").attr('val', val);
            $(".add-new-product1").attr('val2', val2);
            var html = `
                <div class="col-md-6 pb-5 mt-3 add-new-product2" id="removeTr2" val='1'>

                

                            <div class="row ">

                                <div class="col-12 px-3 Border_1 padrem-5">
                                    <button class="float-right btn-none" id="deletebtn2"><i class="fas fa-trash" style="color: red"></i></button><br>
                                    <div class="">
                                        <div class="form-group">
                                            <label for="location" class=""><b>Location:</b></label>
                                            <div class="">
                                            <input type="text" class="form-control form-control-sm " id="location" name="location[`+ val2 +`]">
                                        </div>
                                        </div>
                                        
                                    </div>
                                    <div class="">
                                        <div class="form-group">
                                            <label for="mainColor" class=""><b>Font Name:</b></label>
                                            <div class="">
                                            <input type="text" class="form-control form-control-sm" name="font_name[`+ val2 +`]">
                                            <input type="hidden" class="form-control form-control-sm" name="type[`+ val2 +`]" value="nontext">
                                        </div>
                                        </div>
                                        
                                    </div>

                                    <div class="">

                                        <div class="form-group">

                                            <label for="mainColor" class=""><b>Main Color:</b></label>
                                            <div class="">
                                            <select class="select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple" name="main_color[`+ val2 +`][]">

                                                <option value="">Selet</option>
                                                @foreach($data as $row)
                                                @if($row->parent=='Color' && $row->chalid=='Color')
                                                <option value="{{$row->id}}">{{$row->property}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>

                                        </div>
                                       
                                    </div>
                                    <div class="">

                                        <div class="form-group ">

                                            <label for="mainColor" class=""><b>Trim Color:</b></label>
                                            <div class="">
                                            <select class="select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple" name="trim_color[`+ val2 +`][]">

                                                <option value="">Selet</option>
                                                @foreach($data as $row)
                                                @if($row->parent=='Color' && $row->chalid=='Color')
                                                <option value="{{$row->id}}">{{$row->property}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        </div>
                                       
                                    </div>

                                    <div class="">
                                        <div class="form-group">

                                            <label for="mainColor" class=""><b>Size:</b></label>
                                            <div class="">
                                            <select class="select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple" name="size[`+ val2 +`][]">

                                                <option value="">Selet</option>
                                                @foreach($data as $row)
                                                @if($row->parent=='Size' && $row->chalid=='Size')
                                                <option value="{{$row->id}}">{{$row->property}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        </div>
                                      
                                    </div>

                                </div>
                            </div>



                        </div>

                                           
               
            `;
            var tableBody = $("#div_append").append(html);
            $('.select2-multiple').select2();
        });
            $(document).on('click', '.reorder_check', function() {
                var check_val =document.getElementById("reorder_check");
                
                 console.log(check_val);
                 if (check_val.checked == true )
                {
                    
                    $(".reorder").attr('disabled',false); 

                } 
                else {
                    $(".reorder").attr('disabled',true ); 

                }   
               

               
            });
            $('.reorder').on('change', function () {
                // var value=$(this).val();
                var id = $(this).val();
                var pro_id = $(".pro_id").val();
                
                $.ajax({

                    type: 'get',
                    url: '{{URL::to('user/get_previous')}}',
                    data: {'id': id,'pro_id':pro_id},

                    success: function (data) {

                        $('.pre_record').empty().append(data);

                    },


                });
            });

                

               
        
        $(document).on('click', '#deletebtn2', function() {
             var val2 =$(".add-new-product1").attr('val2');
            val2--;
            $(".add-new-product1").attr('val2', val2);
            $(this).closest('#removeTr2').remove();
        });
    });
</script>
@endsection