<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($tarea->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'tareas','action' => 'edit',$tarea->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Subproceso') ?></td>
            <td class="w3-border"><?= $tarea->has('subproceso') ? $this->Html->link($tarea->subproceso->label, ['controller' => 'Subproceso', 'action' => 'view', $tarea->subproceso->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Orden') ?></td>
            <td class="w3-border"><?= $tarea->has('orden') ? $this->Html->link($tarea->orden->label, ['controller' => 'Ordens', 'action' => 'view', $tarea->orden->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Descripcion') ?></td>
            <td class="w3-border"><?= h($tarea->descripcion) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($tarea->id) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Segundos Duracion') ?></td>
            <td class="w3-border"><?= $this->Number->format($tarea->segundos_duracion) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Fecha Inicio') ?></td>
            <td class="w3-border"><?= h($tarea->fecha_inicio) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'maquinasUsadas')"><?= __("Maquinas Usadas") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'usuariosEnTareas')"><?= __("Usuarios En Tareas") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'utensiliosUsados')"><?= __("Utensilios Usados") ?></button>

<div style="display:none" id="maquinasUsadas" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Maquinas Usadas') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'maquinas-usadas', 'action' => 'add',$tarea->id,'tarea_id'])?>
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
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('tarea_id','tarea_id', ['model'=>'MaquinasUsadas']) ?></th>
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

                                <td class="w3-border"><?= $maquinasUsada->has('tarea') ? $this->Html->link($maquinasUsada->tarea->label, ['controller' => 'Tareas', 'action' => 'view', $maquinasUsada->tarea->id]) : '' ?></td>

                                <td class="w3-border"><?= $maquinasUsada->has('maquina') ? $this->Html->link($maquinasUsada->maquina->label, ['controller' => 'Maquinas', 'action' => 'view', $maquinasUsada->maquina->id]) : '' ?></td>
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
<div style="display:none" id="usuariosEnTareas" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Usuarios En Tareas') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'usuarios-en-tareas', 'action' => 'add',$tarea->id,'tarea_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($usuariosEnTareas)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'UsuariosEnTareas']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'UsuariosEnTareas']) ?>
                <?= $this->Paginator->numbers(['model'=>'UsuariosEnTareas','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'UsuariosEnTareas']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'UsuariosEnTareas']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'UsuariosEnTareas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('tarea_id','tarea_id', ['model'=>'UsuariosEnTareas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('user_id','user_id', ['model'=>'UsuariosEnTareas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('parte','parte', ['model'=>'UsuariosEnTareas']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'UsuariosEnTareas']) ?></th>
			</thead>
			<tbody>
<?php foreach ($usuariosEnTareas as $usuariosEnTarea): ?>
				<?php $my_url= $this->Url->build(['controller' => 'usuariosEnTareas', 'action' => 'view',$usuariosEnTarea->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($usuariosEnTarea->id) ?></td>

                                <td class="w3-border"><?= $usuariosEnTarea->has('tarea') ? $this->Html->link($usuariosEnTarea->tarea->label, ['controller' => 'Tareas', 'action' => 'view', $usuariosEnTarea->tarea->id]) : '' ?></td>

                                <td class="w3-border"><?= $usuariosEnTarea->has('user') ? $this->Html->link($usuariosEnTarea->user->label, ['controller' => 'Users', 'action' => 'view', $usuariosEnTarea->user->id]) : '' ?></td>
                        <td class="w3-border"><?= h($usuariosEnTarea->parte) ?></td>
                        <td class="w3-border"><?= h($usuariosEnTarea->observaciones) ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'UsuariosEnTareas']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'UsuariosEnTareas']) ?>
                <?= $this->Paginator->numbers(['model'=>'UsuariosEnTareas','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'UsuariosEnTareas']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'UsuariosEnTareas']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'UsuariosEnTareas']) ?></p>
        </div>
    
    <?php endif; ?>
</div>
<div style="display:none" id="utensiliosUsados" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Utensilios Usados') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'utensilios-usados', 'action' => 'add',$tarea->id,'tarea_id'])?>
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
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('tarea_id','tarea_id', ['model'=>'UtensiliosUsados']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('utensilio_id','utensilio_id', ['model'=>'UtensiliosUsados']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'UtensiliosUsados']) ?></th>
			</thead>
			<tbody>
<?php foreach ($utensiliosUsados as $utensiliosUsado): ?>
				<?php $my_url= $this->Url->build(['controller' => 'utensiliosUsados', 'action' => 'view',$utensiliosUsado->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($utensiliosUsado->id) ?></td>

                                <td class="w3-border"><?= $utensiliosUsado->has('tarea') ? $this->Html->link($utensiliosUsado->tarea->label, ['controller' => 'Tareas', 'action' => 'view', $utensiliosUsado->tarea->id]) : '' ?></td>

                                <td class="w3-border"><?= $utensiliosUsado->has('utensilio') ? $this->Html->link($utensiliosUsado->utensilio->label, ['controller' => 'Utensilios', 'action' => 'view', $utensiliosUsado->utensilio->id]) : '' ?></td>
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

