<?php

namespace Database\Seeders;
use App\Models\Trail;
use Illuminate\Database\Seeder;

class TrailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $row = new Trail();
        $row->title = '二子坪步道';
        $row->location = '新北市三芝區';
        $row->distance = 3600;
        $row->coverImage = 'https://example.com/uploads/images/trail/2/cover.jpg';
        $row->save();
    }
}
