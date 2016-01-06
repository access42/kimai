<!DOCTYPE html>
<html lang="<?php echo $this->kga['lang']['countryLang']?>">
<head>
    <link rel="SHORTCUT ICON" href="favicon.ico">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="robots" content="noindex,nofollow" />
    <title>Kimai Error</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/error.css" />
    <script src="libraries/jQuery/jquery-1.9.1.min.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript"> 
            $(document).ready(function() {
                $('#ok').focus();
            }); 
        </script>
</head>
<body>
<div id="error_wrapper">
    <div id="error_txt">
        <h1><?php echo $this->headline?></h1>
        <p><?php echo $this->message?></p>
    </div>
    <div id="error_button">
        <form action="index.php" method="post"><input type="submit" value="<?php echo $this->kga['lang']['loginagain']?>" id="ok"/></form>
    </div>
</div>
</body>
</html>
