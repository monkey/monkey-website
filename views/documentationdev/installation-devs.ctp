<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<HTML
><HEAD
><TITLE
>Details for developers</TITLE
><META
NAME="GENERATOR"
CONTENT="Modular DocBook HTML Stylesheet Version 1.79"><LINK
REL="HOME"
TITLE="Monkey HTTP Daemon 0.11.0 Documentation"
HREF="index"><LINK
REL="UP"
TITLE="Getting Started"
HREF="getting_started"><LINK
REL="PREVIOUS"
TITLE="Installation"
HREF="installation"><LINK
REL="NEXT"
TITLE="Configuration"
HREF="configuration"></HEAD
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
>Monkey HTTP Daemon 0.11.0 Documentation:  A Fast and Lightweight Web Server for Linux</TH
></TR
><TR
><TD
WIDTH="10%"
ALIGN="left"
VALIGN="bottom"
><A
HREF="installation"
ACCESSKEY="P"
>Prev</A
></TD
><TD
WIDTH="80%"
ALIGN="center"
VALIGN="bottom"
>Chapter 1. Getting Started</TD
><TD
WIDTH="10%"
ALIGN="right"
VALIGN="bottom"
><A
HREF="configuration"
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
NAME="AEN50"
>1.3. Details for developers</A
></H1
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN52"
>1.3.1. Where to start ? Hack Monkey !</A
></H2
><P
>&#13;      Monkey is a open source project, anyone is invited to colaborate and try to hack it, 
      we are always open for suggestions, we love creative people !, if you want to colaborate
      this section is for you.
    </P
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN55"
>1.3.2. Get development branch</A
></H2
><P
>&#13;      The first thing that a new developer should do, is clone the code located at the 
      development repository. Monkey is developed using GIT as main version control system, 
      you will need the git tools installed on your system in order to continue.
    </P
><P
>&#13;      In order to get the development branch, please run the following command:
      <PRE
CLASS="programlisting"
>&#13;        <B
CLASS="command"
>$ git clone git://repo.or.cz/MonkeyD.git</B
>
      </PRE
>
      When the above command finish to obtain the development branch, you will notice a new 
      directory called <SAMP
CLASS="prompt"
>MonkeyD</SAMP
>. That's the path where you want to go, 
      please run the configure script as was described previously and try to compile it
    </P
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN62"
>1.3.3. Configure with debugging symbols</A
></H2
><P
>&#13;      The common installation of Monkey remove the debugging symbols in the target executable,
      so for development purposes configure with:
      <PRE
CLASS="programlisting"
>&#13;        <B
CLASS="command"
>$ ./configure --debug</B
>
      </PRE
>
    </P
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN67"
>1.3.4. Enable trace messages</A
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

      <PRE
CLASS="programlisting"
>&#13;        <B
CLASS="command"
>$ ./configure --trace</B
>
      </PRE
>

      Also, we have added an enviroment variable that restrict the messages coming from 
      specific source files. If you export the variable MONKEY_TRACE in your shell before
      run Monkey with a source file name, the messages will be restricted.

      <PRE
CLASS="programlisting"
>&#13;        <B
CLASS="command"
>$ export MONKEY_TRACE="http.c"</B
>
      </PRE
>

      The example below will restrict trace messages with origin from http.c, you can add more
      restrictions if you want as:

      <PRE
CLASS="programlisting"
>&#13;        <B
CLASS="command"
>$ export MONKEY_TRACE="server.c http.c epoll.c"</B
>
      </PRE
>
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
HREF="installation"
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
HREF="configuration"
ACCESSKEY="N"
>Next</A
></TD
></TR
><TR
><TD
WIDTH="33%"
ALIGN="left"
VALIGN="top"
>Installation</TD
><TD
WIDTH="34%"
ALIGN="center"
VALIGN="top"
><A
HREF="getting_started"
ACCESSKEY="U"
>Up</A
></TD
><TD
WIDTH="33%"
ALIGN="right"
VALIGN="top"
>Configuration</TD
></TR
></TABLE
></DIV
></BODY
></HTML
>