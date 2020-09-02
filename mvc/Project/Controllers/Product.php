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

                $this->layout = 'index.php';
                $this->title = '';

                $this->render('one.php', [
                    'name' => $product['name'],
                    'price' => $product['price'],
                    'title' => "Показ страницы {$product['name']}"
                ]);
            }
            public function all($field, $order)
            {
                $productModel = new ProductModel();
                $products = $productModel->getAllProducts();

                $this->render('all.php', [
                    'products' => $products,
                    'title' => "Список всех продуктов",
                    'desc' => 'Описание'
                ]);
            }

        }
