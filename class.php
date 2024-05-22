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
         public function getName() {
            return $this->name;
          }
          public function getPrice() {
            return $this->price;
          }
         }
         // インスタンス化する
          $food = new Food('potato', 250);
          //メソッドにアクセスして実行する
         $food->getName();
         $food->getPrice();
         // インスタンス$foodの各プロパティの値を出力する
         print_r($food);
         echo "<br>";
         // プロパティにアクセスし、値を出力する
         echo $food->getPrice();
         echo "<br>";
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
        public function getName() {
           return $this->name;
         }
        public function getHeight() {
           return $this->height;
         }
         public function getWeight() {
           return $this->weight;
         }
        }
        // インスタンス化する
         $animal = new Animal('dog', 60, 5000);
        //メソッドにアクセスして実行する
        $animal->getName();
        $animal->getHeight();
        $animal->getWeight();
        // インスタンス$animalの各プロパティの値を出力する
        print_r($animal);
        echo "<br>";
        // プロパティにアクセスし、値を出力する
        echo $animal->getHeight();
        echo "<br>";
      ?>
     
    </p>
      
 </body>
 
 </html>
