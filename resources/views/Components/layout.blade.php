<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'title' }}</title>
    <link rel="stylesheet" href="{{ asset('Assets/Website/css/style.css') }}">
    <!--icon-->
    <link rel="icon" type="image/png" href="{{ asset('Assets/Website/media/UNCAL BARU 8 (LOGO).PNG') }}" />
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- MDB CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet"/>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- AOS CCS Files-->
    <link href="{{ asset('Assets/Website/aos/aos.css') }}" rel="stylesheet">
    <!-- Swiper CDN -->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
</head>
<body>
    <div class="container-fluid">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img style="max-width: 60%;max-height: 60%;" src="{{ asset('Assets/Website/media/icon-uncal.png') }}" aria-label="icon-uncal">
                </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li class="dropdown-center"><a href="#" class="nav-link dropdown px-4" data-bs-toggle="dropdown" aria-expanded="false">
                    Home
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/#about">About us</a></li>
                        <li><a class="dropdown-item" href="/#solutions">Solutions</a></li>
                        <li><a class="dropdown-item" href="/#services">Services</a></li>
                    </ul>
                </li>
                <li class="dropdown-center"><a href="#" class="nav-link dropdown px-4" data-bs-toggle="dropdown" aria-expanded="false">
                    Products
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/ESB">UNCAL ESB</a></li>
                        <li><a class="dropdown-item" href="/BI">UNCAL BI</a></li>
                    </ul>
                </li>
                <li class="dropdown-center"><a href="#" class="nav-link dropdown px-4" data-bs-toggle="dropdown" aria-expanded="false">
                    Resources & Events
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/resource">Resources</a></li>
                        <li><a class="dropdown-item" href="/resource#articles">Articles</a></li>
                        <li><a class="dropdown-item" href="/resource#whitepapers">Whitepapers</a></li>
                        <li><a class="dropdown-item" href="/resource#webinars">Webinars</a></li>
                        <li><a class="dropdown-item" href="/resource#events">Events</a></li>
                    </ul>
                </li>
            </ul>

            <div class="col-md-3 text-center">
                <button type="button" onclick="location.href='mailto:contact@uncal-dt.com;'" class="btn btn-lg rounded-pill scrollLink me-5" style="background-color: #DC9750;color: white;">Contact Us</button>
            </div>
        </header>
    </div>

    {{ $slot }}

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <footer class="d-flex bg-dark text-light flex-wrap justify-content-between align-items-center py-3 mt-4">
        <div class="col-md-4 mb-0 d-flex align-items-center" style="margin-right: 3rem;">
            <div class="col-1 d-inline-flex d-flex align-items-center ms-3"><img src="{{ asset('Assets/Website/media/UNCAL BARU 8 (LOGO).PNG') }}" alt="" style="max-width: 50px;max-width: 50px;"></div>
            <div class="col-9 d-inline-flex d-flex align-items-center"><h5 id="popsb" style="color: white;">PT. UNCAL Digital Technology</h5></div>
        </div>

        <p class="mt-3">Copyright &copy; 2023 by Uncal Digital Technology All rights reserved</p>

        <ul class="list-unstyled d-flex ms-auto p-2 me-3">
            <li class="ms-3"><a class="btn text-light btn-lg btn-floating" href="https://www.instagram.com/uncaldt/" role="button" style="background-color: #DC9750;"><i class="fab fa-instagram fa-2x"></i></a></li>
            <li class="ms-3"><a class="btn text-light btn-lg btn-floating" href="https://twitter.com/UncalDt" role="button" style="background-color: #DC9750;"><i class="fab fa-twitter fa-2x"></i></a></li>
            <li class="ms-3"><a class="btn text-light btn-lg btn-floating" href="https://www.linkedin.com/company/uncal-digital-technology/" role="button" style="background-color: #DC9750;"><i class="fab fa-linkedin-in fa-2x"></i></a></li>
            <li class="ms-3"><a class="btn text-light btn-lg btn-floating" href="https://www.youtube.com/channel/UCFNlKyy25thdco-xCOeCEiA" role="button" style="background-color: #DC9750;"><i class="fab fa-youtube fa-2x"></i></a></li>
        </ul>
    </footer>

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- MDB JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script>
    <script src="https://unpkg.com/split-type"></script>
    <!-- gsap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    <!-- Vendor JS Files -->
    <script src="{{ asset('Assets/Website/aos/aos.js') }}"></script>
    <!-- Script JS -->
    <script src="{{ asset('Assets/Website/js/scripts.js') }}"></script>
    <script>
        // Generate a random captcha string
        function generateCaptcha() {
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            const captchaLength = 6;
            let captcha = '';
            for (let i = 0; i < captchaLength; i++) {
                const randomIndex = Math.floor(Math.random() * characters.length);
                captcha += characters[randomIndex];
            }
            return captcha;
        }

        let generatedCaptcha = ''; // Variabel global untuk menyimpan teks captcha yang dihasilkan

        function drawCaptcha() {
            const canvas = document.getElementById('captchaCanvas');
            const context = canvas.getContext('2d');
            context.clearRect(0, 0, canvas.width, canvas.height);

            // Menambahkan latar belakang berwarna putih
            context.fillStyle = '#EEEEEE';
            context.fillRect(0, 0, canvas.width, canvas.height);

            generatedCaptcha = generateCaptcha(); // Simpan teks captcha yang dihasilkan

            // Customize the appearance of the captcha on the canvas
            context.font = '24px Arial';
            context.fillStyle = 'black';
            context.fillText(generatedCaptcha, 50, 30);

            // Store the captcha text in a hidden input field for validation
            document.getElementById('captchaInput').value = generatedCaptcha;
        }


        // Call the drawCaptcha function when the page loads
        window.addEventListener('load', drawCaptcha);

        document.querySelector('form').addEventListener('submit', function(event) {
            event.preventDefault();
            const userCaptcha = document.getElementById('captcha').value; // Ambil teks captcha yang dimasukkan oleh pengguna

            // Bandingkan teks captcha pengguna dengan teks captcha yang dihasilkan
            if (userCaptcha === generatedCaptcha) {
                // Captcha valid, lanjutkan untuk mengirim formulir
                this.submit(); // Mengirim formulir
            } else {
                // Captcha tidak valid, tampilkan pesan kesalahan
                alert('Captcha tidak valid. Silakan coba lagi.');
                // Setelah verifikasi gagal, Anda dapat memanggil drawCaptcha() lagi untuk menghasilkan captcha baru.
                drawCaptcha();
                // Bersihkan input teks captcha
                document.getElementById('captcha').value = '';
            }
        });
    </script>
</body>
</html>
