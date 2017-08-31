<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="maquinasUsadas form large-9 medium-8 columns content">
    <?= $this->Form->create($maquinasUsada) ?>
    <fieldset>
        <legend><?= __('Add Maquinas Usada') ?></legend>
        <?php
            echo $this->Form->control('tarea_id', ['options' => $tareas, 'empty' => true]);
            echo $this->Form->control('maquina_id', ['options' => $maquinas, 'empty' => true]);
            echo $this->Form->control('operaciones');
            echo $this->Form->control('uso');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
