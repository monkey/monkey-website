<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<HTML
><HEAD
><TITLE
>Packagers Guidelines</TITLE
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
TITLE="Bug Reporting Guidelines"
HREF="bug_reporting_guidelines"><LINK
REL="NEXT"
TITLE="Getting Started"
HREF="p130"></HEAD
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
HREF="bug_reporting_guidelines"
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
HREF="p130"
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
NAME="packagers"
>4. Packagers Guidelines</A
></H1
><P
>&#13;  This sections aims to present guidelines for contributors that wants to become a 
  packager of <SPAN
CLASS="productname"
>Monkey</SPAN
> for any Linux flavor based distribution.
  If you want to maintain <SPAN
CLASS="productname"
>Monkey</SPAN
> packages, this section is for
  you.
</P
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN90"
>4.1. Responsability</A
></H2
><P
>&#13;    Maintain a software package for any distribution, involves a grade of responsability from 
    the packager with the project in question, a strong relationship must be build in order to
    assure that developers and packagers are in the same page in terms of software features, roadmaps,
    bugs fixes, releases, etc. We motivate to anyone that want to learn and contribute to Monkey Project
    being a packager and help to deliver it on every distribution available in the planet.
  </P
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN93"
>4.2. Accounts Setup</A
></H2
><P
>&#13;     Any person who wants to contribute, should at least have the following system accounts:
   <P
></P
><UL
><LI
><P
>&#13;       Mailing list: be subscribed to the official <SPAN
CLASS="productname"
>Monkey</SPAN
> mailing list located at 
       <A
HREF="http://lists.monkey-project.com"
TARGET="_top"
>http://lists.monkey-project.com</A
>.
     </P
></LI
><LI
><P
>&#13;       Bug Tracker: be subscribed to our bug tracker system at
       <A
HREF="http://bugs.monkey-project.com"
TARGET="_top"
>http://bugs.monkey-project.com</A
>.
     </P
></LI
><LI
><P
>&#13;       IRC: Our main communication channel is IRC, so please make sure you have a registered nickname on 
       <SPAN
CLASS="QUOTE"
>"irc.freenode.net"</SPAN
>.
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
NAME="AEN107"
>4.3. Software Description</A
></H2
><P
>&#13;    Most of the packages system requires to fill different text information about the project, 
    please use the following details suggested, in case of doubt do not hesitate to contact us 
    to validate any exceptional case.

   <P
></P
><UL
><LI
><P
>&#13;       Shortname: monkey
     </P
></LI
><LI
><P
>&#13;       Description: A Fast and Lightweight web server for Linux.
     </P
></LI
><LI
><P
>&#13;        Full Description: It has been designed to be very scalable with low memory 
        and CPU consumption, the perfect solution for embedded environments. It also
        provides a flexible API and plugins interface.
      </P
></LI
><LI
><P
>&#13;       Software URL: <A
HREF="http://monkey-project.com"
TARGET="_top"
>http://monkey-project.com</A
>
     </P
></LI
><LI
><P
>&#13;       Version: In the project we use the common three numering style A.B.C, where A represents
       the <SPAN
CLASS="productname"
>Monkey</SPAN
> version, the number B denoted the major revision, and the 
       number C indicated the minor revision.
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
NAME="AEN123"
>4.4. Repositories</A
></H2
><P
>&#13;    Some distributions are very strict about package inclusions, others no, so for any packager who 
    requires a server access to pull up a specific repository in the meanwhile the package is approved
    for inclusion, we are able to create a repository and provide an account in our servers. Please contact us
    by IRC for more details about this process.
  </P
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN126"
>4.5. Existent Packages</A
></H2
><P
>&#13;     We want to keep updated versions of <SPAN
CLASS="productname"
>Monkey</SPAN
> on every distribution, if you have 
     realized that a package is not updated or orphaned, you can contribute maintaining new versions, as well you can 
     contribute testing current packages. Anyone can contribute, just raise your hand and let us know about it.
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
HREF="bug_reporting_guidelines"
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
HREF="p130"
ACCESSKEY="N"
>Next</A
></TD
></TR
><TR
><TD
WIDTH="33%"
ALIGN="left"
VALIGN="top"
>Bug Reporting Guidelines</TD
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
>Getting Started</TD
></TR
></TABLE
></DIV
></BODY
></HTML
>