<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3-container">
    <h3><?= h($user->label) ?>
        <?php $my_url_edit=$this->Url->build(['controller' => 'users','action' => 'edit',$user->id])  ?>
        <button onClick="location.href='<?= $my_url_edit?>'" class="w3-button  w3-circle w3-black"> <?= __("Edit")?></button>
    </h3>
    <table class="w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <tr>
            <td class="w3-border"><?= __('Name') ?></td>
            <td class="w3-border"><?= h($user->name) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Apellidos') ?></td>
            <td class="w3-border"><?= h($user->apellidos) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Username') ?></td>
            <td class="w3-border"><?= h($user->username) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Password') ?></td>
            <td class="w3-border"><?= h($user->password) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Email') ?></td>
            <td class="w3-border"><?= h($user->email) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Direccion') ?></td>
            <td class="w3-border"><?= h($user->direccion) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Tipo') ?></td>
            <td class="w3-border"><?= h($user->tipo) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Categoria') ?></td>
            <td class="w3-border"><?= $user->has('categoria') ? $this->Html->link($user->categoria->label, ['controller' => 'Categorias', 'action' => 'view', $user->categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Id') ?></td>
            <td class="w3-border"><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Coste Operacion') ?></td>
            <td class="w3-border"><?= $this->Number->format($user->coste_operacion) ?></td>
        </tr>
        <tr>
            <td class="w3-border"><?= __('Coste Tiempo') ?></td>
            <td class="w3-border"><?= $this->Number->format($user->coste_tiempo) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'usuariosEnTareas')"><?= __("Usuarios En Tareas") ?></button>

<div style="display:none" id="usuariosEnTareas" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Usuarios En Tareas') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'usuarios-en-tareas', 'action' => 'add',$user->id,'user_id'])?>
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

