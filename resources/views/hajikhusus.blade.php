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

                <!-- Search Bar -->
                <div class="hidden lg:flex flex-1 mx-6">
                    <input type="text" placeholder="Cari produk..."
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                </div>

                <!-- Navbar Links (Desktop) -->
                <div class="hidden lg:flex justify-center items-center space-x-6">
                    <a href="{{ route('/') }}"
                        class="py-4 px-2 text-gray-700 font-semibold text-sm hover:text-orange-500 transition duration-300">Beranda</a>
                    <a href="{{ url('/#produk') }}"
                        class="py-4 px-2 text-gray-700 font-semibold text-sm hover:text-orange-500 transition duration-300">Produk</a>
                    <a href="{{ url('/#tentang') }}"
                        class="py-4 px-2 text-gray-700 font-semibold text-sm hover:text-orange-500 transition duration-300">Tentang</a>
                    <a href="{{ url('/#galeri') }}"
                        class="py-4 px-2 text-gray-700 font-semibold text-sm hover:text-orange-500 transition duration-300">Galeri</a>
                    <a href="{{ url('/#travel') }}"
                        class="py-4 px-2 text-gray-700 font-semibold text-sm hover:text-orange-500 transition duration-300">Travel</a>
                </div>

                <!-- Keranjang & CTA -->
                <div class="flex items-center space-x-6 ml-8">
                    <!-- Keranjang -->
                    <div class="relative flex items-center">
                        <button id="cartButton" class="relative text-gray-700 hover:text-orange-500 transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l3.4-6H6.6m-2.2 6a2 2 0 100 4 2 2 0 000-4zm12 0a2 2 0 100 4 2 2 0 000-4z">
                                </path>
                            </svg>
                            <span id="cartCount"
                                class="absolute -top-2 -right-2 bg-orange-500 text-white text-xs w-5 h-5 flex items-center justify-center rounded-full">0</span>
                        </button>
                        <!-- Dropdown Keranjang -->
                        <div id="cartDropdown"
                            class="hidden absolute right-0 mt-32 w-64 bg-white shadow-lg rounded-lg p-4 z-50">
                            <h2 class="text-lg font-semibold text-gray-800">Keranjang</h2>
                            <p class="text-gray-600 text-sm mt-2">Keranjang belanja masih kosong.</p>
                        </div>
                    </div>

                    <!-- CTA -->
                    <a href="#"
                        class="hidden lg:block px-3 py-3 bg-orange-500 text-white rounded-lg font-semibold text-sm hover:bg-orange-600 transition duration-300">Konsultasi
                        Sekarang</a>

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
                <input type="text" placeholder="Cari produk..."
                    class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 w-full">
                <a href="{{ route('/') }}"
                    class="block py-2 text-gray-700 font-semibold text-sm hover:text-orange-500 transition duration-300">Beranda</a>
                <a href="{{ url('/#produk') }}"
                    class="block py-2 text-gray-700 font-semibold text-sm hover:text-orange-500 transition duration-300">Produk</a>
                <a href="{{ url('/#tentang') }}"
                    class="block py-2 text-gray-700 font-semibold text-sm hover:text-orange-500 transition duration-300">Tentang</a>
                <a href="{{ url('/#galeri') }}"
                    class="block py-2 text-gray-700 font-semibold text-sm hover:text-orange-500 transition duration-300">Galeri</a>
                <a href="{{ url('/#travel') }}"
                    class="block py-2 text-gray-700 font-semibold text-sm hover:text-orange-500 transition duration-300">Travel</a>
                <a href="#"
                    class="mt-4 px-4 py-3 bg-orange-500 text-white text-center rounded-lg font-semibold text-sm hover:bg-orange-600 transition duration-300 w-full">Konsultasi
                    Sekarang</a>
            </div>
        </div>
    </nav>

    {{-- End Navbar --}}

    {{-- Hero --}}

    {{-- <section class="relative bg-cover bg-center h-[70vh] flex items-center justify-center text-center text-white"
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
    </section> --}}

    {{-- End Hero --}}

    {{-- content --}}

    {{-- Iklan --}}

    <section class="w-full max-w-7xl mx-auto px-6 py-2 lg:py-8 mt-10">
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
    </section>

    {{-- Produk --}}

    <section class="max-w-7xl mx-auto px-4 py-8 mb-12" id="produk">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-xl md:text-3xl font-bold text-gray-900">Haji Khusus</h1>
                <p class="text-xs md:text-sm text-gray-600 mt-1">Temukan produk terbaik kami dengan kualitas terbaik.
                </p>
            </div>
        </div>

        <!-- Product Cards -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

            <!-- Card -->
            <a href="{{ route('produk') }}" class="block no-underline text-inherit">
                <div
                    class="bg-white shadow-md rounded-lg overflow-hidden transform hover:scale-[1.03] transition duration-300">
                    <img src="{{ asset('images/produk1.jpg') }}" alt="Produk 1"
                        class="w-full h-32 md:h-48 object-cover">
                    <div class="p-3 md:p-4">
                        <!-- Nama Paket -->
                        <h3 class="text-xs md:text-base font-semibold text-gray-800">Paket Haji Spesial</h3>

                        <!-- Nama Hotel & Bintang -->
                        <div class="flex flex-wrap items-center text-[10px] md:text-sm text-gray-600 mt-1 md:mt-2">
                            <span class="font-medium">Hotel:</span>
                            <span class="ml-1 text-gray-800 font-semibold">Makkah Tower</span>
                            <span class="ml-2 text-yellow-400">⭐⭐⭐⭐</span>
                        </div>

                        <!-- Maskapai -->
                        <div class="flex items-center mt-1 md:mt-2">
                            <span class="text-[10px] md:text-sm text-gray-600 font-medium">Maskapai:</span>
                            <img src="{{ asset('images/maskapai.png') }}" alt="Garuda Indonesia"
                                class="w-8 md:w-12 h-4 md:h-6 ml-2">
                        </div>

                        <!-- Informasi Kecil -->
                        <div class="flex flex-wrap justify-start md:justify-center gap-1 md:gap-2 mt-2 md:mt-3">
                            <span
                                class="bg-gray-100 text-[10px] md:text-xs text-gray-700 px-3 py-[4px] rounded-full text-center">Haji</span>
                            <span
                                class="bg-gray-100 text-[10px] md:text-xs text-gray-700 px-3 py-[4px] rounded-full text-center">9
                                Hari</span>
                            <span
                                class="bg-gray-100 text-[10px] md:text-xs text-gray-700 px-3 py-[4px] rounded-full text-center">Termasuk
                                Visa</span>
                        </div>

                        <!-- Harga -->
                        <p
                            class="text-sm md:text-lg font-extrabold bg-gradient-to-r from-orange-500 to-red-500 text-transparent bg-clip-text mt-3 md:mt-4">
                            Rp 212.000.000
                        </p>
                    </div>
                </div>
            </a>

        </div>
    </section>

    {{-- End Content --}}

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
