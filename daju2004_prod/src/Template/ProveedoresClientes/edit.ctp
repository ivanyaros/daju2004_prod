<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="proveedoresClientes form large-9 medium-8 columns content">
    <?= $this->Form->create($proveedoresCliente) ?>
    <fieldset>
        <legend><?= __('Edit Proveedores Cliente') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('direccion_fiscal');
            echo $this->Form->control('telefono');
            echo $this->Form->control('fax');
            echo $this->Form->control('correo');
            echo $this->Form->control('pagina_web');
            echo $this->Form->control('NIF_CIF');
            echo $this->Form->control('observaciones');
            echo $this->Form->control('proveedor_cliente');
            echo $this->Form->control('visible');
            echo $this->Form->control('persona_contacto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
