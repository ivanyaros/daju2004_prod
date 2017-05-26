<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="maquinasUsadas form large-9 medium-8 columns content">
    <?= $this->Form->create($maquinasUsada) ?>
    <fieldset>
        <legend><?= __('Edit Maquinas Usada') ?></legend>
        <?php
            echo $this->Form->control('estados_de_orden_id', ['options' => $estadosDeOrdens, 'empty' => true]);
            echo $this->Form->control('maquina_id', ['options' => $maquinas, 'empty' => true]);
            echo $this->Form->control('operaciones');
            echo $this->Form->control('uso');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
