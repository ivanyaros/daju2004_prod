<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="proceso view large-9 medium-8 columns content">
    <h3><?= h($proceso->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($proceso->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($proceso->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Familia') ?></th>
            <td><?= $proceso->has('familia') ? $this->Html->link($proceso->familia->label, ['controller' => 'Familias', 'action' => 'view', $proceso->familia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Moneda') ?></th>
            <td><?= $proceso->has('moneda') ? $this->Html->link($proceso->moneda->label, ['controller' => 'Monedas', 'action' => 'view', $proceso->moneda->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Iva') ?></th>
            <td><?= $proceso->has('iva') ? $this->Html->link($proceso->iva->label, ['controller' => 'Ivas', 'action' => 'view', $proceso->iva->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($proceso->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enlaces') ?></th>
            <td><?= h($proceso->enlaces) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Centro') ?></th>
            <td><?= $proceso->has('centro') ? $this->Html->link($proceso->centro->label, ['controller' => 'Centros', 'action' => 'view', $proceso->centro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste Operaciones') ?></th>
            <td><?= h($proceso->coste_operaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($proceso->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Larga') ?></th>
            <td><?= h($proceso->larga) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($proceso->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Precio') ?></th>
            <td><?= $this->Number->format($proceso->precio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste Tiempo') ?></th>
            <td><?= $this->Number->format($proceso->coste_tiempo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visible') ?></th>
            <td><?= $proceso->visible ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'ordens')"><?= __("Ordens") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'procesoMaterialEntrada')"><?= __("Proceso Material Entrada") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'procesoProductoEntrada')"><?= __("Proceso Producto Entrada") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'procesoProductoSalida')"><?= __("Proceso Producto Salida") ?></button>

<div style="display:none" id="ordens" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Ordens') ?>
        <button onClick="location.href='/ordens/add/<?= $proceso->id ?>/proceso_id'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($ordens)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Ordens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('name','name', ['model'=>'Ordens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia','referencia', ['model'=>'Ordens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad','cantidad', ['model'=>'Ordens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_creacion','fecha_creacion', ['model'=>'Ordens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_terminacion','fecha_terminacion', ['model'=>'Ordens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado_id','estado_id', ['model'=>'Ordens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('centro_id','centro_id', ['model'=>'Ordens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('scrap','scrap', ['model'=>'Ordens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('coste_operario','coste_operario', ['model'=>'Ordens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Ordens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('prioridade_id','prioridade_id', ['model'=>'Ordens']) ?></th>
			</thead>
			<tbody>
<?php foreach ($ordens as $orden): ?>
				<?php $my_url= $this->Url->build(['controller' => 'ordens', 'action' => 'view',$orden->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($orden->id) ?></td>
                	<td><?= h($orden->name) ?></td>
                	<td><?= h($orden->referencia) ?></td>
                	<td><?= h($orden->cantidad) ?></td>
                	<td><?= h($orden->fecha_creacion) ?></td>
                	<td><?= h($orden->fecha_terminacion) ?></td>
                	<td><?= h($orden->estado_id) ?></td>
                	<td><?= h($orden->centro_id) ?></td>
                	<td><?= h($orden->scrap) ?></td>
                	<td><?= h($orden->coste_operario) ?></td>
                	<td><?= h($orden->observaciones) ?></td>
                	<td><?= h($orden->prioridade_id) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Ordens']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Ordens']) ?>
            <?= $this->Paginator->numbers(['model'=>'Ordens']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Ordens']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Ordens']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'Ordens']) ?></p>
    </div>
    <?php endif; ?>
</div>
<div style="display:none" id="procesoMaterialEntrada" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Proceso Material Entrada') ?>
        <button onClick="location.href='/proceso-material-entrada/add/<?= $proceso->id ?>/proceso_id'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($procesoMaterialEntrada)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'ProcesoMaterialEntrada']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('material_id','material_id', ['model'=>'ProcesoMaterialEntrada']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_lineales','metros_lineales', ['model'=>'ProcesoMaterialEntrada']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_cuadrados','metros_cuadrados', ['model'=>'ProcesoMaterialEntrada']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'ProcesoMaterialEntrada']) ?></th>
			</thead>
			<tbody>
<?php foreach ($procesoMaterialEntrada as $procesoMaterialEntrada): ?>
				<?php $my_url= $this->Url->build(['controller' => 'procesoMaterialEntrada', 'action' => 'view',$procesoMaterialEntrada->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($procesoMaterialEntrada->id) ?></td>
                	<td><?= h($procesoMaterialEntrada->material_id) ?></td>
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
<div style="display:none" id="procesoProductoEntrada" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Proceso Producto Entrada') ?>
        <button onClick="location.href='/proceso-producto-entrada/add/<?= $proceso->id ?>/proceso_id'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($procesoProductoEntrada)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'ProcesoProductoEntrada']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('producto_id','producto_id', ['model'=>'ProcesoProductoEntrada']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad','cantidad', ['model'=>'ProcesoProductoEntrada']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'ProcesoProductoEntrada']) ?></th>
			</thead>
			<tbody>
<?php foreach ($procesoProductoEntrada as $procesoProductoEntrada): ?>
				<?php $my_url= $this->Url->build(['controller' => 'procesoProductoEntrada', 'action' => 'view',$procesoProductoEntrada->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($procesoProductoEntrada->id) ?></td>
                	<td><?= h($procesoProductoEntrada->producto_id) ?></td>
                	<td><?= h($procesoProductoEntrada->cantidad) ?></td>
                	<td><?= h($procesoProductoEntrada->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'ProcesoProductoEntrada']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'ProcesoProductoEntrada']) ?>
            <?= $this->Paginator->numbers(['model'=>'ProcesoProductoEntrada']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'ProcesoProductoEntrada']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'ProcesoProductoEntrada']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'ProcesoProductoEntrada']) ?></p>
    </div>
    <?php endif; ?>
</div>
<div style="display:none" id="procesoProductoSalida" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Proceso Producto Salida') ?>
        <button onClick="location.href='/proceso-producto-salida/add/<?= $proceso->id ?>/proceso_id'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($procesoProductoSalida)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'ProcesoProductoSalida']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('producto_id','producto_id', ['model'=>'ProcesoProductoSalida']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad','cantidad', ['model'=>'ProcesoProductoSalida']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'ProcesoProductoSalida']) ?></th>
			</thead>
			<tbody>
<?php foreach ($procesoProductoSalida as $procesoProductoSalida): ?>
				<?php $my_url= $this->Url->build(['controller' => 'procesoProductoSalida', 'action' => 'view',$procesoProductoSalida->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($procesoProductoSalida->id) ?></td>
                	<td><?= h($procesoProductoSalida->producto_id) ?></td>
                	<td><?= h($procesoProductoSalida->cantidad) ?></td>
                	<td><?= h($procesoProductoSalida->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'ProcesoProductoSalida']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'ProcesoProductoSalida']) ?>
            <?= $this->Paginator->numbers(['model'=>'ProcesoProductoSalida']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'ProcesoProductoSalida']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'ProcesoProductoSalida']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'ProcesoProductoSalida']) ?></p>
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

