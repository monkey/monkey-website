<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<HTML
><HEAD
><TITLE
>Configuration structure files</TITLE
><META
NAME="GENERATOR"
CONTENT="Modular DocBook HTML Stylesheet Version 1.79"><LINK
REL="HOME"
TITLE="Monkey HTTP Daemon 0.12.0 Documentation"
HREF="index"><LINK
REL="UP"
TITLE="Monkey Configuration"
HREF="configuration"><LINK
REL="PREVIOUS"
TITLE="Monkey Configuration"
HREF="configuration"><LINK
REL="NEXT"
TITLE="Configuration file: monkey.conf"
HREF="configuration_monkey.conf"></HEAD
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
>Monkey HTTP Daemon 0.12.0 Documentation</TH
></TR
><TR
><TD
WIDTH="10%"
ALIGN="left"
VALIGN="bottom"
><A
HREF="configuration"
ACCESSKEY="P"
>Prev</A
></TD
><TD
WIDTH="80%"
ALIGN="center"
VALIGN="bottom"
>Chapter 2. Monkey Configuration</TD
><TD
WIDTH="10%"
ALIGN="right"
VALIGN="bottom"
><A
HREF="configuration_monkey.conf"
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
NAME="AEN205"
>2.2. Configuration structure files</A
></H1
><P
>&#13;    Monkey is configured using the old unix way: plain text files. The configuration files are 
    located in the <SAMP
CLASS="prompt"
>conf/</SAMP
> directory and have the following structure.
  </P
><PRE
CLASS="programlisting"
>conf/
    /monkey.conf
    /monkey.mime
    /plugins.load
    /sites/
          /default    
    /plugins
    /plugins/security
    /plugins/security/security.conf</PRE
><P
></P
><DIV
CLASS="variablelist"
><P
><B
>Configuration Files and Directories</B
></P
><DL
><DT
><TT
CLASS="filename"
>monkey.conf</TT
></DT
><DD
><P
>&#13;        This is the principal configuration file, it describes the server setup and different 
        variables such as number of workers, TCP port, timeouts, etc.
      </P
></DD
><DT
><TT
CLASS="filename"
>monkey.mime</TT
></DT
><DD
><P
>&#13;        Each file in an operative system has a mime type associated, by convention using the file 
        extension. It defines the data type contained, in this case, for a web server, 
        <TT
CLASS="filename"
>monkey.mime</TT
> contains a list of file extensions associated with the right
        mime type, this information is used in the HTTP protocol to communicate to the HTTP client 
        what type of data is being transfered. If the requested file has not an extension or mime 
        type associated, the default mime type <TT
CLASS="filename"
>text/plain</TT
> is sent.
      </P
></DD
><DT
><TT
CLASS="filename"
>plugins.load</TT
></DT
><DD
><P
>&#13;        When Monkey starts up, it reads the <TT
CLASS="filename"
>plugins.load</TT
> file and check which
        plugins must loaded. Each plugin is a shared library.
      </P
></DD
><DT
><TT
CLASS="filename"
>sites/</TT
></DT
><DD
><P
>&#13;        The <TT
CLASS="filename"
>sites</TT
> directory, specifies the virtual hosts available, each file
        under this directory is considerated as a virtual host configuration file.
      </P
></DD
><DT
><TT
CLASS="filename"
>sites/default</TT
></DT
><DD
><P
>&#13;        As was described above, the sites directory contains virtual host definitions on each existent
        file, the <TT
CLASS="filename"
>default</TT
> file is mandatory and define the default virtual host. 
        For Monkey at least one virtual host must exists under the filename 
        <TT
CLASS="filename"
>default</TT
>.
      </P
></DD
><DT
><TT
CLASS="filename"
>plugins/</TT
></DT
><DD
><P
>&#13;        The <TT
CLASS="filename"
>plugins</TT
> directory, contains specific configuration files for
        the running plugins.
      </P
></DD
></DL
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
HREF="configuration"
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
HREF="configuration_monkey.conf"
ACCESSKEY="N"
>Next</A
></TD
></TR
><TR
><TD
WIDTH="33%"
ALIGN="left"
VALIGN="top"
>Monkey Configuration</TD
><TD
WIDTH="34%"
ALIGN="center"
VALIGN="top"
><A
HREF="configuration"
ACCESSKEY="U"
>Up</A
></TD
><TD
WIDTH="33%"
ALIGN="right"
VALIGN="top"
>Configuration file: monkey.conf</TD
></TR
></TABLE
></DIV
></BODY
></HTML
>