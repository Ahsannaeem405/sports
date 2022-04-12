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

    <div class="container-fluid">
        <div class="d-flex justify-content-end align-items-center pl-4 ">
            {{-- <a href="{{url('rosters')}}"> <input type="button" value="Next" class="btn btn-success mr-2 bg-success"></a> --}}
            {{-- <a href="{{url("print")}}"> <input type="button" value="print" class="btn btn-primary mr-2"></a> --}}
        </div>
        <div class="row">
            <div class="col-12 pt-5">
                <a href="{{ url('rosters') }}"> <input type="button" value="Next" class="btn btn-success mr-2 bg-success float-right"></a>

            </div>
            <!-- Place order section -->
            <div class="col-md-6 col-lg-3 col-12 placeOrder px-0">
                <div class="orderDetails px-5 py-5">
                    <form>
                        <div class="form-group d-flex">
                            <label for="team"><b>Team:</b></label>
                            <input type="text" class="ml-2 w-100 form-control form-control-sm" id="team">
                        </div>
                        <div class="form-group d-flex">
                            <label for="orderNumber"><b>Order Number:</b></label>
                            <input type="text" class="ml-2 mt-3 h-100 form-control form-control-sm w-100 " id="orderNumber">
                        </div>
                        <div class="">
                            <label for="ID"><b>WO ID:</b><span class="pl-2">auto generate code</span></label>
                        </div>
                        <div class="pt-2">
                            <div class="form-group">
                                <label for="location"><b>Reorder:</b></label>
                                <input type="checkbox">
                            </div>
                            <div class="form-group d-flex">
                                <label for="previousOrderNum"><b>Previous Order Number:</b></label>
                                <input type="text" class="ml-2 mt-2 form-control form-control-sm w-50 h-100 " id="previousOrderNum">
                            </div>
                        </div>
<div>
    <button class="btn btn-success">Save</button>
    <button class="btn btn-success">Print</button>

</div>

                    </form>
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
                    <form class="px-3 py-2">
                        <label for="product"><b>Product:</b></label>
                        <div></div>
                        <div class="form-group d-flex">
                            <label for="fabricChoice" class=" mr-2"><b>Fabric Choice:</b></label>
                            <select class=" w-100 ml-2  w-100 select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple">
                                <option value="ClimaPro">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="form-group d-flex">
                            <label for="neckStyle" class="mr-2"><b>Neck Style:</b></label>
                            <select class=" w-100 select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple">
                                <option value="ClimaPro">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <!-- <label for="fabricChoice" class="pt-2"><b>Neck Style:</b></label>
                    <select class=" w-100 ml-2 form-control form-control-sm">
                      <option>Small select</option>
                    </select> -->

                        <div class="form-group d-flex">
                            <label for="jerseyFit" class="mr-2"><b>Jersey Fit/Style:</b></label>
                            <select class=" w-100 select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple">
                                <option value="ClimaPro">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="form-group d-flex">
                            <label for="shortInseam" class="mr-2"><b>Short Inseam:</b></label>
                            <select class=" w-100  select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple">
                                <option value="ClimaPro">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="notes"><b>Additional Notes:</b></label>
                            <textarea class="form-control" id="notes" rows="3"></textarea>
                        </div>

                    </form>
                </div>
                <div class="row">
                    <div class="col pt-5">
                        <div class="colorOptions">
                            <h3 class="optionsHeading pt-3 text-center">Color Options</h3>
                            <form class="px-3 py-2">
                                <div class="form-group d-flex">
                                    <label for="Neck" class="mr-2"><b>Neck:</b></label>
                                    <select class=" w-100 select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple">
                                        <option value="ClimaPro">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <div class="form-group d-flex">
                                    <label for="Accent" class="mr-2"><b>Accent:</b></label>
                                    <select class=" w-100 select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple">
                                        <option value="ClimaPro">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <div class="form-group d-flex">
                                    <label for="buLogo" class="mr-2"><b>BU Logo:</b></label>
                                    <select class=" w-100 select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple">
                                        <option value="ClimaPro">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <div class="form-group d-flex">
                                    <label for="Body" class="mr-2"><b>BODY:</b></label>
                                    <select class=" w-100 select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple">
                                        <option value="ClimaPro">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <div class="form-group d-flex">
                                    {{-- <label for="notes"><b>Additional Notes:</b></label>
                  <textarea class="form-control" id="notes" rows="3"></textarea> --}}
                                    <table>
                                        <tr class="tr2">
                                            <th class="th2 p-2">
                                                Color
                                            </th>
                                            <th class="th2 p-2">
                                                Color
                                            </th>
                                            <th class="th2 p-2">
                                                Color
                                            </th>
                                        </tr>
                                        {{-- <tr class="tr2">
                          <td class="td2" style="background: red">

                        </td>
                      </tr> --}}
                                    </table>


                                </div>

                            </form>
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
                            <form action="" class="d-lg-flex mx-sm-auto justify-content-lg-center">
                                <div class="d-flex pr-lg-5 pl-lg-3 pl-5 mx-auto">
                                    {{-- <button class="btn-none" id="btn_text" type="button"><i class="fas fa-plus"></i>&nbsp; Add New Text</button>&nbsp; --}}
                                    <button class="btn btn-danger px-4" id="btn_text" type="button"><i class="fas fa-plus"></i>&nbsp; Add New Text</button>&nbsp;

                                </div>

                                <div class="d-flex pr-lg-5 pl-lg-0 pl-5 mx-auto mx-lg-0 mt-lg-0 mt-4">
                                    {{-- <button class="btn-none" id="btn_number" type="button"><i class="fas fa-plus"></i>&nbsp;  Add New Number</button>&nbsp; --}}
                                    <button class="btn btn-danger" id="btn_number" type="button"><i class="fas fa-plus"></i>&nbsp; Add New Number</button>&nbsp;

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row px-5 py-5" id="div_append">
                        <div class="col-lg-6 col-md-6 col-xl-6 col-xxl-6 col-12 pb-5 pt-5 add-new-product1" val='1'>
                            <div class="row">
                                <div class="col-12 Border_1">

                                    <div class="form-group d-flex">
                                        <label for="location"><b>Location:</b></label>
                                        <input type="text" class="ml-2 form-control form-control-sm" id="location">
                                    </div>

                                    <div class="form-group d-flex">
                                        <label for="text" class=""><b>Text:</b></label>
                                        <input type="text" class="ml-2 form-control form-control-sm">
                                    </div>

                                    <div class="form-group d-flex">
                                        <label for="mainColor" class="mr-2 text-end"><b>Main Color:</b></label>
                                        <select class="ml-2 mt-3 h-100 w-100 select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple">

                                            <option value="ClimaPro">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>

                                    <div class="form-group d-flex">
                                        <label for="trimColor" class="mr-2"><b>Trim Color:</b></label>
                                        <select class="ml-2 h-100 w-100 select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple">

                                            <option value="ClimaPro">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>

                                    <div class="form-group d-flex">
                                        <label for="fontName"><b>Font Name:</b></label>
                                        <input type="text" class="ml-2 mt-3 h-100 form-control form-control-sm w-100 " id="location">
                                    </div>

                                    <div class="form-group d-flex">
                                        <label for="size" class="mr-2"><b>Size:</b></label>
                                        <select class=" w-100 select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple">

                                            <option value="ClimaPro">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>


                                </div>
                            </div>


                        </div>

                        <div class="col-lg-6 col-md-6 col-xl-6 col-xxl-6 col-12 pb-5 pt-5 add-new-product2" val='1'>
                            <div class="row p-2">
                                <div class="col-12 Border_1 pb-5">
                                    <div class="form-group d-flex">
                                        <label for="location"><b>Location:</b></label>
                                        <input type="text" class="ml-2  form-control form-control-sm" id="location">
                                    </div>



                                    <div class="form-group d-flex">
                                        <label for="mainColor" class=""><b>Main Color:</b></label>
                                        <input type="text" class="ml-2 mt-3 h-100 w-100 form-control form-control-sm">
                                    </div>

                                    <div class="form-group d-flex">
                                        <label for="trimColor" class=""><b>Trim Color:</b></label>
                                        <input type="text" class="ml-2 h-100 w-100 form-control form-control-sm">
                                    </div>

                                    <div class="form-group d-flex">
                                        <label for="fontName"><b>Font Name:</b></label>
                                        <input type="text" class="ml-2 mt-3 h-100 form-control form-control-sm w-100 " id="location">
                                    </div>

                                    <div class="form-group d-flex">
                                        <label for="size" class=""><b>Size:</b></label>
                                        <input type="text" class="ml-2 w-100 form-control form-control-sm">
                                    </div>
                                </div>
                            </div>



                        </div>


                    </div>
                </div>

                <div class="logos mt-5 pt-5 bg-white">
                    <div class="row px-3">
                        <div class="col-12 pt-2 pb-4">
                            <h3 class="text-center">Logos</h3>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="card border-0">
                                {{-- <img class="img-fluid" src="./img/uploadicon.png" alt="Upload Logo"> --}}
                                <input name="file" type="file" class="dropify" data-height="100" />
                                <div class="card-body">
                                    <h5 class="card-title">Upload Logo</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row px-3">
                        <div class="col-4 border-right p-3">
                            <form>
                                <div class="form-group d-flex">
                                    <label for="product"><b>Location:</b></label>
                                    <input type="text" class="ml-2 form-control form-control-sm" id="location">
                                </div>

                                <div class="form-group d-flex">
                                    <label for="size" class=""><b>Size:</b></label>
                                    <select class="ml-2 w-100 form-control form-control-sm" aria-label=".form-control-sm example">

                                        <option value="ClimaPro">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </form>
                        </div>

                        <div class="col-4 border-right p-3">
                            <form>
                                <div class="form-group d-flex">
                                    <label for="product"><b>Location:</b></label>
                                    <input type="text" class="ml-2 form-control form-control-sm" id="location">
                                </div>

                                <div class="form-group d-flex">
                                    <label for="size" class=""><b>Size:</b></label>
                                    <select class=" ml-2 w-100 form-control form-control-sm" aria-label=".form-control-sm example">

                                        <option value="ClimaPro">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </form>
                        </div>

                        <div class="col-4 p-3">
                            <form>
                                <div class="form-group d-flex">
                                    <label for="product"><b>Location:</b></label>
                                    <input type="text" class="ml-2 form-control form-control-sm" id="location">
                                </div>

                                <div class="form-group d-flex">
                                    <label for="size" class=""><b>Size:</b></label>
                                    <select class="ml-2 w-100 form-control form-control-sm" aria-label=".form-control-sm example">

                                        <option value="ClimaPro">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Lettering and Logos -->

            </div>
        </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>

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
    $('.dropify').dropify();
</script>
<script>
    $(document).ready(function() {




        $('#btn_text').click(function() {
            var val = $(".add-new-product1").attr('val');

            val++;
            $(".add-new-product1").attr('val', val);

            var html = `
            <div class="col-6 pb-3 pt-3 add-new-product1 mt-3" id="removeTr" val='` + val + `'>
                <div class="row p-2">
    <div class="col-12 Border_1">
                        <button class="float-right btn-none" id="deletebtn"><i class="fas fa-trash" style="color: red"></i></button>
                     <div class="form-group d-flex">
                        <label for="location"><b>Location:</b></label>
                        <input type="text" class="form-control form-control-sm" id="location">
                      </div>

                    <div class="form-group d-flex">
                      <label for="text" class=""><b>Text:</b></label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group d-flex">
                      <label for="mainColor" class=""><b>Main Color:</b></label>
                        <input type="text" class="ml-2 mt-3 h-100 w-100 form-control form-control-sm">
                    </div>

                    <div class="form-group d-flex">
                      <label for="trimColor" class=""><b>Trim Color:</b></label>
                        <input type="text" class="ml-2 h-100 w-100 form-control form-control-sm">
                    </div>

                    <div class="form-group d-flex">
                      <label for="fontName"><b>Font Name:</b></label>
                      <input type="text" class="ml-2 mt-3 h-100 form-control form-control-sm w-100 " id="location">
                    </div>

                    <div class="form-group d-flex">
                      <label for="size" class=""><b>Size:</b></label>
                        <input type="text" class="form-control">
                    </div>
                    </div>
                    </div>
</div>

            `;
            var tableBody = $("#div_append").append(html);

        });
        $(document).on('click', '#deletebtn', function() {
            $(this).closest('#removeTr').remove();
        });

        $('#btn_number').click(function() {
            var val = $(".add-new-product2").attr('val');

            val++;
            $(".add-new-product2").attr('val', val);

            var html = `
            <div class="col-6 pb-3 pt-3 add-new-product2 Border_1 mt-3" id="removeTr2" val='1'>
                <div class="row p-2">
                                    <div class="col-12  Border_1 pb-5">
                    <button class="float-right btn-none" id="deletebtn2"><i class="fas fa-trash" style="color: red"></i></button>
                              <div class="form-group d-flex">
                        <label for="location"><b>Location:</b></label>
                        <input type="text" class="form-control form-control-sm" id="location">
                      </div>



                    <div class="form-group d-flex">
                      <label for="mainColor" class="mr-2"><b>Main Color:</b></label>
                         <select class="ml-2 mt-3 h-100 w-100 select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple">

                    <option value="ClimaPro">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                    </div>

                    <div class="form-group d-flex">
                      <label for="trimColor" class="mr-2"><b>Trim Color:</b></label>
                        <select class="ml-2 h-100 w-100 select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple">

                    <option value="ClimaPro">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                    </div>

                    <div class="form-group d-flex">
                      <label for="fontName"><b>Font Name:</b></label>
                      <input type="text" class="ml-2 mt-3 h-100 form-control form-control-sm w-100 " id="location">
                    </div> 

                    <div class="form-group d-flex">
                      <label for="size" class="mr-2"><b>Size:</b></label>
                        <select class=" w-100 select2-multiple form-control form-control-sm" aria-label=".form-control-sm example" multiple="multiple">

                    <option value="ClimaPro">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                    </div>
                    </div>
                    </div>

                  </div>
            `;
            var tableBody = $("#div_append").append(html);

        });
        $(document).on('click', '#deletebtn2', function() {
            $(this).closest('#removeTr2').remove();
        });


    });
</script>
@endsection