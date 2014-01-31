<?
$VERSION = "1.4.0";
$FILES =  "http://monkey-project.com/releases/1.4/";
?>

<div class="hero-unit">

<h1>Release Notes</h1>

<h2>DRAFT - Monkey HTTP Daemon v<?=$VERSION?> <small>2014-01-XX</small></h2>

<p>
  Monkey HTTP Server is a very Fast and Lightweight Web Server for GNU/Linux. It has been 
  designed to be very scalable with low memory and CPU consumption, the perfect solution for
  embedded devices. Made for ARM, x86 and x86_64.
</p>
</div>

<h3>Introduction</h3>
<p>
  We are very proud to announce the availability of a new major release <i>Monkey v1.4.0</i>, 
  codename <b>Spider Monkey</b>.
</p>
<br>

<h3>What is new ? What has changed ?</h3>
<p>
  Here is a list of the most relevant changes on Monkey v1.4.0:
<ul>
  <li>Scheduler: optimizations</li>
  <li>Plugins: adapt plugins to use core memory wrappers</li>
  <li>Core: New Virtual Host FDT feature 'Shared file descriptors'</li>
  <li>Core: new error handler for system calls</li>
  <li>License: move from GPLv2 to LGPLv2.1</li>
  <li>Scheduler: workaround for ULONG_MAX bug</li>
  <li>Threading: all TLS is done through __thread</li>
  <li>Proxy Reverse: Experimental proxy reverse plugin</li>
  <li>Jemalloc: new default (and optional) memory allocator</li>
  <li>Linux Trace Toolkit: core implements LTTng for hard debugging</li>
  <li>Core: fix ghost connections</li>
  <li>SSL: new support for PolarSSL v1.3</li>
  <li>CGI: safe return on socket exception</li>
  <li>Logger: minor fixes and better descriptions</li>
  <li>Logger: plugin is optional</li>
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
  <li>Lauri Kasanen</li>
  <li>Nikola Nikov</li>
  <li>Sonny Karlsson</li>
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
