<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
    }

	public function index()
	{
        $data = array(
            'title' => 'Home',
            'barang' => $this->m_home->get_all_data(),
            'isi' => 'v_home',
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
	}

    public function kategori($id_kategori)
	{
        $kategori = $this->m_home->kategori($id_kategori);
        $data = array(
            'title' => 'Category : '.$kategori->nama_kategori,
            'barang' => $this->m_home->get_all_data_barang($id_kategori),
            'isi' => 'v_kategori_barang',
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
	}

    public function artis($id_artis)
	{
        $artis = $this->m_home->artis($id_artis);
        $data = array(
            'title' => 'Artist : '.$artis->nama_artis,
            'barang' => $this->m_home->get_all_data_barang_artis($id_artis),
            'isi' => 'v_kategori_artis',
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
	}

    public function detail_barang($id_barang)
    {
        $data = array(
            'title' => 'Product Detail',
            'gambar' => $this->m_home->gambar_barang($id_barang),
            'barang' => $this->m_home->detail_barang($id_barang),
            'isi' => 'v_detail_barang',
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }
}
