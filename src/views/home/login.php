<!-- Login -->

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="mt-5">Inicio de sesión</h1>
            <form action="authenticate" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <?php if (isset($_GET['error']) && $_GET['error'] == 'invalid_credentials'): ?>
                <div class="alert alert-danger">Invalid email or password.</div>
                <?php endif; ?>
                <button type="submit" class="btn btn-primary">Acceder</button>
            </form>
        </div>
    </div>
</div>