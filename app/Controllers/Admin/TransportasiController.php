<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TransportasiModel;

class TransportasiController extends BaseController
{
    public function index()
    {
        // Check if user is logged in
        if (!session()->get('logged_in') || session('level') !== 'admin') {
            // Show a "Page Not Found" error
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $TransportasiModel = new TransportasiModel();
        $data = [
            'title' => 'Daftar Transportasi',
            'transportasi' => $TransportasiModel->getAllTransportasi(),
        ];
        return view('admin/transportasi/index', $data);
    }

    public function add()
    {
        // Check if user is logged in
        if (!session()->get('logged_in') || session('level') !== 'admin') {
            // Show a "Page Not Found" error
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $TransportasiModel = new TransportasiModel();

        if ($this->request->getMethod() === 'post') {

            $data = [
                'nama_bis' => $this->request->getPost('nama_bis'),
                'price' => $this->request->getPost('price'),
                'tujuan_awal' => $this->request->getPost('tujuan_awal'),
                'tujuan_akhir' => $this->request->getPost('tujuan_akhir'),
                'fasilitas' => $this->request->getPost('fasilitas'),
                'gambar' => $this->request->getPost('gambar'),
            ];

            $imageFile = $this->request->getFile('gambar_bis');
            if ($imageFile->isValid() && !$imageFile->hasMoved()) {
                $newImageName = $imageFile->getRandomName();
                $imageFile->move('./assets/img', $newImageName);

                $data['gambar'] = $newImageName;
            }

            $TransportasiModel->insert($data);

            return redirect()->to('/daftar-transportasi');
        }
        $data = [
            'title' => 'Tambah Transportasi'
        ];
        return view('admin/transportasi/add', $data);
    }

    public function edit($id)
    {
        // Check if user is logged in
        if (!session()->get('logged_in') || session('level') !== 'admin') {
            // Show a "Page Not Found" error
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $TransportasiModel = new TransportasiModel();

        $bis = $TransportasiModel->find($id);

        if ($this->request->getMethod() === 'post') {
            $data = [
                'nama_bis' => $this->request->getPost('nama_bis'),
                'price' => $this->request->getPost('price'),
                'tujuan_awal' => $this->request->getPost('tujuan_awal'),
                'tujuan_akhir' => $this->request->getPost('tujuan_akhir'),
                'fasilitas' => $this->request->getPost('fasilitas'),
                'gambar' => $this->request->getPost('gambar'),
            ];

            $imageFile = $this->request->getFile('gambar_bis');
            if ($imageFile->isValid() && !$imageFile->hasMoved()) {
                $newImageName = $imageFile->getRandomName();
                $imageFile->move('./assets/img', $newImageName);

                $data['gambar'] = $newImageName;
            }

            $TransportasiModel->update($data);

            return redirect()->to('/daftar-transportasi')->with('success', 'Data berhasil diperbarui');
        }
        $BisData = $TransportasiModel->find($id);
        $data = [
            'title' => 'Edit Transportasi',
            'bis' => $BisData,
        ];
        return view('admin/transportasi/edit', $data);
    }

    public function delete($id)
    {
        // Check if user is logged in
        if (!session()->get('logged_in') || session('level') !== 'admin') {
            // Show a "Page Not Found" error
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $TransportasiModel = new TransportasiModel();

        $TransportasiModel->delete($id);

        return redirect()->to('/daftar-transportasi')->with('success', 'Data berhasil dihapus');
    }
}