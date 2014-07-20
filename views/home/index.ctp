
<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
  <h1>monkey web server <small>framework</small></h1>
  <p>
    Monkey is a lightweight and powerful web server and development
    stack for GNU/Linux.
    </p>
  <p>
    It has been designed to be very scalable with low memory and CPU
    consumption, the perfect solution for embedded devices. Made for ARM,
    x86 and x64.
  </p>
  <br />
  <div class="row-fluid" style="text-align:center">
    <div class="span5">
      <a class="btn btn-warning btn-large"
         href="http://monkey-project.com/releases/1.5/monkey-1.5.2.tar.gz">
        <i class="icon-white icon-download-alt"></i>
        Download Monkey v1.5.2
      </a>
    </div>
    <div class="span3">
      <a class="btn btn-info btn-large" href="./about">
        <i class="icon-white icon-info-sign"></i>
        Learn more... &raquo;</a>
    </div>
  </div> <!-- end of row-fluid -->
</div> <!-- end of span8 -->

<div class="row-fluid">
  <div class="span11">
    <h3>Latest release: v1.5.2 (Emperor Tamarin)
      <small>on Friday 18th, Jul 2014</small>
    </h3>
    <p>
      Monkey project development team, is proud to announce the availability
      of <i>Monkey v1.5.2</i> release. For more details about it, please refer to the
      <?=$html->link('official announcement',
                     array('controller' => 'Announcements',
                           'action' => 'v1.5.2'));?>
      or go directly to the <?=$html->link('downloads section',
                                           array('controller' => 'downloads'));?>
    </p>
    <hr>
  </div>
</div>


<div class="row-fluid">
   <div class="span3">
   <?=$html->image('gsoc2014.png');?>
   </div>
   <div class="span9">
   <h3>Monkey is part of Google Summer of Code 2014</h3>
   <p>
   Our organization have participated successfully on 2011 and 2012 GSoC editions, and this year we are even more motivated as we have really cool projects where students could choose and apply to make the HTTP ecosystem even better.
   </p>
   <p>
   For more details about GSoC and Monkey Organization, please refer to the following link:
   <ul>
   <a href="http://monkey-project.com/gsoc2014">http://monkey-project.com/gsoc2014</a>
   </ul>
   </p>
   </div>
</div>
<hr>

<!-- Quick start -->
<div class="row-fluid">
  <div class="span11">
    <h3>Start with Monkey in less than 30 seconds</h3>
    <p>
      Make sure your are in a Linux box running a Kernel version >= 2.6.29, if you are set, you can
      start with the following commands as normal user
    </p>

    <pre>$ wget http://monkey-project.com/releases/1.5/monkey-1.5.2.tar.gz
$ tar zxfv monkey-1.5.2.tar.gz
$ cd monkey-1.5.2
$ ./configure
$ make
$ bin/monkey</pre>
  <p>
    Now point your browser to http://127.0.0.1:2001
  </p>
  </div>
</div>

<hr />
<!-- Informational -->

<div class="row-fluid">
  <div class="span4">
    <h3>Blog News</h3>
    <p>
      <?
	 $count = 0;
	 foreach($blog_feeds as $feed){
           echo '<li>'.$html->link($feed->get_title(), $feed->get_link()).'</li>';
           $count++;
           if($count >= 5){
              break;
           }
         }
      ?>
    </p>
    <p><a class="btn" href="http://git.monkey-project.com/?p=monkey;a=shortlog;h=refs/heads/master">               View details &raquo;</a></p>
  </div>
  <div class="span4">
    <h3>Development Branch</h3>
    <p>
      <?
	 $count = 0;
	 foreach($git_feeds as $feed){
	   echo '<li>'.$html->link($feed->get_title(), $feed->get_link()).'</li>';
           $count++;
           if($count >= 5){
             break;
           }
	 }
       ?>
    </p>
    <p>
      <a class="btn" href="https://github.com/monkey/monkey">
               View details &raquo;</a></p>
  </div>

  <div class="span4">
    <h3>Mailing List</h3>
    <p>
      <?
	 $count = 0;
	 foreach($ml_feeds as $feed){
	   echo '<li>'.$html->link($feed->get_title(), $feed->get_link()).'</li>';
           $count++;
           if($count >= 5){
               break;
           }
	}
       ?>
   </p>
    <p><a class="btn" href="#">View details &raquo;</a></p>
  </div>
</div>
