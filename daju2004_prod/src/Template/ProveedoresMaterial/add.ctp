<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="proveedoresMaterial form large-9 medium-8 columns content">
    <?= $this->Form->create($proveedoresMaterial) ?>
    <fieldset>
        <legend><?= __('Add Proveedores Material') ?></legend>
        <?php
            echo $this->Form->control('proveedores_cliente_id', ['options' => $proveedoresClientes, 'empty' => true]);
            echo $this->Form->control('material_id', ['options' => $material, 'empty' => true]);
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
