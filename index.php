<?php
$cnx=mysqli_connect("localhost","root","","login")or die("connection échoué");
if(isset($nom)||isset($prenom)||isset($emailn)||isset($emailn)||isset($date)||isset($passwordn)){
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$emailn=$_POST["emailn"];
$date=$_POST["date"];
$passwordn=$_POST["passwordn"];
}
$req="select from login where Email_com='emailn'";
$req=mysqli_query($cnx,$req);
$n=mysqli_num_rows($req);
if($n!=0)
echo'<h1 id=h1ph>'."insertion échoué".'</h1>';
else{
    $req="insert into compte values('$nom_com','$Prenom_com','$Email_com','$date_com');
    '<h1 id=h1ph>'."insertion avec succéé".'</h1>';
}
mysqli_close($cnx);
?>
