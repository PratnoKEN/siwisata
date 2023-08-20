<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProdukModel;

class ProdukController extends BaseController
{

    public function index()
    {
        // Check if user is logged in
        if (!session()->get('logged_in') || session('level') !== 'admin') {
            // Show a "Page Not Found" error
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $produkModel = new ProdukModel(); // Create an instance of the model
        $data = [
            'title' => 'Daftar Produk',
            'produk' => $produkModel->getAllProduk(),
        ];
        return view('admin/produk/index', $data);
    }

    public function add()
    {
        // Check if user is logged in
        if (!session()->get('logged_in') || session('level') !== 'admin') {
            // Show a "Page Not Found" error
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Load the model
        $produkModel = new ProdukModel();

        if ($this->request->getMethod() === 'post') {
            // Handle the form submission
            $data = [
                'nama_wisata' => $this->request->getPost('nama_wisata'),
                'lokasi' => $this->request->getPost('lokasi'),
                'price' => $this->request->getPost('price'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'gambar' => $this->request->getPost('gambar'),
                // You'll need to process the image upload here and store its path
            ];
            // Handle file upload
            $imageFile = $this->request->getFile('gambar_wisata');
            if ($imageFile->isValid() && !$imageFile->hasMoved()) {
                $newImageName = $imageFile->getRandomName();
                $imageFile->move('./assets/img', $newImageName);

                $data['gambar'] = $newImageName;
            }
            // Insert data into the database
            $produkModel->insert($data);

            // Redirect back to the product list page
            return redirect()->to('/daftar-produk');
        }

        $data = [
            'title' => 'Tambah Destinasi'
        ];
        return view('admin/produk/add', $data);
    }
    public function edit($id)
    {
        // Check if user is logged in
        if (!session()->get('logged_in') || session('level') !== 'admin') {
            // Show a "Page Not Found" error
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Load the model
        $produkModel = new ProdukModel();

        // Retrieve the product data from the database
        $product = $produkModel->find($id);

        if ($this->request->getMethod() === 'post') {
            // Handle the form submission
            $data = [
                'nama_wisata' => $this->request->getPost('nama_wisata'),
                'lokasi' => $this->request->getPost('lokasi'),
                'price' => $this->request->getPost('price'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                // Process the image upload and store its path
            ];

            // Handle file upload
            $imageFile = $this->request->getFile('gambar_wisata');
            if ($imageFile->isValid() && !$imageFile->hasMoved()) {
                $newImageName = $imageFile->getRandomName();
                $imageFile->move('./assets/img', $newImageName);

                $data['gambar'] = $newImageName;
            }

            // Update the product data in the database
            $produkModel->update($id, $data);

            // Redirect back to the product list page
            return redirect()->to('/daftar-produk')->with('success', 'Data berhasil diperbarui');
        }

        // Retrieve product data again
        $productData = $produkModel->find($id);
        $data = [
            'title' => 'Edit Destinasi',
            'product' => $productData,
        ];
        return view('admin/produk/edit', $data);
    }


    public function delete($id)
    {
        // Check if user is logged in
        if (!session()->get('logged_in') || session('level') !== 'admin') {
            // Show a "Page Not Found" error
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Load the model
        $produkModel = new ProdukModel();

        // Delete the product with the given id
        $produkModel->delete($id);

        // Redirect back to the product list page
        return redirect()->to('/daftar-produk')->with('success', 'Data berhasil dihapus');

    }


}