<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="utensilios form large-9 medium-8 columns content">
    <?= $this->Form->create($utensilio) ?>
    <fieldset>
        <legend><?= __('Edit Utensilio') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('referencia');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
