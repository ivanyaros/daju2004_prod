<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="producto view large-9 medium-8 columns content">
    <h3><?= h($producto->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($producto->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($producto->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia Proveedor') ?></th>
            <td><?= h($producto->referencia_proveedor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Familia') ?></th>
            <td><?= $producto->has('familia') ? $this->Html->link($producto->familia->label, ['controller' => 'Familias', 'action' => 'view', $producto->familia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Moneda') ?></th>
            <td><?= $producto->has('moneda') ? $this->Html->link($producto->moneda->label, ['controller' => 'Monedas', 'action' => 'view', $producto->moneda->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Iva') ?></th>
            <td><?= $producto->has('iva') ? $this->Html->link($producto->iva->label, ['controller' => 'Ivas', 'action' => 'view', $producto->iva->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($producto->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($producto->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Larga') ?></th>
            <td><?= h($producto->larga) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($producto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Precio') ?></th>
            <td><?= $this->Number->format($producto->precio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Peso') ?></th>
            <td><?= $this->Number->format($producto->peso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($producto->cantidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste') ?></th>
            <td><?= $this->Number->format($producto->coste) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ancho') ?></th>
            <td><?= $this->Number->format($producto->ancho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Largo') ?></th>
            <td><?= $this->Number->format($producto->largo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tolerancia') ?></th>
            <td><?= $this->Number->format($producto->tolerancia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visible') ?></th>
            <td><?= $producto->visible ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'objetos')"><?= __("Objetos") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'pedidosProductosDetalle')"><?= __("Pedidos Productos Detalle") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'procesoProductoEntrada')"><?= __("Proceso Producto Entrada") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'procesoProductoSalida')"><?= __("Proceso Producto Salida") ?></button>

<div style="display:none" id="objetos" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Objetos') ?></h4>
        <?php if (!empty($objetos)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('name','name', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_serie','numero_serie', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia','referencia', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('orden_id','orden_id', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('lote','lote', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('localizacione_id','localizacione_id', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('coste','coste', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('defectuosos','defectuosos', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('peso','peso', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Objetos']) ?></th>
			</thead>
			<tbody>
<?php foreach ($objetos as $objeto): ?>
				<?php $my_url= $this->Url->build(['controller' => 'objetos', 'action' => 'view',$objeto->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($objeto->id) ?></td>
                	<td><?= h($objeto->name) ?></td>
                	<td><?= h($objeto->numero_serie) ?></td>
                	<td><?= h($objeto->referencia) ?></td>
                	<td><?= h($objeto->orden_id) ?></td>
                	<td><?= h($objeto->lote) ?></td>
                	<td><?= h($objeto->localizacione_id) ?></td>
                	<td><?= h($objeto->coste) ?></td>
                	<td><?= h($objeto->defectuosos) ?></td>
                	<td><?= h($objeto->peso) ?></td>
                	<td><?= h($objeto->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Objetos']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Objetos']) ?>
            <?= $this->Paginator->numbers(['model'=>'Objetos']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Objetos']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Objetos']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'Objetos']) ?></p>
    </div>
    <?php endif; ?>
</div>
<div style="display:none" id="pedidosProductosDetalle" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Pedidos Productos Detalle') ?></h4>
        <?php if (!empty($pedidosProductosDetalle)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'PedidosProductosDetalle']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('pedidos_empresa_id','pedidos_empresa_id', ['model'=>'PedidosProductosDetalle']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad','cantidad', ['model'=>'PedidosProductosDetalle']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha','fecha', ['model'=>'PedidosProductosDetalle']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'PedidosProductosDetalle']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('prioridade_id','prioridade_id', ['model'=>'PedidosProductosDetalle']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('terminado','terminado', ['model'=>'PedidosProductosDetalle']) ?></th>
			</thead>
			<tbody>
<?php foreach ($pedidosProductosDetalle as $pedidosProductosDetalle): ?>
				<?php $my_url= $this->Url->build(['controller' => 'pedidosProductosDetalle', 'action' => 'view',$pedidosProductosDetalle->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($pedidosProductosDetalle->id) ?></td>
                	<td><?= h($pedidosProductosDetalle->pedidos_empresa_id) ?></td>
                	<td><?= h($pedidosProductosDetalle->cantidad) ?></td>
                	<td><?= h($pedidosProductosDetalle->fecha) ?></td>
                	<td><?= h($pedidosProductosDetalle->observaciones) ?></td>
                	<td><?= h($pedidosProductosDetalle->prioridade_id) ?></td>
                	<td><?= h($pedidosProductosDetalle->terminado) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'PedidosProductosDetalle']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'PedidosProductosDetalle']) ?>
            <?= $this->Paginator->numbers(['model'=>'PedidosProductosDetalle']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'PedidosProductosDetalle']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'PedidosProductosDetalle']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'PedidosProductosDetalle']) ?></p>
    </div>
    <?php endif; ?>
</div>
<div style="display:none" id="procesoProductoEntrada" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Proceso Producto Entrada') ?></h4>
        <?php if (!empty($procesoProductoEntrada)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'ProcesoProductoEntrada']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('proceso_id','proceso_id', ['model'=>'ProcesoProductoEntrada']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad','cantidad', ['model'=>'ProcesoProductoEntrada']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'ProcesoProductoEntrada']) ?></th>
			</thead>
			<tbody>
<?php foreach ($procesoProductoEntrada as $procesoProductoEntrada): ?>
				<?php $my_url= $this->Url->build(['controller' => 'procesoProductoEntrada', 'action' => 'view',$procesoProductoEntrada->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($procesoProductoEntrada->id) ?></td>
                	<td><?= h($procesoProductoEntrada->proceso_id) ?></td>
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
    <h4><?= __('Related Proceso Producto Salida') ?></h4>
        <?php if (!empty($procesoProductoSalida)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'ProcesoProductoSalida']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('proceso_id','proceso_id', ['model'=>'ProcesoProductoSalida']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad','cantidad', ['model'=>'ProcesoProductoSalida']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'ProcesoProductoSalida']) ?></th>
			</thead>
			<tbody>
<?php foreach ($procesoProductoSalida as $procesoProductoSalida): ?>
				<?php $my_url= $this->Url->build(['controller' => 'procesoProductoSalida', 'action' => 'view',$procesoProductoSalida->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($procesoProductoSalida->id) ?></td>
                	<td><?= h($procesoProductoSalida->proceso_id) ?></td>
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

