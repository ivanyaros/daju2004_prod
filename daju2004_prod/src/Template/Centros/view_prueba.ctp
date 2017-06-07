<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="centros view large-9 medium-8 columns content">
    <h3><?= h($centro->label) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($centro->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($centro->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($centro->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($centro->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($centro->id) ?></td>
        </tr>
    </table>

</div>
<div class="w3-bar w3-black">

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'entradasDeMateriales')"><?= __("Entradas De Materiales") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'envios')"><?= __("Envios") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'localizaciones')"><?= __("Localizaciones") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'ordens')"><?= __("Ordens") ?></button>

    <button class="w3-bar-item w3-button tablink" onclick="openRelated(event,'proceso')"><?= __("Proceso") ?></button>

<div style="display:none" id="entradasDeMateriales" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Entradas De Materiales') ?></h4>
        <?php if (!empty($centro->entradas_de_materiales)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Proveedores Cliente Id') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Albaran') ?></th>
                <th scope="col"><?= __('Fecha Envio') ?></th>
                <th scope="col"><?= __('Centro Id') ?></th>
                <th scope="col"><?= __('Fecha Recepcion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($centro->entradas_de_materiales as $entradasDeMateriales): ?>
            <tr>
                <td><?= h($entradasDeMateriales->id) ?></td>
                <td><?= h($entradasDeMateriales->proveedores_cliente_id) ?></td>
                <td><?= h($entradasDeMateriales->referencia) ?></td>
                <td><?= h($entradasDeMateriales->observaciones) ?></td>
                <td><?= h($entradasDeMateriales->albaran) ?></td>
                <td><?= h($entradasDeMateriales->fecha_envio) ?></td>
                <td><?= h($entradasDeMateriales->centro_id) ?></td>
                <td><?= h($entradasDeMateriales->fecha_recepcion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EntradasDeMateriales', 'action' => 'view', $entradasDeMateriales->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EntradasDeMateriales', 'action' => 'edit', $entradasDeMateriales->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EntradasDeMateriales', 'action' => 'delete', $entradasDeMateriales->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entradasDeMateriales->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>
<div style="display:none" id="envios" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Envios') ?></h4>
        <?php if (!empty($centro->envios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Proveedores Cliente Id') ?></th>
                <th scope="col"><?= __('Fecha Pedido') ?></th>
                <th scope="col"><?= __('Fecha Envio') ?></th>
                <th scope="col"><?= __('Albaran') ?></th>
                <th scope="col"><?= __('Pedidos Empresa Id') ?></th>
                <th scope="col"><?= __('Centro Id') ?></th>
                <th scope="col"><?= __('Fecha Entrega') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Direccione Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($centro->envios as $envios): ?>
            <tr>
                <td><?= h($envios->id) ?></td>
                <td><?= h($envios->proveedores_cliente_id) ?></td>
                <td><?= h($envios->fecha_pedido) ?></td>
                <td><?= h($envios->fecha_envio) ?></td>
                <td><?= h($envios->albaran) ?></td>
                <td><?= h($envios->pedidos_empresa_id) ?></td>
                <td><?= h($envios->centro_id) ?></td>
                <td><?= h($envios->fecha_entrega) ?></td>
                <td><?= h($envios->observaciones) ?></td>
                <td><?= h($envios->direccione_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Envios', 'action' => 'view', $envios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Envios', 'action' => 'edit', $envios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Envios', 'action' => 'delete', $envios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $envios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>
<div style="display:none" id="localizaciones" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Localizaciones') ?></h4>
        <?php if (!empty($localizaciones)): ?>
            <div class="w3 container w3-theme">
            <h3><?= __('Localizaciones') ?></h3>
            <div class="w3-responsive">
                <table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
                    <thead class="w3-border w3-black">            
                            <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Localizaciones']) ?></th>
                            <th scope="col"><?= $this->Paginator->sort('name','name', ['model' =>'Localizaciones']) ?></th>
                            
                    </thead>
                    <tbody>
                        <?php foreach ($localizaciones as $localizacione): ?>
                        <?php $my_url= $this->Url->build(['controller' => 'localizaciones', 'action' => 'view',$localizacione->id]) ?>
                        <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                            <td><?= $this->Number->format($localizacione->id) ?></td>
                            <td><?= h($localizacione->name) ?></td>                            
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->first('<< ' . __('first'), ['model'=>'Localizaciones']) ?>
                    <?= $this->Paginator->prev('< ' . __('previous'), ['model'=>'Localizaciones']) ?>
                    <?= $this->Paginator->numbers(['model'=>'Localizaciones']) ?>
                    <?= $this->Paginator->next(__('next') . ' >', ['model'=>'Localizaciones']) ?>
                    <?= $this->Paginator->last(__('last') . ' >>', ['model'=>'Localizaciones']) ?>
                </ul>
                <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')], ['model'=>'Localizaciones']) ?></p>
            </div>
        </div>
    <?php endif; ?>
</div>
<div style="display:none" id="ordens" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Ordens') ?></h4>
        <?php if (!empty($centro->ordens)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Fecha Creacion') ?></th>
                <th scope="col"><?= __('Fecha Terminacion') ?></th>
                <th scope="col"><?= __('Estado Id') ?></th>
                <th scope="col"><?= __('Centro Id') ?></th>
                <th scope="col"><?= __('Proceso Id') ?></th>
                <th scope="col"><?= __('Scrap') ?></th>
                <th scope="col"><?= __('Coste Operario') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Prioridade Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($centro->ordens as $ordens): ?>
            <tr>
                <td><?= h($ordens->id) ?></td>
                <td><?= h($ordens->name) ?></td>
                <td><?= h($ordens->referencia) ?></td>
                <td><?= h($ordens->cantidad) ?></td>
                <td><?= h($ordens->fecha_creacion) ?></td>
                <td><?= h($ordens->fecha_terminacion) ?></td>
                <td><?= h($ordens->estado_id) ?></td>
                <td><?= h($ordens->centro_id) ?></td>
                <td><?= h($ordens->proceso_id) ?></td>
                <td><?= h($ordens->scrap) ?></td>
                <td><?= h($ordens->coste_operario) ?></td>
                <td><?= h($ordens->observaciones) ?></td>
                <td><?= h($ordens->prioridade_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ordens', 'action' => 'view', $ordens->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ordens', 'action' => 'edit', $ordens->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ordens', 'action' => 'delete', $ordens->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordens->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>
<div style="display:none" id="proceso" class="related w3-container w3-theme-d3 w3-border">
    <h4><?= __('Related Proceso') ?></h4>
        <?php if (!empty($proceso)): ?>
            <div class="w3 container w3-theme">
            <div class="w3-responsive">
                <table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
                    <thead class="w3-border w3-black">            
                            <th scope="col"><?= $this->Paginator->sort('id','id', ['model'=>'Proceso']) ?></th>
                            <th scope="col"><?= $this->Paginator->sort('name','name', ['model'=>'Proceso']) ?></th>
                            <th scope="col"><?= $this->Paginator->sort('referencia','referencia', ['model'=>'Proceso']) ?></th>
                            <th scope="col"><?= $this->Paginator->sort('familia_id','familia_id', ['model'=>'Proceso']) ?></th>
                            <th scope="col"><?= $this->Paginator->sort('precio','precio', ['model'=>'Proceso']) ?></th>
                            <th scope="col"><?= $this->Paginator->sort('moneda_id','moneda_id', ['model'=>'Proceso']) ?></th>
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
                            <td><?= $this->Number->format($proceso->id) ?></td>
                            <td><?= h($proceso->name) ?></td>
                            <td><?= h($proceso->referencia) ?></td>
                            <td><?= $proceso->has('familia') ? $this->Html->link($proceso->familia->label, ['controller' => 'Familias', 'action' => 'view', $proceso->familia->id]) : '' ?></td>
                            <td><?= $this->Number->format($proceso->precio) ?></td>
                            <td><?= $proceso->has('moneda') ? $this->Html->link($proceso->moneda->label, ['controller' => 'Monedas', 'action' => 'view', $proceso->moneda->id]) : '' ?></td>
                            <td><?= $proceso->has('iva') ? $this->Html->link($proceso->iva->label, ['controller' => 'Ivas', 'action' => 'view', $proceso->iva->id]) : '' ?></td>
                            <td><?= h($proceso->observaciones) ?></td>
                            <td><?= h($proceso->visible) ?></td>
                            <td><?= h($proceso->enlaces) ?></td>
                            <td><?= $proceso->has('centro') ? $this->Html->link($proceso->centro->label, ['controller' => 'Centros', 'action' => 'view', $proceso->centro->id]) : '' ?></td>
                            <td><?= $this->Number->format($proceso->coste_tiempo) ?></td>
                            <td><?= h($proceso->coste_operaciones) ?></td>
                            <td><?= h($proceso->descripcion) ?></td>
                            <td><?= h($proceso->larga) ?></td>
                            
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
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

