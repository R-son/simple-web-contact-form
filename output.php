<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <?php
            $html = '<p>Name: ' . $_POST['name'] . '</p>';
            $html .= '<p>Email: ' . $_POST['email'] . '</p>';
            $html .= '<p>Issue: ' . $_POST['option'] . '</p>';
            $html .= '<p>Message:<br>' . $_POST['message'] . '</p>';
            echo $html;
        ?>
    </body>
</html>