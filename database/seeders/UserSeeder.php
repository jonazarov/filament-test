<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'phone' => '+49 123 456789',
                'date_of_birth' => '1980-04-01',
                'password' => '$2y$12$U9/pE7KwsMGagPLojnaR..JdcS0Fe64hUNqsI8Gjp5nip6M/QAdpO',
                'created_at' => '2023-11-07 10:58:59',
                'updated_at' => now(),
            ],
            [
                'name' => 'Brad',
                'email' => 'brad@example.com',
                'phone' => '0123 987654',
                'date_of_birth' => '2004-02-03',
                'password' => '$2y$12$9zJPx1hh0mm/Meu.zIir6OLvk.Ql9naP93zqBGT0xUMcco4qJd9HO',
                'created_at' => '2023-11-07 10:58:59',
                'updated_at' => now(),
            ],
            [
                'name' => 'Emily',
                'email' => 'emily@example.com',
                'phone' => '7878',
                'date_of_birth' => '1990-01-14',
                'password' => '$2y$12$pDIxJCvO0CqmeKhD5PnQ0OriCkyrYqOsJ3QHD1sS/IgG.DvS96GZi',
                'created_at' => '2023-11-07 10:58:59',
                'updated_at' => now(),
            ],
            [
                'name' => 'Dan',
                'email' => 'dan@example.com',
                'phone' => '0123 456789',
                'date_of_birth' => '1984-09-17',
                'password' => '$2y$12$ymyhZ3NrGBbpBGzIHaFl6eeat5tEMls.PBntlZXrPK3a5clzxhMY6',
                'created_at' => '2023-11-07 10:58:59',
                'updated_at' => now(),
            ],
            [
                'name' => 'Chelsea',
                'email' => 'chelsea@example.com',
                'phone' => '9797-1234',
                'date_of_birth' => '1997-01-13',
                'password' => '$2y$12$Shz.fpjAsAsfCzCBjhbeVeTSIVbSeSOKt5DjHPWJtGEMMmbEmoOkG',
                'created_at' => '2023-11-07 10:58:59',
                'updated_at' => now(),
            ],
        ]);
    }
}
