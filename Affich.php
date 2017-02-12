<?php
echo "<center>";
echo "<h1>Affichage De votre Formulaire</h1>";
echo "<form method=POST>";
echo "<table border=1>";
if(isset($_POST['nbrtxt']))
{
for($i=1;$i<=$_POST['nbrtxt'];$i++)
{
echo "<tr><td><b>".$_POST["labelchmp$i"]." :</b></td><td><input type=text name=labelchmp$i></td></tr>";
}
}
if(isset($_POST['nbrlistes']))
{
for($i=1;$i<=$_POST['nbrlistes'];$i++)
{
echo "<tr><td><b>".$_POST["labellst$i"]." :</b></td>";
$ch1=explode(";",$_POST["valeurlst$i"]);

echo "<td><select name=liste$i>";
foreach($ch1 as $val1)
echo "<option value=$val1>".$val1."</option>";
echo "</select></td></tr>";
}
}
if(isset($_POST['nbrradios']))
{
for($i=1;$i<=$_POST['nbrradios'];$i++)
{
echo "<tr><td><b>".$_POST["labelrd$i"]." :</b></td>";
$ch2=explode(";",$_POST["valeurrd$i"]);
echo "<td>";
foreach($ch2 as $val2)
echo "<input type=radio name=labelrd$i value=$val2>$val2";
echo "</td></tr>";
}
}
if(isset($_POST['nbrcases']))
{
for($i=1;$i<=$_POST['nbrcases'];$i++)
{
echo "<tr><td><b>".$_POST["labelcs$i"]." :</b></td>";
$ch3=explode(";",$_POST["valeurcs$i"]);
echo "<td>";
foreach($ch3 as $val3)
echo "<input type=checkbox name=$val3 value=$val3>$val3";
echo "</td></tr>";
}
}
if(isset($_POST['nbrarea']))
{
for($i=1;$i<=$_POST['nbrarea'];$i++)
{
echo "<tr><td><b>".$_POST["labelzt$i"]." :</b></td><td><textarea name=labelzt$i></textarea></td></tr>";
}
}
echo "<tr><td align=center colspan=2><input type=reset value=Annuler><input type=submit value=Valider></td></tr>";
echo "</table>";
echo "</center>";
?>