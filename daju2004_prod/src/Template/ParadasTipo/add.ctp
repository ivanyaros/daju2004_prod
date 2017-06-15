<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="paradasTipo form large-9 medium-8 columns content">
    <?= $this->Form->create($paradasTipo) ?>
    <fieldset>
        <legend><?= __('Add Paradas Tipo') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
