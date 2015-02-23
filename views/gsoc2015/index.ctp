<div class="gsoc">

<h1>Google Summer of Code 2015</h1>
<div class="gsoc_menu">
	<p>
	<?=$html->link('GSoC Main', array('controller' => 'gsoc2015', 'action' => 'index'));?>
	&nbsp;&nbsp;
	<?=$html->link('Project Ideas', array('controller' => 'gsoc2015', 'action' => 'ideas'));?>
	&nbsp;&nbsp;
	<?=$html->link('Getting Started', array('controller' => 'gsoc2015', 'action' => 'getting_started'));?>
	&nbsp;&nbsp;
	<?=$html->link('Students Template', array('controller' => 'gsoc2015', 'action' => 'template'));?>
	</p>
</div>


<br>

<h2>Welcome</h2>
<div class="row-fluid">
    <div class="span4">
	<?
		echo $html->image('gsoc2015.png');
	?>
    </div>
    <div class="span8">
    <p>
        Welcome to the <a href="http://google-melange.com">Google Summer of Code 2015</a>/<a href="http://monkey-project.com">Monkey project page</a>.
        On this section you will find relevant information about the application process for our organization and specific requirements to take in
        consideration.
    </p>
    <p>
        Please read carefuly the information provided as it will be helpful to align your student application with our
        organization requirements.
    </p>
    </div>
</div>
<br>
<div class="row-fluid">
<h2>About the program</h2>
<p>
        <a href="http://google-melange.com">Google Summer of Code</a> (aka GSoC), is one of the most important instance where students can involve very
	quickly and in a friendly maner in open source projects. The rules are very simple:
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
</p>
</div>

<br>

<h2>How to Apply ?</h2>
<p>
  We like proactive people, we encourage you to contact us before the student application period opens, so please check the following items and proceed with them:
<br>
<ul>
 <li>Make sure that you are an elegible student to participate in the program</li>
 <li>Register into our <a href="http://lists.monkey-project.com/listinfo/monkey">Mailing List</a></li>
 <li>Browse our <a href="http://github.com/monkey">Github repository</a>, check how our code looks like</li>
 <li>Feel free to send an email to the mailing list presenting your self</li>
 <li>Contact us through our IRC channel at irc.freenode.net #monkey</li>
<li>Read, Improve, Create and Apply for one of our <?=$html->link('Ideas', array('controller' => 'gsoc2015', 'action' => 'ideas'));?> posted!!!</li>
<li>Check the <a href="http://monkey-project.com/gsoc2015/template">Monkey Student Application Template</a> and send it to gsoc@monkey-project.com, this information
    is confidential and will be shared only with the mentoring team</li>
<li>On March 10th, Google opens the studen application period, follow the guidelines of <a href="http://google-melange.com">GSoC Site</a> and take your time to continue
working your proposal.</li>
</ul>
</p>

<h2>Project Ideas</h2>
<p>
Our pool of project ideas is found at <?=$html->link('gsoc2015/ideas', array('controller' => 'gsoc2015', 'action' => 'ideas'));?>. Most
of the items published here are not exclusive, please feel free to apply with your own ideas, we love creative people!. Also we encourage
you to get in touch with us to talk about them, we want to support good ideas :)
</p>

<h2>Information for Students</h2>
<p>
	We have built a Student Template which must be sent to us once you have sent your GSoC application. The template is located
	in <?=$html->link('gsoc2015/template', array('controller' => 'gsoc2015', 'action' => 'template'));?>
</p>
<p>
        Also we made a special section for YOU, check our
        <?=$html->link('gsoc2015/getting_started', array('controller' => 'gsoc2015', 'action' => 'getting_started'));?> page.
</p>

<h2>Contact us !</h2>
<p>
We are always open to ideas and suggestions, please feel free to contact us through our
<a href='http://lists.monkey-project.com'>Mailing List</a>. If you want a private communication
you can do it through <font class="email">gsoc@monkey-project.com</font>
<br><br>
If you prefer, you can also find us on irc.freenode.net #monkey.
</p>

<h2>Useful Links</h2>
<li><?=$html->link('Google Summer of Code 2015', 'http://www.google-melange.com');?></li>
<li><?=$html->link('Frequently Asked Questions', 'http://www.google-melange.com/gsoc/document/show/gsoc_program/google/gsoc2015/help_page');?></li>


</div>
