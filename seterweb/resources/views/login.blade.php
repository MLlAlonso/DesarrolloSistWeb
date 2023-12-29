@include('plantillas.navBar')
<link rel="stylesheet" href="{{ asset('css/forms.css') }}">

<main>
    <div class="productForm">
        <div class="heading">Iniciar sesión</div>
        <form action="" class="form" method="POST">
            <label for="email"> Correo electronico: </label>
            <input class="input" type="email" name="email" id="email" required>

            <label for="pwd"> Contraseña </label>
            <input class="input" type="password" name="pwd" id="pwd" required maxlength="25" minlength="8">

            <input class="add-button" type="submit" value="Iniciar sesión">
            <a class="log-form" href="signup">Registrarse</a>
        </form>
</main>

    @include('plantillas.footer')
</body>
</html>