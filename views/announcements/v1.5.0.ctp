<?
$VERSION = "1.5.0";
$FILES =  "http://monkey-project.com/releases/1.5/";
?>

<div class="hero-unit">

<h1>Release Notes</h1>

<h2>Monkey HTTP Server v<?=$VERSION?> <small>2014-05-12</small></h2>
<p>
  Monkey HTTP Server is a very Fast and Lightweight Web Server for GNU/Linux. It has been
  designed to be very scalable with low memory and CPU consumption, the perfect solution for
  High Demand Production Servers and Embedded Devices. Made for ARM, x86 and x86_64.
</p>
</div>

<h3>Introduction</h3>
<p>
  We are very proud to announce the availability of a new major release <i>Monkey v1.5.0</i>,
  codename <b>UNKNOWN</b>. This major release delivers a new memory handler based on
  Jemalloc, extra debugging mechanism based on Linux Trace Toolkit (LTTng), outstanding
  performance improvements through the new Vhost File Descriptor Table which allows to share
  opened file descriptors, experimental Proxy Reverse, SSL improvements and many others.
</p>
<br>

<h3>What is new ? What has changed ?</h3>
<p>
  Here is a list of the most relevant changes on Monkey v1.5:
<ul>
  <li>License: Monkey Core and Plugins are now under the Apache License v2.0</li>
  <li>Virtual Host: built-in support for configurable HTTP redirection</li>
  <li>Auth: rewrite of mk_passwd Python tool in C</li>
  <li>SSL: Enable session cache</li>
  <li>Core: add support Linux SO_REUSEPORT, Kernel balancing mode</li>
  <li>Core: new interfaces to tweak features based on Kernel version</li>
  <li>SystemD: new init service file</li>
  <li>Memory: memory allocator Jemalloc upgraded to v3.6</li>
  <li>Pooling: fix missing close events on socket (EPOLLRDHUP)</li>
  <li>Pooling: new HANGUP mode</li>
  <li>Lib Monkey: fix build and test cases</li>
  <li>Documentation: new CONTRIBUTING guide</li>
  <li>Cheetah!: add support for Kernel features being used</li>
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
  <li>Eduardo Silva</li>
  <li>Sonny Karlsson</li>
  <li>Vladimir Cernov</li>
  <li>Savita Seetaraman</li>
  <li>Domen Ipavec</li>
  <li>Tamer Tas</li>
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
