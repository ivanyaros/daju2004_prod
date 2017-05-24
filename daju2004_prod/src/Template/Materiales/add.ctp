<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Materiales'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Material'), ['controller' => 'Material', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Material', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Localizaciones'), ['controller' => 'Localizaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Localizacione'), ['controller' => 'Localizaciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entradas Material'), ['controller' => 'EntradasMaterial', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entradas Material'), ['controller' => 'EntradasMaterial', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Objetos'), ['controller' => 'Objetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Objeto'), ['controller' => 'Objetos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="materiales form large-9 medium-8 columns content">
    <?= $this->Form->create($materiale) ?>
    <fieldset>
        <legend><?= __('Add Materiale') ?></legend>
        <?php
            echo $this->Form->control('material_id', ['options' => $material, 'empty' => true]);
            echo $this->Form->control('fecha_entega', ['empty' => true]);
            echo $this->Form->control('localizacione_id', ['options' => $localizaciones, 'empty' => true]);
            echo $this->Form->control('entradas_material_id', ['options' => $entradasMaterial, 'empty' => true]);
            echo $this->Form->control('bobina_lote');
            echo $this->Form->control('bobinas');
            echo $this->Form->control('lote');
            echo $this->Form->control('numero_bobina');
            echo $this->Form->control('taras');
            echo $this->Form->control('metros_brutos');
            echo $this->Form->control('metros_netos');
            echo $this->Form->control('metros_actuales');
            echo $this->Form->control('metros_utiles');
            echo $this->Form->control('scrap');
            echo $this->Form->control('en_uso');
            echo $this->Form->control('terminado');
            echo $this->Form->control('peso_ud');
            echo $this->Form->control('objetos._ids', ['options' => $objetos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
