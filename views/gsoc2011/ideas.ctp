<div class="gsoc">

<h1>Google Summer of Code 2011 :: Project Ideas</h1>
<div class="gsoc_menu">
	<p>
	<?=$html->link('GSoC Main', array('controller' => 'gsoc2011', 'action' => 'index'));?>
	&nbsp;&nbsp;
	<?=$html->link('Project Ideas', array('controller' => 'gsoc2011', 'action' => 'ideas'));?>
	&nbsp;&nbsp;
	<?=$html->link('Students Template', array('controller' => 'gsoc2011', 'action' => 'template'));?>
	</p>
</div>

<?=$html->image('gsoc2011_small.png');?>
<p>
	In Monkey HTTP Daemon Project, we have defined our most highest priorities, the ideas proposed here are not exclusive and they could
	be taken as a base for your proposal, you are encouraged to expand them or to propose your own ideas. Feel free to contact us to 
	discuss them, you can reach us in our 
	<?=$html->link('mailing list', 'http://lists.monkey-project.com/listinfo/monkey');?>
	or through the e-mail address <font class="email">gsoc2011@monkey-project.com</font>. We want to hear about you!
</p>
<br><br>
<h2>Project Ideas</h2>
    <li><a href="#id1">Android HTTP SERVICE/LAYER</a></li>                
    <li><a href="#id2">Websockets</a></li>
    <li><a href="#id3">Monkey SDK (Software Development Kit)</a></li>
    <li><a href="#id4">WebCam Streaming</a></li>
    <li><a href="#id5">FastCGI</a></li>
    <li><a href="#id6">Bandwidth Throttling</a></li>
<br>
<div class="gsoc_idea">
<p>
<h1><a name="id1"><b>1) ANDROID HTTP SERVICE/LAYER</b></a></h1>
<ul>
<li><b>Keys</b> Android, HTTP, C, Java, API
<li><b>Difficulty</b> <font class='high'>High</font>
<li><b>Description</b> <a href="http://www.android.com/">Android Platform</a> in their software stack, expose different objects to
perform networking tasks. Currently if one application wants to create their own <b>web service</b>, requires to use the
<a href="http://developer.android.com/reference/org/apache/http/protocol/HttpService.html">HttpService</a> class. That HTTP processor
(provided by the current HttpService class) cannot handle multiple applications requestors under the same context, each application
requires to startup a new HTTP processor for it needs, they cannot share the service among different applications.
<br><br>
To solve the issue mentioned, HTTP Service and Layer proposed based on <b>Monkey</b>, aims to expose a shared component to pull up 
web services from applications without impact the OS performance, working at three different levels: web service manager, web service proxy 
and web service layer, for more details, please refer to the following presentation made for this project:
<center>
<div style="width:425px" id="__ss_7155127"><strong style="display:block;margin:12px 0 4px"><a href="http://www.slideshare.net/edsiper/android-http-service" title="Android HTTP Service">Android HTTP Service</a></strong><object id="__sse7155127" width="425" height="355"><param name="movie" value="http://static.slidesharecdn.com/swf/ssplayer2.swf?doc=androidhttpservice-110304201755-phpapp02&stripped_title=android-http-service&userName=edsiper" /><param name="allowFullScreen" value="true"/><param name="allowScriptAccess" value="always"/><embed name="__sse7155127" src="http://static.slidesharecdn.com/swf/ssplayer2.swf?doc=androidhttpservice-110304201755-phpapp02&stripped_title=android-http-service&userName=edsiper" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="425" height="355"></embed></object><div style="padding:5px 0 12px">View more <a href="http://www.slideshare.net/">presentations</a> from <a href="http://www.slideshare.net/edsiper">edsiper</a>.</div></div>
</center>
<br><br>
Monkey is currently ported to Android, so the project it self is to create the low level interfaces to expose the web service manager, the web servive proxy and the high level web service layer
for the high level applications. Some tasks involved are (but not restricted to): 
<br><br>
<ul>
    <li>Extend Monkey to support a <i>web service</i> listener/manager</li>
    <li>Extend Monkey to support a <i>web service proxy</i> balancer</li>
    <li>Implement Android HTTP service layer connected to previous components mentioned</li>
    <li>Design configuration schema at global and vhost levels</li>
    <li>Create and Android application example that uses the <i>web service</i> feature implemented</li>
    <li>Create a bundle to distribute the HTTP layer stack (all components)</li>
    <li>Full documentation for <i>web service</i> API and code internals</li>
</ul>
<br>
We aim to empower every Android platform with a strong and lightweight web services interface, we hope your proposal also can improve the ours :).
<br><br>
<li><b>Skills Required</b> High knowledge of C ; Medium knowledge of Java
<li><b>Mentors</b> Eduardo Silva or Jonathan Gonzalez
</ul>
</p>
</div>

<div class="gsoc_idea">
<p>
<h1><a name="id2"><b>2) WEBSOCKETS</b></a></h1>
<ul>
<li><b>Keys</b> protocols, http, C, events</li>
<li><b>Difficulty</b> <font class="high">High</font></li>
<li><b>Description</b> Websockets is a technology providing for bi-directional, full-duplex communications channels, over a single TCP socket. The goal of this project is to provide
full support for Websockets specification in Monkey using the available API.
<br><br>
This is a very interesting and potent protocol, the best thing is that it works over HTTP, it will be a 'rich' feature using low resources.
<br><br>
Some tasks for this project are (but not restricted to):
<br><br>
<ul>
    <li>Implement websocket protocol</li>
    <li>Design configuration schema at global and vhost levels</li>
    <li>Meassure communication timmings and delays</li>
    <li>Analyze resources usage</li>
    <li>Collect and export statistics through web or command line interface</li>
    <li>Create websocket client example</li>
    <li>Full documentation (code and manual)</li>
</ul>
<br>
You need to have a basic knowledge of HTTP and some background in C, having experience with event-driven sockets is a plus.
<br><br>

<li><b>Skills Required</b> Some background in C and sockets</li>
<li><b>Mentors</b> Eduardo Silva</li>
</ul>
</p>
</div>

<div class="gsoc_idea">
<p>
<h1><a name="id3"><b>3) MONKEY SDK (Software Development Kit)</b></a></h1>
<ul>
<li><b>Keys</b> UI, Python</li>
<li><b>Difficulty</b> <font class="medium">Medium</font></li>
<li><b>Description</b> Monkey is developed with <b>embedded</b> in mind, due it is potent API and flexible architecture, it fills perfect 
in any Linux based device, in short terms, is a very attractive software for embedded developers.
<br><br> In order to improve the developer experience,
this project aims to create a software development kit (SDK) for developers who looks for extend monkey and requires an easy way to debug, get HTTP core internals and get resource usages, all this in a beautiful user interface.
<br><br>
The SDK components tools, must have/perform at least the following features:
<br><br>
<ul>
    <li>PyGTK User Interface</li>
    <li>Manage development environments of Monkey instances</li>
    <li>Check on fly properly plugins hooks declarations</li>
    <li>Meassure CPU, network and memory usage (some graphs would be good)</li>
    <li>Viewer of open file descriptors per worker</li>
    <li>Run unit test scripts (already available under qa/ directory)</li>
    <li>SDK Plugin: this component export Monkey internals to the SDK UI</li>
    <li>Integration with Cheetah interface</li>
    <li>Customized unit tests for developers</li>
</ul>
<li><b>Skills Required</b> Medium knowledge of C and Python, GTK is a good to know but not mandatory</li>
<li><b>Mentor</b> Davidlohr Bueso
</ul>
</p>
</div>


<div class="gsoc_idea">
<p>
<h1><a name="id4"><b>4) WEBCAM STREAMING</b></a></h1>
<ul>
<li><b>Keys</b> C, Video4Linux (v4l2)</li>
<li><b>Difficulty</b> <font class="high">High</font></li>
<li><b>Description</b> The goal of this project is to extend Monkey behavior in order to add support for 
video streaming using webcams as source.
<br><br>
The streaming interface, must be flexible to support different input sources and output URL paths. Some tasks involved are:
<br><br>
<ul>
   <li>Be compatible with HTML5</li>
   <li>Non-blocking mode</li>
   <li>Register video sources using Monkey configuration files (e.g: source /dev/video0)</li>
   <li>Publish streams as URL paths</li>
   <li>Streaming in RAW mode</li>
   <li>Transcoding using ffmpeg</li>
</ul>

<li><b>Skills Required</b> Medium knowledge of C and Video4Linux.</li>
<li><b>Mentor</b> Jonathan Gonzalez
</ul>
</p>
</div>

<div class="gsoc_idea">
<p>
<h1><a name="id5"><b>5) FASTCGI</b></a></h1>
<ul>
<li><b>Keys</b> C, CGI</li>
<li><b>Difficulty</b> <font class="high">High</font></li>
<li><b>Description</b> FastCGI is an open extension for the old CGI interface, it provides a flexible environment for applications based on dynamic content
to be scalable and reuse-resources when new OS process context are required for each request. 
<br><br>

This project aim to develop the FastCGI extension for Monkey Project, it 
must cover the full specification and provide a flexible configuration based on Monkey indented configuration mode. Some tasks involved:
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
<li><b>Mentor</b> Eduardo Silva
</ul>
</p>
</div>

<div class="gsoc_idea">
<p>
<h1><a name="id6"><b>6) BANDWIDTH THROTTLING</b></a></h1>
<ul>
<li><b>Keys</b> C, Bandwitdh</li>
<li><b>Difficulty</b> <font class="medium">Medium</font></li>
<li><b>Description</b> Sometimes the bandwidth is very limited and hosting providers would like to reserve more bandwidth for some virtual hosts than others.
<br><br>
                         This project aims to develop a plugin that allows to control and limit the traffic when serving the content for each client request, it must restrict the amount of bytes sent by seconds, the rules must work under gobal configuration and virtual host level. Some tasks involved:
<br><br>
<ul>
    <li>Design configuration schema</li>
    <li>Limit the send of static content to a specific rate</li>
    <li>Allow to omit restriction for specific file types</li>
    <li>Collect statistics of bytes served by worker</li>
    <li>Detect and block multiple resume downloads per configuration</li>
</ul>
<br>
</li>
<li><b>Skills Required</b> Good background in C</li>
<li><b>Mentors</b> Eduardo Silva / Jonathan Gonzalez</li>
</ul>
</p>
</div>

</div>
