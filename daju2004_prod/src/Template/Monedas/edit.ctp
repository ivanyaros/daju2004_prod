<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="monedas form large-9 medium-8 columns content">
    <?= $this->Form->create($moneda) ?>
    <fieldset>
        <legend><?= __('Edit Moneda') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('valor');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
