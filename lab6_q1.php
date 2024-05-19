
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lab 6 Q1</title>
</head>
<body>
  <?php
    $name = "NUR ANIS SYAKIRAH BINTI AWANG ZAKARIA";
    $matric_number = "AI220043";
    $course = "BACHELOR OF INFORMATION TECHNOLOGY";
    $year_of_study = "Year 2";
    $address = "NO:136 FELDA TEMBANGAU 01,28380,KEMAYAN,PAHANG";
  ?>
  <table border ="1">
    <tr>
      <td>Name</td>
      <td><?php echo "$name"; ?></td>
    </tr>
    <tr>
      <td>Matric Number</td>
      <td><?php echo "$matric_number"; ?></td>
    </tr>
    <tr>
      <td>Course</td>
      <td><?php echo "$course"; ?></td>
    </tr>
    <tr>
      <td>Year of Study</td>
      <td><?php echo "$year_of_study"; ?></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><?php echo "$address"; ?></td>
    </tr>
  </table>
</body>
</html>