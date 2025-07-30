<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Dapurku</title>
</head>
<body>
    <!-- Modal Login/Register -->   
    <div id="authModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative">

            <!-- Close button -->
            <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-500 hover:text-red-600 text-xl font-bold">&times;</button>

            <!-- Form Login -->
            <div id="loginForm">
                <h2 class="text-2xl font-bold mb-4 text-center">Login</h2>
                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf
                    <input type="email" name="email" placeholder="Email" class="w-full border px-3 py-2 rounded" required>
                    <input type="password" name="password" placeholder="Password" class="w-full border px-3 py-2 rounded" required>
                    <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-white py-2 rounded">Login</button>
                </form>
                <p class="text-sm text-center mt-4">Belum punya akun? 
                    <a href="#" onclick="showRegister()" class="text-yellow-600 font-semibold hover:underline">Daftar</a>
                </p>
            </div>

            <!-- Form Register -->
            <div id="registerForm" class="hidden">
                <h2 class="text-2xl font-bold mb-4 text-center">Register</h2>
                <form method="POST" action="{{ route('register') }}" class="space-y-4">
                    @csrf
                    <input type="text" name="name" placeholder="Nama Lengkap" class="w-full border px-3 py-2 rounded" required>
                    <input type="email" name="email" placeholder="Email" class="w-full border px-3 py-2 rounded" required>
                    <input type="password" name="password" placeholder="Password" class="w-full border px-3 py-2 rounded" required>
                    <input type="password" name="password_confirmation" placeholder="Ulangi Password" class="w-full border px-3 py-2 rounded" required>
                    <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-white py-2 rounded">Daftar</button>
                </form>
                <p class="text-sm text-center mt-4">Sudah punya akun? 
                    <a href="#" onclick="showLogin()" class="text-yellow-600 font-semibold hover:underline">Login</a>
                </p>
            </div>

        </div>
    </div>

    <!-- Navigasi Bar -->
    <nav class="flex justify-between items-center p-4 fixed top-0 left-0 right-0 border-b-1 border-black bg-[rgba(20,20,20,0.8)] text-white z-50">
        <p class="italic font-bold text-2xl">Dapurku</p>
        <div class="inline-block space-x-4 mx-4 my-0 text-base font-sans">
            <a href="#home" class="nav-link link-underline" data-target="home">Beranda</a>
            <a href="#about" class="nav-link link-underline" data-target="about">About</a>
            <a href="#menu" class="nav-link link-underline" data-target="menu">Menu</a>
            <a href="#" onclick="openModal()" class="nav-link link-underline">Login</a>
        </div>
    </nav>

    <!-- Tampilan Utama -->
    <section class="relative bg-gradient-to-br from-yellow-50 to-white dark:from-gray-800 dark:to-gray-900 min-h-screen pb-32" id="home">
        <!-- Optional Overlay -->
        <div class="absolute inset-0 bg-white/30 dark:bg-black/30 backdrop-blur-sm z-0"></div>

        <div class="relative z-10 grid place-items-center text-center max-w-screen-xl px-4 py-32 mx-auto lg:grid-cols-12 lg:gap-8 xl:gap-0 lg:py-32">
            <div class="mr-auto place-self-center lg:col-span-7 text-center lg:text-left pt-20 pl-8">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white text-gray-900 drop-shadow-md transition duration-500 ease-in-out">
                    Selamat datang di <span class="text-yellow-500 dark:text-yellow-400">Dapurku</span>
                </h1>
                <p class="max-w-2xl mb-6 font-light text-gray-700 dark:text-gray-300 drop-shadow-sm md:text-lg lg:text-xl">
                    Menu spesial rumahan, rasa bintang lima.
                </p>
                <a href="#menu" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-yellow-500 rounded-lg hover:bg-yellow-600 shadow-lg transform hover:scale-105 transition duration-300 focus:ring-4 focus:ring-yellow-300 dark:focus:ring-yellow-900">
                    Lihat Menu
                </a>
            </div>

            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex pr-8 pt-12">
                <img src="/img/dapurku.jpg" alt="mockup" class="rounded-xl drop-shadow-2xl transform hover:scale-105 transition duration-300">
            </div>
        </div>
    </section>



    <!-- Tentang Kami -->
    <section class="bg-white py-16" id="about">
        <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="800" data-aos-once="false" class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-center pb-22 pt-20">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <img src="/img/about.jpg" alt="Tentang Kami" class="rounded-2xl shadow-lg w-full transform hover:scale-105 transition duration-300">
            </div>
                <div class="md:w-1/2 md:pl-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Tentang Dapurku</h2>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Dapurku adalah tempat terbaik untuk menikmati masakan rumahan yang sehat, lezat, dan penuh cinta. Sejak 2020, kami telah melayani ratusan pelanggan dengan resep autentik yang kekinian.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Kami berkomitmen menggunakan bahan segar setiap hari dan menjaga kualitas rasa di setiap sajian kami.
                    </p>
                    <div class="flex items-center space-x-6 mt-6 text-center justify-left">
                        <div>
                            <h3 class="text-2xl font-bold text-yellow-500">3+</h3>
                            <p class="text-gray-600">Tahun Melayani</p>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-yellow-500">500+</h3>
                            <p class="text-gray-600">Pelanggan Puas</p>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-yellow-500">100%</h3>
                            <p class="text-gray-600">Bahan Segar</p>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <!-- Menu -->
    <section id="menu" class="bg-white py-16">
        <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="800" class="max-w-7xl mx-auto px-4 text-center pt-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Menu Kami</h2>
            <p class="text-gray-600 mb-10 pt-0">
                Pilih kategori makanan favoritmu
            </p>

            <!-- Filter Buttons -->
            <div class="flex flex-wrap justify-center gap-4 mb-10">
                <button class="filter-btn px-4 py-2 bg-yellow-500 text-white rounded-full hover:bg-yellow-600 active" data-category='all'>Semua</button>
                <button class="filter-btn px-4 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-yellow-500 hover:text-white" data-category='makanan'>Makanan</button>
                <button class="filter-btn px-4 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-yellow-500 hover:text-white" data-category="minuman">Minuman</button>
                <button class="filter-btn px-4 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-yellow-500 hover:text-white" data-category="cemilan">Cemilan</button>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <!-- Menu 1 -->
                <div class="menu-item min-h-[500px] transition-all duration-300 ease-in-out transform scale-100 opacity-100 bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg hover:scale-105 will-change-transform" data-category="cemilan">
                    <img src="/img/dimsum.jpg" alt="Dimsum" class="rounded-lg mb-4 w-full h-56 object-cover transition duration-300">
                    <h3 class="text-xl font-semibold text-gray-800">Dimsum Original</h3>
                    <p class="text-gray-600 mt-2">Dengan telur, ayam suwir, dan bumbu rempah pilihan.</p>
                    <p class="text-yellow-500 font-bold mt-3 text-lg">Rp12.000/4 pcs</p>
                </div>

                <!-- Menu 2 -->
                <div class="menu-item transition-all duration-300 ease-in-out transform scale-100 opacity-100 bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg hover:scale-105" data-category="makanan">
                    <img src="/img/salad.jpg" alt="Salad Buah" class="rounded-lg mb-4 w-full h-56 object-cover">
                    <h3 class="text-xl font-semibold text-gray-800">Salad Buah</h3>
                    <p class="text-gray-600 mt-2">Dingin, gurih, segar dari berbagai buah (Melon, Stoberi, Kiwi, Semangka dll).</p>
                    <p class="text-yellow-500 font-bold mt-3 text-lg">Rp15.000/cup</p>
                </div>

                <!-- Menu 3 -->
                <div class="menu-item transition-all duration-300 ease-in-out transform scale-100 opacity-100 bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg hover:scale-105" data-category="makanan">
                    <img src="/img/zupa.jpg" alt="Puyo" class="rounded-lg mb-4 w-full h-56 object-cover">
                    <h3 class="text-xl font-semibold text-gray-800">Zuppa Soup</h3>
                    <p class="text-gray-600 mt-2">Dengan soup yang hangat, beberapa slice daging ayam dan jagung serta roti pastry yang krispi.</p>
                    <p class="text-yellow-500 font-bold mt-3 text-lg">Rp15.000</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-10">
        <div class="max-w-screen-xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Logo dan Deskripsi -->
            <div>
            <h2 class="text-2xl font-bold mb-2">Dapurku</h2>
            <p class="text-gray-400 text-sm">Menu rumahan berkualitas, rasa bintang lima untuk keluarga Anda.</p>
            </div>

            <!-- Navigasi -->
            <div>
            <h3 class="text-xl font-semibold mb-3">Navigasi</h3>
            <ul class="space-y-2 text-gray-400 text-sm">
                <li><a href="#home" class="hover:text-yellow-500">Beranda</a></li>
                <li><a href="#about" class="hover:text-yellow-500">Tentang Kami</a></li>
                <li><a href="#menu" class="hover:text-yellow-500">Menu</a></li>
                <li><a href="#pesan" class="hover:text-yellow-500">Pesan</a></li>
            </ul>
            </div>

            <!-- Kontak -->
            <div>
            <h3 class="text-xl font-semibold mb-3">Kontak</h3>
            <p class="text-gray-400 text-sm">Jl. Contoh Alamat No. 123<br>Kota Makanan, 12345</p>
            <p class="text-gray-400 text-sm">Email: info@dapurku.com</p>
            <p class="text-gray-400 text-sm">Telp: +62821-1662-7234</p>
            </div>

        </div>

        <div class="border-t border-gray-700 mt-10 pt-4 text-center text-sm text-gray-500">
            &copy; 2025 Dapurku. All rights reserved.
        </div>
    </footer>

</body>
</html>