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
        DB::table('roles')->insert([
            ['name' => 'admin'],
            ['name' => 'employee'],
            ['name' => 'customer'],
        ]);
        $this->call(UsersTableSeeder::class);

        DB::table('category')->insert([
            ['name' => 'Sách tiếng việt'],
            ['name' => 'Sách nước ngoài'],
            ['name' => 'Sách văn học'],
        ]);

        DB::table('product')->insert([
            [
                'category_id' => 2,
                'name'        => 'Tuổi Trẻ Đáng Giá Bao Nhiêu',
                'description' => 'Bạn hối tiếc vì không nắm bắt lấy một cơ hội nào đó, chẳng có ai phải mất ngủ.'
                    . "\n"
                    . 'Bạn trải qua những ngày tháng nhạt nhẽo với công việc bạn căm ghét, người ta chẳng hề bận lòng.'
                    . "\n"
                    . 'Bạn có chết mòn nơi xó tường với những ước mơ dang dở, đó không phải là việc của họ.'
                    . "\n"
                    . 'Suy cho cùng, quyết định là ở bạn. Muốn có điều gì hay không là tùy bạn.'
                    . "\n"
                    . 'Nên hãy làm những điều bạn thích. Hãy đi theo tiếng nói trái tim. Hãy sống theo cách bạn cho là mình nên sống.'
                    . "\n" . 'Vì sau tất cả, chẳng ai quan tâm.',
                'price'       => 44000,
                'image'       => 'themes\images\products\tuoi-tre-dang-gia-bao-nhieu.jpg',
                'quantity'    => 100,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'category_id' => 3,
                'name'        => 'The Little Prince',
                'description' => 'The Little Prince is a classic tale of equal appeal to children and adults.'
                    . ' On one level it is the story of an airman\'s discovery, in the desert, of a small boy from another planet'
                    . ' - the Little Prince of the title - and his stories of intergalactic travel,'
                    . ' while on the other hand it is a thought-provoking allegory of the human condition.'
                    . ' First published in 1943, the year before the author\'s death in action, this translation contains Saint-Exupery\'s delightful illustrations.',
                'price'       => 53000,
                'image'       => 'themes\images\products\the-little-prince.jpg',
                'quantity'    => 100,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'category_id' => 1,
                'name'        => 'Cuộc hẹn từ tương lai',
                'description' => 'Trên đường tới trường đại học Mỹ thuật ở Kyoto, tôi gặp cô gái đã khiến mình say đắm từ cái nhìn đầu tiên. Tôi dành hết quyết tâm chủ động làm quen với em, người mà thoạt nhìn tôi tự thấy mình kém cỏi hơn rất nhiều. Chúng tôi đến với nhau. Vậy mà không thể tưởng tượng được, người con gái trong lúc nào cũng có vẻ cô đơn, lại luôn nhạy cảm với mọi thứ xung quanh kia, lại đang che giấu một bí mật khủng khiếp...',
                'price'       => 87000,
                'image'       => 'themes\images\products\cuoc-hen-tu-tuong-lai.jpg',
                'quantity'    => 100,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'category_id' => 2,
                'name'        => 'Nghiệp ác',
                'description' => 'Tập 3 trong bộ trinh thám về thám tử Cormoran Strike và trợ lý Robin của tác giả Robert Galbraith (bút danh khác của J.K. Rowling), tiếp theo "Con chim khát tổ" và "Con Tằm". Thay vì 1, lần này có đến 4 kẻ tình nghi với những manh mối mơ hồ, trong khi tội ác diễn ra liên tiếp cần được chặn đứng tức thì. Kịch tính, bất ngờ, "Nghiệp Ác" có tiết tấu nhanh và tình tiết phức tạp hơn hẳn hai tập trước, khiến người đọc phải tò mò về hung thủ đến tận những trang cuối cùng.',
                'price'       => 144000,
                'image'       => 'themes\images\products\nghiep-ac.jpg',
                'quantity'    => 100,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'category_id' => 1,
                'name'        => 'Hokkaido',
                'description' => 'Tại Hokkaido, trên một mỏm cao xa tít tắp trông xuống biển khơi đầy băng trôi, có xây cất một công trình dị thường mà người trong vùng gọi là "nhà nghiêng".'
                    . "\n"
                    . 'Công trình ấy gồm một ngôi nhà và một ngọn tháp tròn, cùng nghiêng về phía Nam, xây dựng rất kì công với thiết kế mê cung bên trong, nhưng hiện tại đang rơi vào tình trạng hoang phế, rao bán đã lâu mà chẳng ai hỏi mua, không chỉ vì vị trí quá hẻo lánh, mà còn vì nơi này từng xảy ra án mạng.',
                'price'       => 92000,
                'image'       => 'themes\images\products\hokkaido.jpg',
                'quantity'    => 100,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);

    }
}
