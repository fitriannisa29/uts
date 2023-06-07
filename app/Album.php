<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Album extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_album";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $alb_name = $_POST['alb_name'];

        $sql = "INSERT INTO tb_album (alb_name) VALUES (:alb_name)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":alb_name", $alb_name);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_album WHERE alb_id=:alb_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":alb_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $alb_name = $_POST['alb_name'];
        $alb_id = $_POST['alb_id'];

        $sql = "UPDATE tb_album SET alb_name=:alb_name WHERE alb_id=:alb_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":alb_name", $alb_name);
        $stmt->bindParam(":alb_id", $alb_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_album WHERE alb_id=:alb_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":alb_id", $id);
        $stmt->execute();

    }

}