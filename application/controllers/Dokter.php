<?php

class Dokter extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('nama')) {
            redirect('auth');
        }
        $this->load->model('m_dokter');
    }
    public function index()
    {

        $data['title'] = 'MANAJEMEN DATA DOKTER';
        $data['dokter'] = $this->m_dokter->tampil_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('dokter/v_data', $data);
        $this->load->view('v_footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Dokter';
        $this->load->view('v_header', $data);
        $this->load->view('dokter/v_data_tambah');
        $this->load->view('v_footer');
    }
    public function insert()
    {

        $nd = $this->input->post('nama_dokter');

        $data = array(

            'nama_dokter' => $nd
        );

        $this->m_dokter->insert_data($data);
        redirect('dokter');
    }
    public function edit($id)
    {
        $data['title'] = 'Edit Data Dokter';
        $where = array('id_dokter' => $id);
        $data['user'] = $this->m_dokter->edit_data($where)->row_array();

        $this->load->view('v_header', $data);
        $this->load->view('dokter/v_data_edit', $data);
        $this->load->view('v_footer');
    }
    public function update()
    {
        $id = $this->input->post('id_dokter');
        $nd = $this->input->post('nama_dokter');

        $data = array(
            'nama_dokter' => $nd
        );
        $where = array('id_dokter' => $id);
        $this->m_dokter->update_data($data, $where);
        redirect('dokter');
    }

    public function hapus($id)
    {
        $where = array('id_dokter' => $id);
        $this->m_dokter->hapus_data($where);
        redirect('dokter');
    }
}
