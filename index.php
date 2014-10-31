 <!DOCTYPE html> 

<html xml:lang="nl" xmlns="http://www.w3.org/1999/xhtml" lang="nl">
<head>
  <title>Thiasos</title>
  <meta charset="utf-8"/>
  <meta name="keywords" content="thiasos, leuven, kul, grieks, latijn, klassiek" />
  <meta name="description" content=
  "Thiasos, vereniging ter bewaring van de klassieke cultuur. Ontdek onze activiteiten." />
  <link rel="stylesheet" type="text/css" href="style.css" media=
  "screen,projection" />
  <script src=
  "//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"
  type="text/javascript">
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
  <script type="text/javascript" language="javascript">

function loadByHash() {
 var type = window.location.hash.substr(1);
 if (type != "") { 
   $("#content").load(type+".php") 
 } else { 
   $("#content").load("welkom.php")
 }
}

window.addEventListener('popstate', function(event) {
loadByHash();
});
</script>
</head>

<body onload='loadByHash();'>

<body>
  <div id="fb-root"></div><script type="text/javascript">
//<![CDATA[
      (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
  //]]>
  </script>

  <div id="header">
<p><table>
<tr><td><h1>thiasos</h1> </td><td><h4>ruimte voor klassieke cultuur</h4></td></tr>

</table></p>
  </div>

  <div id="menu">
    <ul>
      <li><a onclick="history.pushState(null,null,'#/welkom');loadByHash();">home</a></li>
      <li><a onclick="history.pushState(null,null,'#/aankondigingen');loadByHash();">aankondigingen</a></li>
      <li><a onclick="history.pushState(null,null,'#/activiteiten');loadByHash();">activiteiten</a></li>
      <li><a onclick="history.pushState(null,null,'#/dionysia');loadByHash();">dionysia</a></li>
      <li><a onclick="history.pushState(null,null,'#/nieuwsbrief');loadByHash();">nieuwsbrief</a></li>
      <li><a onclick="history.pushState(null,null,'#/contact');loadByHash();">contact</a></li>
    </ul>
  </div>

  <div id="container">
    <img src="images/logo.jpg" id="logo" alt="logo" />
    <div id="content">
      
    </div>
  </div>

  <div id="footer">
    <img style="height:30px; width=auto;" src="images/kuleuven-logo-2012.png"></img>
  </div>
</body>
</html>
