<!DOCTYPE html>
<html lang="en">
  <head> 
    <title>IT 426 | PHP Demo</title>
    <meta charset="utf-8">
    <link href="css/php-demo.css" rel="stylesheet">
  </head>
  <body>
    <div id="wrapper">
      <header> 
        <h1>PHP Demo</h1> 
      </header>
      <main>
        <?php
          if (isset($_POST['submitbutton']))
           {
            print '<p class="lyrics">It&#8217;s my party and I&#8217;ll cry if I want to.</p>';
           }
          else
           {
            print "<p>This text and button will be replaced by alternate content from the PHP 'if' statement when the button is clicked.</p><form method='post' action='index.php'><input type='submit' id='submitbutton' name='submitbutton' value='Click to Engage'></form>";
           }
        ?>
    </main>
      <footer>
        <p>Copyright &copy; 2020 John Durham</p>
      </footer>
    </div>
  </body>
</html>