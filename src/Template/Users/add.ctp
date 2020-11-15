<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
 

<div class="row">
    <div class="col col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Crear usuario</h2>
        </div>
        <?= $this->Form->create($user) ?>
        <fieldset>
            <?php
                echo $this->Form->control('first_name', ['label' => 'Nombre', 'class' => 'form-control']);
                echo $this->Form->control('last_name', ['label' => 'Apellidos', 'class' => 'form-control']);
                echo $this->Form->control('email', ['label' => 'Correo', 'class' => 'form-control']);
                echo $this->Form->control('password', ['label' => 'Contraseña', 'class' => 'form-control']);
            ?>
        </fieldset>
        <br>
        <?= $this->Form->button('Crear Usuario', ['class' => 'btn btn-sm btn-primary']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>