<?php

class Booking extends Controller{
    public function index()
    {
        $data['judul'] = 'Daftar Booking';
        $data['bo'] = $this->model('Booking_model')->getAllBooking();
        $this->view('templates/header', $data);
        $this->view('booking/index', $data);
        $this->view('templates/footer'); 
    }

    public function reservasi()
    {
        $data['judul'] = 'Data Booking';
        $data['bo'] = $this->model('Booking_model')->getAllBooking();
        $this->view('templates/header', $data);
        $this->view('booking/reservasi', $data);
        $this->view('templates/footer'); 
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Booking';
        $data['bo'] = $this->model('Booking_model')->getBookingById($id);
        $this->view('templates/header', $data);
        $this->view('booking/detail', $data);
        $this->view('templates/footer'); 
    }

    public function tambah()
    {

    if ($this->model('Booking_model')->tambahDataBooking($_POST) > 0) {
        flasher::setFlash('berhasil', 'ditambahkan', 'success');
        header('Location: ' . BASEURL . '/booking/');
        exit;
    } else {
        flasher::setFlash('berhasil', 'ditambahkan', 'danger');
        header('Location: ' . BASEURL . '/booking/');
        exit;
    }
}

public function hapus($id)
    {
        if ($this->model('Booking_model')->hapusDataBooking($id) > 0) {
            flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/booking/reservasi/');
            exit;
        } else {
            flasher::setFlash('berhasil', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/booking/reservasi/');
            exit;
        }
    }

    public function getUbah(){
       echo json_encode($this->model('Booking_model')->getBookingById($_POST['id']));
    }

    public function ubah(){
        if ($this->model('Booking_model')->ubahDataBooking($_POST) > 0) {
            flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/booking/');
            exit;
        } else {
            flasher::setFlash('berhasil', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/booking/');
            exit;
        }
    }

}

