<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="/save" method="post">
    <input type="hidden" name="id" value="<?= isset($st['id']) ? $st['id'] : '' ?>">
        <label>studentID</label>
        <input type="text" name="studentID" placeholder="studentID" value="<?= isset($stud['studentID']) ? $stud['studentID'] : '' ?>">
        <br>
        <label>FullName</label>
        <input type="text" name="FullName" placeholder="FullName"value="<?= isset($stud['FullName']) ? $stud['FullName']:''?>">
        <br>
        <label>YearLevel</label>
        <input type="text" name="YearLevel" placeholder="YearLevel"value="<?=isset($stud['YearLevel']) ?  $stud['YearLevel']:'' ?>">
        <br>
        <label>Program</label>
        <input type="text" name="Program" placeholder="Program" value="<?= isset($stud['Program']) ? $stud['Program'] :''?>">
        <br>
        <input type="submit" value="save">
        
    </form>

     
     <table border="1">
       <tr> 
        <th>studentID </th>
        <th>FullName</th>
        <th> YearLevel</th> 
        <th>Program</th>
        <th>action</th>
      </tr>
  
      <?php foreach ($st as $g): ?>
       <tr>
        <td> <?= $g ['studentID'] ?> </td>
        <td><?=$g ['FullName'] ?> </td>
        <td> <?=$g ['YearLevel'] ?> </td>
        <td> <?= $g ['Program'] ?> </td>
        <td><a href="/delete/<?= $g['id'] ?>">delete</a>||<a href="/edit/<?= $g['id'] ?>">edit</a></td>
       </tr>
      <?php endforeach; ?>
   </table>
 </body>
</html>