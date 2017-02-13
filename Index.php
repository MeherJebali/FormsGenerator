<html>
<head>
<title>Genrateur de Formulaire</title>
<script language="JavaScript">
function verifSelection() 
{
if ((formulaire.champs_texte.checked == "") && (formulaire.champs_listes.checked == "") && (formulaire.champs_boutons.checked == "") && (formulaire.champs_cases_a_cocher.checked == "") && (formulaire.champs_zone_texte.checked == "")) 
{
alert("Select at least one element.")
return false
} 
}
</script>
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
</head>
<body>
<div id="containerG">
<form name="formulaire" method="POST" action="Config.php" onSubmit="return verifSelection()">
        <h1>Select the elements you want to add to your form:</h1><br>
        <table class="table table-bordered">
        <tr> 
            <td><input type="checkbox" name="champs_texte"></td>
            <td><label>Text field</label></td>
            <td><label>Quantity :</label></td>
            <td width="10%">
				<select class="form-control" data-style="btn-info" name="nbre_champs_texte">
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
            <td><label>Dropdown list</label></td>
            <td><label>Quantity :</label></td>
            <td>
				<select class="form-control" name="nbre_champs_listes">
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
            <td><label>Radio button</label></td>
            <td><label>Quantity :</label></td>
            <td>
				<select class="form-control" name="nbre_champs_boutons">
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
            <td><label>Checkbox</label></td>
            <td><label>Quantity :</label></td>
            <td>
				<select class="form-control" name="nbre_champs_cases">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </td>
        </tr>
        <tr> 
            <td><input type="checkbox" name="champs_zone_texte"></td>
            <td><label>Textarea</label></td>
            <td><label>Quantity :</label></td>
            <td>
                <select class="form-control" name="nbre_zones_texte">
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
		<table border="0" width=50%>
            <tr> 
              <td width=45%><input type="button" name="precedente" value="&lt;&lt; Previous" onclick="history.go(-1)" class="btn btn-danger btn-block"></td>
              <td></td>
			  <td width=45%><input type="submit" name="submit" value="Next  &gt;&gt;" class="btn btn-primary btn-block"></td>
            </tr>
          </table>
          </center>
      </form>
</div>	  
</body>
</html>