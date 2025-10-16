<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }
    public function store(Request $request)
    {
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);
        return redirect()->to('/user');
    }
    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
    }

    public function create()
    {
        $kelas = $this->kelasModel->getKelas();
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];
        return view('create_user', $data);
    }

    public function edit($uuid)
    {
        $user = $this->userModel->find($uuid);
        if (!$user) {
            return redirect()->to('/user')->with('error', 'User tidak ditemukan.');
        }
        $kelas = $this->kelasModel->getKelas();
        return view('edit_user', ['title' => 'Edit User', 'user' => $user, 'kelas' => $kelas]);
    }

    public function update(Request $request, $uuid)
    {
        $request->validate([
            'nama' => 'required|string',
            'npm' => 'required|string',
            'kelas_id' => 'required',
        ]);

        $user = $this->userModel->find($uuid);
        if (!$user) {
            return redirect()->to('/user')->with('error', 'User tidak ditemukan.');
        }

        $user->update([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/user')->with('success', 'Data user berhasil diperbarui!');
    }

    public function destroy($uuid)
    {
        $user = $this->userModel->find($uuid);
        if (!$user) {
            return redirect()->to('/user')->with('error', 'User tidak ditemukan.');
        }
        $user->delete();
        return redirect()->to('/user')->with('success', 'User berhasil dihapus!');
    }
}
