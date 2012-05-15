<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<HTML
><HEAD
><TITLE
>Monkey Plugins</TITLE
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
HREF="api"></HEAD
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
NAME="AEN207"
>4.2. Monkey Plugins</A
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
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN211"
>4.2.1. Mandatory functions</A
></H2
><DIV
CLASS="sect3"
><H3
CLASS="sect3"
><A
NAME="AEN213"
>4.2.1.1. _mkp_init()</A
></H3
><P
>&#13;    Function called when registering the plugin, it also allows 
    to set basic configuration.
  </P
><PRE
CLASS="programlisting"
>&#13;    void _mkp_init(struct plugin_api **api, char *confdir)
  </PRE
></DIV
><DIV
CLASS="sect3"
><H3
CLASS="sect3"
><A
NAME="AEN217"
>4.2.1.2. _mkp_exit()</A
></H3
><P
>&#13;    Function called before to unload the plugin, the plugin must free the used memory resources
  </P
><PRE
CLASS="programlisting"
>&#13;    void _mkp_exit()
  </PRE
></DIV
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN221"
>4.2.2. Core Plugin functions</A
></H2
><P
>&#13;    The Core plugins allow plugins to define some data in the process context or 
    thread context depending of it needs when Monkey is starting up.
  </P
><DIV
CLASS="sect3"
><H3
CLASS="sect3"
><A
NAME="AEN224"
>4.2.2.1. _mkp_core_prctx()</A
></H3
><P
>&#13;      This function is invoked when Monkey is still in the process context, the 
      server loop has not yet started
    </P
><PRE
CLASS="programlisting"
>&#13;      void _mkp_core_prctx()
    </PRE
><P
>&#13;      Plugin definition: MK_PLUGIN_CORE_PRCTX
    </P
></DIV
><DIV
CLASS="sect3"
><H3
CLASS="sect3"
><A
NAME="AEN229"
>4.2.2.2. _mkp_core_thctx()</A
></H3
><P
>&#13;    This function is invoked when Monkey goes into the thread context. When each worker
    thread is started this function is invoked. Server loop has not yet started
  </P
><PRE
CLASS="programlisting"
>&#13;    void _mkp_core_thctx()
  </PRE
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
NAME="AEN234"
>4.2.3. Stage Plugin functions</A
></H2
><P
>&#13;  Every single http request is placed in a cycle of stages. The request pass around five stages
  and each one provides a hook function which is invoked by Monkey. 
</P
><DIV
CLASS="sect3"
><H3
CLASS="sect3"
><A
NAME="AEN237"
>4.2.3.1. _mkp_stage_10()</A
></H3
><P
>&#13;    The HTTP remote connection has been just accept()ed, not yet assigned to a working thread.
  </P
><PRE
CLASS="programlisting"
>&#13;    int _mkp_stage_10(int sockfd)
  </PRE
><P
>&#13;    Plugin definition: MK_PLUGIN_STAGE_10
  </P
></DIV
><DIV
CLASS="sect3"
><H3
CLASS="sect3"
><A
NAME="AEN242"
>4.2.3.2. _mkp_stage_20()</A
></H3
><P
>&#13;    The HTTP Request stream has been just received.
  </P
><PRE
CLASS="programlisting"
>&#13;    int _mkp_stage_20(struct client_request *cr, struct request *sr)
  </PRE
><P
>&#13;    Plugin definition: MK_PLUGIN_STAGE_20
  </P
></DIV
><DIV
CLASS="sect3"
><H3
CLASS="sect3"
><A
NAME="AEN247"
>4.2.3.3. _mkp_stage_30()</A
></H3
><P
>&#13;    The plugin acts like an Object handler, it will take care of the request, it decides what to do 
    with the request
  </P
><PRE
CLASS="programlisting"
>&#13;    int _mkp_stage_30(struct client_request *cr, struct request *sr)
  </PRE
><P
>&#13;    Plugin definition: MK_PLUGIN_STAGE_30
  </P
></DIV
><DIV
CLASS="sect3"
><H3
CLASS="sect3"
><A
NAME="AEN252"
>4.2.3.4. _mkp_stage_40()</A
></H3
><P
>&#13;    The request has ended, the content has been served.
  </P
><PRE
CLASS="programlisting"
>&#13;    int _mkp_stage_40(struct client_request *cr, struct request *sr)
  </PRE
><P
>&#13;    Plugin definition: MK_PLUGIN_STAGE_40
  </P
></DIV
><DIV
CLASS="sect3"
><H3
CLASS="sect3"
><A
NAME="AEN257"
>4.2.3.5. _mkp_stage_50()</A
></H3
><P
>&#13;    Client connection has been closed by Monkey core.
  </P
><PRE
CLASS="programlisting"
>&#13;    int _mkp_stage_50(int sockfd)
  </PRE
><P
>&#13;    Plugin definition: MK_PLUGIN_STAGE_50
  </P
></DIV
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN262"
>4.2.4. Networking Plugin functions</A
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
NAME="AEN265"
>4.2.4.1. I/O Functions</A
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
NAME="AEN269"
>4.2.4.1.1. _mkp_network_io_accept()</A
></H4
><P
>Accept socket conection</P
><PRE
CLASS="programlisting"
>&#13;      int _mkp_network_io_accept(int server_fd, struct sockaddr_in sockaddr)
    </PRE
></DIV
></DIV
><DIV
CLASS="sect3"
><H3
CLASS="sect3"
><A
NAME="AEN273"
>4.2.4.2. IP functions</A
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
NAME="AEN276"
>4.2.5. Optional functions</A
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
>&nbsp;</TD
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
>&nbsp;</TD
></TR
></TABLE
></DIV
></BODY
></HTML
>