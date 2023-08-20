<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\HotelModel;

class HotelController extends BaseController
{
    public function index()
    {
        // Check if user is logged in
        if (!session()->get('logged_in') || session('level') !== 'admin') {
            // Show a "Page Not Found" error
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $HotelModel = new HotelModel();
        $data = [
            'title' => 'Daftar Hotel',
            'hotel' => $HotelModel->getAllHotel(),
        ];
        return view('admin/hotel/index', $data);
    }

    public function add()
    {
        // Check if user is logged in
        if (!session()->get('logged_in') || session('level') !== 'admin') {
            // Show a "Page Not Found" error
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Load the model
        $HotelModel = new HotelModel();

        if ($this->request->getMethod() === 'post') {
            // Handle the form submission
            $data = [
                'nama_penginapan' => $this->request->getPost('nama_penginapan'),
                'lokasi' => $this->request->getPost('lokasi'),
                'price' => $this->request->getPost('price'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'gambar' => $this->request->getPost('gambar'),
                // You'll need to process the image upload here and store its path
            ];
            // Handle file upload
            $imageFile = $this->request->getFile('gambar_hotel');
            if ($imageFile->isValid() && !$imageFile->hasMoved()) {
                $newImageName = $imageFile->getRandomName();
                $imageFile->move('./assets/img', $newImageName);

                $data['gambar'] = $newImageName;
            }
            // Insert data into the database
            $HotelModel->insert($data);

            // Redirect back to the product list page
            return redirect()->to('/daftar-hotel');
        }

        $data = [
            'title' => 'Tambah Hotel'
        ];
        return view('admin/hotel/add', $data);
    }

    public function edit($id)
    {
        // Check if user is logged in
        if (!session()->get('logged_in') || session('level') !== 'admin') {
            // Show a "Page Not Found" error
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Load the model
        $HotelModel = new HotelModel();

        // Retrieve the hotels data from the database
        $hotels = $HotelModel->find($id);

        if ($this->request->getMethod() === 'post') {
            // Handle the form submission
            $data = [
                'nama_penginapan' => $this->request->getPost('nama_penginapan'),
                'lokasi' => $this->request->getPost('lokasi'),
                'price' => $this->request->getPost('price'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                // Process the image upload and store its path
            ];

            // Handle file upload
            $imageFile = $this->request->getFile('gambar_hotel');
            if ($imageFile->isValid() && !$imageFile->hasMoved()) {
                $newImageName = $imageFile->getRandomName();
                $imageFile->move('./assets/img', $newImageName);

                $data['gambar'] = $newImageName;
            }

            // Update the hotels data in the database
            $HotelModel->update($id, $data);

            // Redirect back to the hotels list page
            return redirect()->to('/daftar-hotel')->with('success', 'Data berhasil diperbarui');
        }

        // Retrieve hotels data again
        $hotelsData = $HotelModel->find($id);
        $data = [
            'title' => 'Edit Destinasi',
            'hotels' => $hotelsData,
        ];
        return view('admin/hotel/edit', $data);
    }

    public function delete($id)
    {
        // Check if user is logged in
        if (!session()->get('logged_in') || session('level') !== 'admin') {
            // Show a "Page Not Found" error
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Load the model
        $HotelModel = new HotelModel();

        // Delete the hotels with the given id
        $HotelModel->delete($id);

        // Redirect back to the hotels list page
        return redirect()->to('/daftar-hotel')->with('success', 'Data berhasil dihapus');

    }
}