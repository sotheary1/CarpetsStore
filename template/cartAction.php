<?php
    include "../autoloader.php";
    // echo " Hello Ary !!!"
  //  include '../lib/dbcon.php';
    $cart = new Cart;
    $products = Product::getProducts();

    if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
      if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])){

          $products = Product::getProducts();
          $singleData = Product::viewSingleData($_GET['id']);
          //$productID = $_GET['id'];
          // get product details
        //  $query = $db->query("SELECT * FROM products WHERE id = $id ");
        //  $row = $query->fetch_assoc();

          $itemData = array(
                      'id'    => $singleData->getId(),
                      'title' => $singleData->getTitle(),
                      'price' =>$singleData->getPrice(),
                      'quantity'=>1
                      );
                      $insertItem = $cart->insert($itemData);
                      $redirectLoc = $insertItem?'viewCart.php':'hand.php';
                      header("Location: ".$redirectLoc);
      }elseif ($_GET['action'] == 'updateCartItem' && !empty($singleData->getId())){
          $itemData = array(
                      'rowid' => $singleData->getId(),
                      'quantity' => $_GET['quantity']
                    );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
      }elseif ($_GET['action'] == 'removeCartItem' && !empty($_GET['id'])){
        $deleteItem = $cart->remove($_GET['id']);
        header("Location: viewCart.php");
      }elseif($_GET['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['sessCustomerID'])){
        // insert order details into database
        $insertOrder = DB::doQuery("INSERT INTO orders (customer_id, Amount) VALUES ('".$_SESSION['sessCustomerID']."', '".$cart->total()."')");
        if($insertOrder){
           $orderID = DB::insert_id;
            $res = '';
            // get cart items
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
                $res .= "INSERT INTO order_items (order_id, product_id, quantity) VALUES ('".$orderID."', '".$item['id']."', '".$item['quantity']."');";
            }
            // insert order items into database
            $insertOrderItems = DB::multi_query($res);

            if($insertOrderItems){
                $cart->destroy();
                header("Location: orderSuccess.php?id=$orderID");
            }else{
                header("Location: checkout.php");
            }
        }else{
            header("Location: checkout.php");
        }
    }else{
        header("Location: hand.php");
    }
}else{
    header("Location: hand.php");
}

 ?>
