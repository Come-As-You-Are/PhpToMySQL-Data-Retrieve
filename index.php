<?php
    require('testmysql.php');

    //Create Query.
    $query = 'SELECT * FROM posts';
    // Get Results

    $result = mysqli_query($conn, $query);

    //Use mysqli to fetch all of the data.
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    var_dump($posts);
//Should get data from post


    //Free Result
    mysqli_free_result($result);

    //Close Connection

    mysqli_close($conn);

?>


<!DOCTYPE html>
    <html>
        <head>
            <!--Simple web page of the posts I extracted from the database-->
            <title>PHP Styled Blog!</title>
            <link rel = "stylesheet" type = "text/css" href="http://bootswatch.com/cerulean/bootstrap.min.css">
        </head>
        <body>
            <h1>Posts</h1>
            <?php foreach($posts as $post) : ?>
            <div class = "well">
                <h3><?php echo $post['title']; ?></h3>
                <small>Created on March 26th by <?php echo
    $post['author'];?></small>
                <p><?php echo $post['body']; ?></p>
            </div>
            
            <?php endforeach; ?>
        
        </body>


    </html>
