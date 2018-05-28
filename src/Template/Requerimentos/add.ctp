<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requerimento $requerimento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Requerimentos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tiposrequerimentos'), ['controller' => 'Tiposrequerimentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tiposrequerimento'), ['controller' => 'Tiposrequerimentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Setores'), ['controller' => 'Setores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Setore'), ['controller' => 'Setores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="requerimentos form large-9 medium-8 columns content">
    <?= $this->Form->create($requerimento) ?>
    <fieldset>
        <legend><?= __('Add Requerimento') ?></legend>
        <?php
            echo $this->Form->control('tiposrequerimentos_id', ['options' => $tiposrequerimentos]);
            echo $this->Form->control('setores_id', ['options' => $setores]);
            echo $this->Form->control('Solicitante');
            echo $this->Form->control('cursos_id', ['options' => $cursos]);
            echo $this->Form->control('cpf');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
