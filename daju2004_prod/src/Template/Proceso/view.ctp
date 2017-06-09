<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($proceso->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'proceso','action' => 'edit',$proceso->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Name') ?></td>
            <td class="w3-border"><?= h($proceso->name) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Referencia') ?></td>
            <td class="w3-border"><?= h($proceso->referencia) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Familia') ?></td>
            <td class="w3-border"><?= $proceso->has('familia') ? $this->Html->link($proceso->familia->label, ['controller' => 'Familias', 'action' => 'view', $proceso->familia->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Moneda') ?></td>
            <td class="w3-border"><?= $proceso->has('moneda') ? $this->Html->link($proceso->moneda->label, ['controller' => 'Monedas', 'action' => 'view', $proceso->moneda->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Iva') ?></td>
            <td class="w3-border"><?= $proceso->has('iva') ? $this->Html->link($proceso->iva->label, ['controller' => 'Ivas', 'action' => 'view', $proceso->iva->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Observaciones') ?></td>
            <td class="w3-border"><?= h($proceso->observaciones) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Enlaces') ?></td>
            <td class="w3-border"><?= h($proceso->enlaces) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Centro') ?></td>
            <td class="w3-border"><?= $proceso->has('centro') ? $this->Html->link($proceso->centro->label, ['controller' => 'Centros', 'action' => 'view', $proceso->centro->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Coste Operaciones') ?></td>
            <td class="w3-border"><?= h($proceso->coste_operaciones) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Descripcion') ?></td>
            <td class="w3-border"><?= h($proceso->descripcion) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Larga') ?></td>
            <td class="w3-border"><?= h($proceso->larga) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($proceso->id) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Precio') ?></td>
            <td class="w3-border"><?= $this->Number->format($proceso->precio) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Coste Tiempo') ?></td>
            <td class="w3-border"><?= $this->Number->format($proceso->coste_tiempo) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Visible') ?></td>
            <td class="w3-border"><?= $proceso->visible ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'ordens')"><?= __("Ordens") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'procesoMaterialEntrada')"><?= __("Proceso Material Entrada") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'procesoProductoEntrada')"><?= __("Proceso Producto Entrada") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'procesoProductoSalida')"><?= __("Proceso Producto Salida") ?></button>

<div style="display:none" id="ordens" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Ordens') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'ordens', 'action' => 'add',$proceso->id,'proceso_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($ordens)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Ordens']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Ordens']) ?>
                <?= $this->Paginator->numbers(['model'=>'Ordens','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Ordens']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Ordens']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('name','name', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('referencia','referencia', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('cantidad','cantidad', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_creacion','fecha_creacion', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_terminacion','fecha_terminacion', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('estado_id','estado_id', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('centro_id','centro_id', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('scrap','scrap', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('coste_operario','coste_operario', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('prioridade_id','prioridade_id', ['model'=>'Ordens']) ?></th>
			</thead>
			<tbody>
<?php foreach ($ordens as $orden): ?>
				<?php $my_url= $this->Url->build(['controller' => 'ordens', 'action' => 'view',$orden->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td class="w3-border"><?= h($orden->id) ?></td>
                	<td class="w3-border"><?= h($orden->name) ?></td>
                	<td class="w3-border"><?= h($orden->referencia) ?></td>
                	<td class="w3-border"><?= h($orden->cantidad) ?></td>
                	<td class="w3-border"><?= h($orden->fecha_creacion) ?></td>
                	<td class="w3-border"><?= h($orden->fecha_terminacion) ?></td>
                	<td class="w3-border"><?= h($orden->estado_id) ?></td>
                	<td class="w3-border"><?= h($orden->centro_id) ?></td>
                	<td class="w3-border"><?= h($orden->scrap) ?></td>
                	<td class="w3-border"><?= h($orden->coste_operario) ?></td>
                	<td class="w3-border"><?= h($orden->observaciones) ?></td>
                	<td class="w3-border"><?= h($orden->prioridade_id) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Ordens']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Ordens']) ?>
                <?= $this->Paginator->numbers(['model'=>'Ordens','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Ordens']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Ordens']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'Ordens']) ?></p>
        </div>
    
    <?php endif; ?>
</div>
<div style="display:none" id="procesoMaterialEntrada" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Proceso Material Entrada') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'proceso-material-entrada', 'action' => 'add',$proceso->id,'proceso_id'])?>
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
                	<td class="w3-border"><?= h($procesoMaterialEntrada->material_id) ?></td>
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
<div style="display:none" id="procesoProductoEntrada" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Proceso Producto Entrada') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'proceso-producto-entrada', 'action' => 'add',$proceso->id,'proceso_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($procesoProductoEntrada)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'ProcesoProductoEntrada']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'ProcesoProductoEntrada']) ?>
                <?= $this->Paginator->numbers(['model'=>'ProcesoProductoEntrada','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'ProcesoProductoEntrada']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'ProcesoProductoEntrada']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'ProcesoProductoEntrada']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('producto_id','producto_id', ['model'=>'ProcesoProductoEntrada']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('cantidad','cantidad', ['model'=>'ProcesoProductoEntrada']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'ProcesoProductoEntrada']) ?></th>
			</thead>
			<tbody>
<?php foreach ($procesoProductoEntrada as $procesoProductoEntrada): ?>
				<?php $my_url= $this->Url->build(['controller' => 'procesoProductoEntrada', 'action' => 'view',$procesoProductoEntrada->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td class="w3-border"><?= h($procesoProductoEntrada->id) ?></td>
                	<td class="w3-border"><?= h($procesoProductoEntrada->producto_id) ?></td>
                	<td class="w3-border"><?= h($procesoProductoEntrada->cantidad) ?></td>
                	<td class="w3-border"><?= h($procesoProductoEntrada->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'ProcesoProductoEntrada']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'ProcesoProductoEntrada']) ?>
                <?= $this->Paginator->numbers(['model'=>'ProcesoProductoEntrada','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'ProcesoProductoEntrada']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'ProcesoProductoEntrada']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'ProcesoProductoEntrada']) ?></p>
        </div>
    
    <?php endif; ?>
</div>
<div style="display:none" id="procesoProductoSalida" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Proceso Producto Salida') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'proceso-producto-salida', 'action' => 'add',$proceso->id,'proceso_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($procesoProductoSalida)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'ProcesoProductoSalida']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'ProcesoProductoSalida']) ?>
                <?= $this->Paginator->numbers(['model'=>'ProcesoProductoSalida','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'ProcesoProductoSalida']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'ProcesoProductoSalida']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'ProcesoProductoSalida']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('producto_id','producto_id', ['model'=>'ProcesoProductoSalida']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('cantidad','cantidad', ['model'=>'ProcesoProductoSalida']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'ProcesoProductoSalida']) ?></th>
			</thead>
			<tbody>
<?php foreach ($procesoProductoSalida as $procesoProductoSalida): ?>
				<?php $my_url= $this->Url->build(['controller' => 'procesoProductoSalida', 'action' => 'view',$procesoProductoSalida->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td class="w3-border"><?= h($procesoProductoSalida->id) ?></td>
                	<td class="w3-border"><?= h($procesoProductoSalida->producto_id) ?></td>
                	<td class="w3-border"><?= h($procesoProductoSalida->cantidad) ?></td>
                	<td class="w3-border"><?= h($procesoProductoSalida->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'ProcesoProductoSalida']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'ProcesoProductoSalida']) ?>
                <?= $this->Paginator->numbers(['model'=>'ProcesoProductoSalida','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'ProcesoProductoSalida']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'ProcesoProductoSalida']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'ProcesoProductoSalida']) ?></p>
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

