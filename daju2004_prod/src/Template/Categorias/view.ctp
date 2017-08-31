<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($categoria->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'categorias','action' => 'edit',$categoria->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Nombre') ?></td>
            <td class="w3-border"><?= h($categoria->nombre) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($categoria->id) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'ordens')"><?= __("Ordens") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'users')"><?= __("Users") ?></button>

<div style="display:none" id="ordens" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Ordens') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'ordens', 'action' => 'add',$categoria->id,'categoria_id'])?>
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
<div style="display:none" id="users" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Users') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'users', 'action' => 'add',$categoria->id,'categoria_id'])?>
        <button onClick="location.href='<?= $my_url_add?>'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
    </h4>
        <?php if (!empty($users)): ?>
	
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Users']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Users']) ?>
                <?= $this->Paginator->numbers(['model'=>'Users','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Users']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Users']) ?>
            </ul>        
        </div>
    <div class="w3-responsive">
		<table class=" w3-table w3-centered w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Users']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('name','name', ['model'=>'Users']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('apellidos','apellidos', ['model'=>'Users']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('username','username', ['model'=>'Users']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('password','password', ['model'=>'Users']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('email','email', ['model'=>'Users']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('direccion','direccion', ['model'=>'Users']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('tipo','tipo', ['model'=>'Users']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('coste_operacion','coste_operacion', ['model'=>'Users']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('coste_tiempo','coste_tiempo', ['model'=>'Users']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('categoria_id','categoria_id', ['model'=>'Users']) ?></th>
			</thead>
			<tbody>
<?php foreach ($users as $user): ?>
				<?php $my_url= $this->Url->build(['controller' => 'users', 'action' => 'view',$user->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($user->id) ?></td>
                        <td class="w3-border"><?= h($user->name) ?></td>
                        <td class="w3-border"><?= h($user->apellidos) ?></td>
                        <td class="w3-border"><?= h($user->username) ?></td>
                        <td class="w3-border"><?= h($user->password) ?></td>
                        <td class="w3-border"><?= h($user->email) ?></td>
                        <td class="w3-border"><?= h($user->direccion) ?></td>
                        <td class="w3-border"><?= h($user->tipo) ?></td>
                        <td class="w3-border"><?= h($user->coste_operacion) ?></td>
                        <td class="w3-border"><?= h($user->coste_tiempo) ?></td>

                                <td class="w3-border"><?= $user->has('categoria') ? $this->Html->link($user->categoria->label, ['controller' => 'Categorias', 'action' => 'view', $user->categoria->id]) : '' ?></td>
            	</tr>
            <?php endforeach; ?>
        </table>
    </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Users']) ?>
                <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Users']) ?>
                <?= $this->Paginator->numbers(['model'=>'Users','modulus' => 4,'first' => 2, 'last' => 2]) ?>
                <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Users']) ?>
                <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Users']) ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'),'model'=>'Users']) ?></p>
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

