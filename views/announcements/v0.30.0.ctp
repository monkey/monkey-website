<?
$VERSION = "0.30.0";
$FILES =  "http://monkey-project.com/releases/0.30/";
?>

<div class="gsoc">

<h1>Announcements</h1>

<h2>Monkey HTTP Daemon v<?=$VERSION?></h2>
<p class="date">2012-01-01</p>

<p>
Monkey HTTP Daemon is a very Fast and Lightweight Web Server for Linux. It has been designed to be very scalable with low memory and CPU consumption, the perfect 
solution for embedded and high production environments.  
</p>

<h2>Introduction</h2>
<p>
  Monkey project team, is proud to announce the availability of our new release <i>Monkey HTTP Daemon <?=$VERSION?></i>. 
  This new major release comes with exciting features and fixes.
</p>

<h2>What is new ?</h2>
<p>
   Here is a list of the most relevant changes on this new version:
   <br><br>
<ul>
  <li>IPv6 fully functional and merged into Liana</li>
  <li>Core: better handle of server load versus capacity</li>
  <li>Fix double-free() on client_session when keep-alive is off</li>
  <li>New support for PUT and DELETE methods, these can be handled by the plugin API interface.</li>
  <li>New manpages</li>
  <li>New Experimental WebSockets plugin</li>
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
    <li><u>Jonathan Gonzalez (Zeus)</u>: everything related to IPv6 support and other fixes!</li>
  <li><u>Hio</u>: Multiple fixes and troubleshoot of memory issues</li>
</ul>

<h2>Join us!</h2>
<p>
We want to hear about you, our community is growing and you can be part of it!, you can met us in:
</p>
<br>
<li>Mailing list: <a href='http://lists.monkey-project.com'>http://lists.monkey-project.com</a></li>
<li>IRC: irc.freenode.net #monkey</li>
<li>Twitter: <a href='http://www.twitter.com/monkeywebserver'>http://www.twitter.com/monkeywebserver</a></li>
<li>Identica: <a href='http://identi.ca/group/monkey'>http://identi.ca/group/monkey</a></li>
  <li>Freecode: <a href='http://freecode.com/projects/monkey'>http://freecode.com/projects/monkey</a></li>
<li>Linkedin: <a href='http://www.linkedin.com/groups/Monkey-HTTP-Daemon-3211216'>http://www.linkedin.com/groups/Monkey-HTTP-Daemon-3211216</a></li>
<br><br>
</div>
