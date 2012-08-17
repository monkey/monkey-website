<?
$VERSION = "1.1.0";
$FILES =  "http://monkey-project.com/releases/1.1/";
?>

<div class="hero-unit">

<h1>Release Notes</h1>

<h2>Monkey HTTP Daemon v<?=$VERSION?> <small>2012-08-017</small></h2>

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
<p>
  Thanks to the community and specially to the <a href="http://code.google.com/soc">Google Summer of Code</a> students, this version is faster than previous ones, many optimizations and improvements have been made in the scheduler, memory management and
  in the core in general.
</p>
<br>
  <h3>What is new ? What has changed  ?</h3>
<p>
  Here is a list of the most relevant changes on Monkey v1.0:
<ul>
  <li>CGI: New CGI plugin</li>
  <li>Scheduler: register new incoming sockets with MK_EPOLL_READ (improve performance)</li>
  <li>Utils: speed up mk_utils_utime2gmt non-cache path by 25%</li>
  <li>Epoll: new MK_EPOLL_DISABLE mode</li>
  <li>Epoll: new epoll states mechanism</li>
  <li>Core: usage of GCC built-ins: prefetch/[un]likely</li>
  <li>HTTP: Unset cork flag when mk_http_send_file is done</li>
  <li>TCP: Do not enable TCP_NODELAY in mk_conn_read</li>
  <li>API: do not export mk_api</li>
  <li>QA: new validator scripts for host:port headers</li>
  <li>IOV: fixed initial zeroing of offset entries</li>
  <li>Configure: improve plugin detection</li>
  <li>Several code cleanups and optimizations</li>
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

