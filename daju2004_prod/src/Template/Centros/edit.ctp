<?php
/**
  * @var \App\View\AppView $this
  */
?>



<div class="centros form large-9 medium-8 columns content">
    <?= $this->Form->create($centro) ?>
    <fieldset>
        <legend><?= __('Edit Centro') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('referencia');
            echo $this->Form->control('direccion');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
