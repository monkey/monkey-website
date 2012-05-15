<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<HTML
><HEAD
><TITLE
>Specific configure options</TITLE
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
TITLE="Configure and compile"
HREF="x103"><LINK
REL="NEXT"
TITLE="Running Monkey web server"
HREF="x119"></HEAD
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
HREF="x103"
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
HREF="x119"
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
NAME="AEN115"
>1.4. Specific configure options</A
></H1
><P
>&#13;      Monkey uses a similar autotools scripts to configure and set the proper enviroment. 
      Also, you can configure Monkey with your specific paths, just run 
      './configure -h' to get a full list of the available options as:

      <PRE
CLASS="programlisting"
>monkey@monkey-project.com:~/MonkeyD$ ./configure -h

Usage: configure [--prefix=PREFIXDIR] [ --bindir=BINDIR]
         [--sysconfdir=SYSCONFDIR] [--datadir=DATADIR]
         [--logdir=LOGDIR] [--plugdir=PLUGDIR]

Options: 
 --help		           Display this help and exit
 --version		   Display version information and exit
 --debug		   Compile Monkey with debugging symbols
 --trace		   Compile Monkey with trace messages (don't use in production)
        
 --prefix=PREFIX	   Install Monkey under PREFIX directory
 --bindir=BINDIR	   Install Monkey binaries under BINDIR directory
 --sysconfdir=SYSCONFDIR   Install Monkey conf files under SYSCONFDIR dir
 --datadir=DATADIR	   Install Monkey data dir files under DATADIR directory
 --logdir=LOGDIR	   Install Monkey log files under LOGDIR directory
 --plugdir=PLUGDIR	   Target directory for Monkey plugins</PRE
>
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
HREF="x103"
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
HREF="x119"
ACCESSKEY="N"
>Next</A
></TD
></TR
><TR
><TD
WIDTH="33%"
ALIGN="left"
VALIGN="top"
>Configure and compile</TD
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
>Running Monkey web server</TD
></TR
></TABLE
></DIV
></BODY
></HTML
>