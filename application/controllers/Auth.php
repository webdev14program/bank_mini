<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function index()
    {

        $this->load->view('tampilan_login');
    }

    public function proses_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $pass = md5($password);
        $this->load->model('Model_login');
        $cek = $this->Model_login->cek_login($username, $pass);

        if ($cek->num_rows() > 0) {
            foreach ($cek->result() as $ck) {
                $sess_data['username'] = $ck->username;
                $sess_data['level'] = $ck->level;

                $this->session->set_userdata($sess_data);
            }
            if ($sess_data['level'] == 'admin') {
                redirect('Dashboard');
            } elseif ($sess_data['level'] == 'kepala') {
                redirect('Dashboard_kepala');
            } elseif ($sess_data['level'] == 'pj_harian') {
                redirect('Dashboard_pj');
            } elseif ($sess_data['level'] == 'teller') {
                redirect('Dashboard_teller');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Username dan Password salah
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
                redirect('/');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Username dan Password salah
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
            redirect('/');
        }
    }
}
