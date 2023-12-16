
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
    

