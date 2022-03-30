<?php

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('nama')) {
            redirect('auth');
        }
        $this->load->model('m_user');
    }
    public function index()
    {

        $data['title'] = 'MANAJEMEN DATA USER';
        $data['users'] = $this->m_user->tampil_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('users/v_data', $data);
        $this->load->view('v_footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Users';
        $this->load->view('v_header', $data);
        $this->load->view('users/v_data_tambah');
        $this->load->view('v_footer');
    }
    public function insert()
    {
        $u = $this->input->post('nama');
        $p = md5($this->input->post('password'));
        $n = $this->input->post('nama_lengkap');

        $data = array(
            'nama' => $u,
            'password' => $p,
            'nama_lengkap' => $n
        );

        $this->m_user->insert_data($data);
        redirect('user');
    }
    public function edit($id)
    {
        $data['title'] = 'Edit Data Users';
        $where = array('id' => $id);
        $data['user'] = $this->m_user->edit_data($where)->row_array();

        $this->load->view('v_header', $data);
        $this->load->view('users/v_data_edit', $data);
        $this->load->view('v_footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $u = $this->input->post('nama');
        // $p = md5($this->input->post('password'));
        $n = $this->input->post('nama_lengkap');

        $data = array(
            'nama' => $u,
            // 'password' => $p,
            'nama_lengkap' => $n
        );
        $where = array('id' => $id);
        $this->m_user->update_data($data, $where);
        redirect('user');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_user->hapus_data($where);
        redirect('user');
    }
}
