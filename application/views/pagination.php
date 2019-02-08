<html>
<head>
  <title>Pagination class</title>
</head>
<body>

      <?php
        foreach ($result as $row) {
          # code...
          echo $data->name . "+" . $data->author;
        }

       ?>

       <p><?php echo $links; ?></p>
</body>

</html>
