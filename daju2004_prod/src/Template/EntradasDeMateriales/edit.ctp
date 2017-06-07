<?php
/**
  * @var \App\View\AppView $this
  */
?>



<div class="entradasDeMateriales form large-9 medium-8 columns content">
    <?= $this->Form->create($entradasDeMateriale) ?>
    <fieldset>
        <legend><?= __('Edit Entradas De Materiale') ?></legend>
        <?php
            echo $this->Form->control('proveedores_cliente_id', ['options' => $proveedoresClientes, 'empty' => true]);
            echo $this->Form->control('referencia');
            echo $this->Form->control('observaciones');
            echo $this->Form->control('albaran');
            echo $this->Form->control('fecha_envio', ['empty' => true]);
            echo $this->Form->control('centro_id', ['options' => $centros, 'empty' => true]);
            echo $this->Form->control('fecha_recepcion', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
