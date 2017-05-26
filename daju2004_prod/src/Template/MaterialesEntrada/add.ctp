<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="materialesEntrada form large-9 medium-8 columns content">
    <?= $this->Form->create($materialesEntrada) ?>
    <fieldset>
        <legend><?= __('Add Materiales Entrada') ?></legend>
        <?php
            echo $this->Form->control('objeto_id', ['options' => $objetos, 'empty' => true]);
            echo $this->Form->control('materiale_id', ['options' => $materiales, 'empty' => true]);
            echo $this->Form->control('cantidad_producida');
            echo $this->Form->control('metros_gastados');
            echo $this->Form->control('metros_utiles');
            echo $this->Form->control('scrap');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
