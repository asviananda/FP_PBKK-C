<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_artis');
    }

    public function index()
    {
        $data = array(
            'title' => 'Artist',
            'artis' => $this->m_artis->get_all_data(),
            'isi' => 'v_artis',
        );
        $this->load->view('layout/v_wrapper_backend', $data, FALSE);
    }

    public function add()
    {
        $data = array(
            'nama_artis' => $this->input->post('nama_artis'),
        );
        $this->m_artis->add($data);
        $this->session->set_flashdata('pesan', 'New Artist Successfully Added !');
        redirect('artis');
    }
    public function edit($id_artis = NULL)
    {
        $data = array(
            'id_artis' => $id_artis,
            'nama_artis' => $this->input->post('nama_artis'),
        );
        $this->m_artis->edit($data);
        $this->session->set_flashdata('pesan', 'Artist Successfully Edited !');
        redirect('artis');  
    }

    public function delete($id_artis = NULL)
    {
        $data = array('id_artis' => $id_artis);
        $this->m_artis->delete($data);
        $this->session->set_flashdata('pesan', 'Artist Successfully Deleted !');
        redirect('artis');
    }
}