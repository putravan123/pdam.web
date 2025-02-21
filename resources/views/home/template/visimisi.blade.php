<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Contact</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('template/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
</head>

<body>
    @include('home.template.navpage')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <h2 class="mb-4">Visi Kami</h2>
                <p>
                    Menjadi perusahaan terkemuka dalam memberikan layanan berkualitas tinggi dan solusi inovatif untuk memenuhi kebutuhan pelanggan kami dengan cara yang berkelanjutan.
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 mx-auto text-center">
                <h2 class="mb-4">Misi Kami</h2>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <i class="bi bi-check-circle me-2 text-primary"></i>
                        Memberikan layanan pelanggan yang unggul dan memuaskan.
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-check-circle me-2 text-primary"></i>
                        Mengembangkan inovasi yang berkelanjutan untuk solusi jangka panjang.
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-check-circle me-2 text-primary"></i>
                        Memastikan kualitas tinggi di setiap produk dan layanan.
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-check-circle me-2 text-primary"></i>
                        Berkontribusi positif bagi masyarakat dan lingkungan.
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    @include('home.template.footer')

    <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

<!-- Modal Struktur Baru -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center py-4">
                <p id="modal-contact-message" class="mb-0" style="font-size: 1.2rem; font-weight: 500;"></p>
            </div>
        </div>
    </div>
</div>

<!-- Script untuk Menampilkan Modal dan Isi Pesan -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        @if(session('success'))
            var contactModal = new bootstrap.Modal(document.getElementById('contactModal'));
            document.getElementById('modal-contact-message').textContent = "{{ session('success') }}";
            contactModal.show();
        @endif

        @if(session('error'))
            var contactModal = new bootstrap.Modal(document.getElementById('contactModal'));
            let errorMessage = "{{ session('error') }}";
            let timeRemaining = Math.ceil({{ session('time_remaining', 0) }} / 60); // Konversi detik ke menit terdekat

            if (timeRemaining > 0) {
                let countdownInterval = setInterval(function () {
                    document.getElementById('modal-contact-message').textContent = `${errorMessage} Silakan coba lagi dalam ${timeRemaining} menit.`;
                    
                    timeRemaining--; // Kurangi 1 setiap menit
                    if (timeRemaining <= 0) {
                        clearInterval(countdownInterval);
                        document.getElementById('modal-contact-message').textContent = errorMessage;
                    }
                }, 60000); // Perbarui setiap 60 detik (1 menit)
                
                // Tampilkan pesan awal segera
                document.getElementById('modal-contact-message').textContent = `${errorMessage} ${timeRemaining} menit.`;
            } else {
                document.getElementById('modal-contact-message').textContent = errorMessage;
            }
            
            contactModal.show();
        @endif

        @if($errors->any())
            var contactModal = new bootstrap.Modal(document.getElementById('contactModal'));
            let errorList = "<ul>";
            @foreach ($errors->all() as $error)
                errorList += "<li>{{ $error }}</li>";
            @endforeach
            errorList += "</ul>";
            document.getElementById('modal-contact-message').innerHTML = errorList;
            contactModal.show();
        @endif
    });
</script>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('template/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('template/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('template/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('template/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/js/main.js') }}"></script>
</body>
</html>
