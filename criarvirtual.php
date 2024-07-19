<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VirtualHost</title>
    <style>
pre {
  font-family: Consolas,"courier new";
  color: crimson;
  background-color: #f1f1f1;
  padding: 2px;
  font-size: 105%;
}
</style>
</head>
<body style="font-family: sans-serif;">

            <h1>Criar Virtuais Hosts no WAMMP</h1>
            <p>Entrar em -> wamp64/www <br><br> criar uma nova pasta com algum nome <br><br> Depois ir nas configurações do apache, o meu está localizado em wmap64/bin/apache/apache2.4.24/conf <br><br>
            depois entrar no arquivo httpd.conf e ver se a linha "include conf/extra/httpd-vhost.conf" não está documentada<br><br>
            depois ir em conf/extra/httpd-vhost.conf e adicionar o virtualhost com essa estrutura: <br><br></p>
<pre>
#
&lt;VirtualHost *:80&gt;
	ServerName nomedoserver
	DocumentRoot "c:/wamp64/www/pastacriada"
	&lt;Directory  "c:/wamp64/www/pastacriada/"&gt;
		Options +Indexes +Includes +FollowSymLinks +MultiViews
		AllowOverride All
		Require local
    &lt;/Directory&gt;
&lt;/VirtualHost&gt;
</pre>

<p>Após isso, ir em system32/drivers/etc e abrir o arquivo hosts e adicionar o IP do server ( 127.0.0.1 ) e o Server Name</p>
        
</body>
</html>