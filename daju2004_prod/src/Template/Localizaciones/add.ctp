<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="localizaciones form large-9 medium-8 columns content">
    <?= $this->Form->create($localizacione) ?>
    <fieldset>
        <legend><?= __('Add Localizacione') ?></legend>
        <?php
            echo $this->Form->control('centro_id', ['options' => $centros, 'empty' => true]);
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
