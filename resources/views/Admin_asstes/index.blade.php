@extends('Admin_asstes.layouts.main')


@section('content')
<section id="dashboard-ecommerce">
    <div class="row">
        <div class="col-lg-4 col-sm-4 col-12">
            <div class="card">
                <div class="card-header  align-items-start p-2">
                    <h2>{{App\Models\User::where('role','user')->count()}}</h2>
                    <p>Users</p>
                </div>

            </div>
        </div>

        <div class="col-lg-4 col-sm-4 col-12">
            <div class="card">
                <div class="card-header  align-items-start p-2">
                    <h2>{{App\Models\Sport::count()}}</h2>
                    <p>Sports</p>
                </div>

            </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-12">
            <div class="card">

                    <div class="card-header  align-items-start p-2">
                        <h2>{{App\Models\Product::count()}}</h2>
                        <p>Products</p>
                    </div>


            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12 col-12">
            <div id="chartContainer" style="height: 300px; width: 100%;"></div>
        </div>


    </div>

    {{-- <div class="row">
        <div class="col-lg-12 col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-end">
                    <h4>Recent Users</h4>

                </div>
                <div class="card-content">
                    <div class="table-responsive p-2">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Number</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Mark@gmail.com</td>
                                <td>xxxxxxxxxxx</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Mark</td>
                                <td>Mark@gmail.com</td>
                                <td>xxxxxxxxxxx</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Mark</td>
                                <td>Mark@gmail.com</td>
                                <td>xxxxxxxxxxx</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-end">
                    <h4>Packages</h4>

                </div>
                <div class="card-content">
                    <div class="table-responsive p-2">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Package Name</th>
                                <th scope="col">Package Cost</th>
                                <th scope="col">Number Of Days</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Bussiness</td>
                                <td>$1000</td>
                                <td>20 /Days</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Bussiness</td>
                                <td>$1000</td>
                                <td>20 /Days</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Bussiness</td>
                                <td>$1000</td>
                                <td>20 /Days</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>


    </div> --}}
</section>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
    window.onload = function () {
    
    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        title: {
            text: "Monthly Chart"
        },
        axisX: {
            
            valueFormatString: "MMM YY"
        },
        axisY: {
            title: "Number of Orders",
            titleFontColor: "#4F81BC",
            includeZero: true,
            suffix: "mn"
        },
        data: [{
            indexLabelFontColor: "darkSlateGray",
            name: "views",
            type: "area",
            // yValueFormatString: "#,##0.0mn",
            dataPoints: [
                @foreach ($orders as $sensors1)
                            {
                                // x: new Date(2017,06,24),
                                x:new Date( <?php
                                    echo Date('Y,m,d',Strtotime($sensors1->months));
                                    ?>),
                                y: <?php
                                    echo $sensors1->total;
                                    ?>,
                                    label: <?php

                                    echo '"'.$sensors1->monthKey.'"'.',';
                                    ?>   
                            },
                            @endforeach
            ]
        }]
    });
    chart.render();
    
    }
    </script>
@endsection
