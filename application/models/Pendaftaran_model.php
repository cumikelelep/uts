<?php

class Pendaftaran_model extends CI_Model
{

  function retrieve()
  {
    $query = $this->db->get('pendaftaran');
    if ($query->result()) {
      foreach ($query->result() as $content) {
        $data[] = array(
          $content->nik,
          $content->nama,
          $content->tgl_lahir,
          $content->alamat,
          $content->no_telp,
          $content->pilihan_vaksin,
          $content->status_vaksin,
        );
      }
      return $data;
    } else {
      return false;
    }
  }

  function add($arg)
  {
    $data = array(
      'nik' => $arg[0],
      'nama' => $arg[1],
      'tgl_lahir' => $arg[2],
      'alamat' => $arg[3],
      'no_telp' => $arg[4],
      'pilihan_vaksin' => $arg[5],
      'status_vaksin' => $arg[6],
    );

    $this->db->insert('pendaftaran', $data);
  }

  function delete($id)
  {
    $this->db->where('nik', $id);
    $this->db->delete('pendaftaran');
  }

  function update($id, $form)
  {
    $data = array(
      'nik' => $form[0],
      'nama' => $form[1],
      'tgl_lahir' => $form[2],
      'alamat' => $form[3],
      'no_telp' => $form[4],
      'pilihan_vaksin' => $form[5],
      'status_vaksin' => $form[6],
    );

    $this->db->where('nik', $id);
    $this->db->update('pendaftaran', $data);
  }

  function getPendaftaran($id)
  {
    $this->db->where('nik', $id);
    $query = $this->db->get('pendaftaran');

    if ($query->result()) {
      foreach ($query->result() as $content) {
        $data = array(
          $content->nik,
          $content->nama,
          $content->tgl_lahir,
          $content->alamat,
          $content->no_telp,
          $content->pilihan_vaksin,
          $content->status_vaksin,
        );
      }
      return $data;
    } else {
      return false;
    }
  }
}
