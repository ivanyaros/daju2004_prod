<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="direcciones form large-9 medium-8 columns content">
    <?= $this->Form->create($direccione) ?>
    <fieldset>
        <legend><?= __('Add Direccione') ?></legend>
        <?php
            echo $this->Form->control('proveedores_cliente_id', ['options' => $proveedoresClientes, 'empty' => true]);
            echo $this->Form->control('direccion');
            echo $this->Form->control('telefono');
            echo $this->Form->control('fax');
            echo $this->Form->control('correo');
            echo $this->Form->control('pagina_web');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
