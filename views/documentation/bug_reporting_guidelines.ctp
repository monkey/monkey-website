<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<HTML
><HEAD
><TITLE
>Bug Reporting Guidelines</TITLE
><META
NAME="GENERATOR"
CONTENT="Modular DocBook HTML Stylesheet Version 1.79"><LINK
REL="HOME"
TITLE="Monkey HTTP Daemon 0.12.0 Documentation"
HREF="index"><LINK
REL="UP"
TITLE="Preface"
HREF="preface"><LINK
REL="PREVIOUS"
TITLE="A Brief History of Monkey"
HREF="history"><LINK
REL="NEXT"
TITLE="Packagers Guidelines"
HREF="packagers"></HEAD
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
HREF="history"
ACCESSKEY="P"
>Prev</A
></TD
><TD
WIDTH="80%"
ALIGN="center"
VALIGN="bottom"
>Preface</TD
><TD
WIDTH="10%"
ALIGN="right"
VALIGN="bottom"
><A
HREF="packagers"
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
NAME="bug-reporting"
>3. Bug Reporting Guidelines</A
></H1
><P
>&#13;  When you find a bug in <SPAN
CLASS="productname"
>Monkey</SPAN
> we want to
  hear about it. Your bug reports play an important part in making
  <SPAN
CLASS="productname"
>Monkey</SPAN
> more reliable.
 </P
><P
>&#13;  The following suggestions are intended to assist you in forming bug reports
  that can be handled in an effective fashion. No one is required to follow
  them but doing so tends to be to everyone's advantage.
 </P
><P
>&#13;   We will do our major effort to fix every bug found. If the bug is obvious, critical,
   or affects a lot of users, chances are good that someone will look into it. It
   could also happen that we tell you to update to a newer version to see if the
   bug happens there. Or we might decide that the bug
   cannot be fixed before some major rewrite we might be planning is done. 
  If you need help immediately, consider obtaining a commercial support contract.
 </P
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN42"
>3.1. Identifying Bugs</A
></H2
><P
>&#13;    Before you report a bug, please read documentation to verify that 
    you can really do whatever it is you are trying. If it is not clear 
    from the documentation whether you can do something or not, 
    please report that too; it is a bug in the documentation.
    If it turns out that a program does something different from what the
    documentation says, that is a bug. That might include, but is not limited to,
    the following circumstances:
    
   <P
></P
><UL
><LI
><P
>&#13;       Monkey terminates with a fatal signal or an operating system
       error message that would point to a problem in the program.
     </P
></LI
><LI
><P
>&#13;       Monkey refuses to accept incoming connections.
     </P
></LI
><LI
><P
>&#13;      <SPAN
CLASS="productname"
>Monkey</SPAN
> fails to compile, build, or
      install according to the instructions on supported platforms.
     </P
></LI
></UL
>

  </P
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN53"
>3.2. What to report</A
></H2
><P
>&#13;   The most important thing to remember about bug reporting is to state all
   the facts and only facts. Reporting the bare facts is relatively 
   straightforward (you can probably copy and paste them from the
   screen) but all too often important details are left out because someone
   thought it does not matter or the report would be understood
   anyway.
  </P
><P
>&#13;   The following items should be contained in every bug report:

   <P
></P
><UL
><LI
><P
>&#13;      The exact sequence of steps <SPAN
CLASS="emphasis"
><I
CLASS="emphasis"
>from program
      start-up</I
></SPAN
> necessary to reproduce the problem.
     </P
></LI
><LI
><P
>&#13;      Any command line options and other start-up options, including
      any relevant environment variables or configuration files that
      you changed from the default. Again, please provide exact
      information. If you are using a prepackaged distribution that
      starts the database server at boot time, you should try to find
      out how that is done.
     </P
></LI
><LI
><P
>&#13;      Anything you did at all differently from the installation
      instructions.
     </P
></LI
><LI
><P
>&#13;      The <SPAN
CLASS="productname"
>Monkey</SPAN
> version. You can run the command
      <TT
CLASS="literal"
>monkey --version</TT
> to
      find out the version of the server that you have.
      If you run a prepackaged version, such as RPMs, say so, including any
      subversion the package might have. If you are talking about a GIT
      snapshot, mention that, including its date and time.
     </P
><P
>&#13;      If your version is older than 0.12.0
 we will almost certainly
      tell you to upgrade. There are many bug fixes and improvements
      in each new release, so it is quite possible that a bug you have
      encountered in an older release of <SPAN
CLASS="productname"
>Monkey</SPAN
>
      has already been fixed. 
     </P
><P
>&#13;     </P
></LI
><LI
><P
>&#13;      Platform information. This includes the kernel name and version,
      C library, processor, memory information, and so on. 
      If you have installation problems then information about the toolchain on
      your machine (compiler, <SPAN
CLASS="application"
>make</SPAN
>, and so
      on) is also necessary.
     </P
></LI
></UL
>
  </P
><P
>&#13;   When writing a bug report, please avoid confusing terminology.
   The software package in total is called <SPAN
CLASS="QUOTE"
>"Monkey HTTP Daemon"</SPAN
>,
   sometimes <SPAN
CLASS="QUOTE"
>"Monkey"</SPAN
> for short. 
  </P
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN78"
>3.3. Where to report bugs</A
></H2
><P
>&#13;   In general, send bug reports to the bug report mailing list at
   <CODE
CLASS="email"
>&#60;<A
HREF="mailto:monkey@lists.monkey-project.com"
>monkey@lists.monkey-project.com</A
>&#62;</CODE
>.
   You are requested to use a descriptive subject for your email
   message, perhaps parts of the error message.
  </P
><P
>&#13;    Due to the unfortunate amount of spam going around, all of the above
    email addresses are closed mailing lists. That is, you need to be
    subscribed to a list to be allowed to post on it.
  </P
><P
>&#13;    If you have previous experience working with bug trackers system, you can go 
    directly and file a new ticket in 
    <A
HREF="http://bugs.monkey-project.com"
TARGET="_top"
>http://bugs.monkey-project.com</A
>.
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
HREF="history"
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
HREF="packagers"
ACCESSKEY="N"
>Next</A
></TD
></TR
><TR
><TD
WIDTH="33%"
ALIGN="left"
VALIGN="top"
>A Brief History of <SPAN
CLASS="productname"
>Monkey</SPAN
></TD
><TD
WIDTH="34%"
ALIGN="center"
VALIGN="top"
><A
HREF="preface"
ACCESSKEY="U"
>Up</A
></TD
><TD
WIDTH="33%"
ALIGN="right"
VALIGN="top"
>Packagers Guidelines</TD
></TR
></TABLE
></DIV
></BODY
></HTML
>