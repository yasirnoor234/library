<html>
<head>
  <title>Codeigniter Encryption and Decryption</title>
</head>
<body>
<h1>Encryption</h1>
<div>
<?php
     form_open('encrypt/encoder');
     form_label('Enter Your Message','message');
     form_input('message');
     form_submit('submit','Encode');
     form_close();

     if(isset($key))
     {
        echo form_fieldset('Encryption Key');
        echo "<strong> $key </strong>";
        echo form_fieldset_close();
     }
 ?>
 </div>
 <h1>Decryption</h1>
 <div>
   <?php
        form_open('encrypt/decoder');
        form_label('Enter Your Message','message');
        form_input('message');
        form_submit('submit','Decode');
        form_close();

             if(isset($key1))
             {
                echo form_fieldset('Decryption Key');
                echo "<strong> $key1 </strong>";
                echo form_fieldset_close();
             }
?>
 </div>
</body>

</html>
