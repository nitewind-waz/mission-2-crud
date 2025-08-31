<?php

namespace App\Controllers;
use App\Models\BiodataMahasiswa;

class Pages extends BaseController
{
    public function viewmahasiswa()
    {
        echo view('insertmahasiswa');
    }

    public function tabelMahasiswa()
    {
        // Method ini untuk latihan membuat tabel dan looping di Controller

        // Data array
        $mahasiswa = [
            ['nim' => '2023001', 'nama' => 'Andi', 'prodi' => 'Informatika'],
            ['nim' => '2023002', 'nama' => 'Budi', 'prodi' => 'Sistem Informasi'],
            ['nim' => '2023003', 'nama' => 'Citra', 'prodi' => 'Teknik Komputer'],
        ];

        // Buat tabel HTML langsung di controller
        $html = "<h2>Daftar Mahasiswa</h2>";
        $html .= "<table border='1' cellpadding='5' cellspacing='0'>";
        $html .= "<tr><th>NIM</th><th>Nama</th><th>Prodi</th></tr>";

        // Ini buat perintah loopingnya
        foreach ($mahasiswa as $mhs) {
            $html .= "<tr>
                        <td>{$mhs['nim']}</td>
                        <td>{$mhs['nama']}</td>
                        <td>{$mhs['prodi']}</td>
                      </tr>";
        }

        $html .= "</table>";

        return $html;
    }

    public function listMahasiswaDB()
    {
        // Ambil koneksi database
        $db = \Config\Database::connect();

        // Jalankan query
        $query = $db->query("SELECT * FROM biodata");

        // Ambil semua data
        $result = $query->getResultArray();

        return view('list-mahasiswa-db', ['result' => $result]);
    }

    public function detailMahasiswa($nim)
    {
        $model = new BiodataMahasiswa();
        $data['mhs'] = $model->find($nim);
        return view('detail-mahasiswa', $data);
    }

    // CREATE

    public function addMahasiswa()
    {
        return view('add-mahasiswa');
    }

    public function saveMahasiswa()
    {
        $model = new \App\Models\BiodataMahasiswa();

        $data = [
            'nim'           => $this->request->getPost('nim'),
            'nama_lengkap'  => $this->request->getPost('nama_lengkap'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
        ];

        $model->insert($data);

        return redirect()->to('/listmahasiswa')->with('success', 'Mahasiswa baru berhasil ditambahkan!');
    }



     // UPDATE - Form edit
    public function editMahasiswa($nim)
    {
        $model = new BiodataMahasiswa();
        $data['mhs'] = $model->find($nim);

        return view('edit-mahasiswa', $data);
    }

    // UPDATE - Simpan perubahan
    public function updateMahasiswa($nim)
    {
        $model = new BiodataMahasiswa();

        $model->update($nim, [
            'nama_lengkap'  => $this->request->getPost('nama_lengkap'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
        ]);

        return redirect()->to('/detail/'.$nim)->with('success', 'Data berhasil diperbarui!');
    }

    // DELETE
    public function deleteMahasiswa($nim)
    {
        $model = new \App\Models\BiodataMahasiswa();

        $model->delete($nim);

        return redirect()->to('/listmahasiswa')->with('success', 'Data berhasil dihapus!');
    }

}