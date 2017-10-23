<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';

?>
<!DOCTYPE html>
<html>
<head >
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    
    <title>
        <?= $this->fetch('title') ?>
                
    </title>
    <?= $this->Html->meta('icon') ?>

    
    <?= $this->Html->css('w3.css')?>
    <?= $this->Html->css('w3-theme-green.css')?>
    
    

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="w3-theme">
    <div class="w3-theme w3-sidebar w3-bar-block w3-collapse w3-card-2 " style="width:200px;" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
        <a href="/users/logout" class="w3-theme w3-bar-item w3-button">Desconectar</a>
        <a href="/categorias" class="w3-theme w3-bar-item w3-button">Categorias</a>
        <a href="/centros" class="w3-theme w3-bar-item w3-button">Centros</a>
        <a href="/direcciones" class="w3-bar-item w3-button">Direcciones</a>
        <a href="/entradas-de-materiales" class="w3-bar-item w3-button">Entradas de materiales</a>
        <a href="/envios" class="w3-bar-item w3-button">Envios</a>
        <a href="/estados" class="w3-bar-item w3-button">Estados</a>
        <a href="/familias" class="w3-bar-item w3-button">Familias</a>
        <a href="/ivas" class="w3-bar-item w3-button">Ivas</a>
        <a href="/localizaciones" class="w3-bar-item w3-button">Localizaciones</a>
        <a href="/maquinas" class="w3-bar-item w3-button">Maquinas</a>
        <a href="/maquinas-usadas" class="w3-bar-item w3-button">Maquinas usadas</a>
        <a href="/material" class="w3-bar-item w3-button">Materia prima</a>
        <a href="/materiales" class="w3-bar-item w3-button">Materiales</a>
        <a href="/materiales-entrada" class="w3-bar-item w3-button">Materiales entrada</a>
        <a href="/monedas" class="w3-bar-item w3-button">Monedas</a>
        <a href="/objetos" class="w3-bar-item w3-button">Objetos</a>
        <a href="/objetos-entrada" class="w3-bar-item w3-button">Objetos entrada</a>
        <a href="/ordens" class="w3-bar-item w3-button">Ordenes</a>
        <a href="/paradas" class="w3-bar-item w3-button">Paradas</a>
        <a href="/paradas-tipo" class="w3-bar-item w3-button">Tipo de paradas</a>
        <a href="/pedidos-empresas" class="w3-bar-item w3-button">Pedidos Empresa</a>
        <a href="/pedidos-productos-detalle" class="w3-bar-item w3-button">Pedidos Productos Detalle</a>
        <a href="/prioridades" class="w3-bar-item w3-button">Prioridades</a>
        <a href="/proceso" class="w3-bar-item w3-button">Procesos</a>
        <a href="/proceso-material-entrada" class="w3-bar-item w3-button">Proceso material entrada</a>
        <a href="/proceso-produto-entrada" class="w3-bar-item w3-button">Proceso Producto Entrada</a>
        <a href="/proceso-produto-salida" class="w3-bar-item w3-button">Proceso Producto Salida</a>
        <a href="/producto" class="w3-bar-item w3-button">Producto</a>
        <a href="/proveedores-clientes" class="w3-bar-item w3-button">Proveedores clientes</a>
        <a href="/proveedores-material" class="w3-bar-item w3-button">Proveedores material</a>
        <a href="/subproceso" class="w3-bar-item w3-button">Subprocesos</a>
        <a href="/tareas" class="w3-bar-item w3-button">Tareas</a>
        <a href="/users" class="w3-bar-item w3-button">Usuarios</a>
        <a href="/usuarios-en-tareas" class="w3-bar-item w3-button">Usuarios en tareas</a>
        <a href="/utensilios" class="w3-bar-item w3-button">Utensilios</a>
        <a href="/utensilios-usados" class="w3-bar-item w3-button">Utensilios Usados</a>


        
    </div>
    <div class="w3-main" style="margin-left:200px" style=" margin-down:200px">
        <div class="w3-teal">
            <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
            <div class="w3-container">
            <h1>
                <?= $this->fetch('title');
                   
                    
                 ?>
                <?php if(isset($modelo)): ?>
                    <button onClick="location.href='<?= $modelo ?>/add'" class="w3-button w3-xlarge w3-circle w3-black">+</button>
                <?php endif ?>
            </h1>

            </div>
        </div>
    
    <div class="w3-container">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
        
    
    <footer>
    </footer>
<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
</body>
</html>
