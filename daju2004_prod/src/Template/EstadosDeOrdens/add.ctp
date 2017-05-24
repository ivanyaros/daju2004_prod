<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Estados De Ordens'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ordens'), ['controller' => 'Ordens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Orden'), ['controller' => 'Ordens', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Maquinas Usadas'), ['controller' => 'MaquinasUsadas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Maquinas Usada'), ['controller' => 'MaquinasUsadas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios En Estados Orden'), ['controller' => 'UsuariosEnEstadosOrden', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuarios En Estados Orden'), ['controller' => 'UsuariosEnEstadosOrden', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Utensilios Usados'), ['controller' => 'UtensiliosUsados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Utensilios Usado'), ['controller' => 'UtensiliosUsados', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estadosDeOrdens form large-9 medium-8 columns content">
    <?= $this->Form->create($estadosDeOrden) ?>
    <fieldset>
        <legend><?= __('Add Estados De Orden') ?></legend>
        <?php
            echo $this->Form->control('orden_id', ['options' => $ordens, 'empty' => true]);
            echo $this->Form->control('estado_id', ['options' => $estados, 'empty' => true]);
            echo $this->Form->control('fecha_inicio', ['empty' => true]);
            echo $this->Form->control('fecha_fin', ['empty' => true]);
            echo $this->Form->control('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
