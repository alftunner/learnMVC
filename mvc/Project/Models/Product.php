<?php
    namespace Project\Models;
    use \Core\Model as Model;

    class Product extends Model
    {
        public function getOneProduct($slug)
        {
            $query = "SELECT * FROM product WHERE slug = $slug";
            return $this->getOneByQuery($query);

            //return ['name'=>'product1', 'price'=>100];
        }
        public function getAllProducts($field, $order='asc')
        {
            $query = "SELECT * FROM product ORDER BY $field $order";

            return $this->getAllByQuery($query);

            //return ['name'=>'product1', 'price'=>100];
        }
    }