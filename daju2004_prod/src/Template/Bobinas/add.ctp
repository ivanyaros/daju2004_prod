<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bobinas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bobinas form large-9 medium-8 columns content">
    <?= $this->Form->create($bobina) ?>
    <fieldset>
        <legend><?= __('Add Bobina') ?></legend>
        <?php
            echo $this->Form->control('lote');
            echo $this->Form->control('numero');
            echo $this->Form->control('taras');
            echo $this->Form->control('metros_brutos');
            echo $this->Form->control('metros_netos');
            echo $this->Form->control('metros_actuales');
            echo $this->Form->control('metros_utiles');
            echo $this->Form->control('scrap');
            echo $this->Form->control('en_uso');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
