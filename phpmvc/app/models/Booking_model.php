<?php

class Booking_model{
    private $table = 'booking';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllBooking()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBookingById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id ');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataBooking($data)
    {
        $query =  "INSERT INTO booking VALUES ('', :Nama, :ktp, :email, :tkamar, :tgl) ";

        $this->db->query($query);
        $this->db->bind('Nama', $data['Nama']);
        $this->db->bind('ktp', $data['ktp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('tkamar', $data['tkamar']);
        $this->db->bind('tgl', $data['tgl']);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function hapusDataBooking($id)
    {
        $query = "DELETE FROM booking WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        
        return $this->db->rowCount();
    }

    public function ubahDataBooking($data)
    {
        $query =  "UPDATE booking SET
                    Nama = :Nama,
                    ktp = :ktp,
                    email = :email,
                    tkamar = :tkamar,
                    tgl = :tgl
                    WHERE id = :id ";

        $this->db->query($query);
        $this->db->bind('Nama', $data['Nama']);
        $this->db->bind('ktp', $data['ktp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('tkamar', $data['tkamar']);
        $this->db->bind('tgl', $data['tgl']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();

    }

}

?>