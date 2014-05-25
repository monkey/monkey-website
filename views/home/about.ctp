<div class="hero-unit">
<h2>About <small> Monkey HTTP Server</small> </h2>
<p>
   Monkey is a small, fast and lightweight open source Web Server for GNU/Linux. It has been designed
   with focus in embedded devices, therefore its scalable by nature having a low memory and CPU
   consumption and an excellent performance.
</p>
<p>
   Monkey is properly supported on ARM, x86 and x64, being able to work in any architecture and device
   capable to run a Linux Kernel.
</p>
</div>

<h3>Features <small></small></h3>
<p>
<ul>
	<li>HTTP/1.1 compliant</li>
        <li>IPv4 & IPv6</li>
	<li>Virtual Hosts</li>
        <li>Asynchronous networking model (event-driven)</li>
	<li>Indented configuration</li>
        <li>Plugins Support</li>
        <li>C API Interface</li>
        <li>Other features through base plugins:<br>
            <ul>
                <li>CGI</li>
                <li>FastCGI</li>
                <li>SSL</li>
                <li>Security</li>
                <li>Log writter</li>
                <li>Directory Listing</li>
                <li>Shell: Command line</li>
            </ul>
        </li>
</ul>
</p>

<br>
<h3>How it Works <small>internal architecture</small></h3>
<p>
   Monkey uses an hybrid mechanism composed by a fixed number of threads being each one capable
   to attend thousands of clients thanks to the event-driven model based in asyncrhonous sockets.
</p>
<p>
   The interaction between the scheduler and each worker thread is lock free, avoiding race conditions
   and exposing a huge performance compared to other available options. It also takes the most of the
   Linux Kernel to optimize the work using specific system calls based on zero-copy strategy.
</p>

<br>
<h3>Plugins <small>extending the core features</small></h3>
<p>
A good and flexible architecture is one of our goals. Monkey have been designed to keep most of the HTTP
functionalities in the core and make it extensible through external plugins. Its core is small, depending of the
compiler version used, the binary size could be around 60KB and 300KB in runtime. The current plugins are distributed
with the sources:

<ul>
        <li>CGI: Common Gateway Interface</li>
        <li>FastCGI: Fast CGI</li>
        <li>Liana: networking communication layer</li>
	<li>Cheetah! Shell: Yes!, Monkey has a shell!</li>
	<li>Directory Listing</li>
        <li>Security: access restriction to the service by network address, subnets and request filters</li>
</ul>
</p>

<br>
<h3>Just for Linux <small>kernel dependent</small></h3>
<p>
Write a portable piece of software involves to dedicate extra time and focus on each platform features and
problems. Linux is a fast and stable operative system which provides specific and unique system calls to improve the
performance of high demand server softwares, so Monkey development is focused in Linux Kernel to take the most of
it specific features. Monkey only requires Linux >= 2.6.29.
</p>

<br>
<h3>Benchmarks <small>againts other web servers</small></h3>
<p>
   Monkey have demostrated consume less memory and CPU than other web servers available, as well have a better performance
   due to it design. More information will be shared soon.
</p>

<br>
<h3>Sponsors <small>who support us</small></h3>
<div class="row-fluid">
    <div class="span12">
      <p>
        Monkey is build by volunteers around the world and getting an extra support from OSUOSL.
      </p>
    </div>
</div>
<div class="row-fluid">
    <div class="span2">
         <a href="http://www.osuosl.org"><img src="osuosl.png" border="0"></a>
    </div>
    <div class="span10">
    <a href="http://monkey-project.com">Monkey Project </a>could not be possible without the infraestructure provided
    by the <a href="http://www.osuosl.org">Open Source Lab</a> from the <a href="http://www.osuosl.org">Oregon State University</a>,
    well known as <a href="http://www.osuosl.org">OSUOSL</a>, we really appreciate all support provided!
    </div>
</div>

<br>
<h3>License <small>legal</small></h3>
<p>
  Monkey HTTP Server is under the tems of the <a href="http://www.apache.org/licenses/LICENSE-2.0.html">Apache License v2.0</a>.
</p>
<p>
For any extra requirement for commercial support or special licenses, please write
us to <a href="mailto:eduardo@monkey.io?Subject=Commercial Support Request">eduardo@monkey.io</a>.
</p>

<br>
<h3>Logo Copyright</h3>
<p>
Our Monkey Logo is under the Creative Commons License, you are just allowed to use it to promote Monkey HTTP Server project
without any commercial purpose. FLOSS communities looking for merchandising can write us to require special permissions.
<br>
<br>
<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-nd/3.0/88x31.png" /></a><br /><span xmlns:dc="http://purl.org/dc/elements/1.1/" href="http://purl.org/dc/dcmitype/StillImage" property="dc:title" rel="dc:type">Monkey HTTP Server Logo</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.monkey-project.com" property="cc:attributionName" rel="cc:attributionURL">Eduardo Silva</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/">Creative Commons Attribution-Noncommercial-No Derivative Works 3.0 Unported License</a>
</p>
