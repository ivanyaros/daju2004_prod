<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($proveedoresCliente->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'proveedoresClientes','action' => 'edit',$proveedoresCliente->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Name') ?></td>
            <td class="w3-border"><?= h($proveedoresCliente->name) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Direccion Fiscal') ?></td>
            <td class="w3-border"><?= h($proveedoresCliente->direccion_fiscal) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Telefono') ?></td>
            <td class="w3-border"><?= h($proveedoresCliente->telefono) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Fax') ?></td>
            <td class="w3-border"><?= h($proveedoresCliente->fax) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Correo') ?></td>
            <td class="w3-border"><?= h($proveedoresCliente->correo) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Pagina Web') ?></td>
            <td class="w3-border"><?= h($proveedoresCliente->pagina_web) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('NIF CIF') ?></td>
            <td class="w3-border"><?= h($proveedoresCliente->NIF_CIF) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Observaciones') ?></td>
            <td class="w3-border"><?= h($proveedoresCliente->observaciones) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Persona Contacto') ?></td>
            <td class="w3-border"><?= h($proveedoresCliente->persona_contacto) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($proveedoresCliente->id) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Proveedor Cliente') ?></td>
            <td class="w3-border"><?= $proveedoresCliente->proveedor_cliente ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Visible') ?></td>
            <td class="w3-border"><?= $proveedoresCliente->visible ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'direcciones')"><?= __("Direcciones") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'entradasDeMateriales')"><?= __("Entradas De Materiales") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'envios')"><?= __("Envios") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'pedidosEmpresas')"><?= __("Pedidos Empresas") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'proveedoresMaterial')"><?= __("Proveedores Material") ?></button>

<div style="display:none" id="direcciones" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Direcciones') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'direcciones', 'action' => 'add',$proveedoresCliente->id,'proveedores_cliente_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($direcciones)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Direcciones']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Direcciones']) ?>
                <?= $this->Paginator->numbers(['model'=>'Direcciones','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Direcciones']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Direcciones']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Direcciones']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('proveedores_cliente_id','proveedores_cliente_id', ['model'=>'Direcciones']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('direccion','direccion', ['model'=>'Direcciones']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('telefono','telefono', ['model'=>'Direcciones']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fax','fax', ['model'=>'Direcciones']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('correo','correo', ['model'=>'Direcciones']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('pagina_web','pagina_web', ['model'=>'Direcciones']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Direcciones']) ?></th>
			</thead>
			<tbody>
<?php foreach ($direcciones as $direccione): ?>
				<?php $my_url= $this->Url->build(['controller' => 'direcciones', 'action' => 'view',$direccione->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($direccione->id) ?></td>

                                <td class="w3-border"><?= $direccione->has('proveedores_cliente') ? $this->Html->link($direccione->proveedores_cliente->label, ['controller' => 'ProveedoresClientes', 'action' => 'view', $direccione->proveedores_cliente->id]) : '' ?></td>
                        <td class="w3-border"><?= h($direccione->direccion) ?></td>
                        <td class="w3-border"><?= h($direccione->telefono) ?></td>
                        <td class="w3-border"><?= h($direccione->fax) ?></td>
                        <td class="w3-border"><?= h($direccione->correo) ?></td>
                        <td class="w3-border"><?= h($direccione->pagina_web) ?></td>
                        <td class="w3-border"><?= h($direccione->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Direcciones']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Direcciones']) ?>
                <?= $this->Paginator->numbers(['model'=>'Direcciones','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Direcciones']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Direcciones']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'Direcciones']) ?></p>
        </div>
    
    <?php endif; ?>
</div>
<div style="display:none" id="entradasDeMateriales" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Entradas De Materiales') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'entradas-de-materiales', 'action' => 'add',$proveedoresCliente->id,'proveedores_cliente_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($entradasDeMateriales)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'EntradasDeMateriales']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'EntradasDeMateriales']) ?>
                <?= $this->Paginator->numbers(['model'=>'EntradasDeMateriales','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'EntradasDeMateriales']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'EntradasDeMateriales']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'EntradasDeMateriales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('proveedores_cliente_id','proveedores_cliente_id', ['model'=>'EntradasDeMateriales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('referencia','referencia', ['model'=>'EntradasDeMateriales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'EntradasDeMateriales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('albaran','albaran', ['model'=>'EntradasDeMateriales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_envio','fecha_envio', ['model'=>'EntradasDeMateriales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('centro_id','centro_id', ['model'=>'EntradasDeMateriales']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_recepcion','fecha_recepcion', ['model'=>'EntradasDeMateriales']) ?></th>
			</thead>
			<tbody>
<?php foreach ($entradasDeMateriales as $entradasDeMateriale): ?>
				<?php $my_url= $this->Url->build(['controller' => 'entradasDeMateriales', 'action' => 'view',$entradasDeMateriale->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($entradasDeMateriale->id) ?></td>

                                <td class="w3-border"><?= $entradasDeMateriale->has('proveedores_cliente') ? $this->Html->link($entradasDeMateriale->proveedores_cliente->label, ['controller' => 'ProveedoresClientes', 'action' => 'view', $entradasDeMateriale->proveedores_cliente->id]) : '' ?></td>
                        <td class="w3-border"><?= h($entradasDeMateriale->referencia) ?></td>
                        <td class="w3-border"><?= h($entradasDeMateriale->observaciones) ?></td>
                        <td class="w3-border"><?= h($entradasDeMateriale->albaran) ?></td>
                        <td class="w3-border"><?= h($entradasDeMateriale->fecha_envio) ?></td>

                                <td class="w3-border"><?= $entradasDeMateriale->has('centro') ? $this->Html->link($entradasDeMateriale->centro->label, ['controller' => 'Centros', 'action' => 'view', $entradasDeMateriale->centro->id]) : '' ?></td>
                        <td class="w3-border"><?= h($entradasDeMateriale->fecha_recepcion) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'EntradasDeMateriales']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'EntradasDeMateriales']) ?>
                <?= $this->Paginator->numbers(['model'=>'EntradasDeMateriales','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'EntradasDeMateriales']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'EntradasDeMateriales']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'EntradasDeMateriales']) ?></p>
        </div>
    
    <?php endif; ?>
</div>
<div style="display:none" id="envios" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Envios') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'envios', 'action' => 'add',$proveedoresCliente->id,'proveedores_cliente_id'])?>
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
<div style="display:none" id="pedidosEmpresas" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Pedidos Empresas') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'pedidos-empresas', 'action' => 'add',$proveedoresCliente->id,'proveedores_cliente_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($pedidosEmpresas)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'PedidosEmpresas']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'PedidosEmpresas']) ?>
                <?= $this->Paginator->numbers(['model'=>'PedidosEmpresas','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'PedidosEmpresas']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'PedidosEmpresas']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'PedidosEmpresas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('name','name', ['model'=>'PedidosEmpresas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('referencia','referencia', ['model'=>'PedidosEmpresas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('proveedores_cliente_id','proveedores_cliente_id', ['model'=>'PedidosEmpresas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha','fecha', ['model'=>'PedidosEmpresas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('albaran','albaran', ['model'=>'PedidosEmpresas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'PedidosEmpresas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('terminado','terminado', ['model'=>'PedidosEmpresas']) ?></th>
			</thead>
			<tbody>
<?php foreach ($pedidosEmpresas as $pedidosEmpresa): ?>
				<?php $my_url= $this->Url->build(['controller' => 'pedidosEmpresas', 'action' => 'view',$pedidosEmpresa->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($pedidosEmpresa->id) ?></td>
                        <td class="w3-border"><?= h($pedidosEmpresa->name) ?></td>
                        <td class="w3-border"><?= h($pedidosEmpresa->referencia) ?></td>

                                <td class="w3-border"><?= $pedidosEmpresa->has('proveedores_cliente') ? $this->Html->link($pedidosEmpresa->proveedores_cliente->label, ['controller' => 'ProveedoresClientes', 'action' => 'view', $pedidosEmpresa->proveedores_cliente->id]) : '' ?></td>
                        <td class="w3-border"><?= h($pedidosEmpresa->fecha) ?></td>
                        <td class="w3-border"><?= h($pedidosEmpresa->albaran) ?></td>
                        <td class="w3-border"><?= h($pedidosEmpresa->observaciones) ?></td>
                        <td class="w3-border"><?= h($pedidosEmpresa->terminado) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'PedidosEmpresas']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'PedidosEmpresas']) ?>
                <?= $this->Paginator->numbers(['model'=>'PedidosEmpresas','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'PedidosEmpresas']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'PedidosEmpresas']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'PedidosEmpresas']) ?></p>
        </div>
    
    <?php endif; ?>
</div>
<div style="display:none" id="proveedoresMaterial" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Proveedores Material') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'proveedores-material', 'action' => 'add',$proveedoresCliente->id,'proveedores_cliente_id'])?>
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

