<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Post extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_post";
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
        $post_name = $_POST['post_name'];
        $post_text = $_POST['post_text'];

        $sql = "INSERT INTO tb_post (post_name, post_text) VALUES (:post_name, :post_text)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":post_name", $post_name);
        $stmt->bindParam(":post_text", $post_text);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_post WHERE post_id=:post_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":post_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $post_name = $_POST['post_name'];
        $post_text = $_POST['post_text'];
        $post_id = $_POST['post_id'];

        $sql = "UPDATE tb_post SET post_name=:post_name, post_text=:post_text WHERE post_id=:post_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":post_name", $post_name);
        $stmt->bindParam(":post_text", $post_text);
        $stmt->bindParam(":post_id", $post_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_post WHERE post_id=:post_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":post_id", $id);
        $stmt->execute();

    }

}