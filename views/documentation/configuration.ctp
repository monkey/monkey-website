<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<HTML
><HEAD
><TITLE
>Monkey Configuration</TITLE
><META
NAME="GENERATOR"
CONTENT="Modular DocBook HTML Stylesheet Version 1.79"><LINK
REL="HOME"
TITLE="Monkey HTTP Daemon 0.12.0 Documentation"
HREF="index"><LINK
REL="UP"
TITLE="Server Configuration"
HREF="p236"><LINK
REL="PREVIOUS"
TITLE="Server Configuration"
HREF="p236"><LINK
REL="NEXT"
TITLE="Configuration structure files"
HREF="x251"></HEAD
><BODY
CLASS="chapter"
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
HREF="p236"
ACCESSKEY="P"
>Prev</A
></TD
><TD
WIDTH="80%"
ALIGN="center"
VALIGN="bottom"
></TD
><TD
WIDTH="10%"
ALIGN="right"
VALIGN="bottom"
><A
HREF="x251"
ACCESSKEY="N"
>Next</A
></TD
></TR
></TABLE
><HR
ALIGN="LEFT"
WIDTH="100%"></DIV
><DIV
CLASS="chapter"
><H1
><A
NAME="ch2"
></A
>Chapter 3. Monkey Configuration</H1
><DIV
CLASS="sect1"
><H1
CLASS="sect1"
><A
NAME="AEN244"
>3.1. Indented Configuration Mode</A
></H1
><P
>&#13;    Monkey HTTP Daemon implements an innovator configuration mode called 'Indented Configuration'. This new mode
    aims to provide a clean way to force the system administrator to keep a legible configuration along all configuration
    files. People with basic knowledge of Python programming language is aware of the indented language mode, we have implemented
    the same great idea for configuration. If your configuration file is not indented properly, Monkey will stop working.
  </P
><P
>&#13;    The configuration handle three main actors: sections, entries and comments. Each section has multiple entries and you can define 
    as many comments as you want, but always following the Monkey indentation rules. Main sections are defining at beginning of the 
    new line, and their entries are indented under the section declaration, take a look to the following example:
  </P
><PRE
CLASS="programlisting"
>[SERVER]
    # Port :
    # ------
    # Port is the number of the door in which Monkey will be listened through
    # connections and petitions. This number can have any value between 1 and
    # 65535. Whatever specified number less than or equal to 1024, only will
    # be able to be established as a connection door if the user posesses
    # privledges of Root.

    Port 2001</PRE
><P
>&#13;    The below example, shows a section called SERVER which is defined inside brackets. In the next line exists a couple of commented lines
    and are indented, so ANY COMMENT inside a section MUST BE INDENTED. Also any entry as the key 'Port' and value '2001' are INDENTED TOO.
    A section ends when a new line contains some text NOT INDENTED.
  </P
><P
>&#13;    The indentation level is defined by the system administrator, Monkey Team suggest to use an indentation level of four spaces. You are 
    able to define your own indentation level. The first indentation level found will be used to parse the whole file in question.
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
HREF="p236"
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
HREF="x251"
ACCESSKEY="N"
>Next</A
></TD
></TR
><TR
><TD
WIDTH="33%"
ALIGN="left"
VALIGN="top"
>Server Configuration</TD
><TD
WIDTH="34%"
ALIGN="center"
VALIGN="top"
><A
HREF="p236"
ACCESSKEY="U"
>Up</A
></TD
><TD
WIDTH="33%"
ALIGN="right"
VALIGN="top"
>Configuration structure files</TD
></TR
></TABLE
></DIV
></BODY
></HTML
>