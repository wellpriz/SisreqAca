<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estatus[]|\Cake\Collection\CollectionInterface $estatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Estatus'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Requerimentos'), ['controller' => 'Requerimentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Requerimento'), ['controller' => 'Requerimentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estatus index large-9 medium-8 columns content">
    <h3><?= __('Estatus') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_estatus') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estatus as $estatus): ?>
            <tr>
                <td><?= $this->Number->format($estatus->id) ?></td>
                <td><?= h($estatus->tipo_estatus) ?></td>
                <td><?= h($estatus->created) ?></td>
                <td><?= h($estatus->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $estatus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estatus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estatus->id)]) ?>
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
