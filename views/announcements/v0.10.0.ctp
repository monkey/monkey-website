<div class="hero-unit">

<h2>Monkey HTTP Daemon v0.10.0 has been released</h2>

<p>
Monkey HTTP Daemon is a very Fast and Lightweight Web Server for Linux. It has been designed to be very scalable with low memory and CPU consumption, the perfect solution for embedded and high production environments.
</p>
<p>
The project was started in 2001, internally it used to work with forking and threading networking models to attend clients, now, our current release 0.10.0 is one of our major milestone, we have a new web server working in asyncronous mode, fixed threads and with an excellent performance.
</p>
<p>
This version  has been in development for the last two years, we have rewritten almost 85% of the old code and we have met our goals in a very stable product :)
</p>
</div>

<h3>What is new ?</h3>
<ul>

<li>Asynchronous Server: No more blocking calls.</li>
<li>New Pipelining request support</li>
<li>New 'Listen' configuration directive: allow to restrict incoming connection to a determinated network interface</li>
<li>QA Packages: We have added a quallity assurance package which help us to determinate if the server is working properly as expected, it has different type of request and expect specific responses, also it checks the log files for every QA request made</li>
<li>Plugins Support: Now Monkey support Plugins, we have created a new API which provides a very easy way to extend the behavior and features of the server.</li>
<li>Cheetah! Shell Plugin: This plugin add a command line interface (shell) to Monkey!, it has been writen for debugging purposes, check workers status and others.</li>
<li>Security Plugin : It adds optional security rules to restrict the access to the server</li>
<li>Worker logger: A new worker is in charge to register the log entries, it helps to reduce the I/O</li>
<li>Configuration Files: The configuration structure has changed, now we have a more organized configuration for global variables and virtual hosts directives.</li>
<li>A lot of minor bug fixes</li>
</ul>

<h3>Contributors</h3>
<p>
We would like recognize the contribution and help provided by the following volunteers:
</p>
<ul>
<li> Carlos Ghan</li>
<li> Thorsten Schmale</li>
<li> Niedobryjasiu</li>
<li> Jonathan Gonzalez</li>
<li> [[GreenFox]]</li>
<li> Felipe Astroza</li>
</ul>
<h3>Join us!</h3>

We want to hear about you, our community is growing and you can be part of it!, you can met us in:
</p>

<ul>
<li>Mailing list: http://groups.google.com/group/monkeyd</li>
<li>IRC: irc.freenode.net #monkeyd</li>
</ul>

