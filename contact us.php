
<html>

<head>
    <title>Contact form</title>
    <meta charset="utf-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1">
    <link rel=" stylesheet" type="text/css" href="style3.css">
</head>

<body>
<div id="cook1">
<button onclick="document.getElementById('localt').style.display='block'" style="width:auto;"><a href="realestate1.php" class="logo">HOME</a>  
</button></div>
    <form class="Contactform" action="send.php">

        <label>Name</label>
        <input type="text" name="name" placeholder="Your name...">

        <label>E-Mail</label>
        <input type="text" name="Email" placeholder="Your email...">

        <label>Message</label>
        <textarea name="Message" placeholder="Write something..." style="height: 200px;"></textarea>

        <center><button class="sendbutton">Send</button></center>

    </form>
</body>

</html>