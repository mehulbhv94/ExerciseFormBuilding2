<?php
$forms = [
    ["action"=>"management.php", "method"=>"post"],
    ["type" => "text" , "name" => "lastName", "label" => "LastName"],
    ["type" => "text" , "name" => "firstName", "label" => "FirstName"],
    ["type" => "password" , "name" => "pwd", "label" => "Password"],
    ["type" => "checkbox" , "name" => "leasure","value"=>"roller" , "label" => "Roller"],
    ["type" => "checkbox" , "name" => "leasure","value"=>"running" , "label" => "Rourse"],
    ["type" => "submit" , "name" => "input", "value" => "Sent"],
];
?>

<!DOCTYPE html>
<html>
<title>form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
label{
    color :khaki;
}

</style>
<body>

<div class="w3-container w3-blue">
  <h2>My Form</h2>
</div>
<?php
echo "<form  action=".$forms[0]['action'] ." method=".$forms[0]['method']." class='w3-container  w3-grey'>";
echo '<p>';
echo "<label>".$forms[1]['label']."</label>";
echo "<input class='w3-input ' type=".$forms[1]['type']." name=".$forms[1]['name']."></p>";
echo '<p>';
echo "<label>".$forms[2]['label']."</label>";
echo "<input class='w3-input' type=".$forms[2]['type']." name=".$forms[2]['name']."></p>";
echo '<p>';
echo "<label>".$forms[3]['label']."</label>";
echo "<input class='w3-input' type=".$forms[3]['type']." name=".$forms[3]['name']."></p>";
echo "<label>".$forms[4]['label']."</label>";
echo "<input class='w3-input w3-border w3-border-blue'  type=".$forms[4]['type']." name=".$forms[4]['name']."  value=".$forms[4]['value']." >";
echo "<label>".$forms[5]['label']."</label>";
echo "<input class='w3-input' type=".$forms[5]['type']." name=".$forms[5]['name']."  value=".$forms[5]['value'].">";
echo "<input class='w3-input' type=".$forms[6]['type']." name=".$forms[6]['name']."  value=".$forms[6]['value']."></p>";
echo '</form>';

 ?>


</body>
</html> 
