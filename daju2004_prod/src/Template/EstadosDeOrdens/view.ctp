<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="estadosDeOrdens view large-9 medium-8 columns content">
    <h3><?= h($estadosDeOrden->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Orden') ?></th>
            <td><?= $estadosDeOrden->has('orden') ? $this->Html->link($estadosDeOrden->orden->label, ['controller' => 'Ordens', 'action' => 'view', $estadosDeOrden->orden->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $estadosDeOrden->has('estado') ? $this->Html->link($estadosDeOrden->estado->label, ['controller' => 'Estados', 'action' => 'view', $estadosDeOrden->estado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($estadosDeOrden->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($estadosDeOrden->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Inicio') ?></th>
            <td><?= h($estadosDeOrden->fecha_inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Fin') ?></th>
            <td><?= h($estadosDeOrden->fecha_fin) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'maquinasUsadas')"><?= __("Maquinas Usadas") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'usuariosEnEstadosOrden')"><?= __("Usuarios En Estados Orden") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'utensiliosUsados')"><?= __("Utensilios Usados") ?></button>

<div style="display:none" id="maquinasUsadas" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Maquinas Usadas') ?>
        <button onClick="location.href='/maquinas-usadas/add/<?= $estadosDeOrden->id ?>/estadosDeOrden_id'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($maquinasUsadas)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'MaquinasUsadas']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('estados_de_orden_id','estados_de_orden_id', ['model'=>'MaquinasUsadas']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('maquina_id','maquina_id', ['model'=>'MaquinasUsadas']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('operaciones','operaciones', ['model'=>'MaquinasUsadas']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('uso','uso', ['model'=>'MaquinasUsadas']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'MaquinasUsadas']) ?></th>
			</thead>
			<tbody>
<?php foreach ($maquinasUsadas as $maquinasUsada): ?>
				<?php $my_url= $this->Url->build(['controller' => 'maquinasUsadas', 'action' => 'view',$maquinasUsada->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($maquinasUsada->id) ?></td>
                	<td><?= h($maquinasUsada->estados_de_orden_id) ?></td>
                	<td><?= h($maquinasUsada->maquina_id) ?></td>
                	<td><?= h($maquinasUsada->operaciones) ?></td>
                	<td><?= h($maquinasUsada->uso) ?></td>
                	<td><?= h($maquinasUsada->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'MaquinasUsadas']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'MaquinasUsadas']) ?>
            <?= $this->Paginator->numbers(['model'=>'MaquinasUsadas']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'MaquinasUsadas']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'MaquinasUsadas']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'MaquinasUsadas']) ?></p>
    </div>
    <?php endif; ?>
</div>
<div style="display:none" id="usuariosEnEstadosOrden" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Usuarios En Estados Orden') ?>
        <button onClick="location.href='/usuarios-en-estados-orden/add/<?= $estadosDeOrden->id ?>/estadosDeOrden_id'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($usuariosEnEstadosOrden)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'UsuariosEnEstadosOrden']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('estados_de_orden_id','estados_de_orden_id', ['model'=>'UsuariosEnEstadosOrden']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id','user_id', ['model'=>'UsuariosEnEstadosOrden']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('parte','parte', ['model'=>'UsuariosEnEstadosOrden']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'UsuariosEnEstadosOrden']) ?></th>
			</thead>
			<tbody>
<?php foreach ($usuariosEnEstadosOrden as $usuariosEnEstadosOrden): ?>
				<?php $my_url= $this->Url->build(['controller' => 'usuariosEnEstadosOrden', 'action' => 'view',$usuariosEnEstadosOrden->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($usuariosEnEstadosOrden->id) ?></td>
                	<td><?= h($usuariosEnEstadosOrden->estados_de_orden_id) ?></td>
                	<td><?= h($usuariosEnEstadosOrden->user_id) ?></td>
                	<td><?= h($usuariosEnEstadosOrden->parte) ?></td>
                	<td><?= h($usuariosEnEstadosOrden->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'UsuariosEnEstadosOrden']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'UsuariosEnEstadosOrden']) ?>
            <?= $this->Paginator->numbers(['model'=>'UsuariosEnEstadosOrden']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'UsuariosEnEstadosOrden']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'UsuariosEnEstadosOrden']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'UsuariosEnEstadosOrden']) ?></p>
    </div>
    <?php endif; ?>
</div>
<div style="display:none" id="utensiliosUsados" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Utensilios Usados') ?>
        <button onClick="location.href='/utensilios-usados/add/<?= $estadosDeOrden->id ?>/estadosDeOrden_id'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($utensiliosUsados)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'UtensiliosUsados']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('estados_de_orden_id','estados_de_orden_id', ['model'=>'UtensiliosUsados']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('utensilio_id','utensilio_id', ['model'=>'UtensiliosUsados']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'UtensiliosUsados']) ?></th>
			</thead>
			<tbody>
<?php foreach ($utensiliosUsados as $utensiliosUsado): ?>
				<?php $my_url= $this->Url->build(['controller' => 'utensiliosUsados', 'action' => 'view',$utensiliosUsado->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($utensiliosUsado->id) ?></td>
                	<td><?= h($utensiliosUsado->estados_de_orden_id) ?></td>
                	<td><?= h($utensiliosUsado->utensilio_id) ?></td>
                	<td><?= h($utensiliosUsado->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'UtensiliosUsados']) ?>
            <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'UtensiliosUsados']) ?>
            <?= $this->Paginator->numbers(['model'=>'UtensiliosUsados']) ?>
            <?= $this->Paginator->next(__('next') . ' >', ['model'=>'UtensiliosUsados']) ?>
            <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'UtensiliosUsados']) ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'UtensiliosUsados']) ?></p>
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

