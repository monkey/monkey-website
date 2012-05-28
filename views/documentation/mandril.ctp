<div class="hero-unit">
   <h2>Mandril Security Plugin</h2>
   <p>
   Mandril is a plugin which provides a security layer to Monkey through rules which can be applied to the request
   URI or by network address.
   </p>
</div>

<h3>Introduction</h3>
<p>
 Mandril is a core plugin which allow to define security rules to be applied to the incomming
 connections. If the client is rejected by some of these rules, it will get the 403 Forbidden
 error status.
</p>
<p>
 It supports two restriction modes, by request URI or by IP (fixed IP or network range), all these
 rules take place in the <i>mandril.conf</i> configuration file, you can find it under
 conf/plugins/mandril/mandril.conf.
</p>

<h3>Restriction by request URI</h3>
<p>
 An URI represent the relative address of the resource requested through HTTP, a common request
   looks like this:
</p>
<pre>GET /documents/ HTTP/1.1
Host: example.com</pre>
<p>
 If we split the first request line in three parts, the first one is the HTTP method, the second
 the <strong>URI</strong> and the third one the protocol version used.
</p>
<p>
 So if you look to restrict the access to some client requesting a specific URI or using a specific
 keyword on it, you can add that rule to the [RULES] section, e.g:
</p>
<pre>[RULES]
    URL documents
    URL pictures
    URL /private
</pre>

<h3>Restriction by IP or Network range</h3>
<p>
   You can define multiple rules to deny the access to a specific IP address or a network range, most
   well known as a sub-network, e.g:
</p>
<pre>[RULES]
    IP  10.20.1.1/24
    IP 192.168.3.150
</pre>
<p>
 In the first rule we are blocking a range of IPs from 10.20.1.1 to
 10.20.1.255. In the second example just one specific IP address. You can add as many restriction
 by IP as you want.
</p>
<h3>Mixing rules</h3>
<p>
 You can mix different rules type under the [RULE] section, check the following example which uses
 the data specified previoulsy:
</p>
<pre>[RULES]
    URL documents
    URL pictures
    URL /private
    IP  10.20.1.1/24
    IP  192.168.3.150
</pre>
<p>
   Make sure to restart Monkey every time you edit the configuration file, so the changes can take
   effect.
</p>
