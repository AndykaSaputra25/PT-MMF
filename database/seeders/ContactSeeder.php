<?php

namespace Database\Seeders;

use App\Models\Contact;
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
        Contact::create([
            'mmf' => '<p>Merpati Maintenance Facility is an Approved Maintenance Organization with Certificate No. 145D-093 by DGCA. Our Vision to become the preferred Trusted, Reliable, Partner MRO (Maintenance, Repair, Overhoul).</p> <p>All works performed are in compliance with all specified requirements such as Hangars and Facilites, Tools, Materials, Technical Data, and also supported by Qualified Personnels.</p> ',
            'email_1' => 'marketing@ptmmf.co.id',
            'email_2' => 'sekretariat@ptmmf.co.id',
            'email_3' => 'marketingjkt@ptmmf.co.id',
            'email_4' => '',
            'wa_1' => '+62318686482',
            'wa_2' => '+62318686500',
            'wa_3' => '+622122909914',
            'wa_4' => '',
            'linkedin' => 'merpati-maintenance-facility',
            'ig_1' => 'ptmmf',
            'ig_2' => '',
        ]);
    }
}
