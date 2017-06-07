<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ivas view large-9 medium-8 columns content">
    <h3><?= h($iva->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($iva->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($iva->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($iva->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor') ?></th>
            <td><?= $this->Number->format($iva->valor) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'material')"><?= __("Material") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'proceso')"><?= __("Proceso") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'producto')"><?= __("Producto") ?></button>

<div style="display:none" id="material" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Material') ?></h4>
        <?php if (!empty($iva->material)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Referencia Proveedor') ?></th>
                <th scope="col"><?= __('Familia Id') ?></th>
                <th scope="col"><?= __('Longitud') ?></th>
                <th scope="col"><?= __('Anchura') ?></th>
                <th scope="col"><?= __('Profundidad') ?></th>
                <th scope="col"><?= __('Color') ?></th>
                <th scope="col"><?= __('Gramaje') ?></th>
                <th scope="col"><?= __('Peso Ud') ?></th>
                <th scope="col"><?= __('Unidades Embalaje') ?></th>
                <th scope="col"><?= __('Precio') ?></th>
                <th scope="col"><?= __('Moneda Id') ?></th>
                <th scope="col"><?= __('Iva Id') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Visible') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($iva->material as $material): ?>
            <tr>
                <td><?= h($material->id) ?></td>
                <td><?= h($material->name) ?></td>
                <td><?= h($material->referencia) ?></td>
                <td><?= h($material->referencia_proveedor) ?></td>
                <td><?= h($material->familia_id) ?></td>
                <td><?= h($material->longitud) ?></td>
                <td><?= h($material->anchura) ?></td>
                <td><?= h($material->profundidad) ?></td>
                <td><?= h($material->color) ?></td>
                <td><?= h($material->gramaje) ?></td>
                <td><?= h($material->peso_ud) ?></td>
                <td><?= h($material->unidades_embalaje) ?></td>
                <td><?= h($material->precio) ?></td>
                <td><?= h($material->moneda_id) ?></td>
                <td><?= h($material->iva_id) ?></td>
                <td><?= h($material->observaciones) ?></td>
                <td><?= h($material->visible) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Material', 'action' => 'view', $material->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Material', 'action' => 'edit', $material->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Material', 'action' => 'delete', $material->id], ['confirm' => __('Are you sure you want to delete # {0}?', $material->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>
<div style="display:none" id="proceso" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Proceso') ?></h4>
        <?php if (!empty($iva->proceso)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Familia Id') ?></th>
                <th scope="col"><?= __('Precio') ?></th>
                <th scope="col"><?= __('Moneda Id') ?></th>
                <th scope="col"><?= __('Iva Id') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Visible') ?></th>
                <th scope="col"><?= __('Enlaces') ?></th>
                <th scope="col"><?= __('Centro Id') ?></th>
                <th scope="col"><?= __('Coste Tiempo') ?></th>
                <th scope="col"><?= __('Coste Operaciones') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Larga') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($iva->proceso as $proceso): ?>
            <tr>
                <td><?= h($proceso->id) ?></td>
                <td><?= h($proceso->name) ?></td>
                <td><?= h($proceso->referencia) ?></td>
                <td><?= h($proceso->familia_id) ?></td>
                <td><?= h($proceso->precio) ?></td>
                <td><?= h($proceso->moneda_id) ?></td>
                <td><?= h($proceso->iva_id) ?></td>
                <td><?= h($proceso->observaciones) ?></td>
                <td><?= h($proceso->visible) ?></td>
                <td><?= h($proceso->enlaces) ?></td>
                <td><?= h($proceso->centro_id) ?></td>
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
<div style="display:none" id="producto" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Producto') ?></h4>
        <?php if (!empty($iva->producto)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Referencia Proveedor') ?></th>
                <th scope="col"><?= __('Familia Id') ?></th>
                <th scope="col"><?= __('Precio') ?></th>
                <th scope="col"><?= __('Moneda Id') ?></th>
                <th scope="col"><?= __('Iva Id') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Visible') ?></th>
                <th scope="col"><?= __('Peso') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Larga') ?></th>
                <th scope="col"><?= __('Coste') ?></th>
                <th scope="col"><?= __('Ancho') ?></th>
                <th scope="col"><?= __('Largo') ?></th>
                <th scope="col"><?= __('Tolerancia') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($iva->producto as $producto): ?>
            <tr>
                <td><?= h($producto->id) ?></td>
                <td><?= h($producto->name) ?></td>
                <td><?= h($producto->referencia) ?></td>
                <td><?= h($producto->referencia_proveedor) ?></td>
                <td><?= h($producto->familia_id) ?></td>
                <td><?= h($producto->precio) ?></td>
                <td><?= h($producto->moneda_id) ?></td>
                <td><?= h($producto->iva_id) ?></td>
                <td><?= h($producto->observaciones) ?></td>
                <td><?= h($producto->visible) ?></td>
                <td><?= h($producto->peso) ?></td>
                <td><?= h($producto->cantidad) ?></td>
                <td><?= h($producto->descripcion) ?></td>
                <td><?= h($producto->larga) ?></td>
                <td><?= h($producto->coste) ?></td>
                <td><?= h($producto->ancho) ?></td>
                <td><?= h($producto->largo) ?></td>
                <td><?= h($producto->tolerancia) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Producto', 'action' => 'view', $producto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Producto', 'action' => 'edit', $producto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Producto', 'action' => 'delete', $producto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>
</div>
<script>
function openRelated(evt, relatedName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("related");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(relatedName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>

