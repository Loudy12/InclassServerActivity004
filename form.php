<?php
include 'data.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Lab 12</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,800" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/severactivity.js"></script> 
</head>
<body>
<h1>Fine Art Meme Maker</h1>
<section class="grid-container">
    <?php
    //loop to make images
    foreach ($paintings as $painting) {
        $filename = $painting['filename'];
        echo '<img src="result.php?file=' . $filename . '&width=100" data-value="' . $filename . '">';
    }
    ?>
</section>
<form action="result.php" method="get">
    <label for="whichPainting">Select Base Painting:</label>
    <select name="file" id="whichPainting">
        <?php
        // loop through array to make options
        foreach ($paintings as $painting) {
            $filename = $painting['filename'];
            $title = $painting['title'];
            echo '<option value="' . $filename . '">' . $title . '</option>';
        }
        ?>
    </select>

    <label for="text1">Meme 1 Text:</label>
    <input type="text" name="text1" id="text1" size="50" value="Default text" />

    <label for="size1">Meme 1 Font Size:</label>
    <span>12</span>
    <input type="range" name="size1" id="size1" min="12" max="64" value="24" />
    <span>64</span>

    <label for="text2">Meme 2 Text:</label>
    <input type="text" name="text2" id="text2" size="50" value="More text"/>

    <label for="size2">Meme 2 Font Size:</label>
    <span>12</span>
    <input type="range" name="size2" id="size2" min="12" max="48" value="48" />
    <span>48</span>

    <label for="width">Image Width:</label>
    <span>500</span>
    <input type="range" name="width" id="width" min="500" max="1000" value="500" />
    <span>1000</span>

    <input type="submit" value="Click To See Meme" >
</form>
</body>
</html>