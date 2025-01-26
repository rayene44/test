<?php
$cnx=mysqli_connect("localhost","root","","login")or die("connection échoué");
if(isset($nom)||isset($prenom)||isset($emailn)||isset($emailn)||isset($date)||isset($passwordn)){
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$emailn=$_POST["emailn"];
$date=$_POST["date"];
$passwordn=$_POST["passwordn"];
}
$req="select * from login where Email_com='emailn'";
$res=mysqli_query($cnx,$req);
$n=mysqli_num_rows($res);
if($n!=0)
echo"compte existant";
else{
    $req="insert into compte values('$nom','$Prenom','$passwordn','$emailn','$date');
    $res2=mysqli-query($cnx,$req);
    if($res2==true)
    ech"insertion avec succéé";
    else ech"insertion échoué";
}
mysqli_close($cnx);
?>
