

<div class="container">

<div class="loginbox">
	<h1>Ingresar al sitio</h1>
	<div class="textbox">
		<input type="text" placeholder="email" name="" value="">
	</div>
	<div class="textbox">
		<input type="text" placeholder="password" name="" value="">
	</div>

	<input class="btn" type="button" value="Sign In" name="">
</div>

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <?= $this->Flash->render('auth') ?>
        <?= $this->Form->create() ?>
			<fieldset>
				<h2>Ingresar al sitio</h2>
				<hr class="colorgraph">
				<div class="form-group">
                    <?= $this->Form->input('email', ['class' => 'form-control input-lg', 'placeholder' => 'Correo electronico', 
                        'label' => false], 'required') ?>
				</div>
				<div class="form-group">
                    <?= $this->Form->input('password', ['class' => 'form-control input-lg', 'placeholder' => 'Contraseña', 
                        'label' => false], 'required') ?>
				</div>
				
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <?= $this->Form->button('Acceder', ['class' => 'btn btn-lg btn-success btn-block']) ?>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <?= $this->Html->link('Registrarse' , ['controller' => 'Users', 'action' => 'add'] , ['class' => 'btn btn-lg btn-primary btn-block']) ?>
					</div>
				</div>
			</fieldset>
		<?= $this->Form->end() ?>
	</div>
</div>

</div>