
<?php

$data = [
       'album' => ['Bleach', 'Superunknown', 'The Fragile', 'OK Computer'], 
       'releaseDate' => ['June 15, 1989', 'September 21, 1999', 'January 25, 1994', 'May 21, 1997'], 
       'coverArt' => ['<img src="images/bleach.jpg" alt="bleach cover art">', '<img src="images/superunknown.jpg" alt="superunknown cover art">', 
       '<img src="images/fragile.jpg" alt="The Fragile cover art">',  '<img src="images/ok-computer.jpg" alt="OK Computer cover art">'],
       'link' => ['<a href="#">buy now</a>', '<a href="#">buy now</a>', '<a href="#">nuy now</a>', '<a href="#">buy now</a>']
        ];

    //echo '<pre>',
    //var_dump($data);
    //echo '</pre>';

function html_table($data = [])
{
    $rows = [];
    foreach ($data as $row) {
        $cells = [];
        foreach ($row as $cell) {
            $cells[] = "<td>{$cell}</td>";
            }
        $rows[] = "<tr>" . implode('', $cells) . "</tr>";
        }
    return "<tbody>" . implode('', $rows) . "</tbody>";    
}

if (is_array($data)) {
    echo html_table($data);
}
else {
    echo "<tbody><tr><td colspan='4'>Sorry, No Data Available</td></tr></tbody>";
}





?>
  

