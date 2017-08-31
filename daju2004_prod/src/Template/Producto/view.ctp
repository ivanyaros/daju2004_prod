<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($producto->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'producto','action' => 'edit',$producto->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Name') ?></td>
            <td class="w3-border"><?= h($producto->name) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Referencia') ?></td>
            <td class="w3-border"><?= h($producto->referencia) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Referencia Proveedor') ?></td>
            <td class="w3-border"><?= h($producto->referencia_proveedor) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Familia') ?></td>
            <td class="w3-border"><?= $producto->has('familia') ? $this->Html->link($producto->familia->label, ['controller' => 'Familias', 'action' => 'view', $producto->familia->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Moneda') ?></td>
            <td class="w3-border"><?= $producto->has('moneda') ? $this->Html->link($producto->moneda->label, ['controller' => 'Monedas', 'action' => 'view', $producto->moneda->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Iva') ?></td>
            <td class="w3-border"><?= $producto->has('iva') ? $this->Html->link($producto->iva->label, ['controller' => 'Ivas', 'action' => 'view', $producto->iva->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Observaciones') ?></td>
            <td class="w3-border"><?= h($producto->observaciones) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Descripcion') ?></td>
            <td class="w3-border"><?= h($producto->descripcion) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Larga') ?></td>
            <td class="w3-border"><?= h($producto->larga) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($producto->id) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Precio') ?></td>
            <td class="w3-border"><?= $this->Number->format($producto->precio) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Peso') ?></td>
            <td class="w3-border"><?= $this->Number->format($producto->peso) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Ue') ?></td>
            <td class="w3-border"><?= $this->Number->format($producto->ue) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Coste') ?></td>
            <td class="w3-border"><?= $this->Number->format($producto->coste) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Ancho') ?></td>
            <td class="w3-border"><?= $this->Number->format($producto->ancho) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Largo') ?></td>
            <td class="w3-border"><?= $this->Number->format($producto->largo) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Tolerancia') ?></td>
            <td class="w3-border"><?= $this->Number->format($producto->tolerancia) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Visible') ?></td>
            <td class="w3-border"><?= $producto->visible ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'objetos')"><?= __("Objetos") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'pedidosProductosDetalle')"><?= __("Pedidos Productos Detalle") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'procesoProductoEntrada')"><?= __("Proceso Producto Entrada") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'procesoProductoSalida')"><?= __("Proceso Producto Salida") ?></button>

<div style="display:none" id="objetos" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Objetos') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'objetos', 'action' => 'add',$producto->id,'producto_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($objetos)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Objetos']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Objetos']) ?>
                <?= $this->Paginator->numbers(['model'=>'Objetos','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Objetos']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Objetos']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('name','name', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('producto_id','producto_id', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('numero_serie','numero_serie', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('referencia','referencia', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('cantidad','cantidad', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('orden_id','orden_id', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('lote','lote', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('localizacione_id','localizacione_id', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('coste','coste', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('defectuosos','defectuosos', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('peso','peso', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Objetos']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('envio_id','envio_id', ['model'=>'Objetos']) ?></th>
			</thead>
			<tbody>
<?php foreach ($objetos as $objeto): ?>
				<?php $my_url= $this->Url->build(['controller' => 'objetos', 'action' => 'view',$objeto->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($objeto->id) ?></td>
                        <td class="w3-border"><?= h($objeto->name) ?></td>

                                <td class="w3-border"><?= $objeto->has('producto') ? $this->Html->link($objeto->producto->label, ['controller' => 'Producto', 'action' => 'view', $objeto->producto->id]) : '' ?></td>
                        <td class="w3-border"><?= h($objeto->numero_serie) ?></td>
                        <td class="w3-border"><?= h($objeto->referencia) ?></td>
                        <td class="w3-border"><?= h($objeto->cantidad) ?></td>

                                <td class="w3-border"><?= $objeto->has('orden') ? $this->Html->link($objeto->orden->label, ['controller' => 'Ordens', 'action' => 'view', $objeto->orden->id]) : '' ?></td>
                        <td class="w3-border"><?= h($objeto->lote) ?></td>

                                <td class="w3-border"><?= $objeto->has('localizacione') ? $this->Html->link($objeto->localizacione->label, ['controller' => 'Localizaciones', 'action' => 'view', $objeto->localizacione->id]) : '' ?></td>
                        <td class="w3-border"><?= h($objeto->coste) ?></td>
                        <td class="w3-border"><?= h($objeto->defectuosos) ?></td>
                        <td class="w3-border"><?= h($objeto->peso) ?></td>
                        <td class="w3-border"><?= h($objeto->observaciones) ?></td>

                                <td class="w3-border"><?= $objeto->has('envio') ? $this->Html->link($objeto->envio->label, ['controller' => 'Envios', 'action' => 'view', $objeto->envio->id]) : '' ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Objetos']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Objetos']) ?>
                <?= $this->Paginator->numbers(['model'=>'Objetos','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Objetos']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Objetos']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'Objetos']) ?></p>
        </div>
    
    <?php endif; ?>
</div>
<div style="display:none" id="pedidosProductosDetalle" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Pedidos Productos Detalle') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'pedidos-productos-detalle', 'action' => 'add',$producto->id,'producto_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($pedidosProductosDetalle)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'PedidosProductosDetalle']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'PedidosProductosDetalle']) ?>
                <?= $this->Paginator->numbers(['model'=>'PedidosProductosDetalle','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'PedidosProductosDetalle']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'PedidosProductosDetalle']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'PedidosProductosDetalle']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('pedidos_empresa_id','pedidos_empresa_id', ['model'=>'PedidosProductosDetalle']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('producto_id','producto_id', ['model'=>'PedidosProductosDetalle']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('cantidad','cantidad', ['model'=>'PedidosProductosDetalle']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha','fecha', ['model'=>'PedidosProductosDetalle']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'PedidosProductosDetalle']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('prioridade_id','prioridade_id', ['model'=>'PedidosProductosDetalle']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('terminado','terminado', ['model'=>'PedidosProductosDetalle']) ?></th>
			</thead>
			<tbody>
<?php foreach ($pedidosProductosDetalle as $pedidosProductosDetalle): ?>
				<?php $my_url= $this->Url->build(['controller' => 'pedidosProductosDetalle', 'action' => 'view',$pedidosProductosDetalle->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($pedidosProductosDetalle->id) ?></td>

                                <td class="w3-border"><?= $pedidosProductosDetalle->has('pedidos_empresa') ? $this->Html->link($pedidosProductosDetalle->pedidos_empresa->label, ['controller' => 'PedidosEmpresas', 'action' => 'view', $pedidosProductosDetalle->pedidos_empresa->id]) : '' ?></td>

                                <td class="w3-border"><?= $pedidosProductosDetalle->has('producto') ? $this->Html->link($pedidosProductosDetalle->producto->label, ['controller' => 'Producto', 'action' => 'view', $pedidosProductosDetalle->producto->id]) : '' ?></td>
                        <td class="w3-border"><?= h($pedidosProductosDetalle->cantidad) ?></td>
                        <td class="w3-border"><?= h($pedidosProductosDetalle->fecha) ?></td>
                        <td class="w3-border"><?= h($pedidosProductosDetalle->observaciones) ?></td>

                                <td class="w3-border"><?= $pedidosProductosDetalle->has('prioridade') ? $this->Html->link($pedidosProductosDetalle->prioridade->label, ['controller' => 'Prioridades', 'action' => 'view', $pedidosProductosDetalle->prioridade->id]) : '' ?></td>
                        <td class="w3-border"><?= h($pedidosProductosDetalle->terminado) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'PedidosProductosDetalle']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'PedidosProductosDetalle']) ?>
                <?= $this->Paginator->numbers(['model'=>'PedidosProductosDetalle','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'PedidosProductosDetalle']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'PedidosProductosDetalle']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'PedidosProductosDetalle']) ?></p>
        </div>
    
    <?php endif; ?>
</div>
<div style="display:none" id="procesoProductoEntrada" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Proceso Producto Entrada') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'proceso-producto-entrada', 'action' => 'add',$producto->id,'producto_id'])?>
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
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('proceso_id','proceso_id', ['model'=>'ProcesoProductoEntrada']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('producto_id','producto_id', ['model'=>'ProcesoProductoEntrada']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('cantidad','cantidad', ['model'=>'ProcesoProductoEntrada']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'ProcesoProductoEntrada']) ?></th>
			</thead>
			<tbody>
<?php foreach ($procesoProductoEntrada as $procesoProductoEntrada): ?>
				<?php $my_url= $this->Url->build(['controller' => 'procesoProductoEntrada', 'action' => 'view',$procesoProductoEntrada->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($procesoProductoEntrada->id) ?></td>

                                <td class="w3-border"><?= $procesoProductoEntrada->has('proceso') ? $this->Html->link($procesoProductoEntrada->proceso->label, ['controller' => 'Proceso', 'action' => 'view', $procesoProductoEntrada->proceso->id]) : '' ?></td>

                                <td class="w3-border"><?= $procesoProductoEntrada->has('producto') ? $this->Html->link($procesoProductoEntrada->producto->label, ['controller' => 'Producto', 'action' => 'view', $procesoProductoEntrada->producto->id]) : '' ?></td>
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
        <?php $my_url_add=$this->Url->build(['controller' => 'proceso-producto-salida', 'action' => 'add',$producto->id,'producto_id'])?>
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
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('proceso_id','proceso_id', ['model'=>'ProcesoProductoSalida']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('producto_id','producto_id', ['model'=>'ProcesoProductoSalida']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('cantidad','cantidad', ['model'=>'ProcesoProductoSalida']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'ProcesoProductoSalida']) ?></th>
			</thead>
			<tbody>
<?php foreach ($procesoProductoSalida as $procesoProductoSalida): ?>
				<?php $my_url= $this->Url->build(['controller' => 'procesoProductoSalida', 'action' => 'view',$procesoProductoSalida->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($procesoProductoSalida->id) ?></td>

                                <td class="w3-border"><?= $procesoProductoSalida->has('proceso') ? $this->Html->link($procesoProductoSalida->proceso->label, ['controller' => 'Proceso', 'action' => 'view', $procesoProductoSalida->proceso->id]) : '' ?></td>

                                <td class="w3-border"><?= $procesoProductoSalida->has('producto') ? $this->Html->link($procesoProductoSalida->producto->label, ['controller' => 'Producto', 'action' => 'view', $procesoProductoSalida->producto->id]) : '' ?></td>
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

