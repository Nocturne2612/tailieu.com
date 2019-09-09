<?php

   class Home extends CFormModel
   {

       public function tableName()
       {
           return 'games';
       }
       public function getGameByTypeID($type_id)
       {
           $array = DataHelper::selectAll('games', 'image,id,game_name', "`game_type`='" . (int)$type_id .
               "' and `game_status`='1' ", 'id DESC', 5);
           return $array;
       }
       public function getGameByPromotion()
       {
           $array = DataHelper::selectAll('games', 'image,id,game_name,discount', " discount <> '' and `game_status`='1'",
               'discount DESC', 12);
           return $array;
       }

       public function getNewsPromotion()
       {
           $array = DataHelper::selectAll('news', 'image,id,title,create_time,update_time',
               " `feature_news` = '3' and `status`='1'", 'create_time DESC', 10); //`feature_news` = '3' tin khuyễn mại
           return $array;
       }
   }
