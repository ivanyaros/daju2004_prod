<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ordens form large-9 medium-8 columns content">
    <?= $this->Form->create($orden) ?>
    <fieldset>
        <legend><?= __('Edit Orden') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('referencia');
            echo $this->Form->control('cantidad');
            echo $this->Form->control('fecha_creacion', ['empty' => true]);
            echo $this->Form->control('fecha_terminacion', ['empty' => true]);
            echo $this->Form->control('estado_id', ['options' => $estados, 'empty' => true]);
            echo $this->Form->control('centro_id', ['options' => $centros, 'empty' => true]);
            echo $this->Form->control('proceso_id', ['options' => $proceso]);
            echo $this->Form->control('scrap');
            echo $this->Form->control('coste_operario');
            echo $this->Form->control('observaciones');
            echo $this->Form->control('prioridade_id', ['options' => $prioridades]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
