<?php
/**
  * @var \App\View\AppView $this
  */
?>



<div class="tareas form large-9 medium-8 columns content">
    <?= $this->Form->create($tarea) ?>
    <fieldset>
        <legend><?= __('Edit Tarea') ?></legend>
        <?php
            echo $this->Form->control('subproceso_id', ['options' => $subproceso, 'empty' => true]);
            echo $this->Form->control('orden_id', ['options' => $ordens, 'empty' => true]);
            echo $this->Form->control('segundos_duracion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
