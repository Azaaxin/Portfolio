<?php
include "php/functions_sql.php";
include "php/authenticator.php";



$ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
$ip_info = json_decode(file_get_contents("http://ip-api.com/json/$ip"), true);
$country = $ip_info['country'];
$isp = $ip_info['isp'];
$region = $ip_info['regionName'];
$city = $ip_info['city'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$query = $ip_info['query'];
$dateTime = date('Y/m/d G:i:s', strtotime ("+1 hour"));
$file = "visitors.html";
$file = fopen($file, "a");
$data = "<table style='width:100%;border: 1px solid black;'><tr><th>User IP:</th><th>Browser:</th><th>Time:</th><th>Country:</th><th>ISP:</th><th>City:</th><th>Region:</th></tr><tr><th>$query</th><th>$browser</th><th>$dateTime</th><th>$country</th><th>$isp</th><th>$city</th><th>$region</th></tr></table>";
fwrite($file, $data);
fclose($file);





$number = array(0, 1, 2, 3);
$error = "There is something missing here, sorry :c";
$cookiename = array("null", "title_1", "title_2", "title_3", "title_4");

if (isset($_POST[title_1])){
    $payload_value = $_POST[title_1];
    $payload_sql = "UPDATE `content` SET title='$payload_value' WHERE id='1'";
    setcookie(title_1, $payload_value, time() + (86400 * 30), "/");
    if ($conn->query($payload_sql) === FALSE) {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
}
if (isset($_POST[title_2])){
    $payload_value = $_POST[title_2];
    $payload_sql = "UPDATE `content` SET title='$payload_value' WHERE id='2'";
    setcookie(title_2, $payload_value, time() + (86400 * 30), "/");
    if ($conn->query($payload_sql) === FALSE) {
        echo "Error updating record: " . $conn->error;
    }
    header( "Location: /portfolio/index.php");
    $conn->close();
}
if (isset($_POST['text_2'])){
    $payload_value = $_POST['text_2'];
    $payload_sql = "UPDATE `content` SET 'text'='$payload_value' WHERE id='2'";
    
    if ($conn->query($payload_sql) === FALSE) {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
}
if (isset($_POST[$cookiename[3]])){
    $payload_value = $_POST[$cookiename[3]];
    setcookie($cookiename[3], $payload_value, time() + (86400 * 30), "/");
    $payload_sql = "UPDATE `content` SET title='$payload_value' WHERE id='3'";
    
    if ($conn->query($payload_sql) === FALSE) {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
}
if (isset($_POST[$cookiename[4]])){
    $payload_value = $_POST[$cookiename[4]];
    setcookie($cookiename[4], $payload_value, time() + (86400 * 30), "/");
    $payload_sql = "UPDATE `content` SET title='$payload_value' WHERE id='4'";
    
    if ($conn->query($payload_sql) === FALSE) {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
}
?>


<html>
<!---- Ooh a visitor, Hello ;) ---->

<head>
    <title>
        Ludvig's Portfolio
    </title>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
    <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Display:900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Mono|Ubuntu+Mono&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.js" integrity="sha256-P8jY+MCe6X2cjNSmF4rQvZIanL5VwUUT4MBnOMncjRU=" crossorigin="anonymous"></script>


    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/animation.css">
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/portfolio/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/portfolio/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/portfolio/images/icons/favicon-16x16.png">
    <link rel="manifest" href="/portfolio/images/icons/site.webmanifest">
    
    <meta property="og:title" content="Portfolio by Ludvig Olausson">
    <meta property="og:description" content="Who I am and what I have done.">
    <meta property="og:image" content="#NOIMAGEYET">
    <meta property="og:url" content="http://modicodes.com/portfolio">
    <meta name="twitter:title" content="Portfolio by Ludvig Olausson">
    <meta name="twitter:description" content="Who I am and what I have done.">
    <meta name="twitter:image" content="#NOIMAGEYET">
    <meta name="twitter:card" content="summary_large_image">
</head>


<body>
    <div id="debug" style="position:fixed;top:0px;color:white;"></div>
    <div class="background-effect">
        <div id="very-top"></div>
        <div class="mousedect" id="menu">
            
                <nav class="navigation mousedect" id="mainNav">
                    <a class="navigation__link" id="1" href="#home">
                        <img class="invert_effect" src="images/home_made.svg" width="42" height="42">
                        <div class="text">
                            Home
                        </div>
                    </a>
                    <a class="navigation__link" id="2" href="#me">
                        <img class="invert_effect" src="images/me_made.svg" width="42" height="42">
                        <div class="text">
                            About Me
                        </div>
                    </a>
                    <a class="navigation__link" id="3" href="#linkedin">
                        <img class="invert_effect" src="images/linkedin_made.svg" width="42" height="42">
                        <div class="text">
                            Linkedin
                        </div>
                    </a>
                    <a class="navigation__link" id="4" href="#projects">
                        <img class="invert_effect" src="images/projects_made.svg" width="42" height="42">
                        <div class="text">
                            Projects
                        </div>
                    </a>
                    <div id="container_1">
                        <a class="text login-text" id="login" style="display: none;">
                            <?php if(!$_SESSION["login_user"]){
                            echo "Login</a>";
                        }else{
                            echo "<a class='text login-text' href='php/logout.php'>Logout</a>";
                        }
                        ?>
                        
                    </div>
                </nav>
            

        </div>
        <div class="snapper" id="h" onscroll="scollPos();">
            <div class="main counter" id="home">

                <div id="stars"></div>
                <div id="stars2"></div>
                <div id="stars3"></div>
                        
                
                    <div class="overlay matrix">
                        <div class="black-hole">
                        
                    <div id="matrix-effect"></div>
                        <div id="error-message" class="middle-object-text">
                            <p><?php 
                                    $sql = "SELECT * FROM content WHERE id='1'";
                                    $result = mysqli_query($conn, $sql);
                                    
                                        if(!$_SESSION["login_user"] == "Cmeducations"){    
                                            if (mysqli_num_rows($result) > 0) {
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    echo $row["title"];
                                                    $placeholder = $row["title"];
                                                }
                                            } else {
                                                echo $error;
                                            }
                                        } else {
                                            echo "<form class='form_class' action='" . $_SERVER['PHP_SELF'] . "' method='post' enctype='multipart/form-data' name='form1'><input autocomplete='off' class='admin_input' onchange='this.form.submit();' value='" . $_COOKIE[title_1] . "' name='title_1'> </form>";
                                        }
                                ?>
                            </p>
                            <div class="button_style" onclick="window.location.href='#projects'">
                                View my work
                            </div>
                        </div>

                    </div>
                    </div>
                <div class="overlay">
                    <div class="grad content_boxes counter" id="me">
                        <div id="error-message" class="middle-object-text">

                            <p>
                            <?php 
                                   $sql = "SELECT * FROM content WHERE id='2'";
                                   $result = mysqli_query($conn, $sql);
                                   
                                       if(!$_SESSION["login_user"] == "Cmeducations"){    
                                           if (mysqli_num_rows($result) > 0) {
                                               while($row = mysqli_fetch_assoc($result)) {
                                                   echo $row["title"];
                                                   echo $row["text"];
                                                   
                                                   $placeholder2 = $row["title"];
                                                   $placholder_text2 = $row["text"];
                                               }
                                           } else {
                                               echo $error;
                                           }
                                       } else {
                                            while($Prow = mysqli_fetch_assoc($result)) {
                                                $placeholder2 = $Prow["title"];
                                                $placholder_text2 = $Prow["text"];
                                                setcookie(title_2, $Prow["title"], time() + (86400 * 30), "/");
                                            }
                                            while($Prow_text = mysqli_fetch_assoc($result)) {
    
                                                $placholder_text2 = $Prow_text["text"];
                                            }
                                           echo "<form class='form_class' action='" . $_SERVER['PHP_SELF'] . "' method='post' enctype='multipart/form-data' name='form1'><input autocomplete='off' class='admin_input'value='" . $_COOKIE['title_2'] . "' onchange='this.form.submit();' placeholder='" . $_COOKIE['title_2'] . "' name='title_2'><input name='text_2' placeholder=' . $placholder_text2 . ' onchange='this.form.submit();'></input> </form>";
                                           
                                        }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="content_boxes counter" id="linkedin">
                    <div id="error-message" class="middle-object-text">

                        <p><?php 
                                        
                                $sql2 = "SELECT * FROM content WHERE id='3'";
                                $result = mysqli_query($conn, $sql2);
                                    
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo $row["title"];
                                        }
                                    } else {
                                        echo $error;
                                    }
                            
                                ?>
                        </p>
                    </div>
                </div>
                <div class="content_boxes counter" id="projects">
                    <div id="error-message" class="middle-object-text">
                        <p>
                            <?php 
                                        
                                $sql3 = "SELECT * FROM content WHERE id='4'";
                                $result = mysqli_query($conn, $sql3);
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                            echo $row["title"];
                                            }
                                        } else {
                                             echo $error;
                                             
                                        }
                            
                                ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="scripts/mainfunctions.js" type="text/javascript"></script>
    <script src="scripts/fade.js" type="text/javascript"></script>
</body>

</html>