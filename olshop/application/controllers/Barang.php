<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_barang');
        $this->load->model('m_kategori');
    }

    public function index()
    {
        $data = array(
            'title' => 'Products',
            'barang' => $this->m_barang->get_all_data(),
            'isi' => 'barang/v_barang',
        );
        $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }

    public function add()
    {
        $nama_barang = $this->input->post('nama_barang');
        $id_kategori = $this->input->post('id_kategori');
        $harga = $this->input->post('harga');
        $deskripsi = $this->input->post('deskripsi');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar = ''){}else{
            $config ['upload_path'] = './uploads';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "Upload Failed!";
            }else{
                $gambar=$this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_barang'   => $nama_barang,
            'id_kategori'   => $id_kategori,
            'harga'         => $harga,
            'deskripsi'     => $deskripsi,
            'gambar'        => $gambar
        );
        
        $this->m_barang->add($data, 'tbl_barang');
        //$this->session->set_flashdata('pesan', 'Product Successfully Added !');
        // $data = array(
        //     'title' => 'Add',
        //     'isi' => 'barang/v_add',
        // );
        //$this->load->view('layout/v_wrapper_backend', $data, FALSE);
        redirect('barang');
    }

    public function edit($id = NULL)
    {
        
    }

    public function delete($id = NULL)
    {
        
    }
}