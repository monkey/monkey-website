<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<HTML
><HEAD
><TITLE
>Details for developers</TITLE
><META
NAME="GENERATOR"
CONTENT="Modular DocBook HTML Stylesheet Version 1.79"><LINK
REL="HOME"
TITLE="Monkey HTTP Daemon 0.12.0 Documentation"
HREF="index"><LINK
REL="UP"
TITLE="Installation"
HREF="install"><LINK
REL="PREVIOUS"
TITLE="Running Monkey web server"
HREF="x118"><LINK
REL="NEXT"
TITLE="Server Configuration"
HREF="p176"></HEAD
><BODY
CLASS="sect1"
BGCOLOR="#FFFFFF"
TEXT="#000000"
LINK="#0000FF"
VLINK="#840084"
ALINK="#0000FF"
><DIV
CLASS="NAVHEADER"
><TABLE
SUMMARY="Header navigation table"
WIDTH="100%"
BORDER="0"
CELLPADDING="0"
CELLSPACING="0"
><TR
><TH
COLSPAN="3"
ALIGN="center"
>Monkey HTTP Daemon 0.12.0 Documentation</TH
></TR
><TR
><TD
WIDTH="10%"
ALIGN="left"
VALIGN="bottom"
><A
HREF="x118"
ACCESSKEY="P"
>Prev</A
></TD
><TD
WIDTH="80%"
ALIGN="center"
VALIGN="bottom"
>Chapter 1. Installation</TD
><TD
WIDTH="10%"
ALIGN="right"
VALIGN="bottom"
><A
HREF="p176"
ACCESSKEY="N"
>Next</A
></TD
></TR
></TABLE
><HR
ALIGN="LEFT"
WIDTH="100%"></DIV
><DIV
CLASS="sect1"
><H1
CLASS="sect1"
><A
NAME="AEN128"
>1.6. Details for developers</A
></H1
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN130"
>1.6.1. Where to start ? Hack Monkey !</A
></H2
><P
>&#13;      Monkey is an open source project, anyone is invited to colaborate and try to hack it, 
      we are always open for suggestions, we love creative people !, if you want to colaborate
      this section is for you.
    </P
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN133"
>1.6.2. Get development branch</A
></H2
><P
>&#13;      The first thing that a new developer should do, is clone the code located at the 
      development repository. Monkey is developed using GIT as main version control system, 
      you will need the git tools installed on your system in order to continue.
    </P
><P
>&#13;      In order to get the development branch, please run the following command:
    </P
><PRE
CLASS="programlisting"
><B
CLASS="command"
>$ git clone git://git.monkey-project.com/monkey</B
></PRE
><P
>&#13;        When the above command finish to obtain the development branch, you will notice a new 
        directory called <SAMP
CLASS="prompt"
>monkey</SAMP
>. That's the path where you want to go, 
        please run the configure script as was described previously and try to compile it
    </P
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN141"
>1.6.3. Configure with debugging symbols</A
></H2
><P
>&#13;      The common installation of Monkey remove the debugging symbols in the target executable,
      so for development purposes configure with:
      <PRE
CLASS="programlisting"
><B
CLASS="command"
>$ ./configure --debug</B
></PRE
>
    </P
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN146"
>1.6.4. Enable trace messages</A
></H2
><P
>&#13;      In addition to debugging symbols, sometimes is very useful to trace our program in order
      to check values, called functions, timings, etc. Monkey includes a cool feature called
      <SAMP
CLASS="prompt"
>Trace</SAMP
>, which allows to put trace messages in the code and print to 
      the screen very well formatted messages which include timings, name of the file 
      where is being called, caller function and an optional message. Trace is disabled 
      by default, so in order to enable it please configure with:
    </P
><PRE
CLASS="programlisting"
><B
CLASS="command"
>$ ./configure --trace</B
></PRE
><P
>&#13;      Also, we have added an enviroment variable that restrict the messages coming from 
      specific source files. If you export the variable MONKEY_TRACE in your shell before
      run Monkey with a source file name, the messages will be restricted.
    </P
><PRE
CLASS="programlisting"
><B
CLASS="command"
>$ export MONKEY_TRACE="http.c"</B
></PRE
><P
>&#13;      The example below will restrict trace messages with origin from http.c, you can add more
      restrictions if you want as:
    </P
><PRE
CLASS="programlisting"
><B
CLASS="command"
>$ export MONKEY_TRACE="server.c http.c epoll.c"</B
></PRE
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN158"
>1.6.5. Committing changes and providing GIT patches</A
></H2
><P
>&#13;      At this point you have a local copy of the Monkey GIT repository, if you are going to contribute 
      with patches you must first configure your local copy to set your name and e-mail, we want to know
      who is behind the Monkey improves :) . Please configure your name and e-mail with:
      <PRE
CLASS="programlisting"
><B
CLASS="command"
>$ git repo-config user.name "My Name"
$ git repo-config user.email "myemail@someprovider.com"</B
></PRE
>
    </P
><P
>&#13;      Once you have checked that you code is working as expected, you should proceed to commit your 
      changes to your local GIT repository, you can issue the commit with the following command:
      <PRE
CLASS="programlisting"
><B
CLASS="command"
>$ git commit -a -m "My modification details"</B
></PRE
>
    </P
><P
>&#13;      Make sure your commit was done checking the log history running:
      <PRE
CLASS="programlisting"
><B
CLASS="command"
>$ git log</B
></PRE
>
    </P
><P
>&#13;      The final step is to generate your GIT patch and send it to the Monkey mailing list, let's generate 
      the patch using GIT tools:
      <PRE
CLASS="programlisting"
><B
CLASS="command"
>$ git format-patch -1</B
></PRE
>
    </P
><P
>&#13;      The third command specifies the commit id from where the patch will be generated, you can use the commit
      hash generated by <SAMP
CLASS="prompt"
>git commit</SAMP
> previously which can be checked with 
      <SAMP
CLASS="prompt"
>git log</SAMP
> or use negative integer numbers to let the command know how many latest 
      commits to include in the patch, for our case just the last one, so we use -1.
    </P
><P
>&#13;      Now you are ready to provide your GIT patch to monkey@lists.monkey-project.com.
    </P
></DIV
></DIV
><DIV
CLASS="NAVFOOTER"
><HR
ALIGN="LEFT"
WIDTH="100%"><TABLE
SUMMARY="Footer navigation table"
WIDTH="100%"
BORDER="0"
CELLPADDING="0"
CELLSPACING="0"
><TR
><TD
WIDTH="33%"
ALIGN="left"
VALIGN="top"
><A
HREF="x118"
ACCESSKEY="P"
>Prev</A
></TD
><TD
WIDTH="34%"
ALIGN="center"
VALIGN="top"
><A
HREF="index"
ACCESSKEY="H"
>Home</A
></TD
><TD
WIDTH="33%"
ALIGN="right"
VALIGN="top"
><A
HREF="p176"
ACCESSKEY="N"
>Next</A
></TD
></TR
><TR
><TD
WIDTH="33%"
ALIGN="left"
VALIGN="top"
>Running Monkey web server</TD
><TD
WIDTH="34%"
ALIGN="center"
VALIGN="top"
><A
HREF="install"
ACCESSKEY="U"
>Up</A
></TD
><TD
WIDTH="33%"
ALIGN="right"
VALIGN="top"
>Server Configuration</TD
></TR
></TABLE
></DIV
></BODY
></HTML
>