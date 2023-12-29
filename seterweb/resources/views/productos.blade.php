@include('plantillas.navBar')

<link rel="stylesheet" href="{{ asset('css/products.css') }}">

    <main>
        <!-- sección de todos los productos (haz una plantilla) -->
        <section class="wrapper">
            <div class="product">
                <a href="products/1.html">
                    <img src="img/productos/1.jpg" alt="">
                    <h3>Producto 1</h3>
                </a>
            </div>

            <div class="product">
                <a href="products/2.html">
                    <img src="img/productos/2.jpg" alt="">
                    <h3>Producto 2</h3>
                </a>
            </div>

            <div class="product">
                <a href="products/3.html">
                    <img src="img/productos/3.jpg" alt="">
                    <h3>Producto 3</h3>
                </a>
            </div>

            <div class="product">
                <a href="products/4.html">
                    <img src="img/productos/4.jpg" alt="">
                    <h3>Producto 4</h3>
                </a>
            </div>

            <div class="product">
                <a href="products/5.html">
                    <img src="img/productos/5.jpg" alt="">
                    <h3>Producto 5</h3>
                </a>
            </div>

            <div class="product">
                <a href="products/6.html">
                    <img src="img/productos/6.jpg" alt="">
                    <h3>Producto 6</h3>
                </a>
            </div>

            <div class="product">
                <a href="products/7.html">
                    <img src="img/productos/7.jpg" alt="">
                    <h3>Producto 7</h3>
                </a>
            </div>

            <div class="product">
                <a href="products/8.html">
                    <img src="img/productos/8.jpg" alt="">
                    <h3>Producto 8</h3>
                </a>
            </div>

            <div class="product">
                <a href="products/9.html">
                    <img src="img/productos/9.jpg" alt="">
                    <h3>Producto 9</h3>
                </a>
            </div>

            <div class="product">
                <a href="products/10.html">
                    <img src="img/productos/10.jpg" alt="">
                    <h3>Producto 9</h3>
                </a>
            </div>
            
        </section>
    </main>

    @include('plantillas.footer')
    <script src="js/index.js"></script>
</body>
</html>