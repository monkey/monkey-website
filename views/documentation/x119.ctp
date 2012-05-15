<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<HTML
><HEAD
><TITLE
>Running Monkey web server</TITLE
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
TITLE="Specific configure options"
HREF="x115"><LINK
REL="NEXT"
TITLE="Contributing to Monkey Project"
HREF="contributing"></HEAD
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
>Monkey HTTP Daemon 0.12.0 Documentation: A Fast and Lightweight Web Server for Linux</TH
></TR
><TR
><TD
WIDTH="10%"
ALIGN="left"
VALIGN="bottom"
><A
HREF="x115"
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
HREF="contributing"
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
NAME="AEN119"
>1.5. Running Monkey web server</A
></H1
><P
>&#13;      Monkey configuration system is designed to let run the service from the
      local directory without an installation process unless you specify an installation 
      directory in the configuration step using the <SAMP
CLASS="prompt"
>--prefix</SAMP
> option.
    </P
><P
>&#13;      If the compilation process has ended successfully, you are ready to run Monkey Web 
      Server executing the following command:
    </P
><PRE
CLASS="programlisting"
>$ bin/monkey</PRE
><P
>&#13;      once the server has started up, you should get something like this in your
      console:
    </P
><PRE
CLASS="programlisting"
>Monkey HTTP Daemon 0.12.0
Built : Jul 16 2010 14:35:22
Home  : http://www.monkey-project.com
* Process ID is 8532
* Server socket listening on Port 2001
* 5 threads, 202 client connections per thread, total 1010</PRE
><P
>&#13;      by default, Monkey listen for incomming connections on TCP port 2001, give it a 
      try using your favorite web browser at <SAMP
CLASS="prompt"
>http://127.0.0.1:2001</SAMP
> .
    </P
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
HREF="x115"
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
HREF="contributing"
ACCESSKEY="N"
>Next</A
></TD
></TR
><TR
><TD
WIDTH="33%"
ALIGN="left"
VALIGN="top"
>Specific configure options</TD
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
>Contributing to Monkey Project</TD
></TR
></TABLE
></DIV
></BODY
></HTML
>