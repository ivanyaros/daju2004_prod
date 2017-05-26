<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="objetos form large-9 medium-8 columns content">
    <?= $this->Form->create($objeto) ?>
    <fieldset>
        <legend><?= __('Add Objeto') ?></legend>
        <?php
            echo $this->Form->control('producto_id', ['options' => $producto, 'empty' => true]);
            echo $this->Form->control('numero_serie');
            echo $this->Form->control('referencia');
            echo $this->Form->control('orden_id', ['options' => $ordens]);
            echo $this->Form->control('lote');
            echo $this->Form->control('localizacione_id', ['options' => $localizaciones]);
            echo $this->Form->control('coste');
            echo $this->Form->control('defectuosos');
            echo $this->Form->control('peso');
            echo $this->Form->control('observaciones');
            echo $this->Form->control('envios._ids', ['options' => $envios]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
