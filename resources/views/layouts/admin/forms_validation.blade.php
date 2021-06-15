@extends('layouts.admin.layout.master')
@section('titleKey','Form-Validation')
@section('content')

<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Form validation</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Validation</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Parsley JavaScript form validation library</h4>
                <p>You can find examples and documentation about Parsley form validation library here: <a target="_blank" href="http://parsleyjs.org/">Parsley documentation</a></p>
            </div>


            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-hand-pointer"></i> Form validator</h3>
                            A simple demo form that uses most of supported Parsley elements to show how to bind,
                            configure and validate them properly.
                        </div>

                        <div class="card-body">

                            <form action="#" data-parsley-validate novalidate>
                                <div class="form-group">
                                    <label for="userName">User Name<span class="text-danger">*</span></label>
                                    <input type="text" name="nick" data-parsley-trigger="change" required placeholder="Enter user name" class="form-control" id="userName">
                                </div>
                                <div class="form-group">
                                    <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                    <input type="email" name="email" data-parsley-trigger="change" required placeholder="Enter email" class="form-control" id="emailAddress">
                                </div>
                                <div class="form-group">
                                    <label for="pass1">Password<span class="text-danger">*</span></label>
                                    <input id="pass1" type="password" placeholder="Password" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                                    <input data-parsley-equalto="#pass1" type="password" required placeholder="Password" class="form-control" id="passWord2">
                                </div>
                                <div class="form-group">
                                    <label>URL</label>
                                    <div>
                                        <input data-parsley-type="url" type="url" class="form-control" required placeholder="URL" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Number</label>
                                    <div>
                                        <input data-parsley-type="number" type="text" class="form-control" required placeholder="Enter only numbers" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Textarea</label>
                                    <div>
                                        <textarea required class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <input id="remember-1" type="checkbox">
                                        <label for="remember-1"> Remember me </label>
                                    </div>
                                </div>

                                <div class="form-group text-right m-b-0">
                                    <button class="btn btn-primary" type="submit">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary m-l-5">
                                        Cancel
                                    </button>
                                </div>

                            </form>

                        </div>
                    </div><!-- end card-->
                </div>



                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-hand-pointer"></i> Multi steps form demo</h3>
                            Sometimes, you'll need to split long and fastidious forms into multiple parts. See
                            how you could leverage Parsley groups to easily validate such multi step forms, step
                            by step.
                        </div>

                        <div class="card-body">

                            <form class="demo-form" action="#">
                                <div class="form-section">
                                    <label for="firstname">First Name:</label>
                                    <input type="text" class="form-control" name="firstname" id="firstname" required="">

                                    <label for="lastname">Last Name:</label>
                                    <input type="text" class="form-control" name="lastname" id="lastname" required="">
                                </div>

                                <div class="form-section">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" name="email" id="email" required="">
                                </div>

                                <div class="form-section">
                                    <label for="color">Favorite color:</label>
                                    <input type="text" class="form-control" name="color" id="color" required="">
                                </div>

                                <br /><br />

                                <div class="form-navigation">
                                    <button type="button" class="previous btn btn-info pull-left">&lt;
                                        Previous</button>
                                    <button type="button" class="next btn btn-info pull-right">Next
                                        &gt;</button>
                                    <input type="submit" class="btn btn-primary pull-right">
                                    <span class="clearfix"></span>
                                </div>

                            </form>

                            <script>

                            </script>

                        </div>

                    </div><!-- end card-->

                </div>

            </div>

        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</div>
<!-- END content-page -->
@endsection