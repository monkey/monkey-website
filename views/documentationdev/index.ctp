<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<HTML
><HEAD
><TITLE
>Monkey HTTP Daemon 0.11.0 Documentation</TITLE
><META
NAME="GENERATOR"
CONTENT="Modular DocBook HTML Stylesheet Version 1.79"><LINK
REL="NEXT"
TITLE="Getting Started"
HREF="getting_started"></HEAD
><BODY
CLASS="book"
BGCOLOR="#FFFFFF"
TEXT="#000000"
LINK="#0000FF"
VLINK="#840084"
ALINK="#0000FF"
><DIV
CLASS="BOOK"
><A
NAME="AEN1"
></A
><DIV
CLASS="TITLEPAGE"
><H1
CLASS="title"
><A
NAME="AEN1"
>Monkey HTTP Daemon 0.11.0 Documentation</A
></H1
><H2
CLASS="subtitle"
>A Fast and Lightweight Web Server for Linux</H2
><HR></DIV
><DIV
CLASS="TOC"
><DL
><DT
><B
>Table of Contents</B
></DT
><DT
>1. <A
HREF="getting_started"
>Getting Started</A
></DT
><DD
><DL
><DT
>1.1. <A
HREF="getting_started#AEN6"
>About</A
></DT
><DT
>1.2. <A
HREF="installation"
>Installation</A
></DT
><DD
><DL
><DT
>1.2.1. <A
HREF="installation#AEN15"
>Requirements</A
></DT
><DT
>1.2.2. <A
HREF="installation#AEN20"
>Download</A
></DT
><DT
>1.2.3. <A
HREF="installation#AEN24"
>Configure and compile</A
></DT
><DT
>1.2.4. <A
HREF="installation#AEN36"
>Specific configure options</A
></DT
><DT
>1.2.5. <A
HREF="installation#AEN40"
>Running Monkey web server</A
></DT
></DL
></DD
><DT
>1.3. <A
HREF="installation-devs"
>Details for developers</A
></DT
><DD
><DL
><DT
>1.3.1. <A
HREF="installation-devs#AEN52"
>Where to start ? Hack Monkey !</A
></DT
><DT
>1.3.2. <A
HREF="installation-devs#AEN55"
>Get development branch</A
></DT
><DT
>1.3.3. <A
HREF="installation-devs#AEN62"
>Configure with debugging symbols</A
></DT
><DT
>1.3.4. <A
HREF="installation-devs#AEN67"
>Enable trace messages</A
></DT
></DL
></DD
></DL
></DD
><DT
>2. <A
HREF="configuration"
>Configuration</A
></DT
><DD
><DL
><DT
>2.1. <A
HREF="configuration#AEN79"
>Monkey configuration structure</A
></DT
><DT
>2.2. <A
HREF="configuration_monkey.conf"
>Configuration file: monkey.conf</A
></DT
></DL
></DD
><DT
>3. <A
HREF="virtual_hosts"
>Virtual Hosts</A
></DT
><DD
><DL
><DT
>3.1. <A
HREF="virtual_hosts#AEN181"
>Introduction</A
></DT
><DT
>3.2. <A
HREF="virtual_hosts_conf"
>Configuring Virtual Hosts</A
></DT
></DL
></DD
><DT
>4. <A
HREF="api"
>Monkey API</A
></DT
><DD
><DL
><DT
>4.1. <A
HREF="api#AEN204"
>Introduction</A
></DT
><DT
>4.2. <A
HREF="api_events"
>Monkey Events</A
></DT
><DD
><DL
><DT
>4.2.1. <A
HREF="api_events#AEN215"
>event_add()</A
></DT
><DT
>4.2.2. <A
HREF="api_events#AEN219"
>_mkp_event_read()</A
></DT
><DT
>4.2.3. <A
HREF="api_events#AEN223"
>_mkp_event_write()</A
></DT
><DT
>4.2.4. <A
HREF="api_events#AEN227"
>_mkp_event_close()</A
></DT
><DT
>4.2.5. <A
HREF="api_events#AEN231"
>_mkp_event_error()</A
></DT
><DT
>4.2.6. <A
HREF="api_events#AEN235"
>_mkp_event_timeout()</A
></DT
></DL
></DD
><DT
>4.3. <A
HREF="api_plugins"
>Monkey Plugins</A
></DT
><DD
><DL
><DT
>4.3.1. <A
HREF="api_plugins#AEN245"
>Mandatory hooks</A
></DT
><DT
>4.3.2. <A
HREF="api_plugins#AEN255"
>Core Plugin</A
></DT
><DT
>4.3.3. <A
HREF="api_plugins#AEN268"
>Stage Plugin</A
></DT
><DT
>4.3.4. <A
HREF="api_plugins#AEN296"
>Networking Plugin</A
></DT
><DT
>4.3.5. <A
HREF="api_plugins#AEN338"
>Optional functions</A
></DT
></DL
></DD
></DL
></DD
></DL
></DIV
><FONT
COLOR="RED"
> A Fast and Lightweight Web Server for Linux</FONT
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
>&nbsp;</TD
><TD
WIDTH="34%"
ALIGN="center"
VALIGN="top"
>&nbsp;</TD
><TD
WIDTH="33%"
ALIGN="right"
VALIGN="top"
><A
HREF="getting_started"
ACCESSKEY="N"
>Next</A
></TD
></TR
><TR
><TD
WIDTH="33%"
ALIGN="left"
VALIGN="top"
>&nbsp;</TD
><TD
WIDTH="34%"
ALIGN="center"
VALIGN="top"
>&nbsp;</TD
><TD
WIDTH="33%"
ALIGN="right"
VALIGN="top"
>Getting Started</TD
></TR
></TABLE
></DIV
></BODY
></HTML
>