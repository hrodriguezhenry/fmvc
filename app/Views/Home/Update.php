<?php require_once(APP_ROUTE."/Views/Template/Header.php"); ?>
<a href="<?php echo URL_ROUTE; ?>"class="btn btn-light"><i class="fa fa-backward"></i> Volver</a>
<div class="card card-body btn-light mt-5">
    <h2>Editar usuarios</h2>
    <form action="<?php echo URL_ROUTE; ?>/home/update/<?php echo $data["id"]; ?>" method="POST">
        <div class="form-group">
            <label for="name">Nombre: <sup>*</sup></label>
            <input type="text" name="name" class="form-control form-control-lg" value="<?php echo $data["name"]; ?>">
        </div>

        <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email" class="form-control form-control-lg" value="<?php echo $data["email"]; ?>">
        </div>

        <div class="form-group">
            <label for="phone">Teléfono: <sup>*</sup></label>
            <input type="text" name="phone" class="form-control form-control-lg" value="<?php echo $data["phone"]; ?>">
        </div>
        <input type="submit" class="btn btn-success" value="Editar Usuario">
    </form>
</div>
<?php require_once(APP_ROUTE."/Views/Template/Footer.php"); ?>