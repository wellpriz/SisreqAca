<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requerimento[]|\Cake\Collection\CollectionInterface $requerimentos
 */
?>
<div class="requerimentos index large-9 medium-8 columns content">
    <h3><?=__('Requerimentos')?></h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?=$this->Paginator->sort('id')?></th>
                <th scope="col"><?=$this->Paginator->sort('tiposrequerimentos_id')?></th>
                <th scope="col"><?=$this->Paginator->sort('setores_id')?></th>
                <th scope="col"><?=$this->Paginator->sort('users_id')?></th>
                <th scope="col"><?=$this->Paginator->sort('cursos_id')?></th>
                <th scope="col"><?=$this->Paginator->sort('created')?></th>
                <th scope="col"><?=$this->Paginator->sort('modified')?></th>
                <th scope="col" class="actions"><?=__('Actions')?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($requerimentos as $requerimento): ?>
            <tr>
                <td><?=$this->Number->format($requerimento->id)?></td>
                <td><?=$requerimento->has('tiposrequerimento') ? $this->Html->link($requerimento->tiposrequerimento->tipo_requerimento, ['controller' => 'Tiposrequerimentos', 'action' => 'view', $requerimento->tiposrequerimento->id]) : ''?></td>
                <td><?=$requerimento->has('setore') ? $this->Html->link($requerimento->setore->tipo_setor, ['controller' => 'Setores', 'action' => 'view', $requerimento->setore->id]) : ''?></td>
                <td><?=$requerimento->has('user') ? $this->Html->link($requerimento->user->id, ['controller' => 'Users', 'action' => 'view', $requerimento->user->id]) : ''?></td>
                <td><?=$requerimento->has('curso') ? $this->Html->link($requerimento->curso->tipos_curso, ['controller' => 'Cursos', 'action' => 'view', $requerimento->curso->id]) : ''?></td>
                <td><?=h($requerimento->created)?></td>
                <td><?=h($requerimento->modified)?></td>
                <td class="actions">
                    <?=$this->Html->link(__('View'), ['action' => 'view', $requerimento->id])?>
                    <?=$this->Html->link(__('Edit'), ['action' => 'edit', $requerimento->id])?>
                    <?=$this->Form->postLink(__('Delete'), ['action' => 'delete', $requerimento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $requerimento->id)])?>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?=$this->Paginator->first('<< ' . __('first'))?>
            <?=$this->Paginator->prev('< ' . __('previous'))?>
            <?=$this->Paginator->numbers()?>
            <?=$this->Paginator->next(__('next') . ' >')?>
            <?=$this->Paginator->last(__('last') . ' >>')?>
        </ul>
        <p><?=$this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')])?></p>
    </div>
</div>
