<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requerimento $requerimento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?=__('Actions')?></li>
        <li><?=$this->Html->link(__('Edit Requerimento'), ['action' => 'edit', $requerimento->id])?> </li>
        <li><?=$this->Form->postLink(__('Delete Requerimento'), ['action' => 'delete', $requerimento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $requerimento->id)])?> </li>
        <li><?=$this->Html->link(__('List Requerimentos'), ['action' => 'index'])?> </li>
        <li><?=$this->Html->link(__('New Requerimento'), ['action' => 'add'])?> </li>
        <li><?=$this->Html->link(__('List Tiposrequerimentos'), ['controller' => 'Tiposrequerimentos', 'action' => 'index'])?> </li>
        <li><?=$this->Html->link(__('New Tiposrequerimento'), ['controller' => 'Tiposrequerimentos', 'action' => 'add'])?> </li>
        <li><?=$this->Html->link(__('List Setores'), ['controller' => 'Setores', 'action' => 'index'])?> </li>
        <li><?=$this->Html->link(__('New Setore'), ['controller' => 'Setores', 'action' => 'add'])?> </li>
        <li><?=$this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'])?> </li>
        <li><?=$this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'])?> </li>
        <li><?=$this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index'])?> </li>
        <li><?=$this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add'])?> </li>
    </ul>
</nav>
<div class="requerimentos view large-9 medium-8 columns content">
    <h3><?=h($requerimento->tipo_requerimento)?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?=__('Tiposrequerimento')?></th>
            <td><?=$requerimento->has('tiposrequerimento') ? $this->Html->link($requerimento->tiposrequerimento->tipo_requerimento, ['controller' => 'Tiposrequerimentos', 'action' => 'view', $requerimento->tiposrequerimento->id]) : ''?></td>
        </tr>
        <tr>
            <th scope="row"><?=__('Setore')?></th>
            <td><?=$requerimento->has('setore') ? $this->Html->link($requerimento->setore->tipo_setor, ['controller' => 'Setores', 'action' => 'view', $requerimento->setore->id]) : ''?></td>
        </tr>
        <tr>
            <th scope="row"><?=__('User')?></th>
            <td><?=$requerimento->has('user') ? $this->Html->link($requerimento->user->id, ['controller' => 'Users', 'action' => 'view', $requerimento->user->id]) : ''?></td>
        </tr>
        <tr>
            <th scope="row"><?=__('Curso')?></th>
            <td><?=$requerimento->has('curso') ? $this->Html->link($requerimento->curso->tipos_curso, ['controller' => 'Cursos', 'action' => 'view', $requerimento->curso->id]) : ''?></td>
        </tr>
        <tr>
            <th scope="row"><?=__('Id')?></th>
            <td><?=$this->Number->format($requerimento->id)?></td>
        </tr>
        <tr>
            <th scope="row"><?=__('Created')?></th>
            <td><?=h($requerimento->created)?></td>
        </tr>
        <tr>
            <th scope="row"><?=__('Modified')?></th>
            <td><?=h($requerimento->modified)?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?=__('Justificativa')?></h4>
        <?=$this->Text->autoParagraph(h($requerimento->justificativa));?>
    </div>
</div>
