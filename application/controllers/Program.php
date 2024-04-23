<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Program extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('m_admin');
        if ($this->session->userdata('role_id') != 1) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Program',
            'program' => $this->m_admin->program(),
            'program1' => $this->m_admin->program(),
        ];
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/program', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambah_program()
    {
        $kegiatan = $this->input->post('kegiatan');
        $sasaran = $this->input->post('sasaran');
        $waktu = $this->input->post('waktu');
        $tempat = $this->input->post('tempat');
        $tim = $this->input->post('tim');

        $data = [
            'kegiatan' => $kegiatan,
            'sasaran' => $sasaran,
            'waktu' => $waktu,
            'tempat' => $tempat,
            'tim' => $tim,
        ];
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        <strong>Berhasil Menambahkan Program </strong>
</div>');

        $this->m_admin->tambah('program', $data);

        redirect('program');
    }

    public function edit_program()
    {
        $id = $this->input->post('id');

        $kegiatan = $this->input->post('kegiatan');
        $sasaran = $this->input->post('sasaran');
        $waktu = $this->input->post('waktu');
        $tempat = $this->input->post('tempat');
        $tim = $this->input->post('tim');

        $data = [
            'kegiatan' => $kegiatan,
            'sasaran' => $sasaran,
            'waktu' => $waktu,
            'tempat' => $tempat,
            'tim' => $tim,
        ];

        $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">
       Berhasil Mengedit Program!
</div>');
        $this->m_admin->ubah(['id' => $id], 'program', $data);
        redirect($this->agent->referrer());
    }

    public function hapus_program($id)
    {
        $where = array('id' => $id);


        $this->m_admin->hapus($where, 'program');

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Berhasil Hapus Program!
 </div>');

        redirect('program');
    }
}
