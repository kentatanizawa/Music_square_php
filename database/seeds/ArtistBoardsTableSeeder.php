<?php

use Illuminate\Database\Seeder;

class ArtistBoardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artist_boards')->insert([
        [
          'artist_name' => 'テスト１',
          'created_remote_ip' => '1'
        ],
        [
          'artist_name' => 'テスト２',
          'created_remote_ip' => '2'
        ],
        [
          'artist_name' => 'テスト３',
          'created_remote_ip' => '3'
        ],
        ]);
    }
}
