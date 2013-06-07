
<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
  <h1>monkey web server <small>framework</small></h1>
  <p>
    Monkey is a lightweight and powerful web server and development
    ostack for GNU/Linux.
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
         href="http://monkey-project.com/releases/1.2/monkey-1.2.1.tar.gz">
        <i class="icon-white icon-download-alt"></i>
        Download Monkey v1.2.1
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
    <h3>Latest release: v1.2.1 (Monkey Expresso)
      <small>on Thursday, Jun 06th 2013</small>
    </h3>
    <p>
      Monkey project development team, is proud to announce the availability
      of <i>Monkey v1.2.1</i> release. For more details about it, please refer to the
      <?=$html->link('official announcement',
                     array('controller' => 'Announcements',
                           'action' => 'v1.2.1'));?>
      or go directly to the <?=$html->link('downloads section',
                                           array('controller' => 'downloads'));?>
    </p>
    <hr>
  </div>
</div>

<div class="row-fluid">
  <h3>News</h3>
  <div class="row-fluid">
    <div class="span2">
      <?
         echo $html->image('gsoc2013.png');
      ?>
    </div>
    <div class="span8">
      <h4>Google Summer of Code 2013</h4>
      <p>
        <a href="http://www.google-melange.com/gsoc/org/google/gsoc2013/monkey">Monkey is
          an <strong>official</strong> mentoring organization</a> for <a href="http://google-melange.com">Google Summer of Code 2013</a>.
        For more details about our application proposal, ideas and student guidelines please refer to our <a href="http://monkey-project.com/gsoc2013">GSoC Section</a>
      </p>
    </div>
  </div>
  <hr>
</div>

<!-- Quick start -->
<div class="row-fluid">
  <div class="span11">
    <h3>Start with Monkey in less than 30 seconds</h3>
    <p>
      Make sure your are in a Linux box running a Kernel version >= 2.6.29, if you are set, you can
      start with the following commands as normal user
    </p>

    <pre>$ wget http://monkey-project.com/releases/1.2/monkey-1.2.1.tar.gz
$ tar zxfv monkey-1.2.1.tar.gz
$ cd monkey-1.2.1
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
    <p><a class="btn" href="http://blog.monkey-project.com">View details &raquo;</a></p>
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
      <a class="btn" href="http://git.monkey-project.com/?p=monkey;a=shortlog;h=refs/heads/master">               View details &raquo;</a></p>
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
