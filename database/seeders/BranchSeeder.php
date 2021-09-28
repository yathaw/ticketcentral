<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //JCGV
            // 1 JCGV Junction City
            DB::table('branches')->insert([
                'name'       => 'JCGV Junction City',
                'address'    => 'Level 5, Corner of Bogyoke Aung San Road & 27th Street., PanBaeDan, Yangon',
                'phone'      => '+95 9404015140',
                'link'       => 'https://www.facebook.com/JCGVCinema/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.948639104229!2d96.15169691489426!3d16.779230724475365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ec821e1a39ad%3A0x376d9bfb7012e85!2sJCGV!5e0!3m2!1sen!2smm!4v1570287741633!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 2 JCGV (Square)
            DB::table('branches')->insert([
                'name'       => 'JCGV (Square)',
                'address'    => '1st Floor, Junction Square, Ward(8), Between Pyay Road and Kyun Taw Road., Hladen, Yangon',
                'phone'      => '+95 9404015140',
                'link'       => 'https://www.facebook.com/JCGVCinema/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.181615897049!2d96.12893741489462!3d16.817343923421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb3585f9944f%3A0xee7576a62d697914!2sJCGV%20Junction%20Square!5e0!3m2!1sen!2smm!4v1570325607776!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 3 JCGV (Maw Tin)
            DB::table('branches')->insert([
                'name'       => 'JCGV (Maw Tin)',
                'address'    => '4th Floor, Junction Maw Tin, Corner of Anawrahta Street & Lan Thit Street., LannMaDaw, Yangon',
                'phone'      => '+95 9404015140',
                'link'       => 'https://www.facebook.com/JCGVCinema/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.977752620055!2d96.13959211489424!3d16.777782424515408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb77619e1cbf%3A0xc475aeb547906524!2sJ%20CGV!5e0!3m2!1sen!2smm!4v1570325788116!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 4 JCGV City Mall (St.John)
            DB::table('branches')->insert([
                'name'       => 'JCGV City Mall (St.John)',
                'address'    => '3rd Floor, City Mall (St.John), Corner of Pyay Road and Min Ye Kyaw Swar Road., LannMaDaw, Yangon',
                'phone'      => '+95 9404015140',
                'link'       => 'https://www.facebook.com/JCGVCinema/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.875117770742!2d96.1424386148943!3d16.782887624374325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb7afd8d71cf%3A0xe110278f5543a8d1!2sJCGV%20City%20Mall%20St.%20John!5e0!3m2!1sen!2smm!4v1570325864804!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 5 JCGV (Kan Thar Yar)
            DB::table('branches')->insert([
                'name'       => 'JCGV (Kan Thar Yar)',
                'address'    => '3rd Floor, Kan Thar Yar Shopping Mall, Corner of Kan Yiek Tar Road and U Aung Myat Road, Mingalar Taung Nyut, Yangon',
                'phone'      => '+95 9404015140',
                'link'       => 'https://www.facebook.com/JCGVCinema/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61117.97475046305!2d96.10960772480298!3d16.782971966475944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c194bdd55cd97f%3A0x95f8452b23b540a4!2sKan%20Thar%20Yar!5e0!3m2!1sen!2smm!4v1570326006771!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 6 JCGV (Nay Pyi Taw)
            DB::table('branches')->insert([
                'name'       => 'JCGV (Nay Pyi Taw)',
                'address'    => '1st Floor, Junction Nay Pyi Taw, In Front of Hotel Zone., Hotel Zone., Nay Pyi Taw',
                'phone'      => '+95 9404015140',
                'link'       => 'https://www.facebook.com/JCGVCinema/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3755.965419689903!2d96.10876321492604!3d19.714096336727447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c8bc52b0803839%3A0xfdbbe1217f171902!2sJunction%20Naypyitaw%20Cineplex!5e0!3m2!1sen!2smm!4v1570326931960!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 3,
                'cinema_id'  => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 7 JCGV (OTTARA THIRI)
            DB::table('branches')->insert([
                'name'       => 'JCGV (OTTARA THIRI)',
                'address'    => '1st Floor, Ocean Super Center Commerical Complex, Ottara Thiri Township, Ottara Thiri, Nay Pyi Taw',
                'phone'      => '+95 9404015140',
                'link'       => 'https://www.facebook.com/JCGVCinema/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3753.5417771049306!2d96.15226591492728!3d19.81701643341082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c8b8cae1df56dd%3A0x687122d213ddebca!2sOcean%20Supercenter%20Ottarathiri%20Naypyitaw!5e0!3m2!1sen!2smm!4v1570333638621!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 3,
                'cinema_id'  => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 8 JCGV (Mingalar Mandalay)
            DB::table('branches')->insert([
                'name'       => 'JCGV (Mingalar Mandalay)',
                'address'    => '3rd Floorm Ocen Center, Mingalar Mandalay Area (73) Road., Mingalar Mandalay Area, Mandalay',
                'phone'      => '+95 9404015140',
                'link'       => 'https://www.facebook.com/JCGVCinema/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3700.8162609487854!2d96.09055361495456!3d21.941613961363757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cb6d66cf54cff9%3A0x4b90749698312826!2sJCGV!5e0!3m2!1sen!2smm!4v1570327038028!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 2,
                'cinema_id'  => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 9 JCGV (Mawlamyine)
            DB::table('branches')->insert([
                'name'       => 'JCGV (Mawlamyine)',
                'address'    => '1st Floor, Ocen Center Mawlamyine, Mawlamyine, Mawlamyine',
                'phone'      => '+95 9404015140',
                'link'       => 'https://www.facebook.com/JCGVCinema/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.1392341686346!2d97.62464481489128!3d16.468486032988434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c2a8bdea031fc1%3A0x3d9ce2b059d5dc39!2sJCGV%20Mawlamyine!5e0!3m2!1sen!2smm!4v1570333531651!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 7,
                'cinema_id'  => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // =============================================================


        // Mingalar    

            // 10 Nay Pyi Taw Cinema
            DB::table('branches')->insert([
                'name'       => 'Nay Pyi Taw Cinema',
                'address'    => '1st Floor, Ocen Center Mawlamyine, Mawlamyine, Mawlamyine',
                'phone'      => '+95 457842882,+95 457842883',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.9629639907484!2d96.15707601489427!3d16.778518124495125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ec86a29347d5%3A0xe4ad987c2352a2aa!2sNay%20Pyi%20Taw%20Cinema!5e0!3m2!1sen!2smm!4v1570333886831!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 11 Mingalar Cinema 2 @ Dagon Centre 2
            DB::table('branches')->insert([
                'name'       => 'Mingalar Cinema 2 @ Dagon Centre 2',
                'address'    => '268, Pyay Road Yangon',
                'phone'      => '+95 73254091 ,+95 73254092, +95 73254093',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.4394550717507!2d96.13525631489456!3d16.804541323775496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb44182ee76b%3A0x9608d18e6d976f0a!2sMingalar%20Cinema!5e0!3m2!1sen!2smm!4v1570335689219!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 12 Mingalar Gamonepwint Cineplex
            DB::table('branches')->insert([
                'name'       => 'Mingalar Gamonepwint Cineplex',
                'address'    => 'အင်းစိန်လမ်း, ရန်ကုန်',
                'phone'      => '+95 9779054671 ,+95 9779054672, +95 9779054673',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.8664525198083!2d96.1274129148948!3d16.832980022987773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c194c7d63da4eb%3A0xa2d5d0090972bacf!2sMingalar%20Ga%20Mone%20Pwint!5e0!3m2!1sen!2smm!4v1570336360286!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 13 Mingalar San Pya Cineplex
            DB::table('branches')->insert([
                'name'       => 'Mingalar San Pya Cineplex',
                'address'    => 'အနော်ရထာလမ်း, ရန်ကုန်',
                'phone'      => '+95 9779054671 ,+95 9779054672, +95 9779054673',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.9829285920205!2d96.14259051489425!3d16.777524924522524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb7909ac2d1f%3A0x2df434121c4ae2d3!2sMingalar%20San%20Pya%20Cineplex!5e0!3m2!1sen!2smm!4v1570336417233!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 14 Thamada Cinema
            DB::table('branches')->insert([
                'name'       => 'Thamada Cinema',
                'address'    => 'Alan Pya Pagoda St, Yangon',
                'phone'      => '01 246962 ,01 246963, 01 252117',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.8854525905217!2d96.15661041489425!3d16.7823736243885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ec849013d777%3A0x2e414bcfcdcfcb60!2sThamada!5e0!3m2!1sen!2smm!4v1570336472530!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 15 Shae Saung Cinema
            DB::table('branches')->insert([
                'name'       => 'Shae Saung Cinema',
                'address'    => 'Sule Pagoda Rd, ရန်ကုန်',
                'phone'      => '+95 457842880 ,+95 457842881, 01 388034',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.97303689066!2d96.15706661489428!3d16.77801702450898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ec86be0b2711%3A0xbf024287cfe00a64!2sShae%20Saung%20Cinema!5e0!3m2!1sen!2smm!4v1570336789890!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);


            // 16 Twin Cinema
            DB::table('branches')->insert([
                'name'       => 'Twin Cinema',
                'address'    => 'No. 309, Bogyote Aung San Road, Kyauktata Tsp, Yangon',
                'phone'      => '01 246962 ,01 246963, 01 252117',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.9501468032477!2d96.15889201489433!3d16.779155724477473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ec85d65e90e3%3A0x7e723b0d80fbda32!2sTwin%20Cinema%20Great%20Gate!5e0!3m2!1sen!2smm!4v1570336872125!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 17 Top Royal Cinema
            DB::table('branches')->insert([
                'name'       => 'Top Royal Cinema',
                'address'    => 'ဂမုန္းပြင့္ - စံရိပ္ၿငိမ္',
                'phone'      => '09779054671 , 09779054672 , 09779054673',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.378200112137!2d96.11942731489503!3d16.857175722316583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c194f010f2f31b%3A0x1bbc7967d5723f20!2sTop%20Royal%20Cinema!5e0!3m2!1sen!2smm!4v1570681477701!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 18 Mingalar Cinema 1
            DB::table('branches')->insert([
                'name'       => 'Mingalar Cinema 1',
                'address'    => '5th Floor D Yone Block E (Thein Gyi Zay ဘုရားလမ်း, ရန်ကုန်',
                'phone'      => '01 243057 ,01 243058, 01 246763',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.016816738888!2d96.15075841489421!3d16.77583892456921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ec802f2c4d1f%3A0x63bf7b154f78abf0!2sMingalar%20Cinema!5e0!3m2!1sen!2smm!4v1570337005564!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 19 Mingalar Waziyar Cinema
            DB::table('branches')->insert([
                'name'       => 'Mingalar Waziyar Cinema',
                'address'    => 'အမှတ် ( ၂၃၂ ) ဗိုလ်အောင်ကျော်လမ်းနှင့် ကွေးလမ်းထောင့်၊ လှိုင်သာယာ ရန်ကုန်',
                'phone'      => '+95 9261901155 ,+95 9261901166,+95 9261901177',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.019137713458!2d96.04982631489516!3d16.874947821822953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1be340a7c1d01%3A0xe27c2bc477750084!2z4YCZ4YCE4YC64YC54YCC4YCc4YCsIOGAneGAh-GAruGAm-GArCDhgKHhgIbhgIThgLrhgLfhgJnhgLzhgIThgLrhgLfhgJvhgK_hgJXhgLrhgJvhgL7hgIThgLrhgJvhgK_hgLY!5e0!3m2!1sen!2smm!4v1570337102610!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 20 Mingalar Cinemas Sein Gay Har (Hlaing Tha Yar)
            DB::table('branches')->insert([
                'name'       => 'Mingalar Cinemas Sein Gay Har (Hlaing Tha Yar)',
                'address'    => 'အမှတ် ( ၂၃၂ ) ဗိုလ်အောင်ကျော်လမ်းနှင့် ကွေးလမ်းထောင့်၊ လှိုင်သာယာ ရန်ကုန်',
                'phone'      => '09 40217 7771',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.2995098084666!2d96.06498991489507!3d16.861072122208416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1bfd7cd4abdfd%3A0x3ebde8b57a3f14a7!2sSein%20Gay%20Har%20Hlaing%20Thar%20Yar%20Center!5e0!3m2!1sen!2smm!4v1570681826380!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 21 Mingalar Cinemas North Okkalapa
            DB::table('branches')->insert([
                'name'       => 'Mingalar Cinemas Sein Gay Har (Hlaing Tha Yar)',
                'address'    => 'အမွတ္ 15/B သုဓမၼာလမ္း, (ဃ) ရပ္ကြက္, ေျမာက္ဥကၠလာပၿမိဳ႕နယ္, ရန်ကုန်',
                'phone'      => '09402027001, 09402027002, 09402027003',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3817.6425707748263!2d96.15318021489539!3d16.893566821305352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193e7c78decf3%3A0xf55fea6cd6033d0d!2sMingalar%20Cinema%20(North%20Okkalapa)!5e0!3m2!1sen!2smm!4v1570681876321!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 22 Mingalar Ba Yint Naung Cinemas - Tamwe
            DB::table('branches')->insert([
                'name'       => 'Mingalar Ba Yint Naung Cinemas - Tamwe',
                'address'    => ' အမွတ္(287/289) ၊ဗညားဒလလမ္း ၊အရိုးကုန္းရပ္ကြက္၊ တာေမြျမိဳ႕နယ္, ရန်ကုန်',
                'phone'      => '09402027001, 09402027002, 09402027003',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.5748919116018!2d96.17411891489445!3d16.797812623961587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ecc04bcae813%3A0xd63b3c5c9fbb0626!2sMingalar%20Cinemas!5e0!3m2!1sen!2smm!4v1570681986294!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 23 Mingalar Cinemas Gold Class (KER)
            DB::table('branches')->insert([
                'name'       => 'Mingalar Cinemas Gold Class (KER)',
                'address'    => 'Alan Pya Pagoda St, Yangon',
                'phone'      => '+95 9266660911 ,+95 9266660922, +95 9266660933',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.454571221149!2d96.15564051489501!3d16.853393322421514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193602f263ef9%3A0xe84553d4b0bd5c66!2sMingalar%20Cinemas%20Gold%20Class!5e0!3m2!1sen!2smm!4v1570339883084!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 24 Mingalar Cinemas South Dagon
            DB::table('branches')->insert([
                'name'       => 'Mingalar Cinemas South Dagon',
                'address'    => 'Alan Pya Pagoda St, Yangon',
                'phone'      => '+95 9266660911 ,+95 9266660922, +95 9266660933',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122226.29503516738!2d96.10626713471201!3d16.79797024659615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193bcf73f850d%3A0x5ef2181fd0ede596!2sMingalar%20Cinemas%20South%20Dagon!5e0!3m2!1sen!2smm!4v1570682080265!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 25 Mingalar Cinemas Central Point
            DB::table('branches')->insert([
                'name'       => 'Mingalar Cinemas Central Point',
                'address'    => 'Alan Pya Pagoda St, Yangon',
                'phone'      => '+95 9266660911 ,+95 9266660922, +95 9266660933',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122226.29503516738!2d96.10626713471201!3d16.79797024659615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193bcf73f850d%3A0x5ef2181fd0ede596!2sMingalar%20Cinemas%20South%20Dagon!5e0!3m2!1sen!2smm!4v1570682080265!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 2,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 26 Mingalar Diamond Cineplex
            DB::table('branches')->insert([
                'name'       => 'Mingalar Diamond Cineplex',
                'address'    => 'Alan Pya Pagoda St, Yangon',
                'phone'      => '+95 9266660911 ,+95 9266660922, +95 9266660933',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122226.29503516738!2d96.10626713471201!3d16.79797024659615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193bcf73f850d%3A0x5ef2181fd0ede596!2sMingalar%20Cinemas%20South%20Dagon!5e0!3m2!1sen!2smm!4v1570682080265!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 2,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 27 Win Light Cinema
            DB::table('branches')->insert([
                'name'       => 'Win Light Cinema',
                'address'    => 'Alan Pya Pagoda St, Yangon',
                'phone'      => '+95 9266660911 ,+95 9266660922, +95 9266660933',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122226.29503516738!2d96.10626713471201!3d16.79797024659615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193bcf73f850d%3A0x5ef2181fd0ede596!2sMingalar%20Cinemas%20South%20Dagon!5e0!3m2!1sen!2smm!4v1570682080265!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 2,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 28 Myoma Cinema
            DB::table('branches')->insert([
                'name'       => 'Myoma Cinema',
                'address'    => 'Alan Pya Pagoda St, Yangon',
                'phone'      => '+95 9266660911 ,+95 9266660922, +95 9266660933',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122226.29503516738!2d96.10626713471201!3d16.79797024659615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193bcf73f850d%3A0x5ef2181fd0ede596!2sMingalar%20Cinemas%20South%20Dagon!5e0!3m2!1sen!2smm!4v1570682080265!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 2,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 29 Mingalar Mann Nay Pyi Taw Cinema
            DB::table('branches')->insert([
                'name'       => 'Mingalar Mann Nay Pyi Taw Cinema',
                'address'    => 'Alan Pya Pagoda St, Yangon',
                'phone'      => '+95 9266660911 ,+95 9266660922, +95 9266660933',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122226.29503516738!2d96.10626713471201!3d16.79797024659615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193bcf73f850d%3A0x5ef2181fd0ede596!2sMingalar%20Cinemas%20South%20Dagon!5e0!3m2!1sen!2smm!4v1570682080265!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 2,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 30 Mingalar Icon Cineplex
            DB::table('branches')->insert([
                'name'       => 'Mingalar Icon Cineplex',
                'address'    => 'Alan Pya Pagoda St, Yangon',
                'phone'      => '+95 9266660911 ,+95 9266660922, +95 9266660933',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122226.29503516738!2d96.10626713471201!3d16.79797024659615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193bcf73f850d%3A0x5ef2181fd0ede596!2sMingalar%20Cinemas%20South%20Dagon!5e0!3m2!1sen!2smm!4v1570682080265!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 4,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 31 Mingalar Shwe Hinn Tar Cinema
            DB::table('branches')->insert([
                'name'       => 'Mingalar Shwe Hinn Tar Cinema',
                'address'    => 'Alan Pya Pagoda St, Yangon',
                'phone'      => '+95 9266660911 ,+95 9266660922, +95 9266660933',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122226.29503516738!2d96.10626713471201!3d16.79797024659615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193bcf73f850d%3A0x5ef2181fd0ede596!2sMingalar%20Cinemas%20South%20Dagon!5e0!3m2!1sen!2smm!4v1570682080265!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 4,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 32 New 3D Cinema
            DB::table('branches')->insert([
                'name'       => 'New 3D Cinema',
                'address'    => 'Alan Pya Pagoda St, Yangon',
                'phone'      => '+95 9266660911 ,+95 9266660922, +95 9266660933',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122226.29503516738!2d96.10626713471201!3d16.79797024659615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193bcf73f850d%3A0x5ef2181fd0ede596!2sMingalar%20Cinemas%20South%20Dagon!5e0!3m2!1sen!2smm!4v1570682080265!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 11,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);


            // 33 Mingalar Tun Thiri Cineplex
            DB::table('branches')->insert([
                'name'       => 'Mingalar Tun Thiri Cineplex',
                'address'    => 'Alan Pya Pagoda St, Yangon',
                'phone'      => '+95 9266660911 ,+95 9266660922, +95 9266660933',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122226.29503516738!2d96.10626713471201!3d16.79797024659615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193bcf73f850d%3A0x5ef2181fd0ede596!2sMingalar%20Cinemas%20South%20Dagon!5e0!3m2!1sen!2smm!4v1570682080265!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 9,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 34 Mingalar San Pya Cinema
            DB::table('branches')->insert([
                'name'       => 'Mingalar San Pya Cinema',
                'address'    => 'Alan Pya Pagoda St, Yangon',
                'phone'      => '+95 9766662585 ,+95 9766662586, +95 9766662587',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3696.672766990822!2d95.13800251495678!3d22.100310655709514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ca9f1c1f289a19%3A0x259f58223ee800f1!2sMingalar%20Cineplex%20-%20Ocean%2C%20Monywa!5e0!3m2!1sen!2smm!4v1570340013215!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 9,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 35 Mingalar Mya Sandar Cinema
            DB::table('branches')->insert([
                'name'       => 'Mingalar Mya Sandar Cinema',
                'address'    => 'Alan Pya Pagoda St, Yangon',
                'phone'      => '+95 9766662585 ,+95 9766662586, +95 9766662587',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3696.672766990822!2d95.13800251495678!3d22.100310655709514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ca9f1c1f289a19%3A0x259f58223ee800f1!2sMingalar%20Cineplex%20-%20Ocean%2C%20Monywa!5e0!3m2!1sen!2smm!4v1570340013215!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 8,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 36 Mingalar Ocean Cineplex
            DB::table('branches')->insert([
                'name'       => 'Mingalar Ocean Cineplex',
                'address'    => 'Alan Pya Pagoda St, Yangon',
                'phone'      => '+95 9766662585 ,+95 9766662586, +95 9766662587',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3696.672766990822!2d95.13800251495678!3d22.100310655709514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ca9f1c1f289a19%3A0x259f58223ee800f1!2sMingalar%20Cineplex%20-%20Ocean%2C%20Monywa!5e0!3m2!1sen!2smm!4v1570340013215!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 8,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 37 Mingalar Bayint Cinema
            DB::table('branches')->insert([
                'name'       => 'Mingalar Bayint Cinema',
                'address'    => 'Alan Pya Pagoda St, Yangon',
                'phone'      => '+95 9766662585 ,+95 9766662586, +95 9766662587',
                'link'       => 'https://business.facebook.com/mingalarcinemas/',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3696.672766990822!2d95.13800251495678!3d22.100310655709514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ca9f1c1f289a19%3A0x259f58223ee800f1!2sMingalar%20Cineplex%20-%20Ocean%2C%20Monywa!5e0!3m2!1sen!2smm!4v1570340013215!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 7,
                'cinema_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // =============================================================

        // Mega Ace

            // 38 Mega Ace Cineplex (Shwe Ba Ho - Tarmwe)
            DB::table('branches')->insert([
                'name'       => 'Mega Ace Cineplex (Shwe Ba Ho - Tarmwe)',
                'address'    => 'Corner of Thamainbayan Road and Kyaikasan Road, Tamwe Township, Yangon ',
                'phone'      => '01 554383, 09 402499959',
                'link'       => 'https://www.megaacecineplex.com',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3696.672766990822!2d95.13800251495678!3d22.100310655709514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ca9f1c1f289a19%3A0x259f58223ee800f1!2sMingalar%20Cineplex%20-%20Ocean%2C%20Monywa!5e0!3m2!1sen!2smm!4v1570340013215!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 39 Mega Ace Cineplex (Mya Yadana - Tharkayta)
            DB::table('branches')->insert([
                'name'       => 'Mega Ace Cineplex (Mya Yadana - Tharkayta)',
                'address'    => 'Corner of Myindawthar Street and Zingama Street, Thakayta Township, Yangon ',
                'phone'      => '01 556782, 09 424448993',
                'link'       => 'https://www.megaacecineplex.com',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3696.672766990822!2d95.13800251495678!3d22.100310655709514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ca9f1c1f289a19%3A0x259f58223ee800f1!2sMingalar%20Cineplex%20-%20Ocean%2C%20Monywa!5e0!3m2!1sen!2smm!4v1570340013215!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 40 Mega Ace Cineplex (Kantharyar - North Okkala)
            DB::table('branches')->insert([
                'name'       => 'Mega Ace Cineplex (Kantharyar - North Okkala)',
                'address'    => 'Kantharyar Park, Thudama road, North Okala, Yangon ',
                'phone'      => '09 971750191, 09 967554358',
                'link'       => 'https://www.megaacecineplex.com',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3696.672766990822!2d95.13800251495678!3d22.100310655709514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ca9f1c1f289a19%3A0x259f58223ee800f1!2sMingalar%20Cineplex%20-%20Ocean%2C%20Monywa!5e0!3m2!1sen!2smm!4v1570340013215!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 41 Mega Ace Cineplex (Capital - Daw Pone)
            DB::table('branches')->insert([
                'name'       => 'Mega Ace Cineplex (Capital - Daw Pone)',
                'address'    => 'Capital Hyper Market, 4th Floor, Minnandar Road, Dawpone Township, Yangon ',
                'phone'      => '09 400686992, 09400686993',
                'link'       => 'https://www.megaacecineplex.com',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3696.672766990822!2d95.13800251495678!3d22.100310655709514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ca9f1c1f289a19%3A0x259f58223ee800f1!2sMingalar%20Cineplex%20-%20Ocean%2C%20Monywa!5e0!3m2!1sen!2smm!4v1570340013215!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 42 Mega Ace Cineplex (Super One – Hlaing Thar Yar)
            DB::table('branches')->insert([
                'name'       => 'Mega Ace Cineplex (Super One – Hlaing Thar Yar)',
                'address'    => 'No(1259), Nawaday Garden Housing, Yangon-Pathein Highway, Hlaing Thar Yar Township, Yangon',
                'phone'      => '09 403162160',
                'link'       => 'https://www.megaacecineplex.com',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3696.672766990822!2d95.13800251495678!3d22.100310655709514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ca9f1c1f289a19%3A0x259f58223ee800f1!2sMingalar%20Cineplex%20-%20Ocean%2C%20Monywa!5e0!3m2!1sen!2smm!4v1570340013215!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 1,
                'cinema_id'  => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 43 Mega Ace Cineplex (Myo Gone Yaung - Mandalay)
            DB::table('branches')->insert([
                'name'       => 'Mega Ace Cineplex (Myo Gone Yaung - Mandalay)',
                'address'    => 'Corner of 31 Street and 38 Street, Chan Aye Thar Zan Township, Mandalay ',
                'phone'      => '02 60365, 09 774762108',
                'link'       => 'https://www.megaacecineplex.com',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3696.672766990822!2d95.13800251495678!3d22.100310655709514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ca9f1c1f289a19%3A0x259f58223ee800f1!2sMingalar%20Cineplex%20-%20Ocean%2C%20Monywa!5e0!3m2!1sen!2smm!4v1570340013215!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 2,
                'cinema_id'  => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 44 Mega Ace Cineplex (Thiha - Pakoku)
            DB::table('branches')->insert([
                'name'       => 'Mega Ace Cineplex (Thiha - Pakoku)',
                'address'    => 'Bo Gyoke Road, Pakoku ',
                'phone'      => '06 221066',
                'link'       => 'https://www.megaacecineplex.com',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3696.672766990822!2d95.13800251495678!3d22.100310655709514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ca9f1c1f289a19%3A0x259f58223ee800f1!2sMingalar%20Cineplex%20-%20Ocean%2C%20Monywa!5e0!3m2!1sen!2smm!4v1570340013215!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 12,
                'cinema_id'  => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // 45 Mega Ace Cineplex (City Square - Taunggyi)
            DB::table('branches')->insert([
                'name'       => 'Mega Ace Cineplex (City Square - Taunggyi)',
                'address'    => '4th Floor, City Square Shopping Center, Bogyoke Aung San Road and Yayhtwetoo Road, Taunggyi ',
                'phone'      => '09 427953334',
                'link'       => 'https://www.megaacecineplex.com',
                'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3696.672766990822!2d95.13800251495678!3d22.100310655709514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ca9f1c1f289a19%3A0x259f58223ee800f1!2sMingalar%20Cineplex%20-%20Ocean%2C%20Monywa!5e0!3m2!1sen!2smm!4v1570340013215!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
                'city_id'    => 10,
                'cinema_id'  => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        // =============================================================

            
    }
}
