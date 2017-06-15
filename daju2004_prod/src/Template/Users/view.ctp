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

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'usuariosEnEstadosOrden')"><?= __("Usuarios En Estados Orden") ?></button>

<div style="display:none" id="usuariosEnEstadosOrden" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Usuarios En Estados Orden') ?>
        <?php $my_url_add=$this->Url->build(['controller' => 'usuarios-en-estados-orden', 'action' => 'add',$user->id,'user_id'])?>
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
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('estados_de_orden_id','estados_de_orden_id', ['model'=>'UsuariosEnEstadosOrden']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('user_id','user_id', ['model'=>'UsuariosEnEstadosOrden']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('parte','parte', ['model'=>'UsuariosEnEstadosOrden']) ?></th>
                <th  class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'UsuariosEnEstadosOrden']) ?></th>
			</thead>
			<tbody>
<?php foreach ($usuariosEnEstadosOrden as $usuariosEnEstadosOrden): ?>
				<?php $my_url= $this->Url->build(['controller' => 'usuariosEnEstadosOrden', 'action' => 'view',$usuariosEnEstadosOrden->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                                    <td class="w3-border"><?= h($usuariosEnEstadosOrden->id) ?></td>

                                <td class="w3-border"><?= $usuariosEnEstadosOrden->has('estados_de_orden') ? $this->Html->link($usuariosEnEstadosOrden->estados_de_orden->label, ['controller' => 'EstadosDeOrdens', 'action' => 'view', $usuariosEnEstadosOrden->estados_de_orden->id]) : '' ?></td>

                                <td class="w3-border"><?= $usuariosEnEstadosOrden->has('user') ? $this->Html->link($usuariosEnEstadosOrden->user->label, ['controller' => 'Users', 'action' => 'view', $usuariosEnEstadosOrden->user->id]) : '' ?></td>
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

