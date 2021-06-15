@extends('layouts.admin.layout.master')
@section('titleKey','Form-Select')
@section('content')

<div class="left main-sidebar">

    <div class="sidebar-inner leftscroll">

        <div id="sidebar-menu">

            <ul>

                <li class="submenu">
                    <a href="index-2.html">
                        <i class="fas fa-bars"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li class="submenu">
                    <a href="users.html">
                        <i class="fas fa-user"></i>
                        <span> Users </span>
                    </a>
                </li>

                <li class="submenu">
                    <a href="blog.html">
                        <i class="fas fa-file-alt"></i>
                        <span> Blog </span>
                    </a>
                </li>

                <li class="submenu">
                    <a href="mail-all.html">
                        <span class="label radius-circle bg-danger float-right">18</span>
                        <i class="fas fa-envelope"></i>
                        <span> Mailbox </span>
                    </a>
                </li>

                <li class="submenu">
                    <a href="slider.html">
                        <i class="fas fa-photo-video"></i>
                        <span> Slider </span>
                    </a>
                </li>

                <li class="submenu">
                    <a href="charts.html">
                        <i class="fas fa-chart-line"></i>
                        <span> Charts </span>
                    </a>
                </li>

                <li class="submenu">
                    <a id="tables" href="#">
                        <i class="fas fa-table"></i>
                        <span> Tables </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="tables-basic.html">Basic Tables</a>
                        </li>
                        <li>
                            <a href="tables-datatable.html">Data Tables</a>
                        </li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#">
                        <i class="fas fa-laptop"></i>
                        <span> User Interface </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="ui-alerts.html">Alerts</a>
                        </li>
                        <li>
                            <a href="ui-buttons.html">Buttons</a>
                        </li>
                        <li>
                            <a href="ui-cards.html">Cards</a>
                        </li>
                        <li>
                            <a href="ui-carousel.html">Carousel</a>
                        </li>
                        <li>
                            <a href="ui-collapse.html">Collapse</a>
                        </li>
                        <li>
                            <a href="ui-icons.html">Icons</a>
                        </li>
                        <li>
                            <a href="ui-modals.html">Modals</a>
                        </li>
                        <li>
                            <a href="ui-tooltips.html">Tooltips and Popovers</a>
                        </li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#">
                        <i class="fab fa-wpforms"></i>
                        <span> Forms </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="forms-general.html">General Elements</a>
                        </li>
                        <li class="active">
                            <a class="active" href="forms-select2.html">Select2</a>
                        </li>
                        <li>
                            <a href="forms-validation.html">Form Validation</a>
                        </li>
                        <li>
                            <a href="forms-text-editor.html">Text Editors</a>
                        </li>
                        <li>
                            <a href="forms-upload.html">Multiple File Upload</a>
                        </li>
                        <li>
                            <a href="forms-datetime-picker.html">Date and Time Picker</a>
                        </li>
                        <li>
                            <a href="forms-color-picker.html">Color Picker</a>
                        </li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#">
                        <i class="fas fa-file-image"></i>
                        <span> Multimedia </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="media-fancybox.html">
                                <span class="label radius-circle bg-danger float-right">cool</span> Fancybox </a>
                        </li>
                        <li>
                            <a href="media-masonry.html">Masonry</a>
                        </li>
                        <li>
                            <a href="media-lightbox.html">Lightbox</a>
                        </li>
                        <li>
                            <a href="media-owl-carousel.html">Owl Carousel</a>
                        </li>
                        <li>
                            <a href="media-image-magnifier.html">Image Magnifier</a>
                        </li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#">
                        <i class="fas fa-star"></i>
                        <span> Plugins </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="star-rating.html">Star Rating</a>
                        </li>
                        <li>
                            <a href="range-sliders.html">Range Sliders</a>
                        </li>
                        <li>
                            <a href="tree-view.html">Tree View</a>
                        </li>
                        <li>
                            <a href="sweetalert.html">SweetAlert</a>
                        </li>
                        <li>
                            <a href="calendar.html">Calendar</a>
                        </li>
                        <li>
                            <a href="counter-up.html">Counter-Up</a>
                        </li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#">
                        <i class="far fa-copy"></i>
                        <span> Example Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="page-pricing-tables.html">Pricing Tables</a>
                        </li>
                        <li>
                            <a href="page-timeline.html">Timeline</a>
                        </li>
                        <li>
                            <a href="page-invoice.html">Invoice</a>
                        </li>
                        <li>
                            <a href="page-blank.html">Blank Page</a>
                        </li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#">
                        <span class="label radius-circle bg-primary float-right">9</span>
                        <i class="fas fa-indent"></i>
                        <span> Menu Levels </span>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <span>Second Level</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="#">
                                <span>Third Level</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        <span>Third Level Item</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Third Level Item</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="submenu">
                    <a class="pro" href="pro.html">
                        <i class="fas fa-shopping-cart"></i>
                        <span> PRO Version </span>
                    </a>
                </li>

                <li class="submenu">
                    <a target="_blank" href="https://nura24.com/">
                        <i class="fas fa-th"></i>
                        <span> Nura24 Free Suite </span>
                    </a>
                </li>


            </ul>

            <div class="clearfix"></div>

        </div>

        <div class="clearfix"></div>

    </div>

</div>
<!-- End Sidebar -->

<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Select2</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Select2</li>
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
                            <h3><i class="far fa-hand-pointer"></i> Single select boxes</h3>
                            Select2 was designed to be a replacement for the standard <i>select</i> box that is
                            displayed by the browser. By default it supports all options and operations that are
                            available in a standard select box, but with added flexibility.
                        </div>

                        <div class="card-body">

                            <label for="example1">
                                Select country:
                            </label>
                            <div class="mb-1"></div>
                            <select class="form-control select2" id="example1" name="state">
                                <option value="AR">Argentina</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BE">Belgium</option>
                                <option value="BR">Brazil</option>
                                <option value="BG">Bulgaria</option>
                                <option value="CA">Canada</option>
                                <option value="CN">China</option>
                                <option value="CO">Colombia</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="EG">Egypt</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                                <option value="GR">Greece</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IE">Ireland</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JP">Japan</option>
                                <option value="KW">Kuwait</option>
                                <option value="MX">Mexico</option>
                                <option value="NL">Netherlands</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NO">Norway</option>
                                <option value="PK">Pakistan</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="ES">Spain</option>
                                <option value="SE">Sweden</option>
                                <option value="TR">Turkey</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US">United States</option>
                            </select>

                        </div>
                    </div><!-- end card-->
                </div>


                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-hand-pointer"></i> Multi-select boxes / Tags</h3>
                            Select2 also supports multi-value select boxes. The select below is declared with
                            the <i>multiple</i> attribute. This can be useful when using multiple tags
                        </div>

                        <div class="card-body">

                            <label for="example2">
                                Select countries:
                            </label>
                            <div class="mb-1"></div>
                            <select class="form-control select2" id="example2" name="state][]" multiple="multiple">
                                <option value="AR">Argentina</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BE">Belgium</option>
                                <option value="BR">Brazil</option>
                                <option value="BG">Bulgaria</option>
                                <option value="CA">Canada</option>
                                <option value="CN">China</option>
                                <option value="CO">Colombia</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="EG">Egypt</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                                <option value="GR">Greece</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IE">Ireland</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JP">Japan</option>
                                <option value="KW">Kuwait</option>
                                <option value="MX">Mexico</option>
                                <option value="NL">Netherlands</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NO">Norway</option>
                                <option value="PK">Pakistan</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="ES">Spain</option>
                                <option value="SE">Sweden</option>
                                <option value="TR">Turkey</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US">United States</option>
                            </select>

                        </div>
                    </div><!-- end card-->
                </div>


                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-hand-pointer"></i> Dynamic option creation</h3>
                            In addition to a prepopulated menu of options, Select2 can dynamically create new
                            options from text input by the user in the search box.
                        </div>

                        <div class="card-body">

                            <label for="example3">
                                Select countries:
                            </label>
                            <div class="mb-1"></div>
                            <select class="form-control select2" id="example3" name="state[]" multiple="multiple">
                                <option value="AR">Argentina</option>
                                <option value="AU" selected="selected">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BE">Belgium</option>
                                <option value="BR">Brazil</option>
                                <option value="BG">Bulgaria</option>
                                <option value="CA">Canada</option>
                                <option value="CN">China</option>
                                <option value="CO">Colombia</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="EG">Egypt</option>
                                <option value="FI">Finland</option>
                                <option value="FR" selected="selected">France</option>
                                <option value="DE">Germany</option>
                                <option value="GR">Greece</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IE">Ireland</option>
                                <option value="IL">Israel</option>
                                <option value="IT" selected="selected">Italy</option>
                                <option value="JP">Japan</option>
                                <option value="KW">Kuwait</option>
                                <option value="MX">Mexico</option>
                                <option value="NL">Netherlands</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NO">Norway</option>
                                <option value="PK">Pakistan</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="RO" selected="selected">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="ES">Spain</option>
                                <option value="SE">Sweden</option>
                                <option value="TR">Turkey</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US">United States</option>
                            </select>

                        </div>
                    </div><!-- end card-->
                </div>


                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-hand-pointer"></i> Option groups</h3>
                            In addition to a prepopulated menu of options, Select2 can dynamically create new
                            options from text input by the user in the search box.
                        </div>

                        <div class="card-body">

                            <label for="example4">
                                Select country:
                            </label>
                            <div class="mb-1"></div>
                            <select class="form-control select2" id="example4">
                                <optgroup label="Europe">
                                    <option value="AT">Austria</option>
                                    <option value="FR">France</option>
                                    <option value="DE">Germany</option>
                                    <option value="GR">Greece</option>
                                    <option value="RO">Romania</option>
                                    <option value="GB">United Kingdom</option>
                                </optgroup>

                                <optgroup label="Asia / Oceania">
                                    <option value="BD">Bangladesh</option>
                                    <option value="CN">China</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="JP">Japan</option>
                                    <option value="NZ">New Zealand</option>
                                </optgroup>

                                <optgroup label="Africa">
                                    <option value="EG">Egypt</option>
                                    <option value="SA">South Africa</option>
                                </optgroup>

                                <optgroup label="America">
                                    <option value="AR">Argentina</option>
                                    <option value="BR">Brazil</option>
                                    <option value="CA">Canada</option>
                                    <option value="US">United States</option>
                                </optgroup>
                            </select>

                        </div>
                    </div><!-- end card-->
                </div>

            </div>


            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Documentation</h4>
                <p>You can find examples and documentation about Select2 plugin here: <a target="_blank" href="https://select2.org/">Select2 documentation</a></p>
            </div>


        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</div>
<!-- END content-page -->
@endsection