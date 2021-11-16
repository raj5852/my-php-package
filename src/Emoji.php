<?php
namespace Mypack;

class Emoji{
    public static function emoji($Fleter,$Lleter=null,$backgrounnd=null,$color=null){
        
        $result = "";
        $baccolor_color = ['ff0000'=>'red','0000ff'=>'blue','008000'=>'green','ffff00'=>'yellow','000000'=>'black','ffa500'=>'orange','ffffff'=>'white'];

        if($Lleter == null){
           $result .= "https://ui-avatars.com/api/?name=".$Fleter;

        }else{
           $result .= "https://ui-avatars.com/api/?name=".$Fleter."+".$Lleter;

        }
        if($backgrounnd == null){
        }else{
            $back =  array_search($backgrounnd,$baccolor_color);

            $result .= "&background=".$back;
        }
        if($color == null){
        }else{
            $col =  array_search($color,$baccolor_color);

            $result .= "&color=".$col;
        }
        
        return $result;   
    }
}