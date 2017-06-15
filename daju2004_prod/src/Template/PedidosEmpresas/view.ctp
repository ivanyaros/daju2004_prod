<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($pedidosEmpresa->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'pedidosEmpresas','action' => 'edit',$pedidosEmpresa->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Name') ?></td>
            <td class="w3-border"><?= h($pedidosEmpresa->name) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Referencia') ?></td>
            <td class="w3-border"><?= h($pedidosEmpresa->referencia) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Proveedores Cliente') ?></td>
            <td class="w3-border"><?= $pedidosEmpresa->has('proveedores_cliente') ? $this->Html->link($pedidosEmpresa->proveedores_cliente->label, ['controller' => 'ProveedoresClientes', 'action' => 'view', $pedidosEmpresa->proveedores_cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Albaran') ?></td>
            <td class="w3-border"><?= h($pedidosEmpresa->albaran) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Observaciones') ?></td>
            <td class="w3-border"><?= h($pedidosEmpresa->observaciones) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($pedidosEmpresa->id) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Fecha') ?></td>
            <td class="w3-border"><?= h($pedidosEmpresa->fecha) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Terminado') ?></td>
            <td class="w3-border"><?= $pedidosEmpresa->terminado ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'envios')"><?= __("Envios") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'pedidosProductosDetalle')"><?= __("Pedidos Productos Detalle") ?></button>

<div style="display:none" id="envios" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Envios') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'envios', 'action' => 'add',$pedidosEmpresa->id,'pedidos_empresa_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($envios)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Envios']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Envios']) ?>
                <?= $this->Paginator->numbers(['model'=>'Envios','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Envios']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Envios']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Envios']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('proveedores_cliente_id','proveedores_cliente_id', ['model'=>'Envios']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_pedido','fecha_pedido', ['model'=>'Envios']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_envio','fecha_envio', ['model'=>'Envios']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('albaran','albaran', ['model'=>'Envios']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('pedidos_empresa_id','pedidos_empresa_id', ['model'=>'Envios']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('centro_id','centro_id', ['model'=>'Envios']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_entrega','fecha_entrega', ['model'=>'Envios']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Envios']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('direccione_id','direccione_id', ['model'=>'Envios']) ?></th>
			</thead>
			<tbody>
<?php foreach ($envios as $envio): ?>
				<?php $my_url= $this->Url->build(['controller' => 'envios', 'action' => 'view',$envio->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($envio->id) ?></td>

                                <td class="w3-border"><?= $envio->has('proveedores_cliente') ? $this->Html->link($envio->proveedores_cliente->label, ['controller' => 'ProveedoresClientes', 'action' => 'view', $envio->proveedores_cliente->id]) : '' ?></td>
                        <td class="w3-border"><?= h($envio->fecha_pedido) ?></td>
                        <td class="w3-border"><?= h($envio->fecha_envio) ?></td>
                        <td class="w3-border"><?= h($envio->albaran) ?></td>

                                <td class="w3-border"><?= $envio->has('pedidos_empresa') ? $this->Html->link($envio->pedidos_empresa->label, ['controller' => 'PedidosEmpresas', 'action' => 'view', $envio->pedidos_empresa->id]) : '' ?></td>

                                <td class="w3-border"><?= $envio->has('centro') ? $this->Html->link($envio->centro->label, ['controller' => 'Centros', 'action' => 'view', $envio->centro->id]) : '' ?></td>
                        <td class="w3-border"><?= h($envio->fecha_entrega) ?></td>
                        <td class="w3-border"><?= h($envio->observaciones) ?></td>

                                <td class="w3-border"><?= $envio->has('direccione') ? $this->Html->link($envio->direccione->label, ['controller' => 'Direcciones', 'action' => 'view', $envio->direccione->id]) : '' ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Envios']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Envios']) ?>
                <?= $this->Paginator->numbers(['model'=>'Envios','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Envios']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Envios']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'Envios']) ?></p>
        </div>
    
    <?php endif; ?>
</div>
<div style="display:none" id="pedidosProductosDetalle" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Pedidos Productos Detalle') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'pedidos-productos-detalle', 'action' => 'add',$pedidosEmpresa->id,'pedidos_empresa_id'])?>
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

