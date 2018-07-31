<?php
  session_start();
  $line1 = $_SESSION['title'];
  $line2 = $_SESSION['quotetext'];
  //$_SESSION['type']=$_POST['type'];
  $color = $_SESSION['color'];
  $type = $_SESSION['type'];
  $len = strlen($line1);
  //$picture = $_SESSION['picture'];
  $bgimage = $_POST['picture'];

  $titlecolor = $_SESSION['fontcolor'];

  $layout = $_SESSION['layoutname'];

  $titlefont = $_SESSION['titlefont'];
  $bodfont = $_SESSION['bodfont'];

  $eventdate = $_SESSION['date'];
  $eventtime = $_SESSION['time'];
  $eventvenue = $_SESSION['venue'];
  $eventwebsite = $_SESSION['website'];



  //header('Content-Disposition: Attachment;filename=image.png'); 
  header('Content-Type: image/png');


  // Create Image From Existing File
  $png_image = imagecreatefrompng('image/'.$bgimage.'.png');


  $background = imagecreatefrompng('image/background.png');
  //header image
  if($color == "black")
  {
      $head_image = imagecreatefrompng('image/'.'overlaytitle/'.$type.'/head_black.png'); //head image
  }
  else if($color =="green")
  {
      $head_image = imagecreatefrompng('image/'.'overlaytitle/'.$type.'/head_green.png'); //head image

  }
  else if($color =="red")
  {
      $head_image = imagecreatefrompng('image/'.'overlaytitle/'.$type.'/head_red.png'); //head image

  }
  else if($color =="blue")
  {
      $head_image = imagecreatefrompng('image/'.'overlaytitle/'.$type.'/head_blue.png'); //head image

  }

  //font color
  if($titlecolor=="white")
  {
          $textcolor = imagecolorallocate($png_image, 255, 255, 255);
  }
  else if($titlecolor=="yellow")
  {
    $textcolor = imagecolorallocate($png_image, 233, 255, 0);
  }
  else if($titlecolor=="blue")
  {
    $textcolor = imagecolorallocate($png_image, 0, 226, 242);
  }
  else if($titlecolor=="violet")
  {
        $textcolor = imagecolorallocate($png_image, 255, 73, 224);
  }
  

  $image_width = imagesx($png_image);  
  $image_height = imagesy($png_image);

  $opacity = 70;


  // Allocate A Color For The Text
  $white = imagecolorallocate($png_image, 255, 255, 255);

  $black = imagecolorallocate($png_image, 0, 0, 0);

  // Set Path to Title Font File
  $title_font_path = 'font/'.$titlefont.'.ttf';
  // Set Path to Body Font File
  $bod_font_path = 'font/'.$bodfont.'.ttf';

  //align title to the middle
  $text_box = imagettfbbox(45,0,$title_font_path,$line1);

  $text_width = $text_box[2]-$text_box[0];
  $text_height = $text_box[7]-$text_box[1];
  $x = ($image_width/2) - ($text_width/2);
  $y = ($image_height/2) - ($text_height/2);


  if($layout == "casuallayout1")
  {
    $headx = 0;
    $heady  = 0;
    $headdimx=1500;
    $headdimy=150;

    $backgroundx =70;
    $backgroundy =190;
    $backgrounddimx = 1230;
    $backgrounddimy = 550;

    $titlesize  = 50;
    $titleposx = $x-$len*2;
    $titleposy = 100;

    $textsize = 45;
    $textposx = 110;
    $textposy =300;

    $wordwrap = 35;
    
  }
  else if($layout == "casuallayout2")
  {
    $headx = 0;
    $heady  = 0;
    $headdimx=1500;
    $headdimy=230;

    $backgroundx =0;
    $backgroundy =0;
    $backgrounddimx = 0;
    $backgrounddimy = 0;

    $titlesize  = 60;
    $titleposx = $x-$len*2-20;
    $titleposy = 150;

    $textsize = 40;
    $textposx = 220;
    $textposy =300;

    $wordwrap = 35;
  }
  else if($layout == "casuallayout3")
  {
    $headx = 200;
    $heady  = 50;
    $headdimx=950;
    $headdimy=150;

    $backgroundx =200;
    $backgroundy =210;
    $backgrounddimx = 950;
    $backgrounddimy = 530;

    $titlesize  = 50;
    $titleposx = $x-$len*2;
    $titleposy = 150;

    $textsize = 40;
    $textposx = 220;
    $textposy =300;

    $wordwrap = 35;
  }
  else if($layout == "casuallayout4")
  {
    $headx = 0;
    $heady  = 140;
    $headdimx=800;
    $headdimy=150;

    $backgroundx =0;
    $backgroundy =310;
    $backgrounddimx = 1500;
    $backgrounddimy = 530;

    $titlesize  = 50;
    $titleposx = 5;
    $titleposy = 240;

    $textsize = 45;
    $textposx = 5;
    $textposy =380;

    $wordwrap = 43;
  }
  else if($layout == "corporatelayout1")
  {
    $headx = 0;
    $heady  = 250;
    $headdimx=1500;
    $headdimy=1500;

    $backgroundx =0;
    $backgroundy =0;
    $backgrounddimx = 1500;
    $backgrounddimy = 1500;

    $titlesize  = 65;
    $titleposx = 5;
    $titleposy = 230;

    $textsize = 45;
    $textposx = 5;
    $textposy =320;

    $wordwrap = 43;
    $opacity = 50;

  }
  else if($layout == "corporatelayout2")
  {
    $headx = 0;
    $heady  = 150;
    $headdimx=1000;
    $headdimy=100;

    $backgroundx =0;
    $backgroundy =0;
    $backgrounddimx = 1500;
    $backgrounddimy = 1500;

    $titlesize  = 35;
    $titleposx = 5;
    $titleposy = 218;

    $textsize = 50;
    $textposx = 5;
    $textposy =320;

    $wordwrap = 43;
    $opacity = 45;
  }
  else if($layout == "corporatelayout3")
  {
    $headx = 300;
    $heady  = 0;
    $headdimx=750;
    $headdimy=150;

    $backgroundx =85;
    $backgroundy =170;
    $backgrounddimx = 1200;
    $backgrounddimy = 560;

    $titlesize  = 45;
    $titleposx = $x-$len*2;
    $titleposy = 90;

    $textsize = 40;
    $textposx = 150;
    $textposy =270;

    $wordwrap = 39;
    //$opacity = 45;
  }
  else if($layout == "corporatelayout4")
  {
    $headx = 300;
    $heady  = 0;
    $headdimx=750;
    $headdimy=150;

    $backgroundx =85;
    $backgroundy =0;
    $backgrounddimx = 1200;
    $backgrounddimy = 1500;

    $titlesize  = 45;
    $titleposx = $x-$len*2;
    $titleposy = 90;

    $textsize = 40;
    $textposx = 150;
    $textposy =270;

    $wordwrap = 39;
    $opacity = 45;
  }

  else if($layout == "eventlayout1")
  {
    $headx = 0;
    $heady  = 500;
    $headdimx=1500;
    $headdimy=500;

    $backgroundx =0;
    $backgroundy =0;
    $backgrounddimx = 900;
    $backgrounddimy = 1500;

    $titlesize  = 55;
    $titleposx = 10;
    $titleposy = 560;

    $textsize = 40;
    $textposx = 10;
    $textposy =130;

    $wordwrap = 30;
    $opacity = 45;

    $dateposx=920;
    $dateposy=550;

    $timeposx=920;
    $timeposy=640;

    $venueposx=920;
    $venueposy=730;

    $websiteposx=10;
    $websiteposy=730;
    $opacity = 45;


  }

  else if($layout == "eventlayout2")
  {
    $headx = 0;
    $heady  = 0;
    $headdimx=1500;
    $headdimy=300;

    $backgroundx =0;
    $backgroundy =300;
    $backgrounddimx = 900;
    $backgrounddimy = 1500;

    $titlesize  = 65;
    $titleposx = 10;
    $titleposy = 170;

    $textsize = 40;
    $textposx = 10;
    $textposy =350;

    $wordwrap = 30;
    $opacity = 60;

    $dateposx=10;
    $dateposy=280;

    $timeposx=400;
    $timeposy=280;

    $venueposx=900;
    $venueposy=280;

    $websiteposx=10;
    $websiteposy=730;
        $opacity = 45;


  }
  else if($layout == "eventlayout3")
  {
    $headx = 0;
    $heady  = 200;
    $headdimx=1500;
    $headdimy=300;

    $backgroundx =0;
    $backgroundy =0;
    $backgrounddimx = 1500;
    $backgrounddimy = 1500;

    $titlesize  = 65;
    $titleposx = $x-$len*8;
    $titleposy = 370;

    $textsize = 40;
    $textposx = 10;
    $textposy =350;

    $wordwrap = 30;
    $opacity = 60;

    $dateposx=10;
    $dateposy=200;

    $timeposx=10;
    $timeposy=525;

    $venueposx=1220 - (strlen($eventvenue)*10);
    $venueposy=200 ;

    $websiteposx=1220 - (strlen($eventwebsite)*12);
    $websiteposy=525;
        $opacity = 45;

    }
    else if($layout == "eventlayout4")
  {
    $headx = 350;
    $heady  = 0;
    $headdimx=1500;
    $headdimy=720;

    $backgroundx =0;
    $backgroundy =200;
    $backgrounddimx = 1350;
    $backgrounddimy = 1500;

    $titlesize  = 45;
    $titleposx = 355;
    $titleposy = 190;

    $textsize = 35;
    $textposx = 355;
    $textposy =250;

    $wordwrap = 35;

    $dateposx=10;    
    $dateposy=280;

    $timeposx=10;
    $timeposy=380;

    $venueposx=10;
    $venueposy=480;

    $websiteposx=10;
    $websiteposy=760;
        $opacity = 45;

    }
     
  if($bodfont == "helvetica")
  {
    $wordwrap+=10;
  }
  else
  {
     $wordwrap+=5;
  }

  $ptr_white = imageColorAllocate($head_image,255,255,255);
  imageColorTransparent($head_image,$ptr_white);
  imageCopyMerge($png_image, $background, $backgroundx, $backgroundy, 0, 0, $backgrounddimx, $backgrounddimy, 70);

  imageCopyMerge($png_image, $head_image, $headx, $heady, 0, 0, $headdimx, $headdimy, $opacity);

  //title
  imagettftext($png_image, $titlesize, 0, $titleposx, $titleposy, $textcolor, $title_font_path, $line1);
  if($type == "events")
  {
    imagettftext($png_image, 28, 0, $dateposx, $dateposy, $textcolor, $bod_font_path, $eventdate);
    imagettftext($png_image, 28, 0, $timeposx, $timeposy, $textcolor, $bod_font_path, $eventtime);
    imagettftext($png_image, 28, 0, $venueposx, $venueposy, $textcolor, $bod_font_path, $eventvenue);
    imagettftext($png_image, 28, 0, $websiteposx, $websiteposy, $textcolor, $bod_font_path, $eventwebsite);



  }
  
    //text 
   imagettftext($png_image, $textsize, 0, $textposx, $textposy, $white, $bod_font_path, wordwrap($line2, $wordwrap, "\n"));
  // Send Image to Browser
  imagepng($png_image);
 //session_destroy();
  //imagedestroy($png_image);

?>