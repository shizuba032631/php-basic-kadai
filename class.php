<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>kadai_016</title>
 </head>
 
 <body>
     <p>
        <?php
        // クラスを定義する
        class Food {
         // プロパティを定義する
         private $name;
         private $price;
         // コンストラクタを定義する
         public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
          } 
        
         // メソッドを定義する
         public function show_name() {
            echo $this->name;
          }
          public function show_price() {
            echo $this->price;
          }
         }
         // インスタンス化する
         $food = new Food('potato', 250);
         // インスタンス$foodの各プロパティの値を出力する
         print_r($food);
         echo "<br>";
         // プロパティにアクセスし、値を出力する
         //echo $food->show_price();
         // クラスを定義する
        class Animal {
        // プロパティを定義する
        private $name;
        private $height;
        private $weight;
        // コンストラクタを定義する
        public function __construct(string $name, int $height, int $weight) {
           $this->name = $name;
           $this->height = $height;
           $this->weight = $weight;
         } 
       
        // メソッドを定義する
        public function show_name() {
           echo $this->name;
         }
        public function show_height() {
           echo $this->height;
         }
         public function show_weight() {
           echo $this->weight;
         }
        }
        // インスタンス化する
         $animal = new Animal('dog', 60, 5000);
        //メソッドにアクセスして実行する
        //$animal->show_name();
        //$animal->show_height();
        //$animal->show_weight();
        // インスタンス$animalの各プロパティの値を出力する
        print_r($animal);
        echo "<br>";
        //メソッドにアクセスして実行する
        $food->show_price();
        echo "<br>";
        //メソッドにアクセスして実行する
        $animal->show_weight();
        echo "<br>";
      ?>
     
    </p>
      
 </body>
 
 </html>
