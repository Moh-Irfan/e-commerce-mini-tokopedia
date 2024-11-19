<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Tokopedia</title>
    <!-- Hubungkan file CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <!-- Navigation -->
        <nav class="navbar">
            <h1>Mini Tokopedia</h1>
            <ul>
                <li><a href="#dashboard">Dashboard</a></li>
                <li><a href="#categories">Categories</a></li>
                <li><a href="#products">Products</a></li>
            </ul>
        </nav>

        <!-- Promo Section -->
        <section class="promo" style="background-image: url('{{ asset('images/background.jpg') }}');">
            <h2>Malas Belanja Ke Mall?</h2>
            <p>Coba Official Store, jaminan pasti ori!</p>
            <button class="btn-promo" onclick="scrollToSection('products')">Cek Sekarang</button>
        </section>

        <!-- Dashboard -->
        <section id="dashboard">
            <h2>Dashboard</h2>
            <p>Selamat datang di Mini Tokopedia. Jelajahi berbagai kategori produk kami dan temukan apa yang Anda butuhkan!</p>
        </section>

        <!-- Categories -->
        <section id="categories" class="categories">
            <h2>Kategori Pilihan</h2>
            <ul>
                <li onclick="filterCategory('makanan-kering')"><i class="fa fa-utensils"></i> Makanan Kering</li>
                <li onclick="filterCategory('elektronik')"><i class="fa fa-tv"></i> Elektronik</li>
                <li onclick="filterCategory('fashion')"><i class="fa fa-tshirt"></i> Fashion</li>
                <li onclick="filterCategory('olahraga')"><i class="fa fa-futbol"></i> Olahraga</li>
            </ul>
        </section>

        <!-- Popular Products -->
        <section id="products" class="products">
            <h2>Produk Terpopuler</h2>
            <div id="product-container" class="product-container">
                <div class="product" data-category="electronics">
                    <img src="{{ asset('images/Smartphone.jpg') }}" alt="Smartphone">
                    <h3>Smartphone</h3>
                    <p>Rp 2.500.000</p>
                    <button>Beli</button>
                </div>
                <div class="product" data-category="electronics">
                    <img src="{{ asset('images/laptop_asus.jpeg') }}" alt="Laptop Asus">
                    <h3>Laptop Asus</h3>
                    <p>Rp 7.500.000</p>
                    <button>Beli</button>
                </div>
                <div class="product" data-category="electronics">
                    <img src="{{ asset('images/Headphone.jpg') }}" alt="Headphone">
                    <h3>Headphone</h3>
                    <p>Rp 1.200.000</p>
                    <button>Beli</button>
                </div>
                <div class="product" data-category="electronics">
                    <img src="{{ asset('images/kamera.jpeg') }}" alt="Kamera">
                    <h3>Kamera</h3>
                    <p>Rp 9.500.000</p>
                    <button>Beli</button>
                </div>
                <div class="product" data-category="electronics">
                    <img src="{{ asset('images/Komputer-Desktop.jpg') }}" alt="Komputer Desktop">
                    <h3>Komputer Desktop</h3>
                    <p>Rp 10.000.000</p>
                    <button>Beli</button>
                </div>
            </div>
        </section>

        <section id="kategori-produk">
            <h2>Produk Kategori</h2>

            <!-- Wrapper Makanan Kering -->
            <div class="category" id="makanan-kering">
                <h3>Makanan Kering</h3>
                <div class="product-container">
                    <div class="product">
                        <img src="images/keripik.jpg" alt="Keripik Singkong">
                        <h4>Keripik Singkong</h4>
                        <p>Rp 15.000</p>
                        <button>Beli Sekarang</button>
                    </div>
                    <div class="product">
                        <img src="images/kacang-goreng.jpg" alt="Kacang Goreng">
                        <h4>Kacang Goreng Bawang Putih</h4>
                        <p>Rp 20.000</p>
                        <button>Beli Sekarang</button>
                    </div>
                    <div class="product">
                        <img src="images/dodol.jpeg" alt="Dodol Garut">
                        <h4>Dodol Garut</h4>
                        <p>Rp 25.000</p>
                        <button>Beli Sekarang</button>
                    </div>
                </div>
            </div>

            <!-- Wrapper Elektronik -->
            <div class="category" id="elektronik">
                <h3>Elektronik</h3>
                <div class="product-container">
                    <div class="product">
                        <img src="images/smartphone.jpg" alt="Smartphone">
                        <h4>Smartphone</h4>
                        <p>Rp 2.500.000</p>
                        <button>Beli Sekarang</button>
                    </div>
                    <div class="product">
                        <img src="images/tv.webp" alt="TV LED">
                        <h4>TV LED</h4>
                        <p>Rp 3.000.000</p>
                        <button>Beli Sekarang</button>
                    </div>
                    <div class="product">
                        <img src="images/headset.webp" alt="Headset Gaming">
                        <h4>Headset Gaming</h4>
                        <p>Rp 500.000</p>
                        <button>Beli Sekarang</button>
                    </div>
                </div>
            </div>

            <!-- Wrapper Fashion -->
            <div class="category" id="fashion">
                <h3>Fashion</h3>
                <div class="product-container">
                    <div class="product">
                        <img src="images/Kaos Polos.jpeg" alt="Kaos Polos">
                        <h4>Kaos Polos</h4>
                        <p>Rp 50.000</p>
                        <button>Beli Sekarang</button>
                    </div>
                    <div class="product">
                        <img src="images/jaket.jpg" alt="Jaket Denim">
                        <h4>Jaket Denim</h4>
                        <p>Rp 200.000</p>
                        <button>Beli Sekarang</button>
                    </div>
                    <div class="product">
                        <img src="images/sepatu.jpg" alt="Sepatu Sneakers">
                        <h4>Sepatu Sneakers</h4>
                        <p>Rp 300.000</p>
                        <button>Beli Sekarang</button>
                    </div>
                </div>
            </div>

            <!-- Wrapper Olahraga -->
            <div class="category" id="olahraga">
                <h3>Olahraga</h3>
                <div class="product-container">
                    <div class="product">
                        <img src="images/badminton.jpeg" alt="Raket Badminton">
                        <h4>Raket Badminton</h4>
                        <p>Rp 100.000</p>
                        <button>Beli Sekarang</button>
                    </div>
                <div class="product">
                    <img src="images/sepatu-lari.webp" alt="Sepatu Olahraga Lokal">
                    <h4>Sepatu Olahraga Lokal</h4>
                    <p>Rp 200.000</p>
                    <button>Beli Sekarang</button>
                </div>
                <div class="product">
                    <img src="images/bola.jpg" alt="Bola De Basket Ball Basquete Sports">
                    <h4>Bola De Basket Ball Basquete Sports</h4>
                    <p>Rp 90.000</p>
                    <button>Beli Sekarang</button>
                </div>
            </div>
        </div>
        </section>
    </div>

    <!-- Script -->
    <script>
        function filterCategory(category) {
            const allCategories = document.querySelectorAll('.category');
            allCategories.forEach(cat => {
                cat.style.display = 'none';
            });

            const selectedCategory = document.getElementById(category);
            if (selectedCategory) {
                selectedCategory.style.display = 'block';
            }
        }
    </script>
</body>
</html>
