<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Shifts'), ['controller' => 'Shifts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shift'), ['controller' => 'Shifts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($user->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mxid') ?></th>
            <td><?= $this->Number->format($user->mxid) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Shifts') ?></h4>
        <?php if (!empty($user->shifts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Location Id') ?></th>
                <th scope="col"><?= __('Bill Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->shifts as $shifts): ?>
            <tr>
                <td><?= h($shifts->user_id) ?></td>
                <td><?= h($shifts->location_id) ?></td>
                <td><?= h($shifts->bill_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Shifts', 'action' => 'view', $shifts->user_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Shifts', 'action' => 'edit', $shifts->user_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Shifts', 'action' => 'delete', $shifts->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $shifts->user_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
