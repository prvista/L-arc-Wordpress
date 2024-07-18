<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Magazine</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
<?php wp_head()?>
    <header class="header py--1 mb--5">
        <div class="container">
            <div class="header__wrapper d--flex justify--between align--center">
                <div class="branding">
                    <a href="#">l'arc en ciel</a>
                </div>
                <nav >
                    <ul class="d--flex">
                        <li class="mx--2" ><a href="<?php the_permalink()?>">Fashion</a></li>
                        <li class="mx--2" ><a href="#">Beauty</a></li>
                        <li class="mx--2" ><a href="#">Music</a></li>
                        <li class="mx--2" ><a href="#">Movie & Music</a></li>
                        <li class="mx--2" ><a href="#">Culture</a></li>
                    </ul>
                </nav>
                <i class="fas fa-search"></i>
            </div>
        </div>
    </header>