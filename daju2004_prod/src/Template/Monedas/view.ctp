<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="monedas view large-9 medium-8 columns content">
    <h3><?= h($moneda->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($moneda->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($moneda->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($moneda->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor') ?></th>
            <td><?= $this->Number->format($moneda->valor) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'material')"><?= __("Material") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'proceso')"><?= __("Proceso") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'producto')"><?= __("Producto") ?></button>

<div style="display:none" id="material" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Material') ?>
        <button onClick="location.href='/material/add/<?= $moneda->id ?>/moneda_id'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($material)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Material']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('name','name', ['model'=>'Material']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia','referencia', ['model'=>'Material']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia_proveedor','referencia_proveedor', ['model'=>'Material']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('familia_id','familia_id', ['model'=>'Material']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('longitud','longitud', ['model'=>'Material']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('anchura','anchura', ['model'=>'Material']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('profundidad','profundidad', ['model'=>'Material']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('color','color', ['model'=>'Material']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('gramaje','gramaje', ['model'=>'Material']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('peso_ud','peso_ud', ['model'=>'Material']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('unidades_embalaje','unidades_embalaje', ['model'=>'Material']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('precio','precio', ['model'=>'Material']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('iva_id','iva_id', ['model'=>'Material']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Material']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('visible','visible', ['model'=>'Material']) ?></th>
			</thead>
			<tbody>
<?php foreach ($material as $material): ?>
				<?php $my_url= $this->Url->build(['controller' => 'material', 'action' => 'view',$material->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($material->id) ?></td>
                	<td><?= h($material->name) ?></td>
                	<td><?= h($material->referencia) ?></td>
                	<td><?= h($material->referencia_proveedor) ?></td>
                	<td><?= h($material->familia_id) ?></td>
                	<td><?= h($material->longitud) ?></td>
                	<td><?= h($material->anchura) ?></td>
                	<td><?= h($material->profundidad) ?></td>
                	<td><?= h($material->color) ?></td>
                	<td><?= h($material->gramaje) ?></td>
                	<td><?= h($material->peso_ud) ?></td>
                	<td><?= h($material->unidades_embalaje) ?></td>
                	<td><?= h($material->precio) ?></td>
                	<td><?= h($material->iva_id) ?></td>
                	<td><?= h($material->observaciones) ?></td>
                	<td><?= h($material->visible) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Material']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Material']) ?>
            <?= $this->Paginator->numbers(['model'=>'Material']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Material']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Material']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'Material']) ?></p>
    </div>
    <?php endif; ?>
</div>
<div style="display:none" id="proceso" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Proceso') ?>
        <button onClick="location.href='/proceso/add/<?= $moneda->id ?>/moneda_id'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($proceso)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('name','name', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia','referencia', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('familia_id','familia_id', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('precio','precio', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('iva_id','iva_id', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('visible','visible', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('enlaces','enlaces', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('centro_id','centro_id', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('coste_tiempo','coste_tiempo', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('coste_operaciones','coste_operaciones', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion','descripcion', ['model'=>'Proceso']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('larga','larga', ['model'=>'Proceso']) ?></th>
			</thead>
			<tbody>
<?php foreach ($proceso as $proceso): ?>
				<?php $my_url= $this->Url->build(['controller' => 'proceso', 'action' => 'view',$proceso->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($proceso->id) ?></td>
                	<td><?= h($proceso->name) ?></td>
                	<td><?= h($proceso->referencia) ?></td>
                	<td><?= h($proceso->familia_id) ?></td>
                	<td><?= h($proceso->precio) ?></td>
                	<td><?= h($proceso->iva_id) ?></td>
                	<td><?= h($proceso->observaciones) ?></td>
                	<td><?= h($proceso->visible) ?></td>
                	<td><?= h($proceso->enlaces) ?></td>
                	<td><?= h($proceso->centro_id) ?></td>
                	<td><?= h($proceso->coste_tiempo) ?></td>
                	<td><?= h($proceso->coste_operaciones) ?></td>
                	<td><?= h($proceso->descripcion) ?></td>
                	<td><?= h($proceso->larga) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Proceso']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Proceso']) ?>
            <?= $this->Paginator->numbers(['model'=>'Proceso']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Proceso']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Proceso']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'Proceso']) ?></p>
    </div>
    <?php endif; ?>
</div>
<div style="display:none" id="producto" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Producto') ?>
        <button onClick="location.href='/producto/add/<?= $moneda->id ?>/moneda_id'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($producto)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Producto']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('name','name', ['model'=>'Producto']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia','referencia', ['model'=>'Producto']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia_proveedor','referencia_proveedor', ['model'=>'Producto']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('familia_id','familia_id', ['model'=>'Producto']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('precio','precio', ['model'=>'Producto']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('iva_id','iva_id', ['model'=>'Producto']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Producto']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('visible','visible', ['model'=>'Producto']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('peso','peso', ['model'=>'Producto']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad','cantidad', ['model'=>'Producto']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion','descripcion', ['model'=>'Producto']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('larga','larga', ['model'=>'Producto']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('coste','coste', ['model'=>'Producto']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('ancho','ancho', ['model'=>'Producto']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('largo','largo', ['model'=>'Producto']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('tolerancia','tolerancia', ['model'=>'Producto']) ?></th>
			</thead>
			<tbody>
<?php foreach ($producto as $producto): ?>
				<?php $my_url= $this->Url->build(['controller' => 'producto', 'action' => 'view',$producto->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($producto->id) ?></td>
                	<td><?= h($producto->name) ?></td>
                	<td><?= h($producto->referencia) ?></td>
                	<td><?= h($producto->referencia_proveedor) ?></td>
                	<td><?= h($producto->familia_id) ?></td>
                	<td><?= h($producto->precio) ?></td>
                	<td><?= h($producto->iva_id) ?></td>
                	<td><?= h($producto->observaciones) ?></td>
                	<td><?= h($producto->visible) ?></td>
                	<td><?= h($producto->peso) ?></td>
                	<td><?= h($producto->cantidad) ?></td>
                	<td><?= h($producto->descripcion) ?></td>
                	<td><?= h($producto->larga) ?></td>
                	<td><?= h($producto->coste) ?></td>
                	<td><?= h($producto->ancho) ?></td>
                	<td><?= h($producto->largo) ?></td>
                	<td><?= h($producto->tolerancia) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Producto']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Producto']) ?>
            <?= $this->Paginator->numbers(['model'=>'Producto']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Producto']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Producto']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'Producto']) ?></p>
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

