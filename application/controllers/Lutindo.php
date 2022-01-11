<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lutindo extends CI_Controller
{

	public function index()
	{
		$this->load->view('lutungan/index');
	}
	public function pesan()
	{
		$this->db->insert('post_pesan', [
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'subject' => $this->input->post('subject'),
			'message' => $this->input->post('message'),
			'date' => time()
		]);
		redirect();
	}
	public function pesanan($url)
	{
		$this->db->insert('ltd_order', [
			'customer' => $this->input->post('customer'),
			'site_id' => $this->input->post('site_id'),
			'site_name' => $this->input->post('site_name'),
			'address' => $this->input->post('address'),
			'contractor' => $this->input->post('contractor'),
			'region' => $this->input->post('region'),
			'project' => $this->input->post('project'),
			'type_tower' => $this->input->post('type_tower'),
			'email' => $this->input->post('email'),
			'no_phone' => $this->input->post('no_phone'),
			'status_verifikasi' => 'Belum diverifikasi',
			'tanggal_pemesanan' => time()
		]);
		redirect($url);
	}
}
