<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="enviosObjetos view large-9 medium-8 columns content">
    <h3><?= h($enviosObjeto->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Envio') ?></th>
            <td><?= $enviosObjeto->has('envio') ? $this->Html->link($enviosObjeto->envio->label, ['controller' => 'Envios', 'action' => 'view', $enviosObjeto->envio->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Objeto') ?></th>
            <td><?= $enviosObjeto->has('objeto') ? $this->Html->link($enviosObjeto->objeto->label, ['controller' => 'Objetos', 'action' => 'view', $enviosObjeto->objeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($enviosObjeto->id) ?></td>
        </tr>
    </table>
</div>
