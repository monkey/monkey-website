<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<HTML
><HEAD
><TITLE
>Installation</TITLE
><META
NAME="GENERATOR"
CONTENT="Modular DocBook HTML Stylesheet Version 1.79"><LINK
REL="HOME"
TITLE="Monkey HTTP Daemon 0.10.0 Documentation"
HREF="index"><LINK
REL="UP"
TITLE="Getting Started"
HREF="c4"><LINK
REL="PREVIOUS"
TITLE="Getting Started"
HREF="c4"><LINK
REL="NEXT"
TITLE="Configuration"
HREF="c54"></HEAD
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
>Monkey HTTP Daemon 0.10.0 Documentation:  A Fast and Lightweight Web Server for Linux</TH
></TR
><TR
><TD
WIDTH="10%"
ALIGN="left"
VALIGN="bottom"
><A
HREF="c4"
ACCESSKEY="P"
>Prev</A
></TD
><TD
WIDTH="80%"
ALIGN="center"
VALIGN="bottom"
>Chapter 1. Getting Started</TD
><TD
WIDTH="10%"
ALIGN="right"
VALIGN="bottom"
><A
HREF="c54"
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
NAME="AEN12"
>1.2. Installation</A
></H1
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN14"
>1.2.1. Requirements</A
></H2
><P
>&#13;        Monkey uses very low CPU and Memory consumption, it should work on any x86 platform 
        without problems. We have not tested yet on older hardware such as 486. do you want to 
        help us ? :)
    </P
><P
>&#13;        Regarding to the software required to run Monkey successfully, you will need a 
        Linux environment with Kernel version 2.6.29 (at least). The server is developed 
        on top of the Kernel features, so use an older version can cause some buggy behaviors. 
    </P
><P
>&#13;        Besides the kernel version, the core of Monkey just requires two basic libraries: 
        pthreads and libc, if you use Linux, we are 99% sure that you should not care about 
        this requirement.
    </P
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN19"
>1.2.2. Download</A
></H2
><P
>&#13;      Monkey is mainly distributed in a compressed tarball which contains the full source 
      code, the available releases can be found in the official site 
      <FONT
COLOR="RED"
>http://www.monkey-project.com</FONT
>. At the moment of this document is written,
      the 0.10.0 version is available. You can find more details in the Downloads section.
    </P
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN23"
>1.2.3. Configure and compile</A
></H2
><P
>&#13;      Once you get the tarball you can use the following simple steps to configure and compile
      the source code:
      <P
></P
><UL
><LI
STYLE="list-style-type: opencircle"
><P
>&#13;            tar zxfv monkey-0.10.xyz.tar.gz
          </P
></LI
><LI
STYLE="list-style-type: opencircle"
><P
>&#13;            cd monkey-0.10.xyz
          </P
></LI
><LI
STYLE="list-style-type: opencircle"
><P
>&#13;            ./configure
          </P
></LI
><LI
STYLE="list-style-type: opencircle"
><P
>&#13;            make
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
NAME="AEN35"
>1.2.4. Specific configure options</A
></H2
><P
>&#13;      Monkey uses a similar autotools scripts to configure and set the proper enviroment. Some
      useful options available are:
    </P
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN38"
>1.2.5. Get development branch</A
></H2
><P
>&#13;      If you want to experiment the incomming features of the next releases... this section is 
      for you XD.
      We strongly recommend use stable versions for production environments.
    </P
><P
>&#13;      Our development branches of Monkey are located in a GIT repository, in order to get the
      development code please install the git tools and perform the following command:
      <PRE
CLASS="programlisting"
>&#13;        $ git clone git://repo.or.cz/MonkeyD.git
      </PRE
>
      when the above command finish to obtain the development branch, you can join to the 
      <SAMP
CLASS="prompt"
>MonkeyD</SAMP
> directory created and use the similar steps described in the 
      previous section to configure and compile.
    </P
></DIV
><DIV
CLASS="sect2"
><H2
CLASS="sect2"
><A
NAME="AEN44"
>1.2.6. Running Monkey web server</A
></H2
><P
>&#13;      Monkey configuration system is designed to let run the service from the
      local directory without an installation process unless you specify an installation 
      directory in the configuration step using the <SAMP
CLASS="prompt"
>--prefix</SAMP
> option.
    </P
><P
>&#13;      If the compilation process has ended successfully, you are ready to run Monkey Web 
      Server executing the following command:
    </P
><PRE
CLASS="programlisting"
>&#13;      $ bin/monkey 
    </PRE
><P
>&#13;      once the server has started up, you should get something like this in your
      console:
    </P
><PRE
CLASS="programlisting"
>&#13;      Monkey HTTP Daemon 0.10.0-git
      Built : Oct 26 2009 14:35:22
      Home  : http://monkeyd.sourceforge.net
      * Process ID is 8532
      * Server socket listening on Port 2001
      * 5 threads, 202 client connections per thread, total 1010
    </PRE
><P
>&#13;      by default, Monkey listen for incomming connections on TCP port 2001, give it a 
      try using your favorite web browser at <SAMP
CLASS="prompt"
>http://127.0.0.1:2001</SAMP
>
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
HREF="c4"
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
HREF="c54"
ACCESSKEY="N"
>Next</A
></TD
></TR
><TR
><TD
WIDTH="33%"
ALIGN="left"
VALIGN="top"
>Getting Started</TD
><TD
WIDTH="34%"
ALIGN="center"
VALIGN="top"
><A
HREF="c4"
ACCESSKEY="U"
>Up</A
></TD
><TD
WIDTH="33%"
ALIGN="right"
VALIGN="top"
>Configuration</TD
></TR
></TABLE
></DIV
></BODY
></HTML
>