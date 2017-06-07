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
    <div class="w3-theme w3-sidebar w3-bar-block w3-collapse w3-card-2 w3-animate-left" style="width:200px;" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
        <a href="/centros" class="w3-theme w3-bar-item w3-button">Centros</a>
        <a href="/ivas" class="w3-bar-item w3-button">iva</a>
        <a href="/objetos" class="w3-bar-item w3-button">Objetos</a>
        <a href="/materiales" class="w3-bar-item w3-button">Materiales</a>
        <a href="/material" class="w3-bar-item w3-button">Material</a>
        <a href="/proveedores-clientes" class="w3-bar-item w3-button">Proveedores/clientes</a>
        <a href="/ordens" class="w3-bar-item w3-button">Órdenes de producción</a>
        <a href="/proceso" class="w3-bar-item w3-button">Procesos</a>
        <a href="/users" class="w3-bar-item w3-button">Usuarios</a>
        
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
