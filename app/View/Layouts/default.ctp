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
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $this->fetch('title'); ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('fontawesome.min');
        echo $this->Html->css('dashboard');

        echo $this->Html->script('jquery-3.3.1.min');
        echo $this->Html->script('bootstrap.min');
        echo $this->Html->script('fontawesome-all.min');
        echo $this->Html->script('dashboard');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>

        <nav class="navbar navbar-expand navbar-dark bg-primary">
            <a class="sidebar-toggle text-light mr-3">
                <span class="navbar-toggler-icon"></span>
            </a>
            <?= $this->Html->link('Administrativo', array('controller' => '/'), array('class' => 'navbar-brand')) ?>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                            <img class="rounded-circle" src="<?= '../../img' . DS . 'icon.png' ?>" width="20" height="20"> &nbsp;<span class="d-none d-sm-inline">Usuário</span>
                        </a>
                        <?php
                        ?>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Perfil</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Sair</a>
                        </div>
                    </li>
                </ul>                
            </div>
        </nav>

        <div class="d-flex">.
            <nav class="sidebar">
                <ul class="list-unstyled">

                    <li><?= $this->Html->link('Dashboard', array('controller' => '/', 'action' => 'index')) ?></li>
                    <li>
                        <a href="#submenu1" data-toggle="collapse"><i class="fas fa-list-ol"></i> Seções</a>
                        <ul id="submenu1" class="list-unstyled collapse">
                            <li><?php echo $this->Html->link(__('Listar Seções'), array('controller' => 'sections', 'action' => 'index')); ?></li>
                            <li><?php echo $this->Html->link(__('Criar Seção'), array('controller' => 'sections', 'action' => 'add')); ?></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu2" data-toggle="collapse"><i class="fas fa-sitemap"></i> Categorias</a>
                        <ul id="submenu2" class="list-unstyled collapse">
                            <li><?php echo $this->Html->link(__('Listar Categorias'), array('controller' => 'categories', 'action' => 'index')); ?></li>
                            <li><?php echo $this->Html->link(__('Criar Categoria'), array('controller' => 'categories', 'action' => 'add')); ?></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-toggle="collapse">
                            <i class="fas fa-book"></i> Post</a>
                        <ul id="submenu3" class="list-unstyled collapse">
                            <li><?= $this->Html->link('Listar Posts', array('controller' => 'Posts', 'action' => 'index')) ?></li>
                            <li><?php echo $this->Html->link(__('Criar Post'), array('controller' => 'Posts', 'action' => 'add')); ?></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu4" data-toggle="collapse"><i class="fas fa-list-ul"></i> Menu</a>
                        <ul id="submenu4" class="list-unstyled collapse">
                            <li><a href="#"><i class="fas fa-file-alt"></i> Páginas</a></li>
                            <li><a href="#"><i class="fab fa-elementor"></i> Item de Menu</a></li>
                        </ul>

                    </li>
                    <li><a href="#"> Item 1</a></li>
                    <li><a href="#"> Item 2</a></li>
                    <li><a href="#"> Item 3</a></li>
                    <li class="active"><a href="#"> Item 4</a></li>
                    <li><a href="#"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
                </ul>
            </nav>

            <div class="content p-1">

                <?php echo $this->Flash->render(); ?>

                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
        <div class="navbar navbar-expand navbar-dark bg-primary" style="color: #FFF">
            <?php echo $this->element('sql_dump'); ?>  
        </div>  

    </body>
</html>
