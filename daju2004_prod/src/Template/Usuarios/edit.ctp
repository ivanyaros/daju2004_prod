<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="usuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Edit Usuario') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('apellidos');
            echo $this->Form->control('login');
            echo $this->Form->control('pass');
            echo $this->Form->control('email');
            echo $this->Form->control('direccion');
            echo $this->Form->control('tipo');
            echo $this->Form->control('coste_operacion');
            echo $this->Form->control('coste_tiempo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
