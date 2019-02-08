<html>
<head>
    <title>Insert Form</title>
</head>
<body>
    <?php
        echo heading('Insert New Book',1);

        echo form_open('insert');
        echo form_label('Book','book');
        echo form_input('name');
    
        echo form_label('Author','author');
        echo form_input('author');
        
        echo form_submit('Submit','Save');
        echo form_close();
    
    
    ?>
    
</body>    
    
</html>