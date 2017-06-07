<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellidos') ?></th>
            <td><?= h($user->apellidos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($user->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($user->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste Operacion') ?></th>
            <td><?= $this->Number->format($user->coste_operacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coste Tiempo') ?></th>
            <td><?= $this->Number->format($user->coste_tiempo) ?></td>
        </tr>
    </table>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'usuariosEnEstadosOrden')"><?= __("Usuarios En Estados Orden") ?></button>

<div style="display:none" id="usuariosEnEstadosOrden" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Usuarios En Estados Orden') ?></h4>
        <?php if (!empty($usuariosEnEstadosOrden)): ?>
	<div class="w3-responsive">
		<table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        	<thead class="w3-border w3-black">  
                <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'UsuariosEnEstadosOrden']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('estados_de_orden_id','estados_de_orden_id', ['model'=>'UsuariosEnEstadosOrden']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('parte','parte', ['model'=>'UsuariosEnEstadosOrden']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones','observaciones', ['model'=>'UsuariosEnEstadosOrden']) ?></th>
			</thead>
			<tbody>
<?php foreach ($usuariosEnEstadosOrden as $usuariosEnEstadosOrden): ?>
				<?php $my_url= $this->Url->build(['controller' => 'usuariosEnEstadosOrden', 'action' => 'view',$usuariosEnEstadosOrden->id]) ?>
            	<tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                	<td><?= h($usuariosEnEstadosOrden->id) ?></td>
                	<td><?= h($usuariosEnEstadosOrden->estados_de_orden_id) ?></td>
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

