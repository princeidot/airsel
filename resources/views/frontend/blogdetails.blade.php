<!DOCTYPE html>
<html lang="en">


<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
    <meta name="description" content="{{$blogs->description1}}" />
    <meta property="og:title" content="{{$blogs->blog_title}}" />
    <meta property="og:description"
        content="{{$blogs->description1}}" />
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>{{$blogs->blog_title}}</title>
<link rel="canonical" href="https://airseal.in/blog/{{$blogs->blog_url}}" />
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

    <link href="{{ url('assets/css/jquery.floating-social-share.css') }}" rel="stylesheet">

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
	 .progress-container {
            width: 100%;
            height: 8px;
            background: gray;
            position: fixed;
            /* margin-top: 80px; */
            z-index: 1;

        }

        .progress-bar {
            height: 8px;
            background: #E04666;
            width: 0%;
        }
		 .headtitle {
            font-size:40px;font-weight:700;margin-bottom: 10px;color:white
        }
		        .accordion-body ul li a:before {
            content: "\f0da";
            font-family: 'Font Awesome 5 Free';
            font-weight: 700;
            position: absolute;
            left: 0;
            color: var(--primary);
        }

        .accordion-body ul li {
            position: relative;
            padding-left: 30px;
        }
		h1,h2,h3,h4,h5,h6{
			font-family: Roboto, sans-serif;
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
                        <p class="headtitle"> {{ $blogs->blog_title }} </p>
                        <!-- Breadcrumb Row -->
                        <nav aria-label="breadcrumb" class="breadcrumb-row">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>

                                <li class="breadcrumb-item"><a href="{{route('blog')}}">Blog</a> </li>
                                <li class="breadcrumb-item active" aria-current="page">{{$blogs->blog_title}} </li>
                            </ul>
                        </nav>
                        <!-- Breadcrumb Row End -->
                    </div>
                </div>
            </div>
            <!-- Banner End -->

           
<section class="content-inner">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-8 m-b40">
						<div class="dz-card style-1 blog-single">
							<div class="dz-media">
								<img src="{{ url('blogimg/' . $blogs->image1) }}" alt="{{$blogs->image1}}">
							</div>
							<div class="dz-info">
								<div class="dz-meta">
									<ul>
										<li class="post-date"><a><i class="las la-calendar"></i> Category: {{ $blogs->blog_category }}</a></li>
										<li class="post-author"><a><i class="las la-clock"></i> Reading Time: {{ $blogs->reading_time }} Minutes</a></li>
									</ul>
								</div>
								<h2 class="dz-title">{{$blogs->blog_title}}</h2>
                             <div class="accordion dz-accordion2" id="accordionFaq2">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne2">
                                                <a href="#" class="accordion-button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne2"
                                                    aria-expanded="true" aria-controls="collapseOne2">
                                                    Table Of Content
                                                    <span class="toggle-close"></span>
                                                </a>
                                            </h2>
                                            <div id="collapseOne2" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne2" data-bs-parent="#accordionFaq2">
                                                <div class="accordion-body">
                                                    <ul id="toc-list">

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                              
                              <div class="blog-post">

                                    {!! $blogs->description !!}
                                    </div>
                                
								</div>
							<div class="dz-share-post">
								<div class="dz-social-icon">
									
								<div class="post-tags">
									@if($previous != null)
									<a href="{{url('blog',$previous->blog_url)}}">Previous </a>
									@endif
									</div>
									
								</div>
								<div class="post-tags">
									@if($next != null)
									<a href="{{url('blog',$next->blog_url)}}">Next</a>
									@endif
								</div>
							</div>
						</div>
						
						
						
					
						
                    </div>
					<div class="col-xl-4 col-lg-4">
						<aside class="side-bar sticky-top right">
							
							
							<div class="widget style-1 widget_categories">
								<div class="widget-title">
									<h4 class="title">Our Products</h4>
								</div>
								<ul>
									<li class="cat-item"><a href="{{route('product.airseal')}}">Airseal</a></li> 
									<li class="cat-item"><a href="{{route('product.aeropower')}}">Aeropower</a></li>                                         
									<li class="cat-item"><a href="{{route('product.galvanizing')}}">Hot Dip Galvanizing</a></li>                                         
									<li class="cat-item"><a href="{{route('product.grating')}}">Grating</a></li>        
								</ul>						
							</div>
							
							
							<div class="widget style-1 recent-posts-entry">
								<div class="widget-title">
									<h4 class="title">Recent Post</h4>
								</div>
								<div class="widget-post-bx">
                                    @foreach ($allblog as $recent)
                                      <div class="widget-post clearfix">
										<div class="dz-media"> 
											<img src="{{ url('blogimg/' . $recent->image1) }}" alt="" style="width:92px;height:92px;">
										</div>
										<div class="dz-info">
											<div class="dz-meta">
												<ul>
													<li class="post-date"> {{$recent->created_at}}</li>
												</ul>
											</div>
											<h6 class="title"><a href="{{route('blog.single',$recent->blog_url)}}">{{$recent->blog_title}}</a></h6>
										</div>
									</div>
									@endforeach
								</div>
							</div>
							
							
							
						</aside>
					</div>
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
        <script src="{{ url('assets/js/jquery.floating-social-share.js') }}"></script>
        <script>
            $("body").floatingSocialShare({
                buttons:[
                    "facebook","linkedin","pinterest","reddit","telegram","tumblr","whatsapp"
                ],
                text:"share with ",
                url:"{{route('blog.single',$blogs->blog_url)}}"
            })
        </script>


<script>
        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {
            myFunction()
        };

        function myFunction() {
            var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            var scrolled = (winScroll / height) * 100;
            document.getElementById("myBar").style.width = scrolled + "%";
        }
    </script>
 <script>
 document.addEventListener("DOMContentLoaded", function() {
                var tocList = document.getElementById("toc-list");
                var headings = document.querySelectorAll(
                    ".blog-post h2, .blog-post h3, .blog-post h4, .blog-post h5, .blog-post h6");

                headings.forEach(function(heading) {
                    var listItem = document.createElement("li");
                    var anchor = document.createElement("a");
                    var headingText = heading.textContent;

                    // Remove numeric values and Roman numerals followed by dot (.) or colon (:)
                    var removetrim = headingText.replace(/:\s*/g, "");
                    var cleanedHeadingText = removetrim.replace(/(\d+\.|[ivxlcdm]+\.|\d+\:|[ivxlcdm]+\:)/ig,
                    '');

                    var headingId = cleanedHeadingText.replace(/\s+/g, '-')
                .toLowerCase(); // Generate ID from cleaned heading text

                    heading.id = headingId; // Set ID for the heading
                    anchor.textContent = cleanedHeadingText;
                    anchor.href = "#" + headingId; // Set href attribute for the anchor
                    listItem.appendChild(anchor);
                    tocList.appendChild(listItem);

                    anchor.addEventListener("click", function(event) {
                        event.preventDefault();
                        var targetElement = document.getElementById(headingId);
                        var offset = -850; // Adjust this value based on your sticky header height
                        var position = targetElement.offsetTop - offset;

                        window.scrollTo({
                            top: position,
                            behavior: "smooth"
                        });
                    });
                });
            });

</script>

</body>

<!-- Mirrored from indiro.dexignzone.com/xhtml/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 May 2023 06:51:23 GMT -->

</html>
