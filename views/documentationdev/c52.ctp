<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<HTML
><HEAD
><TITLE
>Configuration</TITLE
><META
NAME="GENERATOR"
CONTENT="Modular DocBook HTML Stylesheet Version 1.79"><LINK
REL="HOME"
TITLE="Monkey HTTP Daemon 0.10.0 Documentation"
HREF="index"><LINK
REL="PREVIOUS"
TITLE="Installation"
HREF="x10"><LINK
REL="NEXT"
TITLE="Virtual Hosts"
HREF="c61"></HEAD
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
>Monkey HTTP Daemon 0.10.0 Documentation:  A Fast and Lightweight Web Server for Linux</TH
></TR
><TR
><TD
WIDTH="10%"
ALIGN="left"
VALIGN="bottom"
><A
HREF="x10"
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
HREF="c61"
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
NAME="AEN52"
></A
>Chapter 2. Configuration</H1
><P
>&#13;Monkey is configured using the old unix way: plain text files. The configuration files are 
located in the <SAMP
CLASS="prompt"
>conf/</SAMP
> directory which have the following content:

   <P
></P
><UL
><LI
STYLE="list-style-type: opencircle"
><P
>&#13;            monkey.conf: main configuration file which describe the basic setup as number of 
            workers, TCP port, connection timeout, etc.
          </P
></LI
><LI
STYLE="list-style-type: opencircle"
><P
>&#13;            monkey.mime: each resource that's served to the client, has associated some information
            as name, size in bytes and 'mime type', the mime type tells the client which type of 
            content the file contains
          </P
></LI
></UL
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
HREF="x10"
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
HREF="c61"
ACCESSKEY="N"
>Next</A
></TD
></TR
><TR
><TD
WIDTH="33%"
ALIGN="left"
VALIGN="top"
>Installation</TD
><TD
WIDTH="34%"
ALIGN="center"
VALIGN="top"
>&nbsp;</TD
><TD
WIDTH="33%"
ALIGN="right"
VALIGN="top"
>Virtual Hosts</TD
></TR
></TABLE
></DIV
></BODY
></HTML
>