<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {
    public function index()
    {
        $isi['content'] = 'backend/slider/v_slider';
        $isi['judul'] = 'Daftar Slider';
        $this->load->view('backend/dashboard' ,$isi);
    }

    public function tambah()
    {
        $isi['content'] = 'backend/slider/t_slider';
        $isi['judul'] = 'Form Tambah Slider';
        $this->load->view('backend/dashboard' ,$isi);
    }

    public function simpan()
    {
        $config['upload_path'] = 'assets/image/slider';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = '2048';
        $this->load->library('upload', $config);
        $this->upload->do_upload('gambar_slider');
        $file_name = $this->upload->data();

        $data = array(
            'judul_slider' => $this->input->post('judul_slider'),
            'deskripsi_slider' => $this->input->post('deskripsi_slider'),
            'gambar_slider' => $file_name['file_name'],
            'status_slider' => $this->input->post('status_slider'),
        );

        $query = $this->db->insert('slider', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data Berhasil Disimpan!');
            redirect('slider','refresh');
        }
    }
}

?>