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
the title describe it self, Monkey is a fully featured HTTP server for Linux, 
it's written in C language. It's core is pretty small and also expose a flexible API so the 
main behavior can be extended. There are plugins for different needs such as: SSL, Directory Listing,
Security, CGI, FastCGI, Log Writer, etc.
</p>
<p>
Internally it uses an event-driven model to handle multiple connection  under the same thread, this concept is also known as Asynchronous sockets. 

</ul>
