<?php

require_once "./conn.php";

if(isset($_GET['supp'])) {
    $requete2="DELETE FROM subscribers WHERE id='".$_GET['id']."' ";
    mysqli_query($conn,$requete2);
}

$requete="SELECT * FROM subscribers ORDER by subscription_date DESC";
$result=mysqli_query($conn,$requete);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display emails</title>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>
    <th>Company</th>
    <th>date</th>
    <th>supp</th>
  </tr>
  <?php while($row = mysqli_fetch_array($result)){ ?>
  <tr>
    <td><?php echo  $row['email']; ?></td>
    <td><?php echo $row['subscription_date']; ?></td>
    <td class='table-delete'><button onclick="confirmation ('display_emails.php?id=<?php echo $row['id']; ?>&amp;supp=ok')" >delete</button></td>
  </tr>
  <?php } ?>
</table>

<script type="text/javascript">
  function confirmation (url) {
      if (confirm('Supprimer ce chercheur?')==true) { 
        document.location.href=url; 
      }
  }
</script>
</body>
</html>
