<h1>Google Summer of Code 2013: Project Ideas</h1>
<div class="gsoc_menu">
	<p>
	<?=$html->link('GSoC Main', array('controller' => 'gsoc2013', 'action' => 'index'));?>
	&nbsp;&nbsp;
	<?=$html->link('Project Ideas', array('controller' => 'gsoc2013', 'action' => 'ideas'));?>
	&nbsp;&nbsp;
	<?=$html->link('Students Template', array('controller' => 'gsoc2013', 'action' => 'template'));?>
	</p>
</div>
<p>
        <span class="label label-warning">Attention!</span>
        Our organization is current applying to be part of GSoC 2013. We are NOT an accepted organization yet.
</p>
<br>

<h2>Project Ideas</h2>

<div class="row-fluid">
   <div class="span4">
      <?=$html->image('gsoc2013.png');?>
   </div>
   <div class="span8">
   <p>
	In Monkey HTTP Daemon Project, we have defined our most highest priorities, the ideas proposed here are not exclusive and they could
	be taken as a base for your proposal, you are encouraged to expand them or to propose your own ideas.
   </p>
   <p>
        Feel free to contact us to discuss them, reach us through our
                <?=$html->link('mailing list', 'http://lists.monkey-project.com/listinfo/monkey');?>, we want to hear about you!
   </p>
   </div>
</div>

<br><br>
<div>
<p>
<h3><a name="id1">SPDY protocol support</a></h3>
<p>
<ul>
<li> <strong>Keys</strong> C, Networking, SPDY, events, API </li>
<li> <strong>Difficulty</strong> High</li>
<li> <strong>Description</strong>
      this project aims to extend the core behavior adding support for the <a href="http://dev.chromium.org/spdy/">SPDY protocol</a>. Even Monkey
      server is originally written for HTTP, we aim to extend to new protocols as far they improve performance between the communication between clients and servers.
  <br/><br/>
  <p>
      The target version is SPDY v3, and it must be written from scratch, the only external dependencies allowed are libc and pthreads. Merging this changes into Monkey
      source code requires to take in count the following technical challenges:
  </p>
    <ul>
      <li>
        Monkey is a small event-driven core extendable through plugins. The HTTP parser and processor is currently part of the core, it must be moved to a logical layer
        to allow the inclusion of SPDY support. At the end HTTP and SPDY protocols will be static plugins linked at compile time
      </li>
      <li>
        The SPDY implementation must be based in an event-driven networking mechanism, it must handle file descriptors events such as: read, write, close, timeout and error.
      </li>
      <li>
        Monkey architecture uses a lock-free mechanism when working through different workers (POSIX threads), the implementation must be lock free avoiding the usage of mutexes
        on runtime.
      </li>
    </ul>

    <br/>
  <p>
    This project involve the following tasks but NOT restricted to:
    <ul>
      <li>Create logical layer for HTTP, this separation will allow the inclusion of new protocols.</li>
      <li>Create a standalone SPDY server. It must be very basic mostly to handle the protocol requirements, it will only allow to work with a few multiple connections same time.</li>
      <li>Merge SPDY base code into Monkey using a logical layer as was done for HTTP previously</li>
      <li>Adapt configuration schema to make Monkey choose a specific protocol</li>
      <li>Improve the build system to make optional the inclusion of HTTP or SPDY</li>
      <li>Extend the quality assurance (QA) framework to perform protocol tests over the SPDY implementation made.</li>
    </ul>
  </p>


</li>
</ul>


</p>

<br/>
<div>
<h3><a name="id2">URI Locations and Handlers</a></h3>
<p>
<ul>
<li> <strong>Keys</strong> C, Networking</li>
<li> <strong>Difficulty</strong> High</li>
<li> <strong>Description</strong>
the Monkey core expose a friendly API for plugins creation and for hence extend the server features. The HTTP cycle is split into stages, the STAGE_30 behave like a content handler, so every time a request hits this stage, the plugins handler pass this request to every plugin hooked on that stage, on that moment every plugin determinate if it should manage the request (own it) or just pass. The problem with this design, is that for a simple connection it can pass around each loaded plugin generating overhead. Do not exist a way to instruct the server from a configuration point of view to say which plugin should manage which request.

<br/><br/>
This project focus in a solution to the problem described. A new core functionality is proposed to solve this implementing a mechanism to assign type of requests based in URI Location to specific plugins handlers based in configuration. On this way the plugins are not longer in charge to determinate if they should manage the requests or not, everything is handled from the configuration plus reducing the server overhead in the plugin handlers in an order from O(n) to O(1).
<br/><br/>
<p>
Some tasks involved are (but not restricted to):
</p>
<ul>
  <li>Design a new configuration schema for plugins based on STAGE_30</li>
  <li>Create a test-case plugin that hooks on STAGE_30 and works in the new design mechanism</li>
  <li>Adapt the plugins handler to support the new model</li>
  <li>Do performance benchmarks so we can realize how the new design is behaving</li>
     <li>Migrate all base plugins to this new model</li>
</ul>
</div>

<br/>
<div>
<h3><a name="id3">Proxy Reverse</a></h3>
<p>
<ul>
<li> <strong>Keys</strong> C, Networking, Events</li>
<li> <strong>Difficulty</strong> High</li>
<li> <strong>Description</strong>
In a HTTP context, a proxy reverse is a server feature that allow to redirect incoming connections to backend servers. This project aims to develop a proxy-reverse plugin using the Monkey API. The plugin must understand redirection rules based in a new configuration file and schema to be designed, besides redirection it must support smart connections balancing algorithms that uses as rules and criteria the following entries: workers load, URI type and Virtual Host.
<br/><br/>
<p>
An important security aspect to take in consideration when doing the implementation, is that new connections should not be redirected without perform protocol parsing and validations first. As well for large requests it must be able to queue the received requests and handle the asynchronous events properly, non-blocking is a must.
</p>
<p>
Some tasks involved are (but not restricted to):
</p>
<ul>
  <li>Design a new configuration schema to define proxy reverse rules</li>
  <li>Make the plugin read the configuration and setup internal structures</li>
  <li>Start proxying back connection balancing</li>
</ul>
</div>


<br/>
<div>
<h3><a name="id4">Add MySQL and PostgreSQL extensions to Duda I/O</a></h3>
<p>
<ul>
<li> <strong>Keys</strong> C, Networking, MySQL, PostgreSQL </li>
<li> <strong>Difficulty</strong> High</li>
<li> <strong>Description</strong>
the web services framework Duda I/O already support the following databases extensions: Redis, Memcache and SQLite. In order to scale the database support and scope of the framework this project aims to implement extensions (packages) to incorporate native C API to connect to MySQL/MariaDB and PostgreSQL relational databases.
<br/><br/>
<p>
A Duda package is an extension loaded by the web service on-demand, talking about databases, the package expose generic callbacks that works in asynchronous mode to perform remote operations for pushing and query data. These packages can depend of third party libraries that understand the MySQL/MariaDB and PostgreSQL protocols.
</p>
<p>
One of the technical difficulties to face is to handle the asynchronous events properly, this depends of a good understanding of database libraries APIs and evaluate which one of them suits better for the project. The implementation must be fault tolerant and be able to add debugging methods to be used through the web service console.
</p>
<p>
Some tasks involved are (but not restricted to):
</p>
<ul>
  <li>Evaluate MySQL/MariaDB C libraries available. They must be fully supported by their core developers and works properly in asyncrhonous mode.</li>
  <li>Implement a basic Duda package and web service to understand how they interact each other</li>
  <li>Create a basic web service using the Redis Duda API to see how the callbacks are related to the events</li>
  <li>Implement the MySQL/MariaDB package with dynamic linking of the chosen library</li>
  <li>Create a demo web service that uses MySQL/MariaDB package to insert and query data</li>
  <li>Implement the PostgreSQL package with dynamic linking of the chosen library</li>
  <li>Create a demo web service that uses PostgreSQL packafe to insert and query data</li>
  <li>Create documentation articles type 'How To' explaining how to create web services using the packages in question</li>
</ul>
</div>


<br/>
<div>
<h3><a name="id5">Caching Filesystem</a></h3>
<p>
<ul>
<li> <strong>Keys</strong> C, Algorithms, Memory </li>
<li> <strong>Difficulty</strong> High</li>
<li> <strong>Description</strong>
most of web servers around implements different caching mechanisms and we can see that the logic implementation is hard coded together with the server core. This common scenario expose some limitations from a system administrator point of view: the cache size cannot be changed on fly, its not possible to query the cached data, cannot perform delete operations based on dates, etc.
<br/><br/>
<p>
In order to solve the problems described and propose an agnostic solution, this project aims to contribute in the implementation of a virtual (caching) filesystem based in FUSE. The main goal is to allow to mount a virtual filesystem which re-map an existent directory content, so the web server configures its virtual host document root to this new mount point. Having this virtual file system between the web server document root and the target file system, allows to add a cache layer that can expose an agnostic mechanism to handle cache sizes and collect stats that helps to optimize for different environments and loads.
</p>

<p>
This project will not only benefit Monkey, it will do for all other Linux based web servers and optionally any user-space applications that requires a fast and extendable cache implementation. Please refer to the following diagram of the architecture:

  FIXME
</p>


<p>
Some tasks involved are (but not restricted to):
</p>
<ul>
    <li>FIXME</li>
</ul>
refs: For more details here: ​https://github.com/edsiper/monkey-fs
</div>



<br/>
<div>
<h3><a name="id6">Port Monkey stack to OSX and cross compiling environment</a></h3>
<p>
<ul>
<li> <strong>Keys</strong> Linux, OSX, C, Make, Toolchains </li>
<li> <strong>Difficulty</strong> High</li>
<li> <strong>Description</strong>
Our software stack is intentionally Linux dependent and for hence some system calls dependencies exists. Nowadays OSX is widely used in the desktop and is being one of the favorite development environment, so even we continue our Linux focus we will port our stack to OSX for development purposes.
<br/><br/>

<p>
This project aims to port the complete Monkey stack (including Duda) to OSX maintaining C as the primary language. We look this port just from a development perspective, so OSX users can develop Monkey extensions or Duda web services in their native environment and perform direct deployments in the target Linux hosts.
</p>

<p>Some technical challenges includes</p>
<ul>
  <li>Build system must allow to choose between Linux and OSX</li>
  <li>Implement a polling layer that allow to hook to the specific operating system polling mechanism, a Monkey compiled on Linux must use epoll(2) and the same code compiled
    on OSX must use kqueue(2). The core it self is not aware about what is being used, instead it only use a polling layer that works different in background.</li>
  <li>The abstract polling mechanism must allow to query for events, handle events like: ready for reading, ready for writing, connection close, connection error, connection
    timeout. As well it must support the sleep feature where a specific file descriptor can be turned off manually until is waked up again (without removing it from the list).</li>
  <li>Implement cross-compiling Bash or Python scripts that allows to use a cross tool to compile the core, extension and web services for a Linux host. It must also support full deployment of the same dev environment for Linux.</li>
</ul>
</div>


<br/>
<div>
<h3><a name="id7">Direct deployment of web services into Raspberry Pi</a></h3>
<p>
<ul>
<li> <strong>Keys</strong> Debian Packaging, Python, C</li>
<li> <strong>Difficulty</strong> High</li>
<li> <strong>Description</strong>
Our web services C framework can be deployed in any Linux flavor machine or device and Embedded Linux is our main goal. Due to the huge adoption of the Raspberry Pi and internal interest shared about Monkey stack, this project aims to make life easier for who uses the stack for the Raspberry Pi board.
<br/><br/>

<p>
This project aims to extend the development environment capabilities in two main areas:
</p>
<ul>
  <li>Add RPI cross-compiling support to Duda Client Manager for web services based in Duda I/O</li>
  <li>Add Debian auto-packaging support to Duda Client Manager so the web service can be packaged for any Debian/Ubuntu? Linux. It must also support cross -packafing for the RPI so the developer can deploy a web stack for a different architecture with one or two simple commands.</li>
</ul>
</div>


</div>


