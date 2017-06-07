<?php
/**
  * @var \App\View\AppView $this
  */
?>



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
