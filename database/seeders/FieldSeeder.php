<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
{

    // $categories = ['football', 'basketball', 'volleyball', 'tennis', 'table tennis', 'handball', 'badminton', 'padel'];
    // public $tags = [
    //     {
    //         name: 'football',
    //         tags: ['4x4', '5x5', '5x5 داخلي', '6x6', '6x6 داخلي', '8x8', '9x9', '10x10', '11x11'],
    //     },
    //     {
    //         name: 'padel',
    //         tags: ['1v1', '2v2', '2x2 داخلي']
    //     },
    //     {
    //         name: 'basketball',
    //         tags: ['3v3', 'كامل الملعب', 'نصف الملعب']
    //     },
    //     {
    //         name: 'volleyball',
    //         tags: ['ملعب خارجي', 'ملعب داخلي']
    //     },
    //     {
    //         name: 'badminton',
    //         tags: ['ملعب خارجي', 'ملعب داخلي']
    //     },
    //     {
    //         name: 'tennis',
    //         tags: ['ملعب خارجي', 'ملعب داخلي']
    //     },
    //     {
    //         name: 'table tennis',
    //         tags: ['تنس طاولة']
    //     },
    //     {
    //         name: 'table tennis',
    //         tags: ['تنس طاولة']
    //     },
    //     {
    //         name: 'handball',
    //         tags: ['ملعب داخلي']
    //     }
    // ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSJeLqD_ATusHD9CD9e9-wSyG-ZsWksNmTUQ&s',
            'name' => 'ملعب هيثم الأسطوري العظيم',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'order' => -3,
            'tags' => "5x5, 7x7, 11x11",
            'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
            'enclosures' => 'parking, changing rooms, showers',
            'sports' => 'football, basketball, volleyball',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://www.shutterstock.com/image-photo/soccer-stadium-field-day-mood-600nw-2407664653.jpg',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://assets.goal.com/images/v3/blt4a73783848a321c6/d4e530341d22680854e38d7014827d1c0b4d5092.jpg?auto=webp&format=pjpg&width=3840&quality=60','https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'order' => -2,
            'status' => 'active',
            'tags' => "7x7, 8x8",
            'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
            'enclosures' => 'parking, changing rooms, showers',
            'sports' => 'football, basketball, volleyball',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://media.istockphoto.com/id/643632382/photo/dramatic-soccer-stadium.jpg?s=612x612&w=0&k=20&c=pkRbBPX880o6gSaqDRuNO30z7Zcf_zxLN3LFYDrqmSQ=',
            'name' => 'ملعب عجلون المدرسي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'order' => -1,
            'tags' => "6x6",
            'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
            'sports' => 'football, basketball, volleyball',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://sydneyfc.com/wp-content/uploads/sites/2/2022/08/SFS00013.jpg?w=750',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'order' => 20,
            'sports' => 'football, basketball, volleyball',
                'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://static.euronews.com/articles/stories/08/67/38/38/1200x675_cmsv2_30e81aae-c5f4-5842-8202-16aaf3e99f74-8673838.jpg',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
            'sports' => 'football, basketball, volleyball',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://static.euronews.com/articles/stories/08/67/38/38/1200x675_cmsv2_30e81aae-c5f4-5842-8202-16aaf3e99f74-8673838.jpg',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
            'sports' => 'football, basketball, volleyball',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://static.euronews.com/articles/stories/08/67/38/38/1200x675_cmsv2_30e81aae-c5f4-5842-8202-16aaf3e99f74-8673838.jpg',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
            'sports' => 'football, basketball, volleyball',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://static.euronews.com/articles/stories/08/67/38/38/1200x675_cmsv2_30e81aae-c5f4-5842-8202-16aaf3e99f74-8673838.jpg',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
            'sports' => 'football, basketball, volleyball',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://static.euronews.com/articles/stories/08/67/38/38/1200x675_cmsv2_30e81aae-c5f4-5842-8202-16aaf3e99f74-8673838.jpg',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
            'sports' => 'football, basketball, volleyball',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://static.euronews.com/articles/stories/08/67/38/38/1200x675_cmsv2_30e81aae-c5f4-5842-8202-16aaf3e99f74-8673838.jpg',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
            'sports' => 'football, basketball, volleyball',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://static.euronews.com/articles/stories/08/67/38/38/1200x675_cmsv2_30e81aae-c5f4-5842-8202-16aaf3e99f74-8673838.jpg',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
            'sports' => 'football, basketball, volleyball',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://static.euronews.com/articles/stories/08/67/38/38/1200x675_cmsv2_30e81aae-c5f4-5842-8202-16aaf3e99f74-8673838.jpg',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
            'sports' => 'football, basketball, volleyball',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://static.euronews.com/articles/stories/08/67/38/38/1200x675_cmsv2_30e81aae-c5f4-5842-8202-16aaf3e99f74-8673838.jpg',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
            'sports' => 'football, basketball, volleyball',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://static.euronews.com/articles/stories/08/67/38/38/1200x675_cmsv2_30e81aae-c5f4-5842-8202-16aaf3e99f74-8673838.jpg',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
            'sports' => 'football, basketball, volleyball',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://static.euronews.com/articles/stories/08/67/38/38/1200x675_cmsv2_30e81aae-c5f4-5842-8202-16aaf3e99f74-8673838.jpg',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
            'sports' => 'football, basketball, volleyball',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://static.euronews.com/articles/stories/08/67/38/38/1200x675_cmsv2_30e81aae-c5f4-5842-8202-16aaf3e99f74-8673838.jpg',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
            'sports' => 'football, basketball, volleyball',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://static.euronews.com/articles/stories/08/67/38/38/1200x675_cmsv2_30e81aae-c5f4-5842-8202-16aaf3e99f74-8673838.jpg',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
            'sports' => 'football, basketball, volleyball',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://static.euronews.com/articles/stories/08/67/38/38/1200x675_cmsv2_30e81aae-c5f4-5842-8202-16aaf3e99f74-8673838.jpg',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
            'sports' => 'football, basketball, volleyball',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://static.euronews.com/articles/stories/08/67/38/38/1200x675_cmsv2_30e81aae-c5f4-5842-8202-16aaf3e99f74-8673838.jpg',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
            'sports' => 'football, basketball, volleyball',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://static.euronews.com/articles/stories/08/67/38/38/1200x675_cmsv2_30e81aae-c5f4-5842-8202-16aaf3e99f74-8673838.jpg',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
            'sports' => 'football, basketball, volleyball',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://static.euronews.com/articles/stories/08/67/38/38/1200x675_cmsv2_30e81aae-c5f4-5842-8202-16aaf3e99f74-8673838.jpg',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
            'sports' => 'football, basketball, volleyball',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://static.euronews.com/articles/stories/08/67/38/38/1200x675_cmsv2_30e81aae-c5f4-5842-8202-16aaf3e99f74-8673838.jpg',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
            'sports' => 'football, basketball, volleyball',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://static.euronews.com/articles/stories/08/67/38/38/1200x675_cmsv2_30e81aae-c5f4-5842-8202-16aaf3e99f74-8673838.jpg',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
            'sports' => 'football, basketball, volleyball',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://static.euronews.com/articles/stories/08/67/38/38/1200x675_cmsv2_30e81aae-c5f4-5842-8202-16aaf3e99f74-8673838.jpg',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
            'sports' => 'football, basketball, volleyball',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://static.euronews.com/articles/stories/08/67/38/38/1200x675_cmsv2_30e81aae-c5f4-5842-8202-16aaf3e99f74-8673838.jpg',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'hours_type' => json_encode([
                ['type' => '1h', 'factor' => 1],
                ['type' => '1.5h', 'factor' => 1.4],
                ['type' => '2h', 'factor' => 1.72],
            ]),
            'sports' => 'football, basketball, volleyball',
        ]);
        // seed many to many table with categories
        // $categories = Category::all();
        // foreach (Field::all() as $stadium) {
        //     $stadium->categories()->attach(
        //         $categories->random(rand(1, 3))->pluck('id')->toArray()
        //     );
        // }
    }
}
