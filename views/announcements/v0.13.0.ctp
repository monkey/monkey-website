<div class="hero-unit">

<h2>Monkey HTTP Daemon v0.13.0 [Earthquake] has been released</h2>
<p>
Monkey HTTP Daemon is a very Fast and Lightweight Web Server for Linux. It has been designed to be very scalable with low memory and CPU consumption, the perfect
solution for embedded and high production environments.
</p>
</div>

<h3>Introduction</h3>
<p>
   Monkey project team, is proud to announce the availability of our new major release <i>Monkey HTTP Daemon 0.13.0</i>. This new release comes with new features, improved performance and
   a lot of minor fixes.
</p>

<h3>What is new ?</h3>
<p>
<ul>
  <li>New: monkey manpage, finally!</li>
  <li>New: banana manpage</li>
  <li>New: main program supports long options (--something)</li>
  <li>New: support for all HTTP response status (required for some plugins)</li>
  <li>New: core server now support transport type (e.g: http, https...)</li>
  <li>New: Configure script now supports '--default-port' and '--default-user' arguments</li>
  <li>New: core macros mk_err(), mk_info(), mk_warn() and mk_bug()</li>
  <li>New: core macros __MONKEY__, __MONKEY_MINOR__ and __MONKEY_PATCHLEVEL__</li>
  <li>API: new interface to add extra response header rows api->header_add_row</li>
  <li>Improve performance for mimetype lookup (sequencial + binary search)</li>
  <li>Improve performance for pointer to buffer</li>
  <li>Improve performance for response headers</li>
  <li>Fix: send Content-Length header when HEAD method is used </li>
  <li>Rename PID file to monkey.pid.PORT_NUMBER</li>
  <li>More robust daemon mode</li>
  <li>Code internal improvements</li>
  <li>Logger: new Masterlog configuration key</li>
  <li>Logger: improve performance, map HTTP status code instead of use str_itop()</li>
  <li>Logger: use mk_list implementation</li>
  <li>Liana_SSL: Fix minor memory leak</li>
  </ul>
</p>

<h3>Contributors</h3>
<p>
We would like to thanks to the following people who have been involved doing code and bug fixes contributions on this release:
</p>
<ul>
        <li> Davidlohr Bueso (Dave)</li>
</ul>

<h3>Join us!</h3>
<p>
We want to hear about you, our community is growing and you can be part of it!, you can met us in:
</p>

<ul>
<li>Mailing list: <a href='http://lists.monkey-project.com'>http://lists.monkey-project.com</a></li>
<li>IRC: irc.freenode.net #monkeyd</li>
<li>Twitter: <a href='http://www.twitter.com/monkeywebserver'>http://www.twitter.com/monkeywebserver</a></li>
<li>Identica: <a href='http://identi.ca/group/monkey'>http://identi.ca/group/monkey</a></li>
<li>Freshmeat: <a href='http://freshmeat.net/projects/monkey'>http://freshmeat.net/projects/monkey</a></li>
<li>Linkedin: <a href='http://www.linkedin.com/groups/Monkey-HTTP-Daemon-3211216'>http://www.linkedin.com/groups/Monkey-HTTP-Daemon-3211216</a></li>
</ul>
