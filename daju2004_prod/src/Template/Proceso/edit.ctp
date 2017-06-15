<?php
/**
  * @var \App\View\AppView $this
  */
?>



<div class="proceso form large-9 medium-8 columns content">
    <?= $this->Form->create($proceso) ?>
    <fieldset>
        <legend><?= __('Edit Proceso') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('referencia');
            echo $this->Form->control('familia_id', ['options' => $familias, 'empty' => true]);
            echo $this->Form->control('precio');
            echo $this->Form->control('moneda_id', ['options' => $monedas, 'empty' => true]);
            echo $this->Form->control('iva_id', ['options' => $ivas, 'empty' => true]);
            echo $this->Form->control('observaciones');
            echo $this->Form->control('visible');
            echo $this->Form->control('enlaces');
            echo $this->Form->control('centro_id', ['options' => $centros, 'empty' => true]);
            echo $this->Form->control('segundos_tiempo');
            echo $this->Form->control('coste_operaciones');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('larga');
            echo $this->Form->control('atributos');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
