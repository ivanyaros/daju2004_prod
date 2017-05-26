<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="envios form large-9 medium-8 columns content">
    <?= $this->Form->create($envio) ?>
    <fieldset>
        <legend><?= __('Edit Envio') ?></legend>
        <?php
            echo $this->Form->control('proveedores_cliente_id', ['options' => $proveedoresClientes, 'empty' => true]);
            echo $this->Form->control('fecha_pedido', ['empty' => true]);
            echo $this->Form->control('fecha_envio', ['empty' => true]);
            echo $this->Form->control('albaran');
            echo $this->Form->control('pedidos_empresa_id', ['options' => $pedidosEmpresas, 'empty' => true]);
            echo $this->Form->control('centro_id', ['options' => $centros, 'empty' => true]);
            echo $this->Form->control('fecha_entrega', ['empty' => true]);
            echo $this->Form->control('observaciones');
            echo $this->Form->control('direccione_id', ['options' => $direcciones, 'empty' => true]);
            echo $this->Form->control('objetos._ids', ['options' => $objetos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
