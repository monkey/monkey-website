<?
$VERSION = "0.20.0";
$FILES =  "http://monkey-project.com/releases/0.20/";
?>

<div class="gsoc">

<h1>Announcements</h1>

<h2>Monkey HTTP Daemon v<?=$VERSION?></h2>
<p class="date">2011-10-01</p>

<p>
Monkey HTTP Daemon is a very Fast and Lightweight Web Server for Linux. It has been designed to be very scalable with low memory and CPU consumption, the perfect 
solution for embedded and high production environments.  
</p>

<h2>Introduction</h2>
<p>
  Monkey project team, is proud to announce the availability of our next mejor release <i>Monkey HTTP Daemon <?=$VERSION?></i>. This new release comes with new hot features, improved performance and a lot of minor fixes.
</p>

<h2>What is new ?</h2>
<p>
   Here is a list of the most relevant changes on this new version:
   <br><br>
<ul>
   <li>Optimized Scheduler</li>
   <li>Optimized headers TOC parser</li>
   <li>String parser is 57% faster</li>
   <li>Banana: get port and pid file from the config file</li>
   <li>Auth: new basic authentication plugin</li>
   <li>New TransportLayer directive in monkey.conf</li>
   <li>QA: improved keepalive test script</li>
   <li>Fix: host alias setup</li>
   <li>Fix: unmask files when going to daemon mode</li>
   <li>Palm: new template request</li>
   <li>Cheetah: fix workers command</li>
   <li>Mandril: new security rules based on subnets</li>
</ul>

</p>
<p>
  For full details of changes made, please check the <a href="<?=$FILES?>ChangeLog-<?=$VERSION?>">ChangeLog</a>.
</p>

<h2>Contributors</h2>
<p>
We would like to thanks to the following people who have been involved doing code and bug fixes contributions on this release:
</p>
<br>
<ul>
        <li><u>Jonathan Gonzalez (Zeus)</u>: created network calculator macros, these macros are required by Mandril plugin to handle
        the new security rules based on subnets. He also created the updated MatrixSSL package which provides Monkey the SSL layer.</li>
        <li><u>Felipe Astroza (Max)</u>: fixed two scheduler issues related to balancing counter and drop an unused locking mechanism.
               Also helped to trace and troubleshoot the epoll implementation and proposed to remove an ioctl().
        </li>
     <li><u>Davidlohr Bueso</u>: Fixed return values, system limits reader and improved macros usage.</li>
        <li><u>Jacques D. Piguet</u>: improved banana script, now it parse monkey.conf to get TCP port and PID file.</li>
        <li><u>Christian Stankowic</u>: cleanup configure script, deprecate old cgi-bin stuff
</ul>

<h2>Join us!</h2>
<p>
We want to hear about you, our community is growing and you can be part of it!, you can met us in:
</p>
<br>
<li>Mailing list: <a href='http://lists.monkey-project.com'>http://lists.monkey-project.com</a></li>
<li>IRC: irc.freenode.net #monkeyd</li>
<li>Twitter: <a href='http://www.twitter.com/monkeywebserver'>http://www.twitter.com/monkeywebserver</a></li>
<li>Identica: <a href='http://identi.ca/group/monkey'>http://identi.ca/group/monkey</a></li>
<li>Freshmeat: <a href='http://freshmeat.net/projects/monkey'>http://freshmeat.net/projects/monkey</a></li>
<li>Linkedin: <a href='http://www.linkedin.com/groups/Monkey-HTTP-Daemon-3211216'>http://www.linkedin.com/groups/Monkey-HTTP-Daemon-3211216</a></li>
<br><br>
</div>
