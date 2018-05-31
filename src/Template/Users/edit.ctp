<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="users form large-9 medium-8 columns content">
    <?=$this->Form->create($user)?>
    <fieldset>
        <legend><?=__('Edit User')?></legend>
        <?php
echo $this->Form->control('nome');
echo $this->Form->control('username');
echo $this->Form->control('email');
echo $this->Form->control('password');
echo $this->Form->control('matricula');
echo $this->Form->control('cpf');
echo $this->Form->control('perfis_id', ['options' => $perfis]);
echo $this->Form->control('setores_id', ['options' => $setores]);
?>
    </fieldset>
    <?=$this->Form->button(__('Submit'))?>
    <?=$this->Form->end()?>
</div>
