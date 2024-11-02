<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary">
                <img src="{{asset('image/pdam-garut.png')}}" alt="Logo">
                Tirta intan
                {{-- <i class="fas fa-hand-holding-water me-3"></i> --}}
            </h1> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                <a href="{{route('berita')}}" class="nav-item nav-link">Berita</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{route('visi')}}" class="dropdown-item">Visi Misi</a>
                        <a href="product.html" class="dropdown-item">Our Product</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
            </div>
            {{-- <div class="d-none d-xl-flex me-3">
                <div class="d-flex flex-column pe-3 border-end border-primary">
                    <span class="text-body">Get Free Delivery</span>
                    <a href="tel:+4733378901"><span class="text-primary">Free: + 0123 456 7890</span></a>
                </div>
            </div> --}}
            {{-- <a href="{{route('login')}}" class="btn btn-primary rounded-pill d-inline-flex flex-shrink-0 py-2 px-4">login</a> --}}
        </div>
    </nav>

    <div class="carousel-header">
        <div id="carouselId" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            </ol>
            <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    @foreach ($slides as $key => $slide)
                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                            <img src="{{ asset('template/img/carousel-1.jpg') }}" class="img-fluid w-100" alt="Image">
                            
                            <div class="carousel-caption-2">
                                <div class="carousel-caption-2-content d-flex align-items-center justify-content-between" style="max-width: 900px;">
                                    <div class="row w-100">
                                        <div class="col-md-10 d-flex flex-column justify-content-center">
                                            <h1 class="text-white text-uppercase fw-bold mb-4 fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s; letter-spacing: 3px;">
                                                {{ $slide->title }}
                                            </h1>
                                            <h1 class="display-2 text-capitalize text-white mb-4 fadeInRight animated" data-animation="fadeInRight" data-delay="1.3s" style="animation-delay: 1.3s;">
                                                {{ $slide->heading }}
                                            </h1>
                                            <p class="mb-5 fs-5 text-white fadeInRight animated" data-animation="fadeInRight" data-delay="1.5s" style="animation-delay: 1.5s;">
                                                {{ $slide->description }}
                                            </p>
                                            <div class="carousel-caption-2-content-btn fadeInRight animated" data-animation="fadeInRight" data-delay="1.7s" style="animation-delay: 1.7s;">
                                                <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="#">BACA LEBIH BAYAK</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex justify-content-evenly">
                                    {{-- <img src="{{ asset('storage/' . $slide->image) }}" class="img-fluid" style="width: 400px; height: 200px; object-fit: cover;"> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
    
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon btn btn-primary fadeInLeft animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;">
                    <i class="fa fa-angle-left fa-3x"></i>
                </span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon btn btn-primary fadeInRight animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;">
                    <i class="fa fa-angle-right fa-3x"></i>
                </span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    
</div>

<style>
    @media (max-width: 767.98px) {
    .carousel-caption-2 {
        flex-direction: column; 
    }

    .carousel-caption-2-content {
        order: 1; 
    }

    .col-md-6 {
        order: 2; 
        margin-top: 20px; 
        justify-content: center; 
    }

    .col-md-6 img {
        width: 100%;
        max-width: 250px; 
        height: auto; 
    }
}

</style>