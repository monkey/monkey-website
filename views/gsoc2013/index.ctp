<div class="gsoc">

<h1>Google Summer of Code 2013</h1>
<div class="gsoc_menu">
	<p>
	<?=$html->link('GSoC Main', array('controller' => 'gsoc2013', 'action' => 'index'));?>
	&nbsp;&nbsp;
	<?=$html->link('Project Ideas', array('controller' => 'gsoc2013', 'action' => 'ideas'));?>
	&nbsp;&nbsp;
	<?=$html->link('Students Template', array('controller' => 'gsoc2013', 'action' => 'template'));?>
	</p>
</div>


<p>
        <span class="label label-warning">Attention!</span>
        Our organization is current applying to be part of GSoC 2013. We are NOT an accepted organization yet.
</p>
<br>

<h2>Welcome</h2>
<div class="row-fluid">
    <div class="span4">
	<?
		echo $html->image('gsoc2013.png');
	?>
    </div>
    <div class="span8">
    <p>
        Welcome to the <a href="http://google-melange.com">Google Summer of Code 2013</a>/<a href="http://monkey-project.com">Monkey project page</a>.
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

<h2>Important Dates</h2>
<p>
<ul>
    <li>March 29: Mentoring organization application deadline</li>
    <li>April 08: List of accepted mentoring organizations published on <a href="http://www.google-melange.com">GSoC site</a></li>
    <li>April 09-12: Would-be student participants discuss application ideas with mentoring organizations</li>
    <li>April 22: Student application period opens</li>
    <li>May 03: Student application deadline</li>
    <li><a href="http://www.google-melange.com/gsoc/document/show/gsoc_program/google/gsoc2013/help_page#2._What_is_the_program_timeline">more details in the official Timeline</a></li>
</ul>
</p>

<br>

<h2>How to Apply ?</h2>
<p>
  We like proactive people, we encourage you to contact us before the students application program begins, so please check the following items and proceed with them:
<br>
<ul>
 <li>Make sure that you are an elegible student to participate in the program</li>
 <li>Register into our <a href="http://lists.monkey-project.com/listinfo/monkey">Mailing List</a></li>
 <li>Feel free to send an email to the mailing list presenting your self</li>
 <li>Contact us through our IRC channel at irc.freenode.net #monkey
<li>Read, Improve, Create and Apply for one of our <?=$html->link('Ideas', array('controller' => 'gsoc2013', 'action' => 'ideas'));?> posted!!!</li>
<li>Check the <a href="http://monkey-project.com/gsoc2013/template">Monkey Student Application Template</a> and send it to gsoc2013@monkey-project.com, this information
    is confidential and will be shared only with the mentoring team</li>
<li>On April 22th, Google opens the studen application period, follow the guidelines of <a href="http://google-melange.com">GSoC Site</a> and take your time to continue
working your proposal.</li>
</ul>
</p>

<span class="label label-warning">Attention!</span>
<p class="text-warning">Students application DEADLINE is May 03th</p>

<h2>Project Ideas</h2>
<p>
Our pool of project ideas is found at <?=$html->link('gsoc2013/ideas', array('controller' => 'gsoc2013', 'action' => 'ideas'));?>. Most
of the items published here are not exclusive, please feel free to apply with your own ideas, we love creative people!. Also we encourage
you to get in touch with us to talk about them, we want to support good ideas :)
</p>

<h2>Information for Students</h2>
<p>
	We have built a Student Template which must be sent to us once you have sent your GSoC application. The template is located
	in <?=$html->link('gsoc2013/template', array('controller' => 'gsoc2013', 'action' => 'template'));?>
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
<li><?=$html->link('Google Summer of Code 2013', 'http://www.google-melange.com');?></li>
<li><?=$html->link('Frequently Asked Questions', 'http://www.google-melange.com/gsoc/document/show/gsoc_program/google/gsoc2013/help_page');?></li>


</div>
