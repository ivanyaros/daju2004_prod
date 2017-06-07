<?php
/**
  * @var \App\View\AppView $this
  */
?>



<div class="procesoProductoSalida form large-9 medium-8 columns content">
    <?= $this->Form->create($procesoProductoSalida) ?>
    <fieldset>
        <legend><?= __('Edit Proceso Producto Salida') ?></legend>
        <?php
            echo $this->Form->control('proceso_id', ['options' => $proceso, 'empty' => true]);
            echo $this->Form->control('producto_id', ['options' => $producto, 'empty' => true]);
            echo $this->Form->control('cantidad');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
