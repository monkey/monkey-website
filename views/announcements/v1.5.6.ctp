<?
$VERSION = "1.5.6";
$FILES =  "http://monkey-project.com/releases/1.5/";
?>

<div class="hero-unit">

<h1>Release Notes</h1>

<h2>Monkey HTTP Server v<?=$VERSION?> <small>2015-03-02</small></h2>
<p>
  Monkey HTTP Server is a very Fast and Lightweight Web Server for GNU/Linux. It has been
  designed to be very scalable with low memory and CPU consumption, the perfect solution for
  High Demand Production Servers and Embedded Devices. Made for ARM, x86 and x86_64.
</p>
</div>

<h3>Introduction</h3>
<p>
  We are proud to announce the availability of the minor fix release <i>Monkey v1.5.6</i>,
  codename <b>Emperor Tamarin</b>.
</p>
<br>

<h3>What is new ? What has changed ?</h3>
<p>
  Here is a list of the most relevant changes on Monkey v1.5.6:
<ul>
  <li>Scheduler: fix wrong handling of incoming queue data.</li>
  <li>String: performance improvement converting uint64_t to string (4x).</li>
  <li>Kernel: disable TCP_AUTOCORKING feature. Not optimal for our context.</li>
  <li>SSL: as PolarSSL was rebranded as mbedTLS, align those changes on our code, documentation and packages.</li>
  <li>HTTP: improve TCP_CORK feature usage and remove counter.</li>
  <li>Virtual Host: fix FDT handling flags.</li>
  <li>CGI: define new length for environment variables.</li>
  <li>CGI: lookup and set Cookie HTTP Header.</li>
  <li>Auth: if no global config exists, just skip stage 30.</li>
  <li>Configure: options to set mbedTLS specifics.</li>
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
  <li>Jorge Fodor</li>
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
