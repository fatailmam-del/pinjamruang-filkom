<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    public function run(): void
    {
        $rooms = [
            ['Ruang Kelas A1.4', 'A', 1, '1.4', 40],
            ['Ruang Kelas F2.4', 'F', 2, '2.4', 48],
            ['Ruang Kelas F3.1', 'F', 3, '3.1', 40],
            ['Ruang Kelas F3.2', 'F', 3, '3.2', 40],
            ['Ruang Kelas F3.3', 'F', 3, '3.3', 40],
            ['Ruang Seminar F4.5', 'F', 4, '4.5', 60],
            ['Lab Jaringan G1.2', 'G', 1, '1.2', 30],
            ['Lab RPL G2.1', 'G', 2, '2.1', 36],
            ['Ruang Rapat Rinov 3.1', 'Rinov', 3, '3.1', 20],
            ['Ruang Seminar Rinov 4.2', 'Rinov', 4, '4.2', 80],
        ];

        foreach ($rooms as [$nama, $gedung, $lantai, $ruangan, $kapasitas]) {
            Room::updateOrCreate(
                ['gedung' => $gedung, 'ruangan' => $ruangan],
                compact('nama', 'lantai', 'kapasitas')
            );
        }
    }
}
