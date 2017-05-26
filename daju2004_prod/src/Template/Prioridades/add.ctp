<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="prioridades form large-9 medium-8 columns content">
    <?= $this->Form->create($prioridade) ?>
    <fieldset>
        <legend><?= __('Add Prioridade') ?></legend>
        <?php
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
