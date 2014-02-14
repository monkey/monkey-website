<h1>Google Summer of Code 2014: Project Ideas</h1>
<div class="gsoc_menu">
	<p>
	<?=$html->link('GSoC Main', array('controller' => 'gsoc2014', 'action' => 'index'));?>
	&nbsp;&nbsp;
	<?=$html->link('Project Ideas', array('controller' => 'gsoc2014', 'action' => 'ideas'));?>
	&nbsp;&nbsp;
	<?=$html->link('Students Template', array('controller' => 'gsoc2014', 'action' => 'template'));?>
	</p>
</div>

<br>

<h2>Project Ideas</h2>

<div class="row-fluid">
   <div class="span4">
      <?=$html->image('gsoc2014.png');?>
   </div>
   <div class="span8">
     <p>
       In <a href="http://monkey-project.com">Monkey Project</a> we have defined our most highest priorities, the ideas proposed here are not exclusive and they could
       be taken as a base for your proposal, you are encouraged to expand them or to propose your own ideas. Take part on this GSoC is not just about coding, it's also
       about be part of the community and learn how to get involved, your proposal is your first step, write a good opener!.
   </p>
   <p>
        Feel free to contact us to discuss them, reach us through our
        <?=$html->link('mailing list', 'http://lists.monkey-project.com/listinfo/monkey');?>, we want to hear about you!
   </p>
   </div>
</div>

<br><br>

<!-- PROJECT IDEA -->
<div>
<p>
<h3><a name="id1">Memcached Plugin</a></h3>
<p>
<ul>
<li> <strong>Keys</strong> C, Memcache, Key-Value Store</li>
<li> <strong>Difficulty</strong>Medium</li>
<li> <strong>Description</strong>
  <p>
  <a href="http://memcached.org">Memcached</a> is an open source memory object caching system,
  or widely known as a Key-Value store. The main goal of this project is to create a
  <a href="http://monkey-project.com">Monkey</a> plugin that provides fixed REST
  interfaces that can connect to a Memcached Server and perform different operation to set new
  keys, retrieve or update values.
  </p>

  <p>
  The technical workflow of the implementation, starts by letting the plugin to read a configuration
  file based on Monkey configuration library schema, where it can load different Memcached instances
  and configure different settings for the networking behavior such as pooling connections, timeouts,
  API usage statistics, Virtual Host specifics, etc.
  </p>

  <p>
    Once the plugin reads and load the code to manage the configuration, it should set and map the
    URI's for data handling, a proposed structure (not mandatory) is as follow:
  </p>

  <code>
    URL: /instance_name/key_name
  </code>

  <br /><br />
  <p>
    where <i>instance_name</i> represent a Memcached server named in the plugin configuration file, and
    <i>key_name</i> the name of the target key affected. If the HTTP client perform a GET request, the server
    should query the Key on the server and return on the body response the key value. If the HTTP client
    uses a PUT request, it must contain also a body data that should be stored among the key. If the Key already
    exists on the server, it will be overridden by default. Also the DELETE method can be used to delete a Key
    from the server.
  </p>

  <p>
    An optional interface is proposed to gather statistics from the Memcached server, the structure is as follows:
  </p>
  <code>
    URL: /instance_name/stats
  </code>
  <br/><br/>

  <p>
    The output of the interface is a well formed text/plain with tables showing different server metrics, also the
    same information should be able to be retrieved but in JSON format when using the following interface:
  </p>

  <code>
    URL: /instance_name/stats_json
  </code>
  <br /><br />

  <p>
    The Memcached Plugin involve the following non-exclusive tasks:
  </p>
  <ul>
    <li>
      Design and map URL HTTP interfaces to access unique Memcached instances.
    </li>
    <li>
      Capabilities to read configuration files.
    </li>
    <li>
      Every Memcached instance configured in the plugin, must support to work
      under an exclusive Virtual Host context.
    </li>
    <li>
      All core interfaces to manipulate data are based on HTTP methods GET, PUT and DELETE.
    </li>
    <li>
      The implementation <b>must</b> be thread safe and lock free, under no circumstance a
      running thread may block.
    </li>
    <li>
      All queries and responses being processed with the Memcached server <b>must</b> work
      in asynchronous mode, that means that the plugin must hook to the Monkey events mechanism
      based on epoll(7).
    </li>
    <li>
      Besides the statistics that can be provided by the Memcached server, the plugin must support
      statistics about the plugin it self, such as number of connections, average response time.
    </li>
    <li>
      Load Balancing: In order to provide some load balancing capabilities, the Memcached instances can
      be grouped in the configuration so the plugin can balance the requests to them based on different
      algorithms such as Round-Robin, Least connections and First Alive.
    </li>
  </ul>
  <br/>
  <p>
    <span class="label label-info">Skills required</span> Medium level of C language, desired experience
    with some key value store as Memcached or Redis.
  </p>
</li>
</ul>
</p>
<br/>
<!-- END -->

<!-- PROJECT IDEA -->
<div>
<p>
<h3><a name="id2">SPDY Protocol (v3.1)</a></h3>
<p>
<ul>
<li> <strong>Keys</strong> C, Networking, SPDY, API </li>
<li> <strong>Difficulty</strong> High</li>
<li> <strong>Description</strong>
  <p>
    <a href="http://dev.chromium.org/spdy/">SPDY</a> is an open networking protocol developed by <a href="http://google.com">Google</a> for transporting web content, it's
    currently being used as the base for the draft of HTTP/2.0. <a href="http://monkey-project.com">Monkey</a> as most of Web Servers,
    it's based on the <a href="https://www.ietf.org/rfc/rfc2616.txt">HTTP/1.1 spec (RFC2616)</a>
    and this project aims to provide the required architecture changes to add SPDYv3 and HTTP/2.0 support into the Server core.
  </p>
  <p>
    There is a ongoing work on architecture changes on Monkey that allow to hook different protocol implementations, so the scope of this
    project should focus on understand the new architecture under development and start implementing SPDY (v3.1). The implementation
    of the protocol in question must be written from scratch, no third party libraries should be used. It's suggested to start writing a simple
    library that being hooked to an events interface such as epoll(7) could handle SPDY frames (unpacking and debug).
  </p>
  <p>
    It's important to consider that SPDY is a protocol that allows to multiplex packets and the communication could be bidirectional, so each
    routine associated to the socket events, should take care to validate, understand and interpret each incoming frame properly before to pass
    the control to the core HTTP server. More details about the interaction and each required step will be shared by the Project mentor.
  </p>

  <p>
    The SPDY project involve the following non-exclusive tasks:
    <ul>
      <li>Design a SPDY (server side) handler and implement the protocol basics.</li>
      <li>Create a standalone SPDY server. It must be very basic mostly to handle the protocol requirements, it will only allow to work
        with a few multiple connections same time.</li>
      <li>Merge SPDY base code into Monkey using a logical layer as was done for HTTP previously</li>
      <li>Adapt configuration schema to make Monkey choose a specific protocol</li>
      <li>Improve the build system to make optional the inclusion of HTTP or SPDY</li>
      <li>Extend the quality assurance (QA) framework to perform protocol tests over the SPDY implementation made.</li>
    </ul>
  </p>

  <p>
    <span class="label label-info">Skills required</span> High knowledge of C, etworking and be familiar with communication protocols.
  </p>

</li>
</ul>
</p>
<br/>
<!-- END -->

<!-- PROJECT IDEA -->
<div>
<p>
<h3><a name="id3">Lua Scripting Support</a></h3>
<p>
<ul>
<li> <strong>Keys</strong> C, Lua, Scripting, Performance, API </li>
<li> <strong>Difficulty</strong> Medium</li>
<li> <strong>Description</strong>
  <p>
  <a href="http://lua.org">Lua</a> is a powerful scripting and embeddable language, and on
  <a href="http://monkey-project.com">Monkey Project</a> (HTTP stack) and it's Web
  Services Framework <a href="http://duda.io">Duda I/O</a>, requires to add some scripting
  capabilities to perform different administrative tasks and also be able to hook
  callbacks for different HTTP events across the cycle. So <a href="http://lua.org">Lua</a>
  fits our needs.
  </p>

  <p>
  The implementation of this project starts with the creation of a Monkey Plugin capable
  to interpret Lua scripts for dynamic content generation. When running Lua scripts everything
  is must be done through Lua C API, it's <b>not</b> allowed to perform some fork(2) or exec(3)
  calls as performance is priority on our server stack. Also Lua over CGI/FastCGI is not allowed.
  </p>

  <p>
    The Monkey Lua Plugin involve the following non-exclusive tasks:
  </p>
  <ul>
    <li>
      Design and implement configuration mechnism to instruct the HTTP when to trigger the
      plugin. All rules must be applied to a Virtual Host context.
    </li>
    <li>
      The implementation must support Timeouts per configuration, a Lua script should not be running
      forever unless is explicit specified in the configuration file.
    </li>
    <li>
      Basic <i>Status Interface</i> to display plugin memory consumption and general resource usage.
    </li>
    <li>
      As the plugin will require Lua C library as a dependency, the plugin it's in an DISABLED
      state by default, it can only be enabled through configure script.
    </li>
    <li>
      Monkey core is an event-driven HTTP server, that means that any extension like this should <b>not</b>
      block any server thread, the plugin should hook to the core events interface as much as possible
      to distribute load across all requests assigned to the same thread. The mentor will give a detailed
      explanation about this behavior and guides to accomplish the goals.
    </li>
  </ul>

  <br>
  <p>
  As a second part of the project, is required to add <a href="http://lua.org">Lua</a> scripting
  support to our Web Services framework called <a href="http://duda.io">Duda I/O</a>. This last one
  is a Monkey extension that provide a whole environment to develop scalable web services on top
  of Monkey. So the <i>Lua + Duda I/O</i> implementation takes places creating a <i>Duda Package</i>.
  </p>

  <p>
    Duda Packages are external group of functionalities that developers using Duda stack can load
    on runtime to perform different tasks, some well known packages are: SQLite, Redis, Key Value Store,
    Websocket, JSON, etc. To get more details about how packages API looks like and how the code can be
    integrated, please refer to the following links:
  </p>

  <ul>
    <li>API Documentation: <a href="http://duda.io/api">http://duda.io/api</a></li>
    <li>Packages Sources:  <a href="https://github.com/monkey/duda/tree/master/packages">https://github.com/monkey/duda/tree/master/packages</a></li>
  </ul>
  <br>

  <p>
    The Lua Package involve the following non-exclusive tasks:
  </p>
  <ul>
    <li>Design and propose the API calls for the package.</li>
    <li>Each API call must be documented as is done for all Duda core, for more details please refer to the link provided above.</li>
    <li>On rendering a Lua script, the response should not block the worker thread, this is the same approach described in the
      Monkey Plugin requirement.</li>
    <li>Gather optional metrics about timings since a Request arrived until the Response was sent.</li>
    <li>Error handling, redirect to HTTP Client.</li>
  </ul>
  <br>

  <p>
    <span class="label label-info">Skills required</span> be familiar reading any API documentation, Medium level of C language and
    previous experience using some scripting language (as user).
  </p>
</li>
</ul>
</p>
<br/>
<!-- END -->


<!-- PROJECT IDEA -->
<div>
<p>
<h3><a name="id4">Raspberry Pi Dashboard</a></h3>
<p>
<ul>
<li> <strong>Keys</strong> C, GPIO, CPU, Javascript, AngularJS, HTML5</li>
<li> <strong>Difficulty</strong> Medium</li>
<li> <strong>Description</strong>
  <p>
    The <a href="http://www.raspberrypi.org/">Raspberry Pi</a> (RPI) is a handy ARM board that runs Linux,
    and for hence we distribute native Monkey packages for it. The goal of this project, is to take Monkey HTTP Server
    to the next step empowering RPI owners providing a default and built-in <i>Dashboard</i> for the RPI.
    This Dashboard will allow  to manage different Hardware features such as GPIO and able to retrieve statuses
    and resource metrics.
  </p>

  <p>
  The fist step on this project, is to design the HTTP REST interfaces that will provide system/board information and
  perform specific actions on it. These interfaces are the core of project and they must be implemented using the
  <a href="http://monkey-project.com">Monkey</a> framework called <a href="http://duda.io">Duda I/O</a>, all of them
  are made in C language. Once the REST API is in place, the next step is to develop a Javascript library that can offer
  to third party people, the ability to communicate to the RPI using this interface. Note that security it's a top
  priority here.
  </p>

  <p>
    Finally when the REST interfaces and the Javascript library can communicate each other, the last phase is to
    make a Web Graphical Interface (GUI) based on <a href="http://angularjs.org">AngularJS</a> and
    <a href="http://getbootstrap.com">Twitter Bootstrap</a>. This GUI will have the ability to take the most of the
    Javascript library and be able to handle every aspect of the RPI and features that the Operating System offers.
    The project architecture is as follows:
  </p>

  <p>
    Note: most of system and hardware information must be obtained through the procfs and sysfs.
  </p>

  <p>
    Raspberry Pi Dashboard involve the following non-exclusive tasks:
  </p>
  <ul>
    <li>
      Design and implement REST interfaces in C language using Duda I/O stack.
    </li>
    <li>
      REST interfaces must be thread safe and do not use any mutual exlusion or locking mechanism.
    </li>
    <li>
      Implement Javascript library that follow all REST interfaces.
    </li>
    <li>
      Write a Web GUI using AngularJS and Twitter Bootstrap that uses the Javascript library to
      manage the device.
    </li>
    <li>
      The Dashboard should implement different graphics to describe system resources such as CPU,
      Memory, Storage, Network, etc.
    </li>
  </ul>
  <br />

  <p>
    Note: when starting this project is <b>not</b> required to have a Raspberry Pi, but it's suggested
    to get one after the third week of work, so the student should consider to obtain a RPI model B
    for further development and testing.
  </p>
  <br>
  <p>
    <span class="label label-info">Skills required</span> HTTP, Medium knowledge of C and experience with Javascript.
  </p>
</li>
</ul>
</p>
<br/>
<!-- END -->



<!-- PROJECT IDEA -->
<div>
<p>
<h3><a name="id5">Monkey Shared Library with Python bindings</a></h3>
<p>
<ul>
<li> <strong>Keys</strong> C, Python, API, Shared Library</li>
<li> <strong>Difficulty</strong> Medium</li>
<li> <strong>Description</strong>
  <p>
  <a href="http://monkey-project.com">Monkey</a> already have the option to be build as a
  shared library so it can be used as by third party applications that requires an HTTP stack
  on it. The C library is functional and well documented on man pages. Now the goal of this
  project is to review the API interface, look for performance improvements and extend it
  to expose specific Monkey features such as memory statistics and CPU profiling per callback.
  </p>
  <p>
  As a second part of the project, is required to add Python bindings to the library so
  Python applications can use Monkey stack to serve HTTP. The goal is to expose the same API
  from the shared library but in Python with well formed classes and methods. Note that documentation
  for every class and method must be included.
  </p>

  <p>
  The success of a shared library besides it's code and API documentation, is the number of simple
  and good examples describing escenarios where it can be used. So all examples and test cases
  created should be compatible with Python 2.6 and up. As a reference of the available documentation
  for the actual API please refer to the following links:
  </p>

  <ul>
    <li>API Manpages: <a href="https://github.com/monkey/monkey/tree/master/man">https://github.com/monkey/monkey/tree/master/man</a></li>
    <li>Library examples:
      <a href="https://github.com/monkey/monkey/tree/master/tests/lib">https://github.com/monkey/monkey/tree/master/tests/lib</a>
    </li>
  </ul>
  <br />

  <p>
    The Monkey Shared Library with Python bindings project involve the following non-exclusive tasks:
  </p>
  <ul>
    <li>
      Read API documentation, understand the scope of every call and write step by step examples to
      get knowledge about it usage.
    </li>
    <li>
      Perform profiling tests to every hook and gather metrics about resources usage.
    </li>
    <li>
      Extend the API interface to expose different performance metrics to the caller.
    </li>
    <li>
      Create Python bindings for the C library.
    </li>
    <li>
      All bindings must be fully documented.
    </li>
    <li>
      For each Python interface of the C library, create an example program describing how to use it.
    </li>
  </ul>

  <br>
  <p>
    <span class="label label-info">Skills required</span> Medium level of C language, be familiar with Python, have some
    knowledge about Linux profiling tools.
  </p>
</li>
</ul>
</p>
<br/>
<!-- END -->

<!-- PROJECT IDEA -->
<div>
<p>
<h3><a name="id6">Advanced Caching Plugin</a></h3>
<p>
<ul>
<li> <strong>Keys</strong> C, Caching, Lock-free</li>
<li> <strong>Difficulty</strong> High</li>
<li> <strong>Description</strong>
  <p>
  In some environments with a high load, HTTP servers may need to serve the same information over and over
  in a short period of time, mostly measured in milliseconds. This project aims to add an advanced caching
  plugin to the HTTP core capable to save (cache) the outgoing content and keep it in memory for a short period
  of time until it expire under a specific condition.
  </p>

  <p>
  This project aims to focus in an advanced caching mechanism for the HTTP core and it requires to pay special
  attention to some technical difficulties that need to be addressed:
  </p>
  <ul>
    <li>It must be lock free: no locking or mutual exclusion is allowed.</li>
    <li>The HTTP server works with a fixed number of running threads, so when a connection arrives it's
    balanced to the least loaded worker. That means that having an unique Caching area could generate
    some race conditions and this is not expected as the implementation should be lock-free. Caching
    areas per worker may be analyzed.</li>
    <li>
      Cache lookups should be O(1), so a hashing mechanism is required and to reduce the number of possible
      collisions, the hash table should support chaining.
    </li>
    <li>
      The plugin must be compatible on x86 and x86_64 architectures (ARM processors included). This is mentioned
      because some compiler features depends on Hardware specifics such as atomic operations, and sometimes
      they are are not available on all machines.
    </li>
  </ul>
  <br />

  <p>
    Another required feature for this project, is to provide a simple web interface to keep track of
    the plugin statistics and also to perform purge operations on demand. The web interface must support
    the following features:
  </p>

  <ul>
    <li>Counter for cache hits and misses</li>
    <li>Memory usage per Cache area (at thread level depending of it implementation)</li>
    <li>History record for a fixed number of entries, this can be used to generate live graphics</li>
    <li>On Cache views, a link or button to force a Cache flush (purge)</li>
    <li>The GUI should provide a special interface to get all statistics formatted in a JSON output</li>
  </ul>
  <br>
  <p>
    Note: The GUI must be developed using <a hreg="http://getbootstrap.com">Twitter Bootstrap</a> and
    <a href="http://angularjs.org">AngularJS</a>.
  </p>
  <p>
    <span class="label label-info">Skills required</span> Medium level of C language, good understanding
    of Linux system calls  and algorithms.
  </p>
</li>
</ul>
</p>
<br/>
<!-- END -->


