<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Centro'), ['action' => 'edit', $centro->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Centro'), ['action' => 'delete', $centro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $centro->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Centros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Centro'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entradas Material'), ['controller' => 'EntradasMaterial', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entradas Material'), ['controller' => 'EntradasMaterial', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Localizaciones'), ['controller' => 'Localizaciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Localizacione'), ['controller' => 'Localizaciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ordens'), ['controller' => 'Ordens', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orden'), ['controller' => 'Ordens', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proceso'), ['controller' => 'Proceso', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proceso'), ['controller' => 'Proceso', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Salidas Objetos'), ['controller' => 'SalidasObjetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salidas Objeto'), ['controller' => 'SalidasObjetos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="centros view large-9 medium-8 columns content">
    <h3><?= h($centro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($centro->nombre) ?></td>
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
            <th scope="row"><?= __('Centroscol') ?></th>
            <td><?= h($centro->centroscol) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($centro->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Entradas Material') ?></h4>
        <?php if (!empty($centro->entradas_material)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Proveedores Cliente Id') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Albaran') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Centro Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($centro->entradas_material as $entradasMaterial): ?>
            <tr>
                <td><?= h($entradasMaterial->id) ?></td>
                <td><?= h($entradasMaterial->proveedores_cliente_id) ?></td>
                <td><?= h($entradasMaterial->observaciones) ?></td>
                <td><?= h($entradasMaterial->albaran) ?></td>
                <td><?= h($entradasMaterial->fecha) ?></td>
                <td><?= h($entradasMaterial->centro_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EntradasMaterial', 'action' => 'view', $entradasMaterial->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EntradasMaterial', 'action' => 'edit', $entradasMaterial->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EntradasMaterial', 'action' => 'delete', $entradasMaterial->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entradasMaterial->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Localizaciones') ?></h4>
        <?php if (!empty($centro->localizaciones)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Centro Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($centro->localizaciones as $localizaciones): ?>
            <tr>
                <td><?= h($localizaciones->id) ?></td>
                <td><?= h($localizaciones->centro_id) ?></td>
                <td><?= h($localizaciones->nombre) ?></td>
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
        <h4><?= __('Related Ordens') ?></h4>
        <?php if (!empty($centro->ordens)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Fecha Creacion') ?></th>
                <th scope="col"><?= __('Fecha Terminacion') ?></th>
                <th scope="col"><?= __('Estado Id') ?></th>
                <th scope="col"><?= __('Centro Id') ?></th>
                <th scope="col"><?= __('Proceso Id') ?></th>
                <th scope="col"><?= __('Scrap') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($centro->ordens as $ordens): ?>
            <tr>
                <td><?= h($ordens->id) ?></td>
                <td><?= h($ordens->nombre) ?></td>
                <td><?= h($ordens->referencia) ?></td>
                <td><?= h($ordens->cantidad) ?></td>
                <td><?= h($ordens->fecha_creacion) ?></td>
                <td><?= h($ordens->fecha_terminacion) ?></td>
                <td><?= h($ordens->estado_id) ?></td>
                <td><?= h($ordens->centro_id) ?></td>
                <td><?= h($ordens->proceso_id) ?></td>
                <td><?= h($ordens->scrap) ?></td>
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
        <h4><?= __('Related Proceso') ?></h4>
        <?php if (!empty($centro->proceso)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Familia Id') ?></th>
                <th scope="col"><?= __('Precio') ?></th>
                <th scope="col"><?= __('Moneda Id') ?></th>
                <th scope="col"><?= __('Iva Id') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Visible') ?></th>
                <th scope="col"><?= __('Enlaces') ?></th>
                <th scope="col"><?= __('Centro Id') ?></th>
                <th scope="col"><?= __('Procesocol') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($centro->proceso as $proceso): ?>
            <tr>
                <td><?= h($proceso->id) ?></td>
                <td><?= h($proceso->nombre) ?></td>
                <td><?= h($proceso->referencia) ?></td>
                <td><?= h($proceso->familia_id) ?></td>
                <td><?= h($proceso->precio) ?></td>
                <td><?= h($proceso->moneda_id) ?></td>
                <td><?= h($proceso->iva_id) ?></td>
                <td><?= h($proceso->observaciones) ?></td>
                <td><?= h($proceso->visible) ?></td>
                <td><?= h($proceso->enlaces) ?></td>
                <td><?= h($proceso->centro_id) ?></td>
                <td><?= h($proceso->procesocol) ?></td>
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
    <div class="related">
        <h4><?= __('Related Salidas Objetos') ?></h4>
        <?php if (!empty($centro->salidas_objetos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Proveedores Cliente Id') ?></th>
                <th scope="col"><?= __('Fecha Pedido') ?></th>
                <th scope="col"><?= __('Fecha Entrega') ?></th>
                <th scope="col"><?= __('Albaran') ?></th>
                <th scope="col"><?= __('Pedidos Empresa Id') ?></th>
                <th scope="col"><?= __('Centro Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($centro->salidas_objetos as $salidasObjetos): ?>
            <tr>
                <td><?= h($salidasObjetos->id) ?></td>
                <td><?= h($salidasObjetos->proveedores_cliente_id) ?></td>
                <td><?= h($salidasObjetos->fecha_pedido) ?></td>
                <td><?= h($salidasObjetos->fecha_entrega) ?></td>
                <td><?= h($salidasObjetos->albaran) ?></td>
                <td><?= h($salidasObjetos->pedidos_empresa_id) ?></td>
                <td><?= h($salidasObjetos->centro_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SalidasObjetos', 'action' => 'view', $salidasObjetos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SalidasObjetos', 'action' => 'edit', $salidasObjetos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SalidasObjetos', 'action' => 'delete', $salidasObjetos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salidasObjetos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
