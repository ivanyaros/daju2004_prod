<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="usuariosEnTareas form large-9 medium-8 columns content">
    <?= $this->Form->create($usuariosEnTarea) ?>
    <fieldset>
        <legend><?= __('Add Usuarios En Tarea') ?></legend>
        <?php
            echo $this->Form->control('tarea_id', ['options' => $tareas, 'empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('parte');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
