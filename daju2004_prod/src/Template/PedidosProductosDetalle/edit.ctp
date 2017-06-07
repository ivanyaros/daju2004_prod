<?php
/**
  * @var \App\View\AppView $this
  */
?>



<div class="pedidosProductosDetalle form large-9 medium-8 columns content">
    <?= $this->Form->create($pedidosProductosDetalle) ?>
    <fieldset>
        <legend><?= __('Edit Pedidos Productos Detalle') ?></legend>
        <?php
            echo $this->Form->control('pedidos_empresa_id', ['options' => $pedidosEmpresas, 'empty' => true]);
            echo $this->Form->control('producto_id', ['options' => $producto, 'empty' => true]);
            echo $this->Form->control('cantidad');
            echo $this->Form->control('fecha', ['empty' => true]);
            echo $this->Form->control('observaciones');
            echo $this->Form->control('prioridade_id', ['options' => $prioridades, 'empty' => true]);
            echo $this->Form->control('terminado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
