@include('plantillas.navBar')

<link rel="stylesheet" href="{{ asset('css/brands.css') }}">
    <main>
        <h1>Nuestras Marcas</h1>
        <section class="wrapper">
            <div class="brand">
                <a href="{{route('products')}}">
                    <img src="img/logoSeter.png" alt="seter">
                </a>
                <a href="{{route('products')}}">
                    <img src="img/wika.png" alt="wika">
                </a>
                <a href="{{route('products')}}">
                    <img src="img/parker.png" alt="parker">
                </a>
                <a href="{{route('products')}}">
                    <img src="img/fluke.png" alt="fluke">
                </a>
                <a href="{{route('products')}}">
                    <img src="img/dewit.png" alt="dewit">
                </a>
                <a href="{{route('products')}}">
                    <img src="img/finetek.png" alt="finetek">
                </a>
                <a xhref="{{route('products')}}">
                    <img src="img/gpi.png" alt="gpi">
                </a>
                <a >
                    <img src="img/metron.png" alt="metron">
                </a>
                <a href="{{route('products')}}">
                    <img src="img/trerice.png" alt="trerice">
                </a>
            </div>
        </section>
    </main>
    @include('plantillas.footer')
</body>
</html>