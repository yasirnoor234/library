<?php
    
    echo anchor(current_url(),'Refresh');
    echo img('biryanii.jpg');
//    echo current_url();
    
    echo "<h1>Codeigniter Tuotorial</h1>";

    echo heading('Codeigniter Tuotorial',2);
    echo heading('Codeigniter Tuotorial',4);
    echo heading('Codeigniter Tuotorial',5,'class="abc"');

    echo "\n";
    echo anchor('https://www.google.com','Google');
    echo img('vcard.png');
    echo "<br>";
    echo img(base_url(),'vcard.png');

    /*From Generate By Helper Function*/
    echo "\n\n\n";
    $attribute = array('class' => 'submit' , 'name' => 'info', 'method' => 'get');
    $input = array('class'=>'input','name'=>'name','id'=>'123','placeholder'=>'Type your name here');
    echo form_open('email/get',$attribute);
    
    echo form_label('First Name','name');
    echo form_input($input);
    echo "<br>";
    echo form_label('Password');
    echo form_input();
    
    $option = array (
            'no' => 'No Expert',
            'begineer' => 'Begineer',
            'inter' => 'Inter',
            'exoert' => 'Expert'
            
            );
    echo form_dropdown('level',$option,'begineer');
    echo form_submit('submit','Submit');
    
    echo form_close();

?>