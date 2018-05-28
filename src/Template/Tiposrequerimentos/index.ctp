<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tiposrequerimento[]|\Cake\Collection\CollectionInterface $tiposrequerimentos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tiposrequerimento'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tiposrequerimentos index large-9 medium-8 columns content">
    <h3><?= __('Tiposrequerimentos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_requerimento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tiposrequerimentos as $tiposrequerimento): ?>
            <tr>
                <td><?= $this->Number->format($tiposrequerimento->id) ?></td>
                <td><?= h($tiposrequerimento->tipo_requerimento) ?></td>
                <td><?= h($tiposrequerimento->created) ?></td>
                <td><?= h($tiposrequerimento->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tiposrequerimento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tiposrequerimento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tiposrequerimento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposrequerimento->id)]) ?>
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
