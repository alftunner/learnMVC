<?php
    namespace Project\Controllers;
    use \Core\Controllers as Controller;
    use \Project\Models\Product as ProductModel;

        class Product extends Controller
        {
            public function one($slug)
            {
                $productModel = new ProductModel();
                $product = $productModel->getOneProduct($slug);

                $this->render('one.php', [
                    'name' => $product['name'],
                    'price' => $product['price'],
                    'test' => '!'
                ]);
            }
            public function all($field, $order)
            {
                $productModel = new ProductModel();
                $products = $productModel->getAllProducts();

                $this->render('all.php', [
                    'products' => $products,
                    'test' => '!'
                ]);
            }

        }
