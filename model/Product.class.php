<?php

class Product {

  private $id;
  private $title;
  private $description;
  private $price;
  private $stock;
  private $image;
  private $category_id;


      public function getId(){
        return $this->id;
      }

      public function getTitle(){
        return $this->title;
      }

      public function getDescription(){
        return $this->description;
      }

      public function getPrice(){
        return $this->price;
      }

      public function getImage(){
        return $this->image;
      }

      public function getStock(){
        return $this->stock;
      }
      public function getCategory_id(){
        return $this->category_id;
      }

  /********* for set method ********************/

      public function setId($id){
        $this->id = $id;
      }
      public function setTitle($title){
        $this->title = $title;
      }
      public function setDescription($description){
        $this->description = $description;
      }
      public function setPrice($price){
        $this->price = (float) price;
      }
      public function setImage($image){
        $this->image = $image;
      }
      public function setStock($stock){
        $this->stock = (int) stock;
      }
      public function setCategory_id($category_id){
        $this->category_id = (int) category_id;
      }


  public function __toString(){
    return sprintf("%d, %s, %d", $this->id,
                                 $this->title,
                                 $this->description,
                                 $this->price
                                // $this->catergory_name
                                 );
                              }



// For Select the products_table from Database by only same category_id

    static public function getProducts( $orderBy ="category_id"){
        $orderByStr = '';
            if(in_array($orderBy,['id', 'title','description', 'price','stock','image','category_id']))
               {
                  $orderByStr = " ORDER BY $orderBy";
              }

            $products = array();
            $res = DB::doQuery("SELECT * FROM products $orderByStr");

            if($res){
              while ($product = $res ->fetch_object(get_class())) {
                $products[] = $product;
            }
        }
        return $products;
    }
/****** For Select Product By ID *********************/
    static public function getProductById($id){
      $id = (int) $id;
      $res = DB::doQuery("SELECT * FROM products WHERE id = $id ");
      if($res){
          if($products = $res -> fetch_object(get_class())){
            return $products;
          }
      }
      return null;
    }


/********* For Delect by ID *****************/
    static public function delete($id){
      $id = (int) $id;
      $res = DB::doQuery(" DELETE FROM products WHERE id = $id ");
      return $res != null;
    }

/********  NEW FUNCTION -For Insert To DB *************/
/******** OLD For Insert To DB *************/
    static public function insert($values){
      if($stmt = DB:: getInstance()->prepare ("INSERT INTO products
                    (title, description,price,stock, image,category_id) VALUES
                      (?,?,?,?,?,?)")){
                    if( $stmt->bind_param('ssii', $values['title'],
                       $values['description'], $values['$price'],
                       $values['stock'], $values['image'], $values['category_id'])) {
                         if ($stmt->execute()){
                           return true;
                         }
                       }
                    }
                    return false;
    }

/**** For Update the value ***************/
    public function update($values){
      $db =DB::getInstance();
      $this->title = $db->escape_string($values['title']);
      $this->description = $db->escape_string($values['description']);
      $this->price = (float)$values['price'];
      $this->stock = (int)$values['stock'];
      $this->image = $db->escape_string($values['image']);
      $this->category_id = (int)$values['category_id'];
    }


/****** For Save ***************************/
    public function save(){
      $sql = sprintf("UPDATE products SET title='%s', description='%s',
                      price='%d', stock='%d', image='%s', category_id='%d';
                      WHERE id = %id;", $this->title, $this->description, $this->price,
                      $this->stock, $this->image, $this->category_id, $this->id );
            $res = DB:: doQuery($sql);
            return $res != null;
    }

    /****** Get Single Data ***************************/
        public function ViewSingleData($id){
              $res = DB::doQuery("SELECT * FROM products WHERE id = $id ");
            //  $db =DB::getInstance();
            if($res){
                if($products = $res -> fetch_object(get_class())){
                  return $products;
                }
            }
            return null;
            }
    /****** For Search  ***************************/
        public function search($requestArray){
            $res = DB::doQuery("SELECT * FROM `products` WHERE `title` LIKE '%".$requestArray['search']."%' ");
          //  $db =DB::getInstance();
            $products = array();
              if($res){
                while ($product = $res ->fetch_object(get_class())) {
                  $products[] = $product;
                      }
                }
                return $products;
          }
    /****** For Get all Keywords Search  ***************************/
      public function getAllKeywords(){
          $allKeywords = array();
          $WordsArr = array();
          $products = array();

          $products = $this->getProducts();
            foreach ($products as $oneData) {
              $allKeywords[] = trim($oneData->title);
            }

          $products = $this->getProducts();
            foreach ($products as $oneData) {
              $eachString= strip_tags($oneData->title);
              $eachString=trim( $eachString);
              $eachString= preg_replace( "/\r|\n/", " ", $eachString);
              $eachString= str_replace("&nbsp;","",  $eachString);

              $WordsArr = explode(" ", $eachString);

                 foreach ($WordsArr as $eachWord){
                      $allKeywords[] = trim($eachWord);
                   }
          }
      // for each search field block end

      return array_unique($allKeywords);
    }
}
