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
        <li><?= $this->Html->link(__('List Proceso Material Entrada'), ['controller' => 'ProcesoMaterialEntrada', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proceso Material Entrada'), ['controller' => 'ProcesoMaterialEntrada', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Objetos'), ['controller' => 'Objetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Objeto'), ['controller' => 'Objetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proveedores Clientes'), ['controller' => 'ProveedoresClientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proveedores Cliente'), ['controller' => 'ProveedoresClientes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="material view large-9 medium-8 columns content">
    <h3><?= h($material->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($material->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($material->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia Proveedor') ?></th>
            <td><?= h($material->referencia_proveedor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Familia') ?></th>
            <td><?= $material->has('familia') ? $this->Html->link($material->familia->id, ['controller' => 'Familias', 'action' => 'view', $material->familia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color') ?></th>
            <td><?= h($material->color) ?></td>
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
                <th scope="col"><?= __('Bobina Lote') ?></th>
                <th scope="col"><?= __('Bobinas') ?></th>
                <th scope="col"><?= __('Lote') ?></th>
                <th scope="col"><?= __('Numero Bobina') ?></th>
                <th scope="col"><?= __('Taras') ?></th>
                <th scope="col"><?= __('Metros Brutos') ?></th>
                <th scope="col"><?= __('Metros Netos') ?></th>
                <th scope="col"><?= __('Metros Actuales') ?></th>
                <th scope="col"><?= __('Metros Utiles') ?></th>
                <th scope="col"><?= __('Scrap') ?></th>
                <th scope="col"><?= __('En Uso') ?></th>
                <th scope="col"><?= __('Terminado') ?></th>
                <th scope="col"><?= __('Peso Ud') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($material->materiales as $materiales): ?>
            <tr>
                <td><?= h($materiales->id) ?></td>
                <td><?= h($materiales->material_id) ?></td>
                <td><?= h($materiales->fecha_entega) ?></td>
                <td><?= h($materiales->localizacione_id) ?></td>
                <td><?= h($materiales->entradas_material_id) ?></td>
                <td><?= h($materiales->bobina_lote) ?></td>
                <td><?= h($materiales->bobinas) ?></td>
                <td><?= h($materiales->lote) ?></td>
                <td><?= h($materiales->numero_bobina) ?></td>
                <td><?= h($materiales->taras) ?></td>
                <td><?= h($materiales->metros_brutos) ?></td>
                <td><?= h($materiales->metros_netos) ?></td>
                <td><?= h($materiales->metros_actuales) ?></td>
                <td><?= h($materiales->metros_utiles) ?></td>
                <td><?= h($materiales->scrap) ?></td>
                <td><?= h($materiales->en_uso) ?></td>
                <td><?= h($materiales->terminado) ?></td>
                <td><?= h($materiales->peso_ud) ?></td>
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
        <h4><?= __('Related Proceso Material Entrada') ?></h4>
        <?php if (!empty($material->proceso_material_entrada)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Proceso Id') ?></th>
                <th scope="col"><?= __('Material Id') ?></th>
                <th scope="col"><?= __('Metros Lineales') ?></th>
                <th scope="col"><?= __('Metros Cuadrados') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($material->proceso_material_entrada as $procesoMaterialEntrada): ?>
            <tr>
                <td><?= h($procesoMaterialEntrada->id) ?></td>
                <td><?= h($procesoMaterialEntrada->proceso_id) ?></td>
                <td><?= h($procesoMaterialEntrada->material_id) ?></td>
                <td><?= h($procesoMaterialEntrada->metros_lineales) ?></td>
                <td><?= h($procesoMaterialEntrada->metros_cuadrados) ?></td>
                <td><?= h($procesoMaterialEntrada->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProcesoMaterialEntrada', 'action' => 'view', $procesoMaterialEntrada->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProcesoMaterialEntrada', 'action' => 'edit', $procesoMaterialEntrada->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProcesoMaterialEntrada', 'action' => 'delete', $procesoMaterialEntrada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $procesoMaterialEntrada->id)]) ?>
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
                <th scope="col"><?= __('Numero Serie') ?></th>
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
                <td><?= h($objetos->numero_serie) ?></td>
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
                <th scope="col"><?= __('Proveedor Cliente') ?></th>
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
                <td><?= h($proveedoresClientes->proveedor_cliente) ?></td>
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
