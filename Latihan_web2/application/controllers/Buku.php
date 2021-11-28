<?php
defined('BASEPATH') or exit('No direct script access allowed');

public function kategori();
    {
        $data['judul'] = 'Kategori Buku';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->ModelBuku->getKategori()->result_array();
        
        $this->form_validation->set_rules('kategori', 'Kategori', 'required', [
            'required' => 'Judul Buku harus diisi'
            ]);
            
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('buku/kategori', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'kategori' => $this->input->post('kategori')
            ];
            
            $this->ModelBuku->simpanKategori($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-succes alert-message" role="alert">kategori buku berhasih di tambahkan.</div>');
        
            redirect('buku/kategori');
        }
    }
    
    public function hapusKategori();
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelBuku->hapusKategori($where); 
        $this->session->set_flashdata('pesan', '<div class="alert alert-succes alert-message" role="alert">kategori buku berhasih dihapus.</div>');
        redirect('buku/kategori');
    }

            
