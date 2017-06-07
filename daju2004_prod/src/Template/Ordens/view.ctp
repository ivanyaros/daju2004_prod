<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ordens view large-9 medium-8 columns content">
    <h3><?= h($orden->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($orden->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($orden->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $orden->has('estado') ? $this->Html->link($orden->estado->label, ['controller' => 'Estados', 'action' => 'view', $orden->estado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Centro') ?></th>
            <td><?= $orden->has('centro') ? $this->Html->link($orden->centro->label, ['controller' => 'Centros', 'action' => 'view', $orden->centro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Proceso') ?></th>
            <td><?= $orden->has('proceso') ? $this->Html->link($orden->proceso->label, ['controller' => 'Proceso', 'action' => 'view', $orden->proceso->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($orden->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prioridade') ?></th>
            <td><?= $orden->has('prioridade') ? $this->Html->link($orden->prioridade->label, ['controller' => 'Prioridades', 'action' => 'view', $orden->prioridade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($orden->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($orden->cantidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Scrap') ?></th>
            <td><?= $this->Number->format($orden->scrap) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste Operario') ?></th>
            <td><?= $this->Number->format($orden->coste_operario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Creacion') ?></th>
            <td><?= h($orden->fecha_creacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Terminacion') ?></th>
            <td><?= h($orden->fecha_terminacion) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'estadosDeOrdens')"><?= __("Estados De Ordens") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'objetos')"><?= __("Objetos") ?></button>

<div style="display:none" id="estadosDeOrdens" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Estados De Ordens') ?>
        <button onClick="location.href='/estados-de-ordens/add/<?= $orden->id ?>/orden_id'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($estadosDeOrdens)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'EstadosDeOrdens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado_id','estado_id', ['model'=>'EstadosDeOrdens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_inicio','fecha_inicio', ['model'=>'EstadosDeOrdens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_fin','fecha_fin', ['model'=>'EstadosDeOrdens']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion','descripcion', ['model'=>'EstadosDeOrdens']) ?></th>
			</thead>
			<tbody>
<?php foreach ($estadosDeOrdens as $estadosDeOrden): ?>
				<?php $my_url= $this->Url->build(['controller' => 'estadosDeOrdens', 'action' => 'view',$estadosDeOrden->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($estadosDeOrden->id) ?></td>
                	<td><?= h($estadosDeOrden->estado_id) ?></td>
                	<td><?= h($estadosDeOrden->fecha_inicio) ?></td>
                	<td><?= h($estadosDeOrden->fecha_fin) ?></td>
                	<td><?= h($estadosDeOrden->descripcion) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'EstadosDeOrdens']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'EstadosDeOrdens']) ?>
            <?= $this->Paginator->numbers(['model'=>'EstadosDeOrdens']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'EstadosDeOrdens']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'EstadosDeOrdens']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'EstadosDeOrdens']) ?></p>
    </div>
    <?php endif; ?>
</div>
<div style="display:none" id="objetos" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Objetos') ?>
        <button onClick="location.href='/objetos/add/<?= $orden->id ?>/orden_id'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($objetos)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('name','name', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('producto_id','producto_id', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_serie','numero_serie', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia','referencia', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('lote','lote', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('localizacione_id','localizacione_id', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('coste','coste', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('defectuosos','defectuosos', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('peso','peso', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'Objetos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('envio_id','envio_id', ['model'=>'Objetos']) ?></th>
			</thead>
			<tbody>
<?php foreach ($objetos as $objeto): ?>
				<?php $my_url= $this->Url->build(['controller' => 'objetos', 'action' => 'view',$objeto->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($objeto->id) ?></td>
                	<td><?= h($objeto->name) ?></td>
                	<td><?= h($objeto->producto_id) ?></td>
                	<td><?= h($objeto->numero_serie) ?></td>
                	<td><?= h($objeto->referencia) ?></td>
                	<td><?= h($objeto->lote) ?></td>
                	<td><?= h($objeto->localizacione_id) ?></td>
                	<td><?= h($objeto->coste) ?></td>
                	<td><?= h($objeto->defectuosos) ?></td>
                	<td><?= h($objeto->peso) ?></td>
                	<td><?= h($objeto->observaciones) ?></td>
                	<td><?= h($objeto->envio_id) ?></td>
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

