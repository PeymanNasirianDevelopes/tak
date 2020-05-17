

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
            $title= "ایجاد پروژه ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $title= "ویرایش پروژه ";
    }
        }


}
    else{
        $title="مشاهده پروژه ها";
    }
      }

//-------------------------------------------------------------------



      if($urltitle4=="menus"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $title= "ایجاد منو ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $title= "ویرایش منو ";
    }
        }


}
    else{
        $title="مشاهده منو ها";
    }
      }

//-------------------------------------------------------------------

      if($urltitle4=="submenus"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $title= "ایجاد زیر منو ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $title= "ویرایش زیر منو ";
    }
        }


}
    else{
        $title="مشاهده زیر منو ها";
    }
      }

//-------------------------------------------------------------------

      if($urltitle4=="sliders"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $title= "ایجاد اسلایدر ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $title= "ویرایش اسلایدر ";
    }
        }


}
    else{
        $title="مشاهده اسلاید ها";
    }
      }

//-------------------------------------------------------------------

      if($urltitle4=="fonts"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $title= "ایجاد اسلایدر ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $title= "ویرایش اسلایدر ";
    }
        }


}
    else{
        $title="آیکون ها";
    }
      }

//-------------------------------------------------------------------

      if($urltitle4=="about_us"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $title= "ایجاد درباره ما ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $title= "ویرایش درباره ما ";
    }
        }


}
    else{
        $title="درباره ما ";
    }
      }

//-------------------------------------------------------------------

      if($urltitle4=="feature"){
    if(count($urltitle3)>1){

    $urltitle5=$urltitle3[1];
        if($urltitle5=="create"){
            $title= "ایجاد ویژگی ";

    }
        else{
               $urltitle6=$urltitle3[2];

   if ($urltitle6=="edit"){
        $title= "ویرایش ویژگی ما ";
    }
        }


}
    else{
        $title="ویژگی ها  ";
    }
      }

//-------------------------------------------------------------------










}
    else{
        $title="داشبرد مدیریت";
    }










       echo $title;

    @endphp

