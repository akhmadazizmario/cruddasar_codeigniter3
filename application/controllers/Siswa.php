<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->library('form_validation');
		// $this->load->model('Guru_m');
		$this->load->model('M_siswa');
	}

	public function index()
	{
        $data['title'] = 'Data Siswa';
		$data['siswa'] = $this->M_siswa->get('siswa')->result_array();
		if ($this->input->post('keyword')) {
			$data['siswa'] = $this->M_siswa->cariDataSiswa();
		}
		if ($this->form_validation->run() == FALSE) {
		$this->load->view('siswa', $data);
		}
    }

	public function tambah()
	{
		$data['title'] = 'Siswa';
		$data['siswa'] = $this->M_siswa->get('siswa')->result_array();
		$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'required|trim', ['required' => 'nama_lengkap wajib di isi!.']);
		$this->form_validation->set_rules('alamat', 'alamat', 'required|trim', ['required' => 'alamat wajib di isi!.']);
		$this->form_validation->set_rules('email', 'email', 'required|trim', ['required' => 'email wajib di isi!.']);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('tambahsiswa', $data);
		} else {
			$data = [
				'nama_lengkap' => html_escape($this->input->post('nama_lengkap', true)),
				'alamat' => html_escape($this->input->post('alamat', true)),
				'email' => html_escape($this->input->post('email', true)),
			];

			// tambah data siswa
			$tbSiswa = $this->db->insert('siswa', $data);

			// Amil data DB siswa berdasarkan id_siswa
			$this->db->limit(1);
			$this->db->order_by('id_siswa', 'desc');
			$siswa = $this->db->get('siswa')->row_array();
			$idSiswa = $siswa['id_siswa'];

			$this->session->set_flashdata('pesans2', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Siswa Berhasil Ditambahkan.</div>');
			redirect('siswa');
		}
	}

	public function lihat($id)
	{
		$data['judul'] = "Detail Siswa";
		$data['siswa'] = $this->M_siswa->getSiswaById($id);
		$this->load->view('lihat', $data);
	}

	public function ubahSiswa($id)
	{
		$where = ['id_siswa' => $id];
		$data['siswa'] = $this->M_siswa->get_where('siswa', $where)->row_array();
		$data['title'] = 'Ubah Data Siswa ' . $data['siswa']['nama_lengkap'];

		// Rules Form
		$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'required|trim', ['required' => 'nama_lengkap wajib di isi!.']);
		$this->form_validation->set_rules('alamat', 'alamat', 'required|trim', ['required' => 'alamat wajib di isi!.']);
		$this->form_validation->set_rules('email', 'email', 'required|trim', ['required' => 'email wajib di isi!.']);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('ubah', $data);
		} else {
			$this->ubahDataSiswa();
		}
	}

	public function ubahDataSiswa()
	{
		$idSiswa = $this->input->post('id_siswa');
		$data = [
			'nama_lengkap' => html_escape($this->input->post('nama_lengkap', true)),
			'alamat' => html_escape($this->input->post('alamat', true)),
			'email' => html_escape($this->input->post('email', true)),
		];
		$this->db->where('id_siswa', $idSiswa);
		$this->M_siswa->update('siswa', $data);
		$this->session->set_flashdata('pesans2', '<div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Data Siswa Berhasil Diubah.</div>');
		redirect('siswa');
	}

	public function hapus($id)
	{
		$this->db->delete('siswa', ['id_siswa' => $id]);
		$this->session->set_flashdata('pesans2', '<div class="alert alert-success" role="alert"><i class="fas fa-trash"></i> Data Siswa Berhasil Dihapus.</div>');
		redirect('siswa');
	}
}