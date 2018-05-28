<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Setore $setore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Setore'), ['action' => 'edit', $setore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Setore'), ['action' => 'delete', $setore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $setore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Setores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Setore'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="setores view large-9 medium-8 columns content">
    <h3><?= h($setore->tipo_setor) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tipo Setor') ?></th>
            <td><?= h($setore->tipo_setor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($setore->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($setore->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($setore->modified) ?></td>
        </tr>
    </table>
</div>
