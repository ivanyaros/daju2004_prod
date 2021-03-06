<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($material->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'material','action' => 'edit',$material->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Name') ?></td>
            <td class="w3-border"><?= h($material->name) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Referencia') ?></td>
            <td class="w3-border"><?= h($material->referencia) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Referencia Proveedor') ?></td>
            <td class="w3-border"><?= h($material->referencia_proveedor) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Familia') ?></td>
            <td class="w3-border"><?= $material->has('familia') ? $this->Html->link($material->familia->label, ['controller' => 'Familias', 'action' => 'view', $material->familia->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Color') ?></td>
            <td class="w3-border"><?= h($material->color) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Moneda') ?></td>
            <td class="w3-border"><?= $material->has('moneda') ? $this->Html->link($material->moneda->label, ['controller' => 'Monedas', 'action' => 'view', $material->moneda->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Iva') ?></td>
            <td class="w3-border"><?= $material->has('iva') ? $this->Html->link($material->iva->label, ['controller' => 'Ivas', 'action' => 'view', $material->iva->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Observaciones') ?></td>
            <td class="w3-border"><?= h($material->observaciones) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($material->id) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Longitud') ?></td>
            <td class="w3-border"><?= $this->Number->format($material->longitud) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Anchura') ?></td>
            <td class="w3-border"><?= $this->Number->format($material->anchura) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Profundidad') ?></td>
            <td class="w3-border"><?= $this->Number->format($material->profundidad) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Gramaje') ?></td>
            <td class="w3-border"><?= $this->Number->format($material->gramaje) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Peso Ud') ?></td>
            <td class="w3-border"><?= $this->Number->format($material->peso_ud) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Unidades Embalaje') ?></td>
            <td class="w3-border"><?= $this->Number->format($material->unidades_embalaje) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Precio') ?></td>
            <td class="w3-border"><?= $this->Number->format($material->precio) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Visible') ?></td>
            <td class="w3-border"><?= $material->visible ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'materiales')"><?= __("Materiales") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'procesoMaterialEntrada')"><?= __("Proceso Material Entrada") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'proveedoresMaterial')"><?= __("Proveedores Material") ?></button>

<div style="display:none" id="materiales" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Materiales') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'materiales', 'action' => 'add',$material->id,'material_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($materiales)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Materiales']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Materiales']) ?>
                <?= $this->Paginator->numbers(['model'=>'Materiales','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Materiales']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Materiales']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('material_id','material_id', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_entega','fecha_entega', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('localizacione_id','localizacione_id', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('entradas_de_materiale_id','entradas_de_materiale_id', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('bobina','bobina', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('bobinas','bobinas', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('bobinas_actual','bobinas_actual', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('lote','lote', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('numero_bobina','numero_bobina', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('taras','taras', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('taras_reales','taras_reales', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('taras_mediciones','taras_mediciones', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('metros_brutos','metros_brutos', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('metros_netos','metros_netos', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('metros_actuales','metros_actuales', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('metros_utiles','metros_utiles', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('scrap','scrap', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('en_uso','en_uso', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('terminado','terminado', ['model'=>'Materiales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('peso_ud','peso_ud', ['model'=>'Materiales']) ?></th>
			</thead>
			<tbody>
<?php foreach ($materiales as $materiale): ?>
				<?php $my_url= $this->Url->build(['controller' => 'materiales', 'action' => 'view',$materiale->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($materiale->id) ?></td>

                                <td class="w3-border"><?= $materiale->has('material') ? $this->Html->link($materiale->material->label, ['controller' => 'Material', 'action' => 'view', $materiale->material->id]) : '' ?></td>
                        <td class="w3-border"><?= h($materiale->fecha_entega) ?></td>

                                <td class="w3-border"><?= $materiale->has('localizacione') ? $this->Html->link($materiale->localizacione->label, ['controller' => 'Localizaciones', 'action' => 'view', $materiale->localizacione->id]) : '' ?></td>

                                <td class="w3-border"><?= $materiale->has('entradas_de_materiale') ? $this->Html->link($materiale->entradas_de_materiale->label, ['controller' => 'EntradasDeMateriales', 'action' => 'view', $materiale->entradas_de_materiale->id]) : '' ?></td>
                        <td class="w3-border"><?= h($materiale->bobina) ?></td>
                        <td class="w3-border"><?= h($materiale->bobinas) ?></td>
                        <td class="w3-border"><?= h($materiale->bobinas_actual) ?></td>
                        <td class="w3-border"><?= h($materiale->lote) ?></td>
                        <td class="w3-border"><?= h($materiale->numero_bobina) ?></td>
                        <td class="w3-border"><?= h($materiale->taras) ?></td>
                        <td class="w3-border"><?= h($materiale->taras_reales) ?></td>
                        <td class="w3-border"><?= h($materiale->taras_mediciones) ?></td>
                        <td class="w3-border"><?= h($materiale->metros_brutos) ?></td>
                        <td class="w3-border"><?= h($materiale->metros_netos) ?></td>
                        <td class="w3-border"><?= h($materiale->metros_actuales) ?></td>
                        <td class="w3-border"><?= h($materiale->metros_utiles) ?></td>
                        <td class="w3-border"><?= h($materiale->scrap) ?></td>
                        <td class="w3-border"><?= h($materiale->en_uso) ?></td>
                        <td class="w3-border"><?= h($materiale->terminado) ?></td>
                        <td class="w3-border"><?= h($materiale->peso_ud) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Materiales']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Materiales']) ?>
                <?= $this->Paginator->numbers(['model'=>'Materiales','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Materiales']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Materiales']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'Materiales']) ?></p>
        </div>
    
    <?php endif; ?>
</div>
<div style="display:none" id="procesoMaterialEntrada" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Proceso Material Entrada') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'proceso-material-entrada', 'action' => 'add',$material->id,'material_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($procesoMaterialEntrada)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'ProcesoMaterialEntrada']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'ProcesoMaterialEntrada']) ?>
                <?= $this->Paginator->numbers(['model'=>'ProcesoMaterialEntrada','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'ProcesoMaterialEntrada']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'ProcesoMaterialEntrada']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'ProcesoMaterialEntrada']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('proceso_id','proceso_id', ['model'=>'ProcesoMaterialEntrada']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('material_id','material_id', ['model'=>'ProcesoMaterialEntrada']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('metros_lineales','metros_lineales', ['model'=>'ProcesoMaterialEntrada']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('metros_cuadrados','metros_cuadrados', ['model'=>'ProcesoMaterialEntrada']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'ProcesoMaterialEntrada']) ?></th>
			</thead>
			<tbody>
<?php foreach ($procesoMaterialEntrada as $procesoMaterialEntrada): ?>
				<?php $my_url= $this->Url->build(['controller' => 'procesoMaterialEntrada', 'action' => 'view',$procesoMaterialEntrada->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($procesoMaterialEntrada->id) ?></td>

                                <td class="w3-border"><?= $procesoMaterialEntrada->has('proceso') ? $this->Html->link($procesoMaterialEntrada->proceso->label, ['controller' => 'Proceso', 'action' => 'view', $procesoMaterialEntrada->proceso->id]) : '' ?></td>

                                <td class="w3-border"><?= $procesoMaterialEntrada->has('material') ? $this->Html->link($procesoMaterialEntrada->material->label, ['controller' => 'Material', 'action' => 'view', $procesoMaterialEntrada->material->id]) : '' ?></td>
                        <td class="w3-border"><?= h($procesoMaterialEntrada->metros_lineales) ?></td>
                        <td class="w3-border"><?= h($procesoMaterialEntrada->metros_cuadrados) ?></td>
                        <td class="w3-border"><?= h($procesoMaterialEntrada->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'ProcesoMaterialEntrada']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'ProcesoMaterialEntrada']) ?>
                <?= $this->Paginator->numbers(['model'=>'ProcesoMaterialEntrada','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'ProcesoMaterialEntrada']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'ProcesoMaterialEntrada']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'ProcesoMaterialEntrada']) ?></p>
        </div>
    
    <?php endif; ?>
</div>
<div style="display:none" id="proveedoresMaterial" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Proveedores Material') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'proveedores-material', 'action' => 'add',$material->id,'material_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($proveedoresMaterial)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'ProveedoresMaterial']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'ProveedoresMaterial']) ?>
                <?= $this->Paginator->numbers(['model'=>'ProveedoresMaterial','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'ProveedoresMaterial']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'ProveedoresMaterial']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'ProveedoresMaterial']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('proveedores_cliente_id','proveedores_cliente_id', ['model'=>'ProveedoresMaterial']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('material_id','material_id', ['model'=>'ProveedoresMaterial']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'ProveedoresMaterial']) ?></th>
			</thead>
			<tbody>
<?php foreach ($proveedoresMaterial as $proveedoresMaterial): ?>
				<?php $my_url= $this->Url->build(['controller' => 'proveedoresMaterial', 'action' => 'view',$proveedoresMaterial->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($proveedoresMaterial->id) ?></td>

                                <td class="w3-border"><?= $proveedoresMaterial->has('proveedores_cliente') ? $this->Html->link($proveedoresMaterial->proveedores_cliente->label, ['controller' => 'ProveedoresClientes', 'action' => 'view', $proveedoresMaterial->proveedores_cliente->id]) : '' ?></td>

                                <td class="w3-border"><?= $proveedoresMaterial->has('material') ? $this->Html->link($proveedoresMaterial->material->label, ['controller' => 'Material', 'action' => 'view', $proveedoresMaterial->material->id]) : '' ?></td>
                        <td class="w3-border"><?= h($proveedoresMaterial->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'ProveedoresMaterial']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'ProveedoresMaterial']) ?>
                <?= $this->Paginator->numbers(['model'=>'ProveedoresMaterial','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'ProveedoresMaterial']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'ProveedoresMaterial']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'ProveedoresMaterial']) ?></p>
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

