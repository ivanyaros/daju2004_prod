<?php
/**
  * @var \App\View\AppView $this
  */
?>

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
