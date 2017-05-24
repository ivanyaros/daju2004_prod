<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $objetosEntrada->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $objetosEntrada->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Objetos Entrada'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="objetosEntrada form large-9 medium-8 columns content">
    <?= $this->Form->create($objetosEntrada) ?>
    <fieldset>
        <legend><?= __('Edit Objetos Entrada') ?></legend>
        <?php
            echo $this->Form->control('entrada');
            echo $this->Form->control('salida');
            echo $this->Form->control('cantidad_producida');
            echo $this->Form->control('cantidad_gastada');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
