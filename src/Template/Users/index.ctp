<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?=__('Actions')?></li>
        <li><?=$this->Html->link(__('New User'), ['action' => 'add'])?></li>
        <li><?=$this->Html->link(__('List Perfis'), ['controller' => 'Perfis', 'action' => 'index'])?></li>
        <li><?=$this->Html->link(__('New Perfi'), ['controller' => 'Perfis', 'action' => 'add'])?></li>
        <li><?=$this->Html->link(__('List Setores'), ['controller' => 'Setores', 'action' => 'index'])?></li>
        <li><?=$this->Html->link(__('New Setore'), ['controller' => 'Setores', 'action' => 'add'])?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?=__('Users')?></h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?=$this->Paginator->sort('id', ['ID'])?></th>
                <th scope="col"><?=$this->Paginator->sort('nome', ['Nomes'])?></th>
                <th scope="col"><?=$this->Paginator->sort('username', ['Nome de Usuário'])?></th>
                <th scope="col"><?=$this->Paginator->sort('email', ['E-mail'])?></th>
                <th scope="col"><?=$this->Paginator->sort('password', ['Senha'])?></th>
                <th scope="col"><?=$this->Paginator->sort('matricula', ['Matrícula'])?></th>
                <th scope="col"><?=$this->Paginator->sort('cpf', ['CPF'])?></th>
                <th scope="col"><?=$this->Paginator->sort('perfis_id', ['Perfil'])?></th>
                <th scope="col"><?=$this->Paginator->sort('setores_id', ['Setor     '])?></th>
                <th scope="col"><?=$this->Paginator->sort('created')?></th>
                <th scope="col"><?=$this->Paginator->sort('modified')?></th>
                <th scope="col" class="actions"><?=__('Actions')?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?=$this->Number->format($user->id)?></td>
                <td><?=h($user->nome)?></td>
                <td><?=h($user->username)?></td>
                <td><?=h($user->email)?></td>
                <td><?=h($user->password)?></td>
                <td><?=h($user->matricula)?></td>
                <td><?=h($user->cpf)?></td>
                <td><?=$user->has('perfi') ? $this->Html->link($user->perfi->tipo, ['controller' => 'Perfis', 'action' => 'view', $user->perfi->id]) : ''?></td>
                <td><?=$user->has('setore') ? $this->Html->link($user->setore->tipo_setor, ['controller' => 'Setores', 'action' => 'view', $user->setore->id]) : ''?></td>
                <td><?=h($user->created)?></td>
                <td><?=h($user->modified)?></td>
                <td class="actions">
                    <?=$this->Html->link(__('View'), ['action' => 'view', $user->id])?>
                    <?=$this->Html->link(__('Edit'), ['action' => 'edit', $user->id])?>
                    <?=$this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)])?>
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
