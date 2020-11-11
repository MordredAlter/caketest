<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<!------ Estilos de bootstrap ---------->

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Crear usuario</h2>
        </div>
        <?= $this->Form->create($user) ?>
        <fieldset>
            <?php
                echo $this->Form->control('first_name', ['label' => 'Nombre']);
                echo $this->Form->control('last_name', ['label' => 'Apellidos']);
                echo $this->Form->control('email', ['label' => 'Correo']);
                echo $this->Form->control('password', ['label' => 'Contraseña']);
                echo $this->Form->control('role', ['options' => ['admin' => 'Administrador', 'user' => 'Usuario'], 'label' => 'Rol']);
                echo $this->Form->control('active', ['label' => 'Activo']);
            ?>
        </fieldset>
        <?= $this->Form->button(('Crear Usuario')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>