<?php
/**
  * @var \App\View\AppView $this
  */
?>



<div class="familias form large-9 medium-8 columns content">
    <?= $this->Form->create($familia) ?>
    <fieldset>
        <legend><?= __('Edit Familia') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
