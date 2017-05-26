<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="estadosDeOrdens view large-9 medium-8 columns content">
    <h3><?= h($estadosDeOrden->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Orden') ?></th>
            <td><?= $estadosDeOrden->has('orden') ? $this->Html->link($estadosDeOrden->orden->id, ['controller' => 'Ordens', 'action' => 'view', $estadosDeOrden->orden->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $estadosDeOrden->has('estado') ? $this->Html->link($estadosDeOrden->estado->id, ['controller' => 'Estados', 'action' => 'view', $estadosDeOrden->estado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($estadosDeOrden->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($estadosDeOrden->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Inicio') ?></th>
            <td><?= h($estadosDeOrden->fecha_inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Fin') ?></th>
            <td><?= h($estadosDeOrden->fecha_fin) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Maquinas Usadas') ?>
        	<li><?= $this->Html->link(__('New Maquinas Usada'), ['controller' => 'MaquinasUsadas', 'action' => 'add',$estadosDeOrden->id]) ?> </li>
        </h4>
        <?php if (!empty($estadosDeOrden->maquinas_usadas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Estados De Orden Id') ?></th>
                <th scope="col"><?= __('Maquina Id') ?></th>
                <th scope="col"><?= __('Operaciones') ?></th>
                <th scope="col"><?= __('Uso') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($estadosDeOrden->maquinas_usadas as $maquinasUsadas): ?>
            <tr>
                <td><?= h($maquinasUsadas->id) ?></td>
                <td><?= h($maquinasUsadas->estados_de_orden_id) ?></td>
                <td><?= h($maquinasUsadas->maquina_id) ?></td>
                <td><?= h($maquinasUsadas->operaciones) ?></td>
                <td><?= h($maquinasUsadas->uso) ?></td>
                <td><?= h($maquinasUsadas->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MaquinasUsadas', 'action' => 'view', $maquinasUsadas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MaquinasUsadas', 'action' => 'edit', $maquinasUsadas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MaquinasUsadas', 'action' => 'delete', $maquinasUsadas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maquinasUsadas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Usuarios En Estados Orden') ?>
        	<li><?= $this->Html->link(__('New Usuarios En Estados Orden'), ['controller' => 'UsuariosEnEstadosOrden', 'action' => 'add',$estadosDeOrden->id]) ?> </li>
        </h4>
        <?php if (!empty($estadosDeOrden->usuarios_en_estados_orden)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Estados De Orden Id') ?></th>
                <th scope="col"><?= __('Usuario Id') ?></th>
                <th scope="col"><?= __('Parte') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($estadosDeOrden->usuarios_en_estados_orden as $usuariosEnEstadosOrden): ?>
            <tr>
                <td><?= h($usuariosEnEstadosOrden->id) ?></td>
                <td><?= h($usuariosEnEstadosOrden->estados_de_orden_id) ?></td>
                <td><?= h($usuariosEnEstadosOrden->usuario_id) ?></td>
                <td><?= h($usuariosEnEstadosOrden->parte) ?></td>
                <td><?= h($usuariosEnEstadosOrden->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UsuariosEnEstadosOrden', 'action' => 'view', $usuariosEnEstadosOrden->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UsuariosEnEstadosOrden', 'action' => 'edit', $usuariosEnEstadosOrden->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UsuariosEnEstadosOrden', 'action' => 'delete', $usuariosEnEstadosOrden->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuariosEnEstadosOrden->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Utensilios Usados') ?>
        	<li><?= $this->Html->link(__('New Utensilios Usado'), ['controller' => 'UtensiliosUsados', 'action' => 'add',$estadosDeOrden->id]) ?> </li>
        </h4>
        <?php if (!empty($estadosDeOrden->utensilios_usados)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Estados De Orden Id') ?></th>
                <th scope="col"><?= __('Utensilio Id') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($estadosDeOrden->utensilios_usados as $utensiliosUsados): ?>
            <tr>
                <td><?= h($utensiliosUsados->id) ?></td>
                <td><?= h($utensiliosUsados->estados_de_orden_id) ?></td>
                <td><?= h($utensiliosUsados->utensilio_id) ?></td>
                <td><?= h($utensiliosUsados->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UtensiliosUsados', 'action' => 'view', $utensiliosUsados->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UtensiliosUsados', 'action' => 'edit', $utensiliosUsados->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UtensiliosUsados', 'action' => 'delete', $utensiliosUsados->id], ['confirm' => __('Are you sure you want to delete # {0}?', $utensiliosUsados->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
