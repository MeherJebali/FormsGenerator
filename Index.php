<html>
<head>
<title>Genrateur de Formulaire</title>
<script language="JavaScript">
function verifSelection() 
{
if ((formulaire.champs_texte.checked == "") && (formulaire.champs_listes.checked == "") && (formulaire.champs_boutons.checked == "") && (formulaire.champs_cases_a_cocher.checked == "") && (formulaire.champs_zone_texte.checked == "")) 
{
alert("Veuillez couchez au moins une case.")
return false
} 
}
</script>
</head>
<body>
<center>
<form name="formulaire" method="POST" action="Config.php" onSubmit="return verifSelection()">
        <h1>Selectionnez les elements que vous voulez ajouter dans votre formulaire :</h1>
        <table width="40%" border="1">
        <tr> 
            <td><input type="checkbox" name="champs_texte"></td>
            <td><label>Champs de texte</label></td>
            <td><label>Quantite :</label></td>
            <td>
				<select name="nbre_champs_texte">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>
			</td>
           
        </tr> 
        <tr> 
            <td><input type="checkbox" name="champs_listes"></td>
            <td><label>Liste deroulante</label></td>
            <td><label>Quantite :</label></td>
            <td>
				<select name="nbre_champs_listes">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
				</select>
			</td>
        </tr>
        <tr> 
            <td><input type="checkbox" name="champs_boutons" ></td>
            <td><label>Bouton radio</label></td>
            <td><label>Quantite :</label></td>
            <td>
				<select name="nbre_champs_boutons">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>                
				</select>
			</td>
		</tr>
        <tr> 
            <td><input type="checkbox" name="champs_cases_a_cocher" ></td>
            <td><label>Case a cocher</label></td>
            <td><label>Quantite :</label></td>
            <td>
				<select name="nbre_champs_cases">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </td>
        </tr>
        <tr> 
            <td><input type="checkbox" name="champs_zone_texte"></td>
            <td><label>Zone de saisie de texte</label></td>
            <td><label>Quantite :</label></td>
            <td>
                <select name="nbre_zones_texte">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>
            </td>
        </tr>
	</table>
        <center>
		<table border="0">
            <tr> 
              <td width="120"><input type="button" name="precedente" value="&lt;&lt; Precedent" onclick="history.go(-1)"></td>
              <td width="120"><input type="submit" name="submit" value="Suivante  &gt;&gt;"></td>
            </tr>
          </table>
          </center>
      </form>
</center>	  
</body>
</html>