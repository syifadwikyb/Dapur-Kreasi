<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<div class="container mx-auto h-full">
    <div class="justify-center">
        <div data-aos="zoom-in">
            <div class="hero">
                <div class="min-h-screen text-center flex items-center justify-center">
                    <div>
                        <h1 class="mb-3 font-bold text-2xl text-black">
                            Inspirasi Masakan Harian yang Praktis dan Lezat, <br>Temukan Resep Favorit Anda disini
                        </h1>
                        <p class="mb-8 font-bold text-xl text-black">
                            Masak Lebih Mudah dengan Panduan Resep yang Sederhana dan Nikmat
                        </p>
                        <div class="image">
                            <!-- Tambahkan gambar di sini -->
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <p class="pt-16" id="aboutme"></p>
        <div data-aos="zoom-in"
            class="tentang mt-10 flex dark:bg-slate-800 bg-white items-center rounded-lg lg:rounded-none">
            <img src="{{ asset('asset/tentang.svg') }}" class="hidden lg:h-full md:w-1/2 lg:w-1/2 lg:flex"
                alt="">
            <div class="text-black p-5 text-center lg:-ml-36 lg:mt-0 lg:text-left">
                <h1 class="font-bold pb-4 text-2xl md:text-3xl lg:text-4xl dark:text-orange-500">About me</h1>
                <p class="text-sm md:text-base lg:text-base dark:text-white text-justify">Selamat datang di Huaha! Kami
                    adalah platform inovatif yang memudahkan Anda dalam membuat website dengan cepat dan mudah. Di
                    Huaha, kami menyediakan berbagai alat dan fitur yang dirancang untuk membantu Anda menciptakan
                    website yang menarik dan fungsional tanpa memerlukan keterampilan teknis yang mendalam. Wujudkan
                    website impian Anda hari ini!</p>
            </div>
            <p id="keunggulan"></p>
        </div>

        <div data-aos="zoom-in" class="text-center mt-10 items-center rounded-lg lg:rounded-none">
            <h1 class="font-bold pb-4 text-2xl md:text-3xl lg:text-4xl dark:text-orange-500">Feature</h1>
            <p class="text-sm md:text-base lg:text-base dark:text-white">Fitur Unggulan yang Dirancang Khusus untuk
                Kebutuhan Anda</p>
            <div class="flex justify-center mx-5 mt-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 md:gap-8 lg:gap-24">
                    <div data-aos="zoom-in" data-aos-delay="0"
                        class="bg-slate-100 dark:bg-slate-800 dark:text-white p-3 md:p-4 lg:p-5 w-60 md:-70 lg:w-80 rounded-lg flex flex-col items-center shadow-xl">                        
                        <i class="fa-solid fa-eye w-6 md:w-7 lg:w-8 mb-4  dark:text-orange-500" style="transform: scale(1.5);"></i>
                        <p class="font-bold text-sm md:text-base lg:text-base text-center  dark:text-orange-500">Preview Langsung<br>
                            <span class="font-normal text-black dark:text-white">
                                Melihat hasil input gambar dan teks secara langsung tanpa perlu menyimpan terlebih dahulu.
                            </span>
                        </p>
                    </div>
                    <div data-aos="zoom-in" data-aos-delay="200"
                        class="bg-slate-100 dark:bg-slate-800 dark:text-white p-3 md:p-4 lg:p-5 w-60 md:-70 lg:w-80 rounded-lg flex flex-col items-center shadow-xl">                                               
                        <i class="fa-solid fa-hashtag w-6 md:w-7 lg:w-8 mb-4  dark:text-orange-500" style="transform: scale(1.5);"></i>
                        <p class="font-bold text-sm md:text-base lg:text-base text-center  dark:text-orange-500">Integrasi Media Sosial<br>
                            <span class="font-normal text-black dark:text-white">
                                Menyediakan fitur untuk menghubungkan dan menampilkan akun media sosial langsung di halaman Anda.
                            </span>
                        </p>
                    </div>
                    <div class="md:col-span-2 md:flex md:justify-center lg:col-span-1 lg:col-start-3">
                        <div data-aos="zoom-in" data-aos-delay="400"
                            class="bg-slate-100 dark:bg-slate-800 dark:text-white p-3 md:p-4 lg:p-5 w-60 md:-70 lg:w-80 rounded-lg flex flex-col items-center shadow-xl">
                            <i class="fa-solid fa-gear w-6 md:w-7 lg:w-8 mb-4  dark:text-orange-500" style="transform: scale(1.5);"></i>
                            <p class="font-bold text-sm md:text-base lg:text-base text-center  dark:text-orange-500">Kustomisasi Link<br>
                                <span class="font-normal text-black dark:text-white">
                                    Membuat dan mengelola tautan dinamis dengan mudah sesuai kebutuhan pengguna.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p class="pt-16" id="template"></p>
        <div data-aos="zoom-in" class="text-center pb-5">
            <h1 class="font-bold mt-10 pb-4 text-2xl md:text-3xl lg:text-4xl dark:text-orange-500">Template
            </h1>
            <p class="text-sm md:text-base lg:text-base dark:text-white">Jelajahi berbagai tata letak kami dan mulai
                buat website impian Anda sekarang!</p>
        </div>
        {{-- Slider --}}
        <div data-aos="zoom-in" class="flex justify-center max-h-screen mb-10">
            <div class="relative w-full sm:w-4/5 max-w-7xl overflow-hidden">
                <div class="flex transition-transform duration-500 ease-linear" id="slider-track">
                    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 flex-shrink-0 flex justify-center cursor-pointer">
                        <img src="{{ asset('asset/template1.png') }}" alt="Image1" class="w-28 md:w-1/2 lg:w-3/4">
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 flex-shrink-0 flex justify-center cursor-pointer">
                        <img src="{{ asset('asset/template2.png') }}" alt="Image2" class="w-28 md:w-1/2 lg:w-3/4">
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 flex-shrink-0 flex justify-center cursor-pointer">
                        <img src="{{ asset('asset/template3.png') }}" alt="Image3" class="w-28 md:w-1/2 lg:w-3/4">
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 flex-shrink-0 flex justify-center cursor-pointer">
                        <img src="{{ asset('asset/template4.png') }}" alt="Image4" class="w-28 md:w-1/2 lg:w-3/4">
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 flex-shrink-0 flex justify-center cursor-pointer">
                        <img src="{{ asset('asset/template5.png') }}" alt="Image5" class="w-28 md:w-1/2 lg:w-3/4">
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 flex-shrink-0 flex justify-center cursor-pointer">
                        <img src="{{ asset('asset/template6.png') }}" alt="Image6" class="w-28 md:w-1/2 lg:w-3/4">
                    </div>                
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@vite('resources/js/dropdown.js')
@vite('resources/js/slider.js')