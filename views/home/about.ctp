<h1>About</h1>

<p>
Monkey HTTP Daemon, is a very Small, Fast and Lightweight open source Web Server for GNU/Linux. It has been designed 
to be very scalable with low memory and CPU consumption, the perfect solution for embedded and high 
production environments.
</p>

<h2>Features</h2>
<p>
<ul>
	<li>HTTP/1.1</li>
	<li>Virtual Hosts</li>
        <li>Asynchronous networking model (event-driven)</li>
	<li>Indented configuration</li>
        <li>Plugins Support</li>
        <li>C API Interface</li>
        <li>Other features through base plugins:<br>
            <ul>
                <li>SSL</li>
                <li>Security</li>
                <li>Log writter</li>
                <li>Directory Listing</li>
                <li>Shell: Command line</li>
            </ul>
        </li>
</ul>
</p>

<h2>How it Works</h2>
<p>
Monkey uses an hybrid network model based on posix threads and the Epoll() Linux system call. Each thread is capable
to handle an average of 200 concurrent request at same time as minimum thanks to an asynchronous mecanism.
</p>

<h2>Plugins</h2>
<p>
A good and flexible architecture is one of our goals. Monkey have been designed to keep most of the HTTP 
functionalities in the core and make it extensible through external plugins. The current list of available
plugins distributed are:

<ul>
        <li>Liana: networking communication layer</li>
	<li>Cheetah! Shell: Yes!, Monkey has a shell!</li>
	<li>Directory Listing</li>
	<li>Security</li>
	<li>Palm</li>
</ul>
</p>

<h2>Just for Linux</h2>
<p>
Write a portable piece of software involves to dedicate extra time and focus on each platform features and 
problems. Linux as a fast and stable operative system also provides specific system calls which helps to improve the 
performance for high demand servers, that's why Monkey development is focused in Linux environment and all it's specific
features, most of them are not found in other systems. Monkey requires Linux Kernel >= 2.6.28.
</p>

<h2>Palm applications Server</h2>
<p>
Nowadays the most used scripting languages are PHP, Python and Ruby. Since Monkey 0.10.x, the server just focus on serving
static content, for dynamic content, Monkey project includes an applications server called Palm, so when Monkey receives 
a dynamic page request, it will parse it and forward the request using the Palm protocol to the Palm server which will serve
the request and Monkey sent back to the client the page generated.
</p>

<h2>Sponsors</h2>
<p>
<table cellpadding="2" cellspacing="2" style="border:1px #fff;">
<td style="border: 1px #fff;" valign="top">
    <a href="http://www.osuosl.org"><img src="osuosl.png" border="0"></a>
</td>
<td align="left" style="text-align: left; border: 1px #fff;">
    <p>
    <a href="http://monkey-project.com">Monkey Project </a>could not be possible without the infraestructure provided 
    by the <a href="http://www.osuosl.org">Open Source Lab</a> from the <a href="http://www.osuosl.org">Oregon State University</a>, 
    well known as <a href="http://www.osuosl.org">OSUOSL</a>, we really appreciate all support provided!
    </p>
</td>
</table>
</p>

<h2>License</h2>
<p>
  Monkey HTTP Daemon is licensed under the <a href="http://www.gnu.org/licenses/gpl-2.0.html">GNU Public License v2 (GPL2)</a>.
</p>
<p>
  In brief: This program is free software; you can redistribute it and/or modify  it under the terms of the GNU General Public 
  License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.
</p>

<h2>About our Logo</h2>
<p>
Our Monkey Logo is under the Creative Commons License, you are just allowed to use it to promote Monkey HTTP Daemon project
without any commercial purpose. FLOSS communities looking for merchandising can write us to require special permissions.
<br>
<br>
<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-nd/3.0/88x31.png" /></a><br /><span xmlns:dc="http://purl.org/dc/elements/1.1/" href="http://purl.org/dc/dcmitype/StillImage" property="dc:title" rel="dc:type">Monkey HTTP Daemon Logo</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.monkey-project.com" property="cc:attributionName" rel="cc:attributionURL">Eduardo Silva</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/">Creative Commons Attribution-Noncommercial-No Derivative Works 3.0 Unported License</a>

</p>
