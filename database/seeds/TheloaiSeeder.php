<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class TheloaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('theloai')->insert([
        	[
        		'id' => 1,
        		'name' => 'Du Lịch',
        		'tenkhongdau' => 'du-lich',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
        		'id' => 2,
        		'name' => 'Phong Cách Sống',
        		'tenkhongdau' => 'phong-cach-song',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
        		'id' => 3,
        		'name' => 'Ẩm Thực',
        		'tenkhongdau' => 'am-thuc',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
        		'id' => 4,
        		'name' => 'Cuộc Sông Hoang Dã',
        		'tenkhongdau' => 'cuoc-song-hoang-da',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
        		'id' => 5,
        		'name' => 'Thế Giới',
        		'tenkhongdau' => 'the-gioi',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
        		'id' => 6,
        		'name' => 'Đồ Ăn',
        		'tenkhongdau' => 'do-an',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	
        ]);
    }
}
