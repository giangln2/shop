<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('roles')->insert([
//            ['name' => 'admin'],
//            ['name' => 'employee'],
//            ['name' => 'customer'],
//        ]);
//        $this->call(UsersTableSeeder::class);

//        DB::table('category')->insert([
//            ['name' => 'Sách tiếng việt'],
//            ['name' => 'Sách nước ngoài'],
//            ['name' => 'Sách văn học'],
//        ]);
//
//        DB::table('product')->insert([
//            [
//                'name'        => 'Tuổi Trẻ Đáng Giá Bao Nhiêu',
//                'description' => 'Bạn hối tiếc vì không nắm bắt lấy một cơ hội nào đó, chẳng có ai phải mất ngủ.'
//                    . "\n"
//                    . 'Bạn trải qua những ngày tháng nhạt nhẽo với công việc bạn căm ghét, người ta chẳng hề bận lòng.'
//                    . "\n"
//                    . 'Bạn có chết mòn nơi xó tường với những ước mơ dang dở, đó không phải là việc của họ.'
//                    . "\n"
//                    . 'Suy cho cùng, quyết định là ở bạn. Muốn có điều gì hay không là tùy bạn.'
//                    . "\n"
//                    . 'Nên hãy làm những điều bạn thích. Hãy đi theo tiếng nói trái tim. Hãy sống theo cách bạn cho là mình nên sống.'
//                    . "\n" . 'Vì sau tất cả, chẳng ai quan tâm.',
//                'price'       => 44000,
//                'image'       => 'themes\images\products\tuoi-tre-dang-gia-bao-nhieu.jpg',
//                'quantity'    => 100,
//                'created_at'  => now(),
//                'updated_at'  => now(),
//            ],
//            [
//                'name'        => 'The Little Prince',
//                'description' => 'The Little Prince is a classic tale of equal appeal to children and adults.'
//                    . ' On one level it is the story of an airman\'s discovery, in the desert, of a small boy from another planet'
//                    . ' - the Little Prince of the title - and his stories of intergalactic travel,'
//                    . ' while on the other hand it is a thought-provoking allegory of the human condition.'
//                    . ' First published in 1943, the year before the author\'s death in action, this translation contains Saint-Exupery\'s delightful illustrations.',
//                'price'       => 53000,
//                'image'       => 'themes\images\products\the-little-prince.jpg',
//                'quantity'    => 100,
//                'created_at'  => now(),
//                'updated_at'  => now(),
//            ],
//        ]);

        DB::table('product_category')->insert([
            ['product_id'  => 1,
             'category_id' => 1,
             'created_at'  => now(),
             'updated_at'  => now(),
            ],
            ['product_id'  => 1,
             'category_id' => 3,
             'created_at'  => now(),
             'updated_at'  => now(),
            ],
            ['product_id'  => 2,
             'category_id' => 2,
             'created_at'  => now(),
             'updated_at'  => now(),
            ],
        ]);
    }
}
