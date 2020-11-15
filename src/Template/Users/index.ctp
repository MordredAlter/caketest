<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

<div class="row">
    <div class="col-md-12">
        <div class="page-header"><h3><?= __('Usuarios') ?></h3></div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th ><?= $this->Paginator->sort('id') ?></th>
                        <th ><?= $this->Paginator->sort('first_name', ['Nombre']) ?></th>
                        <th ><?= $this->Paginator->sort('last_name', ['Apellidos']) ?></th>
                        <th ><?= $this->Paginator->sort('email', ['Correo']) ?></th>
                        <th ><?= $this->Paginator->sort('role', ['Rol']) ?></th>
                        <th ><?= __('Acciones') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $this->Number->format($user->id) ?></td>
                        <td><?= h($user->first_name) ?></td>
                        <td><?= h($user->last_name) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td><?= h($user->role) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class' => 'btn btn-sm btn-info']) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-sm btn-primary']) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Estas seguro de querer eliminar al usuario {0}?', $user->first_name), 'class' => 'btn btn-sm btn-danger']) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< Primero') ?>
                <?= $this->Paginator->prev('< Anterior') ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next('Siguiente >') ?>
                <?= $this->Paginator->last('Ultimo >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
        </div>
    </div>
</div>
