<?php require_once(APP_ROUTE."/Views/Template/Header.php"); ?>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($data["users"] as $user) : ?>
        <tr>
            <td><?php echo $user->id; ?></td>
            <td><?php echo $user->name; ?></td>
            <td><?php echo $user->email; ?></td>
            <td><?php echo $user->phone; ?></td>
            <td><a href="<?php echo URL_ROUTE; ?>/home/update/<?php echo $user->id; ?>">Editar</a></td>
            <td><a href="<?php echo URL_ROUTE; ?>/home/delete/<?php echo $user->id; ?>">Borrar</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php require_once(APP_ROUTE."/Views/Template/Footer.php"); ?>