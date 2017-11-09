<h2><?php echo $title; ?></h2>

<?php foreach ($usuarios as $usuario_item): ?>

        <h3><?php echo $usuario_item['email']; ?></h3>
        <div class="main">
                <?php echo $usuario_item['nombre']; ?>
                <br><?php echo $usuario_item['password']; ?>

        </div>


<?php endforeach; ?>
