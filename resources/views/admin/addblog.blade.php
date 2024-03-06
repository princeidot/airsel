<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro-bs4/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Feb 2023 08:16:39 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76"
        href="https://airseal.in/assets/new-images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" href="https://airseal.in/assets/new-images/favicon/android-icon-192x192.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Add Blog
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />





    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link href="{{ url('assets/admin/assets/css/material-dashboard.min6c54.css?v=2.2.2') }}" rel="stylesheet" />

    <link href="{{ url('assets/admin/assets/demo/demo.css') }}" rel="stylesheet" />



</head>

<body class="">


    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <div class="wrapper ">
        @include('layouts.sidebar')
        <div class="main-panel">

            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:;">Add Blog</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        
                        <ul class="navbar-nav">
                            
                          
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">
                                        Account
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right"
                                    aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Log out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

          <div class="content">
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">

                            <div class="col-md-12">
                                <div class="card ">
                                    <div class="card-header card-header-rose card-header-text">
                                        <div class="card-text">
                                            <h4 class="card-title">Add Blog</h4>
                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <form method="post" enctype="multipart/form-data" action="{{route('admin.saveblog')}}" class="form-horizontal">
                                            @csrf
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Blog Title</label>
                                                <div class="col-sm-10">
                                                    <div class="form-group bmd-form-group">
                                                        <input type="text" class="form-control" name="blog_title" required autocomplete="off"> 

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Category</label>
                                                <div class="col-sm-10">
                                                    <div class="form-group bmd-form-group">
                                                        <div class="dropdown bootstrap-select">
                                                            <select class="selectpicker"
                                                                data-style="select-with-transition" 
                                                                  tabindex="-98" title="Chooes Category" name="blog_category" required autocomplete="off">
                                                               
                                                                
                                                                <option name="blog_category" value="Airseal">Airseal </option>
                                                                <option name="blog_category" value="Aeropower">Aeropower </option>
                                                                <option name="blog_category" value="Hot Dip Galvanizing">Hot Dip Galvanizing </option>
                                                                <option name="blog_category" value="Grating">Grating </option>
                                                            </select>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Url</label>
                                                <div class="col-sm-10">
                                                    <div class="form-group bmd-form-group">
                                                        <input type="text" name="url" class="form-control" required autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                            

                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Meta Description</label>
                                                <div class="col-sm-10">
                                                    <div class="form-group bmd-form-group">
                                                        <input type="text" name="headdescription" class="form-control" required autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <label class="col-sm-2 col-form-label my-auto">Select Image</label>
                                                <div class="col-md-4 col-sm-4">

                                                    <div class="fileinput text-center fileinput-new"
                                                        data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail">
                                                            <img src="{{url('assets/admin/assets/img/image_placeholder.jpg') }}"
                                                                alt="...">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail"
                                                            style=""></div>
                                                        <div>
                                                            <span class="btn btn-rose btn-round btn-file">
                                                                <span class="fileinput-new">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="hidden" value=""
                                                                    name="">
                                                                    <input type="file" name="image1" required>
                                                                <div class="ripple-container"></div>
                                                            </span>
                                                            <a href="#pablo"
                                                                class="btn btn-danger btn-round fileinput-exists"
                                                                data-dismiss="fileinput"><i class="fa fa-times"></i>
                                                                Remove<div class="ripple-container">
                                                                    <div class="ripple-decorator ripple-on ripple-out"
                                                                        style="left: 71.4062px; top: 20.0156px; background-color: rgb(255, 255, 255); transform: scale(15.5098);">
                                                                    </div>
                                                                </div></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                    <div class="form-group bmd-form-group">
                                                        <textarea class="form-control" id="summary-ckeditor" rows="4" name="summary-ckeditor" required></textarea>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 text-center">
                                                    <button type="submit" class="btn btn-success">Submit<div
                                                            class="ripple-container"></div></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
           
              @include('layouts.footer')
        </div>
    </div>
 
    <script src="{{ url('assets/admin/assets/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ url('assets/admin/assets/ckfinder/ckfinder.js') }}"></script>
    <script>
        CKEDITOR.replace('summary-ckeditor', {
            format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div',
            extraPlugins: 'easyimage',
            removePlugins: 'image',
            filebrowserImageUploadUrl: 'css/asset/',
        });
    </script>
  @include('script.blogscript')


   
        @if (Session::has('success'))
        <script type="text/javascript">
            swal({
                title: 'Success!',
                text: "{{ Session::get('success') }}",
                timer: 5000,
                type: 'success'
            }).then((value) => {
                //location.reload();
            }).catch(swal.noop);
        </script>
    @endif
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"7973675fab632965","version":"2022.11.3","r":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro-bs4/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Feb 2023 08:17:07 GMT -->

</html>
