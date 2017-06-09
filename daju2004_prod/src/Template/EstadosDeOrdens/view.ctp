<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($estadosDeOrden->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'estadosDeOrdens','action' => 'edit',$estadosDeOrden->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Orden') ?></td>
            <td class="w3-border"><?= $estadosDeOrden->has('orden') ? $this->Html->link($estadosDeOrden->orden->label, ['controller' => 'Ordens', 'action' => 'view', $estadosDeOrden->orden->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Estado') ?></td>
            <td class="w3-border"><?= $estadosDeOrden->has('estado') ? $this->Html->link($estadosDeOrden->estado->label, ['controller' => 'Estados', 'action' => 'view', $estadosDeOrden->estado->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Descripcion') ?></td>
            <td class="w3-border"><?= h($estadosDeOrden->descripcion) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($estadosDeOrden->id) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Fecha Inicio') ?></td>
            <td class="w3-border"><?= h($estadosDeOrden->fecha_inicio) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Fecha Fin') ?></td>
            <td class="w3-border"><?= h($estadosDeOrden->fecha_fin) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'maquinasUsadas')"><?= __("Maquinas Usadas") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'usuariosEnEstadosOrden')"><?= __("Usuarios En Estados Orden") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'utensiliosUsados')"><?= __("Utensilios Usados") ?></button>

<div style="display:none" id="maquinasUsadas" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Maquinas Usadas') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'maquinas-usadas', 'action' => 'add',$estadosDeOrden->id,'estados_de_orden_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($maquinasUsadas)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'MaquinasUsadas']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'MaquinasUsadas']) ?>
                <?= $this->Paginator->numbers(['model'=>'MaquinasUsadas','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'MaquinasUsadas']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'MaquinasUsadas']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'MaquinasUsadas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('maquina_id','maquina_id', ['model'=>'MaquinasUsadas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('operaciones','operaciones', ['model'=>'MaquinasUsadas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('uso','uso', ['model'=>'MaquinasUsadas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'MaquinasUsadas']) ?></th>
			</thead>
			<tbody>
<?php foreach ($maquinasUsadas as $maquinasUsada): ?>
				<?php $my_url= $this->Url->build(['controller' => 'maquinasUsadas', 'action' => 'view',$maquinasUsada->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td class="w3-border"><?= h($maquinasUsada->id) ?></td>
                	<td class="w3-border"><?= h($maquinasUsada->maquina_id) ?></td>
                	<td class="w3-border"><?= h($maquinasUsada->operaciones) ?></td>
                	<td class="w3-border"><?= h($maquinasUsada->uso) ?></td>
                	<td class="w3-border"><?= h($maquinasUsada->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'MaquinasUsadas']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'MaquinasUsadas']) ?>
                <?= $this->Paginator->numbers(['model'=>'MaquinasUsadas','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'MaquinasUsadas']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'MaquinasUsadas']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'MaquinasUsadas']) ?></p>
        </div>
    
    <?php endif; ?>
</div>
<div style="display:none" id="usuariosEnEstadosOrden" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Usuarios En Estados Orden') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'usuarios-en-estados-orden', 'action' => 'add',$estadosDeOrden->id,'estados_de_orden_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($usuariosEnEstadosOrden)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'UsuariosEnEstadosOrden']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'UsuariosEnEstadosOrden']) ?>
                <?= $this->Paginator->numbers(['model'=>'UsuariosEnEstadosOrden','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'UsuariosEnEstadosOrden']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'UsuariosEnEstadosOrden']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'UsuariosEnEstadosOrden']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('user_id','user_id', ['model'=>'UsuariosEnEstadosOrden']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('parte','parte', ['model'=>'UsuariosEnEstadosOrden']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'UsuariosEnEstadosOrden']) ?></th>
			</thead>
			<tbody>
<?php foreach ($usuariosEnEstadosOrden as $usuariosEnEstadosOrden): ?>
				<?php $my_url= $this->Url->build(['controller' => 'usuariosEnEstadosOrden', 'action' => 'view',$usuariosEnEstadosOrden->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td class="w3-border"><?= h($usuariosEnEstadosOrden->id) ?></td>
                	<td class="w3-border"><?= h($usuariosEnEstadosOrden->user_id) ?></td>
                	<td class="w3-border"><?= h($usuariosEnEstadosOrden->parte) ?></td>
                	<td class="w3-border"><?= h($usuariosEnEstadosOrden->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'UsuariosEnEstadosOrden']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'UsuariosEnEstadosOrden']) ?>
                <?= $this->Paginator->numbers(['model'=>'UsuariosEnEstadosOrden','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'UsuariosEnEstadosOrden']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'UsuariosEnEstadosOrden']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'UsuariosEnEstadosOrden']) ?></p>
        </div>
    
    <?php endif; ?>
</div>
<div style="display:none" id="utensiliosUsados" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Utensilios Usados') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'utensilios-usados', 'action' => 'add',$estadosDeOrden->id,'estados_de_orden_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($utensiliosUsados)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'UtensiliosUsados']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'UtensiliosUsados']) ?>
                <?= $this->Paginator->numbers(['model'=>'UtensiliosUsados','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'UtensiliosUsados']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'UtensiliosUsados']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'UtensiliosUsados']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('utensilio_id','utensilio_id', ['model'=>'UtensiliosUsados']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'UtensiliosUsados']) ?></th>
			</thead>
			<tbody>
<?php foreach ($utensiliosUsados as $utensiliosUsado): ?>
				<?php $my_url= $this->Url->build(['controller' => 'utensiliosUsados', 'action' => 'view',$utensiliosUsado->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td class="w3-border"><?= h($utensiliosUsado->id) ?></td>
                	<td class="w3-border"><?= h($utensiliosUsado->utensilio_id) ?></td>
                	<td class="w3-border"><?= h($utensiliosUsado->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'UtensiliosUsados']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'UtensiliosUsados']) ?>
                <?= $this->Paginator->numbers(['model'=>'UtensiliosUsados','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'UtensiliosUsados']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'UtensiliosUsados']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'UtensiliosUsados']) ?></p>
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

