<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<HTML
><HEAD
><TITLE
>Server Programming</TITLE
><META
NAME="GENERATOR"
CONTENT="Modular DocBook HTML Stylesheet Version 1.79"><LINK
REL="HOME"
TITLE="Monkey HTTP Daemon 0.12.0 Documentation"
HREF="index"><LINK
REL="PREVIOUS"
TITLE="Configuring Virtual Hosts"
HREF="virtual_hosts_conf"><LINK
REL="NEXT"
TITLE="Monkey API"
HREF="api"></HEAD
><BODY
CLASS="part"
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
>Monkey HTTP Daemon 0.12.0 Documentation</TH
></TR
><TR
><TD
WIDTH="10%"
ALIGN="left"
VALIGN="bottom"
><A
HREF="virtual_hosts_conf"
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
HREF="api"
ACCESSKEY="N"
>Next</A
></TD
></TR
></TABLE
><HR
ALIGN="LEFT"
WIDTH="100%"></DIV
><DIV
CLASS="PART"
><A
NAME="programming"
></A
><DIV
CLASS="TITLEPAGE"
><H1
CLASS="title"
>III. Server Programming</H1
><DIV
CLASS="PARTINTRO"
><A
NAME="AEN294"
></A
><P
>&#13;     Nowadays a web server is not just a piece of software which serves static files,
     it also must leads with security, list content directory, third party protocols, 
     encryption, etc. This brings a major problem for most of the current implementation 
     available where they sacrify performance againts new features. So, what is the best 
     implementation ?, it will depend of your own needs, the perfect web server for all 
     cases does not exist, but in <SPAN
CLASS="productname"
>Monkey HTTP Daemon</SPAN
> we deliver you a flexible
     core which can be expanded and accommodate to your needs using the <SPAN
CLASS="QUOTE"
>"application programming 
       interface"</SPAN
> (API for short).
   </P
><P
>&#13;     The Monkey API allows you to extend and create new behaviors through plugins,
     which are shared libraries loaded on startup. In order to create your own plugin, 
     we provide you a flexible architecture with a set of functions which will 
     make easier the development work. We encourage you to write Monkey plugins!, new features are 
     always welcome.
   </P
></DIV
><DIV
CLASS="TOC"
><DL
><DT
><B
>Table of Contents</B
></DT
><DT
>4. <A
HREF="api"
>Monkey API</A
></DT
><DD
><DL
><DT
>4.1. <A
HREF="api#AEN301"
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
HREF="api_events#AEN312"
>event_add()</A
></DT
><DT
>4.2.2. <A
HREF="api_events#AEN316"
>_mkp_event_read()</A
></DT
><DT
>4.2.3. <A
HREF="api_events#AEN320"
>_mkp_event_write()</A
></DT
><DT
>4.2.4. <A
HREF="api_events#AEN324"
>_mkp_event_close()</A
></DT
><DT
>4.2.5. <A
HREF="api_events#AEN328"
>_mkp_event_error()</A
></DT
><DT
>4.2.6. <A
HREF="api_events#AEN332"
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
HREF="api_plugins#AEN342"
>Mandatory hooks</A
></DT
><DT
>4.3.2. <A
HREF="api_plugins#AEN354"
>Core Plugin</A
></DT
><DT
>4.3.3. <A
HREF="api_plugins#AEN367"
>Stage Plugin</A
></DT
><DT
>4.3.4. <A
HREF="api_plugins#AEN406"
>Networking Plugin</A
></DT
><DT
>4.3.5. <A
HREF="api_plugins#AEN448"
>Optional functions</A
></DT
></DL
></DD
></DL
></DD
></DL
></DIV
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
HREF="virtual_hosts_conf"
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
HREF="api"
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
>Monkey API</TD
></TR
></TABLE
></DIV
></BODY
></HTML
>