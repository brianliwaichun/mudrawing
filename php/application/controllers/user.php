
<?php
class User extends CI_Controller {

       public function __construct()
       {
            parent::__construct();
            // Your own constructor code
       }

	public function login()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') 
		{
			$this->load->helper('url');
			
			$sql = "SELECT * FROM users WHERE name = ? and password = ?";
			$users = $this->db->query($sql, array($this->input->post('username'), $this->input->post('password')))->result_array();
			if($users){
				redirect('/user/main', 'refresh');
			}else{
				redirect('/user/login?error=login', 'refresh');
			}
		}else{
			$this->load->view('user/login');
		}
	}
	
	public function main()
	{
		$this->load->view('user/main');
	}
	
	public function register()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') 
		{
			$this->load->helper('url');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'username', 'is_unique[users.name]');
			if ($this->form_validation->run() == FALSE)
			{
				redirect('/user/register?register=fail', 'refresh');
			}else{
				$data = array('name'	=>	$this->input->post('username'),
							   'password'	=>	$this->input->post('password'));
				$this->db->insert('users', $data);
				redirect('/user/register?register=success', 'refresh');
			}
		}
		$this->load->view('user/register');
	}
	
	public function member_register()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') 
		{
			$this->load->helper('url');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'email', 'is_unique[users.name]');
			if ($this->form_validation->run() == FALSE)
			{
				redirect('/user/member_register?register=fail', 'refresh');
			}else{
				$data = array('name'	=>	$this->input->post('username'),
							   'email'	=>	$this->input->post('email'),
							   'phone'	=>	$this->input->post('phone'),
							   'address'	=>	$this->input->post('address'));
				$this->db->insert('member', $data);
				redirect('/user/member_register?register=success', 'refresh');
			}
		}
		$this->load->view('user/member_register');
	}
	
	public function member_edit()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') 
		{
			$this->load->helper('url');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'email', 'reuired|is_unique[users.name]');
			$this->form_validation->set_rules('member_id', 'member_id', 'reuired|is_unique[users.name]');
			if ($this->form_validation->run() == FALSE)
			{
				redirect('/user/member_edit?register=fail', 'refresh');
			}else{
				$sql = "SELECT * FROM member WHERE id = ?";
				$member = $this->db->query($sql, array($this->input->post('member_id')))->result_array();
				if($member){
					$data = array('name'	=>	$this->input->post('username'),
								   'email'	=>	$this->input->post('email'),
								   'phone'	=>	$this->input->post('phone'),
								   'address'	=>	$this->input->post('address'));
					$this->db->where('id', $this->input->post('member_id'));
					$this->db->update('member', $data);
					redirect('/user/member_edit?register=success', 'refresh');
				}else{
					redirect('/user/member_edit?register=fail', 'refresh');
				}
			}
		}
		$member_id = $this->input->get('id');
		$sql = "SELECT * FROM member WHERE id = ?";
		$member = $this->db->query($sql, array($member_id))->result_array();
		$data['member'] = $member;
		$this->load->view('user/member_edit', $data);
	}
	
	public function product_register()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') 
		{
			$this->load->helper('url');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'name', 'required');
			$this->form_validation->set_rules('price', 'price', 'required|integer');
			if ($this->form_validation->run() == FALSE)
			{
				redirect('/user/product_register?register=fail', 'refresh');
			}else{
				$data = array('name'	=>	$this->input->post('name'),
							   'price'	=>	$this->input->post('price'),
							   'description'	=>	$this->input->post('description'),
							   'quantity'	=>	0,
							   'discount'	=>	0,
							   'author'	=>	$this->input->post('author'));
				$this->db->insert('product', $data);
				redirect('/user/product_register?register=success', 'refresh');
			}
		}
		$this->load->view('user/product_register');
	}
	
	public function product_edit()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') 
		{
			$this->load->helper('url');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'name', 'required');
			$this->form_validation->set_rules('price', 'price', 'required|integer');
			$this->form_validation->set_rules('discount', 'discount', 'integer');
			if ($this->form_validation->run() == FALSE)
			{
				redirect('/user/product_edit?register=fail', 'refresh');
			}else{
				$sql = "SELECT * FROM product WHERE id = ?";
				$product = $this->db->query($sql, array($this->input->post('product_id')))->result_array();
				if($product){
					$data = array('name'	=>	$this->input->post('name'),
							   'price'	=>	$this->input->post('price'),
							   'description'	=>	$this->input->post('description'),
							   'quantity'	=>	$this->input->post('quantity'),
							   'discount'	=>	$this->input->post('discount'),
							   'author'	=>	$this->input->post('author'));
					$this->db->where('id', $this->input->post('product_id'));
					$this->db->update('product', $data);
					redirect('/user/product_edit?register=success', 'refresh');
				}else{
					redirect('/user/product_edit?register=fail', 'refresh');
				}
			}
		}
		$product_id = $this->input->get('id');
		$sql = "SELECT * FROM product WHERE id = ?";
		$product = $this->db->query($sql, array($product_id))->result_array();
		$data['product'] = $product;
		$this->load->view('user/product_edit', $data);
	}
	
	public function reserve_product(){
		if ($this->input->server('REQUEST_METHOD') === 'POST') 
		{
			$this->load->helper('url');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('reserve_product_id', 'reserve_product_id', 'required|integer');
			$this->form_validation->set_rules('quantity', 'quantity', 'required|integer');
			if ($this->form_validation->run() == FALSE)
			{
				redirect('/user/product_register?reserve=fail', 'refresh');
			}else{
				$sql = "SELECT * FROM product WHERE id = ?";
				$product = $this->db->query($sql, array($this->input->post('reserve_product_id')))->result_array();
				if($product){
					$data = array('quantity'	=>	$product[0]['quantity'] + $this->input->post('quantity'));
					$this->db->where('id', $this->input->post('reserve_product_id'));
					$this->db->update('product', $data);
					redirect('/user/product_register?reserve=success', 'refresh');
				}else{
					redirect('/user/product_register?reserve=fail', 'refresh');
				}
			}
		}
	}
	
	public function cashout(){
		if ($this->input->server('REQUEST_METHOD') === 'POST') 
		{
			$this->load->helper('url');
			$cashout_list = array();
			$product_ids = $this->input->post('product_id');
			foreach($product_ids as $product_id){
				$sql = "SELECT * FROM product WHERE id = ?";
				$product = $this->db->query($sql, array($product_id))->result_array();
				if($product){
					if($product[0]['quantity']>0){
						$data = array('quantity'	=>	$product[0]['quantity'] -1);
						$this->db->where('id', $product[0]['id']);
						$this->db->update('product', $data);
						$product_array = array('name'	=>	$product[0]['name'],
												'price'	=>	$product[0]['price']*($product[0]['discount']/100),
												'status'	=>	'success');
						$cashout_list[] = $product_array;
					}else{
						$product_array = array('name'	=>	$product[0]['name'],
												'price'	=>	0,
												'status'	=>	'Not enough storage.');
						$cashout_list[] = $product_array;
					}
				}
			}
			$data = json_encode($cashout_list);
			redirect('/user/print_cashout?data='.$data, 'refresh');
		}
		$this->load->view('user/cashout');
	}
	
	public function print_cashout(){
		$json = $this->input->get('data');
		$data['data'] =  json_decode($json);
		$this->load->view('user/print_cashout', $data);
	}
}
?>
