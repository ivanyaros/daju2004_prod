<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Material'), ['action' => 'edit', $material->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Material'), ['action' => 'delete', $material->id], ['confirm' => __('Are you sure you want to delete # {0}?', $material->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Material'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Material'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Familias'), ['controller' => 'Familias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Familia'), ['controller' => 'Familias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Monedas'), ['controller' => 'Monedas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Moneda'), ['controller' => 'Monedas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ivas'), ['controller' => 'Ivas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Iva'), ['controller' => 'Ivas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materiales'), ['controller' => 'Materiales', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materiale'), ['controller' => 'Materiales', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Objetos'), ['controller' => 'Objetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Objeto'), ['controller' => 'Objetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proceso'), ['controller' => 'Proceso', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proceso'), ['controller' => 'Proceso', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proveedores Clientes'), ['controller' => 'ProveedoresClientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proveedores Cliente'), ['controller' => 'ProveedoresClientes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="material view large-9 medium-8 columns content">
    <h3><?= h($material->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Familia') ?></th>
            <td><?= $material->has('familia') ? $this->Html->link($material->familia->id, ['controller' => 'Familias', 'action' => 'view', $material->familia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Moneda') ?></th>
            <td><?= $material->has('moneda') ? $this->Html->link($material->moneda->id, ['controller' => 'Monedas', 'action' => 'view', $material->moneda->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Iva') ?></th>
            <td><?= $material->has('iva') ? $this->Html->link($material->iva->id, ['controller' => 'Ivas', 'action' => 'view', $material->iva->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($material->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($material->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longitud') ?></th>
            <td><?= $this->Number->format($material->longitud) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Anchura') ?></th>
            <td><?= $this->Number->format($material->anchura) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profundidad') ?></th>
            <td><?= $this->Number->format($material->profundidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gramaje') ?></th>
            <td><?= $this->Number->format($material->gramaje) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Peso Ud') ?></th>
            <td><?= $this->Number->format($material->peso_ud) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unidades Embalaje') ?></th>
            <td><?= $this->Number->format($material->unidades_embalaje) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Precio') ?></th>
            <td><?= $this->Number->format($material->precio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visible') ?></th>
            <td><?= $material->visible ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Materiales') ?></h4>
        <?php if (!empty($material->materiales)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Material Id') ?></th>
                <th scope="col"><?= __('Fecha Entega') ?></th>
                <th scope="col"><?= __('Localizacione Id') ?></th>
                <th scope="col"><?= __('Entradas Material Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($material->materiales as $materiales): ?>
            <tr>
                <td><?= h($materiales->id) ?></td>
                <td><?= h($materiales->material_id) ?></td>
                <td><?= h($materiales->fecha_entega) ?></td>
                <td><?= h($materiales->localizacione_id) ?></td>
                <td><?= h($materiales->entradas_material_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Materiales', 'action' => 'view', $materiales->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Materiales', 'action' => 'edit', $materiales->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Materiales', 'action' => 'delete', $materiales->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materiales->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Objetos') ?></h4>
        <?php if (!empty($material->objetos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Producto Id') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Orden Id') ?></th>
                <th scope="col"><?= __('Lote') ?></th>
                <th scope="col"><?= __('Localizacione Id') ?></th>
                <th scope="col"><?= __('Coste') ?></th>
                <th scope="col"><?= __('Defectuosos') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($material->objetos as $objetos): ?>
            <tr>
                <td><?= h($objetos->id) ?></td>
                <td><?= h($objetos->producto_id) ?></td>
                <td><?= h($objetos->referencia) ?></td>
                <td><?= h($objetos->orden_id) ?></td>
                <td><?= h($objetos->lote) ?></td>
                <td><?= h($objetos->localizacione_id) ?></td>
                <td><?= h($objetos->coste) ?></td>
                <td><?= h($objetos->defectuosos) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Objetos', 'action' => 'view', $objetos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Objetos', 'action' => 'edit', $objetos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Objetos', 'action' => 'delete', $objetos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $objetos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Proceso') ?></h4>
        <?php if (!empty($material->proceso)): ?>
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
            <?php foreach ($material->proceso as $proceso): ?>
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
        <h4><?= __('Related Proveedores Clientes') ?></h4>
        <?php if (!empty($material->proveedores_clientes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Direccion Fiscal') ?></th>
                <th scope="col"><?= __('Telefono') ?></th>
                <th scope="col"><?= __('Fax') ?></th>
                <th scope="col"><?= __('Correo') ?></th>
                <th scope="col"><?= __('Pagina Web') ?></th>
                <th scope="col"><?= __('NIF CIF') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Tipo') ?></th>
                <th scope="col"><?= __('Visible') ?></th>
                <th scope="col"><?= __('Persona Contacto') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($material->proveedores_clientes as $proveedoresClientes): ?>
            <tr>
                <td><?= h($proveedoresClientes->id) ?></td>
                <td><?= h($proveedoresClientes->nombre) ?></td>
                <td><?= h($proveedoresClientes->direccion_fiscal) ?></td>
                <td><?= h($proveedoresClientes->telefono) ?></td>
                <td><?= h($proveedoresClientes->fax) ?></td>
                <td><?= h($proveedoresClientes->correo) ?></td>
                <td><?= h($proveedoresClientes->pagina_web) ?></td>
                <td><?= h($proveedoresClientes->NIF_CIF) ?></td>
                <td><?= h($proveedoresClientes->observaciones) ?></td>
                <td><?= h($proveedoresClientes->tipo) ?></td>
                <td><?= h($proveedoresClientes->visible) ?></td>
                <td><?= h($proveedoresClientes->persona_contacto) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProveedoresClientes', 'action' => 'view', $proveedoresClientes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProveedoresClientes', 'action' => 'edit', $proveedoresClientes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProveedoresClientes', 'action' => 'delete', $proveedoresClientes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedoresClientes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
