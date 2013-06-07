<div class="hero-unit">
   <h2>Benchmark: Raspberry PI - Monkey v/s Nginx</h2>
   <p>
   The Raspberry Pi is small sized computer based on ARM architecture, nowadays is becoming very
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
   The Raspberry Pi card it's a very interesting card as it provide a low cost board powered by
   the ARM architecture, overcloaked it can run at 800MHz of CPU, it supports SD cards and the
   common networking interfaces for LAN connectivity.
</p>

<h3>Environment</h3>
<p>
   The Raspberry PI - Linux OS have the following details:
   <ul>
     <li>Kernel    : 3.1.9</li>
     <li>CPU       : ARMv6-compatible processor rev 7 (v6l) - overcloaked to ~800Mhz</li>
     <li>RAM       : 223 MB </li>
     <li>Filesystem: ext4 on a SD card</li>
   </ul>
</p>
<p>
   The target HTTP servers are:
   <ul>
     <li>Monkey web server 1.1.0 (development branch)</li>
     <li>NginX web server 1.3.1 (stable)</li>
   </ul>
</p>

<p>
  The benchmarking tool used is <strong>Siege</strong>, it uses asyncrhonous sockets to perform
  the tests so it have a low latency compared with <strong>Apache Benchmark</strong>, so it provide
  more accurate results. The test is performed with the following command:

  <pre>$ siege -b -t10S -c200 http://localhost:PORT/linux.jpg</pre>

   We set the benchmarking mode and during 10 seconds, Siege will scale up to 200 concurrent clients which
   will perform as many request as it can over the file <i>linux.jpg</i> (200KB jpeg image).
</p>
<p>
   Monkey and NginX have been configured and compiled from sources in the Raspberry PI board, also the
   configuration for each service is the one that comes by default, with the only exception that we have
   set NginX to work with five workers as Monkey is doing by default.
</p>

<h4>Results</h4>
<p>
  After the test over each HTTP server, Siege have provided the following results:
</p>
<div class='row-fluid'>
<ul>
  <div class='span6'>

<strong>Monkey v1.1.0-dev</strong>
<pre>
Transactions:                    973 hits
Availability:                 100.00 %
Elapsed time:                   9.55 secs
Data transferred:             187.80 MB
Response time:                  1.59 secs
Transaction rate:             <u>101.88</u> trans/sec
Throughput:                    19.66 MB/sec
Concurrency:                  162.37
Successful transactions:         974
Failed transactions:               0
Longest transaction:            <u>2.36</u>
Shortest transaction:           <u>0.19</u>
</pre>
  </div>

  <div class='span6'>
<strong>NginX 1.3.1</strong>
<pre>
Transactions:                    840 hits
Availability:                 100.00 %
Elapsed time:                   9.81 secs
Data transferred:             161.96 MB
Response time:                  1.66 secs
Transaction rate:              <u>85.63</u> trans/sec
Throughput:                    16.51 MB/sec
Concurrency:                  141.88
Successful transactions:         840
Failed transactions:               0
Longest transaction:            <u>8.87</u>
Shortest transaction:           <u>0.27</u>
</pre>

  </div>
</ul>
</div>
<br>
<p>
Monkey was capable to serve the linux.jpg file 101.88 times per second and NginX only 85.63, that means that
<strong>Monkey is ~16% faster</strong> serving static content than NginX in a Raspberry PI board. We can also see
that NginX did not scale so well as it longest transaction was <b>8.87</b> v/s Monkey which was <b>2.36</b>:

<ul>
<div class='row'>
  <div class='span5'>
    <?=$html->image('bench_raspbpi_monkey_nginx.png'); ?>
  </div>
  <div class='span5'>
    <?=$html->image('bench_raspbpi_monkey_nginx_tx.png'); ?>
  </div>
</div>
</ul>

This is a great result as it reflects how well Monkey performs on ARM compared to other web servers. Is good to mention
that Monkey is <strong>NOT caching</strong> any content of the requested file and is doing a great optimization of the
system resources.
</p>

<br>
<h4>Disclaimer</h4>
<p>
   The test was made in localhost mode, which does not reflect a real internet environment, so under different circumstances
   re results could be different. The localhost test helps to determinate how the server perform over a high load as it reduces
   the TCP and networking overhead in general.
</p>
<p>
   If you have a Raspberry PI board, we encourage you that you perform your own tests, feel free to contact us about the results
   in question to our <?=$html->link('mailing list', 'http://lists.monkey-project.com');?>.
</p>