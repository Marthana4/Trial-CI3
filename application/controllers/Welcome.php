<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('modelBarang');
    }

	public function index()
	{
		$recordBarang = $this->modelBarang->getDataBarang();
		$data = array('data_barang' => $recordBarang);
		$this->load->view('index', $data);
	}

	public function create()
	{
		$satuanOptions = $this->modelBarang->getSatuanOptions();
		$data = array('satuan_barang' => $satuanOptions);
		$this->load->view('create', $data);
	}

	public function store()
	{
		$kode_barang = $this->input->post('kode_barang');
		$nama_barang = $this->input->post('nama_barang');
		$harga = $this->input->post('harga');
		$satuan = $this->input->post('satuan');
		
		$dataInsert = array(
			'kode_barang' => $kode_barang,
			'nama_barang' => $nama_barang,
			'harga' => $harga,
			'satuan' => $satuan,
		);

		$this->modelBarang->insertDataBarang($dataInsert);
		redirect (base_url('Welcome'));

	}

	public function edit($id)
	{
		$recordBarang = $this->modelBarang->getDataBarangDetail($id);
		$data = array('data_barang' => $recordBarang);
		$this->load->view('edit', $data);
	}

	public function update()
	{
		$kode_barang = $this->input->post('kode_barang');
		$nama_barang = $this->input->post('nama_barang');
		$harga = $this->input->post('harga');
		$satuan = $this->input->post('satuan');
		
		$dataUpdate = array(
			'kode_barang' => $kode_barang,
			'nama_barang' => $nama_barang,
			'harga' => $harga,
			'satuan' => $satuan,
		);

		$this->modelBarang->editDataBarang($dataUpdate, $kode_barang);
		redirect (base_url('Welcome'));
	}

	public function delete($id)
	{
		$recordBarang = $this->modelBarang->deleteDataBarang($id);
		redirect (base_url('Welcome'));
	}
}
?>