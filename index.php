<?php
    require_once("libs/simpleDB.php");
    $myDB = new simpleDB();

    $messages = $myDB->select('messages');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stylesheets/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Simple chat</title>
</head>
<body>
<div class="wrapper">
    <ul class="message">
        <li class="new_message_item">
            <a class="text">Add New Message</a>
            <a class="plus">+</a>
        </li>
        <?php
            foreach ($messages as $message_item) { ?>
                <li class="message_item">
                    <div class="message_header">
                        <div class="count_likes"><i class="fa fa-heart" aria-hidden="true"></i> <?= $message_item['likes'] ?></div>
                        <div class="user_nickname"><?= $message_item['username'] ?></div>
                        <div class="posted_time"><?= $message_item['date'] ?></div>
                    </div>
                    <div class="message_body">
                        <div class="user_image"><?= $message_item['user_image'] ?></div>
                        <p class="message_text"><?= $message_item['message'] ?></p>
                    </div>
                </li>
           <?php } ?>
        <?php /*
        <li class="message_item">
            <div class="message_header">
                <div class="count_likes"><i class="fa fa-heart" aria-hidden="true"></i> 0001</div>
                <div class="user_nickname">UserName01</div>
                <div class="posted_time">01/01/01 01:01</div>
            </div>
            <div class="message_body">
                <div class="user_image"><img src="images/default_user.jpg" alt=""></div>
                <p class="message_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda facilis
                    inventore nobis sapiente. A alias asperiores dolore enim modi nihil quaerat, quas quia quibusdam,
                    repellat repellendus reprehenderit rerum sequi sunt?</p>
            </div>
        </li>
        <li class="message_item">
            <div class="message_header">
                <div class="count_likes"><i class="fa fa-heart" aria-hidden="true"></i> 0002</div>
                <div class="user_nickname">UserName02</div>
                <div class="posted_time">02/02/02 02:02</div>
            </div>
            <div class="message_body">
                <div class="user_image"><img src="images/noavatar.png" alt=""></div>
                <p class="message_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda facilis
                    inventore nobis sapiente. A alias asperiores dolore enim modi nihil quaerat, quas quia quibusdam,
                    repellat repellendus reprehenderit rerum sequi sunt?</p>
            </div>
        </li>
        <li class="message_item level01">
            <div class="message_header">
                <div class="count_likes"><i class="fa fa-heart" aria-hidden="true"></i> 0003</div>
                <div class="user_nickname">UserName03</div>
                <div class="posted_time">03/03/03 03:03</div>
            </div>
            <div class="message_body">
                <div class="user_image"><img src="images/avatar.jpg" alt=""></div>
                <p class="message_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda facilis
                    inventore nobis sapiente. A alias asperiores dolore enim modi nihil quaerat, quas quia quibusdam,
                    repellat repellendus reprehenderit rerum sequi sunt?</p>
            </div>
        </li>
        <li class="message_item level02">
            <div class="message_header">
                <div class="count_likes"><i class="fa fa-heart" aria-hidden="true"></i> 0004</div>
                <div class="user_nickname">UserName04</div>
                <div class="posted_time">04/04/04 04:04</div>
            </div>
            <div class="message_body">
                <div class="user_image"><img src="images/no_avatar.jpg" alt=""></div>
                <p class="message_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda facilis
                    inventore nobis sapiente. A alias asperiores dolore enim modi nihil quaerat, quas quia quibusdam,
                    repellat repellendus reprehenderit rerum sequi sunt?</p>
            </div>
        </li>
        <li class="message_item level03">
            <div class="message_header">
                <div class="count_likes"><i class="fa fa-heart" aria-hidden="true"></i> 0005</div>
                <div class="user_nickname">UserName05</div>
                <div class="posted_time">05/05/05 05:05</div>
            </div>
            <div class="message_body">
                <div class="user_image"><img src="images/noavatar.gif" alt=""></div>
                <p class="message_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda facilis
                    inventore nobis sapiente. A alias asperiores dolore enim modi nihil quaerat, quas quia quibusdam,
                    repellat repellendus reprehenderit rerum sequi sunt?</p>
            </div>
        </li>
        */ ?>
    </ul>
</div>
<script src="scripts/main.js"></script>
</body>
</html>