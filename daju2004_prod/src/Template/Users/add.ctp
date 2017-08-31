<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('apellidos');
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('email');
            echo $this->Form->control('direccion');
            echo $this->Form->control('tipo');
            echo $this->Form->control('coste_operacion');
            echo $this->Form->control('coste_tiempo');
            echo $this->Form->control('categoria_id', ['options' => $categorias, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
