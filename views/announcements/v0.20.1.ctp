<?
$VERSION = "0.20.1";
$FILES =  "http://monkey-project.com/releases/0.20/";
?>

<div class="hero-unit">

<h2>Monkey HTTP Daemon v<?=$VERSION?> <small>2011-10-03</small></h2>

<p>
Monkey HTTP Daemon is a very Fast and Lightweight Web Server for Linux. It has been designed to be very scalable with low memory and CPU consumption, the perfect
solution for embedded and high production environments.
</p>
</div>

<h3>Introduction</h3>
<p>
  Monkey project team, is proud to announce the availability of our minor fix release <i>Monkey HTTP Daemon <?=$VERSION?></i>. This new release comes with fixes in the conntection handler and fixes in the transfer chunked encoding for the dirlisting plugin:
</p>

<h3>What is new ?</h3>
<p>
   Here is a list of the most relevant changes on this new version:
   <br><br>
<ul>
   <li>Fix #75: Handle DT_UNKNOWN in struct dirent *ent->d_type</li>
   <li>Fix #74: chunked encoding in dirlisting is broken</li>
   <li>Dirlisting: use API mem_free instead of mk_mem_free()</li>
   <li>Fix #76: dirlisting returns nothing for HTTP/1.0 request</li>
   <li>Fix ticket #77: 100% CPU usage after having broken connection</li>
</ul>

</p>
<p>
  For full details of changes made, please check the <a href="<?=$FILES?>ChangeLog-<?=$VERSION?>">ChangeLog</a>.
</p>

<h3>Contributors</h3>
<p>
We would like to thanks to the following people who have been involved doing code and bug fixes contributions on this release:
</p>

<ul>
        <li><u>Gatling (please send us your email)</u>: reported four bugs which are the base of this release, he also proposed part of the
               fixes made. Thanks!</li>
</ul>

<h2>Join us!</h2>
<p>
We want to hear about you, our community is growing and you can be part of it!, you can met us in:
</p>

<ul>
<li>Mailing list: <a href='http://lists.monkey-project.com'>http://lists.monkey-project.com</a></li>
<li>IRC: irc.freenode.net #monkeyd</li>
<li>Twitter: <a href='http://www.twitter.com/monkeywebserver'>http://www.twitter.com/monkeywebserver</a></li>
<li>Identica: <a href='http://identi.ca/group/monkey'>http://identi.ca/group/monkey</a></li>
<li>Freshmeat: <a href='http://freshmeat.net/projects/monkey'>http://freshmeat.net/projects/monkey</a></li>
<li>Linkedin: <a href='http://www.linkedin.com/groups/Monkey-HTTP-Daemon-3211216'>http://www.linkedin.com/groups/Monkey-HTTP-Daemon-3211216</a></li>
</ul>
