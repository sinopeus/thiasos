 <!DOCTYPE html> 

<html xml:lang="nl" lang="nl">
<head>
  <title>Thiasos</title>
  <meta charset="utf-8"/>
  <meta name="keywords" content="thiasos, kuleuven, leuven, kul, grieks, latijn, klassiek, dionysia" />
  <meta name="description" content="Thiasos, vereniging ter bewaring van de klassieke cultuur. Ontdek onze activiteiten." />
  <link rel="stylesheet" type="text/css" href="style.css" media="screen,projection" />
  <script src= "//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript">
  <script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>

  <script type="text/javascript" language="javascript">
    var pages = {
      welkom: "",
      aankondigingen: "",
      activiteiten: "",
      dionysia: "",
      nieuwsbrief: "",
      contact: ""
    }

    function pushAndLoad(page) {
      history.pushState(null,null,'#/'+page);
      loadByHash();
    }
    
    function replaceAndLoad(page) {
      history.replaceState(null,null,'#/'+page);
      loadByHash();
    }
    
    
    function loadByHash() {
      var pg = window.location.hash.substr(2);
      if (pg in pages) {
        $("#content").load(pg+".php");
      } else {
        replaceAndLoad('welkom');
      }
    }

    window.addEventListener('popstate', function(event) {
      loadByHash();
    });

    function moveWindow (section) {
      window.location.hash=section;
    }


  </script>
</head>

<body onload='loadByHash();'>
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
      <li><a onclick="pushAndLoad('welkom');">home</a></li>
      <li><a onclick="pushAndLoad('aankondigingen');">aankondigingen</a></li>
      <li><a onclick="pushAndLoad('activiteiten');">activiteiten</a></li>
      <li><a onclick="pushAndLoad('dionysia');">dionysia</a></li>
      <li><a onclick="pushAndLoad('nieuwsbrief');">nieuwsbrief</a></li>
      <li><a onclick="pushAndLoad('contact');">contact</a></li>
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
