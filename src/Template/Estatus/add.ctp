<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estatus $estatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Estatus'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Requerimentos'), ['controller' => 'Requerimentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Requerimento'), ['controller' => 'Requerimentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estatus form large-9 medium-8 columns content">
    <?= $this->Form->create($estatus) ?>
    <fieldset>
        <legend><?= __('Add Estatus') ?></legend>
        <?php
            echo $this->Form->control('tipo_estatus');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
