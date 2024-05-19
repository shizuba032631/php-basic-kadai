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
             public function show_price(string $name) {
                $this->name = $name;
            }
         }
         class Animal {
            // プロパティ$name,$height,$weightを定義する
            public $name;
            public $height;
            public $weight;
            // メソッドを定義する
            public function show_height(string $height) {
               $this->height = $height;
           }
        }
 
         // インスタンス化する
         $humburg = new Food();
         $cat = new Animal();
         // プロパティにアクセスし、値を代入する
         $humburg->name = 'ハンバーグ' . '<br>';
         $cat->weight = '1000g' . '<br>';
         // プロパティにアクセスし、値を出力する
         print_r($humburg->name);
         print_r($cat->weight);
         ?>
     </p>
 </body>
 
 </html>
