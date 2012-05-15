<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<HTML
><HEAD
><TITLE
>Monkey Events</TITLE
><META
NAME="GENERATOR"
CONTENT="Modular DocBook HTML Stylesheet Version 1.79"><LINK
REL="HOME"
TITLE="Monkey HTTP Daemon 0.11.0 Documentation"
HREF="index"><LINK
REL="UP"
TITLE="Monkey API"
HREF="api"><LINK
REL="PREVIOUS"
TITLE="Monkey API"
HREF="api"><LINK
REL="NEXT"
TITLE="Monkey Plugins"
HREF="api_plugins"></HEAD
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
HREF="api"
ACCESSKEY="P"
>Prev</A
></TD
><TD
WIDTH="80%"
ALIGN="center"
VALIGN="bottom"
>Chapter 4. Monkey API</TD
><TD
WIDTH="10%"
ALIGN="right"
VALIGN="bottom"
><A
HREF="api_plugins"
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
NAME="AEN211"
>4.2. Monkey Events</A
></H1
><P
>&#13;  As part of the API interface, Monkey provides a set of functions and callbacks to
  work with events for any kind of file descriptor, more common used with sockets. These
  set of functions are wrappers for the epoll(7) Linux system call.
</P
><P
>&#13;  In order to use the events interface properly, you must register the file descriptor with the API
  function event_add() and define the hooks described above for the events read, write, close, error and 
  timeout.
</P
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN215"
>4.2.1. event_add()</A
></H2
><P
>This API function, register a file descriptor in the Monkey epoll thread interface</P
><PRE
CLASS="programlisting"
>&#13;    int event_add(int sockfd, struct plugin *handler, struct client_request *cr, struct request *sr)      
  </PRE
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN219"
>4.2.2. _mkp_event_read()</A
></H2
><P
>This hook function, is invoked when the file descriptor has some data ready to be read.</P
><PRE
CLASS="programlisting"
>&#13;    int _mkp_event_read(struct client_request *cr, struct request *sr)
  </PRE
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN223"
>4.2.3. _mkp_event_write()</A
></H2
><P
>This hook function, is invoked when the file descriptor is ready to receive data.</P
><PRE
CLASS="programlisting"
>&#13;    int _mkp_event_write(struct client_request *cr, struct request *sr)
  </PRE
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN227"
>4.2.4. _mkp_event_close()</A
></H2
><P
>This hook function, is invoked when the file descriptor has been closed.</P
><PRE
CLASS="programlisting"
>&#13;    int _mkp_event_close(struct client_request *cr, struct request *sr)
  </PRE
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN231"
>4.2.5. _mkp_event_error()</A
></H2
><P
>&#13;    This hook function, is invoked when some error has been reported in the file descriptor,
    if the context is sockets, a hangup or broken connection will provocate this hook being called.
  </P
><PRE
CLASS="programlisting"
>&#13;    int _mkp_event_error(struct client_request *cr, struct request *sr)
  </PRE
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN235"
>4.2.6. _mkp_event_timeout()</A
></H2
><P
>&#13;    This hook function is invoked when some timeout is reported in the file descriptor, the time
  used for this timeout is the time defined in Monkey core for the epoll() interface.</P
><PRE
CLASS="programlisting"
>&#13;    int _mkp_event_timeout(struct client_request *cr, struct request *sr)
  </PRE
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
HREF="api"
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
HREF="api_plugins"
ACCESSKEY="N"
>Next</A
></TD
></TR
><TR
><TD
WIDTH="33%"
ALIGN="left"
VALIGN="top"
>Monkey API</TD
><TD
WIDTH="34%"
ALIGN="center"
VALIGN="top"
><A
HREF="api"
ACCESSKEY="U"
>Up</A
></TD
><TD
WIDTH="33%"
ALIGN="right"
VALIGN="top"
>Monkey Plugins</TD
></TR
></TABLE
></DIV
></BODY
></HTML
>