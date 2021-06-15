@extends('layouts.admin.layout.master')
@section('titleKey','Form-Editors')
@section('content')

 <div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">


            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Text editor</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Text editor</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Trumbowyg - A lightweight WYSIWYG editor</h4>
                <p>Light, translatable and customisable jQuery plugin. Beautiful design, generates semantic
                    code, comes with a powerful API. <a target="_blank" href="https://alex-d.github.io/Trumbowyg/">Trumbowyg Documentation</a></p>
                <p>Note: Cross origin requests are only supported for protocol schemes: http, data, chrome,
                    chrome-extension, https. (on localhost, this plugin don't show editor buttons)</p>
            </div>


            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-file"></i> WYSIWYG editor example</h3>
                            Editor and generated code are optimized for HTML5 support. Compatible with all
                            recents browsers like IE9+, Chrome, Opera and Firefox.
                        </div>

                        <div class="card-body">
                            <textarea rows="3" class="form-control editor" name="content"></textarea>
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