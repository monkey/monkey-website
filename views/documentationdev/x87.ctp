<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<HTML
><HEAD
><TITLE
>Configuring Virtual Hosts</TITLE
><META
NAME="GENERATOR"
CONTENT="Modular DocBook HTML Stylesheet Version 1.79"><LINK
REL="HOME"
TITLE="Monkey HTTP Daemon 0.10.0 Documentation"
HREF="index"><LINK
REL="UP"
TITLE="Virtual Hosts"
HREF="c81"><LINK
REL="PREVIOUS"
TITLE="Virtual Hosts"
HREF="c81"><LINK
REL="NEXT"
TITLE="Monket Plugin API"
HREF="c104"></HEAD
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
>Monkey HTTP Daemon 0.10.0 Documentation:  A Fast and Lightweight Web Server for Linux</TH
></TR
><TR
><TD
WIDTH="10%"
ALIGN="left"
VALIGN="bottom"
><A
HREF="c81"
ACCESSKEY="P"
>Prev</A
></TD
><TD
WIDTH="80%"
ALIGN="center"
VALIGN="bottom"
>Chapter 3. Virtual Hosts</TD
><TD
WIDTH="10%"
ALIGN="right"
VALIGN="bottom"
><A
HREF="c104"
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
NAME="AEN87"
>3.2. Configuring Virtual Hosts</A
></H1
><P
>&#13;     For Monkey, everything is a virtual host. These are defined by creating a configuration file
  under conf/sites/ directory. Thus, a minimal web server equals to having only one virtual host;
  for that end is required the existence of at least one virtual host definition-file called 'default'.
</P
><P
>&#13;  The available options for virtual host configuration files are the following:
</P
><P
></P
><UL
COMPACT="COMPACT"
><LI
><P
>&#13;      DocumentRoot:
      Defines the base directory for the virtual host. In other words, where in the filesystem
      is placed its content.
    </P
></LI
><LI
><P
>&#13;      Servername:
      Sets the the virtual host identifier (e.g. mysite.example.com). Like a Tip, you can 
      experiment with virtual hosts in the local machine by adding lines 
      to your /etc/hosts file, for example:
    </P
><PRE
CLASS="programlisting"
>&#13;      127.0.0.1   mysite_1
      127.0.0.1   mysite_2
    </PRE
><P
>&#13;      Then, if you start your web browser and go to http://mysite_1 you get one thing, and
      going to http://mysite_2 another (assuming you've defined diferent contents for them)
    </P
></LI
><LI
><P
>&#13;      AccessLog: Specifies the full path and name of the file where successful requests 
      will be logged.
    </P
></LI
><LI
><P
>&#13;      ErrorLog: Specifies the full path and name of the file where incorrect requests 
      will be logged.
    </P
></LI
><LI
><P
>&#13;      GetDir: Enables or disables directory listing in case of absent index 
      file (tipically index). Accepted values: on/off
    </P
></LI
></UL
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
HREF="c81"
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
HREF="c104"
ACCESSKEY="N"
>Next</A
></TD
></TR
><TR
><TD
WIDTH="33%"
ALIGN="left"
VALIGN="top"
>Virtual Hosts</TD
><TD
WIDTH="34%"
ALIGN="center"
VALIGN="top"
><A
HREF="c81"
ACCESSKEY="U"
>Up</A
></TD
><TD
WIDTH="33%"
ALIGN="right"
VALIGN="top"
>Monket Plugin API</TD
></TR
></TABLE
></DIV
></BODY
></HTML
>