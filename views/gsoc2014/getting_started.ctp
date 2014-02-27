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
perform some action.
</p>

</ul>
