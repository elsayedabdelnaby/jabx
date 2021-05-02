<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = 'Casa Cook Kos';
        $product->short_description = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.';
        $product->slug = 'casa_cook_kos';
        $product->description = 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.';
        $product->is_publish = 1;
        $product->display_in_header = 1;
        $product->image = 'project-38.jpg';
        $product->sort = 1;
        $product->meta_title = 'Casa Cook Kos';
        $product->meta_description = 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.';
        $product->meta_keywords = 'Casa|Nemo';
        $product->save();
    }
}
