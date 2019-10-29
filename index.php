<?php
include "php/functions_sql.php";
include "php/authenticator.php";
$number = array(0, 1, 2, 3);
$error = "There is something missing here, sorry :c";
if (isset($_POST['title_main'])){
    $payload_value = $_POST['title_main'];
    $payload_sql = "UPDATE `content` SET title='$payload_value' WHERE id='1'";
    
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
    <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Display:900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Mono|Ubuntu+Mono&display=swap" rel="stylesheet">
    <!---  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>--->
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <!--- <script src="scripts/menuscript.js" type="text/javascript"></script>--->

    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/animation.css">
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/portfolio/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/portfolio/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/portfolio/images/icons/favicon-16x16.png">
    <link rel="manifest" href="/portfolio/images/icons/site.webmanifest">
    

</head>


<body>
    <div id="debug" style="position:fixed;top:0px;color:white;">

    </div>
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
                    <div id="matrix-effect"></div>
                        <div id="error-message" class="middle-object-text">
                            <p><?php 
                                    $sql = "SELECT * FROM content WHERE id='1';";
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
                                            while($Prow = mysqli_fetch_assoc($result)) {
                                                $placeholder = $Prow["title"];
                                            }
                                            echo "<form action='" . $_SERVER['PHP_SELF'] . "' method='post' enctype='multipart/form-data' name='form1'><input autocomplete='off' class='admin_input'value='" . $_POST['title_main'] . "' onchange='this.form.submit();' placeholder='" . $placeholder . "' name='title_main'> </form>";
                                        }
                                ?>
                            </p>
                            <div class="button_style" onclick="window.location.href='#projects'">
                                View my work
                            </div>
                        </div>

                    </div>
                <div class="overlay">
                    <div class="grad content_boxes counter" id="me">
                        <div id="error-message" class="middle-object-text">

                            <p><?php 
                                        
                                $sql = "SELECT * FROM content WHERE id='2';";
                                $result = mysqli_query($conn, $sql);
                                
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

                <div class="content_boxes counter" id="linkedin">
                    <div id="error-message" class="middle-object-text">

                        <p><?php 
                                        
                                $sql = "SELECT * FROM content WHERE id='3';";
                                $result = mysqli_query($conn, $sql);
                                    
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
                                        
                                $sql = "SELECT * FROM content WHERE id='4';";
                                $result = mysqli_query($conn, $sql);
                                    
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