<div class="gsoc">

<h1>Google Summer of Code 2010 !!!</h1>
<div class="gsoc_menu">
	<p>
	<?=$html->link('GSoC Main', array('controller' => 'GSoC2010', 'action' => 'Welcome'));?>
	&nbsp;&nbsp;
	<?=$html->link('Project Ideas', array('controller' => 'GSoC2010', 'action' => 'Ideas'));?>
	&nbsp;&nbsp;
	<?=$html->link('Students Template', array('controller' => 'GSoC2010', 'action' => 'StudentTemplate'));?>
	</p>
</div>

<h2> Description </h2>
<p>
	Monkey HTTP Daemon project, is applying to be part as one of the mentoring organization of 
	<a href='http://code.google.com/soc'>Google Summer of Code 2010</a>, we are very excited about
	this process !
	<br><br>
	<a href="http://socghop.appspot.com/">
	<?
		echo $html->image('gsoc2010.png');
	?>
	</a>

	Google Summer of Code (GSoC), is one of the most important instance where students can involve very 
	quickly in open source projects. The rules are very simple:
</p>
	<ul>

	<li>Organizations (open source projects) applies with Google to be part of the program</li>
	
	<li>Google select the best organization applications</li>
	
	<li>Once approved Organizations are announced and Google assign a number of slots, 
	students can apply to the organization that they want using the proposed ideas 
	(or students can propose their own !!!)
	</li>
	
	<li>Organizations rate students proposals and Google announces the approved students. While students do their work, 
	they get paid by Google. 
	</li>		
</ul>

<h2>Important Dates</h2>
<li><s>March 12: Mentoring organization application deadline.</s></li>
<li>March 18: List of accepted mentoring organizations published on <a href="http://socghop.appspot.com">GSoC site</a></li>
<li>March 29: Student applications open</li>
<li>April 09: Student application deadline</li>
<li>April 26: List of accepted student applications published on code.google.com</li>
<li>May 24: Students begin coding for their GSoC projects; Google begins issuing initial student payments</li>
<li>July 16: Mid-term evaluations deadline</li>
<li>August 16: Pencils down</li>
<br>

<h2>How to Apply ?</h2>
<p>
"We are applying to be part of the process, this information is not official until we get the approval from Google"
<br><br>

Students must be sure that they are elegible under the GSoC rules program, if you are elegible, you can proceed with:

<li>Read, Improve, Create and Apply for one of our <?=$html->link('Ideas', array('controller' => 'GSoC2010', 'action' => 'Ideas'));?> posted. You are encourage to propose your own idea!!!</li>
<li>Read and follow the instructions of the <?=$html->link('Monkey Student Template', array('controller' => 'GSoC2010', 'action' => 'StudentTemplate'));?></li>
<li>Check the Google Summer of Code Student Application form and fill the required information</li>
<br>
</p>

<h2>Project Ideas</h2>
<p>
Our pool of project ideas is found in <?=$html->link('GSoC2010/Ideas', array('controller' => 'GSoC2010', 'action' => 'Ideas'));?>. Most
of the items published here are not exclusive, please feel free to apply with your own ideas, we love creative people!. Also we encourage
you to get in touch with us to talk about them, we want to support good ideas :)
</p>

<h2>Information for Students</h2>
<p>
	We have built a Student Template which must be sent to us once you have sent your GSoC application. The template is located 
	in <?=$html->link('GSoC2010/StudentTemplate', array('controller' => 'GSoC2010', 'action' => 'StudentTemplate'));?>
</p>

<h2>Contact us !</h2>
<p>
We are always open to ideas and suggestions, please feel free to contact us through our 
<a href='http://groups.google.com/group/monkeyd'>Mailing List</a>. If you want a private communication
you can do it through <font class="email">gsoc2010@monkey-project.com</font>
<br><br>
If you prefer, you can also find us on irc.freenode.net #monkeyd. 
</p>

<h2>Useful Links</h2>
<li><?=$html->link('Google Summer of Code 2010', 'http://socghop.appspot.com');?></li>
<li><?=$html->link('Frequently Asked Questions', 'http://socghop.appspot.com/document/show/gsoc_program/google/gsoc2010/faqs');?></li>


</div>
