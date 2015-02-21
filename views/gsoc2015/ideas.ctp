<h1>Google Summer of Code 2015: Project Ideas</h1>
<div class="gsoc_menu">
	<p>
	<?=$html->link('GSoC Home', array('controller' => 'gsoc2015', 'action' => 'index'));?>
	&nbsp;&nbsp;
        <?=$html->link('Project Ideas', array('controller' => 'gsoc2015', 'action' => 'ideas'));?>
	&nbsp;&nbsp;
	<?=$html->link('Getting Started', array('controller' => 'gsoc2015', 'action' => 'getting_started'));?>
	&nbsp;&nbsp;
	<?=$html->link('Students Template', array('controller' => 'gsoc2015', 'action' => 'template'));?>
	</p>
</div>

<br>

<h2>Project Ideas</h2>

<div class="row-fluid">
   <div class="span4">
      <?=$html->image('gsoc2015.png');?>
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
<h3><a name="id1">Logger: syslog, logstash & fluentd</a></h3>
<p>
<ul>
<li> <strong>Keys</strong> C, Networking, Protocols, Data Collection</li>
<li> <strong>Difficulty</strong>Medium</li>
<li> <strong>Description</strong>
  <p>
    The current log writer plugin (aka Logger), support only to register access and error events into
    the file system. The plugin already perform buffering through a worker thread where it collect
    data from other workers. The goal of this project is to expands it capabilities and implement
    compatible logging mechanisms requested by our community and users.
  </p>

  <p>
    The first implementation, is to expand the log writer to start supporting the <b>Syslog</b> protocol, meaning
    that it will be able to talk to a local syslogd service or connect to a different one through the
    network. For access events the registers will be exposed as simple information stuff and for errors
    on resources or the core server as exceptions.
  </p>
  <p>
    The <b>Syslog</b> feature must support different parameters that can be set through the configuration file, mostly it
    needs to define how it will connect to the syslog service and how the buffering and it limits will be set.
  </p>
  <p>
    After the  implementation, the next step is to add support for the <b>Logstash</b> log collector, it have it own
    protocol but also support custom formats. It will be a research work from the student and the assigned mentor
    which protocol will be used to push data to the service. The implementation needs to support local unix sockets
    and common TCP for when connecting to third party instances.
  </p>
  <p>
    Finally, the Logger plugin will support <a href="http://fluentd.org">Fluentd</a>. <a href="http://fluentd.org">Fluentd</a>
    is a very attractive log collector solution and suits
    better for our needs to it performance and data-loss behavior. For this purpose the Logger plugin will transform
    the log registers into MsgPack messages. MsgPack is a binary JSON implementation and the C library is available,
    there is no need to write the proocol implementation, just use it. The configuration schema needs to support
    network setup and string tags associated which are mandatory for Fluentd to identify which info should match and
    process.
  </p>
  <br /><br />
  <p>
    All 3 features described, needs to be optional and build on demand, we take care a lot about software dependencies
    so you must be carefull when choosing the right ones.
  </p>
  <p>
    <span class="label label-info">Skills required</span> Medium level of C language, networking and desired experience
    with shared libraries.
  </p>
</li>
</ul>
</p>
<br/>
<!-- END -->

<!-- PROJECT IDEA -->
<div>
<p>
<h3><a name="id1">Port to Real Time Operating System</a></h3>
<p>
<ul>
<li> <strong>Keys</strong> C, Core, Networking, Real Time, Syscalls</li>
<li> <strong>Difficulty</strong>High</li>
<li> <strong>Description</strong>
  <p>
    Starting from Monkey v1.6, it's not longer restricted to Linux, it also start supporting OSX. From
    now we are planning to add formal support for Real Time Operating Systems, this is a challenging
    project but feasible.
  </p>
  <p>
    In order to accomplish this project, there are 3 important topics where the student needs to work on and
    each one involve a lot of research and skills to undertands the Monkey code base:

    <li>
      <b>Event loop</b>: to start supporting other operating systems, Monkey abstracts the events loop handler with
      different interfaces, as an example for Linux it uses the epoll(2) mechanism and for OSX system it does it
      by using kqueue(2). To understand how this is accomplish, please refer to the <i>src/mk_event_*.c</i> files
      family. On compile time based on the target system the right handler will be used. But the missing part in
      our event loop is to support the very old-fashioned interface based on select(2). So on this first part you
      aim to expand Monkey core features to use an event loop handler based on select(2). As the others, it must
      support events for read, write and exceptions, as well be able to implement a signaling mechanism with the
      event loop in the active thread and timeouts.
    </li>

    <li>
      <b>One instance mode</b>: most of Real Time Operating systems do not implement common interfaces such as
      fork(2) or threading, instead let the primary code behave as the only process running in the system. The student
      aim to implement a <i>One instance mode</i> at compile time where <b>no</b> threading is required and features
      to run in background are disabled. This part requires good understanding of
      <a href="http://monkey-project.com">Monkey</a> code base and previous research about how the most prominent
      Real Time Operating system works on this context. The goal is to be flexible as possible to fit on all options.
    </li>

    <li>
      <b>Static Linking with Duda I/O</b>: the last version of <a href="http://monkey-project.com">Monkey</a> already
      support static linking for the plugins, the base architecture on how each plugin hooks to the core have changed.
      But on the <a href="http://duda.io">Duda I/O</a> plugin there is a need to adapt the core API to this new model
      and also let the same stack to build web services in static mode, at the moment it only support shared mode as
      Monkey did in the past for it plugins.
    </li>
  </p>
  <p>
    This is a really interesting project as it involves to engage other targets and architectures where we never were
    before, as said, the project have some complexity and requires a really committed student open to learn and perform
    deep analysis.
  </p>
  <br /><br />
  <p>
    <span class="label label-info">Skills required</span> High level of C language, Embedded, Real Time concepts and
    static/dynamic linking understanding.
  </p>
</li>
</ul>
</p>
<br/>
<!-- END -->

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
<h3><a name="id1">iOS Support</a></h3>
<p>
<ul>
<li> <strong>Keys</strong> C, Core, OSX, API</li>
<li> <strong>Difficulty</strong>High</li>
<li> <strong>Description</strong>
  <p>
    As said before, the new <a href="http://monkey-project.com">Monkey</a> already support OSX and can be
    build easily. Now the next step is to add support for iOS, meaning expose certain features where iOS
    developers can use Monkey service in background as a default HTTP stack.
  </p>
  <p>
    In order to accomplish this project, the student requires to have access full time to an Apple machine
    and little experience using tools such as the CLang compiler and XCode. The scope of the project requires
    to implement the folllowing features:

    <li>
      <b>JSON Configuration Scheme</b>: From a developer perspective when using Monkey on an <b>iOS</b> application,
      the configuration of the service needs to be easy to accomplish, we cannot longer depends on configuration files
      so we propose to add certain configuration API where it can listen for listen parameters through an only JSON
      document
    </li>

    <li>
      <b>One instance mode</b>: most of Real Time Operating systems do not implement common interfaces such as
      fork(2) or threading, instead let the primary code behave as the only process running in the system. The student
      aim to implement a <i>One instance mode</i> at compile time where <b>no</b> threading is required and features
      to run in background are disabled. This part requires good understanding of
      <a href="http://monkey-project.com">Monkey</a> code base and previous research about how the most prominent
      Real Time Operating system works on this context. The goal is to be flexible as possible to fit on all options.
    </li>

    <li>
      <b>Static Linking with Duda I/O</b>: the last version of <a href="http://monkey-project.com">Monkey</a> already
      support static linking for the plugins, the base architecture on how each plugin hooks to the core have changed.
      But on the <a href="http://duda.io">Duda I/O</a> plugin there is a need to adapt the core API to this new model
      and also let the same stack to build web services in static mode, at the moment it only support shared mode as
      Monkey did in the past for it plugins.
    </li>
  </p>
  <p>
    Before to apply to this project, we encourage you to talk to the mentors team about relevant details.
  </p>
  <br /><br />
  <p>
    <span class="label label-info">Skills required</span> High level of C language, Embedded, Real Time concepts and
    static/dynamic linking understanding.
  </p>
</li>
</ul>
</p>
<br/>
<!-- END -->
