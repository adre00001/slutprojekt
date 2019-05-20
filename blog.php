<?php 
$sidtitel = "Blogg";
$id = "blog";
$sidtitel = "Blogg";
include("head.php");
?>
  <div id="wrapper">
    <!--Ska ligga i egen fil-->
    <header>
        <h1>Blogg</h1>
    </header>
    
    <!--Ska ligga i egen fil-->
	<?php
	include ("nav.php");
	?>
	
    
    <main>
        <h2>Blogg</h2>
       
           <article>
          <h3>Lorem ipsum</h3>
          <p><small>Postad 2019-02-12 av Kalle</small></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu luctus ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris felis mauris, aliquet ac ligula eu, elementum condimentum augue. Proin pulvinar augue sit amet sem sodales rutrum. Ut dignissim lacinia ex, tempus finibus ipsum cursus et. Duis fringilla maximus viverra. Vivamus turpis quam, convallis in nibh vitae, posuere elementum mi. Mauris tempor velit quis ex pulvinar, sit amet dapibus justo tincidunt</p>
          <p><a href="addcomments.html">Kommentera artikeln</a></p>
          
          <!--Kommentarer-->
          <article>
            <h4>Intressant artikel</h4>
            <p><small>Postad 2019-02-12 av Kalle</small></p>
          </article>
         
        </article>
        <article>
          <h3>Lorem ipsum</h3>
          <p><small>Postad 2019-02-12 av Nalle</small></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu luctus ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris felis mauris, aliquet ac ligula eu, elementum condimentum augue. Proin pulvinar augue sit amet sem sodales rutrum. Ut dignissim lacinia ex, tempus finibus ipsum cursus et. Duis fringilla maximus viverra. Vivamus turpis quam, convallis in nibh vitae, posuere elementum mi. Mauris tempor velit quis ex pulvinar, sit amet dapibus justo tincidunt. Nulla urna lacus, tristique id turpis vitae, pretium ullamcorper massa. Cras dictum maximus vestibulum. Quisque dignissim ut tellus non eleifend. Etiam maximus ipsum in efficitur mattis. Donec sit amet ipsum et purus pulvinar convallis a eu ligula. Donec non lorem ac leo tincidunt eleifend eget at nisi. Vestibulum gravida quam ut quam venenatis tristique. Donec lacinia, massa a accumsan consectetur, dui erat pharetra nunc, mollis accumsan enim purus a neque.</p>
          <p><a href="addcomments.html">Kommentera artikeln</a></p>
        <article>
            <h5>Intressant artikel</h5>
            <p><small>Postad 2019-02-12 av Nalle</small></p>
          </article>
    </main>
 
    <!--Ska ligga i egen fil-->
  <?php
	include ("footer.php");
  ?>
