<html>
<head>
    <title>Resize Image</title>
</head>
<body>
    <?php
        echo "<img src='".base_url()."uploads/Avari.jpg'>";
        
        echo "<h1>Resize Image</h1>";
        echo form_open('image/resize');
        echo form_label('Width');
        echo form_input('width');
    
        echo form_label('Height');
        echo form_input('height');
    
        echo form_submit('submit','Resize');
        echo form_close();
    ?>
</body>
</html>