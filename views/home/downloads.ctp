<?
/* release  => directory */
$versions = array('1.2.0'  => '1.2',
                  '1.1.1'  => '1.1',
                  '1.1.0'  => '1.1',
                  '1.0.1'  => '1.0',
                  '1.0.0'  => '1.0',
                  '0.33.0' => '0.33',
                  '0.32.0' => '0.32',
                  '0.31.0' => '0.31',
                  '0.30.0' => '0.30',
                  '0.21.0' => '0.21',
                  '0.20.3' => '0.20',
                  '0.20.2' => '0.20',
                  '0.20.1' => '0.20',
                  '0.20.0' => '0.20',
                  '0.13.2' => '0.13',
                  '0.13.1' => '0.13',
                  '0.13.0' => '0.13',
                  '0.12.2' => '0.12',
                  '0.12.1' => '0.12',
                  '0.12.0' => '0.12',
                  '0.11.1' => '0.11',
                  '0.11.0' => '0.11',
                  '0.10.3' => '0.10',
                  '0.10.2' => '0.10',
                  '0.10.1' => '0.10',
                  '0.10.0' => '0.10');

foreach($versions as $latest => $dir) {
    break;
}

function release_line($version, $dir)
{
        $site = "http://monkey-project.com/";
        ?>
	<tr>
            <td>
                v<?=$version?>
            </td>
            <td>
		<a href="<?=$site."releases/".$dir?>/monkey-<?=$version?>.tar.gz">monkey-<?=$version?>.tar.gz</a>
            <code><a href="<?=$site?>Announcements/v<?=$version?>">Announcement</a></code>
                  <code><a href="<?=$site?>releases/<?=$dir?>/ChangeLog-<?=$version?>.txt">ChangeLog</a></code>
                  <code><a href="<?=$site?>releases/<?=$dir?>/monkey-<?=$version?>.tar.gz.md5">MD5</a></code>

	    </td>
        </tr>
        <?
}

?>
<div class="hero-unit">
<h1>Downloads</h1>
</div>

<p>
The latest stable release version is Monkey <?=$latest?>. If you are already using Monkey, we encourage you to upgrade you version to the latest one
available.
</p>
<p>
If you are looking for fun, we would suggest you our development version which is located in the GIT repository.
</p>

<h2>Stable Release</h2>
<p>
<ul>
        <? release_line($latest, $dir); ?>
</ul>
</p>

<h2>Development Version</h2>
<p>
        Our development is version is hosted in a GIT repository, to clone the repository, please run the following command:
        <ul>
                <li>git clone git://git.monkey-project.com/monkey</li>
        </ul>
</p>

<h2>Older Releases</h2>
<div class="row">
  <div class="span6">
     <table class="table">
     <?
       foreach($versions as $version => $dir){
           if($version == $latest) {
               continue;
           }
           release_line($version, $dir);
      }
      ?>
      </table>
  </div>
</div>

<br><br>