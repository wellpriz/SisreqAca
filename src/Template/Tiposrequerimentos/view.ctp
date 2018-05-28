<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tiposrequerimento $tiposrequerimento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tiposrequerimento'), ['action' => 'edit', $tiposrequerimento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tiposrequerimento'), ['action' => 'delete', $tiposrequerimento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposrequerimento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tiposrequerimentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tiposrequerimento'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tiposrequerimentos view large-9 medium-8 columns content">
    <h3><?= h($tiposrequerimento->tipo_requerimento) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tipo Requerimento') ?></th>
            <td><?= h($tiposrequerimento->tipo_requerimento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tiposrequerimento->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tiposrequerimento->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tiposrequerimento->modified) ?></td>
        </tr>
    </table>
</div>
