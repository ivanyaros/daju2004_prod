<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="usuariosEnEstadosOrden form large-9 medium-8 columns content">
    <?= $this->Form->create($usuariosEnEstadosOrden) ?>
    <fieldset>
        <legend><?= __('Edit Usuarios En Estados Orden') ?></legend>
        <?php
            echo $this->Form->control('estados_de_orden_id', ['options' => $estadosDeOrdens, 'empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('parte');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
