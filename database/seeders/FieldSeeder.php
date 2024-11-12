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
            'main_image' => 'https://placehold.co/600x400',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'order' => 1,
            'tags' => "5x5, 7x7, 11x11",
            'hours_type' => '1h, 1.5h, 2h',
            'enclosures' => 'parking, changing rooms, showers',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://placehold.co/600x400',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'tags' => "5x5, 7x7, 11x11",
            'hours_type' => '1h, 1.5h, 2h',
            'enclosures' => 'parking, changing rooms, showers',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://placehold.co/600x400',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
            'order' => 10,
            'tags' => "5x5, 7x7, 11x11",
            'hours_type' => '1h, 1.5h, 2h',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://placehold.co/600x400',
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
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://placehold.co/600x400',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://placehold.co/600x400',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://placehold.co/600x400',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://placehold.co/600x400',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://placehold.co/600x400',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://placehold.co/600x400',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://placehold.co/600x400',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://placehold.co/600x400',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://placehold.co/600x400',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://placehold.co/600x400',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://placehold.co/600x400',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://placehold.co/600x400',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://placehold.co/600x400',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://placehold.co/600x400',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://placehold.co/600x400',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://placehold.co/600x400',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://placehold.co/600x400',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://placehold.co/600x400',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://placehold.co/600x400',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://placehold.co/600x400',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
        ]);
        Field::create([
            'user_id' => 1,
            'city_id' => 1,
            'category_id' => 1,
            'main_image' => 'https://placehold.co/600x400',
            'name' => 'ملعب عمان الدولي',
            'address' => 'عمان، العبدلي',
            'location' => 'https://maps.app.goo.gl/c8g8dRoytEP7WNfM6',
            'discount' => '20%',
            'terms' => 'يجب إظهار الكود عند الطلب. صالح حتى نهاية الشهر.',
            'rating' => '4.5,10',
            'images' => json_encode(['https://cdne-totv8-prod.azureedge.net/media/34057/the-stadium.jpg', 'https://wtpartnership.com.au/wp-content/uploads/2022/09/allianz-stadium-2022aug-2.jpg', 'https://img.freepik.com/premium-photo/soccer-stadium-defocus-background-evening-arena-with-crowd-fans-d-illustration_336913-361.jpg?w=2000']),
            'min_price' => 50,
            'status' => 'active',
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
