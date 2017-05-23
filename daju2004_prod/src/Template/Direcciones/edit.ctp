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
                ['action' => 'delete', $direccione->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $direccione->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Direcciones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Proveedores Clientes'), ['controller' => 'ProveedoresClientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proveedores Cliente'), ['controller' => 'ProveedoresClientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="direcciones form large-9 medium-8 columns content">
    <?= $this->Form->create($direccione) ?>
    <fieldset>
        <legend><?= __('Edit Direccione') ?></legend>
        <?php
            echo $this->Form->control('direccion');
            echo $this->Form->control('telefono');
            echo $this->Form->control('fax');
            echo $this->Form->control('correo');
            echo $this->Form->control('pagina_web');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
