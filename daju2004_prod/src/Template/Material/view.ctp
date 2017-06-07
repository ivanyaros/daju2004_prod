<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="material view large-9 medium-8 columns content">
    <h3><?= h($material->label) ?></h3>
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
            <td><?= $material->has('familia') ? $this->Html->link($material->familia->label, ['controller' => 'Familias', 'action' => 'view', $material->familia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color') ?></th>
            <td><?= h($material->color) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Moneda') ?></th>
            <td><?= $material->has('moneda') ? $this->Html->link($material->moneda->label, ['controller' => 'Monedas', 'action' => 'view', $material->moneda->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Iva') ?></th>
            <td><?= $material->has('iva') ? $this->Html->link($material->iva->label, ['controller' => 'Ivas', 'action' => 'view', $material->iva->id]) : '' ?></td>
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
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'materiales')"><?= __("Materiales") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'procesoMaterialEntrada')"><?= __("Proceso Material Entrada") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'proveedoresMaterial')"><?= __("Proveedores Material") ?></button>

<div style="display:none" id="materiales" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Materiales') ?>
        <button onClick="location.href='/materiales/add/<?= $material->id ?>/material_id'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($materiales)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_entega','fecha_entega', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('localizacione_id','localizacione_id', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('entradas_de_materiale_id','entradas_de_materiale_id', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('bobina_lote','bobina_lote', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('bobinas','bobinas', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('bobinas_actual','bobinas_actual', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('lote','lote', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_bobina','numero_bobina', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('taras','taras', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('taras_reales','taras_reales', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('taras_mediciones','taras_mediciones', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_brutos','metros_brutos', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_netos','metros_netos', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_actuales','metros_actuales', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_utiles','metros_utiles', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('scrap','scrap', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('en_uso','en_uso', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('terminado','terminado', ['model'=>'Materiales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('peso_ud','peso_ud', ['model'=>'Materiales']) ?></th>
			</thead>
			<tbody>
<?php foreach ($materiales as $materiale): ?>
				<?php $my_url= $this->Url->build(['controller' => 'materiales', 'action' => 'view',$materiale->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($materiale->id) ?></td>
                	<td><?= h($materiale->fecha_entega) ?></td>
                	<td><?= h($materiale->localizacione_id) ?></td>
                	<td><?= h($materiale->entradas_de_materiale_id) ?></td>
                	<td><?= h($materiale->bobina_lote) ?></td>
                	<td><?= h($materiale->bobinas) ?></td>
                	<td><?= h($materiale->bobinas_actual) ?></td>
                	<td><?= h($materiale->lote) ?></td>
                	<td><?= h($materiale->numero_bobina) ?></td>
                	<td><?= h($materiale->taras) ?></td>
                	<td><?= h($materiale->taras_reales) ?></td>
                	<td><?= h($materiale->taras_mediciones) ?></td>
                	<td><?= h($materiale->metros_brutos) ?></td>
                	<td><?= h($materiale->metros_netos) ?></td>
                	<td><?= h($materiale->metros_actuales) ?></td>
                	<td><?= h($materiale->metros_utiles) ?></td>
                	<td><?= h($materiale->scrap) ?></td>
                	<td><?= h($materiale->en_uso) ?></td>
                	<td><?= h($materiale->terminado) ?></td>
                	<td><?= h($materiale->peso_ud) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Materiales']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Materiales']) ?>
            <?= $this->Paginator->numbers(['model'=>'Materiales']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Materiales']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Materiales']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'Materiales']) ?></p>
    </div>
    <?php endif; ?>
</div>
<div style="display:none" id="procesoMaterialEntrada" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Proceso Material Entrada') ?>
        <button onClick="location.href='/proceso-material-entrada/add/<?= $material->id ?>/material_id'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($procesoMaterialEntrada)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'ProcesoMaterialEntrada']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('proceso_id','proceso_id', ['model'=>'ProcesoMaterialEntrada']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_lineales','metros_lineales', ['model'=>'ProcesoMaterialEntrada']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_cuadrados','metros_cuadrados', ['model'=>'ProcesoMaterialEntrada']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'ProcesoMaterialEntrada']) ?></th>
			</thead>
			<tbody>
<?php foreach ($procesoMaterialEntrada as $procesoMaterialEntrada): ?>
				<?php $my_url= $this->Url->build(['controller' => 'procesoMaterialEntrada', 'action' => 'view',$procesoMaterialEntrada->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($procesoMaterialEntrada->id) ?></td>
                	<td><?= h($procesoMaterialEntrada->proceso_id) ?></td>
                	<td><?= h($procesoMaterialEntrada->metros_lineales) ?></td>
                	<td><?= h($procesoMaterialEntrada->metros_cuadrados) ?></td>
                	<td><?= h($procesoMaterialEntrada->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'ProcesoMaterialEntrada']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'ProcesoMaterialEntrada']) ?>
            <?= $this->Paginator->numbers(['model'=>'ProcesoMaterialEntrada']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'ProcesoMaterialEntrada']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'ProcesoMaterialEntrada']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'ProcesoMaterialEntrada']) ?></p>
    </div>
    <?php endif; ?>
</div>
<div style="display:none" id="proveedoresMaterial" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Proveedores Material') ?>
        <button onClick="location.href='/proveedores-material/add/<?= $material->id ?>/material_id'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($proveedoresMaterial)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'ProveedoresMaterial']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('proveedores_cliente_id','proveedores_cliente_id', ['model'=>'ProveedoresMaterial']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'ProveedoresMaterial']) ?></th>
			</thead>
			<tbody>
<?php foreach ($proveedoresMaterial as $proveedoresMaterial): ?>
				<?php $my_url= $this->Url->build(['controller' => 'proveedoresMaterial', 'action' => 'view',$proveedoresMaterial->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($proveedoresMaterial->id) ?></td>
                	<td><?= h($proveedoresMaterial->proveedores_cliente_id) ?></td>
                	<td><?= h($proveedoresMaterial->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'ProveedoresMaterial']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'ProveedoresMaterial']) ?>
            <?= $this->Paginator->numbers(['model'=>'ProveedoresMaterial']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'ProveedoresMaterial']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'ProveedoresMaterial']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'ProveedoresMaterial']) ?></p>
    </div>
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

