<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require "views/header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <?php
                if ($this->mensaje != "") {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->mensaje; ?>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <form action="<?php echo constant('URL'); ?>nuevo/registrarAlumno" class="needs-validation" novalidate method="POST">
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="txtNombre">Nombre</label>
                            <input type="text" class="form-control" name="txtNombre" id="txtNombre" value="Mark" required>
                            <div class="valid-feedback">
                                Correcto
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="txtApellidos">Apellidos</label>
                            <input type="text" class="form-control" name="txtApellidos" id="txtApellidos" value="Otto" required>
                            <div class="valid-feedback">
                                Correcto
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="txtDireccion">Direccion</label>
                            <input type="text" class="form-control" name="txtDireccion" id="txtDireccion" required>
                            <div class="valid-feedback">
                                Correcto
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="txtEdad">Edad</label>
                            <input type="number" class="form-control" name="txtEdad" id="txtEdad" required>
                            <div class="valid-feedback">
                                Correcto
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cbCiclo">Ciclo</label>
                            <select class="custom-select" name="cbCiclo" id="cbCiclo" required>
                                <option selected disabled value="">Elegir</option>
                                <option value="1">I</option>
                                <option value="2">II</option>
                                <option value="3">III</option>
                                <option value="4">IV</option>
                                <option value="5">V</option>
                                <option value="6">VI</option>
                            </select>
                            <div class="invalid-feedback">
                                Por favor elegir ciclo
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="txtEmail">Email</label>
                            <input type="text" class="form-control" name="txtEmail" id="txtEmail" required>
                            <div class="valid-feedback">
                                Correcto
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Estoy de acuerdo con los termios y condiciones
                            </label>
                            <div class="invalid-feedback">
                                Debes estar de acuerdo antes de registrarte
                            </div>
                        </div>
                    </div> -->
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
            </div>
        </div>
    </div>
    <?php require "views/footer.php"; ?>
    <script src="<?php echo constant('URL'); ?>public/assets/pages/js/nuevo.js"></script>
</body>

</html>