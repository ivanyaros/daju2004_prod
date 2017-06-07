<?php
/**
  * @var \App\View\AppView $this
  */
?>



<div class="estadosDeOrdens form large-9 medium-8 columns content">
    <?= $this->Form->create($estadosDeOrden) ?>
    <fieldset>
        <legend><?= __('Edit Estados De Orden') ?></legend>
        <?php
            echo $this->Form->control('orden_id', ['options' => $ordens, 'empty' => true]);
            echo $this->Form->control('estado_id', ['options' => $estados, 'empty' => true]);
            echo $this->Form->control('fecha_inicio', ['empty' => true]);
            echo $this->Form->control('fecha_fin', ['empty' => true]);
            echo $this->Form->control('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
