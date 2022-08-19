<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'z0gravity: make by ht.hophuoctrung@gmail.com';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    
    <!-- ht-reset css -->
    
<!-- Script includes -->  
  <?=  $this->Html->script('jquery') ?>
  <?=  $this->Html->script('jquery_ui/jquery-ui') ?>
  <?=  $this->Html->script('foundation.js') ?>

  <!-- CakePHP includes -->
  <?= $this->Html->css('base.css') ?>
  <?= $this->Html->css('style.css') ?>
  <?= $this->Html->css('home.css') ?>

  <!-- Zurb Foundation & jQuery includes -->
  <?=  $this->Html->css('foundation') ?>
  <?=  $this->Html->css('jquery-ui') ?>
  <?=  $this->Html->css('jquery-ui.structure') ?>

   

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
     <!-- end reset css -->

</head>
<body>
<nav class="top-bar" data-topbar>
  <ul class="title-area">
    <li class="name"></li>
    <li class="toggle-topbar menu-icon">
      <a>{href: "#"}
        <span>Menú</span></a>
    </li>
  </ul>
  <section class="top-bar-section">
    <ul class="left">
      <li>
        <a class="i fi-home">{href: "/ui/home"}
          &nbsp;Inicio</a></li>
      <li>
        <a>{href: "/ui/wine_reviews"} Críticas de Vinos</a></li>
      <li>
        <a>{href: "/ui/wine_tastings"} Catas y Maridajes</a></li>
      <li>
        <a>{href: "/ui/blogs"} Noticias</a></li>
    </ul>
    <ul class="right">
      <li>
        <a>{href: "#"}
          <i class="fi-lock"></i>
          &nbsp;Club TastaVi</a></li>
    </ul>
  </section>
</nav>

<script>
  $(document).foundation();
</script>
</body>
</html>
