<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id	title	bgr	desc	address	phone	hour_online	gap_go_doi_ngu_title	gap_go_doi_ngu_desc	list_img	list_name	list_desc	status	
        DB::table('contacts')->insert([
            'title' => 'dsadsasda',
            'bgr' => 'dsadsadsa',
            'desc' => 'dsadsadsadsa',
            'address' => 'dsadsadsadsa',
            'phone' => '099999',
            'hour_online' => 'dsadsadsadsa',
            'gap_go_doi_ngu_title' => 'dsadsadsadsa',
            'gap_go_doi_ngu_desc' => 'dsadsadsadsa',
            'list_img' => 'dsadsadsadsa',
            'list_name' => 'dsadsadsadsa',
            'list_desc' => 'dsadsadsadsa',
            'status' => 0,

        ]);
    }
}
