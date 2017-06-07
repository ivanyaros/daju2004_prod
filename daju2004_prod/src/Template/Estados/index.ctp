<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="w3 container w3-theme">
    <h3><?= __('Estados') ?></h3>
    <div class="w3-responsive">
    <table class=" w3-table w3-border w3-bordered w3-hoverable w3-theme-d4">
        <thead class="w3-border w3-black">            
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
        </thead>
        <tbody>
            <?php foreach ($estados as $estado): ?>
            <?php $my_url= $this->Url->build(['controller' => 'estados', 'action' => 'view',$estado->id]) ?>
            <tr onClick="location.href='<?= $my_url ?>'" class="w3-hover-black ">
                <td><?= $this->Number->format($estado->id) ?></td>
                <td><?= h($estado->name) ?></td>
                <td><?= h($estado->descripcion) ?></td>
                
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
