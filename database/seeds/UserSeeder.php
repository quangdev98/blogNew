<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	[
	        	'id' => 1,
	        	'name' => 'Quang Merce',
	        	'email' => 'dvq.dev@gmail.com',
	        	'phone' => '0969030421',
	        	'address' => 'Mỹ Đình, Nam Từ Liêm, Hà Nội',
	        	'avatar' => 'thumbnail/default.png',
	        	'info_more' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.',
	        	'gender' => 1,
	        	'birthday' => Carbon::createFromFormat('Y-m-d H:i:s', '1998-07-26 07:26:15'),
	        	'password' => bcrypt('0969030421'),
	        	'admin' => true,
	        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
			],
			[
	        	'id' => 2,
	        	'name' => 'Minh Thảo',
	        	'email' => 'minhthao@gmail.com',
	        	'phone' => '0987654321',
	        	'address' => 'Mỹ Đình, Nam Từ Liêm, Hà Nội',
	        	'avatar' => 'thumbnail/default.png',
	        	'info_more' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.',
	        	'gender' => 1,
	        	'birthday' => Carbon::createFromFormat('Y-m-d H:i:s', '1995-01-16 05:16:50'),
	        	'password' => bcrypt('0987654321'),
	        	'admin' => true,
	        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
			],
			[
	        	'id' => 3,
	        	'name' => 'Nguyễn Sơn',
	        	'email' => 'nguuyenson@gmail.com',
	        	'phone' => '0969696969',
	        	'address' => 'Mỹ Đình, Nam Từ Liêm, Hà Nội',
	        	'avatar' => 'thumbnail/default.png',
	        	'info_more' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.',
	        	'gender' => 1,
	        	'birthday' => Carbon::createFromFormat('Y-m-d H:i:s', '1995-05-30 09:38:45'),
	        	'password' => bcrypt('0969696969'),
	        	'admin' => true,
	        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
			],
			
        ]);
    }
}
