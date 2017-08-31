<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($familia->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'familias','action' => 'edit',$familia->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Name') ?></td>
            <td class="w3-border"><?= h($familia->name) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Observaciones') ?></td>
            <td class="w3-border"><?= h($familia->observaciones) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($familia->id) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'material')"><?= __("Material") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'proceso')"><?= __("Proceso") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'producto')"><?= __("Producto") ?></button>

<div style="display:none" id="material" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Material') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'material', 'action' => 'add',$familia->id,'familia_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($material)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Material']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Material']) ?>
                <?= $this->Paginator->numbers(['model'=>'Material','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Material']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Material']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Material']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('name','name', ['model'=>'Material']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('referencia','referencia', ['model'=>'Material']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('referencia_proveedor','referencia_proveedor', ['model'=>'Material']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('familia_id','familia_id', ['model'=>'Material']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('longitud','longitud', ['model'=>'Material']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('anchura','anchura', ['model'=>'Material']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('profundidad','profundidad', ['model'=>'Material']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('color','color', ['model'=>'Material']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('gramaje','gramaje', ['model'=>'Material']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('peso_ud','peso_ud', ['model'=>'Material']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('unidades_embalaje','unidades_embalaje', ['model'=>'Material']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('precio','precio', ['model'=>'Material']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('moneda_id','moneda_id', ['model'=>'Material']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('iva_id','iva_id', ['model'=>'Material']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Material']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('visible','visible', ['model'=>'Material']) ?></th>
			</thead>
			<tbody>
<?php foreach ($material as $material): ?>
				<?php $my_url= $this->Url->build(['controller' => 'material', 'action' => 'view',$material->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($material->id) ?></td>
                        <td class="w3-border"><?= h($material->name) ?></td>
                        <td class="w3-border"><?= h($material->referencia) ?></td>
                        <td class="w3-border"><?= h($material->referencia_proveedor) ?></td>

                                <td class="w3-border"><?= $material->has('familia') ? $this->Html->link($material->familia->label, ['controller' => 'Familias', 'action' => 'view', $material->familia->id]) : '' ?></td>
                        <td class="w3-border"><?= h($material->longitud) ?></td>
                        <td class="w3-border"><?= h($material->anchura) ?></td>
                        <td class="w3-border"><?= h($material->profundidad) ?></td>
                        <td class="w3-border"><?= h($material->color) ?></td>
                        <td class="w3-border"><?= h($material->gramaje) ?></td>
                        <td class="w3-border"><?= h($material->peso_ud) ?></td>
                        <td class="w3-border"><?= h($material->unidades_embalaje) ?></td>
                        <td class="w3-border"><?= h($material->precio) ?></td>

                                <td class="w3-border"><?= $material->has('moneda') ? $this->Html->link($material->moneda->label, ['controller' => 'Monedas', 'action' => 'view', $material->moneda->id]) : '' ?></td>

                                <td class="w3-border"><?= $material->has('iva') ? $this->Html->link($material->iva->label, ['controller' => 'Ivas', 'action' => 'view', $material->iva->id]) : '' ?></td>
                        <td class="w3-border"><?= h($material->observaciones) ?></td>
                        <td class="w3-border"><?= h($material->visible) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Material']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Material']) ?>
                <?= $this->Paginator->numbers(['model'=>'Material','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Material']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Material']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'Material']) ?></p>
        </div>
    
    <?php endif; ?>
</div>
<div style="display:none" id="proceso" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Proceso') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'proceso', 'action' => 'add',$familia->id,'familia_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($proceso)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Proceso']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Proceso']) ?>
                <?= $this->Paginator->numbers(['model'=>'Proceso','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Proceso']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Proceso']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('name','name', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('referencia','referencia', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('familia_id','familia_id', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('precio','precio', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('moneda_id','moneda_id', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('iva_id','iva_id', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('visible','visible', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('enlaces','enlaces', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('centro_id','centro_id', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('segundos_tiempo','segundos_tiempo', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('coste_operaciones','coste_operaciones', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('descripcion','descripcion', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('larga','larga', ['model'=>'Proceso']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('atributos','atributos', ['model'=>'Proceso']) ?></th>
			</thead>
			<tbody>
<?php foreach ($proceso as $proceso): ?>
				<?php $my_url= $this->Url->build(['controller' => 'proceso', 'action' => 'view',$proceso->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($proceso->id) ?></td>
                        <td class="w3-border"><?= h($proceso->name) ?></td>
                        <td class="w3-border"><?= h($proceso->referencia) ?></td>

                                <td class="w3-border"><?= $proceso->has('familia') ? $this->Html->link($proceso->familia->label, ['controller' => 'Familias', 'action' => 'view', $proceso->familia->id]) : '' ?></td>
                        <td class="w3-border"><?= h($proceso->precio) ?></td>

                                <td class="w3-border"><?= $proceso->has('moneda') ? $this->Html->link($proceso->moneda->label, ['controller' => 'Monedas', 'action' => 'view', $proceso->moneda->id]) : '' ?></td>

                                <td class="w3-border"><?= $proceso->has('iva') ? $this->Html->link($proceso->iva->label, ['controller' => 'Ivas', 'action' => 'view', $proceso->iva->id]) : '' ?></td>
                        <td class="w3-border"><?= h($proceso->observaciones) ?></td>
                        <td class="w3-border"><?= h($proceso->visible) ?></td>
                        <td class="w3-border"><?= h($proceso->enlaces) ?></td>

                                <td class="w3-border"><?= $proceso->has('centro') ? $this->Html->link($proceso->centro->label, ['controller' => 'Centros', 'action' => 'view', $proceso->centro->id]) : '' ?></td>
                        <td class="w3-border"><?= h($proceso->segundos_tiempo) ?></td>
                        <td class="w3-border"><?= h($proceso->coste_operaciones) ?></td>
                        <td class="w3-border"><?= h($proceso->descripcion) ?></td>
                        <td class="w3-border"><?= h($proceso->larga) ?></td>
                        <td class="w3-border"><?= h($proceso->atributos) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Proceso']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Proceso']) ?>
                <?= $this->Paginator->numbers(['model'=>'Proceso','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Proceso']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Proceso']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'Proceso']) ?></p>
        </div>
    
    <?php endif; ?>
</div>
<div style="display:none" id="producto" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Producto') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'producto', 'action' => 'add',$familia->id,'familia_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($producto)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Producto']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Producto']) ?>
                <?= $this->Paginator->numbers(['model'=>'Producto','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Producto']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Producto']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Producto']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('name','name', ['model'=>'Producto']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('referencia','referencia', ['model'=>'Producto']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('referencia_proveedor','referencia_proveedor', ['model'=>'Producto']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('familia_id','familia_id', ['model'=>'Producto']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('precio','precio', ['model'=>'Producto']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('moneda_id','moneda_id', ['model'=>'Producto']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('iva_id','iva_id', ['model'=>'Producto']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Producto']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('visible','visible', ['model'=>'Producto']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('peso','peso', ['model'=>'Producto']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('ue','ue', ['model'=>'Producto']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('descripcion','descripcion', ['model'=>'Producto']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('larga','larga', ['model'=>'Producto']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('coste','coste', ['model'=>'Producto']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('ancho','ancho', ['model'=>'Producto']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('largo','largo', ['model'=>'Producto']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('tolerancia','tolerancia', ['model'=>'Producto']) ?></th>
			</thead>
			<tbody>
<?php foreach ($producto as $producto): ?>
				<?php $my_url= $this->Url->build(['controller' => 'producto', 'action' => 'view',$producto->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($producto->id) ?></td>
                        <td class="w3-border"><?= h($producto->name) ?></td>
                        <td class="w3-border"><?= h($producto->referencia) ?></td>
                        <td class="w3-border"><?= h($producto->referencia_proveedor) ?></td>

                                <td class="w3-border"><?= $producto->has('familia') ? $this->Html->link($producto->familia->label, ['controller' => 'Familias', 'action' => 'view', $producto->familia->id]) : '' ?></td>
                        <td class="w3-border"><?= h($producto->precio) ?></td>

                                <td class="w3-border"><?= $producto->has('moneda') ? $this->Html->link($producto->moneda->label, ['controller' => 'Monedas', 'action' => 'view', $producto->moneda->id]) : '' ?></td>

                                <td class="w3-border"><?= $producto->has('iva') ? $this->Html->link($producto->iva->label, ['controller' => 'Ivas', 'action' => 'view', $producto->iva->id]) : '' ?></td>
                        <td class="w3-border"><?= h($producto->observaciones) ?></td>
                        <td class="w3-border"><?= h($producto->visible) ?></td>
                        <td class="w3-border"><?= h($producto->peso) ?></td>
                        <td class="w3-border"><?= h($producto->ue) ?></td>
                        <td class="w3-border"><?= h($producto->descripcion) ?></td>
                        <td class="w3-border"><?= h($producto->larga) ?></td>
                        <td class="w3-border"><?= h($producto->coste) ?></td>
                        <td class="w3-border"><?= h($producto->ancho) ?></td>
                        <td class="w3-border"><?= h($producto->largo) ?></td>
                        <td class="w3-border"><?= h($producto->tolerancia) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Producto']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Producto']) ?>
                <?= $this->Paginator->numbers(['model'=>'Producto','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Producto']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Producto']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'Producto']) ?></p>
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

