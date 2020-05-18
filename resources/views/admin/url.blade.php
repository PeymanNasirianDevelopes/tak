

    @php

     $url=url()->current();
$urltitle10 = explode('cms/', $url);
$urltitle20 = $urltitle10[1];
$urltitle30 = explode('/', $urltitle20);
    if(count($urltitle30)>1)
        {


    $urltitle1 = explode('admin/', $url);
    $urltitle2 = $urltitle1[1];
    $urltitle3 = explode('/', $urltitle2);
     $urltitle4=$urltitle3[0];





      if($urltitle4=="projects"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $circle= "ایجاد پروژه ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $circle= "ویرایش پروژه ";
    }
        }


}
    else{
        $circle="مشاهده پروژه ها";
    }
      }

//-------------------------------------------------------------------



      if($urltitle4=="menus"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $circle= "ایجاد منو ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $circle= "ویرایش منو ";
    }
        }


}
    else{
        $circle="مشاهده منو ها";
    }
      }

//-------------------------------------------------------------------

      if($urltitle4=="submenus"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $circle= "ایجاد زیر منو ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $circle= "ویرایش زیر منو ";
    }
        }


}
    else{
        $circle="مشاهده زیر منو ها";
    }
      }

//-------------------------------------------------------------------

      if($urltitle4=="sliders"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $circle= "ایجاد اسلایدر ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $circle= "ویرایش اسلایدر ";
    }
        }


}
    else{
        $circle="مشاهده اسلاید ها";
    }
      }

//-------------------------------------------------------------------

      if($urltitle4=="fonts"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $circle= "ایجاد اسلایدر ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $circle= "ویرایش اسلایدر ";
    }
        }


}
    else{
        $circle="آیکون ها";
    }
      }

//-------------------------------------------------------------------

      if($urltitle4=="about_us"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $circle= "ایجاد درباره ما ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $circle= "ویرایش درباره ما ";
    }
        }


}
    else{
        $circle="درباره ما ";
    }
      }

//-------------------------------------------------------------------

      if($urltitle4=="feature"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $circle= "ایجاد ویژگی ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $circle= "ویرایش ویژگی ما ";
    }
        }


}
    else{
        $circle="ویژگی ها  ";
    }
      }

//-------------------------------------------------------------------

      if($urltitle4=="feature_task"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $circle= "ایجاد ویژگی ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $circle= "ویرایش ویژگی  ";
    }
        }


}
    else{
        $circle="ویژگی ها  ";
    }
      }

//-------------------------------------------------------------------



      if($urltitle4=="make_dream"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $circle= "ایجاد ویژگی ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $circle= "ویرایش بخش وسط  ";
    }
        }


}
    else{
        $circle="ویژگی ها  ";
    }
      }

//-------------------------------------------------------------------


      if($urltitle4=="circle_counter"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $circle= "ایجاد پیشرفت ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $circle= "ویرایش پیشرفت کار  ";
    }
        }


}
    else{
        $circle="پیشرفت کار ";
    }
      }

//-------------------------------------------------------------------







}
    else{
        $circle="داشبرد مدیریت";
    }










       echo $circle;

    @endphp

