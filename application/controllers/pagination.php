<?php

	class pagination extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('pagination');
			$this->load->model('Pagination_Model');
		}
		function index()
		{
			$config['base_url'] = base_url().'pagination/index';
			$config['per_page'] = 1;
			$config['total_rows'] = $this->pagination_model->total_records();

			$this->pagination->initialize($config);

			if($this->url->segment(3))
			{
				$page = $this->url->segment(3);
			}
			else {
				$page = 0;
			}

				$data['result'] = $this->Pagination_Model->fetch_data($cofig['per_page'],$page);

				$data['links'] = $this->pagination->create_links();

				$this->load->view('pagination',$data);
		}
	}

?>
