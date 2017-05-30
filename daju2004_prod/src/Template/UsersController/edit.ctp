<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usersController->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usersController->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users Controller'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios En Estados Orden'), ['controller' => 'UsuariosEnEstadosOrden', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuarios En Estados Orden'), ['controller' => 'UsuariosEnEstadosOrden', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usersController form large-9 medium-8 columns content">
    <?= $this->Form->create($usersController) ?>
    <fieldset>
        <legend><?= __('Edit Users Controller') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('apellidos');
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('email');
            echo $this->Form->control('direccion');
            echo $this->Form->control('tipo');
            echo $this->Form->control('coste_operacion');
            echo $this->Form->control('coste_tiempo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
