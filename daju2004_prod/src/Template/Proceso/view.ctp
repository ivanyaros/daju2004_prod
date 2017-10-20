<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($proceso->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'proceso','action' => 'edit',$proceso->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
        <div class="w3-button w3-circle w3-red">
        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $proceso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proceso->id)]) ?>
        </div>
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
            <td class="w3-border"><?= __('Segundos Tiempo') ?></td>
            <td class="w3-border"><?= $this->Number->format($proceso->segundos_tiempo) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Visible') ?></td>
            <td class="w3-border"><?= $proceso->visible ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4 class="w3-border"><?= __('Atributos') ?></h4>
        <?= $this->Text->autoParagraph(h($proceso->atributos)); ?>
    </div>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'ordens')"><?= __("Ordens") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'procesoMaterialEntrada')"><?= __("Proceso Material Entrada") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'procesoProductoEntrada')"><?= __("Proceso Producto Entrada") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'procesoProductoSalida')"><?= __("Proceso Producto Salida") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'subproceso')"><?= __("Subproceso") ?></button>

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
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('defectuosos','defectuosos', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_creacion','fecha_creacion', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('fecha_terminacion','fecha_terminacion', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('estado_id','estado_id', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('centro_id','centro_id', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('proceso_id','proceso_id', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('coste_operario','coste_operario', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('prioridade_id','prioridade_id', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('atributos','atributos', ['model'=>'Ordens']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('categoria_id','categoria_id', ['model'=>'Ordens']) ?></th>
			</thead>
			<tbody>
<?php foreach ($ordens as $orden): ?>
				<?php $my_url= $this->Url->build(['controller' => 'ordens', 'action' => 'view',$orden->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($orden->id) ?></td>
                        <td class="w3-border"><?= h($orden->name) ?></td>
                        <td class="w3-border"><?= h($orden->referencia) ?></td>
                        <td class="w3-border"><?= h($orden->cantidad) ?></td>
                        <td class="w3-border"><?= h($orden->defectuosos) ?></td>
                        <td class="w3-border"><?= h($orden->fecha_creacion) ?></td>
                        <td class="w3-border"><?= h($orden->fecha_terminacion) ?></td>

                                <td class="w3-border"><?= $orden->has('estado') ? $this->Html->link($orden->estado->label, ['controller' => 'Estados', 'action' => 'view', $orden->estado->id]) : '' ?></td>

                                <td class="w3-border"><?= $orden->has('centro') ? $this->Html->link($orden->centro->label, ['controller' => 'Centros', 'action' => 'view', $orden->centro->id]) : '' ?></td>

                                <td class="w3-border"><?= $orden->has('proceso') ? $this->Html->link($orden->proceso->label, ['controller' => 'Proceso', 'action' => 'view', $orden->proceso->id]) : '' ?></td>
                        <td class="w3-border"><?= h($orden->coste_operario) ?></td>
                        <td class="w3-border"><?= h($orden->observaciones) ?></td>

                                <td class="w3-border"><?= $orden->has('prioridade') ? $this->Html->link($orden->prioridade->label, ['controller' => 'Prioridades', 'action' => 'view', $orden->prioridade->id]) : '' ?></td>
                        <td class="w3-border"><?= h($orden->atributos) ?></td>

                                <td class="w3-border"><?= $orden->has('categoria') ? $this->Html->link($orden->categoria->label, ['controller' => 'Categorias', 'action' => 'view', $orden->categoria->id]) : '' ?></td>
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
<div style="display:none" id="subproceso" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Subproceso') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'subproceso', 'action' => 'add',$proceso->id,'proceso_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($subproceso)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Subproceso']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Subproceso']) ?>
                <?= $this->Paginator->numbers(['model'=>'Subproceso','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Subproceso']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Subproceso']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Subproceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('proceso_id','proceso_id', ['model'=>'Subproceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('name','name', ['model'=>'Subproceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('segundos_inicio','segundos_inicio', ['model'=>'Subproceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('segundos_duracion','segundos_duracion', ['model'=>'Subproceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('descripcion','descripcion', ['model'=>'Subproceso']) ?></th>
			</thead>
			<tbody>
<?php foreach ($subproceso as $subproceso): ?>
				<?php $my_url= $this->Url->build(['controller' => 'subproceso', 'action' => 'view',$subproceso->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($subproceso->id) ?></td>

                                <td class="w3-border"><?= $subproceso->has('proceso') ? $this->Html->link($subproceso->proceso->label, ['controller' => 'Proceso', 'action' => 'view', $subproceso->proceso->id]) : '' ?></td>
                        <td class="w3-border"><?= h($subproceso->name) ?></td>
                        <td class="w3-border"><?= h($subproceso->segundos_inicio) ?></td>
                        <td class="w3-border"><?= h($subproceso->segundos_duracion) ?></td>
                        <td class="w3-border"><?= h($subproceso->descripcion) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Subproceso']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Subproceso']) ?>
                <?= $this->Paginator->numbers(['model'=>'Subproceso','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Subproceso']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Subproceso']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'Subproceso']) ?></p>
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

