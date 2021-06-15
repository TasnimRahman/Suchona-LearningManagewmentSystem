<!-- Left Sidebar -->
<div class="left main-sidebar">

    <div class="sidebar-inner leftscroll">

        <div id="sidebar-menu">

            <ul>
                <li class="submenu">
                    <a class="active" href="{{url('admin/dashboard')}}">
                        <i class="fas fa-bars"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li class="submenu">
                    <a href="{{url('admin/users')}}">
                        <i class="fas fa-user"></i>
                        <span> Users</span>
                    </a>
                </li>

                <li class="submenu">
                    <a href="{{url('admin/blog')}}">
                        <i class="fas fa-file-alt"></i>
                        <span> Blog </span>
                    </a>
                </li>

                <li class="submenu">
                    <a href="{{url('admin/mail')}}">
                        <span class="label radius-circle bg-danger float-right">18</span>
                        <i class="fas fa-envelope"></i>
                        <span> Mailbox </span>
                    </a>
                </li>

                <li class="submenu">
                    <a href="{{url('admin/slider')}}">
                        <i class="fas fa-photo-video"></i>
                        <span> Slider </span>
                    </a>
                </li>

                <li class="submenu">
                    <a href="{{url('admin/charts')}}">
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
                            <a href="{{url('admin/table_basic')}}">Basic Tables</a>
                        </li>
                        <li>
                            <a href="{{url('admin/table_datatable')}}">Data Tables</a>
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
                            <a href="{{asset('admin/forms_general')}}">General Elements</a>
                        </li>
                        <li>
                            <a href="{{asset('admin/forms_select')}}">Select2</a>
                        </li>
                        <li>
                            <a href="{{asset('admin/forms_validation')}}">Form Validation</a>
                        </li>
                        <li>
                            <a href="{{asset('admin/forms_text_editors')}}">Text Editors</a>
                        </li>
                        <li>
                            <a href="{{asset('admin/forms_multiple_file_upload')}}">Multiple File Upload</a>
                        </li>
                        <li>
                            <a href="{{asset('admin/forms_date_time')}}">Date and Time Picker</a>
                        </li>
                        <li>
                            <a href="{{asset('admin/forms_color_picker')}}">Color Picker</a>
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
                            <a href="{{asset('admin/media_fancybox')}}">
                                <span class="label radius-circle bg-danger float-right">cool</span> Fancybox </a>
                        </li>
                        <li>
                            <a href="{{asset('admin/media_masonry')}}">Masonry</a>
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
                            <a href="{{asset('admin/page_pricing_tables')}}">Pricing Tables</a>
                        </li>
                        <li>
                            <a href="{{asset('admin/page_timeline')}}">Timeline</a>
                        </li>
                        <li>
                            <a href="page-invoice.html">Invoice</a>
                        </li>
                        <li>
                            <a href="page-blank.html">Blank Page</a>
                        </li>
                    </ul>
                </li>

                {{-- <li class="submenu">
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
                    </ul> --}}

                    {{-- <li class="submenu">
                        <a class="pro" href="pro.html">
                            <i class="fas fa-shopping-cart"></i>
                            <span> PRO Version </span>
                        </a>
                    </li> --}}

                    {{-- <li class="submenu">
                        <a target="_blank" href="https://nura24.com/">
                            <i class="fas fa-th"></i>
                            <span> Nura24 Free Suite </span>
                        </a>
                    </li> 

                </li>--}}

            </ul>

            <div class="clearfix"></div>

        </div>

        <div class="clearfix"></div>

    </div>

</div>
<!-- End Sidebar -->