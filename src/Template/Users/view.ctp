<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="row">
    <div class="col col-md-6">
        <div class="page-header">
            <h2><?= h($user->first_name . ' ' . $user->last_name) ?></h2>
        </div>
        <table class="table table-hover">
            <tr>
                <th scope="row"><?= __('First Name') ?></th>
                <td><?= h($user->first_name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Last Name') ?></th>
                <td><?= h($user->last_name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Email') ?></th>
                <td><?= h($user->email) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Role') ?></th>
                <td><?= h($user->role) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($user->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Created') ?></th>
                <td><?= h($user->created) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Modified') ?></th>
                <td><?= h($user->modified) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Active') ?></th>
                <td><?= $user->active ? __('Si') : __('No'); ?></td>
            </tr>
        </table>
        <div class="related">
            <h4><?= __('Related Bookmarks') ?></h4>
            <?php if (!empty($user->bookmarks)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Title') ?></th>
                    <th scope="col"><?= __('Description') ?></th>
                    <th scope="col"><?= __('Url') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col"><?= __('User Id') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($user->bookmarks as $bookmarks): ?>
                <tr>
                    <td><?= h($bookmarks->id) ?></td>
                    <td><?= h($bookmarks->title) ?></td>
                    <td><?= h($bookmarks->description) ?></td>
                    <td><?= h($bookmarks->url) ?></td>
                    <td><?= h($bookmarks->created) ?></td>
                    <td><?= h($bookmarks->modified) ?></td>
                    <td><?= h($bookmarks->user_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Bookmarks', 'action' => 'view', $bookmarks->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Bookmarks', 'action' => 'edit', $bookmarks->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bookmarks', 'action' => 'delete', $bookmarks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookmarks->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
    </div>
</div>
