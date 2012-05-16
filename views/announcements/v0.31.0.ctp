<?
$VERSION = "0.31.0";
$FILES =  "http://monkey-project.com/releases/0.31/";
?>

<div class="hero-unit">
<h2>Monkey HTTP Daemon v<?=$VERSION?> <small>2012-01-12</small></h2>

<p>
Monkey HTTP Daemon is a very Fast and Lightweight Web Server for Linux. It has been designed to be very scalable with low memory and CPU consumption, the perfect
solution for embedded and high production environments.
</p>
</div>

<h3>Introduction</h3>
<p>
  Monkey project team, is proud to announce the availability of our new release <i>Monkey HTTP Daemon <?=$VERSION?></i>.
  This new release comes with a few minor fixes.
</p>

<h3>What is new ?</h3>
<p>
   Here is a list of the most relevant changes on this new version:
<ul>
  <li>Core/API: export function to format IP string</li>
  <li>Fix IP string builder (ipv4 & ipv6)</li>
  <li>Liana & Liana_SSL: deprecate _mkp_network_io_ip_str()</li>
  <li>Logger and Palm now uses the new IP string builder</li>
  <li>Logger: fix memory leak</li>
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
    <li><u>Jonathan Gonzalez (Zeus)</u>: fixes in IP string builder</li>
</ul>

<h3>Join us!</h3>
<p>
We want to hear about you, our community is growing and you can be part of it!, you can met us in:
</p>

<ul>
<li>Mailing list: <a href='http://lists.monkey-project.com'>http://lists.monkey-project.com</a></li>
<li>IRC: irc.freenode.net #monkey</li>
<li>Twitter: <a href='http://www.twitter.com/monkeywebserver'>http://www.twitter.com/monkeywebserver</a></li>
<li>Identica: <a href='http://identi.ca/group/monkey'>http://identi.ca/group/monkey</a></li>
  <li>Freecode: <a href='http://freecode.com/projects/monkey'>http://freecode.com/projects/monkey</a></li>
<li>Linkedin: <a href='http://www.linkedin.com/groups/Monkey-HTTP-Daemon-3211216'>http://www.linkedin.com/groups/Monkey-HTTP-Daemon-3211216</a></li>
</ul>

