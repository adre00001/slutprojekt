<?php 
include("head.php");

?>
<body id="blog">
  <div id="wrapper">
    <!--Ska ligga i egen fil-->
    <header>
        <h1>Logga in</h1>
    </header>
    <?php 
		include ("nav.php");
	?>
    <!--Ska ligga i egen fil-->
  
    
    <main>
        <h2>Inloggning</h2>
       
        <form>
          <label for="username">Användarnamn:</label>
          <input type="text" id="username" name="user"><br><br>
          <label for="password">Lösenord:</label>
          <input type="password" id="password" name="password"><br><br>
          <input type="submit" value="Logga in">
        </form>
       
    </main>
    
    <!--Ska ligga i egen fil-->
    <footer>Denna sida är skapad av Kalle för kursen Webbserverprogrammering 1</footer>
  </div>
</body>
</html>
