<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
          function __construct(){
              parent::__construct();             
              $this->load->model('m_model');
            }

	public function index()
	{
        $title['judul']="Dashboard";
        $title['ket']="Halaman Utama Admin";
        $this->load->view('template/header',$title);
        $this->load->view('home');	
        $this->load->view('template/footer');
    }
    public function kategori(){
        $title['judul']="kategori";
        $title['ket']="Halaman kategori";
        $data['k']=$this->m_model->tampildata('kategori');
        $this->load->view('template/header',$title);
        $this->load->view('kategori',$data);	
        $this->load->view('template/footer');   
    }
    public function formkategori(){
        $title['judul']="Tambah kategori";
        $title['ket']="Halaman Form kategori";
        $this->load->view('template/header',$title);
        $this->load->view('formkategori');	
        $this->load->view('template/footer');   
    }
    public function simpankategori(){
        $this->form_validation->set_rules('nm_kategori', 'Nama Kategori', 'required');
        if ($this->form_validation->run() == FALSE)
        {
          
            $title['judul']="Tambah kategori";
            $title['ket']="Halaman Form kategori";
            $this->load->view('template/header',$title);
            $this->load->view('formkategori');	
            $this->load->view('template/footer');   
        }
        else
        {
            $data=array(
            
                'nama_kategori'=>$this->input->post('nm_kategori')
            );
            $this->m_model->simpandata('kategori',$data);
            $title['judul']="kategori";
            $title['ket']="Halaman kategori";
            $data['k']=$this->m_model->tampildata('kategori');
            $this->load->view('template/header',$title);
            $this->load->view('kategori',$data);	
            $this->load->view('template/footer');   
        }
    }
    public function hapuskategori($id){
       $where = array('id_kategori'=>$id);
       $this->m_model->hapusdata($where,'kategori');
       redirect('Admin/kategori');
    }
    public function formeditkategori($id){
        $where = array('id_kategori'=>$id);
		$data['kategori'] = $this->m_model->editdata($where,'kategori')->row();

        $title['judul']="edit kategori";
        $title['ket']="Halaman Form kategori";
        $this->load->view('template/header',$title);
        $this->load->view('formeditkategori',$data);	
        $this->load->view('template/footer');   
    }
    public function editkategori(){
    $id = $this->input->post('id_kategori');
	$nama_kategori = $this->input->post('nm_kategori');
	
 
	$data = array(
		'nama_kategori' => $nama_kategori
	);
 
	$where = array(
		'id_kategori' => $id
	);
 
    $this->m_model->update_data($where,$data,'kategori');

            $title['judul']="kategori";
            $title['ket']="Halaman kategori";
            $data['k']=$this->m_model->tampildata('kategori');
            $this->load->view('template/header',$title);
            $this->load->view('kategori',$data);	
            $this->load->view('template/footer');  

    }
    public function info(){
        $title['judul']="info";
        $title['ket']="Halaman info";
        $data['k']=$this->m_model->tampildata('info');
        $this->load->view('template/header',$title);
        $this->load->view('info',$data);	
        $this->load->view('template/footer');   
    }
    public function forminfo(){
        $title['judul']="Tambah info";
        $title['ket']="Halaman Form Info";
        $this->load->view('template/header',$title);
        $this->load->view('forminfo');	
        $this->load->view('template/footer');   
    }
    public function simpaninfo(){
        $this->form_validation->set_rules('nm_info','judul info','required');
        if ($this->form_validation->run() == FALSE)
        {
          
            $title['judul']="Tambah Info";
            $title['ket']="Halaman Form Info";
            $this->load->view('template/header',$title);
            $this->load->view('forminfo');	
            $this->load->view('template/footer');   
        }
        else
        {
            $data=array(
            
                'judul_info'=>$this->input->post('nm_info'),
                'isi_info'=>$this->input->post('isi_info'),
            );
            $this->m_model->simpandata('info',$data);
            $title['judul']="info";
            $title['ket']="Halaman info";
            $data['k']=$this->m_model->tampildata('info');
            $this->load->view('template/header',$title);
            $this->load->view('info',$data);	
            $this->load->view('template/footer');   
        }
       
    }
    public function hapusinfo($id){
        $where = array('id_info'=>$id);
        $this->m_model->hapusdata($where,'info');
        redirect('Admin/info');
     
    }
    public function formeditinfo(){

    }
    public function editinfo(){

    }
    public function berita(){
        $title['judul']="berita";
        $title['ket']="Halaman berita";
        $data['k']=$this->m_model->tampildata('berita');
        $this->load->view('template/header',$title);
        $this->load->view('berita',$data);	
        $this->load->view('template/footer');   
    }
    public function formberita(){
        $title['judul']="Tambah berita";
        $title['ket']="Halaman Form Berita";
        $this->load->view('template/header',$title);
        $this->load->view('formberita');	
        $this->load->view('template/footer');   
    }
    public function simpanberita(){
        $this->form_validation->set_rules('nm_berita', 'judul berita', 'required');
        if ($this->form_validation->run() == FALSE)
        {
          
            $title['judul']="Tambah Berita";
            $title['ket']="Halaman Form Berita";
            $this->load->view('template/header',$title);
            $this->load->view('formberita');	
            $this->load->view('template/footer');   
        }
        else
        {
            $data=array(
            
                'judul_berita'=>$this->input->post('nm_berita'),
                'isi_berita'=>$this->input->post('isi_berita'),
            );
            $this->m_model->simpandata('berita',$data);
            $title['judul']="berita";
            $title['ket']="Halaman berita";
            $data['k']=$this->m_model->tampildata('berita');
            $this->load->view('template/header',$title); 
            $this->load->view('berita',$data);	
            $this->load->view('template/footer');   
        }
    }
    public function hapusberita($id){
        $where = array('id_berita'=>$id);
        $this->m_model->hapusdata($where,'berita');
        redirect('Admin/berita');
     
    }
    public function formeditberita(){

    }
    public function editberita(){

    }
    public function lokasi(){
        $title['judul']="lokasi";
        $title['ket']="Halaman Lokasi";
        $data['k']=$this->m_model->tampildata('lokasi');
        $this->load->view('template/header',$title);
        $this->load->view('lokasi',$data);	
        $this->load->view('template/footer');   
    }
    public function formlokasi(){
        $title['judul']="Tambah Lokasi";
        $title['ket']="Halaman Form Lokasi";
        $this->load->view('template/header',$title);
        $this->load->view('formlokasi');	
        $this->load->view('template/footer');   
    }
    public function simpanlokasi(){
        $this->form_validation->set_rules('nama_lokasi', 'nama lokasi', 'required');
        if ($this->form_validation->run() == FALSE)
        {
          
            $title['judul']="Tambah Lokasi";
            $title['ket']="Halaman Form Lokasi";
            $this->load->view('template/header',$title);
            $this->load->view('formlokasi');	
            $this->load->view('template/footer');   
        }
        else
        {
            $data=array(
            
                'nama_lokasi'=>$this->input->post('nama_lokasi'),
                'tempat_lokasi'=>$this->input->post('tempat_lokasi'),
                'alamat_lokasi'=>$this->input->post('alamat_lokasi'),
            );
            $this->m_model->simpandata('lokasi',$data);
            $title['judul']="lokasi";
            $title['ket']="Halaman lokasi";
            $data['k']=$this->m_model->tampildata('lokasi');
            $this->load->view('template/header',$title); 
            $this->load->view('lokasi',$data);	
            $this->load->view('template/footer');   
        }
    }
    public function hapuslokasi($id){
        $where = array('id_lokasi'=>$id);
        $this->m_model->hapusdata($where,'lokasi');
        redirect('Admin/lokasi');
     
    }
    public function formeditlokasi(){

    }
    public function editlokasi(){

    }
}
