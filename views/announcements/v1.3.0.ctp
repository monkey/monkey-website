<?
$VERSION = "1.3.0";
$FILES =  "http://monkey-project.com/releases/1.3/";
?>

<div class="hero-unit">

<h1>Release Notes</h1>

<h2>Monkey HTTP Daemon v<?=$VERSION?> <small>2013-10-15</small></h2>

<p>
 Monkey HTTP Daemon is a very Fast and Lightweight Web Server for GNU/Linux. It has been designed to be very
 scalable with low memory and CPU consumption, the perfect solution for embedded devices. Made for ARM, x86 and x86_64.
</p>
</div>

<h3>Introduction</h3>
<p>
  We are very proud to announce the availability of a new major release <i>Monkey v1.3.0</i>, codename <b>Golden Monkey</b>.
</p>
<br>
  <h3>What is new ? What has changed ?</h3>
<p>
  Here is a list of the most relevant changes on Monkey v1.3.0:
<ul>
  <li>New default home page</li>
  <li>New -b program flag to print build information</li>
  <li>New support for 'musl' C library (--musl-mode)</li>
  <li>Mimetype: extension lookup performance improvements (~50%) </li>
  <li>HTTP: Add support for OPTIONS method</li>
  <li>HTTP: Do not force content type on POST request (RFC2616 7.2.1)</li>
  <li>HTTP: FIX #182 DoS bug on headers parser</li>
  <li>Core: red-black-tree implementation upgraded to the lastest found on Linux Kernel</li>
  <li>Core: initialize clock before loading plugins</li>
  <li>Core: on segfault, abort program (core dumps enabled)</li>
  <li>Core: set close-on-exec on Epoll, Utils, Logger and Liana</li>
  <li>Events: extra checks and do not exit if a wakeup fails</li>
  <li>Configure: improved tests and new autocheck for backtrace support</li>
  <li>Signal: deprecate the use of sys_siglist</li>
  <li>Utils: fix timezone time generator</li>
  <li>Security (Mandril): new deny_hotlink directive</li>
  <li>Auth: Fix base64 decoding buffer usage</li>
  <li>Auth: Reject usernames if length does not match</li>
  <li>PolarSSL: validate that TransportLayer config key exists</li>
  <li>FastCGI: Fix request error logs</li>
  <li>QA: new tests for if-modified-since feature</li>
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
  <li>Nil Croustillac</li>
  <li>Valentin Ochs</li>
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
