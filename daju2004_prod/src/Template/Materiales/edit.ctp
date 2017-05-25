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
                ['action' => 'delete', $materiale->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $materiale->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Materiales'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Material'), ['controller' => 'Material', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Material', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Localizaciones'), ['controller' => 'Localizaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Localizacione'), ['controller' => 'Localizaciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entradas De Materiales'), ['controller' => 'EntradasDeMateriales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entradas De Materiale'), ['controller' => 'EntradasDeMateriales', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materiales Entrada'), ['controller' => 'MaterialesEntrada', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materiales Entrada'), ['controller' => 'MaterialesEntrada', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="materiales form large-9 medium-8 columns content">
    <?= $this->Form->create($materiale) ?>
    <fieldset>
        <legend><?= __('Edit Materiale') ?></legend>
        <?php
            echo $this->Form->control('material_id', ['options' => $material, 'empty' => true]);
            echo $this->Form->control('fecha_entega', ['empty' => true]);
            echo $this->Form->control('localizacione_id', ['options' => $localizaciones, 'empty' => true]);
            echo $this->Form->control('entradas_material_id', ['options' => $entradasDeMateriales, 'empty' => true]);
            echo $this->Form->control('bobina_lote');
            echo $this->Form->control('bobinas');
            echo $this->Form->control('bobinas_actual');
            echo $this->Form->control('lote');
            echo $this->Form->control('numero_bobina');
            echo $this->Form->control('taras');
            echo $this->Form->control('taras_reales');
            echo $this->Form->control('taras_mediciones');
            echo $this->Form->control('metros_brutos');
            echo $this->Form->control('metros_netos');
            echo $this->Form->control('metros_actuales');
            echo $this->Form->control('metros_utiles');
            echo $this->Form->control('scrap');
            echo $this->Form->control('en_uso');
            echo $this->Form->control('terminado');
            echo $this->Form->control('peso_ud');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
