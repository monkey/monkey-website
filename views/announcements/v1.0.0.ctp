<?
$VERSION = "1.0.0";
$FILES =  "http://monkey-project.com/releases/1.0/";
?>

<div class="hero-unit">

<h1>Release Notes</h1>

<h2>Monkey HTTP Daemon v<?=$VERSION?> <small>2012-06-01</small></h2>

<p>
 Monkey HTTP Daemon is a very Fast and Lightweight Web Server for GNU/Linux. It has been designed to be very
 scalable with low memory and CPU consumption, the perfect solution for embedded devices. Made for ARM, x86 and x64.
</p>
</div>

<h3>Introduction</h3>
<p>
  Monkey was started on 2001 and after years of development we are very proud to announce the availability of our
  new major release: <i>Monkey v1.0</i>, codename <b>Monkey I/O</b>. This major release reflects our community effort to produce a high qualilty
  web server for embedded devices taking the most of Linux Kernel to hit great performance with low resources usage.
</p>
<p>
  This version is faster than previous ones, many optimization and improvements has been made in the scheduler, memory management and
  in the core in general.
</p>
<br>
  <h3>What is new ? What has changed  ?</h3>
<p>
  Here is a list of the most relevant changes on Monkey v1.0:
<ul>
  <li>Code cleanup</li>
  <li>GCC: Make monkey compile on gcc 4.7</li>
  <li>Core: improve memory management</li>
  <li>Core: On segfault, print the stacktrace</li>
  <li>Core: fix initial bind address when using IPv6</li>
  <li>Core: new SAFE_FREE macro (./configure --safe-free)</li>
  <li>Scheduler: optimize connection queues</li>
  <li>Scheduler: Protect the wid init with a mutex</li>
  <li>HTTP: do not perror() when sendfile() fails</li>
  <li>HTTP: assign default host before HTTP parsing</li>
  <li>HTTP: fix keep_alive initial value on session_request</li>
  <li>HTTP: fix Host header parser</li>
  <li>HTTP: validate port value after numeric conversion</li>
  <li>Socket: fix mk_socket_ip_str() for IPv6</li>
  <li>Socket: Fix possible overflow</li>
  <li>Request: Optimize mk_request_init</li>
  <li>Request: fix memory leak when invoking premature close</li>
  <li>Clock: improve time strings concurrent access</li>
  <li>File: add new field 'exists' to the struct file_info</li>
  <li>File: set the proper O_NOATIME when applies</li>
  <li>Utils: Add a gmt text cache for utime2gmt</li>
  <li>QA: Improved quality assurance tests</li>
  <li>Debug/Environment: implement MK_TRACE_FILTER and MK_TRACE_BACKGROUND</li>
  <li>Configure: compile output like Linux Kernel style</li>
  <li>Configure: install man pages to the correct path</li>
  <li>Configure: do not install not compiled plugins</li>
  <li>Auth: rename mkpasswd utlity to mk_passwd</li>
  <li>Auth: adapt new Base64 implementation</li>
  <li>Liana: use monkey api to set a socket non-blocking</li>
  <li>List: Replace all linked list with mk_list implementation</li>
  <li>Request: fix memory leak when invoking premature close</li>
  <li>Clock: improve time strings concurrent access</li>
  <li>Monkey: implement a POSIX write-lock over the PID file</li>
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
  <li>Sourabh Chandak</li>
  <li>Mahesh Gondi</li>
  <li>Davidlohr Bueso</li>
  <li>Felipe Astroza Araya</li>
  <li>Torsten Pfüller</li>
  <li>Jean-Paul Bonnet</li>
  <li>Kay</li>
  <li>Flaushy</li>
  <li>Felipe Reyes</li>
  <li>Aldrin Martoq (Brayatan)</li>
  <li>Jonathan Gonzalez</li>

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

