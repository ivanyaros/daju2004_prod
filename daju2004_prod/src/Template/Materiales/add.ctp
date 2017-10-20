<?php
/**
  * @var \App\View\AppView $this
  */
?>

<script>
$(document).ready(function(){
    $("#selBobinas").hide();
    $("#jq_form").hide();
    //$("#lasBobinas").hide();
    $("#btnBobinas").click(function(){
        $("#sel").hide();
        $("#selBobinas").show();
        $("#modo_entrada").val("bobinas");
    });
    $("#btnNumBobinas").click(function(){
        $("#jq_form").show();

        $("#selBobinas").hide();
        var num=$("#txtBobinas").val();
        $("#txt_num_bobinas").val(""+num);

        for(var i=1;i<=num;i++){
            $("#lasBobinas").append("<tr><td><input type='number' value='numero' name='bobina["+i+"][number]' > </td> <td><input type='number' step='any' value='metros' name='bobina["+i+"][metros]'></td></tr>");
            if(i+1==num){
                $("#lasBobinas").append("</tbody>");
            }
           // $("#lasBobinas").append("<p> La bobina "+i+"<input type='number' value='numero' name='bobina["+i+"][number]' ><input type='text' value='metros' name='bobina["+i+"][metros]'></p>");


        }
        

    });

});
</script>

<div id="sel" class="w3-container w3-responsive">
    <p> Seleccione el tipo de material, por bobinas o por lote </p>
    <div class="w3-bar">
        <button id="btnLote" class="w3-button w3-black">Lote</button>
        <button id="btnBobinas" class="w3-button w3-teal">Bobinas</button>
    </div>
</div>
<div id="selBobinas" class="w3-container" type="hidden">
    <p> Seleccione numero de bobinas a introducir(de un mismo lote) </p>
    <p>Número de bobinas: <input type="number" id="txtBobinas" value="5"></p>
    <button id="btnNumBobinas"> Mostrar</button>
</div>
<div id="jq_form" class="w3-container">
    <form method="post" id="formBobinas" action="/materiales/add">
        <div style="display:none;">
            <input name="_method" value="POST" type="hidden">
            <input id="modo_entrada" name="modo" value="" type="hidden">
            <input id="txt_num_bobinas" name="numBobinas" value="" type="hidden">
        </div>
            <?php 
                echo $this->Form->control('material_id', ['options' => $material, 'empty' => true]);
                echo $this->Form->control('localizacione_id', ['options' => $localizaciones, 'empty' => true]);
                echo $this->Form->control('lote');
                echo $this->Form->control('entradas_de_materiale_id', ['type' => 'hidden','default' => $materiale->entradas_de_materiale_id, 'options' => $entradasDeMateriales, 'empty' => true]);
            ?>
        <div>
            <table id="lasBobinas" class="w3-table w3-border w3-bordered w3-hoverable w3-centered w3-theme-d4 w3-third">
                <thead>
                    <th> Numero de bobina </th>
                    <th> Metros netos </th>
                </thead>
                <tbody>
            </table>
        </div>
        <button type="submit" >Submit</button>

        
    </form>
</div>
  