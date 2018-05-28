<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estatus $estatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estatus'), ['action' => 'edit', $estatus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estatus'), ['action' => 'delete', $estatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estatus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Estatus'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estatus'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Requerimentos'), ['controller' => 'Requerimentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Requerimento'), ['controller' => 'Requerimentos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estatus view large-9 medium-8 columns content">
    <h3><?= h($estatus->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tipo Estatus') ?></th>
            <td><?= h($estatus->tipo_estatus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($estatus->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($estatus->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($estatus->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Requerimentos') ?></h4>
        <?php if (!empty($estatus->requerimentos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tipo Requerimento') ?></th>
                <th scope="col"><?= __('Cursos Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($estatus->requerimentos as $requerimentos): ?>
            <tr>
                <td><?= h($requerimentos->id) ?></td>
                <td><?= h($requerimentos->tipo_requerimento) ?></td>
                <td><?= h($requerimentos->cursos_id) ?></td>
                <td><?= h($requerimentos->created) ?></td>
                <td><?= h($requerimentos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Requerimentos', 'action' => 'view', $requerimentos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Requerimentos', 'action' => 'edit', $requerimentos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Requerimentos', 'action' => 'delete', $requerimentos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $requerimentos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
