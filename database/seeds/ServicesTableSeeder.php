<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
             ['name' => 'Brand Identity Development' , 'description' => 'Our brand identity development team loves to create waves with memorable brand marks. Our design architects aim to create logos that are timeless and grow with your corporation itself.' ],
             ['name' => 'Web Design and Development' , 'description' => 'With our web design and development solutions we help you strengthen your existence online. Our creative masterminds love to sketch out beautiful user interfaces and unique functionalities.' ],
             ['name' => 'Back end Development ' , 'description' => 'Our team of backend development professionals assists you in managing valuable data easily with precisely constructed management systems, regardless of the size and shape of your business.' ],
             ['name' => 'Digital Marketing ' , 'description' => 'What good is a beautiful and strong online existence if your targeted audience doesn’t know about it? Our digital marketing professionals help you reach your targeted followers from around the world.' ],
             ['name' => 'Marketing Collateral' , 'description' => 'From an attractive brochure to an impressive company profile, our brand development team with its expertise provides you with unique marketing collateral for your business.' ],
             ['name' => 'Motion Graphics' , 'description' => 'Our animation experts help you tell your story through moving pictures and videos. We help you entertain the attention span of your customer and convert better for an excellent ROI.' ],
             ['name' => 'Website Management' , 'description' => 'Having a strong web existence is very important but so is maintaining and managing that web existence. Our website management solutions allow our clients to breath with ease as we handle all operations.' ],
             ['name' => 'Domain Registration' , 'description' => 'What good is a beautiful website if it doesn’t make an impact on your customers? Exactly! Our domain registration service allows you to register a domain name of your choice for the perfect first impression.' ],
            
             ['name' => 'Creative Copywriting' , 'description' => 'Our team of professionals know just how to captivate the customer with the help of creative and catchy written content. Our creative copywriters help you hook your targeted customers with ease.' ],
            
             ['name' => '2D & 3D Illustration' , 'description' => 'We create excellent 2D & 3D illustrations for companies looking to transform into brands with the help of compelling 2D/3D design work. Be the first to discuss your project with us today.' ],
        ];

        foreach($services as $row):
            \Illuminate\Support\Facades\DB::table('services')->insert($row);
        endforeach;
    }
}
