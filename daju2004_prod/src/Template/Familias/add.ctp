<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="familias form large-9 medium-8 columns content">
    <?= $this->Form->create($familia) ?>
    <fieldset>
        <legend><?= __('Add Familia') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
