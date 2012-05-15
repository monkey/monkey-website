<?
$VERSION = "0.20.2";
$FILES =  "http://monkey-project.com/releases/0.20/";
?>

<div class="gsoc">

<h1>Announcements</h1>

<h2>Monkey HTTP Daemon v<?=$VERSION?></h2>
<p class="date">2011-10-10</p>

<p>
Monkey HTTP Daemon is a very Fast and Lightweight Web Server for Linux. It has been designed to be very scalable with low memory and CPU consumption, the perfect 
solution for embedded and high production environments.  
</p>

<h2>Introduction</h2>
<p>
  Monkey project team, is proud to announce the availability of our minor fix release <i>Monkey HTTP Daemon <?=$VERSION?></i>. 
  This new release comes with minor fixes in the logger and an improvement in dirlisting plugin.
</p>

<h2>What is new ?</h2>
<p>
   Here is a list of the most relevant changes on this new version:
   <br><br>
<ul>
  <li>Fix #80: Detect non-writable logfiles for logger plugin</li>
  <li>Logger: master log file is enabled by default</li>
  <li>Logger: redirect stderr to master log file</li>
  <li>Logger: implement a fake consumer mechanism to avoid pipe buffer errors when the log file is not accessible 
      for write operations
  <li>Dirlisting: reduce one memory allocation per request</li>                                                         
  </li>
</ul>

</p>
<p>
  For full details of changes made, please check the <a href="<?=$FILES?>ChangeLog-<?=$VERSION?>">ChangeLog</a>.
</p>

<h2>Contributors</h2>
<p>
We would like to thanks to the following people who have been involved doing code and bug fixes contributions on this release:
</p>
<br>
<ul>
      <li><u>Christian Stankowic</u>: reported the logger bug on failed detection of files permission</u></li>
</ul>

<h2>Join us!</h2>
<p>
We want to hear about you, our community is growing and you can be part of it!, you can met us in:
</p>
<br>
<li>Mailing list: <a href='http://lists.monkey-project.com'>http://lists.monkey-project.com</a></li>
<li>IRC: irc.freenode.net #monkeyd</li>
<li>Twitter: <a href='http://www.twitter.com/monkeywebserver'>http://www.twitter.com/monkeywebserver</a></li>
<li>Identica: <a href='http://identi.ca/group/monkey'>http://identi.ca/group/monkey</a></li>
<li>Freshmeat: <a href='http://freshmeat.net/projects/monkey'>http://freshmeat.net/projects/monkey</a></li>
<li>Linkedin: <a href='http://www.linkedin.com/groups/Monkey-HTTP-Daemon-3211216'>http://www.linkedin.com/groups/Monkey-HTTP-Daemon-3211216</a></li>
<br><br>
</div>
