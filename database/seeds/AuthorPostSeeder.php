<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class AuthorPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('author')->insert([
       		[
       			'id' => 1,
       			'name' => 'Quang Dev',
       			'tenkhongdau' => 'quang-dev',
       			'email' => 'dvq.dev@gmail.com',
       			'phone' => '096903021',
            'level' => 1,
       			'info_more' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.',
       			'avatar' => 'thumbnail/default.png',
       			'gender' => 1,
       			'birthday' => Carbon::createFromFormat('Y-m-d H:i:s', '1998-07-26 07:26:15'),
       			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
       		],
       		[
       			'id' => 2,
       			'name' => 'Henry',
       			'tenkhongdau' => 'henry',
       			'email' => 'henry@gmail.com',
       			'phone' => '096903221',
            'level' => 2,
       			'info_more' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.',
       			'avatar' => 'thumbnail/default.png',
       			'gender' => 1,
       			'birthday' => Carbon::createFromFormat('Y-m-d H:i:s', '1995-06-26 07:26:15'),
       			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
       		],
       		
       ]);
    }
}
