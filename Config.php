<?php
//$texte=$_POST['champs_texte'];
//$nbtexte=$_POST['nbre_champs_texte'];
//$listes=$_POST['champs_listes'];
//$nblistes=$_POST['nbre_champs_listes'];
/*$radio=$_POST['champs_boutons'];
$nbradios=$_POST['nbre_champs_boutons'];
$case=$_POST['champs_cases_a_cocher'];
$nbcases=$_POST['nbre_champs_boutons'];
$txtareas=$_POST['champs_zone_texte'];
$nbtxtareas=$_POST['nbre_zones_texte'];*/
echo "<center>";
echo "<h1>Configurez les element que vous avez ajoute</h1>";
echo "<form name=config method=POST action=Affich.php>";
echo "<table border=1>";
if(isset($_POST['champs_texte']))
{
echo "<input type=hidden name=nbrtxt value=$_POST[nbre_champs_texte]>";
for($i=1;$i<=$_POST['nbre_champs_texte'];$i++)
{
echo "<tr><td><b>Veuillez  Saisir le Label de champt de texte $i :</b></td><td><input type=text name=labelchmp$i></td></tr>";
}
}
if(isset($_POST['champs_listes']))
{
echo "<input type=hidden name=nbrlistes value=$_POST[nbre_champs_listes]>";
for($i=1;$i<=$_POST['nbre_champs_listes'];$i++)
{
echo "<tr><td><b>Veuillez Saisir le Label de la liste $i</b></td>";
echo "<td><input type=text name=labellst$i></td>";
echo "<td><b>Veuillez saisir les elements de la liste separes par ';</b></td>";
echo "<td><input type=text name=valeurlst$i></td></tr>";
}
}
if(isset($_POST['champs_boutons']))
{
echo "<input type=hidden name=nbrradios value=$_POST[nbre_champs_boutons]>";
for($i=1;$i<=$_POST['nbre_champs_boutons'];$i++)
{
echo "<tr><td><b>Veuillez Saisir le Label boutons   $i</b></td>";
echo "<td><input type=text name=labelrd$i></td>";
echo "<td><b>Veuillez saisir les choix des boutons separes par ';</b></td>";
echo "<td><input type=text name=valeurrd$i></td></tr>";
}
}
if(isset($_POST['champs_cases_a_cocher']))
{
echo "<input type=hidden name=nbrcases value=$_POST[nbre_champs_cases]>";
for($i=1;$i<=$_POST['nbre_champs_cases'];$i++)
{
echo "<tr><td><b>Veuillez Saisir le Label des cases a coucher  $i</b></td>";
echo "<td><input type=text name=labelcs$i></td>";
echo "<td><b>Veuillez saisir les choix des cases separes par ';</b></td>";
echo "<td><input type=text name=valeurcs$i></td></tr>";
}
}
if(isset($_POST['champs_zone_texte']))
{
echo "<input type=hidden name=nbrarea value=$_POST[nbre_zones_texte]>";
for($i=1;$i<=$_POST['nbre_zones_texte'];$i++)
{
echo "<tr><td><b>Veuillez  Saisir le Label de la zone de texte $i :</b></td><td><input type=text name=labelzt$i></td></tr>";
}
}
echo "<tr><td align=center colspan=4><input type=button name=precedente value=\"&lt;&lt; Precedent\" onclick=history.go(-1)> <input type=submit name=submit value=\"Affichage  &gt;&gt;\"></td></tr>";
echo "</table>";
echo "</center>";
?>