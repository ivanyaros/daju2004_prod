<?php
/**
  * @var \App\View\AppView $this
  */
?>



<div class="subproceso form large-9 medium-8 columns content">
    <?= $this->Form->create($subproceso) ?>
    <fieldset>
        <legend><?= __('Edit Subproceso') ?></legend>
        <?php
            echo $this->Form->control('proceso_id', ['options' => $proceso, 'empty' => true]);
            echo $this->Form->control('name');
            echo $this->Form->control('segundos_inicio');
            echo $this->Form->control('segundos_duracion');
            echo $this->Form->control('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
