<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="paradas form large-9 medium-8 columns content">
    <?= $this->Form->create($parada) ?>
    <fieldset>
        <legend><?= __('Add Parada') ?></legend>
        <?php
            echo $this->Form->control('paradas_tipo_id', ['options' => $paradasTipo, 'empty' => true]);
            echo $this->Form->control('orden_id', ['options' => $ordens, 'empty' => true]);
            echo $this->Form->control('duracion');
            echo $this->Form->control('comentario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
