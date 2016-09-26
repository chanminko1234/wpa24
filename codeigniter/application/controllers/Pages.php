<?php

class Pages extends CI_Controller {
	public function view($page = ' home '){
		echo $page;
	}
	public function test() {
		$query = $this->db->query( "SELECT * FROM students" );
		$data = [
			'title'=> 'Myanmar Links',
			'students'=>$query->result()
		];
		$this->load->view( 'home' , $data);
	}
}

?>