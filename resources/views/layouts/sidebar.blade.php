<div class="sidebar" data-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">

            <div class="logo"><a href="{{url('')}}" class="simple-text logo-mini">
                    AD
                </a>
                <a href="{{route('dashboard.blog')}}" class="simple-text logo-normal">
                    Airseal Dashboard
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="https://airseal.in/assets/new-images/favicon/android-icon-192x192.png" />
                    </div>
                    <div class="user-info">
                        <a data-toggle="collapse" class="username">
                            <span>
                               Admin
                               
                            </span>
                        </a>
                       
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item active ">
                        <a class="nav-link" href="{{route('dashboard.blog')}}">
                            <i class="material-icons">dashboard</i>
                            <p> Dashboard </p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
                            <i class="material-icons">image</i>
                            <p> Blog
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse {{ in_array(Route::currentRouteName(), ['blog.add','admin.editblog','admin.listblog']) ? 'show' : '' }}" id="pagesExamples">
                            <ul class="nav">
                                <li class="nav-item {{ Request::is('dashboard/addblog') ? 'active' : '' }}">
                                    <a class="nav-link " href="{{route('blog.add')}}">
                                        <span class="sidebar-mini"> AB </span>
                                        <span class="sidebar-normal"> Add Blog </span>
                                    </a>
                                </li>
                                <li class="nav-item {{ Request::is('dashboard/listblog') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{route('admin.listblog')}}">
                                        <span class="sidebar-mini"> LB </span>
                                        <span class="sidebar-normal">List Of Blogs </span>
                                    </a>
                                </li>
                                
                               
                            </ul>
                        </div>
                    </li>
                    
                </ul>
            </div>
            <div class="sidebar-background"></div>
        </div>