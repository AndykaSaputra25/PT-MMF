<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'logo' => '',
            'icon' => '',
            'name_1' => 'PT Merpati Maintenance Facility',
            'name_2' => 'The Capitol Group',
            'name_3' => '',
            'meet' => '',
            'service' => '',
            'desk_1' => 'Office & Hanggar',
            'desk_2' => 'Representative Office Jakarta',
            'desk_3' => '',
            'alamat_1' => 'Juanda International Airport, Sidoarjo, Indonesia',
            'alamat_2' => 'Gedung Graha Anugerah Lt. 5 Jl. Teluk Betung No.42, Kebon Melati - Tanah Abang, Jakarta Pusat 10230',
            'alamat_3' => '',
            'maps_1' => 'embed?pb=!1m18!1m12!1m3!1d3305.5085532771973!2d112.765996269736!3d-7.38067332356022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e503c2d9bc91%3A0x12a131326afc5bc7!2sMerpati%20Maintenance%20Facility!5e0!3m2!1sid!2sid!4v1684224359756!5m2!1sid!2sid',
            'maps_2' => 'embed?pb=!1m14!1m8!1m3!1d7933.015907391572!2d106.821295!3d-6.196512!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f421d13a88a5%3A0xbadbf38fed9995d6!2sJl.%20Teluk%20Betung%20No.42%2C%20RT.4%2FRW.1%2C%20Kb.%20Melati%2C%20Kecamatan%20Tanah%20Abang%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2010230!5e0!3m2!1sid!2sid!4v1685652681288!5m2!1sid!2sid',
            'maps_3' => '',
        ]);
    }
}
