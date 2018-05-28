<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Resposta $resposta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Respostas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="respostas form large-9 medium-8 columns content">
    <?= $this->Form->create($resposta) ?>
    <fieldset>
        <legend><?= __('Add Resposta') ?></legend>
        <?php
            echo $this->Form->control('resposta');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
