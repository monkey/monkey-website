<div class="hero-unit">
   <h2>Cheetah! Shell</h2>
   <p>
      Monkey through the plugin named <b>Cheetah!</b> provides a command shell which can be used
      to retrieve running information from the server.
   </p>
</div>

<h3>Introduction</h3>
<p>
   Retrieve information from a running web server is very important when monitoring or troubleshooting
   unexpected behaviors. Cheetah! provides a command line interface to perform read-only operations (by now)
   about the running Monkey instance.
</p>
<p>
   Cheetah! can be accessed from the command line through STDIN if Monkey did not go in background or directly through
   a unix pipe. Lets review how to make it work.
</p>

<h3>Steps</h3>
<ul>
   <li>Make sure the <b>Cheetah!</b> plugin is enabled in your Monkey configuration, open your conf/plugins.load
   configuration file and find a similar entry like this:</li>

   <p>
   <pre>[PLUGINS]
    # Cheetah! Plugin
    # ===============
    # This plugin provides a command line interface for Monkey,
    # it works like a shell.
    #
    Load /home/foo/monkey/plugins/cheetah/monkey-cheetah.so</pre>
   </p>

   <li>Once the plugin is loaded, we need to proceed to edit the <b>Cheetah!</b> configuration file which could be located
   in the Monkey configuration directory like <i>conf/plugins/cheetah/cheetah.conf</i> .
   <p>
      <pre>[CHEETAH]
    # Listen :
    # --------
    # Cheetah! listen for input commands as any shell, this can be done
    # using the standard keyboard input or through a unix pipe where you
    # need to connect using the Cheetah! client.
    #
    # The Listen directive allows you to define which input method to use.
    # Valid values for Listen are STDIN or SERVER.
    #
    Listen SERVER</pre>
   </p>
   <p>
      The <i>Listen</i> key as described can take two values:
   </p>
      <dl>
          <dt>STDIN</dt>
          <dd>Cheetah! will listing for incoming commands from STDIN, this option requires that Monkey do not run in background mode</dd>
      </dl>
      <dl>
          <dt>SERVER</dt>
          <dd>Cheetah! will open a unix socket to listen for incoming commands. If monkey runs in TCP port 2001 the unix socket filename
              will be located at <i>/tmp/cheetah.2001</i> . Try to connect with netcat utility:

          <p>
          <pre>$ nc -U /tmp/cheetah.2001

*** Welcome to Cheetah!, the Monkey Shell :) ***

      << Type 'help' or '\h' for help >>

cheetah></pre></dd>
          </p>
      </dl>
      <li>If you are connected to <b>Cheetah!</b> type <i>help</i> to see the available options:</li>
      <p>
         <pre>$ nc -U /tmp/cheetah.2001

*** Welcome to Cheetah!, the Monkey Shell :) ***

      << Type 'help' or '\h' for help >>

cheetah> help
List of available commands for Cheetah Shell

command  shortcut  description
----------------------------------------------------
?          (\?)    Synonym for 'help'
config     (\f)    Display global configuration
plugins    (\g)    List loaded plugins and associated stages
status     (\s)    Display general web server information
uptime     (\u)    Display how long the web server has been running
vhosts     (\v)    List virtual hosts configured
workers    (\w)    Show thread workers information

clear      (\c)    Clear screen
help       (\h)    Print this help
quit       (\q)    Exit Cheetah shell :_(

cheetah></pre>
      </p>
</ul>
