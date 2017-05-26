<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="material form large-9 medium-8 columns content">
    <?= $this->Form->create($material) ?>
    <fieldset>
        <legend><?= __('Add Material') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('referencia');
            echo $this->Form->control('referencia_proveedor');
            echo $this->Form->control('familia_id', ['options' => $familias, 'empty' => true]);
            echo $this->Form->control('longitud');
            echo $this->Form->control('anchura');
            echo $this->Form->control('profundidad');
            echo $this->Form->control('color');
            echo $this->Form->control('gramaje');
            echo $this->Form->control('peso_ud');
            echo $this->Form->control('unidades_embalaje');
            echo $this->Form->control('precio');
            echo $this->Form->control('moneda_id', ['options' => $monedas, 'empty' => true]);
            echo $this->Form->control('iva_id', ['options' => $ivas, 'empty' => true]);
            echo $this->Form->control('observaciones');
            echo $this->Form->control('visible');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
