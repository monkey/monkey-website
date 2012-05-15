<div class="gsoc">

<h1>Announcements</h1>

<h2>Monkey HTTP Daemon v0.12.0 has been released</h2>
<p>
Monkey HTTP Daemon is a very Fast and Lightweight Web Server for Linux. It has been designed to be very scalable with low memory and CPU consumption, the perfect 
solution for embedded and high production environments.  
</p>

<h2>Introduction</h2>
<p>
  Monkey project team, is proud to announce the availability of <i>Monkey HTTP Daemon 0.12.0</i>. Our new release comes with a full set of new extended
   features through plugins, an improved API for developers, internal changes and minor fixes.
</p>

<h2>What is new ?</h2>
<p>
<ul>
        <li>Support for generic Linux and Android platforms</li>
        <li>Scheduler now balance incoming connections to less overhead worker</li>
        <li>Virtual hosts now supports alias names</li>
        <li>Palm server now support post request with more than 65KB</li>
        <li>Configure script now support '--enable-plugins' and '--disable-plugins' arguments</li>
        <li>Configure script now support '--platform' argument</li>
        <li>API event hooks: now plugins can use event hooks for read, write, close, error and timeout socket events</li>
        <li>Cheetah Plugin: Now can listen in STDIN or unix socket</li>
        <li><b>NEW</b> Liana SSL plugin: provides SSL encryption capabilities to the network layer of Monkey</li>
        <li><b>NEW EXPERIMENTAL</b> Patas Monkey plugin: converts Monkey in a HTTP proxy reverse server with balancing capabilities</li>
</ul>
</p>

<h2>Internal Changes and Fixes</h2>
<p>
<ul>
        <li><b>New</b> convention of 'client_session' and 'session_request' structs to handle requests</li>
        <li><b>New</b> Linux Kernel struct lists style</li>
        <li>Add mk_error() for error handling</li>
        <li>Close server when receive SIGTERM</li>
        <li>Plugins now register using MONKEY_PLUGIN() macro</li>
</ul>
</p>

<h2>Contributors</h2>
<p>
We would like to thanks to the following people who have been involved doing code and bug fixes contributions on this release:
</p>
<ul>
        <li> Jonathan Gonzalez (Zeus)</li>
        <li> Davidlohr Bueso (Dave)</li>
        <li> Felipe Ortega</li>
</ul>

<h2>Join us!</h2>
<p>
We want to hear about you, our community is growing and you can be part of it!, you can met us in:
</p>
<br>
<li>Mailing list: <a href='http://lists.monkey-project.com'>http://lists.monkey-project.com</a></li>

<li>IRC: irc.freenode.net #monkeyd</li>
<br><br>
</div>
