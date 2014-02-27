<h1>Google Summer of Code 2014: Getting Started</h1>
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

<h2>Getting Started</h2>
<p>
If you are looking at this page means that you are interested into apply to Monkey Project organization,
so you will find suggested steps to perform that will help to get more knowledge about Monkey technology
and for hence you will be able to improve the quality of your Student proposal.
</p>

<p>
Before to apply is required that you learn (or know) what Monkey and Duda I/O are, and also always keep
in mind that <strong>everything</strong> done my Monkey Project have a strong focus on high performance,
low resource usage, High End Servers and Embedded.

</p>

<h3>Monkey HTTP Server</h3>
<p>
the title describe it self, <a href="http://monkey-project.com">Monkey</a> is a fully featured HTTP server for Linux,
it's written in C language. It's core is pretty small and also expose a flexible API so the
main behavior can be extended. There are plugins for different needs such as: SSL, Directory Listing,
Security, CGI, FastCGI, Log Writer, etc.
</p>
<p>
Internally it uses an event-driven model to handle multiple connections under the same thread, this concept is also known as
<i>asynchronous sockets</i> or <i>non-blocking</i>.

<h3>Duda I/O</h3>
<p>
In simple words, <a href="http://duda.io">Duda I/O</a> is a <a href="http://monkey-project.com">Monkey Plugin</a>.
It objective is to wrap the Monkey API, hide the complexity of threading, events, Monkey structures and instead
expose a friendly C API where and end-user can create their own web services easily.
</p>

<p>
The setup for a development environment on Duda I/O can be a bit complex at the beginning, so a helper tool exists to make things
easier, this tool is called <i>Duda Client Manager</i>, or <i>DudaC</i> for short. So when developing a web service using Duda I/O
stack, you initially uses DudaC to create your local development environment.
</p>

<h2>How Monkey handle the incoming requests ?</h2>
<p>
When Monkey starts, it bootstrap it configuration and internal structures, then it spawn a fixed number of threads. On the main process
it create a server socket that listen for incoming connections, upon connection arrive, the core check which thread have the lowest
number of active connections, once the core catch the target thread, it takes the file descriptor and register it into the specific
thread epoll(7) interface.
</p>

<p>
Each server thread runs in an infinite loop using the epoll(7) interface, so the main process is able to register a file descriptor
or socket inside this events interface, so on that moment the thread takes care to read the HTTP request, parse, validate and
perform some action. We can say that Monkey process does the load balancing with the help of a fixed number of threads. As the core
runs in asynchronous sockets, each thread is capable to handle thousands of connections.
</p>

<h2>Suggested steps for Students</h2>

<p>
<b>1.</b>
Make sure you understand how GIT works, if you dont know, take some time to research about GIT and create an account
on <a href="http://github.com">github.com</a>, as this would be your main site for work.
</p>

<p>
<b>2.</b>
We expect your main development environment is a Linux system, we assume you have done development on it before. If you
don't, go for it now.
</p>

<p>
<b>3.</b>
Get Monkey sources from our GIT repository, configure and compile it as normal user, run it and make sure to understand
what each configuration key from conf/monkey.conf do.
</p>

<p>
Note: At this point you have realized that Monkey configuration is a bit special. All our configuration is <i>indented</i>, that
means that if you break the indentation the server will not start. This is done on this way to force the sysadmin to have
a clear and human-readable configuration. The configuration handle three specific terms: Sections, Keys and Values. A Section
it's a main entry in the configuration and is recognized because is inside brackets, e.g: [Server]. So every line under that
section is a Key with a specific value and the indentation rule is: every key under a section must be indented. Also note that
commented lines are also indented.
</p>

<p>
<b>4.</b>
Inside Monkey sources, run the <i>./configure</i> script with the <i>--help</i> argument, now start getting familiarized with
the options <i>trace</i>, <i>debug</i> and <i>linux-trace</i>. Understand each one, compile the server with each key enabled and
see how they can help you in you development cycle.
</p>

<p>
<b>5.</b>
Dig into Monkey sources, check what src/ and plugins/ directories are. Now investigate how on configuring (./configure) time you can
enable or disable a plugin.
</p>

<p>
<b>6.</b>
You will see a few files inside each plugins sources like: MANDATORY, OPTIONAL and EXPERIMENTAL. What do they do ?, Who uses those files ?.
</p>

<p>
<b>7.</b>
Monkey requires a plugin that provide a transport layer, which plugin are those ?.
</p>

<p>
<b>8.</b>
Configure and build Monkey in SSL mode.
</p>

<p>
<b>9.</b>
Read about Monkey internals here:
<a href="http://swpd.github.io/blog/2013/05/18/monkey-http-daemon-internals/">
  http://swpd.github.io/blog/2013/05/18/monkey-http-daemon-internals/
</a>
</p>

<p>
<b>10.</b>
Read this old presentation about Monkey, a bit outdated but architecture things are
pretty much the same:
<a href="http://www.slideshare.net/startechconf/eduardo-silva-monkey-httpserver-everywhere">
  http://www.slideshare.net/startechconf/eduardo-silva-monkey-httpserver-everywhere
</a>
</p>

<p>
<b>11.</b>
Dig into Monkey Plugin API, understand HTTP stages and their callbacks, e.g: _mkp_init(), _mkp_exit(),
_mkp_core_prctx(), _mkp_core_thctx(), _mkp_stage_10(), _mkp_stage_20(), _mkp_stage_30(), _mkp_stage_40(),
_mkp_stage_50().
</p>

<p>
<b>12.</b>
Go into <a href="http://duda.io">Duda I/O</a> site, download <i>DudaC</i> and <i>duda-examples</i> from
our <a href="http://github.com/monkey">Github Monkey</a> repository. Then start building each duda-example
service. Make sure you can access each one through the proper URL.
</p>


<p>
<b>13.</b>
After you have built the duda-examples, go into your home user directory ~/.dudac and check what is there.
</p>

<p>
<b>14.</b>
A Duda I/O Web service is configured inside a Monkey Virtual Host definition, check your self what is the
location and what content you are able to find.
</p>

<p>
<b>15.</b>
For a Duda I/O service, how you would change the Monkey setup to alter the number of workers ?, which
configuration file you should touch ?.
</p>

<p>
<b>16.</b>
Write your own Duda I/O web service to make something simple and cool.
</p>

<h3>Final</h3>

<p>
We tried to explain in general overview what our Organization software does and how it works,
but also suggested steps so you as a Student can prepare your self in a better way to deliver
a high quality proposal. If you know how things works, you will now how to make your project.
</p>

<p>
Working for our Organization you will get a lot of support from the mentors team, but also
before to ask everything we appreciate your research effort. Participating on Monkey is an exciting
opportunity because you will lead to learn non-common things: the server side, threading, sockets,
polling, protocols, performance and others.
</p>

<p>
If for some reason you feel scared or have doubts about if you can manage to make this, just relax
and trust in the mentors, our goal is not just to meassure your performance, is to guide you
to reach your objectives and help you in the best way possible, you are not alone :) .
</p>

