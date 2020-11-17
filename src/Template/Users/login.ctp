<?=    $this->Html->css('login') ?>
<?=    $this->Html->css('login2') ?>

<div class="container">

	<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<div class="loginbox">
				<?= $this->Flash->render('auth') ?>
				<?= $this->Form->create() ?>
				<h1>Ingresar al sitio</h1>
				<div class="textbox">
					<i class="fas fa-user"></i>
					<?= $this->Form->input('email', ['placeholder' => 'Correo electronico', 
									'label' => false], 'required') ?>
				</div>
				<div class="textbox">
					<i class="fas fa-lock"></i>
					<?= $this->Form->input('password', ['placeholder' => 'Contraseña', 
									'label' => false], 'required') ?>
				</div>

				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<?= $this->Form->button('Acceder', ['class' => 'btn btn-lg btn-success btn-block']) ?>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<?= $this->Html->link('Registrarse' , ['controller' => 'Users', 'action' => 'add'] , ['class' => 'btn btn-lg btn-primary btn-block']) ?>
					</div>
				</div>
				<?= $this->Form->end() ?>
			</div>
		</div>
	</div>

</div>