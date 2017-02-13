<style>
#containerG
{
	max-width:70%;
	align:center;
	text-align:center;
	margin-top:150px;
	margin-left: auto;
	margin-right: auto;
};
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
echo "<div id='containerG'>";
echo "<h1>Configure the elements you recently added</h1><br>";
echo "<form name=config method=POST action=Affich.php>";
echo "<table class='table table-bordered'>";
//=============================TextField===========================================//
if(isset($_POST['champs_texte']))
{
echo "<input type=hidden name=nbrtxt value=$_POST[nbre_champs_texte]>";
$i=$_POST['nbre_champs_texte'];
if($i<=1)
{
	echo "<tr><td width=25% colspan=2><b>Label for the textfield :</b></td><td width=25% colspan=2><input type=text required class=form-control name=labelchmp$i></td></tr>";
	
}
else
{
	for($i=1;$i<=$_POST['nbre_champs_texte'];$i++)
	{
	echo "<tr><td width=25% colspan=2><b>Label for the textfield number $i :</b></td><td width=25% colspan=2><input type=text required class=form-control name=labelchmp$i></td></tr>";
	}
}
}



//=============================DropdowList===========================================//
if(isset($_POST['champs_listes']))
{
echo "<input type=hidden name=nbrlistes value=$_POST[nbre_champs_listes]>";
$i=$_POST['nbre_champs_listes'];
if($i<=1)
{
	echo "<tr><td width=25%><b>Label for the list</b></td>";
	echo "<td width=25%><input class=form-control type=text required name=labellst$i></td>";
	echo "<td width=25%><b>Elements of the list separated by ';'</b></td>";
	echo "<td width=25%><input class=form-control type=text required name=valeurlst$i></td></tr>";
}
else
{
	for($i=1;$i<=$_POST['nbre_champs_listes'];$i++)
	{
	echo "<tr><td width=25%><b>Label for the list number $i</b></td>";
	echo "<td width=25%><input class=form-control type=text required name=labellst$i></td>";
	echo "<td width=25%><b>Elements of the list number $i separated by ';'</b></td>";
	echo "<td width=25%><input class=form-control type=text required name=valeurlst$i></td></tr>";
	}	
}

}



//=============================Radio Button===========================================//
if(isset($_POST['champs_boutons']))
{
echo "<input type=hidden name=nbrradios value=$_POST[nbre_champs_boutons]>";
$i=$_POST['nbre_champs_boutons'];
if($i<=1)
{
	echo "<tr><td width=25%><b>Label for the radio button</b></td>";
echo "<td width=25%><input class=form-control type=text required name=labelrd$i></td>";
echo "<td width=25%><b>Elements of the radio buttons separated by ';'</b></td>";
echo "<td width=25%><input type=text required class=form-control name=valeurrd$i></td></tr>";
}
else
{
for($i=1;$i<=$_POST['nbre_champs_boutons'];$i++)
{
echo "<tr><td width=25%><b>Label for the radio button number $i</b></td>";
echo "<td width=25%><input class=form-control type=text required name=labelrd$i></td>";
echo "<td width=25%><b>Elements of the radio buttons number $i separated by ';'</b></td>";
echo "<td width=25%><input type=text required class=form-control name=valeurrd$i></td></tr>";
}
}
}



//=============================checkbox===========================================//
if(isset($_POST['champs_cases_a_cocher']))
{
echo "<input type=hidden name=nbrcases value=$_POST[nbre_champs_cases]>";
$i=$_POST['nbre_champs_cases'];
if($i<=1)
{
	
	echo "<tr><td width=25%><b>Label for the checkbox</b></td>";
	echo "<td width=25%><input class=form-control type=text required name=labelcs$i></td>";
	echo "<td width=25%><b>Elements of the checkbox separated by ';'</b></td>";
	echo "<td width=25%><input class=form-control type=text required name=valeurcs$i></td></tr>";

}
else
{
	for($i=1;$i<=$_POST['nbre_champs_cases'];$i++)
	{
	echo "<tr><td width=25%><b>Label for the checkbox number $i</b></td>";
	echo "<td width=25%><input class=form-control type=text required name=labelcs$i></td>";
	echo "<td width=25%><b>Elements of the checkbox number $i separated by ';'</b></td>";
	echo "<td width=25%><input class=form-control type=text required name=valeurcs$i></td></tr>";
	}
}

}



//=============================Textarea===========================================//
if(isset($_POST['champs_zone_texte']))
{
echo "<input type=hidden name=nbrarea value=$_POST[nbre_zones_texte]>";
$i=$_POST['nbre_zones_texte'];
if($i<=1)
{
	echo "<tr><td width=25% colspan=2><b>Label for the textarea :</b></td><td width=25% colspan=2><input type=text class=form-control required name=labelzt$i></td></tr>";
	
}
else
{
	for($i=1;$i<=$_POST['nbre_zones_texte'];$i++)
	{
	echo "<tr><td width=25% colspan=2><b>Label for the textarea number $i :</b></td><td width=25% colspan=2><input type=text class=form-control required name=labelzt$i></td></tr>";
	}
}

}
echo "</table>";
echo "<center><table border=0 width=50%><tr><td width=45% ><input type=button class='btn btn-danger btn-block' name=precedente value=\"&lt;&lt; Previous\" onclick=history.go(-1)></td><td></td><td width=45%> <input type=submit class='btn btn-primary btn-block' name=submit value=\"Affichage  &gt;&gt;\"></td></tr></table></center>";
//echo "</table>";
echo "</div>";
?>