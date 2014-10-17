<?

function version_row($h, $date, $version)
{
   ?>
   <tr><td>
   <?

   $str = "[".$date."] Monkey HTTP Server v".$version;
   $v   = "v".$version;

   echo $h->link($str,
                 array('controller' => 'Announcements', 'action' => $v));
   ?>
   </td></tr>
   <?
}
?>

<div class="hero-unit">
<h2>Release Announcements</h2>
  <p>
	Each product release comes with an detailed announcement covering the changes made from the previous version,
	please check the above list for more details.
  </p>
</div>

<div class="row-fluid">
<div class="span5">

<h3>2014</h3>
<table class="table">
 <?=version_row($html, "2014/10/16", "1.5.4");?>
 <?=version_row($html, "2014/08/16", "1.5.3");?>
 <?=version_row($html, "2014/07/18", "1.5.2");?>
 <?=version_row($html, "2014/06/10", "1.5.1");?>
 <?=version_row($html, "2014/05/25", "1.5.0");?>
 <?=version_row($html, "2014/02/04", "1.4.0");?>
</table>

<h3>2013</h3>
<table class="table">
 <?=version_row($html, "2013/10/15", "1.3.0");?>
 <?=version_row($html, "2013/06/21", "1.2.2");?>
 <?=version_row($html, "2013/06/06", "1.2.1");?>
 <?=version_row($html, "2013/05/26", "1.2.0");?>
</table>

<h3>2012</h3>
<table class="table">
 <?=version_row($html, "2012/08/18", "1.1.1");?>
 <?=version_row($html, "2012/08/17", "1.1.0");?>
 <?=version_row($html, "2012/06/15", "1.0.1");?>
 <?=version_row($html, "2012/06/01", "1.0.0");?>
 <?=version_row($html, "2012/02/20", "0.33.0");?>
 <?=version_row($html, "2012/02/09", "0.32.0");?>
 <?=version_row($html, "2012/01/01", "0.31.0");?>
 <?=version_row($html, "2012/01/01", "0.30.0");?>
</table>

<h3>2011</h3>
<table class="table">
 <?=version_row($html, "2011/10/21", "0.21.0");?>
 <?=version_row($html, "2011/10/12", "0.20.3");?>
 <?=version_row($html, "2011/10/10", "0.20.2");?>
 <?=version_row($html, "2011/10/03", "0.20.1");?>
 <?=version_row($html, "2011/10/01", "0.20.0");?>
 <?=version_row($html, "2011/03/30", "0.13.2");?>
 <?=version_row($html, "2011/03/07", "0.13.1");?>
 <?=version_row($html, "2011/02/27", "0.13.0");?>
 <?=version_row($html, "2011/01/29", "0.12.2");?>
 <?=version_row($html, "2011/01/17", "0.12.1");?>
</table>

<h3>2010</h3>
<table class="table">
 <?=version_row($html, "2010/12/31", "0.12.0");?>
 <?=version_row($html, "2010/07/29", "0.11.1");?>
 <?=version_row($html, "2010/07/16", "0.11.0");?>
 <?=version_row($html, "2010/06/23", "0.10.3");?>
 <?=version_row($html, "2010/06/13", "0.10.2");?>
 <?=version_row($html, "2010/04/09", "0.10.1");?>
 <?=version_row($html, "2010/04/05", "0.10.0");?>
</table>
</div>
</div>
