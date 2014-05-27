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
		Monkey HTTP Daemon - A Fast and Lightweight HTTP Server for GNU/Linux -
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41252753-1', 'monkey-project.com');
  ga('send', 'pageview');

</script>

<div class="navbar navbar-inner">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="row-fluid">
        <div class="span1">
        </div>
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

<div class="container" style="text-align:center">
  <div class="row-fluid">
    <div class="span1">
    </div>
    <div class="span8" style="text-align:left">
      <?php $session->flash(); ?>
      <?php echo $content_for_layout; ?>
    </div>
    <div class="span3" style="text-align:left">
      <h4>Get started</h4>
      <ul>
        <li><a href='http://monkey-project.com/downloads'>Downloads</a></li>
	<li><a href='https://github.com/monkey/monkey'>Browse Code</a></li>
	<li><a href='https://github.com/monkey/monkey/issues'>Bug Tracker</a></li>
	<li><a href='http://lists.monkey-project.com'>Mailing Lists</a></li>
        <li><a href='http://blog.monkey-project.com'>Monkeys Blog</a></li>
        <li><a href='http://monkey-project.com/raspberry'>Raspberry Pi</a></li>
        <li><a href="https://plus.google.com/112232069145693004114" rel="publisher">Google+</a></li>
      </ul>
      <h4>Performance</h4>
      <ul>
        <li><?=$html->link('Monkey v/s GWan (x86_64)', array('controller' => 'benchmarks', 'action' => 'x86_64_monkey_gwan'));?></li>
        <li><?=$html->link('Monkey v/s BusyBox (RPI)', array('controller' => 'benchmarks', 'action' => 'raspberry_pi_monkey_busybox'));?></li>
        <li><?=$html->link('Monkey v/s NginX (RPI)', array('controller' => 'benchmarks', 'action' => 'raspberry_pi_monkey_nginx'));?></li>
      </ul>

      <h4>Our Sponsors</h4>
      <p>
        <?=$html->link('Learn more...', array('controller' => '/', 'action' => 'sponsors'));?>
      </p>
      <ul>
        <p>
        <?=$html->image('sponsors/osuosl.png');?>
        </p>
        <p>
        <?=$html->image('sponsors/rackspace.jpg');?>
        </p>
        <p>
        <?=$html->image('sponsors/google_soc_2013.jpg');?>
        </p>
      </ul>

      <h4>Support us!</h4>
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="29K2DPL6BLHDL">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
              </form>


    </div> <!-- end span3     -->
  </div>   <!-- end row       -->
          <footer>
            <hr />
            <p style="text-align:center">&copy; Copyright 2001 – 2013 / Monkey HTTP Daemon development group</p>
          </footer>
        </div>
</body>
</html>

