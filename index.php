<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Game Store</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.core.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.theme.min.css" rel="stylesheet" />
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/glide.min.js"></script>
    <script
        src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1"></script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#000000"
        data-border-radius="small"></script>
</head>

<body class="bg-gradient-to-br from-black via-purple-950 to-black min-h-screen font-[Poppins] text-white">
    <nav class="fixed top-0 w-full z-50 bg-black/30 backdrop-blur-md shadow-lg rounded-b-3xl border-b border-purple-800">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <img class="h-12 w-auto" src="image/logo.png" alt="Logo" />
            <div class="space-x-8 text-white/80">
                <a href="#" class="hover:text-purple-400">Beranda</a>
                <a href="#products" class="hover:text-purple-400">Produk</a>
                <a href="#why-us" class="hover:text-purple-400">Mengapa Kami</a>
                <a href="#team" class="hover:text-purple-400">Tim</a>
                <a href="#showcase" class="hover:text-purple-400">Galeri</a>
                <a href="#contact" class="hover:text-purple-400">Kontak</a>
            </div>
        </div>
    </nav>

    <header class="pt-32 pb-20 text-center">
        <div class="max-w-7xl mx-auto px-6">
            <h1 class="text-6xl font-extrabold text-purple-300 drop-shadow-lg mb-6">Tingkatkan Performa Game Anda dengan RXC TEAM CHEATS</h1>
            <p class="text-2xl text-purple-200 mb-8">Solusi terbaik untuk meningkatkan gameplay Anda dengan tools premium dan dukungan 24/7.</p>
            <a href="https://wa.me/62822589970782" target="_blank" class="inline-block px-10 py-4 text-lg font-semibold bg-purple-600 rounded-full shadow-xl hover:scale-105 transition">Mulai Berlangganan</a>
        </div>
    </header>

    <section id="products" class="py-20 bg-gradient-to-br from-black via-purple-950 to-black">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl font-bold text-center text-purple-300 mb-12">Our Products</h2>
        <!-- Product Options -->
        <div class="flex justify-center mb-8 space-x-4">
            <button onclick="showProducts('monthly')" class="px-6 py-3 bg-purple-800 text-white rounded-lg shadow-md hover:bg-purple-900 transition">ANDROID</button>
            <button onclick="showProducts('quarterly')" class="px-6 py-3 bg-purple-800 text-white rounded-lg shadow-md hover:bg-purple-900 transition">IPHONE</button>
            <button onclick="showProducts('annual')" class="px-6 py-3 bg-purple-800 text-white rounded-lg shadow-md hover:bg-purple-900 transition">EMULATOR</button>
        </div>
        <!-- Product Listings -->
        <div id="monthlyProducts" class="p-6 bg-black/50 rounded-lg shadow-xl">
            <?php include 'android.php'; ?>
        </div>
        <div id="quarterlyProducts" class="hidden p-6 bg-black/50 rounded-lg shadow-xl">
            <?php include 'ios.php'; ?>
        </div>
        <div id="annualProducts" class="hidden p-6 bg-black/50 rounded-lg shadow-xl">
            <?php include 'emu.php'; ?>
        </div>
    </div>
</section>
<section id="why-us" class="py-20 bg-black/40 backdrop-blur-md">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-4xl font-bold text-center text-purple-300 mb-12">Mengapa Memilih Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center bg-purple-900/20 p-8 rounded-xl shadow-xl backdrop-blur-md hover:scale-105 hover:bg-purple-900/30 transition duration-300">
                <i class="fas fa-lock text-5xl text-purple-400 mb-4"></i>
                <h3 class="text-2xl font-semibold text-white">Pembayaran Aman</h3>
                <p class="text-gray-300">Didukung oleh berbagai metode pembayaran terpercaya dengan enkripsi tingkat lanjut untuk memastikan keamanan transaksi Anda.</p>
            </div>
            <div class="text-center bg-purple-900/20 p-8 rounded-xl shadow-xl backdrop-blur-md hover:scale-105 hover:bg-purple-900/30 transition duration-300">
                <i class="fas fa-headset text-5xl text-purple-400 mb-4"></i>
                <h3 class="text-2xl font-semibold text-white">Best Support</h3>
                <p class="text-gray-300">Tim dukungan profesional siap membantu Anda 24/7, memastikan pengalaman pengguna yang lancar dan bebas masalah.</p>
            </div>
            <div class="text-center bg-purple-900/20 p-8 rounded-xl shadow-xl backdrop-blur-md hover:scale-105 hover:bg-purple-900/30 transition duration-300">
                <i class="fas fa-sync-alt text-5xl text-purple-400 mb-4"></i>
                <h3 class="text-2xl font-semibold text-white">Pembaruan Teratur</h3>
                <p class="text-gray-300">Kami secara rutin memperbarui produk kami agar selalu kompatibel dengan pembaruan game terbaru dan performa tetap optimal.</p>
            </div>
            <div class="text-center bg-purple-900/20 p-8 rounded-xl shadow-xl backdrop-blur-md hover:scale-105 hover:bg-purple-900/30 transition duration-300">
                <i class="fas fa-shield-virus text-5xl text-purple-400 mb-4"></i>
                <h3 class="text-2xl font-semibold text-white">99% Aman & Bebas Banned</h3>
                <p class="text-gray-300">Teknologi anti-cheat mutakhir menjamin keamanan akun Anda dari deteksi sistem dan larangan permainan.</p>
            </div>
            <div class="text-center bg-purple-900/20 p-8 rounded-xl shadow-xl backdrop-blur-md hover:scale-105 hover:bg-purple-900/30 transition duration-300">
                <i class="fas fa-cogs text-5xl text-purple-400 mb-4"></i>
                <h3 class="text-2xl font-semibold text-white">Kustomisasi Tingkat Lanjut</h3>
                <p class="text-gray-300">Atur cheat sesuai keinginan Anda dengan opsi konfigurasi yang mudah dan fleksibel.</p>
            </div>
            <div class="text-center bg-purple-900/20 p-8 rounded-xl shadow-xl backdrop-blur-md hover:scale-105 hover:bg-purple-900/30 transition duration-300">
                <i class="fas fa-desktop text-5xl text-purple-400 mb-4"></i>
                <h3 class="text-2xl font-semibold text-white">Kompatibilitas Luas</h3>
                <p class="text-gray-300">Produk kami mendukung berbagai perangkat untuk kenyamanan Anda.</p>
            </div>
        </div>
    </div>
</section>

</body>

<?php include 'team.php'; ?>

<section id="showcase" class="py-20 bg-gradient-to-br from-gray-900 to-purple-900">
    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-center text-purple-100 mb-12">Product Showcase</h2>
        <div class="glide">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide"><img src="image/feedback4.png" alt="Game 1" class="w-full rounded-lg shadow-lg" /></li>
                </ul>
            </div>
            <div class="glide__bullets" data-glide-el="controls[nav]">
                <button class="glide__bullet" data-glide-dir="=0"></button>
                <button class="glide__bullet" data-glide-dir="=1"></button>
                <button class="glide__bullet" data-glide-dir="=2"></button>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="py-20 bg-black/40 backdrop-blur-md">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center text-purple-300 mb-12">Hubungi Kami</h2>
            <div class="grid grid-cols-2 gap-12">
                <div>
                    <form class="space-y-6">
                        <div>
                            <label class="block text-purple-300 mb-2">Nama</label>
                            <input type="text" class="w-full bg-purple-900/20 border-0 text-purple-300 rounded-lg focus:ring-2 focus:ring-indigo-500" />
                        </div>
                        <div>
                            <label class="block text-purple-300 mb-2">Email</label>
                            <input type="email" class="w-full bg-purple-900/20 border-0 text-purple-300 rounded-lg focus:ring-2 focus:ring-indigo-500" />
                        </div>
                        <div>
                            <label class="block text-purple-300 mb-2">Pesan</label>
                            <textarea rows="4" class="w-full bg-purple-900/20 border-0 text-purple-300 rounded-lg focus:ring-2 focus:ring-indigo-500"></textarea>
                        </div>
                        <button class="!rounded-button w-full bg-purple-700 text-purple-300 py-3 hover:bg-purple-700">Kirim Pesan</button>
                    </form>
                </div>
                <div>
                    <div class="bg-purple-900/20 rounded-lg p-8">
                        <h3 class="text-2xl font-semibold text-purple-300 mb-6">Informasi Kontak</h3>
                        <div class="space-y-4">
                            <p class="flex items-center text-gray-400">
                                <i class="fas fa-map-marker-alt w-6 text-purple-400"></i>
                                Jl.Mampang Pancoran Mas 
                            </p>
                            <p class="flex items-center text-gray-400">
                                <i class="fas fa-phone w-6 text-purple-400"></i>
                                +62 822-5899-7082
                            </p>
                            <p class="flex items-center text-gray-400">
                                <i class="fas fa-envelope w-6 text-purple-400"></i>
                                rizxcorp@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-gradient-to-br from-gray-900 to-purple-900 py-12">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-4 gap-8 mb-8">
                <div>
                    <img src="image/logo.png" alt="Logo" class="h-8 mb-4" />
                    <p class="text-gray-400">RXC TEAM ADALAH SEBUAH PERUSAHAN YANG DIDIRIKAN SEJAK 2022 DENGAN KUALITAS NOMOR 1 DI PASAR NYA</p>
                </div>
                <div>
                    <h4 class="text-purple-300 font-semibold mb-4">Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-purple-300">Tentang Kami</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-purple-300">Produk</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-purple-300">Kebijakan Privasi</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-purple-300 font-semibold mb-4">Sosial Media</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-purple-300"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-400 hover:text-purple-300"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-purple-300"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-purple-300 font-semibold mb-4">Newsletter</h4>
                    <form class="flex">
                        <input type="email" placeholder="Email anda" class="flex-1 bg-purple-900/20 border-0 text-purple-300 rounded-l-lg focus:ring-2 focus:ring-indigo-500" />
                        <button class="!rounded-button bg-purple-700 text-purple-300 px-4 rounded-l-none hover:bg-purple-700">Daftar</button>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 text-center">
                <p class="text-gray-400">© 2025 RXC TEAM. Semua hak dilindungi undang-undang.</p>
            </div>
        </div>
    </footer>

    <script>
                function showProducts(type) {
                const types = ['monthly', 'quarterly', 'annual'];
                types.forEach(t => {
                    document.getElementById(t + 'Products').classList.add('hidden');
                });
                document.getElementById(type + 'Products').classList.remove('hidden');
            }


        const monthlyBtn = document.getElementById('monthlyBtn');
        const quarterlyBtn = document.getElementById('quarterlyBtn');
        const annualBtn = document.getElementById('annualBtn');
        const monthlyProducts = document.getElementById('monthlyProducts');
        const quarterlyProducts = document.getElementById('quarterlyProducts');
        const annualProducts = document.getElementById('annualProducts');

        monthlyBtn.addEventListener('click', () => {
            monthlyProducts.classList.remove('hidden');
            quarterlyProducts.classList.add('hidden');
            annualProducts.classList.add('hidden');
            monthlyBtn.classList.add('bg-custom', 'text-white');
            quarterlyBtn.classList.remove('bg-custom', 'text-white');
            annualBtn.classList.remove('bg-custom', 'text-white');
        });

        quarterlyBtn.addEventListener('click', () => {
            quarterlyProducts.classList.remove('hidden');
            monthlyProducts.classList.add('hidden');
            annualProducts.classList.add('hidden');
            quarterlyBtn.classList.add('bg-custom', 'text-white');
            monthlyBtn.classList.remove('bg-custom', 'text-white');
            annualBtn.classList.remove('bg-custom', 'text-white');
        });

        annualBtn.addEventListener('click', () => {
            annualProducts.classList.remove('hidden');
            monthlyProducts.classList.add('hidden');
            quarterlyProducts.classList.add('hidden');
            annualBtn.classList.add('bg-custom', 'text-white');
            monthlyBtn.classList.remove('bg-custom', 'text-white');
            quarterlyBtn.classList.remove('bg-custom', 'text-white');
        });


        new Glide('.glide', {
            type: 'carousel',
            startAt: 0,
            perView: 1,
            gap: 0,
            autoplay: 5000
        }).mount();
    </script>