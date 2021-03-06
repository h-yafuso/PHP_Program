<?php

//if文
//if文を使うことで、条件に応じて処理を変えることができます。

//書き方

// if(条件式){
//     条件が成立する場合の処理;
// }


/*------------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------------*/


// $age =20 ;

// if($age >= 20){
//     echo '成年です' ;
// }


/*------------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------------*/

//関数を用いたif文

//issetは中身があるかどうか判定する関数で、値が入っていれば(空白も含む)trueを返す。
//emptyは中身が入っているか判定する関数で、値が入っていなければtrueを返す。

/*------------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------------*/


// if(isset($age)){
//     echo '年齢は'.$age.'です。';
// }


// $age = NULL;
// if(empty($age)){
//     echo '年齢は'.$age.'ではありません。';
// }


/*------------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------------*/

//else文
//else文はif文の条件に当てはまらなかった場合の処理を記述します。
//else文は必要がなければ記述する必要はありません。

/*------------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------------*/

// $age = 18;

// if($age >= 20){
//     echo '成人です';
// }else{
//    echo '未成年です';
// }


/*------------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------------*/

//elseif文
//elseif文はif文に加えて条件を定義することが可能です。
//また、ifelse文は複数記述することが可能です。

/*------------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------------*/


// $age = 0;

// if($age > 20){
//     echo '成人です';
// }elseif($age == 0){
//     echo '赤ん坊です';
// }else{
//     echo '未成年です';
// }