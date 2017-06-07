<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="pedidosEmpresas view large-9 medium-8 columns content">
    <h3><?= h($pedidosEmpresa->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($pedidosEmpresa->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($pedidosEmpresa->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Proveedores Cliente') ?></th>
            <td><?= $pedidosEmpresa->has('proveedores_cliente') ? $this->Html->link($pedidosEmpresa->proveedores_cliente->label, ['controller' => 'ProveedoresClientes', 'action' => 'view', $pedidosEmpresa->proveedores_cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Albaran') ?></th>
            <td><?= h($pedidosEmpresa->albaran) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($pedidosEmpresa->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pedidosEmpresa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($pedidosEmpresa->fecha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Terminado') ?></th>
            <td><?= $pedidosEmpresa->terminado ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'envios')"><?= __("Envios") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'pedidosProductosDetalle')"><?= __("Pedidos Productos Detalle") ?></button>

<div style="display:none" id="envios" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Envios') ?>
        <button onClick="location.href='/envios/add/<?= $pedidosEmpresa->id ?>/pedidosEmpresa_id'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($envios)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Envios']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('proveedores_cliente_id','proveedores_cliente_id', ['model'=>'Envios']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_pedido','fecha_pedido', ['model'=>'Envios']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_envio','fecha_envio', ['model'=>'Envios']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('albaran','albaran', ['model'=>'Envios']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('pedidos_empresa_id','pedidos_empresa_id', ['model'=>'Envios']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('centro_id','centro_id', ['model'=>'Envios']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_entrega','fecha_entrega', ['model'=>'Envios']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Envios']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccione_id','direccione_id', ['model'=>'Envios']) ?></th>
			</thead>
			<tbody>
<?php foreach ($envios as $envio): ?>
				<?php $my_url= $this->Url->build(['controller' => 'envios', 'action' => 'view',$envio->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($envio->id) ?></td>
                	<td><?= h($envio->proveedores_cliente_id) ?></td>
                	<td><?= h($envio->fecha_pedido) ?></td>
                	<td><?= h($envio->fecha_envio) ?></td>
                	<td><?= h($envio->albaran) ?></td>
                	<td><?= h($envio->pedidos_empresa_id) ?></td>
                	<td><?= h($envio->centro_id) ?></td>
                	<td><?= h($envio->fecha_entrega) ?></td>
                	<td><?= h($envio->observaciones) ?></td>
                	<td><?= h($envio->direccione_id) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Envios']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Envios']) ?>
            <?= $this->Paginator->numbers(['model'=>'Envios']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Envios']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Envios']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'Envios']) ?></p>
    </div>
    <?php endif; ?>
</div>
<div style="display:none" id="pedidosProductosDetalle" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Pedidos Productos Detalle') ?>
        <button onClick="location.href='/pedidos-productos-detalle/add/<?= $pedidosEmpresa->id ?>/pedidosEmpresa_id'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($pedidosProductosDetalle)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'PedidosProductosDetalle']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('pedidos_empresa_id','pedidos_empresa_id', ['model'=>'PedidosProductosDetalle']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('producto_id','producto_id', ['model'=>'PedidosProductosDetalle']) ?></th>
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
                	<td><?= h($pedidosProductosDetalle->producto_id) ?></td>
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

