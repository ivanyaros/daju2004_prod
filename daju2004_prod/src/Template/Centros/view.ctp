<?php
/**
  * @var \App\View\AppView $this
  */
$this->assign('title', $nombre);
?>

<div class="centros view large-9 medium-8 columns content">
    <h3><?= h($centro->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($centro->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($centro->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($centro->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($centro->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($centro->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Entradas De Materiales') ?>
        	<li><?= $this->Html->link(__('New Entradas De Materiale'), ['controller' => 'EntradasDeMateriales', 'action' => 'add',$centro->id,'centro_id']) ?> </li>
        </h4>
        <?php if (!empty($centro->entradas_de_materiales)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Proveedores Cliente Id') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Albaran') ?></th>
                <th scope="col"><?= __('Fecha Envio') ?></th>
                <th scope="col"><?= __('Fecha Recepcion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($centro->entradas_de_materiales as $entradasDeMateriales): ?>
            <tr>
                <td><?= h($entradasDeMateriales->proveedores_cliente_id) ?></td>
                <td><?= h($entradasDeMateriales->referencia) ?></td>
                <td><?= h($entradasDeMateriales->observaciones) ?></td>
                <td><?= h($entradasDeMateriales->albaran) ?></td>
                <td><?= h($entradasDeMateriales->fecha_envio) ?></td>
                <td><?= h($entradasDeMateriales->fecha_recepcion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EntradasDeMateriales', 'action' => 'view', $entradasDeMateriales->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EntradasDeMateriales', 'action' => 'edit', $entradasDeMateriales->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EntradasDeMateriales', 'action' => 'delete', $entradasDeMateriales->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entradasDeMateriales->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Envios') ?>
        	<li><?= $this->Html->link(__('New Envio'), ['controller' => 'Envios', 'action' => 'add',$centro->id,'centro_id']) ?> </li>
        </h4>
        <?php if (!empty($centro->envios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Proveedores Cliente Id') ?></th>
                <th scope="col"><?= __('Fecha Pedido') ?></th>
                <th scope="col"><?= __('Fecha Envio') ?></th>
                <th scope="col"><?= __('Albaran') ?></th>
                <th scope="col"><?= __('Pedidos Empresa Id') ?></th>
                <th scope="col"><?= __('Fecha Entrega') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Direccione Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($centro->envios as $envios): ?>
            <tr>
                <td><?= h($envios->proveedores_cliente_id) ?></td>
                <td><?= h($envios->fecha_pedido) ?></td>
                <td><?= h($envios->fecha_envio) ?></td>
                <td><?= h($envios->albaran) ?></td>
                <td><?= h($envios->pedidos_empresa_id) ?></td>
                <td><?= h($envios->fecha_entrega) ?></td>
                <td><?= h($envios->observaciones) ?></td>
                <td><?= h($envios->direccione_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Envios', 'action' => 'view', $envios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Envios', 'action' => 'edit', $envios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Envios', 'action' => 'delete', $envios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $envios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Localizaciones') ?>
        	<li><?= $this->Html->link(__('New Localizacione'), ['controller' => 'Localizaciones', 'action' => 'add',$centro->id,'centro_id']) ?> </li>
            
        </h4>
        <?php if (!empty($centro->localizaciones)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($centro->localizaciones as $localizaciones): ?>
            <tr>
                <td><?= h($localizaciones->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Localizaciones', 'action' => 'view', $localizaciones->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Localizaciones', 'action' => 'edit', $localizaciones->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Localizaciones', 'action' => 'delete', $localizaciones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $localizaciones->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ordens') ?>
        	<li><?= $this->Html->link(__('New Orden'), ['controller' => 'Ordens', 'action' => 'add',$centro->id,'centro_id']) ?> </li>
        </h4>
        <?php if (!empty($centro->ordens)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Fecha Creacion') ?></th>
                <th scope="col"><?= __('Fecha Terminacion') ?></th>
                <th scope="col"><?= __('Estado Id') ?></th>
                <th scope="col"><?= __('Proceso Id') ?></th>
                <th scope="col"><?= __('Scrap') ?></th>
                <th scope="col"><?= __('Coste Operario') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Prioridade Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($centro->ordens as $ordens): ?>
            <tr>
                <td><?= h($ordens->name) ?></td>
                <td><?= h($ordens->referencia) ?></td>
                <td><?= h($ordens->cantidad) ?></td>
                <td><?= h($ordens->fecha_creacion) ?></td>
                <td><?= h($ordens->fecha_terminacion) ?></td>
                <td><?= h($ordens->estado_id) ?></td>
                <td><?= h($ordens->proceso_id) ?></td>
                <td><?= h($ordens->scrap) ?></td>
                <td><?= h($ordens->coste_operario) ?></td>
                <td><?= h($ordens->observaciones) ?></td>
                <td><?= h($ordens->prioridade_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ordens', 'action' => 'view', $ordens->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ordens', 'action' => 'edit', $ordens->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ordens', 'action' => 'delete', $ordens->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordens->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Proceso') ?>
        	<li><?= $this->Html->link(__('New Proceso'), ['controller' => 'Proceso', 'action' => 'add',$centro->id,'centro_id']) ?> </li>
        </h4>
        <?php if (!empty($centro->proceso)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Familia Id') ?></th>
                <th scope="col"><?= __('Precio') ?></th>
                <th scope="col"><?= __('Moneda Id') ?></th>
                <th scope="col"><?= __('Iva Id') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Visible') ?></th>
                <th scope="col"><?= __('Enlaces') ?></th>
                <th scope="col"><?= __('Coste Tiempo') ?></th>
                <th scope="col"><?= __('Coste Operaciones') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Larga') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($centro->proceso as $proceso): ?>
            <tr>
                <td><?= h($proceso->name) ?></td>
                <td><?= h($proceso->referencia) ?></td>
                <td><?= h($proceso->familia_id) ?></td>
                <td><?= h($proceso->precio) ?></td>
                <td><?= h($proceso->moneda_id) ?></td>
                <td><?= h($proceso->iva_id) ?></td>
                <td><?= h($proceso->observaciones) ?></td>
                <td><?= h($proceso->visible) ?></td>
                <td><?= h($proceso->enlaces) ?></td>
                <td><?= h($proceso->coste_tiempo) ?></td>
                <td><?= h($proceso->coste_operaciones) ?></td>
                <td><?= h($proceso->descripcion) ?></td>
                <td><?= h($proceso->larga) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Proceso', 'action' => 'view', $proceso->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Proceso', 'action' => 'edit', $proceso->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Proceso', 'action' => 'delete', $proceso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proceso->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
