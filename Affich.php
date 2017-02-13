<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php
echo "<div id=\"containerG\">\n";
echo "<h1>Display of the form</h1><br>\n";
echo "<form method=POST action=yourAction>\n";
echo "<table class='table table-bordered'>\n";

//============================================================================//
if(isset($_POST['nbrtxt']))
{
for($i=1;$i<=$_POST['nbrtxt'];$i++)
{
echo "\n<tr>\n<td><b>".$_POST["labelchmp$i"]." :</b></td>\n<td><input class=form-control type=text name=labelchmp$i></td>\n</tr>\n";
}
}

//============================================================================//
if(isset($_POST['nbrlistes']))
{
for($i=1;$i<=$_POST['nbrlistes'];$i++)
{
echo "\n<tr>\n<td><b>".$_POST["labellst$i"]." :</b></td>\n";
$ch1=explode(";",$_POST["valeurlst$i"]);

echo "<td><select class=form-control name=liste$i>";
foreach($ch1 as $val1)
echo "\n<option value=$val1>".$val1."</option>";
echo "</select></td>\n</tr>";
}
}

//============================================================================//
if(isset($_POST['nbrradios']))
{
for($i=1;$i<=$_POST['nbrradios'];$i++)
{
echo "\n<tr>\n<td><b>".$_POST["labelrd$i"]." :</b></td>";
$ch2=explode(";",$_POST["valeurrd$i"]);
echo "\n<td>";
foreach($ch2 as $val2)
echo "<label class=radio-inline><input type=radio name=labelrd$i value=$val2>$val2</label>";
echo "</td>\n</tr>";
}
}

//============================================================================//
if(isset($_POST['nbrcases']))
{
for($i=1;$i<=$_POST['nbrcases'];$i++)
{
echo "\n<tr>\n<td><b>".$_POST["labelcs$i"]." :</b></td>";
$ch3=explode(";",$_POST["valeurcs$i"]);
echo "\n<td>";
foreach($ch3 as $val3)
echo "<label class=checkbox-inline><input type=checkbox name=$val3 value=$val3>$val3</label>";
echo "\n</td>\n</tr>";
}
}

//============================================================================//
if(isset($_POST['nbrarea']))
{
for($i=1;$i<=$_POST['nbrarea'];$i++)
{
echo "\n<tr>\n<td><b>".$_POST["labelzt$i"]." :</b></td><td><textarea class=form-control name=labelzt$i></textarea></td>\n</tr>";
}
}

echo "\n</table>\n";
echo "<center>\n<table border=0 width=50%>\n<tr>\n<td width=45% ><input type=reset class='btn btn-danger btn-block' name=reset value=Reset></td>\n<td></td>\n<td width=45%> <input type=submit class='btn btn-primary btn-block' name=submit value=Submit></td>\n</tr>\n</table>\n</center>\n";
//echo "</table>";
echo "</div>";
?>


<script src="http://css-tricks.com/examples/ViewSourceButton/prettify/prettify.js"></script>
	<script>
		$(function() {
			$("<pre />", {
				"html":   '' + 
						$("div")
							.html()
							.replace(/[<>]/g, function(m) { return {'<':'&lt;','>':'&gt;'}[m]})
							.replace(/((ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?)/gi,'<a href="$1">$1</a>')
			}).appendTo("#source-code");
		});
		
		$(function() {
			$("<pre />", {
				"html":   '' + 
						$("head")
							.html()
							.replace(/[<>]/g, function(m) { return {'<':'&lt;','>':'&gt;'}[m]})
							.replace(/((ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?)/gi,'<a href="$1">$1</a>')
			}).appendTo("#source-code2");
		});
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
}

#bd,#hd
{
	margin:auto 50px;
}

</style>	
<!--Remove This -->
<br><br><button type="button" class="btn btn-success btn-lg btn-block" data-toggle="collapse" data-target="#source-code,#source-code2,#h3body">Generate Code</button>
<!--Remove This -->
<br>

<!--=============================to show the code to add into head==============================-->
<div id="hd">
<h3 class="collapse" id="h3body">Add this code to your head</h3>
<div id="source-code2" class="collapse">
</div>
</div>


<!--=============================to show the code to add into head==============================-->
<div id="bd">
<h3 class="collapse" id="h3body">Add this code to your body</h3>
<div id="source-code" class="collapse">
</div>
</div>
