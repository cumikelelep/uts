<?php 

    echo "<h1>Form Tambah Data</h1>";
    echo form_open('pendaftaran/submit');
    echo "<pre>";
    $data = array(
            'name'      => 'var[0]',
            'id'        => 'var[0]',
            'value'     => '',
            'maxlength' => '20',
            'size'      => '10',
            'style'     => 'color : blue',
    );
    echo "NIK   : ".form_input($data)."<br/>";

    $data = array(
            'name'      => 'var[1]',
            'id'        => 'var[1]',
            'value'     => '',
            'maxlength' => '50',
            'size'      => '30',
            'style'     => 'color : blue'
    );
    echo "Nama    : ".form_input($data)."<br/>";

 
    echo "Tanggal Lahir    : ";
    ?>
        <input type="date" name="var[2]">
        <br>
    <?php
    $data = array(
              'name'      => 'var[3]',
              'id'        => 'var[3]',
              'value'     => '',
              'rows'      => '5',
              'cols'      => '30',
              'style'     => 'color : blue'
    );
    echo "Alamat    : ".form_textarea($data)."<br/>";

    $data = array(
              'name'      => 'var[4]',
              'id'        => 'var[4]',
              'value'     => '',
              'maxlength' => '20',
              'size'      => '30',
              'style'     => 'color : blue'
    );
    echo "Nomor Telepon    : ".form_input($data)."<br/>";

    ?>
Pilihan Vaksin    : <select name="var[5]">
                <option value="">-</option>
                <option value="pfizer">Pfizer</option>
                <option value="sinovac">Sinovac</option>
                <option value="sinopharm">Sinopharm</option>
        </select>
        <br>
Status Vaksin : <select name="var[6]">
                <option value="">-</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="booster">Booster</option>
        </select>
        <br>
    <?php
    echo form_submit('submit', 'Simpan');
    echo "<pre>";
    echo form_close();

    if(isset($submitted)) {
        echo "Data Berhasil Diinput ! <br>";
        echo "<a href='".base_url()."index.php/pendaftaran'>Kembali</a>";
    }
