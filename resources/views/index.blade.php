<!doctype html>
<html>

<head>
    <title>Pengenumroh - Marketplace Umroh dan Haji Khusus</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Montserrat:wght@400;600&display=swap"
        rel="stylesheet">

    {{-- Swiper Css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
            /* Smooth scrolling saat klik anchor link */
        }

        /* Warna bullet pagination */
        .swiper-pagination-bullet {
            background-color: #FFA500 !important;
            /* Warna orange */
            opacity: 0.5;
            transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
        }

        /* Warna bullet pagination yang aktif */
        .swiper-pagination-bullet-active {
            background-color: #FF8C00 !important;
            /* Warna orange yang lebih gelap */
            opacity: 1;
            transform: scale(1.2);
        }

        /* Efek hover untuk tombol */
        button,
        .btn {
            transition: all 0.3s ease-in-out;
        }

        button:hover,
        .btn:hover {
            transform: scale(1.05);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
        }

        /* Animasi smooth untuk elemen yang muncul saat scroll */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-in.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* Smooth hover effect untuk card */
        .card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Smooth scrolling untuk navbar */
        html {
            scroll-behavior: smooth;
        }
    </style>

</head>

<body>

    <!-- navbar -->

    <nav class="bg-white shadow-lg py-3">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div>
                    <a href="{{ route('/') }}" class="flex items-center py-4 px-2">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-40 mr-2">
                    </a>
                </div>

                <!-- Navbar Links (Desktop) -->
                <div class="hidden lg:flex flex-1 justify-center space-x-4">
                    <a href="{{ route('/') }}"
                        class="px-4 text-gray-700 font-semibold text-sm hover:text-orange-500 transition duration-300">Beranda</a>
                    <a href="{{ url('/#tentang') }}"
                        class="px-4 text-gray-700 font-semibold text-sm hover:text-orange-500 transition duration-300">Tentang</a>
                    <a href="{{ url('/#galeri') }}"
                        class="px-4 text-gray-700 font-semibold text-sm hover:text-orange-500 transition duration-300">Galeri</a>
                    <a href="{{ url('/#travel') }}"
                        class="px-4 text-gray-700 font-semibold text-sm hover:text-orange-500 transition duration-300">Travel</a>
                </div>

                <!-- CTA -->
                <div class="flex items-center space-x-6">

                    <!-- CTA -->
                    <a href="#"
                        class="hidden lg:block px-4 py-3 bg-orange-500 text-white rounded-lg font-semibold text-sm hover:bg-orange-600 transition duration-300">
                        Konsultasi Sekarang
                    </a>

                    <!-- Mobile Menu Button -->
                    <div class="lg:hidden flex items-center">
                        <button class="outline-none mobile-menu-button">
                            <svg class="w-6 h-6 text-gray-700 hover:text-orange-500 transition-transform duration-300 ease-in-out"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div
            class="hidden mobile-menu bg-white shadow-md transition-all duration-500 ease-in-out transform scale-95 opacity-0 -translate-y-5">
            <div class="flex flex-col space-y-3 py-4 px-6 text-left">
                <a href="{{ route('/') }}"
                    class="block py-2 text-gray-700 font-semibold text-sm hover:text-orange-500 transition duration-300">Beranda</a>
                <a href="{{ url('/#tentang') }}"
                    class="block py-2 text-gray-700 font-semibold text-sm hover:text-orange-500 transition duration-300">Tentang</a>
                <a href="{{ url('/#galeri') }}"
                    class="block py-2 text-gray-700 font-semibold text-sm hover:text-orange-500 transition duration-300">Galeri</a>
                <a href="{{ url('/#travel') }}"
                    class="block py-2 text-gray-700 font-semibold text-sm hover:text-orange-500 transition duration-300">Travel</a>
                <a href="#"
                    class="mt-4 px-4 py-3 bg-orange-500 text-white text-center rounded-lg font-semibold text-sm hover:bg-orange-600 transition duration-300 w-full">
                    Konsultasi Sekarang
                </a>
            </div>
        </div>
    </nav>

    {{-- End Navbar --}}

    {{-- Hero --}}

    <section class="relative bg-cover bg-center h-[70vh] flex items-center justify-center text-center text-white"
        style="background-image: url('{{ asset('images/kabah.png') }}');">
        <div class="bg-black bg-opacity-50 absolute inset-0"></div> <!-- Overlay -->

        <div class="relative z-10 px-6 md:px-12">
            <p class="text-sm md:text-base uppercase tracking-widest text-gray-200 mb-2 font-montserrat"
                style="font-family: Montserrat, sans-serif;">
                Travel Umroh Terbaik & Terpercaya
            </p>
            <h1 class="text-3xl md:text-5xl font-bold leading-tight">Selamat Datang di PengenUmroh.com</h1>
            <p class="mt-4 text-lg md:text-xl font-montserrat" style="font-family: Montserrat, sans-serif;">
                Memberikan pelayanan Terbaik demi Keamanan & Kenyamanan ibadah Anda dan Keluarga
            </p>
            <a href="#"
                class="mt-6 inline-block bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-300">
                Konsultasi Sekarang
            </a>
        </div>
    </section>

    {{-- End Hero --}}

    {{-- content --}}

    {{-- Iklan --}}

    {{-- <section class="w-full max-w-7xl mx-auto px-6 py-2 lg:py-8 mt-10">
        <!-- Swiper Carousel -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/iklan1.png') }}" alt="Iklan Produk 1"
                        class="w-full h-128 object-cover rounded-lg">
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/iklan2.png') }}" alt="Iklan Produk 2"
                        class="w-full h-128 object-cover rounded-lg">
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/iklan3.png') }}" alt="Iklan Produk 3"
                        class="w-full h-128 object-cover rounded-lg">
                </div>
            </div>

            <!-- Swiper Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section> --}}

    {{-- Kategori --}}

    {{-- <section class="max-w-7xl mx-auto px-6 py-12">

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Kategori 1 -->
            <a href="{{ route('reguler9') }}" class="group text-center block">
                <div class="relative overflow-hidden rounded-xl shadow-lg cursor-pointer">
                    <img src="{{ asset('images/kategori1.png') }}" alt="Umrah"
                        class="w-full h-auto transform group-hover:scale-110 transition duration-300 ease-in-out">
                </div>
                <h3 class="mt-4 text-lg font-semibold text-gray-800 group-hover:text-orange-500 transition">
                    Umroh Reguler 9 Hari
                </h3>
            </a>

            <!-- Kategori 2 -->
            <a href="{{ route('umrohwisata') }}" class="group text-center block">
                <div class="relative overflow-hidden rounded-xl shadow-lg cursor-pointer">
                    <img src="{{ asset('images/kategori1.png') }}" alt="Umrah"
                        class="w-full h-auto transform group-hover:scale-110 transition duration-300 ease-in-out">
                </div>
                <h3 class="mt-4 text-lg font-semibold text-gray-800 group-hover:text-orange-500 transition">
                    Umroh Plus Wisata
                </h3>
            </a>

            <!-- Kategori 3 -->
            <a href="{{ route('hajikhusus') }}" class="group text-center block">
                <div class="relative overflow-hidden rounded-xl shadow-lg cursor-pointer">
                    <img src="{{ asset('images/kategori1.png') }}" alt="Umrah"
                        class="w-full h-auto transform group-hover:scale-110 transition duration-300 ease-in-out">
                </div>
                <h3 class="mt-4 text-lg font-semibold text-gray-800 group-hover:text-orange-500 transition">
                    Haji Khusus
                </h3>
            </a>

            <!-- Kategori 4 -->
            <a href="{{ route('umrohramadhan') }}" class="group text-center block">
                <div class="relative overflow-hidden rounded-xl shadow-lg cursor-pointer">
                    <img src="{{ asset('images/kategori1.png') }}" alt="Umrah"
                        class="w-full h-auto transform group-hover:scale-110 transition duration-300 ease-in-out">
                </div>
                <h3 class="mt-4 text-lg font-semibold text-gray-800 group-hover:text-orange-500 transition">
                    Umroh Ramadhan
                </h3>
            </a>

            <!-- Kategori 5 -->
            <a href="{{ route('reguler12') }}" class="group text-center block">
                <div class="relative overflow-hidden rounded-xl shadow-lg cursor-pointer">
                    <img src="{{ asset('images/kategori1.png') }}" alt="Umrah"
                        class="w-full h-auto transform group-hover:scale-110 transition duration-300 ease-in-out">
                </div>
                <h3 class="mt-4 text-lg font-semibold text-gray-800 group-hover:text-orange-500 transition">
                    Umroh Reguler 12 Hari
                </h3>
            </a>
        </div>
    </section> --}}

    {{-- Tentang Kami --}}

    <section class="max-w-7xl mx-auto px-6 py-12" id="tentang">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <h1
                class="text-4xl font-extrabold leading-tight bg-gradient-to-r from-orange-500 to-yellow-400 text-transparent bg-clip-text">
                Kenapa Harus Kami?
            </h1>
            <p class="text-lg text-gray-700 mt-4 max-w-3xl mx-auto">
                Kami hadir untuk memberikan pengalaman perjalanan yang nyaman, aman, dan penuh kepastian dengan layanan
                terbaik.
            </p>
        </div>

        <!-- Points Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Point 1 -->
            <div
                class="relative group bg-white shadow-lg rounded-xl p-8 text-center overflow-hidden hover:shadow-xl transition-all duration-300">
                <div
                    class="flex justify-center items-center w-20 h-20 bg-orange-500 text-white rounded-full mx-auto shadow-lg transform group-hover:scale-110 transition duration-300">
                    <img src="{{ asset('images/tentang1.png') }}" alt="Jaminan Keberangkatan" class="w-12 h-12">
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mt-6">Jaminan Keberangkatan</h3>
                <p class="text-gray-600 mt-4 text-sm leading-relaxed">
                    Kepastian keberangkatan yang transparan. Jika ada kendala dari pihak kami, uang kembali 100%.
                </p>
                <div
                    class="absolute inset-x-0 bottom-0 h-1 bg-orange-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300">
                </div>
            </div>

            <!-- Point 2 -->
            <div
                class="relative group bg-white shadow-lg rounded-xl p-8 text-center overflow-hidden hover:shadow-xl transition-all duration-300">
                <div
                    class="flex justify-center items-center w-20 h-20 bg-blue-500 text-white rounded-full mx-auto shadow-lg transform group-hover:scale-110 transition duration-300">
                    <img src="{{ asset('images/tentang2.png') }}" alt="Kemudahan Layanan" class="w-12 h-12">
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mt-6">Layanan Praktis & Nyaman</h3>
                <p class="text-gray-600 mt-4 text-sm leading-relaxed">
                    Dari pembuatan paspor hingga perlengkapan perjalanan, kami siapkan semua untuk Anda.
                </p>
                <div
                    class="absolute inset-x-0 bottom-0 h-1 bg-blue-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300">
                </div>
            </div>

            <!-- Point 3 -->
            <div
                class="relative group bg-white shadow-lg rounded-xl p-8 text-center overflow-hidden hover:shadow-xl transition-all duration-300">
                <div
                    class="flex justify-center items-center w-20 h-20 bg-green-500 text-white rounded-full mx-auto shadow-lg transform group-hover:scale-110 transition duration-300">
                    <img src="{{ asset('images/tentang3.png') }}" alt="Travel Terpercaya" class="w-12 h-12">
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mt-6">Travel Resmi & Terpercaya</h3>
                <p class="text-gray-600 mt-4 text-sm leading-relaxed">
                    Semua travel partner kami telah memiliki izin resmi dan diawasi oleh lembaga terkait.
                </p>
                <div
                    class="absolute inset-x-0 bottom-0 h-1 bg-green-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300">
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-10 flex flex-col md:flex-row items-center gap-12">
        <!-- Left Content -->
        <div class="md:w-1/2 text-center md:text-left">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight">
                <span class="text-orange-500">Perjalanan Ibadah</span> yang
                <span class="bg-gradient-to-r from-orange-500 to-yellow-400 text-transparent bg-clip-text">
                    Nyaman & Terpercaya
                </span>
            </h1>
            <p class="text-gray-700 mt-4 text-lg leading-relaxed">
                Kami bekerja sama dengan berbagai <span class="font-semibold text-gray-900">maskapai penerbangan
                    terbaik</span>
                untuk memberikan pengalaman umroh dan haji yang aman dan nyaman.
                <span class="text-orange-600 font-semibold">Jadikan ibadah Anda lebih tenang</span> bersama kami!
            </p>
            <a href="#daftar"
                class="mt-6 inline-block bg-gradient-to-r from-orange-500 to-yellow-400 text-white text-lg font-semibold py-3 px-8 rounded-full shadow-lg hover:opacity-90 transition duration-300">
                Hubungi Kami
            </a>
        </div>

        <!-- Right Image -->
        <div class="md:w-1/2 flex justify-center md:justify-end">
            <img src="{{ asset('images/hero2.jpg') }}" alt="Perjalanan Umroh"
                class="w-full max-w-md rounded-xl shadow-lg">
        </div>
    </section>

    <!-- Airline Logos Section -->
    <div class="max-w-6xl mx-auto mt-12 mb-12 flex flex-wrap justify-center items-center gap-8">
        <img src="{{ asset('images/maskapai.png') }}" alt="Airline 1"
            class="h-16 opacity-80 hover:opacity-100 transition duration-300">
        <img src="{{ asset('images/maskapai.png') }}" alt="Airline 2"
            class="h-16 opacity-80 hover:opacity-100 transition duration-300">
        <img src="{{ asset('images/maskapai.png') }}" alt="Airline 3"
            class="h-16 opacity-80 hover:opacity-100 transition duration-300">
        <img src="{{ asset('images/maskapai.png') }}" alt="Airline 4"
            class="h-16 opacity-80 hover:opacity-100 transition duration-300">
        <img src="{{ asset('images/maskapai.png') }}" alt="Airline 5"
            class="h-16 opacity-80 hover:opacity-100 transition duration-300">
    </div>

    {{-- Galeri --}}

    <section class="max-w-7xl mx-auto px-6 py-12" id="galeri">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1
                    class="text-xl md:text-3xl font-bold bg-gradient-to-r from-orange-500 to-yellow-400 text-transparent bg-clip-text">
                    Galeri
                </h1>
                <p class="text-xs md:text-sm text-gray-700 mt-1">
                    Lihat pengalaman pelanggan kami yang puas dengan layanan terbaik.
                </p>
            </div>
            <a href="{{ route('galeritestimoni') }}"
                class="text-orange-500 font-semibold text-xs md:text-base hover:text-yellow-500 transition duration-300">
                Lihat Semua →
            </a>
        </div>


        <!-- Gallery Section -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Image 1 -->
            <div class="relative overflow-hidden rounded-lg shadow-lg">
                <img src="{{ asset('images/dummy.jpg') }}" alt="Testimoni 1"
                    class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
            </div>
            <!-- Image 2 -->
            <div class="relative overflow-hidden rounded-lg shadow-lg">
                <img src="{{ asset('images/dummy.jpg') }}" alt="Testimoni 2"
                    class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
            </div>
            <!-- Image 3 -->
            <div class="relative overflow-hidden rounded-lg shadow-lg">
                <img src="{{ asset('images/dummy.jpg') }}" alt="Testimoni 3"
                    class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
            </div>
            <!-- Image 4 -->
            <div class="relative overflow-hidden rounded-lg shadow-lg">
                <img src="{{ asset('images/dummy.jpg') }}" alt="Testimoni 4"
                    class="w-full h-full object-cover hover:scale-110 transition-transform duration-300">
            </div>
        </div>
    </section>

    <!-- Testimoni Section -->
    <section class="max-w-7xl mx-auto px-6 py-12">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h2
                    class="text-3xl font-bold bg-gradient-to-r from-orange-500 to-yellow-400 text-transparent bg-clip-text">
                    Apa Kata Mereka?
                </h2>
                <p class="text-gray-700 text-sm md:text-base mt-1">
                    Testimoni dari pelanggan yang telah merasakan layanan terbaik kami.
                </p>
            </div>
            <a href="{{ route('galeritestimoni') }}"
                class="text-orange-500 font-semibold text-sm md:text-base hover:text-yellow-500 transition duration-300">
                Lihat Semua →
            </a>
        </div>

        <!-- Testimoni List -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Testimoni Card -->
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200">
                <div class="flex items-center gap-4 mb-4">
                    <img src="{{ asset('images/user1.jpg') }}" alt="User" class="w-12 h-12 rounded-full border">
                    <div>
                        <h3 class="font-semibold text-gray-900">Ahmad Fauzan</h3>
                        <p class="text-sm text-gray-500">Jamaah Umroh</p>
                    </div>
                </div>
                <p class="text-gray-700 text-sm leading-relaxed">
                    "Pelayanan yang sangat memuaskan! Semua fasilitas nyaman, dan perjalanan ibadah jadi lebih khusyuk."
                </p>
            </div>

            <!-- Testimoni Card -->
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200">
                <div class="flex items-center gap-4 mb-4">
                    <img src="{{ asset('images/user2.jpg') }}" alt="User" class="w-12 h-12 rounded-full border">
                    <div>
                        <h3 class="font-semibold text-gray-900">Siti Rahma</h3>
                        <p class="text-sm text-gray-500">Jamaah Haji</p>
                    </div>
                </div>
                <p class="text-gray-700 text-sm leading-relaxed">
                    "Pengalaman luar biasa! Proses keberangkatan cepat dan tanpa kendala, benar-benar travel
                    terpercaya."
                </p>
            </div>

            <!-- Testimoni Card -->
            <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-200">
                <div class="flex items-center gap-4 mb-4">
                    <img src="{{ asset('images/user3.jpg') }}" alt="User" class="w-12 h-12 rounded-full border">
                    <div>
                        <h3 class="font-semibold text-gray-900">Budi Santoso</h3>
                        <p class="text-sm text-gray-500">Jamaah Umroh</p>
                    </div>
                </div>
                <p class="text-gray-700 text-sm leading-relaxed">
                    "Harga terjangkau dengan pelayanan maksimal! Saya sangat puas dan pasti akan merekomendasikan."
                </p>
            </div>
        </div>
    </section>

    {{-- Travel --}}

    <section class="max-w-7xl mx-auto px-6 py-12 mb-8" id="travel">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1
                    class="text-xl md:text-3xl font-bold bg-gradient-to-r from-orange-500 to-yellow-400 text-transparent bg-clip-text">
                    Mitra Travel Kami
                </h1>
                <p class="text-xs md:text-sm text-gray-700 mt-1">
                    Kami bekerja sama dengan berbagai travel terpercaya untuk perjalanan terbaik Anda.
                </p>
            </div>
            <a href="{{ route('mitratravel') }}"
                class="text-orange-500 font-semibold text-xs md:text-base hover:text-yellow-500 transition duration-300">
                Lihat Semua →
            </a>
        </div>

        <!-- Travel Vendor List -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Travel 1 -->
            <a href="{{ route('haramainku') }}"
                class="bg-white shadow-lg rounded-lg p-4 flex flex-col items-center hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('images/travel1.png') }}" alt="Travel 1" class="w-20 h-20 object-cover mb-3">
                <h2 class="text-lg font-semibold text-gray-800">HaramainKU</h2>
                <div class="flex mt-2">⭐⭐⭐⭐⭐</div>
            </a>

            <!-- Travel 2 -->
            <div
                class="bg-white shadow-lg rounded-lg p-4 flex flex-col items-center hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('images/travel2.png') }}" alt="Travel 2" class="w-20 h-20 object-cover mb-3">
                <h2 class="text-lg font-semibold text-gray-800">Elmarwa Travel</h2>
                <div class="flex mt-2">
                    ⭐⭐⭐⭐☆
                </div>
            </div>

            <!-- Travel 3 -->
            <div
                class="bg-white shadow-lg rounded-lg p-4 flex flex-col items-center hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('images/travel3.png') }}" alt="Travel 3" class="w-20 h-20 object-cover mb-3">
                <h2 class="text-lg font-semibold text-gray-800">Uhud Tour</h2>
                <div class="flex mt-2">
                    ⭐⭐⭐⭐⭐
                </div>
            </div>

            <!-- Travel 4 -->
            <div
                class="bg-white shadow-lg rounded-lg p-4 flex flex-col items-center hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('images/travel4.png') }}" alt="Travel 4" class="w-20 h-20 object-cover mb-3">
                <h2 class="text-lg font-semibold text-gray-800">Arsy Tour</h2>
                <div class="flex mt-2">
                    ⭐⭐⭐⭐☆
                </div>
            </div>

            <!-- Travel 5 -->
            <div
                class="bg-white shadow-lg rounded-lg p-4 flex flex-col items-center hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('images/travel5.png') }}" alt="Travel 4" class="w-20 h-20 object-cover mb-3">
                <h2 class="text-lg font-semibold text-gray-800">Namira Travel</h2>
                <div class="flex mt-2">
                    ⭐⭐⭐⭐⭐
                </div>
            </div>
        </div>
    </section>

    {{-- End Content --}}

    {{-- Karir --}}
    <section class="max-w-8xl mx-auto px-4 py-12 text-center bg-gradient-to-r from-orange-500 to-orange-400 shadow-lg">
        <h2 class="text-2xl md:text-3xl font-bold text-white drop-shadow-md">
            🚀 Lowongan Kerja di PengenUmroh.com
        </h2>
        <p class="mt-4 text-white text-base md:text-lg max-w-2xl mx-auto leading-relaxed">
            Bergabunglah dengan tim kami dan kembangkan karir yang luar biasa!
        </p>

        <div class="mt-6">
            <a href="https://karir.pengenumroh.com/"
                class="inline-flex items-center px-6 py-2 bg-white text-orange-600 text-base font-semibold rounded-full shadow-md hover:bg-orange-100 transition duration-300 ease-in-out transform hover:scale-105">
                ✨ Apply Sekarang
            </a>
        </div>
    </section>

    {{-- Footer --}}

    <footer class="bg-[#111723] text-white dark:bg-[#111723]">
        <div class="container px-6 py-6 mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8">
                <!-- Bagian Logo dan Deskripsi -->
                <div class="pl-4 lg:pl-8 text-center lg:text-left">
                    <a href="#">
                        <img class="w-auto h-10 mx-auto lg:mx-0" src="{{ asset('images/logo.png') }}"
                            alt="">
                    </a>
                    <p class="max-w-sm mt-2 text-white mx-auto lg:mx-0">
                        PengenUmroh merupakan marketplace umroh dan haji khusus yang membantu Anda untuk menemukan dan
                        mendapatkan pelayanan dari travel - travel amanah dan terpercaya.
                    </p>
                </div>

                <!-- Bagian Informasi Kontak, Privacy Policy, dan Join -->
                <div class="lg:col-span-2 flex flex-col items-center lg:flex-row lg:justify-between">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 w-full text-center lg:text-left">
                        <div>
                            <h3 class="uppercase">Informasi Kontak</h3>
                            <p class="block mt-2 text-sm text-white">
                                Wisma Haramain, Jl. Mahoni Raya No.13, Kel. Baktijaya, Kec. Sukmajaya, Kota Depok
                            </p>
                            <div class="flex flex-col items-center lg:items-start">
                                <button onclick="window.location.href='tel:0811917988'"
                                    class="block mt-2 text-sm text-white hover:underline focus:outline-none">
                                    0811-917-988
                                </button>
                                <button onclick="window.location.href='mailto:cs@pengenumroh.com'"
                                    class="block mt-2 text-sm text-white hover:underline focus:outline-none">
                                    cs@pengenumroh.com
                                </button>
                            </div>
                        </div>

                        <div>
                            <h3 class="uppercase">Privacy & Policy</h3>
                            <a href="#" class="block mt-2 text-sm text-white hover:underline">
                                Terms & Conditions
                            </a>
                            <a href="#" class="block mt-2 text-sm text-white hover:underline">
                                Support Policy
                            </a>
                            <a href="#" class="block mt-2 text-sm text-white hover:underline">
                                Privacy Policy
                            </a>
                        </div>

                        <div class="flex flex-col items-center">
                            <h3 class="uppercase">Join Mitra Travel</h3>
                            <button onclick="window.location.href='#'"
                                class="mt-2 text-sm text-white bg-orange-500 hover:bg-orange-600 px-6 py-2 rounded-md focus:outline-none">
                                Bergabung Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="h-px my-6 bg-gray-500 border-none">

            <div>
                <p class="text-center text-white">©2025 PengenUmroh.com - All rights reserved</p>
            </div>
        </div>
    </footer>

    {{-- End Footer --}}

</body>

{{-- Script --}}
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- JavaScript for Mobile Menu & Cart -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuBtn = document.querySelector(".mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");
        const cartBtn = document.getElementById("cartButton");
        const cartDropdown = document.getElementById("cartDropdown");

        // Toggle Mobile Menu
        if (menuBtn && menu) {
            menuBtn.addEventListener("click", () => {
                if (menu.classList.contains("hidden")) {
                    menu.classList.remove("hidden");
                    setTimeout(() => {
                        menu.classList.remove("opacity-0", "scale-95", "-translate-y-5");
                        menu.classList.add("opacity-100", "scale-100", "translate-y-0");
                    }, 10);
                } else {
                    menu.classList.remove("opacity-100", "scale-100", "translate-y-0");
                    menu.classList.add("opacity-0", "scale-95", "-translate-y-5");
                    setTimeout(() => {
                        menu.classList.add("hidden");
                    }, 300);
                }
            });
        }

        // Toggle Cart Dropdown
        if (cartBtn && cartDropdown) {
            cartBtn.addEventListener("click", () => {
                cartDropdown.classList.toggle("hidden");
            });
        }
    });
</script>

<!-- Swiper JS -->
<script>
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>

</html>
