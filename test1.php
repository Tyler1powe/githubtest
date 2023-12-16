<!doctype html>
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href="oscars.css"> 
  <!-- ----------------------------------
            BIS1523/BIS2523 Documentation
   Name:
   Netid:
   Date:
   
   Variables used:
      <variable name>  <description of data variable will hold>
  
   -------------------------------------  -->
</head>
<body>
<h1>Awards Search</h1>
<section id="leftcol">
    <form method="post" action="oscars.php">
        Starting Year: <input type="text" name="startyear" size="4"> <br />
        Ending Year: <input type="text" name="endyear" size="4"> <br />
        <input type="submit" name="submit" value="submit">
    </form>
</section>

<section id="rightcol">
<?
$years = file("year.txt", FILE_IGNORE_NEW_LINES);
$actors = file("actors.txt", FILE_IGNORE_NEW_LINES);
$actresses = file("actresses.txt", FILE_IGNORE_NEW_LINES);

$startyear = $_POST['startyear'];
$endyear = $_POST['endyear'];

print"<table>
            <tr>
            <th>Year</th>
            <th>Year</th>
            <th>Year</th>
           </tr>";
           foreach ($years as $i=>$year){
       if ($year >= $startyear and $year <= $endyear){
   print"<tr>
            <td>$years[$i]</td>
            <td>$actors[$i]</td>
            <td>$actress[$i]</td>
           </tr>";
           }
           }
?>    
    
</section>


</body>
</html>
