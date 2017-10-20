<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="materiales form large-9 medium-8 columns content">
    <?= $this->Form->create($materiale) ?>
    <div id="myButtons" style="display:block">
            <input class="w3-radio" type="radio" onchange="elLote()" name="elTipo" value="Lote" >
            <label>Lote</label>
            <input class="w3-radio" type="radio" onchange="lasBobinas()" name="elTipo" value="Bobinas" >
            <label>Bobinas</label>
            <input class="w3-radio" type="radio" onchange="laBobina()" name="elTipo" value="Bobinas" >
            <label>Bobina</label>
    </div>
    <div id="bloqueLote" style="display:none">    
    <fieldset>
        <legend><?= __('Add Materiale') ?></legend>        
        <?php
            echo $this->Form->control('material_id', ['options' => $material, 'empty' => true]);
            echo $this->Form->control('fecha_entrega', ['empty' => true]);
            echo $this->Form->control('localizacione_id', ['options' => $localizaciones, 'empty' => true]);
            echo $this->Form->control('entradas_de_materiale_id', ['options' => $entradasDeMateriales, 'empty' => true]);
            echo $this->Form->control('bobina');
            echo $this->Form->control('bobinas');

            echo $this->Form->control('lote');

            echo $this->Form->control('metros_brutos');
            echo $this->Form->control('metros_netos');


            echo $this->Form->control('peso_ud');
        ?>
    
    </fieldset>
    </div>

    <div id="bloqueBobinas" style="display:none">    
    <fieldset>
        <legend><?= __('Add Materiale') ?></legend>        
        <?php
            echo $this->Form->control('material_id', ['options' => $material, 'empty' => true]);
            //echo $this->Form->control('fecha_entrega', ['empty' => true]);
            echo $this->Form->control('localizacione_id', ['options' => $localizaciones, 'empty' => true]);
            echo $this->Form->control('entradas_de_materiale_id', ['options' => $entradasDeMateriales, 'empty' => true]);
            echo $this->Form->control('bobina');
            echo $this->Form->control('lote');
            echo $this->Form->control('numero_bobina',['label' =>'numero de bobinas']);
           /* echo $this->Form->control('taras');
            echo $this->Form->control('taras_reales');
            echo $this->Form->control('taras_mediciones');
            echo $this->Form->control('metros_brutos');
            echo $this->Form->control('metros_netos');
            echo $this->Form->control('metros_actuales');
            echo $this->Form->control('metros_utiles');
            echo $this->Form->control('peso_ud');*/
        ?>
    
    </fieldset>
    </div>

    <div id="bloqueBobina" style="display:none">    
    <fieldset>
        <legend><?= __('Add Materiale') ?></legend>        
        <?php
            echo $this->Form->control('material_id', ['options' => $material, 'empty' => true]);
            //echo $this->Form->control('fecha_entrega', ['empty' => true]);
            echo $this->Form->control('localizacione_id', ['options' => $localizaciones, 'empty' => true]);
            echo $this->Form->control('entradas_de_materiale_id', ['options' => $entradasDeMateriales, 'empty' => true]);
            echo $this->Form->control('bobina');
            echo $this->Form->control('lote');
            echo $this->Form->control('numero_bobina',['label' =>'numero de bobinas']);
            //echo $this->Form->control('taras');
            //echo $this->Form->control('taras_reales');
            //echo $this->Form->control('taras_mediciones');
            echo $this->Form->control('metros_brutos');
            echo $this->Form->control('metros_netos');
            //echo $this->Form->control('metros_actuales');
            //echo $this->Form->control('metros_utiles');
            echo $this->Form->control('peso_ud');
        ?>
    
    </fieldset>
    </div>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

</div>
<script>
function elLote() {
    
    document.getElementById('bloqueLote').style.display = "block";  
    document.getElementById('myButtons').style.display = "none";  
}
function lasBobinas() {
    
    document.getElementById('bloqueBobinas').style.display = "block";  
    document.getElementById('myButtons').style.display = "none";  
}
function laBobina() {
    
    document.getElementById('bloqueBobina').style.display = "block";  
    document.getElementById('myButtons').style.display = "none";  
}

</script>
