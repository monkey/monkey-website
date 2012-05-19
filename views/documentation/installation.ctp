<div class="hero-unit">
   <h2>Installation</h2>
   <p>
       Start with Monkey is pretty easy, you don't need to be a privileged system user, you can run it
       locally or install it in a generic path.
   </p>
</div>

<h3>Requirements</h3>
<p>
Monkey uses very low CPU and Memory consumption, it should work on any x86 platform without problems.
Regarding to the software required to run Monkey successfully, you will need a Linux environment with Kernel
version 2.6.29 (at least). The server is developed on top of the Kernel features, so use an older version can
cause some buggy behaviors.
</p>
<p>
Besides the kernel version, the core of Monkey just requires two basic libraries: pthreads and libc, if you use
Linux, we are 99% sure that you should not care about this requirement.
</p>

<h3>Download</h3>
<p>
   Monkey is mainly distributed in a compressed tarball which contains the full source code, the available
   releases can be found in the official site http://monkey-project.com. At the moment of this document is written,
   the 1.0.0 version is available. You can find more details in the Downloads section.
</p>

<h3>Configure and compile</h3>
<p>
Once you get the tarball you can use the following simple steps to configure and compile the source code:
<pre>$ tar zxfv monkey-1.0.0.tar.gz
$ cd monkey-1.0.0
$ ./configure
$ make</pre>
</p>

<h3>Specific configure options</h3>
<p>
Monkey uses a similar autotools scripts to configure and set the proper enviroment. Also, you can configure
Monkey with your specific paths, just run './configure -h' to get a full list of the available options as:
</p>

<pre>edsiper@monotop:~/coding/monkey$ ./configure -h
Usage: ./configure [OPTION]... [VAR=VALUE]...

Optional Commands:
  --help        Display this help and exit
  --version     Display version information and exit

Compiler and debug Features:
  --debug                 Compile Monkey with debugging symbols
  --trace                 Enable trace messages (don't use in production)
  --platform=PLATFORM     Target platform: 'generic' or 'android' (default: generic)

Installation Directories:
  --prefix=PREFIX         Root prefix directory
  --bindir=BINDIR         Binary files (executables)
  --sysconfdir=SYSCONFDIR Configuration files
  --datadir=DATADIR       Specific Monkey data files
  --mandir=MANDIR         Manpages - documentation
  --logdir=LOGDIR         Log files
  --plugdir=PLUGDIR       Plugins directory path
  --enable-plugins=a,b    Enable the listed plugins
  --disable-plugins=a,b   Disable the listed plugins
  --safe-free             Force Monkey to free resources before exit

Override Server Configuration:
  --default-port=PORT     Override default TCP port (default: 2001)
  --default-user=USER     Override default web user (default: nobody)</pre>

<h3>Running Monkey web server</h3>
<p>
Monkey configuration system is designed to let run the service from the local directory without an installation process
unless you specify an installation directory in the configuration step using the --prefix option.
</p>
<p>
If the compilation process has ended successfully, you are ready to run Monkey Web Server executing the following command:
</p>
<pre>$ bin/monkey</pre>
<p>
once the server has started up, you should get something like this in your console:
<pre>$ bin/monkey
Monkey HTTP Daemon 1.0.0
Built : May 18 2012 13:54:22 (gcc 4.6.1)
Home  : http://www.monkey-project.com
* Process ID is 20742
* Server socket listening on Port 2001
* 5 threads, 101 client connections per thread, total 505
* Transport layer by liana in http mode
[2012/05/18 22:14:59] [   Info] HTTP Server started</pre>
</p>
<p>
by default, Monkey listen for incomming connections on TCP port 2001, give it a try using your favorite web browser at http://127.0.0.1:2001
