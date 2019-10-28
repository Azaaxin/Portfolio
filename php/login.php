
<link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono&display=swap" rel="stylesheet">
<style type="text/css">
.login{
    font-family: 'Ubuntu Mono', monospace;
    background-color: #232323;
    margin: auto;
    width: 500px;
    height: 300px;
    position: fixed;
    margin-left: -257px;
    top: 0px;
    left: 50%;
    z-index: 100;
    box-shadow: 1px 1px 5px 0px #000000a8;
    /* border: 2px solid white; */
    color: #ffffff;


}
.invisible {
    background-color: #ffffff00;
    color: white;
    width: 75%;
    margin: auto;
    padding: 10px;
    position: relative;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: 3px solid #6a00a29c;
    transition: 0.5s;
    /* text-align: center; */
    display: block;
    animation: slidein 0.3s cubic-bezier(0.4, 0, 1, 1) forwards;
    -webkit-animation: slidein 0.3s cubic-bezier(0.4, 0, 1, 1) forwards;
}
.invisible:focus{
    background-color: #00000038;
    outline-width: 0;
    box-shadow: inset 0 0 1px 0px black;
}
@keyframes slidein {
  from {
    margin-top:-50px;
  }

  to {
    margin-top:30px;
  }
}
input[type=submit] {
    padding: 5px 10px;
    border: 0 none;
    background: #00000000;
    border-top: none;
    border-left: none;
    color: white;
    border-right: none;
    border-bottom: 3px solid #6a00a29c;
    height: 30;
    cursor: pointer;
    margin-left: 63;
    display: block;
    margin-top: 20px;
}
input[type=submit]:active {
    background-color: #00000038;
}
.login h3{
    margin-left: 63px;
    color: white;
    margin-top: 35px;
}

</style>
<?php if($_SESSION["login_user"] === NULL){
        echo '<h3> Login </h3>
        <form action="" method="post">
          <input type="text" class="invisible" placeholder="Username" name="user" autofocus>
          <input type="password" class="invisible" placeholder="Password" name="pass">
          <input type="submit" value="Login">
        </form>';
      }else{
        echo "Successfully logged out!";
        session_destroy();
      }
?>
