<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserDeleteTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_delete_flow()
    {
        // create kelas
        $kelasId = \DB::table('kelas')->insertGetId([
            'nama_kelas' => 'Kelas B',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // create user with uuid
        $userUuid = (string) \Illuminate\Support\Str::uuid();
        \DB::table('user')->insert([
            'id' => null,
            'uuid' => $userUuid,
            'nama' => 'Siti',
            'npm' => '999999',
            'kelas_id' => $kelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // perform delete via uuid
        $response = $this->followingRedirects()->delete('/user/' . $userUuid);
        $response->assertStatus(200);
        $this->assertDatabaseMissing('user', [
            'uuid' => $userUuid,
        ]);
    }
}
