<div class="hero-unit">
   <h2>Basic Authentication</h2>
   <p>
   Monkey provides a basic authentication mechanism through the <b>Auth</b> plugin, this authentication method
   is described in the RFC2617.
   </p>
</div>

<h3>Introduction</h3>
<p>
   In order to enable basic authentication (basic auth for short) in Monkey you must check that <b>Auth</b>
   plugin is part of your Monkey installation. If you installed Monkey from sources the plugin will be there.
</p>
<p>
   The basic auth works is designed to work at virtual host level, so you are able to protect specific virtual
   hosts and apply different set of users for each one. Please refer to the following section about how to setup basic auth.
</p>

<h3>Steps</h3>
<ul>

   <li>Make sure the <b>Auth</b> plugin is enabled in your Monkey configuration, open your conf/plugins.load configuration file
   and find a similar entry like this:</li>
   <p>
   <pre>[PLUGINS]
    # HTTP Basic Authentication
    # =========================
    #
    Load /home/foo/monkey/plugins/auth/monkey-auth.so
</pre></p>

   <li>Once the plugin is loaded you want to have a list of users who will access the virtual host. The <b>Auth</b> plugin distribute
       a tool named <u>mkpasswd</u> which manage users in a static file. This tool is pretty similar to htpasswd from Apache but the
       format to store the users is different.</li>
   <p></p>
   <p>Create an initial users file with one user:</p>
   <pre>$ mkpasswd -c -b /etc/monkey/plugins/auth/users.mk  myuser mypassword</pre>
   <p>
   Now you will have a <i>users.mk</i> file containing the new user, the file content should looks like:
   </p>
   <pre>$ cat users.mk
myuser:{SHA1}kd/Z3bQZiv/FwZTNjObTOP3kcOI=</pre>
   <p>
   You can add subsequent users with the same command but omitting the '-c' flag as this instruct mkpasswd to create a new file, e.g:
   </p>
   <pre>$ mkpasswd -b /etc/monkey/plugins/auth/users.mk  my_second_user some_password
$ cat users.mk
myuser:{SHA1}kd/Z3bQZiv/FwZTNjObTOP3kcOI=
my_second_user:{SHA1}cWX21AfcL9aFKNpjJgqRPnFiPoY=</pre>

   <li>
       Edit your virtual host configuration file and specify the <b>Auth</b> rules, e.g: edit /etc/monkey/sites/default and append:
   </li>
   <p>
   <pre>[AUTH]
    Location /
    Title    "Let's protect our content..."
    Users    /etc/monkey/plugins/auth/users.mk</pre>
   </p>
</ul>
<p>
Now restart Monkey and reload your web page, you will get the authentication box for the specific virtual host. If you add/delete users you will need to restart the service to make the changes take effect, we are working in a smart way to fix this behavior without affect performance or extra I/O.
</p>