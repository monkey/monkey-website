
  <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">

      <div class="row-fluid">

        <div class="span10">
          <br>
          <h1>monkey web server <small>framework</small></h1>
          <p>
             Monkey is a lightweight and powerful web server for GNU/Linux.
          </p>
          <p>
            It has been designed to
             be very scalable with low memory and CPU consumption, the perfect solution for embedded
             devices. Made for ARM, x86 and x64.
             <br><br>
          </p>

          <div class="row-fluid">
            <div class="span6" style="text-align:center">
                  <a class="btn btn-warning btn-large"
                     href="http://monkey-project.com/releases/1.2/monkey-1.2.0.tar.gz">
                  <i class="icon-white icon-download-alt"></i>
                     Download Monkey Web Server (v1.2.0)
                  </a>
            </div>
            <div class="span6" style="text-align:center">
                  <a class="btn btn-info btn-large" href="./about">
                  <i class="icon-white icon-info-sign"></i>
                  Learn more... &raquo;</a>
            </div>
          </div> <!-- end of row-fluid -->
        </div> <!-- end of span8 -->

        <div class="span2">
           <br>
           <h2>Shortcuts</h2>
		<ul>
        		<li><a href='http://monkey-project.com/releases'>All Downloads</a></li>
			<li><a href='http://git.monkey-project.com'>Browse Code</a></li>
			<li><a href='http://bugs.monkey-project.com'>Bug Tracker</a></li>
			<li><a href='http://lists.monkey-project.com'>Mailing Lists</a></li>
                        <li><a href='http://blog.monkey-project.com'>Monkeys Blog</a></li>
		</ul>
        </div>

      </div>   <!-- end of row -->
      </div>

      <div class="row">
        <div class="span2">
          <?
	     echo $html->image('gsoc2013.png');
	  ?>
        </div>
        <div class="span8">
          <h2>Google Summer of Code 2013</h2>
                  <p></p>
	          <p>
                    <a href="http://www.google-melange.com/gsoc/org/google/gsoc2013/monkey">Monkey is an <strong>official</strong> mentoring organization</a> for <a href="http://google-melange.com">Google Summer of Code 2013</a>.
                    For more details about our application proposal, ideas and student guidelines please refer to our <a href="http://monkey-project.com/gsoc2013">GSoC Section</a>
 	          </p>
        <br>
          </div>
      </div>
      <br><br>
      <div class="row">
          <div class="span12">
                 <h2>Latest release: v1.2.0 / codename Monkey Expresso <small>on Sunday, May 26th 2013</small> </h2>
                  <p></p>
	          <p>
                       Monkey project team, is proud to announce the availability of our major
                       release <i>Monkey HTTP Daemon v1.2.0</i>.
 	          </p>
                  <p>
        For more details about the release, please refer to the <?=$html->link('official announcement', array('controller' => 'Announcements', 'action' => 'v1.2.0'));?>
	or go directly to the <?=$html->link('downloads section', array('controller' => 'downloads'));?>
	</p>
        <br>
          </div>
      </div>

      <div class="row">
          <div class="span12">
                 <h2>Benchmarks</h2>
                  <p></p>
	          <p>
                  The Monkey team is doing different of benchmarks of the server in different platforms against different web servers, please check
                  the list of Benchmarks done at the moment:
                  <ul>
                     <li><?=$html->link('Monkey v/s GWan in a Linux x86_64 box', array('controller' => 'benchmarks', 'action' => 'x86_64_monkey_gwan'));?></li>
                     <li><?=$html->link('Monkey v/s BusyBox on a Raspberry PI', array('controller' => 'benchmarks', 'action' => 'raspberry_pi_monkey_busybox'));?></li>
                     <li><?=$html->link('Monkey v/s NginX on a Raspberry PI', array('controller' => 'benchmarks', 'action' => 'raspberry_pi_monkey_nginx'));?></li>
                  </ul>
 	          </p>
          </div>
      </div>
      <p></p>
      <!-- Quick start -->
      <div class="row">
        <div class="span12">
          <h2>Start Monkey in less than 30 seconds</h2>
          <p>
             Make sure your are in a Linux box running a Kernel version >= 2.6.29, if you are set, you can
             start with the following commands as normal user
          </p>
        </div>
      <div class="span7">
      <pre>
$ wget http://monkey-project.com/releases/1.2/monkey-1.2.0.tar.gz
$ tar zxfv monkey-1.2.0.tar.gz
$ cd monkey-1.2.0
$ ./configure
$ make
$ bin/monkey</pre>
       </div> <!-- end span7 -->
      <div class="span12">
         Now point your browser to http://127.0.0.1:2001
      </div>
     </div>

      <!-- Informational -->
      <br>
      <div class="row">
        <div class="span4">
          <h2>Blog News</h2>
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
          <h2>Development Branch</h2>
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
          <p><a class="btn" href="http://git.monkey-project.com/?p=monkey;a=shortlog;h=refs/heads/master">               View details &raquo;</a></p>
       </div>

        <div class="span4">
          <h2>Mailing List</h2>
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
