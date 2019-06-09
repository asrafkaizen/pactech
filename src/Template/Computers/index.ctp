<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Computer[]|\Cake\Collection\CollectionInterface $computers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Computer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="computers index large-9 medium-8 columns content">
    <h3><?= __('Computers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('model') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cond') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($computers as $computer): ?>
            <tr>
                <td><?= $this->Number->format($computer->id) ?></td>
                <td><?= $computer->has('location') ? $this->Html->link($computer->location->name, ['controller' => 'Locations', 'action' => 'view', $computer->location->id]) : '' ?></td>
                <td><?= h($computer->model) ?></td>
                <td><?= h($computer->cond) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $computer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $computer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $computer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $computer->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
