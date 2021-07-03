<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>

    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="img_container">
                <img src="assets/img/scenery/perros.jpg" alt="">
            </div>
            <div class="container formulario">
                <div class="block-heading">
                    <h2 class="text-info">Registro</h2>
                </div>
                <form method="POST" onsubmit="return validar();">
                    <div class="mb-3">
                        <label class="form-label" for="name">Usuario</label>
                        <input class="form-control item" type="text" id="usser" name="usser">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Contraseña</label>
                        <input class="form-control item" type="password" id="password" name="password">
                        <div class="text">
                            <ul>
                                <li id="mayus">Minimo 1 Mayuscula</li>
                                <li id="special">Minimo 2 Caracter especial (#$%&/?*)</li>
                                <li id="numbers">Minimo 2 números</li>
                                <li id="lower">Minimo 1 minuscula</li>
                                <li id="len">Minimo 8 caracteres</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Repetir contraseña</label>
                        <input class="form-control item" type="password" id="password2" name="password2">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control item" id="email" name="email">
                    </div>
                    <button class="btn btn-primary" type="submit" name="sign_up">Sign Up</button>
                    <?php include("registrar-usuario.php"); ?>
                </form>
            </div>
        </section>
    </main>
    <script src = "validar.js"></script>
    <script src = "password.js"></script>
<?php include("includes/footer.php"); ?>