<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from indiro.dexignzone.com/xhtml/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 May 2023 06:51:18 GMT -->

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="description" content="Discover Airseal, the leading solution for power plants in India, reducing ash leakages, improving efficiency, and extending equipment life." />
    <link rel="canonical" href="https://airseal.in/blog" />


    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Airseal: Airtight Solutions for Power Plants in India</title>

    <!-- Favicon icon -->
<link rel="apple-touch-icon" sizes="57x57" href="https://airseal.in/assets/new-images/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="https://airseal.in/assets/new-images/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="https://airseal.in/assets/new-images/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="https://airseal.in/assets/new-images/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="https://airseal.in/assets/new-images/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="https://airseal.in/assets/new-images/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="https://airseal.in/assets/new-images/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="https://airseal.in/assets/new-images/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="https://airseal.in/assets/new-images/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="https://airseal.in/assets/new-images/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="https://airseal.in/assets/new-images/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="https://airseal.in/assets/new-images/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="https://airseal.in/assets/new-images/favicon/favicon-16x16.png">
    <!-- Stylesheet -->
    <link href="{{ url('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/lightgallery/css/lightgallery.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/magnific-popup/magnific-popup.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/animate/animate.css') }}" rel="stylesheet">


    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendor/rangeslider/rangeslider.css') }}">
    <link rel="stylesheet" class="skin" href="{{ url('assets/css/skin/skin-1.css') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
        rel="stylesheet">
    @include('frontend.console')
    
    <style>
		.dz-card.style-1 .dz-title{
			height:100px;
	</style>
</head>

<body id="bg" class="layout-light">

    <div class="page-wraper">
        <!-- Header -->
        @include('frontend.header')


        <div class="page-content bg-white">

            <!-- Banner  -->
            <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center"
                style="background-image: url({{ url('assets/images/bnr/bnr1.jpg') }});">
                <div class="container">
                    <div class="dz-bnr-inr-entry">
                        <h1>Blog </h1>
                        <!-- Breadcrumb Row -->
                        <nav aria-label="breadcrumb" class="breadcrumb-row">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Blog </li>
                            </ul>
                        </nav>
                        <!-- Breadcrumb Row End -->
                    </div>
                </div>
            </div>
            <!-- Banner End -->

            <section class="content-inner">
                <div class="container">
                    <div class="clearfix">
                        <ul id="masonry" class="row blog-masonry">
                        @foreach ($blog as $blogs)
                            
                        
                            <li class="card-container grid-item col-xl-4 col-md-6">
                                <div class="dz-card style-1 shadow m-b30">
                                    <div class="dz-media">
                                        <a href="{{route('blog.single',$blogs->blog_url)}}"><img src="{{ url('blogimg/' . $blogs->image1) }}"
                                                alt="" style="width:370px;height:192px"></a>
                                    </div>
                                    <div class="dz-info">
                                        <div class="dz-meta">
                                            <ul>
                                                <li class="post-date">{{ $blogs->created_at }}</li>
                                            </ul>
                                        </div>
                                        <h4 class="dz-title"><a href="{{route('blog.single',$blogs->blog_url)}}">{{$blogs->blog_title}}</a></h4>
                                       
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                      <div class="d-flex justify-content-center">
                        {!! $blog->links() !!}
                    </div>
                </div>
            </section>



            <!-- Footer -->
            @include('frontend.footer')
            <!-- Footer End -->
            <button class="scroltop icon-up" type="button"><i class="fas fa-arrow-up"></i></button>
        </div>
        <!-- JAVASCRIPT FILES ========================================= -->

        @include('script.script')



</body>

<!-- Mirrored from indiro.dexignzone.com/xhtml/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 May 2023 06:51:23 GMT -->

</html>
