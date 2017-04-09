<?php

use App\Model\CMS\Entity as E;
use Illuminate\Database\Seeder;

class EntitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // page
        $page = new E();
        $page->slug = 'page';
        $page->description = "Страница";
        $page->save();

        // blog post
        $post = new E();
        $post->slug = "post";
        $post->description = "посте";
        $post->save();

        // sjop-categories
        $category = new E();
        $category->slug = "shop_category";
        $category->description = "категория в магазине";
        $category->save();

        // shop-items
        $item = new E();
        $item->slug = "shop_item";
        $item->description = "Карточка товара в магазине";
        $item->save();

        // 
    }
}
