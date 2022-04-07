@extends('user.layout.header')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
@section('content')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-xl-3 col-md-3 col-12 pt-5 ">
                    <div class="py-5 text-center">
                       <i class="fa fa-plus"></i><a class="ml-2" href="#">Add New Roster</a>
                    </div>
                </div>
                <div class="col-lg-9 col-xl-9 col-md-9 col-12 greyWhiteGradiant">
                    <div class="row mx-3 my-3 bg-white roster-border">
                        <div class="col-12">
                            <h3 class="pt-4 pl-4">ROSTER</h3>
                        </div>
                        <div class="col-12 pt-4 d-flex justify-content-between">
                            <div>
                                <img src="{{asset('img/uploadicon.png')}}" class="img-fluid" alt="Upload Icon">
                            </div>
                            <div class="d-flex justify-content-end align-items-center pl-4">
                                <a class="pr-3" href="#">Add Player</a>

                            </div>
                        </div>
                        <div class="col-12 pt-5 text-center">
                            <textarea style="
    color: #FFF;
    background: transparent;
    color: black;
   border: none;
    outline: none;color: black" name="" id="" cols="30" rows="5">Roaster name</textarea>
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
                                    <tbody>
                                    <tr>
                                        <th scope="row"><input type="text" class="form-control"></th>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><i class="fa fa-trash text-danger "></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><input type="text" class="form-control"></th>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><i class="fa fa-trash text-danger "></i></td>
                                    </tr>      <tr>
                                        <th scope="row"><input type="text" class="form-control"></th>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><i class="fa fa-trash text-danger "></i></td>
                                    </tr>      <tr>
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
                </div>
            </div>
        </div>
    </section>

@endsection

