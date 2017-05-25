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
                ['action' => 'delete', $enviosObjeto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $enviosObjeto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Envios Objetos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Envios'), ['controller' => 'Envios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Envio'), ['controller' => 'Envios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Objetos'), ['controller' => 'Objetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Objeto'), ['controller' => 'Objetos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="enviosObjetos form large-9 medium-8 columns content">
    <?= $this->Form->create($enviosObjeto) ?>
    <fieldset>
        <legend><?= __('Edit Envios Objeto') ?></legend>
        <?php
            echo $this->Form->control('envio_id', ['options' => $envios, 'empty' => true]);
            echo $this->Form->control('objeto_id', ['options' => $objetos, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
