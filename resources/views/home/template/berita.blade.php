<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Berita</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('template/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('template/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> --}}
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        @include('home.template.navb')
        <!-- Navbar & Hero End -->

        <!-- Blog Start -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                    <h4 class="text-uppercase text-primary">Blog kami</h4>
                    <h1 class="display-3 text-capitalize mb-3">Blog & News</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    @foreach($blogs as $blog)
                        <div class="col-lg-6 col-xl-4">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid rounded-top w-100" alt="{{ $blog->title }}" style="width: 300px; height: 300px;">
                                    <div class="blog-date px-4 py-2">
                                        <i class="fa fa-calendar-alt me-1"></i> {{ $blog->publish_date->format('M d Y') }}
                                    </div>
                                </div>
                                <div class="blog-content rounded-bottom p-4">
                                    <a href="{{ route('blogs.show', $blog->id) }}" class="h4 d-inline-block mb-3">{{ $blog->title }}</a>
                                    <p>{{ Str::limit($blog->content, 100) }}</p>
                                    <a href="{{ route('blogs.show', $blog->id) }}" class="fw-bold text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Blog End -->

        <!-- Footer Start -->
        @include('home.template.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('template/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('template/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('template/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('template/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    
    <!-- Template Javascript -->
    <script src="{{ asset('template/js/main.js') }}"></script>
    </body>

</html>