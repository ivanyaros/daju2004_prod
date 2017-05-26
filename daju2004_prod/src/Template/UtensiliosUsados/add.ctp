<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="utensiliosUsados form large-9 medium-8 columns content">
    <?= $this->Form->create($utensiliosUsado) ?>
    <fieldset>
        <legend><?= __('Add Utensilios Usado') ?></legend>
        <?php
            echo $this->Form->control('estados_de_orden_id', ['options' => $estadosDeOrdens, 'empty' => true]);
            echo $this->Form->control('utensilio_id', ['options' => $utensilios, 'empty' => true]);
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
