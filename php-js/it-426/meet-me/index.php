<!DOCTYPE html>
<html lang="en">
  <head> 
    <title>IT 426 | Meet John</title>
    <meta charset="utf-8">
    <link href="css/meet.css" rel="stylesheet">
  </head>
  <body>
    <div id="wrapper">
      <header> 
        <h1>Hi, I'm John.</h1> 
      </header>
      <main>
        <?php
          if (isset($_POST['submitbutton']))
           {
            print '<p class="about">I&#8217;m baby four dollar toast freegan helvetica iceland selfies. Hell of kombucha meh pop-up, fingerstache kogi copper mug. Cronut ramps everyday carry, shabby chic put a bird on it ethical cornhole prism yr.</p>';
            print '<p class="about">Four dollar toast vice tousled whatever drinking vinegar try-hard butcher listicle. Next level hexagon portland salvia taxidermy leggings. Before they sold out try-hard godard direct trade, portland pok pok tofu banh mi pug cred narwhal cloud bread.</p>';
           }
          else
           {
            print "<p>composer, writer, designer, educator, husband, father</p><form method='post' action='index.php'><input type='submit' id='submitbutton' name='submitbutton' value='Come in, and know be better, man!'></form>";
           }
        ?>
    </main>
      <footer>
        <p>Copyright &copy; 2020 John Durham</p>
      </footer>
    </div>
  </body>
</html>