<?php
  include 'session.php';
  include 'ip.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>

<body>
  <style>
    body,
    html {
      height: 100%;
      margin: 0;
    }

    .backgroundimg {
      background-image: url('https://images.unsplash.com/photo-1594323713852-9626155bfd37?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80');
      height: 100%;
      background-position: center;
      background-size: cover;
      position: relative;
      font-family: "Courier New", Courier, monospace;
      font-size: 25px;
    }

    .topleft {
      position: absolute;
      top: 0;
      left: 16px;
      color: aliceblue;
    }

    .signout{
      position: absolute;
      bottom: 0;
      padding: 20px;
      left: 20px;
    }

    .signout button a{
      text-decoration: none;
      font-weight: bolder
    }

    .button {
      align-items: center;
      background-image: linear-gradient(144deg,#AF40FF, #5B42F3 50%,#00DDEB);
      border: 0;
      border-radius: 8px;
      box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
      box-sizing: border-box;
      color: #FFFFFF;
      display: flex;
      font-family: sans-serif;
      font-size: 20px;
      justify-content: center;
      line-height: 1em;
      max-width: 100%;
      min-width: 140px;
      padding: 3px;
      text-decoration: none;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      white-space: nowrap;
      cursor: pointer;
    }

    .button:active,
    .button:hover {
      outline: 0;
    }

    .button span {
      background-color: rgb(5, 6, 45);
      padding: 16px 24px;
      border-radius: 6px;
      width: 100%;
      height: 100%;
      transition: 300ms;
    }

    .button:hover span {
      background: none;
    }

    @media (min-width: 768px) {
      .button {
        font-size: 24px;
        min-width: 196px;
      }
    }

    .bottommiddle {
      position: absolute;
      bottom: 0;
      right: 16px;
      color: aliceblue;
    }

    .middle {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      font-weight: bolder;
    }

    hr {
      margin: auto;
      width: 40%;
    }
    #aliceblue_colour{
      color: aliceblue;
    }
    
  </style>

  <body>

    <div class="backgroundimg">
      <div class="topleft">
        <p><?php echo "Date - " . date("d/m/y");?></p>
      </div>
      <div class="middle">
        <h1 id="aliceblue_colour"><?php echo "HEllO ".$get_session;?>,</h1>
        <hr>
        <p>
        <?php
            echo "Your ip is: ". UserInfo::get_ip();
            echo "<br>Your os version is ". UserInfo::get_os();
            echo "<br>Your browser is ". UserInfo::get_browser();
            echo "<br>Your device is ". UserInfo::get_device();

        ?> </p>
        <p id="aliceblue_colour">Thanks for Sign up</p>
      </div>
      <div class="signout">
        <button class="button" role="button"><span class="text"><a href="logout.php"> Sign Out</a></span></button>
      </div>
      <div class="bottommiddle">
        <p>Created by Ayan Saha</p>
      </div>
    </div>

  </body>

</html>