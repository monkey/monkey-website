<div class="gsoc">

<h1>Google Summer of Code 2012 :: Project Ideas</h1>
<div class="gsoc_menu">
	<p>
	<?=$html->link('GSoC Main', array('controller' => 'gsoc2012', 'action' => 'index'));?>
	&nbsp;&nbsp;
	<?=$html->link('Project Ideas', array('controller' => 'gsoc2012', 'action' => 'ideas'));?>
	&nbsp;&nbsp;
	<?=$html->link('Students Template', array('controller' => 'gsoc2012', 'action' => 'template'));?>
	</p>
</div>

<?=$html->image('gsoc2012_small.png');?>
<p>
	In Monkey HTTP Daemon Project, we have defined our most highest priorities, the ideas proposed here are not exclusive and they could
	be taken as a base for your proposal, you are encouraged to expand them or to propose your own ideas. Feel free to contact us to
	discuss them, you can reach us in our
	<?=$html->link('mailing list', 'http://lists.monkey-project.com/listinfo/monkey');?>
	or through the e-mail address <font class="email">gsoc2012@monkey-project.com</font>. We want to hear about you!
</p>
<br><br>
<h2>Project Ideas</h2>
    <li><a href="#id1">Android / Lightweight Webservices with Monkey</a></li>
    <li><a href="#id2">Duda: Redis and Memcache support</a></li>
    <li><a href="#id3">Duda: Memory handler and Garbage Collector</a></li>
    <li><a href="#id4">FastCGI</a></li>
    <li><a href="#id5">Monkey SDK (Software Development Kit)</a></li>
    <li><a href="#id6">Benchmark / Resources usage</a></li>
    <li><a href="#id7">GIT Protocol Support</a></li>
    <li><a href="#id8">WebSockets</a></li>
    <li><a href="#id9">Lib Monkey</a></li>
    <li><a href="#id10">Lua Integration</a></li>
<br>
<div class="gsoc_idea">
<p>
<h1><a name="id1"><b>Android / Lightweight Webservices with Monkey</b></a></h1>
<ul>
<li><b>Keys</b> Android, HTTP, C, Java, API
<li><b>Difficulty</b> <font class='high'>High</font>
<li><b>Description</b> The <a href='http://www.android.com'>Android</a> software stack, expose different objects to perform networking tasks. Currently if one application wants to create a web service, it have
to use the HttpService class. That HTTP processor provided by <a href='http://developer.android.com/reference/org/apache/http/package-summary.html'>HttpService class</a>
 cannot handle multiple applications instances under the same process context, each application requires to start a new HTTP processor for it needs, they cannot share the service among different applications. So this impact performance and could waste
extra resources when is not necessary.

<br><br>
To solve the issue mentioned, this project aims to connect and expose a <a href='http://developer.android.com/reference/android/package-summary.html'>Java Android API</a> for high level applications looking for expose web services through <a href='http://monkey-project.com'>Monkey HTTP Daemon</a>, gaining huge performance improvements compared with the current HttpService Java class.
<br><br>
Monkey expose a web services API interface through the plugin called Duda, so this project involves to work with the <a href='http://developer.android.com/sdk/ndk/index.html'>Android NDK</a> and
<a href='http://developer.android.com/sdk/android-4.0-highlights.html'>Android SDK</a> related tools to create the integration between the actors. Please review the following slides which cover the global overview of the project in question:

<center>
<div style="width:425px" id="__ss_11924772"> <strong style="display:block;margin:12px 0 4px"><a href="http://www.slideshare.net/jonathangonzalezv/android-http-service2012" title="Android http service_2012" target="_blank">Android http service_2012</a></strong> <iframe src="http://www.slideshare.net/slideshow/embed_code/11924772" width="425" height="355" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe> <div style="padding:5px 0 12px"> View more <a href="http://www.slideshare.net/" target="_blank">presentations</a> from <a href="http://www.slideshare.net/jonathangonzalezv" target="_blank">Jonathan Gonzalez</a> </div> </div>
</center>
<br><br>

<a href='http://monkey-project.com'>Monkey</a> is currently ported to <a href='http://www.android.com'>Android</a>, so the project it self is to implement the C/Java interfaces to expose the
features to the high level applications.
<br><br>
<ul>
  <li>Tasks involved are (but not restricted to):
  <li>Implement web services listener/manager
  <li>Extend Duda to support a proxy interface
  <li>Implement Android HTTP service layer connected to previous components mentioned
  <li>Create and Android application example that uses the web service feature implemented
  <li>Create an Android bundle to distribute the Web Services implementation
  <li>Documentation of web service API (C/Java) and code internals
</ul>
We aim to empower every Android platform with a strong and lightweight web services interface, are you ready for this ?
<br><br>
<li><b>Skills Required</b> High knowledge of C ; Medium knowledge of Java
</ul>
</p>
</div>

<div class="gsoc_idea">
<p>
<h1><a name="id2"><b>Duda: Redis and Memcache support</b></a></h1>
<ul>
<li><b>Keys</b>C, Socket, Web Services</li>
<li><b>Difficulty</b> <font class="high">Medium</font></li>
<li><b>Description</b>  <a href='http://monkey-project.com'>Monkey</a> provides a web services framework called Duda. This framework expose a friendly API to develop event-driven web services in C. This project aims to add support for Redis and Memcache as key-value store technologies in Duda.
<br><br>

The implementation of <a href='http://redis.io'>Redis</a> and <a href='http://memcached.org'>Memcached</a> will be pretty similar but not equal, both of them have a similar methodology of work based on asynchronous sockets and a clean API. A short description of each project:
<br><br>
<ul>
    <li><a href='http://redis.io'>Redis</a> is an open source, advanced key-value store. It is often referred to as a data structure server since keys can contain strings, hashes, lists, sets and sorted sets.</li>
    <li><a href='http://memcached.org'>Memcached</a> is an in-memory key-value store for small chunks of arbitrary data (strings, objects) from results of database calls, API calls, or page rendering.</li>
</ul>

The integration must be done using the C interface provided by the official client libraries of each project, the mentor will assist teaching the Monkey API and how duda integrates on it.
<li><b>Skills Required</b> High knowledge of C, Networking and Protocols</li>
</ul>
</p>
</div>

<div class="gsoc_idea">
<p>
<h1><a name="id3"><b>Duda: Memory handler and Garbage Collector</b></a></h1>
<ul>
<li><b>Keys</b> C, Cache, Memory</li>
<li><b>Difficulty</b> <font class="medium">Medium</font></li>
<li><b>Description</b> <a href='http://monkey-project.com'>Monkey</a> provides a web services framework called Duda. This framework expose a friendly API to develop event-driven web services in C. This project aims to create a new memory handler and <a href='http://en.wikipedia.org/wiki/Garbage_collection_%28computer_science%29'>garbage collector</a> for web services.
<br><br>
Duda framework tries to hide as much as possible the web server internals and architecture complexity, providing a high level API easy to use. Currently the developer is forced to allocate memory space by their self and then take care of release it when it have done, this is not the desired behavior so we propose to improve Duda to have a memory handler and a <a href='http://en.wikipedia.org/wiki/Garbage_collection_%28computer_science%29'>garbage collector</a> who cares about unused memory when the web services finish their work.
For this project is required to design a new memory allocation API and a <a href='http://en.wikipedia.org/wiki/Garbage_collection_%28computer_science%29'>garbage collector</a> capable to handle the many object types provided by Duda. Remember that we care a lot of performance so the implementation must be smart.
<br><br>
<li><b>Skills Required</b> High knowledge of C </li>
</ul>
</p>
</div>


<div class="gsoc_idea">
<p>
<h1><a name="id4"><b>FastCGI</b></a></h1>
<ul>
<li><b>Keys</b> C, FastCGI</li>
<li><b>Difficulty</b> <font class="high">High</font></li>
<li><b>Description</b>
<a href='http://www.fastcgi.com'>FastCGI</a> is an open extension in replacement to the old <a href='www.w3.org/CGI/'>CGI interface</a>, it provides a flexible and remote environment for applications generating dynamic content, making it scalable and reuse-resources when new OS process context are required for each request.
<br><br>
This project aim to develop the <a href='http://www.fastcgi.com'>FastCGI</a> extension/plugin for <a href='http://monkey-project.com'>Monkey Project</a>, it must cover the full specification and provide a flexible configuration based on Monkey indented configuration mode.
<br><br>
Some tasks involved are:
<br><br>
<ul>
   <li>Design configuration schema</li>
   <li>Load balancing between nodes</li>
   <li>Specific log writter for fastcgi requests/responses</li>
   <li>Configurable persistent TCP connections</li>
   <li>Non-blocking sockets (event-driven)</li>
   <li>Timeout Watcher</li>
</ul>
<li><b>Skills Required</b> High knowledge of C, Networking and Protocols</li>
</ul>
</p>
</div>

<div class="gsoc_idea">
<p>
<h1><a name="id5"><b>Monkey SDK (Software Development Kit)</b></a></h1>
<ul>
<li><b>Keys</b> UI, Python</li>
<li><b>Difficulty</b> <font class="medium">Medium</font></li>
<li><b>Description</b> <a href='http://monkey-project.com'>Monkey</a> is developed with embedded in mind, due it is potent API and flexible architecture, it fills perfect in any Linux based device, in short terms, is a very attractive software for embedded developers.<br><br>
In order to improve the developer experience, this project aims to create a <a href='http://en.wikipedia.org/wiki/Software_development_kit'>Software Development Kit (SDK)</a> for developers who looks for extend monkey and requires an easy way to debug, introspect the HTTP core internals and get resource usages, all this in a beautiful user interface.
<br><br>
The <a href='http://en.wikipedia.org/wiki/Software_development_kit'>SDK</a> components tools, must have/perform at least the following features:
<br><br>
<ul>
    <li><a href='http://pygtk.org'>PyGTK</a> User Interface</li>
    <li>Manage development environments of Monkey instances</li>
    <li>Check on fly properly plugins hooks declarations</li>
    <li>Meassure CPU, network and memory usage (some graphs would be good)</li>
    <li>Viewer of open file descriptors per worker</li>
    <li>Run unit test scripts (already available under qa/ directory)</li>
    <li>SDK Plugin: this component export Monkey internals to the SDK UI</li>
    <li>Integration with Cheetah interface</li>
    <li>Customized unit tests for developers</li>
    <li>Support web services creation through Duda</li>
</ul>

Remember that a SDK makes life easier, you are encourage to have <a href='http://funnymonkeysite.com/pictures/Happy_Monkey.jpg'>happy end-developers</a>.

<li><b>Skills Required</b> Required Medium knowledge of C and Python, GTK is a good to know but not mandatory </li>
</ul>
</p>
</div>

<div class="gsoc_idea">
<p>
<h1><a name="id6"><b>Benchmark / Resources usage</b></a></h1>
<ul>
<li><b>Keys</b> C, Performance, API</li>
<li><b>Difficulty</b> <font class="high">High</font></li>
<li><b>Description</b> One of <a href='http://monkey-project.com'>Monkey project</a> goals is performance, and optimize for embedded systems requires a continue measure and improvements. Actually exists many tools to measure software but for our case we need a specific set of tools to perform benchmark and analyze the resources usage.
<br><br>
This project requires to write a set of tools to cover the following topics:
<br><br>
<ul>
    <li>Measure global performance over specific architectures (mostly ARM) (based in a HTTP request unit)</li>
    <li><a href='http://en.wikipedia.org/wiki/Profiling_%28computer_programming%29'>Profiling</a> plugin: it gather timing stats from Monkey Core API calls, HTTP stage events
        and also plugin hooks for further analysis. It must generate report in normal text format as well for rrdtool.</li>
    <li>Resource usage: Analyze and report a different set of metrics based on: file descriptors (by type: file or socket), Memory usage by HTTP cycle, CPU cycles/jiffies, etc.</li>
    <li>Automated reports for deployments</li>
</ul>
<br>
Is good to mention that all memory allocations by Monkey are performed inside specific wrappers, so you can adjust the code and add conditional macros for compiling time to include the resource usage features, more details will be shared by the mentor.

<li><b>Skills Required</b> Good background in C</li>
</ul>
</p>
</div>

<div class="gsoc_idea">
<p>
<h1><a name="id7"><b>GIT Protocol Support</b></a></h1>
<ul>
<li><b>Keys</b> C, GIT</li>
<li><b>Difficulty</b> <font class="medium">Medium</font></li>
<li><b>Description</b> <a href='git-scm.com/'>Git</a> is a free and distributed version control system. This project aims to add Git HTTP support to Monkey web server so it can be used to export repositories over HTTP in a efficient manner.
<br><br>
<a href='http://git-scm.com'>Git</a> since it's version 1.6.6 implements a <a href='http://progit.org/2010/03/04/smart-http.html'>"Smart HTTP Transport"</a> over
<a href='http://manpages.ubuntu.com/manpages/lucid/man1/git-http-backend.1.html'>git-http-backend CGI</a>, the implementation works under a CGI context, that means common web servers requires to
<a href='http://linux.die.net/man/2/fork'>fork(2)</a> and <a href='http://linux.die.net/man/2/pipe'>pipe(2)</a> to make it work, even when using FastCGI it requires extra resources when high concurrency exists decreasing performance. The project aim to create a similar code of
<a href='http://manpages.ubuntu.com/manpages/lucid/man1/git-http-backend.1.html'>git-http-backend</a> to <a href='http://monkey-project.com'>Monkey</a> as a plugin/extension obtaining the following improvements: no forks required, no CGI context, asynchronous sockets, less overhead on server, etc. It must be configurable through configuration files.
<br><br>
The project also cover to perform different benchmarks comparing git-http-backend versus the integrated version in Monkey. We also expect to <b>benefit</b> many open source projects with this implementation. Are you ready ? ;)

<li><b>Skills Required</b> High knowledge of C, Basics of HTTP</li>
</ul>
</p>
</div>


<div class="gsoc_idea">
<p>
<h1><a name="id8"><b>WebSockets</b></a></h1>
<ul>
<li><b>Keys</b> protocols, http, C, events</li>
<li><b>Difficulty</b> <font class="high">High</font></li>
<li><b>Description</b> Websockets is a technology providing for bi-directional, full-duplex communications channels, over a single TCP socket. The goal of this project is to provide full support of Websockets specification to Monkey through the plugin interface.
<br><br>
This is a very interesting and potent protocol that works on top of HTTP, its considered a 'rich' feature due to it's low resources usage.
<br><br>
Some tasks for this project are (but not restricted to):
<br><br>
<ul>
    <li>Implement websocket protocol</li>
    <li>Design configuration schema at global and vhost levels</li>
    <li>Meassure communication timmings and delays</li>
    <li>Analyze resources usage</li>
    <li>Collect and export statistics through web or command line interface</li>
    <li>Create websocket broadcaster application</li>
    <li>Document the code and create How To's</li>
</ul>
<br>
Is required that you have a basic knowledge of HTTP and a good background in C, having experience with event-driven sockets is a plus.

<li><b>Skills Required</b> High knowledge of C, Basics of HTTP</li>
</ul>
</p>
</div>


<div class="gsoc_idea">
<p>
<h1><a name="id9"><b>Lib Monkey</b></a></h1>
<ul>
<li><b>Keys</b> C</li>
<li><b>Difficulty</b> <font class="high">High</font></li>
<li><b>Description</b> <a href='http://monkey-project.com'>Monkey</a> core is a fully feature HTTP server with extensions support through it APIs. The idea of this project is to create an alternative building system to adapt <a href='http://monkey-project.com'>Monkey</a> and convert it in a <a href='http://en.wikipedia.org/wiki/Library_%28computing%29'>shared library</a> instead of a standalone executable, so it can be used by third party programs as any library is used.
<br><br>
The project cover at least the following tasks:
<br><br>
<ul>
    <li>Create a <a href='http://en.wikipedia.org/wiki/Library_%28computing%29'>shared library</a> instead of a executable binary file</li>
    <li>Design and create the library API</li>
    <li>The API should be able to setup everything as it's done in executable mode</li>
    <li>Document the library API and create examples of it's usage</li>
    <li>Expose HTTP event hooks so the developer can define specific behaviors</li>
    <li>Adapt <a href='http://www.debian.org/distrib/packages'>debian</a> builder system to package the library so we can distribute it :)</li>
</ul>

<li><b>Skills Required</b> High knowledge of C, Basics of HTTP</li>
</ul>
</p>
</div>


<div class="gsoc_idea">
<p>
<h1><a name="id10"><b>Lua Integration</b></a></h1>
<ul>
<li><b>Keys</b> C, Lua</li>
<li><b>Difficulty</b> <font class="medium">Medium</font></li>
<li><b>Description</b> <a href="http://www.lua.org">Lua</a> is an interpreted programming language that can be embedded easily in any program, it can be merge in C programs without issues. The idea of this project is to extend Monkey to add Lua support, so then Lua scripts can be executed to process and render responses for HTTP requests.
<br><br>
The project cover at least the following tasks:
<br><br>
<ul>
   <li>Create a Monkey plugin which handle the requests for resources written in Lua</li>
   <li>Define an API for the Lua side and what variables and functions can be used by them</li>
   <li>Evaluate and port an existing Lua-based web framework, e.g Lua Web Tools
       <a href="http://code.google.com/p/lua-web-tools">http://code.google.com/p/lua-web-tools</a></li>
</ul>
<li><b>Skills Required</b> High knowledge of C, Basic Lua Scripting is desirable</li>
</ul>
</p>
</div>

<div class="gsoc_idea">
<p>
<h1><a name="id10"><b>KConfig build system style</b></a></h1>
<ul>
<li><b>Keys</b> Kernel Menuconfig, ncurses</li>
<li><b>Difficulty</b> <font class="medium">Medium</font></li>
<li><b>Description</b> Monkey uses a customized and compatible 'configure' script to set the flags and options before the build process. As we are hitting many devices and different Linux system, we need
a friendly configuration system to save states of different build setups. We are proposing to implement the same configurator tool that Linux Kernel uses: KConfig.

The project cover at least the following tasks:
<br><br>
<ul>
   <li>Design a configuration spec for Monkey features</li>
   <li>Handle platform specifics</li>
   <li>Support multiple configuration files</li>
   <li>Handle built in plugins</li>
   <li>Handle Duda web services</li>
</ul>
<li><b>Skills Required</b> Compiling Linux Kernel experience </li>
</ul>
</p>
</div>

</div>
