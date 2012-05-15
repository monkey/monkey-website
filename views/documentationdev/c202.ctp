<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<HTML
><HEAD
><TITLE
>Monkey API</TITLE
><META
NAME="GENERATOR"
CONTENT="Modular DocBook HTML Stylesheet Version 1.79"><LINK
REL="HOME"
TITLE="Monkey HTTP Daemon 0.11.0 Documentation"
HREF="index"><LINK
REL="PREVIOUS"
TITLE="Configuring Virtual Hosts"
HREF="x185"><LINK
REL="NEXT"
TITLE="Monkey Events"
HREF="api_events"></HEAD
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
>Monkey HTTP Daemon 0.11.0 Documentation:  A Fast and Lightweight Web Server for Linux</TH
></TR
><TR
><TD
WIDTH="10%"
ALIGN="left"
VALIGN="bottom"
><A
HREF="x185"
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
HREF="api_events"
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
NAME="AEN202"
></A
>Chapter 4. Monkey API</H1
><DIV
CLASS="sect1"
><H1
CLASS="sect1"
><A
NAME="AEN204"
>4.1. Introduction</A
></H1
><P
>&#13;  The Monkey API allows to extend the Monkey features and behavior through plugins, 
  which are shared libraries loaded on startup. It also provides a set of specific 
  functions to make easier the developer work.
</P
><P
>&#13;  In a Plugin context, exists two sets of functions: 'api functions' and 'hook functions'. API functions are
  provided through the <TT
CLASS="filename"
>plugin_api</TT
> structure passed to the plugin on startup when the 
  _mkp_init() hook function is invoked. This structure contains the API functions to handle strings, events, 
  memory and others.
</P
><P
>&#13;  In the other side, hook functions are callbacks used by Monkey depending of the type of plugin defined. 
  For an easy identification, all hooks functions are prefixed with <TT
CLASS="filename"
>_mkp_</TT
>. Please check 
  the following sections for more details.
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
HREF="x185"
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
HREF="api_events"
ACCESSKEY="N"
>Next</A
></TD
></TR
><TR
><TD
WIDTH="33%"
ALIGN="left"
VALIGN="top"
>Configuring Virtual Hosts</TD
><TD
WIDTH="34%"
ALIGN="center"
VALIGN="top"
>&nbsp;</TD
><TD
WIDTH="33%"
ALIGN="right"
VALIGN="top"
>Monkey Events</TD
></TR
></TABLE
></DIV
></BODY
></HTML
>