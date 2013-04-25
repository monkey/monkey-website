<?
$VERSION = "1.2.0";
$FILES =  "http://monkey-project.com/releases/1.2/";
?>

<div class="hero-unit">

<h1>Draft: Release Notes</h1>

<h2>Monkey HTTP Daemon v<?=$VERSION?> <small>2013-04-25</small></h2>

<p>
 Monkey HTTP Daemon is a very Fast and Lightweight Web Server for GNU/Linux. It has been designed to be very
 scalable with low memory and CPU consumption, the perfect solution for embedded devices. Made for ARM, x86 and x86_64.
</p>
</div>

<h3>Introduction</h3>
<p>
  Monkey was started on 2001 and after years of development we are very proud to announce the availability of our
  new major release: <i>Monkey v1.1</i>, codename <b>Summer</b>. This major release reflects our community effort to produce a high qualilty
  web server for embedded devices taking the most of Linux Kernel to hit great performance with low resources usage.
</p>
<br>
  <h3>What is new ? What has changed  ?</h3>
<p>
  Here is a list of the most relevant changes on Monkey v1.2:
<ul>
  <li>Core: Add support for uCLIB</li>
  <li>Core: Add support for LINUX TCP_FASTOPEN</li>
  <li>Core: new -p flag to specity TCP port</li>
  <li>Core: improved stack trace</li>
  <li>Core: add support for red-black-tree's, implemented on epoll_states and the scheduler. Performance improved</li>
  <li>SSL: New SSL layer is provided by PolarSSL, MatrixSSL have been deprecated</li>
  <li>FastCGI: general fixes and improvements, updated to version 0.2</li>
  <li>CGI: core improvements and new support for interpreters</li>
  <li>CGI: add support for non-compliants CGI programs</li>
  <li>Coverity: many fixes in the core and plugins implemented thanks to Coverity tool reports</li>
  <li>Logger: fix fake consumer when cannot write data to disk</li>
  <li>Debian: improved package builder rules</li>
  <li>Configure: fix accept4() check</li>
  <li>Palm plugin and server have been deprecated</li>
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
  <li>Sonny Karlsson</li>
  <li>Lauri Kasanen</li>
  <li>Neil Haran</li>
  <li>Denis Mone</li>
  <li>Bjorn Lindgren</li>
  <li>swpd</li>
  <li>Vincent Cheng</li>
  <li>Curtis Hall</li>
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

