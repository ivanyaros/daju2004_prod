<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ordens Estado'), ['action' => 'edit', $ordensEstado->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ordens Estado'), ['action' => 'delete', $ordensEstado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordensEstado->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ordens Estados'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ordens Estado'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ordens'), ['controller' => 'Ordens', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orden'), ['controller' => 'Ordens', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Maquinas'), ['controller' => 'Maquinas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Maquina'), ['controller' => 'Maquinas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Utensilios'), ['controller' => 'Utensilios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Utensilio'), ['controller' => 'Utensilios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ordensEstados view large-9 medium-8 columns content">
    <h3><?= h($ordensEstado->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Orden') ?></th>
            <td><?= $ordensEstado->has('orden') ? $this->Html->link($ordensEstado->orden->id, ['controller' => 'Ordens', 'action' => 'view', $ordensEstado->orden->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $ordensEstado->has('estado') ? $this->Html->link($ordensEstado->estado->id, ['controller' => 'Estados', 'action' => 'view', $ordensEstado->estado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($ordensEstado->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ordensEstado->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Inicio') ?></th>
            <td><?= h($ordensEstado->fecha_inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Fin') ?></th>
            <td><?= h($ordensEstado->fecha_fin) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Maquinas') ?></h4>
        <?php if (!empty($ordensEstado->maquinas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Coste Operacion') ?></th>
                <th scope="col"><?= __('Coste Tiempo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ordensEstado->maquinas as $maquinas): ?>
            <tr>
                <td><?= h($maquinas->id) ?></td>
                <td><?= h($maquinas->nombre) ?></td>
                <td><?= h($maquinas->referencia) ?></td>
                <td><?= h($maquinas->observaciones) ?></td>
                <td><?= h($maquinas->coste_operacion) ?></td>
                <td><?= h($maquinas->coste_tiempo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Maquinas', 'action' => 'view', $maquinas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Maquinas', 'action' => 'edit', $maquinas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Maquinas', 'action' => 'delete', $maquinas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maquinas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Usuarios') ?></h4>
        <?php if (!empty($ordensEstado->usuarios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Apellidos') ?></th>
                <th scope="col"><?= __('Login') ?></th>
                <th scope="col"><?= __('Pass') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Direccion') ?></th>
                <th scope="col"><?= __('Tipo') ?></th>
                <th scope="col"><?= __('Coste Operacion') ?></th>
                <th scope="col"><?= __('Coste Tiempo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ordensEstado->usuarios as $usuarios): ?>
            <tr>
                <td><?= h($usuarios->id) ?></td>
                <td><?= h($usuarios->nombre) ?></td>
                <td><?= h($usuarios->apellidos) ?></td>
                <td><?= h($usuarios->login) ?></td>
                <td><?= h($usuarios->pass) ?></td>
                <td><?= h($usuarios->email) ?></td>
                <td><?= h($usuarios->direccion) ?></td>
                <td><?= h($usuarios->tipo) ?></td>
                <td><?= h($usuarios->coste_operacion) ?></td>
                <td><?= h($usuarios->coste_tiempo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Usuarios', 'action' => 'view', $usuarios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Usuarios', 'action' => 'edit', $usuarios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Usuarios', 'action' => 'delete', $usuarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuarios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Utensilios') ?></h4>
        <?php if (!empty($ordensEstado->utensilios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ordensEstado->utensilios as $utensilios): ?>
            <tr>
                <td><?= h($utensilios->id) ?></td>
                <td><?= h($utensilios->nombre) ?></td>
                <td><?= h($utensilios->referencia) ?></td>
                <td><?= h($utensilios->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Utensilios', 'action' => 'view', $utensilios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Utensilios', 'action' => 'edit', $utensilios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Utensilios', 'action' => 'delete', $utensilios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $utensilios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
