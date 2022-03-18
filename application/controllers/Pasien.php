<?php

class Pasien extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('nama')) {
            redirect('auth');
        }
        $this->load->model('m_pasien');
    }
    public function index()
    {

        $data['title'] = 'MANAJEMEN DATA PASIEN';
        $data['pasien'] = $this->m_pasien->tampil_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('pasien/v_data', $data);
        $this->load->view('v_footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Pasien';
        $this->load->view('v_header', $data);
        $this->load->view('pasien/v_data_tambah');
        $this->load->view('v_footer');
    }
    public function insert()
    {
        $np = $this->input->post('nama_pasien');
        $jk = $this->input->post('jenis_kelamin');
        $u = $this->input->post('umur');

        $data = array(
            'nama_pasien' => $np,
            'jenis_kelamin' => $jk,
            'umur' => $u
        );

        $this->m_pasien->insert_data($data);
        redirect('pasien');
    }
    public function edit($id)
    {
        $data['title'] = 'Edit Data Pasien';
        $where = array('id_pasien' => $id);
        $data['pasien'] = $this->m_pasien->edit_data($where)->row_array();

        $this->load->view('v_header', $data);
        $this->load->view('pasien/v_data_edit', $data);
        $this->load->view('v_footer');
    }
    public function update()
    {
        $id = $this->input->post('id_pasien');
        $np = $this->input->post('nama_pasien');
        $jk = $this->input->post('jenis_kelamin');
        $u = $this->input->post('umur');

        $data = array(
            'nama_pasien' => $np,
            'jenis_kelamin' => $jk,
            'umur' => $u
        );
        $where = array('id_pasien' => $id);
        $this->m_pasien->update_data($data, $where);
        redirect('pasien');
    }

    public function hapus($id)
    {
        $where = array('id_pasien' => $id);
        $this->m_pasien->hapus_data($where);
        redirect('pasien');
    }
}
