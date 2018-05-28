<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Resposta $resposta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Resposta'), ['action' => 'edit', $resposta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Resposta'), ['action' => 'delete', $resposta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $resposta->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Respostas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Resposta'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="respostas view large-9 medium-8 columns content">
    <h3><?= h($resposta->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Resposta') ?></th>
            <td><?= h($resposta->resposta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($resposta->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($resposta->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($resposta->modified) ?></td>
        </tr>
    </table>
</div>
