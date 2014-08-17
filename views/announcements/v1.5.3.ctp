<?
$VERSION = "1.5.3";
$FILES =  "http://monkey-project.com/releases/1.5/";
?>

<div class="hero-unit">

<h1>Release Notes</h1>

<h2>Monkey HTTP Server v<?=$VERSION?> <small>2014-08-16</small></h2>
<p>
  Monkey HTTP Server is a very Fast and Lightweight Web Server for GNU/Linux. It has been
  designed to be very scalable with low memory and CPU consumption, the perfect solution for
  High Demand Production Servers and Embedded Devices. Made for ARM, x86 and x86_64.
</p>
</div>

<h3>Introduction</h3>
<p>
  We are proud to announce the availability of the minor fix release <i>Monkey v1.5.3</i>,
  codename <b>Emperor Tamarin</b>.
</p>
<br>

<h3>What is new ? What has changed ?</h3>
<p>
  Here is a list of the most relevant changes on Monkey v1.5.3:
<ul>
  <li>Scheduler: fix potential DDoS security issue when using FDT enable</li>
  <li>Epoll: validate when registering connection with the Scheduler</li>
  <li>Request: set correct path size when truncated</li>
  <li>Request: unlink request node from global list</li>
  <li>Mimetype: do not iterate off the start of the filename when looking for an extension</li>
  <li>Request: don't search off the end of the body buffer for query strings</li>
  <li>Utils: allocate enough space to include the null terminator when URL-decoding URLs</li>
  <li>Method: correctly extract content length value from body buffer when pre-parsing</li>
  <li>Mandril: fix network address reference</li>
  <li>Libmonkey: do not use SO_REUSEPORT and set Mime default</li>
  <li>Scheduler: on Libmonkey mode IP_CHECK, drop socket</li>
</ul>

</p>
<p>
  For full details of the changes made, please check the <a href="<?=$FILES?>ChangeLog-<?=$VERSION?>.txt">ChangeLog</a>.
</p>

<h3>Contributors</h3>
<p>
We would like to thanks to the following people who have been involved doing code and bug fixes contributions on this release:
</p>
<ul>
  <li>Matthew Daley from <a href="http://bugfuzz.com">http://bugfuzz.com</a></li>
  <li>Eduardo Silva</li>
</ul>

<h3>Join us!</h3>
<p>
We want to hear about you, our community is growing and you can be part of it!, you can met us in:
</p>

<ul>
<li>Mailing list: <a href='http://lists.monkey-project.com'>http://lists.monkey-project.com</a></li>
<li>IRC: irc.freenode.net #monkey</li>
<li>Twitter: <a href='http://www.twitter.com/monkeywebserver'>http://www.twitter.com/monkeywebserver</a></li>
<li>Freecode: <a href='http://freecode.com/projects/monkey'>http://freecode.com/projects/monkey</a> (RIP)</li>
<li>Linkedin: <a href='http://www.linkedin.com/groups/Monkey-HTTP-Daemon-3211216'>http://www.linkedin.com/groups/Monkey-HTTP-Daemon-3211216</a></li>
</ul>
