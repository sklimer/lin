<!DOCTYPE html>
<html lang="ru">
<head>
<?php include $_SERVER['DOCUMENT_ROOT']. "/config/config-data-all-lin.php"; ?>
<?php 
$brend = '«IVC»';
$collection = 'Texville';
$name = 'Дуб Степная рябь';
$width = []; //ширина ['1.0','1.5','2.0', '2.5', '3.0', '3.5', '4.0', '4.5', '5.0']
$life = 15;               //срок службы 
$region = 'Россия';        // Страна производитель

$type = 'полукоммерческий';                                // Тип                  коммерческий полукоммерческий бытовой 
                                                     //          Общая информация:
$class = '23, 33';                               // Класс применения         22
$class_description = 'Цифра 23 означает бытовой класс применения с усиленной нагрузкой (вторая цифра 3) на линолеум. Цифра 33 означает класс применения «полукоммерческий», с высокой степени нагрузки (вторая цифра 3).';                               
// описание класса Цифра 23 означает бытовой класс применения с усиленной нагрузкой (вторая цифра 3) на линолеум. Цифра 32 означает класс применения «коммерческий», со средней степени нагрузки (вторая цифра 2). Цифра 41 означает класс применения «коммерческий», с низкой степени нагрузки (вторая цифра 1).
//Цифра 33 означает класс применения «полукоммерческий», с высокой степени нагрузки (вторая цифра 3). Цифра 42 означает класс применения «коммерческий», со средней степени нагрузки (вторая цифра 2).
$coating_thickness = '3,7 мм';                  // Толщина покрытия         2,1 мм
$coating_protective = '0,5 мм';                 // Толщина защитного слоя   0,2 мм
                                                //          Характеристики:
$add_coating_protective = 'Дополнительный защитный PU-лак';       // Дополнительное защитное покрытие     PU Guard Protection 
$method_laying = 'На клей';                // Способ укладки               На клей
$changing_linear_dimensions = '≤ 0,4 %';  // Изменение линейных размеров  ≤ 0,4 %
$deformation = '≤ 0,8 мм';                // Абсолютная остаточная деформация     ≤ 0,5 мм
$double_base = 'Да';                     // Двойная основа              Да
$heating = 'Можно, max 27°C';            // Использование для теплых полов       Можно, max 27°C
$chairs = 'Низкая';                      // Устойчивость к воздействию роликов кресел    Низкая
$relief = 'Дерево';                     // Рельеф   Дерево
$weight =  '2,5 кг';                    // Вес 1 м² 1,4 кг
                                        //          Экологическая безопасность:
$fire_department = 'КМ5';               // Класс пожарной опасности КМ5
$temperature  =  'Да';                   // Стойкость к перепадам температуры    Да
$certificate = 'Да';                     // Наличие сертификата  Да
$ecology_certificate = 'Да';            // Экологический сертификат Да ТЕСТ

$name_img_folder = 'ivc/ivc_texville/dub-stepnaya-ryab/'; 
$full_url = 'https://str.city/linoleum/ivc-texville-dub-stepnaya-ryab';            // Полная ссылка на страницу 
$bg_img = $name_img_folder . 'bg-dub-stepnaya-ryab.webp';            // Ссылка на background     после images/linoleum/
$video_img = $name_img_folder.'video-dub-stepnaya-ryab.webp';            // Ссылка на превью к видео  после assets/images/
$img = $name_img_folder.'dub-stepnaya-ryab.webp';                                     // Ссылка на основную картинку 
$original_img = $name_img_folder . 'original-dub-stepnaya-ryab.webp';            // Ссылка на оригинал после images/linoleum/
$bg_img2 = 'https://str.city/linoleum/juteks-flash-italian-oak-4';            // Ссылка на background   
$qr_img = $name_img_folder . 'qr.gif';           // Ссылка на qr code после images/linoleum/ 

$art_lin = $art_lin_101;
$min_price_lin = $min_price_lin_101;
$max_price_lin = $max_price_lin_101;
$art_lin = $art_lin_101;
$price = $price_101;
$in_stock_lin = $in_stock_lin_101;
$up_date_lin = $up_date_lin_101;
 
?> 
<?php foreach( $price as $value ){if ($value[0]){$art_lin = $value[2];break;}}?>
<?php foreach( $price as $value ){if ($value[0]){array_push($width, $value[1]);}}?>

  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>Линолеум <?echo $brend?> <?echo $collection?> <?echo $name?> <?echo $type?> от <?echo $min_price_lin?> руб/м² купить в Стерлитамаке</title>
  <meta name="description" content="В магазине «СтройСити» в Стерлитамаке продается <?echo $type?> линолеум «Ютекс» <?echo $collection?> <?echo $name?>. Выберите и купите линолеум от <?echo $min_price_lin?> руб за 1 м², цена зависит от ширины. Ширина линолеума: 1,5; 2,0; 2,5; 3,0; 3,5; 4,0 метра">
  <meta name="keywords" content="линолеум <?echo $brend?>, линолеум <?echo $collection?> <?echo $name?>, купить линолеум ютекс, линолеум стерлитамак, линолеум цена">
  <meta property="og:image" content="https://str.city/assets/images/linoleum/<?echo $bg_img?>">
  <link rel="image_src" href="https://str.city/assets/images/linoleum/<?echo $bg_img?> ">
  <meta name="twitter:image" content="https://str.city/assets/images/linoleum/<?echo $bg_img?> ">
  <meta property="og:image" content="https://str.city/assets/images/linoleum/<?echo $img?>">
  <link rel="image_src" href="https://str.city/assets/images/linoleum/<?echo $img?>">
  <meta property="og:image" content="https://str.city/assets/images/linoleum/<?echo $video_img?>">
  <link rel="image_src" href="https://str.city/assets/images/linoleum/<?echo $video_img?>">
  <meta property="og:image" content="https://str.city/assets/images/linoleum/linoleum-juteks-flash-italian-oak-4-1.jpg">
  <link rel="image_src" href="https://str.city/assets/images/linoleum/linoleum-juteks-flash-italian-oak-4-1.jpg">
  <meta property="og:title" content="Линолеум «<?echo $brend?>» <?echo $collection?> <?echo $name?> от <?echo $min_price_lin?> руб/м² в Стерлитамаке">
  <meta property="og:type" content="website">
  <meta property="og:url" content=<?echo $full_url?>>
  <meta property="og:description" content="В магазине «СтройСити» в Стерлитамаке продается <?echo $type?> линолеум «Ютекс» <?echo $collection?> <?echo $name?>. Выберите и купите линолеум от <?echo $min_price_lin?> руб за 1 м², цена зависит от ширины. Ширина линолеума: 1,5; 2,0; 2,5; 3,0; 3,5; 4,0 метра">
  <meta name="robots" content="index, follow">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#2b58cc">
  <link rel="canonical" href=<?echo $full_url?>>
  <link type="image/x-icon" rel="shortcut icon" href="/favicon.ico">
  <link type="text/css" rel="stylesheet" href="/assets/css/additional.css">
</head>
<body>
<div style="margin-top: -21px;"><?php include "function-juteks.php";?></div>
<? echo $navigation; ?>
<section class="header1 head1 mbr-parallax-background" id="header1-m" style="background-image: url('../../../assets/images/linoleum/<?echo $bg_img?>');">
 <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(6 2 1);">
  </div>
   <div class="container">
    <div class="row justify-content-md-center">
     <div class="mbr-white col-md-12">
      <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">Линолеум <?echo $type?><br><?echo $brend?> <?echo $collection?> <?echo $name?></h1>
      <h2 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-2">Купить линолеум <a class="text-primary" href="#price"><img src="/assets/images/ivc-logo.webp" alt="IVC® — бельгийский производитель линолеума, фабрика IVC Group расположена в Бельгии и в России." style="margin-top: -2px; -webkit-user-select: none"></a> Российского производителя</h2>
      <p class="mbr-text align-center pb-3 mbr-fonts-style display-9">В магазине «СтройСити» в Стерлитамаке предлагаем купить <?echo $type?><br>линолеум <?echo $brend?> из коллекции <?echo $collection?> шириной: <?php foreach ($width as $v) {echo '<span class="otrez">',$v,'</span>';}?> метра.</p>
     <div class="mbr-section-btn align-center">
      <a class="btn btn-md btn-primary display-4" href="#price"><span class="mbri-arrow-down mbr-iconfont mbr-iconfont-btn"></span>Смотрим</a>
      <a class="btn btn-md btn-white-outline display-4" href="#buy"><span class="mbri-target mbr-iconfont mbr-iconfont-btn"></span>Заказываем</a>
    </div>
   </div>
  </div>
 </div>
</section>
<section class="product1" id="price">
    <div class="container"><p class="display-7" style="padding-left: 15px;"><a class="text-black" href="/">Главная</a> / <a class="text-black" href="/catalog/">Каталог</a> / <a class="text-black" href="/linoleum/#catalog-all-leoline">Линолеум</a> / Линолеум <?echo $brend?> <?echo $collection?> <?echo $name?></p>
        <div class="media-container-row">
            <div class="col-12 col-md-12">
                <div class="media-container-row">
                    <div class="mbr-figure" style="width: 100%; padding-top: 30px;">
<h2 class="mbr-section-title mbr-black pb-0 mbr-fonts-style display-2">Линолеум <?echo $brend?> <span style="font-size:1.7rem;"><?echo $collection?> <?echo $name?></span></h2>
<div class="code">
<p class="display-8"><span>Артикул: <?echo $art_lin?></span> <span>Страна: <?echo $region?> </span> <span>Производитель: IVC Group™</span> <span>Срок службы: <?echo $life?> лет</span>
<br><span><a class="text-info" href="#foto-gallery1">Фотографии</a></span> <span><a class="text-info" href="#video">Видео</a></span> <span><a class="text-info" href="#faq">Вопросы</a></span> <span><a class="text-info" href="#reviews">Отзывы</a></span></p>
</div>
<div class="coupon"><span><?echo $in_stock_lin?></span></div><img src="/assets/images/linoleum/<?echo $img?>" alt="Линолеум <?echo $brend?> <?echo $collection?> <?echo $name?>" style="-webkit-user-select: none">
<div class="mbr-section-btn pt-3 align-center">
<a href="" class="btn btn-sm btn-success display-6 spoilers_links"><span class="mbri-touch mbr-iconfont mbr-iconfont-btn"></span> <span style="border-bottom: 1px dotted #4d90fe;">Цена <?echo $min_price_lin?>&#8201;&#8381;</span></a>
<div class="spoilers_body">
<p class="display-6" style="padding-top: 10px;">
<?php
foreach( $price as $value ){
    if ($value[0]){
        echo'<br>Цена: '.$value[0].' ₽ '.'(ширина '.$value[1].' м, артикул: '.$value[2].')';
    }

}
?>
</p>

</div>
<a class="btn btn-sm btn-secondary display-6" href="#buy"><span class="mbri-idea mbr-iconfont mbr-iconfont-btn"></span> Заказать</a>
<p class="display-8"><sup>∗</sup><span class="textaddr" data-title="Нажмите ↑ на цену, чтобы посмотреть стоимость нужной ширины линолеума.">Цена</span> линолеума указана за 1 м², в зависимости от ширины.<br>Обновлено: <?echo $up_date_lin?> &gt; Сегодня: <?php echo date("d.m.Y");?></p>
</div></div>
  <div class="media-content">

<section class="section-table table1" style="padding-top: 30px;">
  <div class="container container-table">
      <div class="table-wrapper">
        <div class="container scroll">
<h2 class="mbr-section-title mbr-black pb-0 mbr-fonts-style display-2">Характеристики линолеума</h2>
          <table class="table"  >
            <thead>
             <tr class="table-heads ">
              <th class="head-item mbr-fonts-style display-7">Общие данные:</th>
              <th class="head-item mbr-fonts-style display-7">&ensp;</th>
             </tr>
            </thead>
            <tbody>
             <tr> 
              <td class="body-item mbr-fonts-style display-7"><span class="textaddrs" data-title="Ширина линолеума в действующей коллекции. Обратите внимание, данная ширина завода производителя. Со своей стороны, магазин может дополнительно раскроить линолеум по вашим размерам."><span class="mbri-question mbr-iconfont mbr-iconfont-btn"></span></span> Ширины линолеума, м</td>
              <td class="body-item mbr-fonts-style display-7" style="width: 42%;"> <?php foreach ($width as $v) {echo '<span class="narezka">',$v,'</span>';}?></td>
             </tr><tr>
              <td class="body-item mbr-fonts-style display-7"><span class="textaddrs" data-title="Услуга раскроя является бесплатной. Магазин «СтройСити» дополнительно может раскроить линолеум по требуемой ширине. К примеру, вам нужен линолеум шириной 3,4 метра, в этом случаи магазин раскроит на требуемую ширину у себя в магазине. Вам не нужно озадачиваться нарезкой линолеума у себя по месту. Данная услуга избавит покупателя от лишних хлопот, траты времени и сэкономит деньги."><span class="mbri-question mbr-iconfont mbr-iconfont-btn"></span></span> Раскрой линолеума</td>
              <td class="body-item mbr-fonts-style display-7">Бесплатно</td>
             </tr><tr>
              <td class="body-item mbr-fonts-style display-7"><span class="textaddrs" data-title='<?echo $class_description?>'><span class="mbri-question mbr-iconfont mbr-iconfont-btn"></span></span> Класс применения</td>
              <td class="body-item mbr-fonts-style display-7"><?echo $class?></td>
             </tr><tr>
              <td class="body-item mbr-fonts-style display-7"><span class="textaddrs" data-title="Общая толщина покрытия линолеума, вместе с защитным слоем, регламентированного по ГОСТ 11529-86 п.2.2."><span class="mbri-question mbr-iconfont mbr-iconfont-btn"></span></span> Толщина покрытия</td>
              <td class="body-item mbr-fonts-style display-7"><?echo $coating_thickness?></td>
             </tr><tr>
              <td class="body-item mbr-fonts-style display-7"><span class="textaddrs" data-title="Толщина лицевого защитного прозрачного слоя, регламентируется стандартом EN 428"><span class="mbri-question mbr-iconfont mbr-iconfont-btn"></span></span> Толщина защитного слоя</td>
              <td class="body-item mbr-fonts-style display-7"><?echo $coating_protective?></td>
             </tr><tr>
              <td class="body-item mbr-fonts-style display-7" style="background: #fff;border-top: 0px;" colspan="2">Дополнительные технические характеристики и условия эксплуатации линолеума <?echo $brend?> смотрите ниже.</td>
              <td style="background: #fff;border-top: 0px;width: 1px;">&nbsp;</td>
             </tr></tbody>
          </table>
</div>
</div>
 <div><a class="spoilers_links" href=""><span style="border-bottom: 1px dotted #4d90fe;">Характеристики</span></a>
  <div class="spoilers_body">
   <table class="table"  >
    <thead>
     <tr class="table-heads ">
      <th class="head-item mbr-fonts-style display-7">Характеристики:</th>
      <th class="head-item mbr-fonts-style display-7">&ensp;</th>
     </tr>
    </thead>
    <tbody>
     <tr> 
      <td class="body-item mbr-fonts-style display-7">Название коллекции</td>
      <td class="body-item mbr-fonts-style display-7"><?echo $collection?></td>
     </tr><tr>
      <td class="body-item mbr-fonts-style display-7">Название линолеума</td>
      <td class="body-item mbr-fonts-style display-7"><?echo $name?></td>
     </tr><tr>
      <td class="body-item mbr-fonts-style display-7">Единица производства продукции</td>
      <td class="body-item mbr-fonts-style display-7">Рулон</td>
     </tr><tr>
      <td class="body-item mbr-fonts-style display-7">Дополнительное защитное покрытие</td>
      <td class="body-item mbr-fonts-style display-7"><?echo $add_coating_protective?></td>
     </tr><tr>
      <td class="body-item mbr-fonts-style display-7">Направление укладки</td>
      <td class="body-item mbr-fonts-style display-7">В одном направлении</td>
     </tr><tr>
      <td class="body-item mbr-fonts-style display-7">Способ укладки</td>
      <td class="body-item mbr-fonts-style display-7"><?echo $method_laying?></td>
     </tr>
    </tbody>
   </table>    
 </div></div>

 <div style="padding-top: 10px;"><a class="spoilers_links" href=""><span style="border-bottom: 1px dotted #4d90fe;">Технические свойства</span></a>
  <div class="spoilers_body">
   <table class="table"  >
    <thead>
     <tr class="table-heads ">
      <th class="head-item mbr-fonts-style display-7">Свойства:</th>
      <th class="head-item mbr-fonts-style display-7">&ensp;</th>
     </tr>
    </thead>
    <tbody>
     <tr> 
      <td class="body-item mbr-fonts-style display-7"><span class="textaddrs" data-title="ГОСТ 11529-86"><span class="mbri-question mbr-iconfont mbr-iconfont-btn"></span></span> Изменение линейных размеров, не более</td>
      <td class="body-item mbr-fonts-style display-7"><?echo $changing_linear_dimensions?></td>
     </tr><tr>
      <td class="body-item mbr-fonts-style display-7"><span class="textaddrs" data-title="ГОСТ 11529, ISO 24343-1"><span class="mbri-question mbr-iconfont mbr-iconfont-btn"></span></span> Абсолютная остаточная деформация</td>
      <td class="body-item mbr-fonts-style display-7"><?echo $deformation?></td>
     </tr><tr>
      <td class="body-item mbr-fonts-style display-7"><span class="textaddrs" data-title="Вспененная или двойная основа основания линолеума. Структура напольного винилового покрытия <?echo $brend?> выглядит как многослойный пирог и последовательность такая: двойная основа, стеклохолст, основа для печати дизайна, рисунок, защитный слой, защитный слой <?echo $add_coating_protective?>."><span class="mbri-question mbr-iconfont mbr-iconfont-btn"></span></span> Двойная основа</td>
      <td class="body-item mbr-fonts-style display-7"><?echo $double_base?></td>
     </tr><tr>
      <td class="body-item mbr-fonts-style display-7"><span class="textaddrs" data-title="Можно применять систему устройства теплого пола."><span class="mbri-question mbr-iconfont mbr-iconfont-btn"></span></span> Использование для теплых полов</td>
      <td class="body-item mbr-fonts-style display-7"><?echo $heating?></td>
     </tr><tr>
      <td class="body-item mbr-fonts-style display-7"><span class="textaddrs" data-title="Стандарт EN 425"><span class="mbri-question mbr-iconfont mbr-iconfont-btn"></span></span> Устойчивость к воздействию роликов кресел</td>
      <td class="body-item mbr-fonts-style display-7" style="width: 30%;"><?echo $chairs?></td>
     </tr><tr>
      <td class="body-item mbr-fonts-style display-7">Рельеф</td>
      <td class="body-item mbr-fonts-style display-7"><?echo $chairs?></td>
     </tr><tr>
      <td class="body-item mbr-fonts-style display-7">Вес 1 м²</td>
      <td class="body-item mbr-fonts-style display-7"><?echo $weight?></td>
     </tr>
    </tbody>
   </table>        
</div>
</div>

 <div style="padding-top: 10px;"><a class="spoilers_links" href=""><span style="border-bottom: 1px dotted #4d90fe;">Экологическая безопасность</span></a>
  <div class="spoilers_body">
   <table class="table"  >
    <thead>
     <tr class="table-heads ">
      <th class="head-item mbr-fonts-style display-7">Безопасность:</th>
      <th class="head-item mbr-fonts-style display-7">&ensp;</th>
     </tr>
    </thead>
    <tbody>
     <tr> 
      <td class="body-item mbr-fonts-style display-7"><span class="textaddrs" data-title="Класс пожарной опасности материала."><span class="mbri-question mbr-iconfont mbr-iconfont-btn"></span></span> Класс пожарной опасности</td>
      <td class="body-item mbr-fonts-style display-7"><?echo $fire_department?></td>
     </tr><tr>
      <td class="body-item mbr-fonts-style display-7">Стойкость к перепадам температуры</td>
      <td class="body-item mbr-fonts-style display-7"><?echo $temperature?></td>
     </tr><tr>
      <td class="body-item mbr-fonts-style display-7">Наличие сертификата</td>
      <td class="body-item mbr-fonts-style display-7"><?echo $certificate?></td>
     </tr><tr>
      <td class="body-item mbr-fonts-style display-7">Экологический сертификат</td>
      <td class="body-item mbr-fonts-style display-7"><?echo $ecology_certificate?></td>
     </tr>
    </tbody>
   </table> 


        </div>
        <div class="container table-info-container">
            <p class="mbr-text mbr-fonts-style display-6" style="padding-top: 25px;"><a href="/assets/images/linoleum/<?echo $qr_img?>" download><img src="/assets/images/linoleum/<?echo $qr_img?>" height=69 width=69 alt="QR-код на линолеум <?echo $brend?> <?echo $collection?> <?echo $name?> магазина «СтройСити» в Стерлитамаке"  style="-webkit-user-select: none; float:left; margin: 0 10px 0 0;"></a> <i>Адрес: г. Стерлитамак, ул. Западная, д. 18Д</i><br><span style="text-align: center;">✆ <a class="text-primary" href="tel:+73473201102">+7&nbsp;(3473)&nbsp;201&nbsp;102</a> ✆ <a class="text-primary" href="tel:+79177779184">+7&nbsp;(917)&nbsp;777&nbsp;91&nbsp;84</a></span></p>
        </div>
      </div>
    </div>
</section>
     </div>
    </div><p class="mbr-fonts-style panel-text display-6" style="padding-top: 30px;">В магазине «СтройСити» в Стерлитамаке, продается <?echo $type?> <strong>линолеум <?echo $brend?> <?echo $collection?> <?echo $name?></strong> по цене от <?echo $min_price_lin?> до <?echo $max_price_lin?> руб/м² в зависимости от выбранной вами ширины. Страна производитель <?echo $region?>. Срок службы <?echo $life?> лет. У нас в магазине можно не только купить линолеум <?echo $collection?> <?echo $name?> шириной <?php foreach ($width as $v) {echo '<span class="alert-info">',$v,'</span>';}?> метров, но и заказать раской — это бесплатная услуга. В магазине представлено большое разнообразие бытового, полукоммерческого и коммерческого линолеума. Цветовая гамма и разнообразие дизайна, позволит выбрать наилучшее и подходящее решение.</p>
<div class="youtube" id="76n_gGzxaXo" data-params="modestbranding=0&amp;showinfo=0&amp;controls=1&amp;vq=hd1080" data-image="../../../assets/images/linoleum/<?echo $video_img?>" style="width: 100%; height: 608px; background-image: url(../../../assets/images/linoleum/<?echo $video_img?>);"><div class="play"></div></div>
<p class="display-6 pt-3">Магазин строительно-отделочных материалов «СтройСити», предлагает посетителям из большого выбора востребованных коллекций — купить <a class="text-primary" href="/linoleum/">линолеум в Стерлитамаке</a> российских производителей «<span class="textaddr" data-title="Компания «Комитекс Лин» — основана в 2002 году и уже имеет «стаж» <?php echo date("Y") - 2002; ?> с хвостиком лет. Является полностью Отечественным производителем. На сегодняшний день <?php echo date("d.m.Y"); ?> линолеум «Komitex» не  имеет  конкурентов  по износостойкости  из-за  феноменальной  твердости  и  отсутствия  микропор  в  своей  структуре. В результате  линолеум  устойчив  к загрязнениям  и обладает антибактериальными  свойствами, что подтверждается международным сертификатом ISO 22196.">Комитекс Лин</span>», «<span class="textaddr" data-title="Группа компаний «Таркетт» работает на рынке напольных покрытия с 1886 года и является одним из крупнейших производителей полов в мире. «Tarkett» сегодня — это быстро развивающая группа компаний, она объединяет 28 современных производственных центров и поставляет свою продукцию в более чем 100 стран по всему миру.">Tarkett</span>», «<span class="textaddr" data-title="Компания «Ютекс» — это вертикально интегрированная компания с мировым именем по производству напольных покрытий. «Juteks» образована в 1939 году. Все подразделения компании «Juteks», в том числе российский завод, в октябре 2012 года вошли в состав международной промышленной группы компаний «Beaulieu International Group» со штаб квартирой в Бельгии. Компания «Juteks» стал одним из подразделений головной организации «Beaulieu International Group», которая объединяет 9 компаний (в их числе «Juteks») с мировыми именами.">Juteks</span>», «<span class="textaddr" data-title="Группа компаний «Опус» — это отечественный дистрибьютор покрытий для пола и стен. Одно из направлений — это реализация напольных ПВХ-покрытий, в частности линолеума. Линолеум выпускается под брендом «iDEAL». ГК «Опус», одноименное название Opus Group на английском. Входит в подразделение «Juteks».">iDEAL</span>», «<span class="textaddr" data-title="Путь основания линии производства линолеума под брендом IVC Group начинается с 1998 г. Бельгийская компания быстро завоёвывает нишу разработки напольных покрытий. На <?php echo date("Y");?> год владеет 10 производственными линиями в Бельгии, Люксембурге, США, России. В 2019 году запускает в «чистом поле» новый завод в России, в г. Орёл, отвечающий всем вызовам современного производства линолеума гетерогенного типа.">Leoline</span>». А также, из напольных покрытий, есть в наличии хорошо зарекомендовавшее себя напольное покрытие, это <a class="text-primary" href="/kvarcvinilovaya-plitka/">кварцвиниловая плитка</a>, либо же <a class="text-primary" href="/vinilovaya-plitka/">виниловая плитка</a>. А для любителей ламинированных поверхностей, предлагаем рассмотреть <a class="text-primary" href="/laminat/">ламинат</a> для укладки на пол, обшивки стены или потолка.</p>
<p class="display-6">Инвестируйте в создание красивого и функционального интерьера вашего пола, от кухни до ванной комнаты. Компания «Ютекс» — один из лидеров производства напольных покрытий, в том числе ПВХ-покрытий и является признанным брендом во всем мире. Juteks в России имеет собственный промышленный комплекс и независимые лаборатории тестирования на безопасность и долговечность. Из всех разновидностей линолеума, предлагаем доступные цены для широкого круга покупателей, достойный и солидный выбор коллекционного ряда.</p>
<p class="mbr-fonts-style panel-text display-8" style="border: 1px solid #dcdcdc;padding: 15px;"><i>Магазин «СтройСити» — официальный дилер «Juteks» на территории Республики Башкортостан.</i> Мы уверены, теперь вы знаете, где в Стерлитамаке можно <strong><a class="text-info" href="#buy">купить линолеум</a></strong>!</p>
   </div>
  </div>
 </div>
</section>
<section class="mbr-gallery mbr-slider-carousel photo-review-1" id="foto-gallery1">
    <div class="container"><h2 class="mbr-section-title mbr-black pb-0 mbr-fonts-style display-2" style="padding-left: 15px;">Фотографии линолеума в магазине «СтройСити»</h2>
<p class="mbr-fonts-style panel-text display-6" style="padding-left: 15px;">Визуальное представление стендов линолеума. Именно такие витрины с линолеумом наши гости видят в магазине «СтройСити» в Стерлитамаке. Большое разнообразие коллекций линолеума, бесплатный раскрой на любую требуемую ширину, высокое качество обслуживания, внимание к посетителю и предложение только качественного линолеума — именно это ценят наши посетители и гости магазина и покупают линолеум у нас.</p>
        <div><!-- Filter --><!-- Gallery --><div class="mbr-gallery-row">
          <div class="mbr-gallery-layout-default">
           <div>
            <div>
             <div class="mbr-gallery-item mbr-gallery-item--p5" data-video-url="false">
             <div href="#linolium-juteks" data-slide-to="0" data-toggle="modal">
             <img src="/assets/images/linoleum/<?echo $original_img?>" alt="Линолеум  в магазине «СтройСити» фото №1" height=260 width=539 style="-webkit-user-select: none ">
             <span class="icon-focus"></span>
             <span class="mbr-gallery-title mbr-fonts-style display-7">Линолеум в магазине фото №1</span>
            </div>
           </div>
            <div class="mbr-gallery-item mbr-gallery-item--p5" data-video-url="false">
             <div href="#linolium-juteks" data-slide-to="1" data-toggle="modal">
             <img src="/assets/images/linoleum/linolium-juteks-v-magazibe-stroycity-2-min.jpg" alt="Линолеум в магазине «СтройСити» фото №2" style="-webkit-user-select: none">
             <span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7">Линолеум в магазине фото №2</span>
            </div>
           </div>
            <div class="mbr-gallery-item mbr-gallery-item--p5" data-video-url="false">
             <div href="#linolium-juteks" data-slide-to="2" data-toggle="modal">
              <img src="/assets/images/linoleum/linolium-juteks-v-magazibe-stroycity-3-min.jpg" alt="Линолеум в магазине «СтройСити» фото №3" style="-webkit-user-select: none">
              <span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7">Линолеум в магазине фото №3</span>
             </div>
            </div>
             <div class="mbr-gallery-item mbr-gallery-item--p5" data-video-url="false">
              <div href="#linolium-juteks" data-slide-to="3" data-toggle="modal">
             <img src="/assets/images/linoleum/linolium-juteks-v-magazibe-stroycity-4-min.jpg" alt="Линолеум в магазине «СтройСити» фото №4" style="-webkit-user-select: none">
             <span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7">Линолеум в магазине фото №4</span>
             </div>
            </div>
           </div>
          </div>
<div class="clearfix"></div></div></div>
<!-- Lightbox -->
          <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="linolium-juteks"><div class="modal-dialog"><div class="modal-content">
          <div class="modal-body">
           <div class="carousel-inner">
            <div class="carousel-item"><img src="/assets/images/linoleum/<?echo $original_img?>" alt="Линолеум в магазине «СтройСити» фото №1" style="-webkit-user-select: none"></div>
             <div class="carousel-item"><img src="/assets/images/linoleum/linolium-juteks-v-magazibe-stroycity-2.jpg" alt="Линолеум в магазине «СтройСити» фото №2" style="-webkit-user-select: none"></div>
              <div class="carousel-item"><img src="/assets/images/linoleum/linolium-juteks-v-magazibe-stroycity-3.jpg" alt="Линолеум в магазине «СтройСити» фото №3" style="-webkit-user-select: none"></div>
               <div class="carousel-item active"><img src="/assets/images/linoleum/linolium-juteks-v-magazibe-stroycity-4.jpg" alt="Линолеум в магазине «СтройСити» фото №4" style="-webkit-user-select: none"></div></div>
                <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#linolium-juteks">
                <span class="mbri-left mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only">Назад</span></a>
                <a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#linolium-juteks">
                <span class="mbri-right mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only">Вперед</span></a>
                <a class="close" href="#" role="button" data-dismiss="modal"><span class="sr-only">Закрыть</span></a>
               </div>
 </div></div></div></div></div>
</section>
<section class="mbr-gallery mbr-slider-carousel photo-review-1" id="foto-gallery2">
    <div class="container">
        <div><!-- Filter --><!-- Gallery --><div class="mbr-gallery-row">
          <div class="mbr-gallery-layout-default">
           <div>
            <div>
             <div class="mbr-gallery-item mbr-gallery-item--p4" data-video-url="false">
             <div href="#linolium-juteks-foto" data-slide-to="0" data-toggle="modal">
             <img src="/assets/images/linoleum/vitrina-s-linoleumom-1-min.jpg" alt="Витрина с линолеумом «Juteks» №1" style="-webkit-user-select: none">
             <span class="icon-focus"></span>
             <span class="mbr-gallery-title mbr-fonts-style display-7">Витрина с линолеумом «Juteks» №1</span>
            </div>
           </div>
            <div class="mbr-gallery-item mbr-gallery-item--p4" data-video-url="false">
             <div href="#linolium-juteks-foto" data-slide-to="1" data-toggle="modal">
             <img src="/assets/images/linoleum/vitrina-s-linoleumom-2-min.jpg" alt="Витрина с линолеумом «Juteks» №2" style="-webkit-user-select: none">
             <span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7">Витрина с линолеумом «Juteks» №2</span>
            </div>
           </div>
             <div class="mbr-gallery-item mbr-gallery-item--p4" data-video-url="false">
              <div href="#linolium-juteks-foto" data-slide-to="2" data-toggle="modal">
             <img src="/assets/images/linoleum/vitrina-s-linoleumom-3-min.jpg" alt="Витрина с линолеумом «Juteks» №3" style="-webkit-user-select: none">
             <span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7">Витрина с линолеумом «Juteks» №3</span>
             </div>
            </div>
           </div>
          </div>
<div class="clearfix"></div></div></div>
<!-- Lightbox -->
          <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="linolium-juteks-foto"><div class="modal-dialog"><div class="modal-content">
          <div class="modal-body">
           <div class="carousel-inner">
            <div class="carousel-item"><img src="/assets/images/linoleum/<?echo $original_img?>" alt="Линолеум «IVC» в магазине «СтройСити» фото №1" style="-webkit-user-select: none"></div>
             <div class="carousel-item"><img src="/assets/images/linoleum/vitrina-s-linoleumom-2.jpg" alt="Линолеум «IVC» в магазине «СтройСити» фото №2" style="-webkit-user-select: none"></div>
               <div class="carousel-item active"><img src="/assets/images/linoleum/vitrina-s-linoleumom-3.jpg" alt="Линолеум «IVC» в магазине «СтройСити» фото №3" style="-webkit-user-select: none"></div></div>
                <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#linolium-juteks-foto">
                <span class="mbri-left mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only">Назад</span></a>
                <a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#linolium-juteks-foto">
                <span class="mbri-right mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only">Вперед</span></a>
                <a class="close" href="#" role="button" data-dismiss="modal"><span class="sr-only">Закрыть</span></a>
               </div>
 </div></div></div></div></div>
</section>
<section class="cont-1" id="opisanie" style="padding-top: 20px;">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 col-md-12 mbr-fonts-style display-6">
При выборе линолеума, мы часто сомневаемся, какой взять, учитываем материал из которого он сделан, его износостойкость и внешний дизайн. 
Мы поможем вам определиться. Вряд ли существует, более демократичное и более популярное напольное покрытие, чем линолеум — не дорогой, простой в укладке и уходе. Разнообразие фактур и расцветок просто не знает границ. <a href="" class="spoilers_links" style="border-bottom: 1px dotted #4d90fe;">Показать ещё</a>
<div class="spoilers_body">
<p class="display-6" style="padding-top: 10px;">Список достоинств линолеума продолжает его износостойкость, хорошая теплоизоляция, шумоизоляция и экономичность. Благодаря этим качествам, мы часто видим линолеум в качестве напольного покрытия в магазинах, кафе, больницах, школах и других общественных учреждений.</p>
<p class="display-6">По износостойкости, линолеум принято классифицировать на следующие типы: бытовой, полукоммерческий и коммерческий.</p>
<p class="display-6"><strong>Коммерческий линолеум</strong> предназначен в первую очередь для производственных помещений и отличается самой высокой степенью износостойкости. Но раздумывая как правильно выбрать линолеум, смело выбирайте его для коридоров, холлов, прихожих и других часто посещаемых помещений своего дома.</p>
<p class="display-6">Коммерческий линолеум бывает гомогенным не отличающимся большим выбором расцветок, или многослойным, гетерогенным износостойким материалом, на очень прочной основе.</p>
<p class="display-6"><strong>Полукоммерческий линолеум</strong> — прочен, износостоек, отличается более широким разнообразием расцветок и предназначен для помещений с высокой проходимостью. Если, например, для пола в гостиную ваш выбор пал на линолеум, и на вопрос какой лучше, выбирайте полукоммерческий.</p>
<p class="display-6">Полукоммерческий линолеум — это отличное напольное покрытие для комнат, где стоит тяжелая мебель, передвигаются кресла и столики на колесиках, и постоянно «топчется» много людей.</p>
<p class="display-6"><strong>Бытовой линолеум</strong> отличается самой широкой цветовой гаммой и множеством расцветок. В зависимости от предполагаемых условий эксплуатации, оптимальный линолеум для конкретного помещения можно выбрать по <span class="textaddr" data-title="Смотрите класс применения.">маркировке</span>, в соответствии с европейской системой классификации поддерживаемой и в России.</p>
<p class="display-6">И так, согласно европейской системе классификации, принято делить помещение на 3 типа:</p>
<p class="display-6"><strong>1 тип</strong> — жилые помещения, обозначаются цифрой «2». 
<br>Пример класса применения: <span style="background: #ffd54f;padding: 4px;color:#000;font-weight:400;">21</span>
<br><strong>2 тип</strong> — офисные помещения, обозначаются цифрой «3».
<br>Пример класса применения: <span style="background: #ffd54f;padding: 4px;color:#000;font-weight:400;">31</span>
<br><strong>3 тип</strong> — производственные помещение, их цифра «4».
<br>Пример класса применения: <span style="background: #ffd54f;padding: 4px;color:#000;font-weight:400;">41</span>.</p>
<h3 class="mbr-section-title mbr-black pb-0 mbr-fonts-style display-2" style="padding-left: 15px;">Степень нагрузки на напольное покрытие также определяется цифрами</h3>
<p class="display-6">Цифра 1 — низкая нагрузка.
<br>Пример класса применения: <span style="background: #ffd54f;padding: 4px;color:#000;font-weight:400;">31</span></p>
<p class="display-6">Цифра 2 — средняя нагрузка.
<br>Пример класса применения: <span style="background: #ffd54f;padding: 4px;color:#000;font-weight:400;">32</span></p>
<p class="display-6">Цифра 3 — высокая нагрузка.
<br>Пример класса применения: <span style="background: #ffd54f;padding: 4px;color:#000;font-weight:400;">33</span></p>
<p class="display-6">Цифра 4 — очень высокая нагрузка. 
<br>Пример класса применения: <span style="background: #ffd54f;padding: 4px;color:#000;font-weight:400;">34</span></p>
<p class="display-6">Соответствующая маркировка на линолеуме, как и на <a class="text-primary" href="/laminat/">ламинат</a>е, имеет вид рисунка пиктограммы с изображением дома или человечков и цифры рядом с ними. Это служит подсказкой производителям, какой линолеум выбрать в том или ином случаи.</p>
<p class="display-6">По маркировке можно определить, что линолеум класса <span style="background: #ffd54f;padding: 4px;color:#000;font-weight:400;">21</span> подойдёт для спальни. В кухню, для небольшой семьи лучше класть линолеум <span style="background: #ffd54f;padding: 4px;color:#000;font-weight:400;">23</span> класса. А дому большого семейства вряд ли подойдет линолеум, класса ниже, чем <span style="background: #ffd54f;padding: 4px;color:#000;font-weight:400;">31</span>.</p>
<p class="display-6">Предположить, выдержит ли линолеум натиск высоких каблуков или нагрузку ножек тяжелой мебели, можно взглянув на основу материала. Чем выше плотность линолеума, тем выше износостойкость напольного покрытия.</p>
<p class="display-6">Вообще, чем тяжелее линолеум, тем он прочнее, но этот показатель <i><span class="textaddr" data-title="Технические характеристики, в том числе и вес линолеума указаны в описании к каждому линолеума на сайте «СтройСити», т.е. на данном сайте.">сложно проверить</span></i> в магазине или сравнить с аналогом.</p>
<p class="display-6">Альтернативный способ оценки плотности линолеума — нужно надавить на материал пальцем. Если поверхность упругая и под давлением не изменяется её толщина, значит, плотность основы отвечает нормам эксплуатации.</p>
<p class="display-6">Принимая решение, какой линолеум выбрать для квартиры, важно не забыть, что это не только новое качество пола, но и важный элемент вашего дизайна. Дизайн способен наполнить помещение новым содержанием и создать в нем особое настроение.</p>
<p class="display-6">Линолеум светлых прохладных оттенков, зрительно увеличивает помещение, а теплые оттенки наполняют его уютом. Однообразный повторяющийся рисунок линолеума, успокаивает человека, а яркие контрастные детали наполняют его энергией.</p>
<p class="display-6" style="padding-top: 10px;">Популярный производитель полов «Juteks» предоставляет качественный линолеум на Российском рынке. Покупайте линолеум «Juteks» в магазине «СтройСити» в Стерлитамаке, либо посмотрите полный <a class="text-primary" href="/linoleum/">каталог линолеума</a>, на данном сайте.</p>
<div class="mbr-section-btn align-center">
<a class="btn btn-md btn-secondary display-3" href="#buy"><span class="mbri-idea mbr-iconfont mbr-iconfont-btn"></span> Заказать</a>
</div>
    </div>
   </div>
  </div>
 </div>
</section>
<section class="video-cont mbr-fullscreen mbr-parallax-background" id="header13-12" style="background-image: url(../../../assets/images/linoleum/bg-kakoj-linoleum-vybrat.jpg);">
 <div class="container">
  <div class="mbr-media show-modal align-center pb-4 mb-4 pt-5" data-modal=".modalWindow">
   <span class="mbri-play mbr-icofont" ></span>
  </div>
 </div>
<div>
<div class="modalWindow" style="display: none;">
 <div class="modalWindow-container">
  <div class="modalWindow-video-container">
   <div class="modalWindow-video">
    <iframe width="100%" height="100%" frameborder="0" allowfullscreen="1" data-src="https://www.youtube.com/watch?v=9Y672ITloTU&t"></iframe>
    </div>
     <a class="close" role="button" data-dismiss="modal"><span aria-hidden="true" class="mbri-close mbr-iconfont closeModal"></span><span class="sr-only">Закрыть</span></a>
    </div>
   </div>
  </div>
 </div>
</section>

<section class="order-form" id="buy">
 <div class="container">
  <div class="media-container-row">
   <div class="mbr-figure" style="width: 100%; padding-left: 15px;">
    <h2 class="mbr-section-title mbr-black pb-3 mbr-fonts-style display-2">Заказать линолеум «IVC»</h2>
    <? echo $orderform; ?>
   </div>
  <div class="media-content">
   <h2 class="mbr-section-title mbr-black pb-2 mbr-fonts-style display-2">Как купить линолеум «IVC»?</h2>
  <div class="mbr-section-text mbr-white pb-3">
   <p class="mbr-text mbr-fonts-style display-6">В поле формы заказа укажите имя, телефон, сообщение, проверочный код и нажмите отправить. Будьте уверены, мы знаем, ваш выбор — <strong>линолеум <?echo $brend?> <?echo $collection?> <?echo $name?></strong>.</p><p class="mbr-text mbr-fonts-style display-6">Оперативно <span class="textaddr" data-title="Не забудьте указать требуемую ширину линолеума и его длину.">подготовим</span> информацию по заказу или заданному вопросу и уже сегодня <span class="textaddr" data-title="Перезвоним в рабочее время. Если посчитаем нужным, можем связаться и не в рабочее. В любом случае, оставленный заказ через форму, обрабатывается нами в течение 60 секунд."><?php echo date("d.m.Y");?></span> перезвоним к вам.</p>
   <p class="mbr-text mbr-fonts-style display-6">Также вы сами можете позвонить или придти в магазин строительно-отделочных материалов — «СтройСити».</p>
  <p class="mbr-text mbr-fonts-style display-6" style="padding-top: 25px;"><a href="/assets/images/linoleum/<?echo $qr_img?>" download><img src="/assets/images/linoleum/<?echo $qr_img?>" height=69 width=69 alt="QR-код на линолеум <?echo $brend?> <?echo $collection?> <?echo $name?> магазина «СтройСити» в Стерлитамаке"  style="-webkit-user-select: none; float:left; margin: 0 10px 0 0;"></a> <i>Адрес: г. Стерлитамак, ул. Западная, д. 18Д</i><br><span style="text-align: center;">✆ <a class="text-primary" href="tel:+73473201102">+7&nbsp;(3473)&nbsp;201&nbsp;102</a> ✆ <a class="text-primary" href="tel:+79177779184">+7&nbsp;(917)&nbsp;777&nbsp;91&nbsp;84</a></span></p>
    </div>
   </div>
  </div>
 </div>
</section>
<? echo $video; ?>
<? echo $faq; ?>
<? echo $reviews; ?>
<? echo $footer; ?>
<? echo $cssjs; ?>

<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbri-down mbr-iconfont"></i></a></div>
</body>
</html>