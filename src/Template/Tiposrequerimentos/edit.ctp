<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tiposrequerimento $tiposrequerimento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tiposrequerimento->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tiposrequerimento->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tiposrequerimentos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tiposrequerimentos form large-9 medium-8 columns content">
    <?= $this->Form->create($tiposrequerimento) ?>
    <fieldset>
        <legend><?= __('Edit Tiposrequerimento') ?></legend>
        <?php
            echo $this->Form->control('tipo_requerimento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
