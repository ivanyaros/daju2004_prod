<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="procesoMaterialEntrada form large-9 medium-8 columns content">
    <?= $this->Form->create($procesoMaterialEntrada) ?>
    <fieldset>
        <legend><?= __('Edit Proceso Material Entrada') ?></legend>
        <?php
            echo $this->Form->control('proceso_id', ['options' => $proceso, 'empty' => true]);
            echo $this->Form->control('material_id', ['options' => $material, 'empty' => true]);
            echo $this->Form->control('metros_lineales');
            echo $this->Form->control('metros_cuadrados');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
