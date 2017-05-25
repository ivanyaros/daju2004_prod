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
                ['action' => 'delete', $pedidosEmpresa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pedidosEmpresa->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pedidos Empresas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Proveedores Clientes'), ['controller' => 'ProveedoresClientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proveedores Cliente'), ['controller' => 'ProveedoresClientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Envios'), ['controller' => 'Envios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Envio'), ['controller' => 'Envios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos Productos Detalle'), ['controller' => 'PedidosProductosDetalle', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedidos Productos Detalle'), ['controller' => 'PedidosProductosDetalle', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pedidosEmpresas form large-9 medium-8 columns content">
    <?= $this->Form->create($pedidosEmpresa) ?>
    <fieldset>
        <legend><?= __('Edit Pedidos Empresa') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('referencia');
            echo $this->Form->control('proveedores_cliente_id', ['options' => $proveedoresClientes, 'empty' => true]);
            echo $this->Form->control('fecha', ['empty' => true]);
            echo $this->Form->control('albaran');
            echo $this->Form->control('observaciones');
            echo $this->Form->control('terminado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
