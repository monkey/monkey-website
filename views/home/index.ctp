<div id="homeblock">
	<div id="infobox">
	<h1>Monkey HTTP Daemon</h1>
	<p>
		Monkey is a very small, fast and scalable web server for Linux. <br>Please read the
		<?=$html->link('about page', array('action' => 'about'));?> for more details.
	</p>
	</div>
	<div id="homemenu">
		<h2>SHORTCUTS</h2>
		<ul>
        		<li><a href='http://monkey-project.com/releases'>All Downloads</a></li>
			<li><a href='http://git.monkey-project.com'>Browse Code</a></li>
			<li><a href='http://bugs.monkey-project.com'>Bug Tracker</a></li>
			<li><a href='http://lists.monkey-project.com'>Mailing Lists</a></li>
                        <li><a href='http://blog.monkey-project.com'>Monkeys Blog</a></li>
		</ul>
		<br>
	</div>
</div>

   <h2>Latest Release: Monkey 0.33 [2012/02/20]</h2>
	<p>
   Monkey project team, is proud to announce the availability of our major release <i>Monkey HTTP Daemon 0.32</i>.
	</p>
	<p>
	Please read the <?=$html->link('official announcement', array('controller' => 'Announcements', 'action' => 'v0.33.0'));?>
	or go directly to the <?=$html->link('downloads section', array('controller' => 'downloads'));?>
	</p>


<h2>Google Summer of Code 2012</h2>
        <div style="align: left;">
	<a href="http://monkey-project.com/gsoc2012">
	<?
   echo $html->image('gsoc2012_very_small.png', array("align" => "left",
                                                      "style" => "margin-right: 10px;"));
	?>
	</a>
        </div>
        <p>
        Monkey HTTP Daemon project is an <a href="http://www.google-melange.com/gsoc/org/google/gsoc2012/monkey">Official Mentoring Organization</a>  of
	<a href='http://www.google-melange.com/gsoc/homepage/google/gsoc2012'>Google Summer of Code 2012</a>, we invite you to check our <?=$html->link('GSoC section', array('controller' => 'gsoc2012'));?>.
       </p><br><br><br>

<div id="homeinfo">
       <div class="feedblock">
                <a href='http://blog.monkey-project.com'><h2>Blog / News</h2></a>
                <?
		        $count = 0;
			foreach($blog_feeds as $feed){
				echo '<li><div class=\'feed_date\'>'.$feed->get_date().'</div>'.$html->link($feed->get_title(), $feed->get_link()).'</li>';
				$count++;
				if($count >= 5){
					break;
				}
			}
                ?>
       </div>
	<div class="feedblock">
                <a href="http://git.monkey-project.com/?p=monkey;a=shortlog;h=refs/heads/master"><h2>Development Branch</h2></a>
		<?
			$count = 0;
			foreach($git_feeds as $feed){
				echo '<li><div class=\'feed_date\'>'.$feed->get_date().'</div>'.$html->link($feed->get_title(), $feed->get_link()).'</li>';
				$count++;
				if($count >= 5){
					break;
				}
			}
		?>
	</div>
	<div class="feedblock">
                <a href="http://lists.monkey-project.com"><h2>Mailing List</h2></a>
		<?
			$count = 0;
			foreach($ml_feeds as $feed){
				echo '<li><div class=\'feed_date\'>'.$feed->get_date().'</div>'.$html->link($feed->get_title(), $feed->get_link()).'</li>';
				$count++;
				if($count >= 5){
					break;
				}
			}
		?>
	</div>
</div>
