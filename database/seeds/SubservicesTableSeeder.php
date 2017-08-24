<?php

use Illuminate\Database\Seeder;

class SubservicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subServices = [
             ['name' => 'Stationary Design' , 'description' => ' desct ' , 'service_id' => '1' ],
             ['name' => 'Product Design' , 'description' => ' desct ' , 'service_id' => '1' ],
             ['name' => 'Business Card  Design' , 'description' => ' desct ' , 'service_id' => '1' ],
             ['name' => 'Merchandise Design' , 'description' => ' desct ' , 'service_id' => '1' ],
             ['name' => 'Mascot Design' , 'description' => ' desct ' , 'service_id' => '1' ],
             ['name' => 'Logo Design' , 'description' => ' desct ' , 'service_id' => '1' ],
             ['name' => 'Letterhead Design ' , 'description' => ' desct ' , 'service_id' => '1' ],
            
             ['name' => 'Web Interface Design' , 'description' => ' desct ' , 'service_id' => '2' ],
             ['name' => 'Cross Platform Web Development' , 'description' => ' desct ' , 'service_id' => '2' ],
             ['name' => 'CMS Development' , 'description' => ' desct ' , 'service_id' => '2' ],
             ['name' => 'User Interface Prototyping' , 'description' => ' desct ' , 'service_id' => '2' ],
             ['name' => 'Portal Development ' , 'description' => ' desct ' , 'service_id' => '2' ],
            

            ['name' => 'PHP Development' , 'description' => ' desct ' , 'service_id' => '3' ],
                         ['name' => '.NET Development' , 'description' => ' desct ' , 'service_id' => '3' ],
                         ['name' => 'Ruby Development' , 'description' => ' desct ' , 'service_id' => '3' ],
                         ['name' => 'Python Development' , 'description' => ' desct ' , 'service_id' => '3' ],
                         ['name' => 'Node JS Development' , 'description' => ' desct ' , 'service_id' => '3' ],



            ['name' => 'Search Engine Optimization' , 'description' => ' desct ' , 'service_id' => '4' ],
                         ['name' => 'Search Engine Marketing' , 'description' => ' desct ' , 'service_id' => '4' ],
                         ['name' => 'Social Media Marketing' , 'description' => ' desct ' , 'service_id' => '4' ],
                         ['name' => 'Pay-Per-Click Campaigns' , 'description' => ' desct ' , 'service_id' => '4' ],
                         ['name' => 'Reputation Management' , 'description' => ' desct ' , 'service_id' => '4' ],

            ['name' => 'Brochure Design' , 'description' => ' desct ' , 'service_id' => '5' ],
                         ['name' => 'Infographic Design' , 'description' => ' desct ' , 'service_id' => '5' ],
                         ['name' => 'Sales Presentation Design' , 'description' => ' desct ' , 'service_id' => '5' ],
                         ['name' => 'Company Profile Design' , 'description' => ' desct ' , 'service_id' => '5' ],
                         ['name' => 'Newsletter Design' , 'description' => ' desct ' , 'service_id' => '5' ],

            ['name' => '2D/3D Animation' , 'description' => ' desct ' , 'service_id' => '6' ],
                         ['name' => 'Explainer Video Development' , 'description' => ' desct ' , 'service_id' => '6' ],
                         ['name' => 'Interactive Infographic Development' , 'description' => ' desct ' , 'service_id' => '6' ],
                         ['name' => 'Brand Storytelling Solutions' , 'description' => ' desct ' , 'service_id' => '6' ],
                         ['name' => 'Branded Audio Video Production' , 'description' => ' desct ' , 'service_id' => '6' ],


            ['name' => 'Problem Solving' , 'description' => ' desct ' , 'service_id' => '7' ],
                         ['name' => 'Plain English Advice' , 'description' => ' desct ' , 'service_id' => '7' ],
                         ['name' => 'Fully Managed Hosting' , 'description' => ' desct ' , 'service_id' => '7' ],
                         ['name' => 'Continuous Backups' , 'description' => ' desct ' , 'service_id' => '7' ],
                         ['name' => 'Security Updates' , 'description' => ' desct ' , 'service_id' => '7' ],


            ['name' => 'Country based domain names' , 'description' => ' desct ' , 'service_id' => '8' ],
                         ['name' => 'WHOIS Business Listing' , 'description' => ' desct ' , 'service_id' => '8' ],
                         ['name' => 'Premium Domain Names' , 'description' => ' desct ' , 'service_id' => '8' ],
                         ['name' => 'Expired Domain Names' , 'description' => ' desct ' , 'service_id' => '8' ],
                         ['name' => 'Domain Preregistration' , 'description' => ' desct ' , 'service_id' => '8' ],



            ['name' => 'Advertisement Copywriting' , 'description' => ' desct ' , 'service_id' => '9' ],
                         ['name' => 'Digital Marketing Copywriting' , 'description' => ' desct ' , 'service_id' => '9' ],
                         ['name' => 'Digital Advertisement Copywriting' , 'description' => ' desct ' , 'service_id' => '9' ],
                         ['name' => 'Keyword Based Copywriting' , 'description' => ' desct ' , 'service_id' => '9' ],
                         ['name' => 'Sales Pitch & Related Copywriting' , 'description' => ' desct ' , 'service_id' => '9' ],
                    


            ['name' => '2D and 3D Architectural Illustrations' , 'description' => ' desct ' , 'service_id' => '10' ],
                         ['name' => '3D Rendering Services' , 'description' => ' desct ' , 'service_id' => '10' ],
                         ['name' => 'Sound Design Services' , 'description' => ' desct ' , 'service_id' => '10' ],
                         ['name' => 'Game Design and Artwork Services' , 'description' => ' desct ' , 'service_id' => '10' ],
                         ['name' => '2D and 3D animation Services.' , 'description' => ' desct ' , 'service_id' => '10' ],
                    


            ];

        foreach($subServices as $row):
            \Illuminate\Support\Facades\DB::table('subservices')->insert($row);
        endforeach;
    }
}
