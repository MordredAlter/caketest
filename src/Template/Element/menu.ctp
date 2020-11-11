<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<!------ Estilos de bootstrap ---------->

<nav class="navbar navbar-inverse nav-users">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
                data-target="bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?= $this->Html->link('Caketest', ['controller' => 'Users', 'action' => 'index'], ['class' => 'navbar-brand']) ?>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                        aria-expanded="false">Usuarios <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <?= $this->Html->link('Listar usuarios', ['controller' => 'Users', 'action' => 'index']) ?>
                        </li>
                        <li>
                            <?= $this->Html->link('Crear usuario', ['controller' => 'Users', 'action' => 'add']) ?>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <?= $this->Html->link('salir', ['controller' => 'Users', 'action' => 'logout']) ?>
                </li>
            </ul>
        </div>
    </div>
</nav>