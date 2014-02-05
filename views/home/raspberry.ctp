<Div class="hero-unit">
  <div class="row-fluid">
     <div class="span2">
          <?=$html->image('rpi_logo.png');?>
     </div>
     <div class="span10">
       <h2>Monkey + Raspbian on Raspberry Pi</h2>
       <p>
         As part of our mission to empower Linux Embedded devices with a strong
         HTTP stack, we are supporting Monkey stack on Raspbian and also distributing
         Raspbian packages for our latest releases.
       </p>
     </div>
  </div>
</div>

<div class="row-fluid">
   <div class="span10">
     <p>
       <small>Feb 04, 2014 - Updated packages for Monkey v1.4.0</small>

       <h3>Support us</h3>
       Donating money to <a href="http://monkey-project.com">Monkey</a> you will be contributing to help to continue
       our good work. Our organization accepts donation through multiple ways, being <a href="http://paypal.com">Paypal</a>
       the preferred one.
     </p>
     </div>
</div>
<br>
<div class="row-fluid">
  <div class="span10">
    <h3>Getting Raspbian packages</h3>
     <p>
     Our packages can be obtained from our own updated Debian repository. Please refer to the following steps to setup your
     RPI:
     </p>
     <p>
     Edit your <strong>/etc/apt/sources.list</strong> file and append the following line at bottom:
     <ul>
       <pre>deb http://packages.monkey-project.com/primates_pi primates_pi main</pre>
     </ul>
     </p>
     <p>
       Update your local database:
       <ul>
         <pre># apt-get update</pre>
       </ul>
     </p>
     <p>
       Install Monkey and it plugins:
     </p>
     <ul>
       <pre># apt-get install monkey             \
                  monkey-liana       \
                  monkey-logger      \
                  monkey-dirlisting  \
                  monkey-cgi         \
                  monkey-fastcgi     \
                  monkey-mandril     \
                  monkey-cheetah     \
                  monkey-auth</pre>
     </ul>
     <p>
       Once the packages are installed, you will be able to reach Monkey Server which by default is running on TCP port 2001:
     </p>
     <ul>
       <pre>$ curl -i http://raspberry_ip:2001/</pre>
     </ul>
     <br>
     <h3>Secure Socket Layer (SSL)</h3>
     <p>
       Monkey supports SSL through the <a href="http://polarssl.org">PolarSSL</a> library. In order to install the SSL plugin and
       it dependencies run the following command:
     </p>
     <ul>
       <pre># apt-get install monkey-polarssl libpolarssl0</pre>
     </ul>
     <p>
       the next steps are configure Monkey to use the monkey-polarssl plugin as the default transport layer.
     </p>

     <br>
     <h3>Monkey for Developers</h3>
     <p>
       We also distribute the shared library version of Monkey for developers. You can obtain the package with:
     </p>
     <ul>
     <pre># apt-get install libmonkey</pre>
     </ul>

     <br>
     <h3>To-Do</h3>
     <p>
       For us, the Raspberry Pi device is one of the most exciting target boards for development, for hence we are hard
       working to improve documentation and continue improving our stack. Stay tuned to this page for furter updates.
     </p>
  </div>
</div>
