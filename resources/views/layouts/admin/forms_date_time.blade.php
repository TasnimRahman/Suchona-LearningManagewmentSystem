@extends('layouts.admin.layout.master')
@section('titleKey','Form-Date-Time')
@section('content')

<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">


            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Date Picker</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Date Picker</li>
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
                            <h3><i class="fas fa-calendar"></i> Date Range Picker</h3>
                            The Date Range Picker is attached to a text input. It will use the current value of
                            the input to initialize, and update the input if new dates are chosen.
                        </div>

                        <div class="card-body">
                            <input type='text' class="form-control" name="daterange" value="01/01/2015 - 01/31/2015" />
                        </div>
                    </div><!-- end card-->
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="fas fa-calendar"></i> Date and Time Picker</h3>
                            The Date Range Picker can also be used to select times. Hour, minute and (optional)
                            second dropdowns are added below the calendars. An option exists to set the
                            increment count of the minutes dropdown to e.g. offer only 15-minute or 30-minute
                            increments.
                        </div>

                        <div class="card-body">
                            <input type="text" class="form-control" name="daterange" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM" />
                        </div>
                    </div><!-- end card-->
                </div>

            </div>


            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="fas fa-calendar"></i> Single Date Picker</h3>
                            The Date Range Picker can be turned into a single date picker widget with only one
                            calendar. In this example, dropdowns to select a month and year have also been
                            enabled at the top of the calendar to quickly jump to different months.
                        </div>

                        <div class="card-body">
                            <input type="text" class="form-control" name="singledatepicker" />
                        </div>
                    </div><!-- end card-->
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="fas fa-calendar"></i> Predefined Ranges</h3>
                            This example shows the option to predefine date ranges that the user can choose from
                            a list.
                        </div>

                        <div class="card-body">
                            <div id="reportrange" class="form-control pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                                <i class="fas fa-calendar"></i>&nbsp;
                                <span></span> <b class="caret"></b>
                            </div>
                        </div>
                    </div><!-- end card-->
                </div>

            </div>

            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Documentation</h4>
                <p>You can find examples and documentation about Bootstrap date picker and range picker here: <a target="_blank" href="http://www.daterangepicker.com/">Datetime range picker</a></p>
            </div>


        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</div>
<!-- END content-page -->
@endsection