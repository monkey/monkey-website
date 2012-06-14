<div class="hero-unit">
   <h2>Benchmark: Raspberry PI - Monkey v/s Busybox httpd</h2>
   <p>
   The Raspberry Pi is a small sized computer based on ARM architecture,
   nowadays is becoming very
   popular due to it's low price (25USD) and performant design.
   </p>
</div>

<h3>Introduction</h3>
<p>
   Monkey is known as a lightweight HTTP web server and stack which hits a huge performance
   due to it architecture and carefully design. On these benchmarking series we are testing
   Monkey on different platforms against other web solutions available.
</p>

<p>
   Busybox is a toolbox of common linux software, often used in embedded settings. It includes
   a forking http server.
</p>

<p>
   The Raspberry Pi card it's a very interesting card as it provide a low cost board powered by
   the ARM architecture, overcloaked it can run at 800MHz of CPU, it supports SD cards and the
   common networking interfaces for LAN connectivity.
</p>

<h3>Environment</h3>
<p>
   The Raspberry PI - Linux OS have the following details:
   <ul>
     <li>Kernel    : 3.1.9</li>
     <li>CPU       : ARMv6-compatible processor rev 7 (v6l) - standard 700MHz</li>
     <li>RAM       : 223 MB </li>
     <li>Filesystem: tmpfs (in RAM)</li>
   </ul>
</p>
<p>
   The target HTTP servers are:
   <ul>
     <li>Monkey web server, git 484f819cf5a65d8f26add14243c8ffcee6293cc1</li>
     <li>Busybox httpd, git 576b1d3c417ddea79481063401837ec0bdb91658</li>
   </ul>
</p>

<p>
  The benchmarking tool used is <strong>Siege</strong> (2.72), it uses asynchronous sockets to perform
  the tests so it has a low latency compared with <strong>Apache Benchmark</strong>, and so it provides
  more accurate results. The test is performed with the following command:

  <pre>$ siege -b -t10S -c10 http://localhost:PORT/index.html</pre>

   We set the benchmarking mode and during 10 seconds, Siege will start 10 concurrent clients which
   will perform as many requests as they can over the file <i>index.html</i> (1.4KB default file shipped
   with Monkey).
</p>
<p>
   Monkey and Busybox httpd have been configured and compiled from sources in the Raspberry PI board, also the
   configuration for each service is the one that comes by default.
</p>

<h4>Results</h4>
<p>
  After the test over each HTTP server, Siege provided the following results:
</p>
<div class='row'>
<ul>
  <div class='span4'>

<strong>Monkey</strong>
<pre>
Transactions:                   2608 hits
Availability:                 100.00 %
Elapsed time:                   9.64 secs
Data transferred:               0.09 MB
Response time:                  0.04 secs
Transaction rate:             <u>270.54 trans/sec</u>
Throughput:                     0.01 MB/sec
Concurrency:                    9.68
Successful transactions:        2608
Failed transactions:               0
Longest transaction:            <u>0.08</u>
Shortest transaction:           <u>0.00</u>
</pre>
  </div>

  <div class='span4'>
<strong>Busybox httpd</strong>
<pre>
Transactions:                   1426 hits
Availability:                 100.00 %
Elapsed time:                   9.61 secs
Data transferred:               0.05 MB
Response time:                  0.07 secs
Transaction rate:             <u>148.39 trans/sec</u>
Throughput:                     0.01 MB/sec
Concurrency:                    9.94
Successful transactions:        1426
Failed transactions:               0
Longest transaction:            <u>0.12</u>
Shortest transaction:           <u>0.04</u>
</pre>

  </div>
</ul>
</div>
<br>
<p>
Serving small static files, Monkey was able to handle <b>270</b> transactions per second, compared
to Busybox's <b>150</b>. This is a <b>80%</b> difference.

The loading times were also better with Monkey, having the longest transaction at <b>80ms</b> compared to
Busybox's <b>120ms</b>, a difference of <b>33%</b>.

<ul>
<div class='row'>
  <div class='span5'>
    <?=$html->image('bench_raspbpi_monkey_busybox.png'); ?>
  </div>
  <div class='span5'>
    <?=$html->image('bench_raspbpi_monkey_busybox_tx.png'); ?>
  </div>
</div>
</ul>

This is a great result as it reflects how well Monkey performs on ARM compared to other web servers. Is good to mention
that Monkey is <strong>NOT caching</strong> any content of the requested file and is doing a great optimization of the
system resources.
</p>

<br>
<br>
<h4>Disclaimer</h4>
<p>
   The test was made in localhost mode, which does not reflect a real internet environment, so under different circumstances
   re results could be different. The localhost test helps to determinate how the server performs under a high load as it reduces
   the TCP and networking overhead in general.
</p>
<p>
   If you have a Raspberry PI board, we encourage you that you perform your own tests, feel free to contact us about the results
   in question to our <?=$html->link('mailing list', 'http://lists.monkey-project.com');?>.
</p>
