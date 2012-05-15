<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<HTML
><HEAD
><TITLE
>Configuring Virtual Hosts</TITLE
><META
NAME="GENERATOR"
CONTENT="Modular DocBook HTML Stylesheet Version 1.79"><LINK
REL="HOME"
TITLE="Monkey HTTP Daemon 0.12.0 Documentation"
HREF="index"><LINK
REL="UP"
TITLE="Virtual Hosts"
HREF="virtual_hosts"><LINK
REL="PREVIOUS"
TITLE="Virtual Hosts"
HREF="virtual_hosts"><LINK
REL="NEXT"
TITLE="Server Programming"
HREF="p400"></HEAD
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
HREF="virtual_hosts"
ACCESSKEY="P"
>Prev</A
></TD
><TD
WIDTH="80%"
ALIGN="center"
VALIGN="bottom"
>Chapter 4. Virtual Hosts</TD
><TD
WIDTH="10%"
ALIGN="right"
VALIGN="bottom"
><A
HREF="p400"
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
NAME="AEN382"
>4.2. Configuring Virtual Hosts</A
></H1
><P
>&#13;     For Monkey, every content belongs to a virtual host. Each Virtual Host is defined in a configuration 
     file under conf/sites/ directory. Thus, a minimal web server equals to having only one virtual host;
     for that end is required the existence of at least one virtual host definition-file called 'default'.
</P
><P
>&#13;  Each virtual host file must contain a [HOST] section and can have the following entries:
</P
><P
></P
><DIV
CLASS="variablelist"
><DL
><DT
>DocumentRoot</DT
><DD
><P
>&#13;        This is the principal configuration file, it describes the server setup and different 
        variables such as number of workers, TCP port, timeouts, etc.
      </P
><PRE
CLASS="programlisting"
>DocumentRoot /var/www</PRE
></DD
><DT
>Servername</DT
><DD
><P
>&#13;        Sets the the virtual host identifier (e.g. mysite.example.com).
      </P
><PRE
CLASS="programlisting"
>Servername 127.0.0.1</PRE
><P
>&#13;        Like a Tip, you can experiment with virtual hosts in the local machine by adding lines 
        to your /etc/hosts file, for example:
      </P
><PRE
CLASS="programlisting"
>127.0.0.1   mysite_1
127.0.0.1   mysite_2</PRE
><P
>&#13;      Then, if you start your web browser and go to http://mysite_1 you get one thing, and
      going to http://mysite_2 another (assuming you've defined diferent contents for them)
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
HREF="virtual_hosts"
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
HREF="p400"
ACCESSKEY="N"
>Next</A
></TD
></TR
><TR
><TD
WIDTH="33%"
ALIGN="left"
VALIGN="top"
>Virtual Hosts</TD
><TD
WIDTH="34%"
ALIGN="center"
VALIGN="top"
><A
HREF="virtual_hosts"
ACCESSKEY="U"
>Up</A
></TD
><TD
WIDTH="33%"
ALIGN="right"
VALIGN="top"
>Server Programming</TD
></TR
></TABLE
></DIV
></BODY
></HTML
>