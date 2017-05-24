<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pedidos Productos Detalle'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos Empresas'), ['controller' => 'PedidosEmpresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedidos Empresa'), ['controller' => 'PedidosEmpresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Producto'), ['controller' => 'Producto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Producto', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prioridades'), ['controller' => 'Prioridades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prioridade'), ['controller' => 'Prioridades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pedidosProductosDetalle form large-9 medium-8 columns content">
    <?= $this->Form->create($pedidosProductosDetalle) ?>
    <fieldset>
        <legend><?= __('Add Pedidos Productos Detalle') ?></legend>
        <?php
            echo $this->Form->control('pedidos_empresa_id', ['options' => $pedidosEmpresas, 'empty' => true]);
            echo $this->Form->control('producto_id', ['options' => $producto, 'empty' => true]);
            echo $this->Form->control('cantidad');
            echo $this->Form->control('fecha', ['empty' => true]);
            echo $this->Form->control('observaciones');
            echo $this->Form->control('prioridade_id', ['options' => $prioridades]);
            echo $this->Form->control('terminado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
