<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="objetosEntrada form large-9 medium-8 columns content">
    <?= $this->Form->create($objetosEntrada) ?>
    <fieldset>
        <legend><?= __('Edit Objetos Entrada') ?></legend>
        <?php
            echo $this->Form->control('entrada_id');
            echo $this->Form->control('salida_id', ['options' => $objetos, 'empty' => true]);
            echo $this->Form->control('cantidad_entrada');
            echo $this->Form->control('cantidad_producida');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
