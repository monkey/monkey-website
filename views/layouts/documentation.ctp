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
		Monkey HTTP Daemon - Documentation
	</title>
	<?php
		echo $html->meta('icon');
		echo $html->css('documentation');

		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<div id="premenu">
			<?
				echo $html->link('Donate', array('controller' => 'home', 'action' => 'donate'));
				echo $html->link('Contact', array('controller' => 'home', 'action' => 'contact'));
			?>
			</div>
			<?=$html->image('header.png');?>
		</div>
		<div id="menu">
			<?
				echo $html->link('Home', array('controller' => '/'));
				echo $html->link('About', array('controller' => 'home', 'action' => 'about'));
				echo $html->link('Downloads', array('controller' => 'home', 'action' => 'downloads'));
				echo $html->link('Documentation', array('controller' => 'home', 'action' => 'documentation'));
				echo $html->link('Community', array('controller' => 'home', 'action' => 'community'));
				//echo $html->link('Developers', array('controller' => 'home', 'action' => 'developers'));
				echo $html->link('< Google Summer of Code 2010 >', array('controller' => 'GSoC2010', 'action' => 'Welcome'));
			?>
		</div>
		<div id="content">

			<?php $session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<div id="copyright">
				Copyright © 2001 – 2010 by Eduardo Silva P. 
			</div>
		</div>
	</div>
	<?php echo $cakeDebug; ?>
</body>
</html>
