<?php 
    if(!isset($page_title)) { $page_title = 'Staff Area'; }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link rel="stylesheet" media="all" href="../stylesheets/staff.css" /> TRUE FILEPATH-->
    <link rel="stylesheet" media="all" href="/public/stylesheets/staff.css" />
    
    <title>TipToe Financial - <?php echo $page_title; ?></title>
</head>
<body>
    <header>
        <h1>Staff area</h1>
    </header>
    
    <navigation>
        <ul>
            <li>
                <!--<a href="index.php">Menu</a> TRUE FILEPATH-->
                <a href="/public/staff/index.php">Menu</a>
            </li>
        </ul>
    </navigation>