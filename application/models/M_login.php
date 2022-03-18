<?php

class M_login extends CI_Model
{

    public function login_aksi($user, $pass)
    {
        $password = md5($pass);
        $user = $this->db->where('nama', $user);
        $pass = $this->db->where('password', $password);
        $query = $this->db->get('users');

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $sess = array(
                    'id' => $row->id,
                    'nama' => $row->nama,
                    'password' => $row->password,
                    'nama_lengkap' => $row->nama_lengkap
                );
                $this->session->set_userdata($sess);
            }
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('info', '<div class="alert alert-danger" role="alert">Login Gagal, Silakan Periksa Username dan Password!</div>');
            redirect('Auth');
        }
    }
}
