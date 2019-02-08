<?php 
    
    class Image extends CI_Controller
    {
        function __contruct()
        {
            parent::__construct();
            $this->load->helper(array('html','form'));
            $this->load->library('image_lib');
        }
        function index()
        {
              $this->load->view('resize');
        }
        function resize()
        {
            /*$config['width'] = $this->input->post('width');
            $config['height'] = $this->input->post('height');*/
            
            $config['source_image'] = './uploads/Avari.jpg';
            $config['new_image'] = './uploads/Avari_resize.jpg';
            
            $config['wm_text'] ="Code Igniter";
            $config['wm_type'] ="text";
            $config['wm_font_path'] ="./systems/fonts/texb.ttf";
            $config['wm_font_size'] = 25;
            $config['wm_font_color'] ="ffffff";
            $config['wm_vrt_alignment'] ="top";
            $config['wm_hor_alignment'] ="left";
            $config['wm_padding'] = '20';
            
            
            
            
            
            $this->image_lib->initialize($config);
            $this->image_lib->resize;
            
            if($this->image_lib->watermark($config))
            {
                echo $this->image->display_errors();
            }
            else{
                echo "Success";
            }
                $this->load->view('resize');
            
        }
    
    }

?>