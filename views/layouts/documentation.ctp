<?php
/* SVN FILE: $Id: default.ctp 7945 2008-12-19 02:16:01Z gwoo $ */
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @version       $Revision: 7945 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2008-12-18 18:16:01 -0800 (Thu, 18 Dec 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
                Monkey HTTP Daemon - Documentation:
                <?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $html->meta('icon');
		echo $html->css('bootstrap');
                echo $html->css('bootstrap-responsive');

		echo $scripts_for_layout;
	?>
</head>
<body>
    <div class="navbar navbar-inner">
      <div class="navbar-inner">
        <div class="container">
         <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <div class="row-fluid">
              <div class="span1" style="padding-top: 0.3em;">
                  <? echo $html->image('monkey_head.png'); ?>
              </div>
              <div class="span8">
                  <? echo $html->link('Monkey',
                                      array('controller' => '/'),
                                      array('class' => 'brand', 'style' => 'color: #eae8d2;'));
                  ?>

                  <div class="nav-collapse collapse">
                  <ul class="nav">
                  <li class="">
                  <? echo $html->link('About', array('controller' => 'home', 'action' => 'about')); ?>
                  </li>
                  <li class="">
                  <? echo $html->link('Documentation', array('controller' => 'documentation/')); ?>
                  </li>

                  <li class="">
                  <? echo $html->link('Community', array('controller' => 'home',
                                                         'action' => 'community'));
                  ?>
                  </li>
                  <li class="">
                  <? echo $html->link('Announcements', array('controller' => 'Announcements',
                                                             'action' => 'Welcome'));
                  ?>
                  </li>
                  <li class="">
                  <? echo $html->link('Embedded', array('controller' => 'home',
                                                        'action' => 'embedded'));
                  ?>
                  </li>
                  <li class="divider-vertical"></li>

                  <li class="active">
                  <? echo $html->link('Donate - support us!', array('controller' => 'Donate')); ?>
                  </li>
                  </ul>
             </div> <!-- end span8 -->
          </div> <!-- end row fluid -->

        </div>
      </div>
    </div>
   </div>

   <div class="container-fluid">
    <div class="row-fluid">
      <div class="span2">
           <!-- Left menu -->
           <ul class="nav nav-list">
               <li class="nav-header">
                  ADMINISTRATION
               </li>
               <li>
                  <?=$html->link('Installation', array('action' => 'installation'));?>
               </li>
               <li class="nav-header">
                  Tutorials & FAQ
               </li>
               <li>
                  <?=$html->link('Basic Authentication', array('action' => 'basic_authentication'));?>
               </li>
               <li>
                  <?=$html->link('Cheetah! Shell', array('action' => 'cheetah_shell'));?>
               </li>
               <li>
                  <?=$html->link('Debian & Ubuntu Packages', array('action' => 'debian_ubuntu'));?>
               </li>
               <li>
                  <?=$html->link('IPv6', array('action' => 'ipv6'));?>
               </li>
               <li>
                  <?=$html->link('Mandril Security Plugin', array('action' => 'mandril'));?>
               </li>
               <li>
                  <?=$html->link('Virtual Hosts', array('action' => 'virtual_hosts'));?>
               </li>
             </ul>
      </div>
      <div class="span7">
          <?php $session->flash(); ?>
          <?php echo $content_for_layout; ?>
      </div>
    </div>
    <hr>
    <footer>
        <p>&copy; Copyright 2001 – 2012 / Monkey HTTP Daemon development group</p>
      </footer>
   </div> <!-- container -->

</body>
</html>
