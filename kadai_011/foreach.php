<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>kadai_011</title>
 </head>
 
 <body>
     <p>
         <?php
         $vesitables = ['名前:' => '玉ねぎ', '値段:' => 200, '産地:' => '北海道'];

         //  配列$vesitable_dataの要素を1つずつ順番に出力する
        foreach ($vesitables as $key => $value) {
          echo $key .  $value . '<br>';
        }
        ?>
     </p>
 </body>
 
 </html>
