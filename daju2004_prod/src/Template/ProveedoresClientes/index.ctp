<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Proveedores Clientes') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <thead class="w3-border w3-black">            
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion_fiscal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('correo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pagina_web') ?></th>
                <th scope="col"><?= $this->Paginator->sort('NIF_CIF') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proveedor_cliente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('visible') ?></th>
                <th scope="col"><?= $this->Paginator->sort('persona_contacto') ?></th>
        </thead>
        <tbody>
            <?php foreach ($proveedoresClientes as $proveedoresCliente): ?>
            <?php $my_url= $this->Url->build(['controller' => 'proveedoresClientes', 'action' => 'view',$proveedoresCliente->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td><?= $this->Number->format($proveedoresCliente->id) ?></td>
                <td><?= h($proveedoresCliente->name) ?></td>
                <td><?= h($proveedoresCliente->direccion_fiscal) ?></td>
                <td><?= h($proveedoresCliente->telefono) ?></td>
                <td><?= h($proveedoresCliente->fax) ?></td>
                <td><?= h($proveedoresCliente->correo) ?></td>
                <td><?= h($proveedoresCliente->pagina_web) ?></td>
                <td><?= h($proveedoresCliente->NIF_CIF) ?></td>
                <td><?= h($proveedoresCliente->observaciones) ?></td>
                <td><?= h($proveedoresCliente->proveedor_cliente) ?></td>
                <td><?= h($proveedoresCliente->visible) ?></td>
                <td><?= h($proveedoresCliente->persona_contacto) ?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
