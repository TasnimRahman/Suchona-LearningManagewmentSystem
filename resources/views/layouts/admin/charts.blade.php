@extends('layouts.admin.layout.master')
@section('titleKey','Charts')
@section('content')
<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Charts</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Charts</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-chart-bar"></i> Bar Chart
                        </div>

                        <div class="card-body">
                            <canvas id="barChart"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
                    <!-- end card-->
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-chart-bar"></i> Combo Bar Line Chart
                        </div>

                        <div class="card-body">
                            <canvas id="comboBarLineChart"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
                    <!-- end card-->
                </div>

            </div>


            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-chart-line"></i> Line Chart
                        </div>

                        <div class="card-body">
                            <canvas id="lineChart"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
                    <!-- end card-->
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-chart-line"></i> Line Chart 2
                        </div>

                        <div class="card-body">
                            <canvas id="lineChart2"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
                    <!-- end card-->
                </div>
            </div>
            <!-- end row -->


            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-chart-pie"></i> Pie Chart
                        </div>

                        <div class="card-body">
                            <canvas id="pieChart"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
                    <!-- end card-->
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-chart-pie"></i> Doughnut Chart
                        </div>

                        <div class="card-body">
                            <canvas id="doughnutChart"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
                    <!-- end card-->
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-chart-pie"></i> Radar Chart
                        </div>

                        <div class="card-body">
                            <canvas id="radarChart"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
                    <!-- end card-->
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-chart-pie"></i> Polar Area Chart
                        </div>

                        <div class="card-body">
                            <canvas id="polarAreaChart"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
                    <!-- end card-->
                </div>
            </div>
            <!-- end row -->


        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</div>
<!-- END content-page -->
@endsection