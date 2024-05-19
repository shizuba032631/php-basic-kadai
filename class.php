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
             // プロパティ$nameを定義する
             public $name;
             public $price;
             // メソッドを定義する
             public function show_name() {
                echo $this->name;
             }
             public function show_price() {
                echo $this->price;
             }
            }
         
         class Animal {
            // プロパティ$name,$height,$weightを定義する
            public $animal_name;
            public $height;
            public $weight;
            // メソッドを定義する
            public function set_name() {
                echo $this->animal_name;
           }
           public function show_height() {
                echo $this->height;
           }
           public function show_weight() {
                echo $this->weight;
           }
        }
         // インスタンス化する
         $humburg = new Food();
         $cat = new Animal();
         // プロパティにアクセスし、値を代入する
         $humburg->name = 'ハンバーグ' . '<br>';
         $humburg->price = '500円' . '<br>';
         $cat->animal_name = '猫' . '<br>';
         $cat->height = '25cm' . '<br>';
         $cat->weight = '1000g' . '<br>';

         //メソッドを呼び出す
         $humburg->show_name();
         $humburg->show_price();
         $cat->set_name();
         $cat->show_height();
         $cat->show_weight();
         

         print_r($humburg);
         print_r($cat);
        
        ?>
         
     </p>
 </body>
 
 </html>
