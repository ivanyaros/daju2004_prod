<?php
/**
  * @var \App\View\AppView $this
  */
?>



<div class="materiales form large-9 medium-8 columns content">
    <?= $this->Form->create($materiale) ?>
    <fieldset>
        <legend><?= __('Edit Materiale') ?></legend>
        <?php
            echo $this->Form->control('material_id', ['options' => $material, 'empty' => true]);
            echo $this->Form->control('fecha_entega', ['empty' => true]);
            echo $this->Form->control('localizacione_id', ['options' => $localizaciones, 'empty' => true]);
            echo $this->Form->control('entradas_de_materiale_id', ['options' => $entradasDeMateriales, 'empty' => true]);
            echo $this->Form->control('bobina');
            echo $this->Form->control('bobinas');
            echo $this->Form->control('bobinas_actual');
            echo $this->Form->control('lote');
            echo $this->Form->control('numero_bobina');
            echo $this->Form->control('taras');
            echo $this->Form->control('taras_reales');
            echo $this->Form->control('taras_mediciones');
            echo $this->Form->control('metros_brutos');
            echo $this->Form->control('metros_netos');
            echo $this->Form->control('metros_actuales');
            echo $this->Form->control('metros_utiles');
            echo $this->Form->control('scrap');
            echo $this->Form->control('en_uso');
            echo $this->Form->control('terminado');
            echo $this->Form->control('peso_ud');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
