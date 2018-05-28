<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div>
    <?=$this->Form->create($user)?>
    <div>
        <legend><?=__('Adicionar Novo Usuário')?></legend>
        <?php
echo $this->Form->control('nome', ['placeholder' => 'Seu nome', 'label' => 'Nome']);
echo $this->Form->control('username', ['placeholder' => 'Seu nome', 'label' => 'Nome de Usuário']);
echo $this->Form->control('email', ['placeholder' => 'E-mail']);
echo $this->Form->control('password', ['label' => 'Senha']);
echo $this->Form->control('matricula', ['label' => 'Matrícula']);
echo $this->Form->control('cpf', ['label' => 'CPF']);
echo $this->Form->control('perfis_id', ['options' => $perfis]);
echo $this->Form->control('setores_id', ['options' => $setores]);
?>
    </div>
    <?=$this->Form->submit(__('Cadastrar'))?>
    <?=$this->Form->end()?>
</div>
