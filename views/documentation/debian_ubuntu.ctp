<div class="hero-unit">
     <h2>Debian & Ubuntu Packages</h2>
     <p>Monkey is already part of Debian and Ubuntu projects, but the packages available are always in very old
        versions.  We don't blame anyone, just provide a solution here.</p>
</div>

<h3>Introduction</h3>
<p>
Monkey Project is distributing Debian and Ubuntu packages for x64 from our new packages server. If you are a Debian or Ubuntu user
you can use our own repository to get the last updated packages.
</p>

<h3>Steps</h3>
<p>
<ul>
   <li>Edit your <i>/etc/apt/sources.lists</i> file and add the following entry:</li>
   <p>
      <pre>deb http://packages.monkey-project.com/primates primates main</pre>
   </p>
   <li>Update your packages list cache:</li>
   <p>
      <pre>$ sudo apt-get update</pre>
   </p>
   <li>Install Monkey</li>
   <p>
      <pre>$ sudo apt-get install monkey</pre>
   </p>

   <li>Our repository contains a set of packages, please review the options available:</li>
   <p>
   <ul>
       <li>monkey</li>
       <li>monkey-doc</li>
       <li>libmatrixssl3.2</li>
       <li>libmatrixssl3.2-dev</li>
   </ul>
   </p>
</p>