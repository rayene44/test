<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="x-icon" href="inspire.png" heigt="50px">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InspireNest</title>
    <link rel="stylesheet" href="style.css">
<script src="index.js"></script>
</head>
<body>
    <style>
        header{
    background-color: rgb(38, 5, 110);
 
    display: none;
    flex-direction: column;
    width: 300px;
    height: 400px;
    text-align: right;
    text-align: center;
    padding-top: 70px;
    gap: 10px;
    position: absolute;
    right: 6px; 
    padding-left: auto;
    z-index: 9999;
}
h1{
    margin-top: 70px;
}
#img1{
    height: 180px;
    top: 50px;
    position: absolute;
    border-radius: 150%;
}
#box1{
    background-color:rgb(38, 5, 110);
    height: 70px;
    padding-top: 10px;

}
input[type="texte"]{
    background-color: rgb(38, 5, 110);
}
#box2{
    width: 400px;
    height: 400px;
    align-self:center;
    margin: auto;
    margin-top: 70px;
    display: flex;
    background-color: white;
    border-radius: 15px;
    text-transform: lowercase;
    justify-content: center;
    color: rgb(0, 0, 0);
}
#box3{
    width: 400px; 
    height: 400px;
    background-color: rgb(255, 255, 255);
    border-radius: 15px;
    text-transform: lowercase;
    display: none;
    align-self: center;
    justify-content: center;
    margin: auto;
    margin-top: 70px;
}
#t1{
    height: 35px;
    width: 300px;
    top: 280px;
    position: absolute;
    border-radius: 20px;
    background-color: rgb(38, 5, 110);
    color: white;
    
}
#t1::placeholder{
    color: white;
}
#t2{
    height: 35px;
    width: 300px;  
    top: 360px;
    position: absolute;
    border-radius: 20px;
    background-color: rgb(38, 5, 110);
    color: white;
}
#b1{
    height: 35px;
    width: 300px;
    position: absolute;
    top: 440px; 
    cursor: pointer;
    border-radius: 20px;
    background-color: rgb(38, 5, 110);
    color: white;
}
#a6{
    position: absolute;
    top: 490px;
    left: 0x;
    background-color: transparent;
    height: auto;
    width: auto;
    cursor: pointer;
    color: black;
}
#t3{
    height: 35px;
    width: 300px;
    top: 190px;
    position: absolute;
    border-radius: 20px;   
    background-color: rgb(38, 5, 110);
    color: white;
}
#t4{ height: 35px;
    width: 300px;  
    top: 250px;
    position: absolute;
    background-color: rgb(38, 5, 110);
    color: white;
    border-radius: 20px;}
    #t5{
        height: 35px;
        width: 300px;  
        top: 310px;
        position: absolute;
        border-radius: 20px;
        background-color: rgb(38, 5, 110);
    color: white;
    }
    #t6{
        height: 35px;
        width: 300px;  
        top: 370px;
        position: absolute;
        border-radius: 20px;
        background-color: rgb(38, 5, 110);
    color: white;
    }
    #t7{
        height: 35px;
        width: 300px;  
        top: 430px;
        position: absolute;
        border-radius: 20px;
        background-color: rgb(38, 5, 110);
    color: white;
    }
    #b2{
        height: 35px;
        width: 300px;  
        top: 490px;
        position: absolute;
        border-radius: 20px;
        color: white;
        background-color:
      rgb(38, 5, 110);
      cursor: pointer;
    }
    #h1ph{
        color: red;
        left: 570px;
        top: 490px;
        background-color: rgb(245, 175, 175);
        height: 40px;
        width: 400px;
        text-align: center;
        position: absolute;
        font-family:'Courier New', Courier, monospace;
        font-size:large;
    }
    input::placeholder{
       color: white;
    }
    #img2{
        position: absolute;
        top: 288px;
        left: 340px;
        background:local;
    }
    #img3{
        position: absolute;
        left: 340px;
        top: 365px;
    }
#a7{
    position: absolute;
    top: 520px;
    left: 140px;
    background-color: transparent;
    height: auto;
    width: auto;
    cursor: pointer;
    color: black;
}
a{
    text-decoration: none;
    color: white;
    height: 70px;
    width: 100%;
    padding-top: 15px;
}
#a1:hover{
    background-color: rgb(49, 28, 167);
   
}
#a2:hover{
    background-color:rgb(49, 28, 167);
   
}
#a3:hover{
    background-color: rgb(49, 28, 167);
   
}
#a4:hover{
    background-color:rgb(49, 28, 167);
   
}
body{
    display:fixed;
}
#a5:hover{
    background-color:rgb(49, 28, 167);
   
}
#menu{
    right: 50px;
    position: absolute;
    cursor: pointer;
    height: 45px;
}
#return{
    left: 10px;
    height: 40px;
    width: 40px;
    cursor: pointer;
    top: 10px;
    position: absolute;
    border-radius: 100%;
}
body{
    background-color: rgb(205, 200, 200);
}
    </style>
    <div id="box1">
    <img src="menu.png" id="menu" onclick="menu()">
    <header id="header">
        <img src="return.png" id="return" onclick="returnp()">
        <a href="" id="a1">Home</a>
        <a href="" id="a2">About</a>
        <a href="" id="a3">Products</a>
        <a href="" id="a4">Blog</a>
        <a href="" id="a5">Login</a>
    </header>
    </div>
    <div id="box2">
                <img src="person.png" alt="" srcset="" id="img1">
                <h1>LOGIN</h1>
                <input type="text" id="t1" placeholder="Email address" name="email"><img src="email (2).png" height="25px" id="img2">
                <input type="password" id="t2" placeholder="Password" name="password"><img src="pass.png" id="img3" height="25">
                <button type="submit" id="b1">Log in</button>
                <a id="a6" onclick="change()">Forgotten Password?</a>
            </div>
            <form action="index.php" method="post">
            <div id="box3" onsubmit="test()">
                <input type="text" placeholder="FirstName" id="t3"name="nom">
                <input type="text" placeholder="SurName" id="t4" name="prenom">
        <input type="email" placeholder="Email address" id="t5" name="emailn">
        <input type="date" id="t6" name="date">
        <input type="password" placeholder="Password" id="t7" name="passwordn">
        <button type="submit" id="b2" name="button2" onsubmit="test()">Submit</button>
        <a onclick="turn()" id="a7">I already have an account</a>
    </div>
    <h1 id="h1ph"></h1>
    </form>
</body>
</html>
<?php
$cnx=mysqli_connect("localhost","root","","login")or die("connection échoué");
if(isset($nom)||isset($prenom)||isset($emailn)||isset($emailn)||isset($date)||isset($passwordn)){
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$emailn=$_POST["emailn"];
$date=$_POST["date"];
$passwordn=$_POST["passwordn"];
}
$req="select from login where Email_com='email'";
$req=mysqli_query($cnx,$req);
$n=mysqli_num_rows($req);
if($n!=0)
echo'<h1 id=h1ph>'."insertion échoué".'</h1>';
else{
    $req="insert into compte values('$nom','$prenom','$emailn','$date','$passwordn')";
    '<h1 id=h1ph>'."insertion avec succéé".'</h1>';
}
?>
