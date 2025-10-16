<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Str;

class UserUpdateTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_update_flow()
    {
        // create kelas
        $kelasId = \DB::table('kelas')->insertGetId([
            'nama_kelas' => 'Kelas A',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // create user with uuid
        $userUuid = (string) \Illuminate\Support\Str::uuid();
        \DB::table('user')->insert([
            'id' => null,
            'uuid' => $userUuid,
            'nama' => 'Budi',
            'npm' => '123456',
            'kelas_id' => $kelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // perform update via uuid
        $response = $this->followingRedirects()->put('/user/' . $userUuid, [
            'nama' => 'Budi Updated',
            'npm' => '654321',
            'kelas_id' => $kelasId,
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('user', [
            'uuid' => $userUuid,
            'nama' => 'Budi Updated',
            'npm' => '654321',
        ]);
    }
}
