<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Users') ?></h3>
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
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('apellidos') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('direccion') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('coste_operacion') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('coste_tiempo') ?></th>
                <th class="w3-border" scope="col"><?= $this->Paginator->sort('categoria_id') ?></th>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <?php $my_url= $this->Url->build(['controller' => 'users', 'action' => 'view',$user->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td class="w3-border"><?= $this->Number->format($user->id) ?></td>
                <td class="w3-border"><?= h($user->name) ?></td>
                <td class="w3-border"><?= h($user->apellidos) ?></td>
                <td class="w3-border"><?= h($user->username) ?></td>
                <td class="w3-border"><?= h($user->password) ?></td>
                <td class="w3-border"><?= h($user->email) ?></td>
                <td class="w3-border"><?= h($user->direccion) ?></td>
                <td class="w3-border"><?= h($user->tipo) ?></td>
                <td class="w3-border"><?= $this->Number->format($user->coste_operacion) ?></td>
                <td class="w3-border"><?= $this->Number->format($user->coste_tiempo) ?></td>
                <td class="w3-border"><?= $user->has('categoria') ? $this->Html->link($user->categoria->label, ['controller' => 'Categorias', 'action' => 'view', $user->categoria->id]) : '' ?></td>
                
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
