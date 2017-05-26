<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="material view large-9 medium-8 columns content">
    <h3><?= h($material->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($material->name) ?></td>
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
        <h4><?= __('Related Materiales') ?>
        	<li><?= $this->Html->link(__('New Materiale'), ['controller' => 'Materiales', 'action' => 'add',$material->id,'material_id']) ?> </li>
        </h4>
        <?php if (!empty($material->materiales)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Fecha Entega') ?></th>
                <th scope="col"><?= __('Localizacione Id') ?></th>
                <th scope="col"><?= __('Entradas De Materiale Id') ?></th>
                <th scope="col"><?= __('Bobina Lote') ?></th>
                <th scope="col"><?= __('Bobinas') ?></th>
                <th scope="col"><?= __('Bobinas Actual') ?></th>
                <th scope="col"><?= __('Lote') ?></th>
                <th scope="col"><?= __('Numero Bobina') ?></th>
                <th scope="col"><?= __('Taras') ?></th>
                <th scope="col"><?= __('Taras Reales') ?></th>
                <th scope="col"><?= __('Taras Mediciones') ?></th>
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
                <td><?= h($materiales->fecha_entega) ?></td>
                <td><?= h($materiales->localizacione_id) ?></td>
                <td><?= h($materiales->entradas_de_materiale_id) ?></td>
                <td><?= h($materiales->bobina_lote) ?></td>
                <td><?= h($materiales->bobinas) ?></td>
                <td><?= h($materiales->bobinas_actual) ?></td>
                <td><?= h($materiales->lote) ?></td>
                <td><?= h($materiales->numero_bobina) ?></td>
                <td><?= h($materiales->taras) ?></td>
                <td><?= h($materiales->taras_reales) ?></td>
                <td><?= h($materiales->taras_mediciones) ?></td>
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
        <h4><?= __('Related Proceso Material Entrada') ?>
        	<li><?= $this->Html->link(__('New Proceso Material Entrada'), ['controller' => 'ProcesoMaterialEntrada', 'action' => 'add',$material->id,'material_id']) ?> </li>
        </h4>
        <?php if (!empty($material->proceso_material_entrada)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Proceso Id') ?></th>
                <th scope="col"><?= __('Metros Lineales') ?></th>
                <th scope="col"><?= __('Metros Cuadrados') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($material->proceso_material_entrada as $procesoMaterialEntrada): ?>
            <tr>
                <td><?= h($procesoMaterialEntrada->proceso_id) ?></td>
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
        <h4><?= __('Related Proveedores Material') ?>
        	<li><?= $this->Html->link(__('New Proveedores Material'), ['controller' => 'ProveedoresMaterial', 'action' => 'add',$material->id,'material_id']) ?> </li>
        </h4>
        <?php if (!empty($material->proveedores_material)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Proveedores Cliente Id') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($material->proveedores_material as $proveedoresMaterial): ?>
            <tr>
                <td><?= h($proveedoresMaterial->proveedores_cliente_id) ?></td>
                <td><?= h($proveedoresMaterial->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProveedoresMaterial', 'action' => 'view', $proveedoresMaterial->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProveedoresMaterial', 'action' => 'edit', $proveedoresMaterial->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProveedoresMaterial', 'action' => 'delete', $proveedoresMaterial->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedoresMaterial->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
