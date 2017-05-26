<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="producto form large-9 medium-8 columns content">
    <?= $this->Form->create($producto) ?>
    <fieldset>
        <legend><?= __('Add Producto') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('referencia');
            echo $this->Form->control('referencia_proveedor');
            echo $this->Form->control('familia_id', ['options' => $familias, 'empty' => true]);
            echo $this->Form->control('precio');
            echo $this->Form->control('moneda_id', ['options' => $monedas, 'empty' => true]);
            echo $this->Form->control('iva_id', ['options' => $ivas, 'empty' => true]);
            echo $this->Form->control('observaciones');
            echo $this->Form->control('visible');
            echo $this->Form->control('peso');
            echo $this->Form->control('cantidad');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('larga');
            echo $this->Form->control('coste');
            echo $this->Form->control('ancho');
            echo $this->Form->control('largo');
            echo $this->Form->control('tolerancia');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
