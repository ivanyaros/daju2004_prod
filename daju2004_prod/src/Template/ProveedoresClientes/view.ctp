<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="proveedoresClientes view large-9 medium-8 columns content">
    <h3><?= h($proveedoresCliente->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($proveedoresCliente->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion Fiscal') ?></th>
            <td><?= h($proveedoresCliente->direccion_fiscal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($proveedoresCliente->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fax') ?></th>
            <td><?= h($proveedoresCliente->fax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correo') ?></th>
            <td><?= h($proveedoresCliente->correo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pagina Web') ?></th>
            <td><?= h($proveedoresCliente->pagina_web) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NIF CIF') ?></th>
            <td><?= h($proveedoresCliente->NIF_CIF) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($proveedoresCliente->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Persona Contacto') ?></th>
            <td><?= h($proveedoresCliente->persona_contacto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($proveedoresCliente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Proveedor Cliente') ?></th>
            <td><?= $proveedoresCliente->proveedor_cliente ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Visible') ?></th>
            <td><?= $proveedoresCliente->visible ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'direcciones')"><?= __("Direcciones") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'entradasDeMateriales')"><?= __("Entradas De Materiales") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'envios')"><?= __("Envios") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'pedidosEmpresas')"><?= __("Pedidos Empresas") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'proveedoresMaterial')"><?= __("Proveedores Material") ?></button>

<div style="display:none" id="direcciones" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Direcciones') ?></h4>
        <?php if (!empty($direcciones)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Direcciones']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('proveedores_cliente_id','proveedores_cliente_id', ['model'=>'Direcciones']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion','direccion', ['model'=>'Direcciones']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono','telefono', ['model'=>'Direcciones']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('fax','fax', ['model'=>'Direcciones']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('correo','correo', ['model'=>'Direcciones']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('pagina_web','pagina_web', ['model'=>'Direcciones']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Direcciones']) ?></th>
			</thead>
			<tbody>
<?php foreach ($direcciones as $direccione): ?>
				<?php $my_url= $this->Url->build(['controller' => 'direcciones', 'action' => 'view',$direccione->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($direccione->id) ?></td>
                	<td><?= h($direccione->proveedores_cliente_id) ?></td>
                	<td><?= h($direccione->direccion) ?></td>
                	<td><?= h($direccione->telefono) ?></td>
                	<td><?= h($direccione->fax) ?></td>
                	<td><?= h($direccione->correo) ?></td>
                	<td><?= h($direccione->pagina_web) ?></td>
                	<td><?= h($direccione->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Direcciones']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Direcciones']) ?>
            <?= $this->Paginator->numbers(['model'=>'Direcciones']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Direcciones']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Direcciones']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'Direcciones']) ?></p>
    </div>
    <?php endif; ?>
</div>
<div style="display:none" id="entradasDeMateriales" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Entradas De Materiales') ?></h4>
        <?php if (!empty($entradasDeMateriales)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'EntradasDeMateriales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('proveedores_cliente_id','proveedores_cliente_id', ['model'=>'EntradasDeMateriales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia','referencia', ['model'=>'EntradasDeMateriales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'EntradasDeMateriales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('albaran','albaran', ['model'=>'EntradasDeMateriales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_envio','fecha_envio', ['model'=>'EntradasDeMateriales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('centro_id','centro_id', ['model'=>'EntradasDeMateriales']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_recepcion','fecha_recepcion', ['model'=>'EntradasDeMateriales']) ?></th>
			</thead>
			<tbody>
<?php foreach ($entradasDeMateriales as $entradasDeMateriale): ?>
				<?php $my_url= $this->Url->build(['controller' => 'entradasDeMateriales', 'action' => 'view',$entradasDeMateriale->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($entradasDeMateriale->id) ?></td>
                	<td><?= h($entradasDeMateriale->proveedores_cliente_id) ?></td>
                	<td><?= h($entradasDeMateriale->referencia) ?></td>
                	<td><?= h($entradasDeMateriale->observaciones) ?></td>
                	<td><?= h($entradasDeMateriale->albaran) ?></td>
                	<td><?= h($entradasDeMateriale->fecha_envio) ?></td>
                	<td><?= h($entradasDeMateriale->centro_id) ?></td>
                	<td><?= h($entradasDeMateriale->fecha_recepcion) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'EntradasDeMateriales']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'EntradasDeMateriales']) ?>
            <?= $this->Paginator->numbers(['model'=>'EntradasDeMateriales']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'EntradasDeMateriales']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'EntradasDeMateriales']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'EntradasDeMateriales']) ?></p>
    </div>
    <?php endif; ?>
</div>
<div style="display:none" id="envios" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Envios') ?></h4>
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
<div style="display:none" id="pedidosEmpresas" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Pedidos Empresas') ?></h4>
        <?php if (!empty($pedidosEmpresas)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'PedidosEmpresas']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('name','name', ['model'=>'PedidosEmpresas']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia','referencia', ['model'=>'PedidosEmpresas']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('proveedores_cliente_id','proveedores_cliente_id', ['model'=>'PedidosEmpresas']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha','fecha', ['model'=>'PedidosEmpresas']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('albaran','albaran', ['model'=>'PedidosEmpresas']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'PedidosEmpresas']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('terminado','terminado', ['model'=>'PedidosEmpresas']) ?></th>
			</thead>
			<tbody>
<?php foreach ($pedidosEmpresas as $pedidosEmpresa): ?>
				<?php $my_url= $this->Url->build(['controller' => 'pedidosEmpresas', 'action' => 'view',$pedidosEmpresa->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($pedidosEmpresa->id) ?></td>
                	<td><?= h($pedidosEmpresa->name) ?></td>
                	<td><?= h($pedidosEmpresa->referencia) ?></td>
                	<td><?= h($pedidosEmpresa->proveedores_cliente_id) ?></td>
                	<td><?= h($pedidosEmpresa->fecha) ?></td>
                	<td><?= h($pedidosEmpresa->albaran) ?></td>
                	<td><?= h($pedidosEmpresa->observaciones) ?></td>
                	<td><?= h($pedidosEmpresa->terminado) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'PedidosEmpresas']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'PedidosEmpresas']) ?>
            <?= $this->Paginator->numbers(['model'=>'PedidosEmpresas']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'PedidosEmpresas']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'PedidosEmpresas']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'PedidosEmpresas']) ?></p>
    </div>
    <?php endif; ?>
</div>
<div style="display:none" id="proveedoresMaterial" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Proveedores Material') ?></h4>
        <?php if (!empty($proveedoresMaterial)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'ProveedoresMaterial']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('proveedores_cliente_id','proveedores_cliente_id', ['model'=>'ProveedoresMaterial']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('material_id','material_id', ['model'=>'ProveedoresMaterial']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'ProveedoresMaterial']) ?></th>
			</thead>
			<tbody>
<?php foreach ($proveedoresMaterial as $proveedoresMaterial): ?>
				<?php $my_url= $this->Url->build(['controller' => 'proveedoresMaterial', 'action' => 'view',$proveedoresMaterial->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($proveedoresMaterial->id) ?></td>
                	<td><?= h($proveedoresMaterial->proveedores_cliente_id) ?></td>
                	<td><?= h($proveedoresMaterial->material_id) ?></td>
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

