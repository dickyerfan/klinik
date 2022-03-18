<?php

class Obat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('nama')) {
            redirect('auth');
        }
        $this->load->model('m_obat');
    }
    public function index()
    {

        $data['title'] = 'MANAJEMEN DATA OBAT';
        $data['obat'] = $this->m_obat->tampil_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('obat/v_data', $data);
        $this->load->view('v_footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Obat';
        $this->load->view('v_header', $data);
        $this->load->view('obat/v_data_tambah');
        $this->load->view('v_footer');
    }
    public function insert()
    {

        $nd = $this->input->post('nama_obat');

        $data = array(

            'nama_obat' => $nd
        );

        $this->m_obat->insert_data($data);
        redirect('obat');
    }
    public function edit($id)
    {
        $data['title'] = 'Edit Data Obat';
        $where = array('id_obat' => $id);
        $data['obat'] = $this->m_obat->edit_data($where)->row_array();

        $this->load->view('v_header', $data);
        $this->load->view('obat/v_data_edit', $data);
        $this->load->view('v_footer');
    }
    public function update()
    {
        $id = $this->input->post('id_obat');
        $nd = $this->input->post('nama_obat');

        $data = array(
            'nama_obat' => $nd
        );
        $where = array('id_obat' => $id);
        $this->m_obat->update_data($data, $where);
        redirect('obat');
    }

    public function hapus($id)
    {
        $where = array('id_obat' => $id);
        $this->m_obat->hapus_data($where);
        redirect('obat');
    }
}
