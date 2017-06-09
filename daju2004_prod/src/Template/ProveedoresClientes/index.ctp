<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Proveedores Clientes') ?></h3>
    <div class="w3-responsive">
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers(['modulus' => 4,'first' => 2, 'last' => 2]) ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>        
    </div>
    <table class=" w3-table w3-border w3-bordered w3-hoverable w3-centered w3-theme-d4">
        <thead class="w3-border w3-black">            
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('direccion_fiscal') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('fax') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('correo') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('pagina_web') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('NIF_CIF') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('proveedor_cliente') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('visible') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('persona_contacto') ?></th>
        </thead>
        <tbody>
            <?php foreach ($proveedoresClientes as $proveedoresCliente): ?>
            <?php $my_url= $this->Url->build(['controller' => 'proveedoresClientes', 'action' => 'view',$proveedoresCliente->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td class="w3-border"><?= $this->Number->format($proveedoresCliente->id) ?></td>
                <td class="w3-border"><?= h($proveedoresCliente->name) ?></td>
                <td class="w3-border"><?= h($proveedoresCliente->direccion_fiscal) ?></td>
                <td class="w3-border"><?= h($proveedoresCliente->telefono) ?></td>
                <td class="w3-border"><?= h($proveedoresCliente->fax) ?></td>
                <td class="w3-border"><?= h($proveedoresCliente->correo) ?></td>
                <td class="w3-border"><?= h($proveedoresCliente->pagina_web) ?></td>
                <td class="w3-border"><?= h($proveedoresCliente->NIF_CIF) ?></td>
                <td class="w3-border"><?= h($proveedoresCliente->observaciones) ?></td>
                <td class="w3-border"><?= h($proveedoresCliente->proveedor_cliente) ?></td>
                <td class="w3-border"><?= h($proveedoresCliente->visible) ?></td>
                <td class="w3-border"><?= h($proveedoresCliente->persona_contacto) ?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers(['modulus' => 4,'first' => 2, 'last' => 2]) ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
