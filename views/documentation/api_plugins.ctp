<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<HTML
><HEAD
><TITLE
>Monkey Plugins</TITLE
><META
NAME="GENERATOR"
CONTENT="Modular DocBook HTML Stylesheet Version 1.79"><LINK
REL="HOME"
TITLE="Monkey HTTP Daemon 0.12.0 Documentation"
HREF="index"><LINK
REL="UP"
TITLE="Monkey API"
HREF="api"><LINK
REL="PREVIOUS"
TITLE="Monkey Events"
HREF="api_events"></HEAD
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
HREF="api_events"
ACCESSKEY="P"
>Prev</A
></TD
><TD
WIDTH="80%"
ALIGN="center"
VALIGN="bottom"
>Chapter 5. Monkey API</TD
><TD
WIDTH="10%"
ALIGN="right"
VALIGN="bottom"
>&nbsp;</TD
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
NAME="AEN444"
>5.3. Monkey Plugins</A
></H1
><P
>&#13;  A plugin for Monkey is a shared library written in C which is loaded on startup per
  instruction of the <TT
CLASS="filename"
>plugins.load</TT
> configuration file. This plugin
  is composed by mandatory and optional functions that work like hooks being called from
  Monkey core.
</P
><P
>&#13;  Every Monkey hook function is prefixed with <TT
CLASS="filename"
>_mkp_</TT
>.
</P
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN450"
>5.3.1. Mandatory hooks</A
></H2
><DIV
CLASS="sect3"
><H3
CLASS="sect3"
><A
NAME="AEN452"
>5.3.1.1. _mkp_init()</A
></H3
><P
>&#13;    Function called when registering the plugin, it also allows 
    to set basic configuration.
  </P
><PRE
CLASS="programlisting"
>int _mkp_init(struct plugin_api **api, char *confdir)</PRE
><P
>&#13;    Return Value: On success, the plugin returns 0. On error, -1 is returned and the plugin 
    is unregistered by Monkey.
  </P
></DIV
><DIV
CLASS="sect3"
><H3
CLASS="sect3"
><A
NAME="AEN457"
>5.3.1.2. _mkp_exit()</A
></H3
><P
>&#13;    Function called before to unload the plugin, the plugin must free the used memory 
    resources.
  </P
><PRE
CLASS="programlisting"
>void _mkp_exit()</PRE
><P
>&#13;    Return Value: No return value.
  </P
></DIV
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN462"
>5.3.2. Core Plugin</A
></H2
><P
>&#13;    The Core plugins interface, allow plugins to define some data in the process context or 
    thread context depending of it needs when Monkey is starting up.
  </P
><DIV
CLASS="sect3"
><H3
CLASS="sect3"
><A
NAME="AEN465"
>5.3.2.1. _mkp_core_prctx()</A
></H3
><P
>&#13;      This function is invoked when Monkey is still in the process context, the 
      server loop has not yet started
    </P
><PRE
CLASS="programlisting"
>void _mkp_core_prctx()</PRE
><P
>&#13;      Plugin definition: MK_PLUGIN_CORE_PRCTX
    </P
></DIV
><DIV
CLASS="sect3"
><H3
CLASS="sect3"
><A
NAME="AEN470"
>5.3.2.2. _mkp_core_thctx()</A
></H3
><P
>&#13;    This function is invoked when Monkey goes into the thread context. When each worker
    thread is started this function is invoked. Server loop has not yet started
  </P
><PRE
CLASS="programlisting"
>void _mkp_core_thctx()</PRE
><P
>&#13;  Plugin definition: MK_PLUGIN_CORE_THCTX
</P
></DIV
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN475"
>5.3.3. Stage Plugin</A
></H2
><P
>&#13;  Every single HTTP request is placed in a cycle of stages. The request pass around five stages
  and each one provides a hook function which is invoked by Monkey, so you can program your own
  routines and program specific actions when the stage is being called.
</P
><DIV
CLASS="sect3"
><H3
CLASS="sect3"
><A
NAME="AEN478"
>5.3.3.1. Return values</A
></H3
><P
>&#13;    MK_PLUGIN_RET_CONTINUE: The plugin will not take any action and the request can continue be 
    processed normally.
  </P
><P
>&#13;    MK_PLUGIN_RET_NOT_ME: The plugin will not own the request.
  </P
><P
>&#13;    MK_PLUGIN_RET_END: The plugin has finished to work the request.
  </P
><P
>&#13;    MK_PLUGIN_RET_CLOSE_CNX: The client connection must be closed.
  </P
></DIV
><DIV
CLASS="sect3"
><H3
CLASS="sect3"
><A
NAME="AEN484"
>5.3.3.2. _mkp_stage_10()</A
></H3
><P
>&#13;    This is the first stage of the cycle, it means that the HTTP remote connection has been 
    just accept()ed and not yet assigned to a working thread. At this level you just have the 
    remote socket file descriptor.
  </P
><PRE
CLASS="programlisting"
>int _mkp_stage_10(int sockfd)</PRE
><P
>&#13;    Plugin definition: MK_PLUGIN_STAGE_10
  </P
><P
>&#13;    Return values: MK_PLUGIN_RET_CONTINUE or MK_PLUGIN_RET_CLOSE_CNX.
  </P
></DIV
><DIV
CLASS="sect3"
><H3
CLASS="sect3"
><A
NAME="AEN490"
>5.3.3.3. _mkp_stage_20()</A
></H3
><P
>&#13;    On this stage the HTTP Request stream has been just received and parsed. If you have pipelined
    request, this function will be invoked as many pipelined request exist.
  </P
><PRE
CLASS="programlisting"
>int _mkp_stage_20(struct client_request *cr, struct request *sr)</PRE
><P
>&#13;    Plugin definition: MK_PLUGIN_STAGE_20
  </P
><P
>&#13;    Return values: MK_PLUGIN_RET_CONTINUE or MK_PLUGIN_RET_CLOSE_CNX.
  </P
></DIV
><DIV
CLASS="sect3"
><H3
CLASS="sect3"
><A
NAME="AEN496"
>5.3.3.4. _mkp_stage_30()</A
></H3
><P
>&#13;    The plugin acts like an Object handler, it will take care of the request, it decides what to do 
    with the request.
  </P
><PRE
CLASS="programlisting"
>int _mkp_stage_30(struct plugin *p, struct client_request *cr, struct request *sr)</PRE
><P
>&#13;    Plugin definition: MK_PLUGIN_STAGE_30
  </P
><P
>&#13;    Return values: MK_PLUGIN_RET_NOT_ME, MK_PLUGIN_RET_CONTINUE, MK_PLUGIN_RET_END or MK_PLUGIN_RET_CLOSE_CNX.
  </P
></DIV
><DIV
CLASS="sect3"
><H3
CLASS="sect3"
><A
NAME="AEN502"
>5.3.3.5. _mkp_stage_40()</A
></H3
><P
>&#13;    The request has ended, the content has been served.
  </P
><PRE
CLASS="programlisting"
>int _mkp_stage_40(struct client_request *cr, struct request *sr)</PRE
><P
>&#13;    Plugin definition: MK_PLUGIN_STAGE_40
  </P
><P
>&#13;    Return values: MK_PLUGIN_RET_NOT_ME or MK_PLUGIN_RET_CONTINUE.
  </P
></DIV
><DIV
CLASS="sect3"
><H3
CLASS="sect3"
><A
NAME="AEN508"
>5.3.3.6. _mkp_stage_50()</A
></H3
><P
>&#13;    Client connection has been closed by Monkey core.
  </P
><PRE
CLASS="programlisting"
>int _mkp_stage_50(int sockfd)</PRE
><P
>&#13;    Plugin definition: MK_PLUGIN_STAGE_50
  </P
><P
>&#13;    Return values: MK_PLUGIN_RET_NOT_ME or MK_PLUGIN_RET_CONTINUE.
  </P
></DIV
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN514"
>5.3.4. Networking Plugin</A
></H2
><P
>&#13;  A Networking plugin provide the networking functions for the core of Monkey, it basically provides a 
 mechanism to replace the I/O and IP related functions. Just one networking plugin can exists for I/O and 
  IP.
</P
><DIV
CLASS="sect3"
><H3
CLASS="sect3"
><A
NAME="AEN517"
>5.3.4.1. I/O</A
></H3
><P
>Input and Output provides functions to work with basic socket operations</P
><P
>Plugin definition: MK_PLUGIN_NETWORK_IO</P
><DIV
CLASS="sect4"
><H4
CLASS="sect4"
><A
NAME="AEN521"
>5.3.4.1.1. _mkp_network_io_accept()</A
></H4
><P
>Accept socket conection</P
><PRE
CLASS="programlisting"
>int _mkp_network_io_accept(int server_fd, struct sockaddr_in sockaddr)</PRE
></DIV
><DIV
CLASS="sect4"
><H4
CLASS="sect4"
><A
NAME="AEN525"
>5.3.4.1.2. _mkp_network_io_accept()</A
></H4
><P
>Accept socket conection</P
><PRE
CLASS="programlisting"
>int _mkp_network_io_accept(int server_fd, struct sockaddr_in sockaddr)</PRE
></DIV
><DIV
CLASS="sect4"
><H4
CLASS="sect4"
><A
NAME="AEN529"
>5.3.4.1.3. _mkp_network_io_read()</A
></H4
><P
>Read from socket</P
><PRE
CLASS="programlisting"
>int _mkp_network_io_accept(int server_fd, struct sockaddr_in sockaddr)</PRE
></DIV
><DIV
CLASS="sect4"
><H4
CLASS="sect4"
><A
NAME="AEN533"
>5.3.4.1.4. _mkp_network_io_write()</A
></H4
><P
>Write to socket</P
><PRE
CLASS="programlisting"
>int _mkp_network_io_write(int sockfd, const void *buf, size_t count)</PRE
></DIV
><DIV
CLASS="sect4"
><H4
CLASS="sect4"
><A
NAME="AEN537"
>5.3.4.1.5. _mkp_network_io_writev()</A
></H4
><P
>Write iov struct to socket</P
><PRE
CLASS="programlisting"
>int _mkp_network_io_writev(int sockfd, struct mk_iov *mk_io)</PRE
></DIV
><DIV
CLASS="sect4"
><H4
CLASS="sect4"
><A
NAME="AEN541"
>5.3.4.1.6. _mkp_network_io_close()</A
></H4
><P
>Close socket</P
><PRE
CLASS="programlisting"
>int _mkp_network_io_close(int sockfd)</PRE
></DIV
><DIV
CLASS="sect4"
><H4
CLASS="sect4"
><A
NAME="AEN545"
>5.3.4.1.7. _mkp_network_io_connect</A
></H4
><P
>Connect to remote socket server</P
><PRE
CLASS="programlisting"
>int _mkp_network_io_connect(const char *host, int port)</PRE
></DIV
><DIV
CLASS="sect4"
><H4
CLASS="sect4"
><A
NAME="AEN549"
>5.3.4.1.8. _mkp_network_io_send_file()</A
></H4
><P
>Send file to socket</P
><PRE
CLASS="programlisting"
>int _mkp_network_io_send_file(int sockfd, int filefd, off_t *file_offset, size_t file_count)</PRE
></DIV
></DIV
><DIV
CLASS="sect3"
><H3
CLASS="sect3"
><A
NAME="AEN553"
>5.3.4.2. IP</A
></H3
><P
></P
></DIV
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN556"
>5.3.5. Optional functions</A
></H2
><P
>&#13;  You should use these optional functions depending of your own needs, 
  as they are not mandatory you are able to extend and define the desired
  behaviors.
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
HREF="api_events"
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
>&nbsp;</TD
></TR
><TR
><TD
WIDTH="33%"
ALIGN="left"
VALIGN="top"
>Monkey Events</TD
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
>&nbsp;</TD
></TR
></TABLE
></DIV
></BODY
></HTML
>