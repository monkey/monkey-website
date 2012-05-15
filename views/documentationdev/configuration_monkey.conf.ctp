<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<HTML
><HEAD
><TITLE
>Configuration file: monkey.conf</TITLE
><META
NAME="GENERATOR"
CONTENT="Modular DocBook HTML Stylesheet Version 1.79"><LINK
REL="HOME"
TITLE="Monkey HTTP Daemon 0.11.0 Documentation"
HREF="index"><LINK
REL="UP"
TITLE="Configuration"
HREF="configuration"><LINK
REL="PREVIOUS"
TITLE="Configuration"
HREF="configuration"><LINK
REL="NEXT"
TITLE="Virtual Hosts"
HREF="virtual_hosts"></HEAD
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
HREF="configuration"
ACCESSKEY="P"
>Prev</A
></TD
><TD
WIDTH="80%"
ALIGN="center"
VALIGN="bottom"
>Chapter 2. Configuration</TD
><TD
WIDTH="10%"
ALIGN="right"
VALIGN="bottom"
><A
HREF="virtual_hosts"
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
NAME="AEN123"
>2.2. Configuration file: monkey.conf</A
></H1
><P
>&#13;    The file <TT
CLASS="filename"
>monkey.conf</TT
> is the primary and mandatory configuration file
    for Monkey HTTP Daemon, please review the options available inside it.
  </P
><P
></P
><DIV
CLASS="variablelist"
><P
><B
>Variables available in monkey.conf</B
></P
><DL
><DT
>Port</DT
><DD
><P
>&#13;        Port is the number of the door in which Monkey will be listened through
        connections and petitions. This number can have any value between 1 and
        65535. Whatever specified number less than or equal to 1024, only will
        be able to be established as a connection door if the user posesses
        privledges of Root.
      </P
><PRE
CLASS="programlisting"
>&#13;        Port 2001
      </PRE
></DD
><DT
>Listen</DT
><DD
><P
>&#13;        Listen directive restrict Monkey to listen for incoming connections to just
        the network interface associated to the given value. In order to allow just
        loopback connection you could use:
      </P
><PRE
CLASS="programlisting"
>&#13;        Listen 127.0.0.1
      </PRE
></DD
><DT
>Workers</DT
><DD
><P
>&#13;        Monkey launches threads to attend clients; each worker thread is capable of
        attend more than one client request at the same time. The amount of
        clients that can be handled by each thread is calculated using the number of
        file descriptors allowed by the system. This variable cannot be less than 1.
      </P
><PRE
CLASS="programlisting"
>&#13;        Workers 5
      </PRE
></DD
><DT
>Timeout</DT
><DD
><P
>&#13;        The lasgest span of time expressed in seconds during which you should
        wait to recive the information or waiting time for the remote host to
        accept an answer. (Timeout &#62; 0)
      </P
><PRE
CLASS="programlisting"
>&#13;        Timeout 15
      </PRE
></DD
><DT
>PidFile</DT
><DD
><P
>&#13;        File where the server guards the process number when starting.
      </P
><PRE
CLASS="programlisting"
>&#13;        PidFile /home/foo/MonkeyD/logs/monkey.pid
      </PRE
></DD
><DT
>UserDir</DT
><DD
><P
>&#13;        Directory name for users home (/~user).
      </P
><PRE
CLASS="programlisting"
>&#13;        UserDir public_html
      </PRE
></DD
><DT
>Indexfile</DT
><DD
><P
>&#13;        Number of the inicial file of aperture when calling a directory
      </P
><PRE
CLASS="programlisting"
> Indexfile index index.htm </PRE
></DD
><DT
>HideVersion</DT
><DD
><P
>&#13;        For security reasons, sometimes people want to hide the version of his
        own webserver to clients (values on/off).
      </P
><PRE
CLASS="programlisting"
> HideVersion off </PRE
></DD
><DT
>Resume</DT
><DD
><P
>&#13;        Allow to retrieve chunks of file (values on/off).
      </P
><PRE
CLASS="programlisting"
> Resume on </PRE
></DD
><DT
>User</DT
><DD
><P
>&#13;        If you want the webserver to run as a process of a defined user, you can
        define it in this variable, so that the change of the user can done,
        it's necessary to execute Monkey with root priviledges. In case it's
        started by a user that doesn't have root priviledges, this variable will
        be omitted.
      </P
><PRE
CLASS="programlisting"
> User nobody </PRE
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
HREF="virtual_hosts"
ACCESSKEY="N"
>Next</A
></TD
></TR
><TR
><TD
WIDTH="33%"
ALIGN="left"
VALIGN="top"
>Configuration</TD
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
>Virtual Hosts</TD
></TR
></TABLE
></DIV
></BODY
></HTML
>