<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Setore $setore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Setores'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="setores form large-9 medium-8 columns content">
    <?= $this->Form->create($setore) ?>
    <fieldset>
        <legend><?= __('Add Setore') ?></legend>
        <?php
            echo $this->Form->control('tipo_setor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
