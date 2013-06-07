<div class="hero-unit">
   <h2>Benchmark: Monkey v/s GWan in a Linux 64 bit platform</h2>
   <p>
      Monkey aim to empower embedded devices but on this time we have benchmarked against a closed
      source web server named GWan in a Linux x86_64 system.
   </p>
</div>

<h3>Introduction</h3>
<p>
   Monkey is known as a lightweight HTTP web server and stack which hits a huge performance
   due to it architecture and carefully design. On these benchmarking series we are testing
   Monkey on different platforms against other web solutions available.
</p>

<p>
   GWan is a free but closed source web application server, it claims to be 3-4x times faster
   than open sources solutions such as NginX or Lighttpd.
</p>

<h3>Environment</h3>
<p>
   Intel board, some details:
   <ul>
     <li>Kernel    : 3.2.0 - x86_64</li>
     <li>CPU       : Intel(R) Core(TM) i5-2520M CPU @ 2.50GHz (4 cores)</li>
     <li>RAM       : 8 GB</li>
     <li>Filesystem: ext4 on a SATA disk</li>
   </ul>
</p>
<p>
   The target HTTP servers are:
   <ul>
     <li>Monkey web server 1.1.0 (development branch)</li>
     <li>GWan 3.3.28</li>
   </ul>
</p>

<p>
  The benchmarking tool used is <strong>Siege</strong>, it uses asyncrhonous sockets to perform
  the tests so it have a low latency compared with <strong>Apache Benchmark</strong>, so it provide
  more accurate results. The test is performed with the following command:

  <pre>$ siege -b -t10S -c500 http://localhost:PORT/linux.jpg</pre>

   We set the benchmarking mode and during 10 seconds, Siege will scale up to 500 concurrent clients which
   will perform as many request as it can over the file <i>linux.jpg</i> (200KB jpeg image).
</p>
<p>
   Monkey have configured and compiled from sources, for GWan we are using the binaries provided in their
   web site.
</p>

<h4>Results</h4>
<p>
  After the test over each HTTP server, Siege have provided the following results:
</p>
<div class='row'>
<ul>
  <div class='span6'>

<strong>Monkey v1.1.0-dev</strong>
<pre>
Transactions:		       29832 hits
Availability:		      100.00 %
Elapsed time:		        9.25 secs
Data transferred:	     5751.94 MB
Response time:		        0.15 secs
Transaction rate:	  <u>3225.08</u> trans/sec
Throughput:		      621.83 MB/sec
Concurrency:		      485.78
Successful transactions:       29832
Failed transactions:	           0
Longest transaction:	        <u>1.38</u>
Shortest transaction:	        <u>0.00</u>
</pre>
  </div>

  <div class='span6'>
   <strong>GWan 3.3.28</strong>
<pre>
Transactions:		       23235 hits
Availability:		      100.00 %
Elapsed time:		        9.13 secs
Data transferred:	     4479.96 MB
Response time:		        0.19 secs
Transaction rate:	    <u>2544.91</u> trans/sec
Throughput:		      490.69 MB/sec
Concurrency:		      480.86
Successful transactions:       23235
Failed transactions:	           0
Longest transaction:	        <u>1.63</u>
Shortest transaction:	        <u>0.00</u>
</pre>

  </div>
</ul>
</div>
<br>
<p>
Monkey was capable to serve the linux.jpg file 3225.08 times per second and GWan only 2544.91, that means that
<strong>Monkey is ~12% faster</strong> serving static content than GWan in a Linux x86_64 box.

<ul>
<div class='row'>
  <div class='span5'>
    <?=$html->image('bench_x86_64_monkey_gwan.png'); ?>
  </div>
  <div class='span5'>
    <?=$html->image('bench_x86_64_monkey_gwan_tx.png'); ?>
  </div>
</div>
</ul>

This is a great result as it reflects that even Monkey is focusing on embedded devices, it can perform pretty well in
high production environments. Is good to mention that Monkey is <strong>NOT caching</strong> any content of the requested file
and is doing a great optimization of the system resources.
</p>

<br>
<h4>Disclaimer</h4>
<p>
   The test was made in localhost mode, which does not reflect a real internet environment, so under different circumstances
   re results could be different. The localhost test helps to determinate how the server perform over a high load as it reduces
   the TCP and networking overhead in general.
</p>
