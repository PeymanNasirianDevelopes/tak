

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





      if($urltitle4=="tabs"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $circle= "ایجاد تب ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $circle= "ویرایش تب ";
    }
        }


}
    else{
        $circle="تب ها ";
    }
      }

//-------------------------------------------------------------------





      if($urltitle4=="testimonials"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $circle= "ایجاد نظر ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $circle= "ویرایش نظر ";
    }
        }


}
    else{
        $circle="نظرات مشتریان";
    }
      }

//-------------------------------------------------------------------




      if($urltitle4=="features_2"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $circle= "ایجاد ویژگی 2 ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $circle= "ویرایش ویژگی 2 ";
    }
        }


}
    else{
        $circle="ویژگی 2";
    }
      }

//-------------------------------------------------------------------







      if($urltitle4=="video"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $circle= "ایجاد ویدئو ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $circle= "ویرایش ویدئو ";
    }
        }


}
    else{
        $circle="ویرایش ویدئو ";
    }
      }

//-------------------------------------------------------------------


      if($urltitle4=="plans"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $circle= "ایجاد پلن جدید ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $circle= "ویرایش پلن ";
    }
        }


}
    else{
        $circle="پلن ها ";
    }
      }

//-------------------------------------------------------------------



      if($urltitle4=="landing"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $circle= "ایجاد لندینگ ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $circle= "ویرایش لندینگ ";
    }
        }


}
    else{
        $circle="لندینگ ";
    }
      }

//-------------------------------------------------------------------


      if($urltitle4=="clients"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $circle= "ایجاد مشتری ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $circle= "ویرایش مشتری ";
    }
        }


}
    else{
        $circle="مشتریان ما ";
    }
      }

//-------------------------------------------------------------------



      if($urltitle4=="contact"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $circle= "ایجاد تماس با ما ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $circle= "ویرایش تماس با ما ";
    }
        }


}
    else{
        $circle="تماس با ما ";
    }
      }

//-------------------------------------------------------------------


      if($urltitle4=="logo"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $circle= "ایجاد لوگو ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $circle= "ویرایش لوگو ";
    }
        }


}
    else{
        $circle="لوگو ها ";
    }
      }

//-------------------------------------------------------------------




      if($urltitle4=="team"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $circle= "ایجاد شخص جدید ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $circle= "ویرایش شخص ";
    }
        }


}
    else{
        $circle="اعضای تیم ";
    }
      }

//-------------------------------------------------------------------

















































}
    else{
        $circle="داشبرد مدیریت";
    }










       echo $circle;

    @endphp

