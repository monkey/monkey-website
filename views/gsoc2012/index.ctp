<div class="gsoc">

<h1>Google Summer of Code 2012 !!!</h1>
<div class="gsoc_menu">
	<p>
	<?=$html->link('GSoC Main', array('controller' => 'gsoc2012', 'action' => 'index'));?>
	&nbsp;&nbsp;
	<?=$html->link('Project Ideas', array('controller' => 'gsoc2012', 'action' => 'ideas'));?>
	&nbsp;&nbsp;
	<?=$html->link('Students Template', array('controller' => 'gsoc2012', 'action' => 'template'));?>
	</p>
</div>

<h2> Description </h2>
<p>
	Monkey HTTP Daemon project is an
        <a href="http://www.google-melange.com/gsoc/org/google/gsoc2012/monkey">Official Mentoring Organization</a> of
	<a href='http://www.google-melange.com/gsoc/homepage/google/gsoc2012'>Google Summer of Code 2012</a>, we are very excited about
	this process !
	<br><br>
	<a href="http://www.google-melange.com/gsoc/homepage/google/gsoc2012">
	<?
		echo $html->image('gsoc2012.png');
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
<li>March 09: Mentoring organization application deadline</li>
<li>March 16: List of accepted mentoring organizations published on <a href="http://www.google-melange.com">GSoC site</a></li>
<li>March 17-25: Would-be student participants discuss application ideas with mentoring organizations</li>
<li>March 26: Student application period opens</li>
<li>April 6: Student application deadline</li>
<li><a href="http://www.google-melange.com/gsoc/events/google/gsoc2012">more details in the official Timeline</a></li>
<br>

<h2>How to Apply ?</h2>
<p>
  We like proactive people, we encourage you to contact us before the students application program begins, so please check the following items and proceed with them:
<br><br>

 <li>Make sure that you are an elegible student to participate in the program</li>
 <li>Register into our <a href="http://lists.monkey-project.com/listinfo/monkey">Mailing List</a></li>
 <li>Feel free to send an email to the mailing list presenting your self</li>
 <li>Contact us through our IRC channel at irc.freenode.net #monkey
<li>Read, Improve, Create and Apply for one of our <?=$html->link('Ideas', array('controller' => 'gsoc2012', 'action' => 'Ideas'));?> posted!!!</li>
<li>Check the <a href="http://monkey-project.com/gsoc2012/template">Monkey Student Application Template</a> and send it to gsoc2012@monkey-project.com, this information
    will be only shared with the mentoring team</li>
<li>On March 26th, Google opens the studen application period, follow the guidelines of <a href="http://google-melange.com">GSoC Site</a> and take your time to continue
working your proposal.</li>
<li><B>Students application DEADLINE is April 06th</B></li>
<br>
</p>

<h2>Project Ideas</h2>
<p>
Our pool of project ideas is found at <?=$html->link('gsoc2012/ideas', array('controller' => 'gsoc2012', 'action' => 'ideas'));?>. Most
of the items published here are not exclusive, please feel free to apply with your own ideas, we love creative people!. Also we encourage
you to get in touch with us to talk about them, we want to support good ideas :)
</p>

<h2>Information for Students</h2>
<p>
	We have built a Student Template which must be sent to us once you have sent your GSoC application. The template is located
	in <?=$html->link('gsoc2012/template', array('controller' => 'gsoc2012', 'action' => 'template'));?>
</p>

<h2>Contact us !</h2>
<p>
We are always open to ideas and suggestions, please feel free to contact us through our
<a href='http://lists.monkey-project.com'>Mailing List</a>. If you want a private communication
you can do it through <font class="email">gsoc2012@monkey-project.com</font>
<br><br>
If you prefer, you can also find us on irc.freenode.net #monkey.
</p>

<h2>Useful Links</h2>
<li><?=$html->link('Google Summer of Code 2012', 'http://www.google-melange.com');?></li>
<li><?=$html->link('Frequently Asked Questions', 'http://www.google-melange.com/document/show/gsoc_program/google/gsoc2012/faqs');?></li>


</div>
