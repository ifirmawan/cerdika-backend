<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->truncate();
        $data = [
            'Pernahkah anda lupa minum obat?',
            'Dalam 2 minggu terakhir, apakah anda pernah tidak minum obat?',
            'Pernahkah anda mengurangi atau berhenti minum obat tanpa sepengetahuan dokter karena anda merasa obat yang diberikan membuat keadaan anda menjadi lebih buruk?',
            'Pernahkah anda lupa membawa obat ketika bepergian?',
            'Apakah anda masih meminum obat kemarin?',
            'Apakah anda berhenti minum obat ketika anda merasa gejala yang dialami telah teratasi?',
            'Meminum obat setiap hari merupakan sesuatu ketidaknyamanan untuk beberapa orang. Apakah anda merasa terganggu harus minum obat setiap hari?',
            'Berapa sering anda lupa minum obat?'
        ];
        $data = collect($data)->map(function($item){
            return [
                'question' => $item,
                'created_at' => \Carbon\Carbon::now()
            ];
        })->toArray();
        DB::table('questions')->insert($data);
    }
}
