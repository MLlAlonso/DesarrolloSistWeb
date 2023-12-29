@include('plantillas.navBar')
<link rel="stylesheet" href="{{ asset('css/forms.css') }}">

<main>
    <div class="productForm">
        <div class="heading">Registrar producto</div>
        <form action="" class="form" method="POST" enctype="multipart/form-data">
            <div class="datos">
                <div class="etiquetas">
                    <label for="name"> Nombre del producto* </label>
                    <label for="modelo"> Modelo* </label>
                </div>

                <div class="entrada">
                    <input class="input" type="text" name="name" id="name" required maxlength="30" minlength="3">
                    <input class="input" type="text" name="modelo" id="modelo" required maxlength="60">
                </div>
            </div>

            <div class="datos">
                <div class="etiquetas">
                    <label for="categoria"> Categoria* </label>
                    <label for="marca"> Marca* </label>
                </div>

                <div class="entrada">
                    <input class="input" type="text" name="categoria" id="categoria" required maxlength="40"
                        minlength="10">

                    <select class="input-brand" name="marca" id="marca" required>
                        <option value="" disabled selected style="display:none;">Seleccione una marca</option>
                        <option value="seter"> SETER </option>
                        <option value="wika"> WIKA </option>
                        <option value="parker"> PARKER </option>
                        <option value="fluke"> FLUKE </option>
                        <option value="dewit"> DEWIT </option>
                        <option value="finetek"> FINETEK </option>
                    </select>
                </div>
            </div>

            <label for="caracteristicas"> Caracteristicas </label>
            <input class="input" type="text" name="caracteristicas" id="caracteristicas" required maxlength="120" minlength="10">

            <label for="material"> Especificaciones de material </label>
            <input class="input" type="text" name="material" id="material" maxlength="80">

            <label for="conexiones"> Especificaciones de conexiones </label>
            <input class="input" type="text" name="conexiones" id="conexiones" maxlength="80">

            <label for="rangos"> Especificaciones de rangos </label>
            <input class="input" type="text" name="rangos" id="rangos" maxlength="80">

            <label for="temperatura"> Especificaciones de temperatura </label>
            <input class="input" type="text" name="temperatura" id="temperatura" maxlength="80">

            <label for="peso"> Especificaciones de peso </label>
            <input class="input" type="text" name="peso" id="peso" maxlength="80">

            <label for="normas"> Normas aplicables </label>
            <input class="input" type="text" name="normas" id="normas" maxlength="120">

            <div class="container-img">
                <label> Imagen del producto </label>
                <div class="header-img"> <img id="imagenMostrada"> </div>
                <label for="file" class="footer-img"> <input type="file" id="inputImagen" onchange="mostrarImagen()"> </label>
            </div>

            <input class="add-button" type="submit" value="Registrar producto">

            <!-- Previsualizar la imagen, implementar en el otro input file -->
            <script src="{{ asset('js/image.js') }}"></script>
        </form>
</main>

    @include('plantillas.footer')
</body>
</html>