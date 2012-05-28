<div class="hero-unit">
   <h2>Virtual Hosts</h2>
   <p>
      In web servers context, a virtual host is a way of "dividing" the server into multiple
      independent hosts, delivering each one's associated content.
   </p>
</div>

<h3>Introduction</h3>
<p>
  Each virtual host has its content placed in a separated local directory,
  a very common example is that of shared-hosting service offered by many companies, in which
  different named sites have the same IP address. This is possible thanks to the <i>Host</i> header,
  specified in the HTTP/1.1 protocol that allows the client to select to which host is
  addressed a request.
</p>
<p>
  For short, each virtual host has its content placed in a separated local directory.
</p>

<h3>Configuration</h3>
<p>
 For Monkey, every incoming request belongs to a virtual host. These are defined by creating a
 configuration file under conf/sites/ directory. Thus, a minimal web server equals to having only one
 virtual host; for that end is required the existence of at least one virtual host definition-file called
 <i>default</i>.
</p>

<p>
 Each virtual host must have a configuration file plus the section [HOST] defined inside. The keys allowed
 under that section are the following:
 <dl class="dl-horizontal">
   <dt>DocumentRoot</dt>
   <dd>Defines the base directory for the virtual host. In other words, where in the filesystem is
       placed its content.
   </dd>

   <dt>Servername</dt>
   <dd>It defines virtual host name/identifier, e.g: example.com. This key can also have multiple
       values to represent the server name aliases, each one must be separated by a space.
   </dd>
  </dl>
</p>

<p>
   A basic Virtual Host configuration file can look like this:
</p>
<pre>[HOST]
    DocumentRoot /var/www
    Servername   example.com www.example.com
</pre>

<h3>Experimenting with Virtual Hosts</h3>
<p>
 Like a Tip, you can experiment with virtual hosts in the local machine by adding lines
 to your /etc/hosts file, e.g:
</p>
<pre>127.0.0.1   mydomain1.com
127.0.0.1   mydomain2.com</pre>
<p>
  Now creates two files under conf/sites/:
</p>
<strong>file #1: conf/sites/domain1</strong>
<pre>[HOST]
    DocumentRoot /var/www/domain1
    Servername   mydomain1.com
</pre>

<strong>file #2: conf/sites/domain2</strong>
<pre>[HOST]
    DocumentRoot /var/www/domain2
    Servername   mydomain2.com
</pre>

<p>
  Make sure the directories /var/www/domain1 and /var/www/domain2 exists and place there
  any HTML or image file. Restart monkey and point your browser to the following URLs:
  <ul>
    <li>http://mydomain1.com/somefile.jpg</li>
    <li>http://mydomain2.com/otherfile.jpg</li>
  </ul>
  Replace the somefile.jpg and otherfile.jpg by the file names that you recently copied there.
</p>

<h3>Plugins</h3>
<p>
 The virtual host file is used by many plugins, each plugin can hook their own information on it own
 section, for example the <i>Logger</i> plugin defines a [LOGGER] section for each virtual host, and
 so on. For specific sections found in the configuration file, please refer to the plugin documentation.
</p>