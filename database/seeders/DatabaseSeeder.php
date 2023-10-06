<?php

namespace Database\Seeders;

use App\Models\diskusi;
use App\Models\materi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        materi::create([
            'id'      =>  '1',
            'nama'  =>  'Materi 1 - Sejarah Perkembangan Bola Voli',
            'created_at'         =>  now(),
        ]);
        materi::create([
            'id'      =>  '2',
            'nama'  =>  'Materi 2 - Peraturan Bola Voli & Cara Bermain Bola Voli',
            'created_at'         =>  now(),
        ]);
        materi::create([
            'id'      =>  '3',
            'nama'  =>  'Materi 3 - Sarana Prasarana Bola Voli',
            'created_at'         =>  now(),
        ]);
        materi::create([
            'id'      =>  '4',
            'nama'  =>  'Materi 4 - Teknik Dasar Permainan Bola Voli',
            'created_at'         =>  now(),
        ]);
        // diskusi::create(
        //     [
        //         'nama'  =>  'Anonimus',
        //         'id'      =>  '1',
        //         'materi_id'      =>  '1',
        //         'pesan'      =>  'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //         'created_at'         =>  now(),
        //     ]
        // );
        // diskusi::create(
        //     [
        //         'nama'  =>  'Anonimus2',
        //         'id'      =>  '2',
        //         'materi_id'      =>  '2',
        //         'pesan'      =>  'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //         'created_at'         =>  now(),
        //     ]
        // );
    }
}
