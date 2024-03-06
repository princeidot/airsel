

<header class="site-header mo-left header style-4">


    <!-- Main Header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix ">
            <div class="container-fluid clearfix">
                <!-- Website Logo -->
                <div class="logo-header mostion logo-dark">
                    <a href="{{ url('') }}"><img src="{{ url('assets/images/logo/logo-trans.webp') }}" style="height:75px" alt=""></a>
                </div>
                <div class="logo-header mostion logo-white">
                    <a href="{{ url('') }}"><img src="{{ url('assets/images/logo/logo-trans.webp') }}"
                            alt=""></a>
                </div>

                <!-- Nav Toggle Button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- Extra Nav -->
                <div class="extra-nav">
                    <div class="extra-cell">
                        <div class="search-inhead">
                            <div class="dz-quik-search On">

                                <div class="text-box">
                                    <div class="icon-box" style="display:inline-flex;">
                                        <img src="{{url('assets/new-images/other/iso.png')}}">
                                    </div><!-- /.icon-box -->
                                    <p style="display:inline-block;">ISO 9001:2015<br>ISO 45001:2018</p>
                                </div><!-- /.text-box -->
                            </div>

                        </div>
                        <a href="{{route('contact')}}" class="btn btn-primary d-xl-inline-flex d-none btn-quote">REQUEST A
                            QUOTE</a>
                    </div>
                </div>
                <!-- Extra Nav -->

                <div class="header-nav navbar-collapse collapse justify-content-center" id="navbarNavDropdown">
                    <div class="logo-header logo-dark">
                        <a href="{{url('')}}"><img src="{{ url('assets/images/logo/logo-trans.webp') }}" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav navbar navbar-left">


                        <li ><a href="{{route('about')}}"><span>About</span></a></li>
                        <li class="sub-menu-down"><a href="{{route('ourproduct')}}"><span>Our Products</span></a>
                            <ul class="sub-menu">
                                <li> <a href="{{route('product.airseal')}}">Airseal</a> </li>
                                <li> <a href="{{ route('product.aeropower') }}">Aeropower</a> </li>
								<li><a href="{{route('product.galvanizing')}}">Hot Dip Galvanizing </a></li>
                                <li> <a href="{{ route('product.grating') }}">Grating</a> </li>
                                {{-- <li> <a href="single-project.html">Gear box</a> </li> --}}
                               {{-- <li><a href="team.html">Expansion Bellows</a></li>
                                <li><a href="testimonials.html">SiSiC Burner Nozzles</a></li>
                                <li> <a href="coming-soon.html">Customized Vacuum Systems</a> </li>
                                <li> <a href="project.html">Dedusting systems</a> </li>--}}
                            </ul>
                        </li>

                      
                        <li class="sub-menu-down"><a href="{{route('csoon.airseal')}}" class="notdrop"><span>Case
                                    studies</span></a>

                        </li>
                        <li class="sub-menu-down"><a href="{{route('blog')}}" class="notdrop"><span>Blog</span></a>

                        </li>
                        <li class="sub-menu-down"><a href="{{route('contact')}}" class="notdrop"><span>Reach
                                    us</span></a>

                        </li>
                        {{-- <li class="has-mega-menu header-tabs-wraper">
                                    <a href="javascript:void(0);">Case studies</a>
                                    <div class="mega-menu">
                                        <div class="header-style-bx">
                                            <div class="header-style-tabs">
                                                <ul>
                                                    <li><a href="javascript:void(0);" id="dz-elements"
                                                            class="header-tabs">Elements</a></li>
                                                    <li><a href="javascript:void(0);" id="dz-feature"
                                                            class="header-tabs active">Feature</a></li>
                                                </ul>
                                            </div>
                                            <div class="header-style-content text-center">
                                                <div id="elements" class="header-tabs-content">
                                                    <ul class="menu-list">
                                                        <li>
                                                            <span class="title">Element</span>
                                                            <ul>
                                                                <li><a href="element-buttons.html"><i
                                                                            class="ti-mouse"></i> Buttons</a></li>
                                                                <li><a href="element-iconbox.html"><i
                                                                            class="ti-layout-grid2"></i> Icon box
                                                                        styles</a></li>
                                                                <li><a href="element-team.html"><i class="ti-user"></i>
                                                                        Team</a></li>
                                                                <li><a href="element-list-group.html"><i
                                                                            class="ti-list"></i> List group</a></li>
                                                                <li><a href="element-about.html"><i
                                                                            class="ti-clipboard"></i> About</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <span class="title">Element</span>
                                                            <ul>
                                                                <li><a href="element-accordion.html"><i
                                                                            class="ti-layout-accordion-list"></i>
                                                                        Accordians</a></li>
                                                                <li><a href="element-alert.html"><i
                                                                            class="ti-alert"></i> Alert box</a></li>
                                                                <li><a href="element-typhography.html"><i
                                                                            class="ti-layout-grid2-thumb"></i>
                                                                        Typhography</a></li>
                                                                <li><a href="element-blog.html"><i
                                                                            class="ti-check-box"></i> Blogs</a></li>
                                                                <li><a href="element-progress.html"><i
                                                                            class="ti-notepad"></i> Progress Bar</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <span class="title">Element</span>
                                                            <ul>
                                                                <li><a href="element-counter.html"><i
                                                                            class="ti-timer"></i> Counters</a></li>
                                                                <li><a href="element-pagination.html"><i
                                                                            class="ti-more"></i> Pagination</a></li>
                                                                <li><a href="element-testimonials.html"><i
                                                                            class="ti-comments"></i> Testimonials</a>
                                                                </li>
                                                                <li><a href="element-imagebox.html"><i
                                                                            class="ti-image"></i> Image box content</a>
                                                                </li>
                                                                <li><a href="element-tab.html"><i
                                                                            class="ti-layout-tab-window"></i> Tabs</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <span class="title">Element</span>
                                                            <ul>
                                                                <li><a href="element-dividers.html"><i
                                                                            class="ti-layout-list-post"></i>
                                                                        Dividers</a></li>
                                                                <li><a href="element-modal.html"><i
                                                                            class="ti-layers"></i> Modal</a></li>
                                                                <li><a href="element-popover.html"><i
                                                                            class="ti-comment"></i> Popover</a></li>
                                                                <li><a href="element-table.html"><i
                                                                            class="ti-view-list"></i> Table</a></li>
                                                                <li><a href="element-widget.html"><i
                                                                            class="ti-layout-grid2"></i> Widgets</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="feature" class="header-tabs-content show">
                                                    <ul class="menu-list">
                                                        <li>
                                                            <span class="title">Header</span>
                                                            <ul>
                                                                <li><a href="header-1.html">Header 1</a></li>
                                                                <li><a href="header-2.html">Header 2</a></li>
                                                                <li><a href="header-3.html">Header 3</a></li>
                                                                <li><a href="header-4.html">Header 4</a></li>
                                                                <li><a href="header-5.html">Header 5</a></li>
                                                                <li><a href="header-6.html">Header 6</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <span class="title">Banner</span>
                                                            <ul>
                                                                <li><a href="banner-1.html">Banner 1</a></li>
                                                                <li><a href="banner-2.html">Banner 2</a></li>
                                                                <li><a href="banner-3.html">Banner 3</a></li>
                                                                <li><a href="banner-4.html">Banner 4</a></li>
                                                                <li><a href="banner-5.html">Banner 5</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <span class="title">Footer</span>
                                                            <ul>
                                                                <li><a href="footer-1.html">Footer 1</a></li>
                                                                <li><a href="footer-2.html">Footer 2</a></li>
                                                                <li><a href="footer-3.html">Footer 3</a></li>
                                                                <li><a href="footer-4.html">Footer 4</a></li>
                                                                <li><a href="footer-5.html">Footer 5</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li> --}}
                    </ul>
                    <div class="dz-social-icon">
                        <ul>
                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/"></a></li>
                            <li><a class="fab fa-twitter" href="https://twitter.com/?lang=en"></a></li>
                            <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/"></a></li>
                            <li><a class="fab fa-instagram" href="https://www.instagram.com/?hl=en"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
			 <div class="progress-container">
                <div class="progress-bar" id="myBar"></div>
            </div>
        </div>
		
    </div>

    <!-- Main Header End -->
</header>
