
  <body>

    <!-- Verificar si hay error en el formulario, el controlador regresa
     el error despues de validarlos
     Se cambi{o el lenguaje de los errors de validaci{on agregando el archivo:
        application/languague/spanish/form_validation_lang.php

    -->

    <?php if (validation_errors()) : ?>
			<div class="">
				<div class="">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>

    <!-- $error si existen variables que haya que modificar si hay error   -->
		<?php if (isset($error)) : ?>
			<div class="">
				<div class="" role="">
					<?= $error ?>
				</div>
			</div>
<?php endif; ?>

<!-- Se genera el formulario con la biblioteca form helper -->
    <?php
        echo form_open('usuarios/agregar_usuario');
        echo form_label('email');
        echo form_input(array('id'=>'email','name'=>'email'));echo "<BR>";
        echo form_label('Contraseña:');
        echo form_password(array('id'=>'pass','name'=>'password'));echo "<BR>";
        echo form_label('Confirma contraseña:');
        echo form_password(array('id'=>'pass','name'=>'password_confirm'));echo "<BR>";
        echo form_label('Nombre:');
        echo form_input(array('id'=>'nom','name'=>'nombre'));echo "<BR>";
        echo form_label('Paterno');
        echo form_input(array('id'=>'pat','name'=>'paterno'));echo "<BR>";
        echo form_label('Materno');
        echo form_input(array('id'=>'mat','name'=>'materno'));echo "<BR>";
        echo form_submit(array('id'=>'submit','value'=>'Agregar'));
        echo form_close();

    ?>
    <br>
