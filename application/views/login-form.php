<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <?php 
    
    if($this->session->userdata('username')!=null)
    {
        $this->load->helper('url');
        echo "<h1>Welcome".$this->session->userdata('username')."</h1>";
        echo "<br><a href='".base_url()."verify/logout'>Logout</a>";
    }
    else
    {
        echo "<h1>Login Form</h1>";    
        $this->load->helper('form');
    
        echo form_open('verify/Login');
        echo form_label('Username','username');
        echo form_input('username');
        
        echo "<br>\n";
        echo form_label('Password','password');
        echo form_password('password');
        echo "<br>\n";
    
        echo form_submit('Submit','Login');
        echo form_close();
    }
    ?>
</body>
</html>