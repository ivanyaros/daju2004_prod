<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="maquinas form large-9 medium-8 columns content">
    <?= $this->Form->create($maquina) ?>
    <fieldset>
        <legend><?= __('Add Maquina') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('referencia');
            echo $this->Form->control('observaciones');
            echo $this->Form->control('coste_operacion');
            echo $this->Form->control('coste_tiempo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
