<?php
    namespace Project\Models;
    use \Core\Model as Model;

    class Product extends Model
    {
        public function getOneProduct($id)
        {
            $query = "SELECT * FROM product WHERE id = $id";
            return $this->getOneByQuery($query);

            //return ['name'=>'product1', 'price'=>100];
        }
        public function getAllProducts()
        {
            $query = "SELECT * FROM product";
            return $this->getAllByQuery($query);

            //return ['name'=>'product1', 'price'=>100];
        }
    }