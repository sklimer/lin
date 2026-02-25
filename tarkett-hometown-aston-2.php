<!DOCTYPE html>
<html lang="ru">
<head>
<?php include $_SERVER['DOCUMENT_ROOT']. "/config/config-data-all-lin.php"; ?>
<?php 
$brend = '«Tarkett»';
$collection = 'Hometown';
$name = 'Aston 2';
$width = []; //ширина ['1.0','1.5','2.0', '2.5', '3.0', '3.5', '4.0', '4.5', '5.0']
$life = 15;               //срок службы 
$region = 'Россия';        // Страна производитель

$type = 'полукоммерческий';                                // Тип                  коммерческий полукоммерческий бытовой 
                                                     //          Общая информация:
$class = '23, 32';                               // Класс применения         22
$class_description = 'Цифра 23 означает бытовой класс применения с усиленной нагрузкой (вторая цифра 3) на линолеум. Цифра 32 означает класс применения «коммерческий», со средней степени нагрузки (вторая цифра 2).';                               
// описание класса Цифра 23 означает бытовой класс применения с усиленной нагрузкой (вторая цифра 3) на линолеум. Цифра 32 означает класс применения «коммерческий», со средней степени нагрузки (вторая цифра 2). Цифра 41 означает класс применения «коммерческий», с низкой степени нагрузки (вторая цифра 1).
$coating_thickness = '4 мм';                  // Толщина покрытия         2,1 мм
$coating_protective = '0,4 мм';                 // Толщина защитного слоя   0,2 мм
                                                //          Характеристики:
$add_coating_protective = 'Дублированная';       // Тип основы      Дублированная

$method_laying = 'На клей';                // Способ укладки               На клей
$changing_linear_dimensions = '≤ 0,4 %';  // Изменение линейных размеров  ≤ 0,4 %
$noise_index = '20 дБ';                    // Индекс снижения уровня шума, не менее  20 дБ
$deformation = '≤ 1.10 мм';                // Абсолютная остаточная деформация     ≤ 0,5 мм
$double_base = 'Да';                     // Двойная основа              Да
$heating = 'Можно, max 29°C';            // Использование для теплых полов       Можно, max 27°C
$chairs = '25 г/м²';                      // Истираемость   25 г/м²
$heat_assimilation = '10,83';            // Показатель теплоусвоения, Вт/м²•К   10,83
$weight =  '2,4 кг';                    // Вес 1 м² 1,4 кг
                                        //          Экологическая безопасность:
$fire_department = 'КМ5';               // Класс пожарной опасности КМ5
$temperature  =  'Да';                   // Стойкость к перепадам температуры    Да
$certificate = 'Да';                     // Наличие сертификата  Да
$ecology_certificate = 'Да';            // Экологический сертификат Да ТЕСТ



$name_img_folder = 'tarkett/hometown-aston-2/'; 
$full_url = 'https://str.city/linoleum/tarkett-hometown-aston-2';            // Полная ссылка на страницу 
$bg_img = $name_img_folder . 'bg-hometown-aston-2.webp';            // Ссылка на background     после images/linoleum/
$video_img = $name_img_folder.'video-hometown-aston-2.webp';            // Ссылка на превью к видео  после assets/images/
$img = $name_img_folder . 'hometown-aston-2.webp';                                     // Ссылка на основную картинку 
$original_img = $name_img_folder . 'original-hometown-aston-2.webp';            // Ссылка на оригинал после images/linoleum/
#$bg_img2 = 'https://str.city/linoleum/juteks-flash-italian-oak-4';            // Ссылка на background     
$qr_img = $name_img_folder . 'qr-hometown-aston-2.gif';           // Ссылка на qr code после images/linoleum/ 

$art_lin = $art_lin_95;
$min_price_lin = $min_price_lin_95;
$max_price_lin = $max_price_lin_95;
$art_lin = $art_lin_95;
$price = $price_95;
$in_stock_lin = $in_stock_lin_95;
$up_date_lin = $up_date_lin_95;
?> 

<?php foreach( $price as $value ){if ($value[0]){$art_lin = $value[2];break;}}?>
<?php foreach( $price as $value ){if ($value[0]){array_push($width, $value[1]);}}?>

  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>Линолеум <?echo $brend?> <?echo $collection?> <?echo $name?> <?echo $type?> цена от <?echo $min_price_lin?> ₽/м² купить в Стерлитамаке</title>
  <meta name="description" content="Купить в Стерлитамаке <?echo $type?>  линолеум «Таркетт» <?echo $collection?> <?echo $name?> в магазине «СтройСити» по цене от <?echo $min_price_lin?> руб/м² до <?echo $max_price_lin?> руб/м² на все ширины. Ширина линолеума: 2,0; 2,5; 3,0; 3,5; 4,0 метра.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#2b58cc">
  <meta property="og:image" content="https://str.city/assets/images/linoleum/<?echo $bg_img?>">
  <link rel="image_src" href="https://str.city/assets/images/linoleum/<?echo $bg_img?> ">
  <meta name="twitter:image" content="https://str.city/assets/images/linoleum/<?echo $bg_img?> ">
  <meta property="og:image" content="https://str.city/assets/images/linoleum/<?echo $img?>">
  <link rel="image_src" href="https://str.city/assets/images/linoleum/<?echo $img?>">
  <meta property="og:image" content="https://str.city/assets/images/linoleum/<?echo $video_img?>">
  <link rel="image_src" href="https://str.city/assets/images/linoleum/<?echo $video_img?>">
  <meta property="og:image" content="https://str.city/assets/images/linoleum/<?echo $img?>">
  <link rel="image_src" href="https://str.city/assets/images/linoleum/<?echo $img?>">
  <meta property="og:title" content="Линолеум «Tarkett» <?echo $collection?> <?echo $name?> от <?echo $min_price_lin?> руб/м² в Стерлитамаке">
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
<div style="margin-top: -21px;"><?php include "function-tarkett.php";?></div>
<? echo $navigation; ?>
<section class="header1 head1 mbr-parallax-background" id="header1-m" style="background-image: url('../../../assets/images/linoleum/<?echo $bg_img?>');">
 <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(56 28 7);">
  </div>
   <div class="container">
    <div class="row justify-content-md-center">
     <div class="mbr-white col-md-12">
      <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">Линолеум <?echo $type?><br><?echo $brend?> <?echo $collection?> <?echo $name?></h1>
      <h2 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-2">Купить линолеум <a class="text-primary" href="#price"><img src="/assets/images/tarkett-logo.png" alt="«Tarkett» — производитель напольных покрытий" style="margin-top: -2px; -webkit-user-select: none"></a> Российского производителя</h2>
      <p class="mbr-text align-center pb-3 mbr-fonts-style display-9">В магазине «СтройСити» в Стерлитамаке предлагаем купить <?echo $type?> линолеум «Tarkett» из коллекции <?echo $collection?> шириной: <?php foreach ($width as $v) {echo '<span class="otrez">',$v,'</span>';}?> метра.</p>
     <div class="mbr-section-btn align-center">
      <a class="btn btn-md btn-primary display-4" href="#price"><span class="mbri-arrow-down mbr-iconfont mbr-iconfont-btn"></span>Смотрим</a>
      <a class="btn btn-md btn-white-outline display-4" href="#buy"><span class="mbri-target mbr-iconfont mbr-iconfont-btn"></span>Заказываем</a>
    </div>
   </div>
  </div>
 </div>
</section>
<section class="product1" id="price">
<div class="container"><p class="display-7" style="padding-left: 15px;"><a class="text-black" href="/">Главная</a> / <a class="text-black" href="/catalog/">Каталог</a> / <a class="text-black" href="/linoleum/#catalog-tarkett">Линолеум</a> / Линолеум <?echo $brend?> <?echo $collection?> <?echo $name?></p>
<div class="media-container-row">
<div class="col-12 col-md-12">
<div class="media-container-row">
<div class="mbr-figure" style="width: 100%; padding-top: 30px;">
<h2 class="mbr-section-title mbr-black pb-0 mbr-fonts-style display-2">Линолеум <?echo $brend?> <?echo $collection?> <?echo $name?></h2>
<div class="code">
<p class="display-8"><span>Артикул: <?echo $art_lin?></span> <span>Страна: <?echo $region?> </span> <span>Производитель: <a class="text-black" href="/manufacturers/tarkett" target="_blank">Tarkett™</a></span> <span>Срок службы: <?echo $life?> лет</span>
<br><span><a class="text-info" href="#foto-gallery1">Фотографии</a></span> <span><a class="text-info" href="#video">Видео</a></span> <span><a class="text-info" href="#faq">Вопросы</a></span> <span><a class="text-info" href="#reviews">Отзывы</a></span></p>
</div>
<div class="coupon"><span><?echo $in_stock_lin?></span></div><img src="/assets/images/linoleum/<?echo $img?>" alt="Линолеум <?echo $brend?> <?echo $collection?> <?echo $name?>" style="-webkit-user-select: none">
<div class="mbr-section-btn pt-3 align-center">
<a href="" class="btn btn-sm btn-success display-6 spoilers_links"><span class="mbri-touch mbr-iconfont mbr-iconfont-btn"></span> <span style="border-bottom: 1px dotted #4d90fe;">Цена <?echo $min_price_lin?>&#8201;&#8381;</span></a>
<div class="spoilers_body">
<p class="display-6" style="padding-top: 10px;">
<?php foreach( $price as $value ){if ($value[0]){echo'<br>Цена: '.$value[0].' ₽ '.'(ширина '.$value[1].' м, артикул: '.$value[2].')';}}?>
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
      <td class="body-item mbr-fonts-style display-7">Тип основы</td>
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
      <td class="body-item mbr-fonts-style display-7"><span class="textaddrs" data-title="ГОСТ 24210"><span class="mbri-question mbr-iconfont mbr-iconfont-btn"></span></span> Индекс снижения уровня шума, не менее</td>
      <td class="body-item mbr-fonts-style display-7"><?echo $noise_index?></td>
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
      <td class="body-item mbr-fonts-style display-7"><span class="textaddrs" data-title="Стандарт EN 425"><span class="mbri-question mbr-iconfont mbr-iconfont-btn"></span></span> Истираемость</td>
      <td class="body-item mbr-fonts-style display-7" style="width: 30%;"><?echo $chairs?></td>
     </tr><tr>
      <td class="body-item mbr-fonts-style display-7">Показатель теплоусвоения, Вт/м²•К</td>
      <td class="body-item mbr-fonts-style display-7"><?echo $heat_assimilation?></td>
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
</div><p class="mbr-fonts-style panel-text display-6" style="padding-top: 30px;">В магазине «СтройСити» в Стерлитамаке продается <?echo $type?> <strong>линолеум <?echo $brend?> <?echo $collection?> <?echo $name?></strong> с ценой от <?echo $min_price_lin?> руб/м² до <?echo $max_price_lin?> руб/м² в зависимости от ширины которую выбрали. В наличии ширина <?php foreach ($width as $v) {echo '<span class="alert-info">',$v,'</span>';}?> метра. Бесплатно по месту в магазине осуществим отрез или раскрой линолеума по предоставленным размерам помещения. Срок службы линолеума <?echo $life?> лет. Страна производителя <?echo $region?>. В нашем магазине представлено большое разнообразие бытового, полукоммерческого и коммерческого линолеума. Цветовая гамма и разнообразие дизайна, позволит выбрать наилучшее и подходящее решение. </p>
<div class="youtube" id="VMLscsThPps" data-params="modestbranding=0&amp;showinfo=0&amp;controls=1&amp;vq=hd1080" data-image="../../../assets/images/linoleum/<?echo $video_img?>" style="width: 100%; height: 608px; background-image: url(../../../assets/images/linoleum/<?echo $video_img?>);"><div class="play"></div></div>
<p class="display-6 pt-3">Магазин в Стерлитамаке строительно-отделочных материалов «СтройСити», предлагает посетителям из большого выбора востребованных коллекций — <a class="text-primary" href="/linoleum/">купить линолеум</a> российских производителей «<span class="textaddr" data-title="Компания «Комитекс Лин» — основана в 2002 году и уже имеет «стаж» <?php echo date("Y") - 2002; ?> с хвостиком лет. Является полностью Отечественным производителем. На сегодняшний день <?php echo date("d.m.Y"); ?> линолеум «Komitex» не  имеет  конкурентов  по износостойкости  из-за  феноменальной  твердости  и  отсутствия  микропор  в  своей  структуре. В результате  линолеум  устойчив  к загрязнениям  и обладает антибактериальными  свойствами, что подтверждается международным сертификатом ISO 22196.">Комитекс Лин</span>», «<span class="textaddr" data-title="Группа компаний «Таркетт» работает на рынке напольных покрытия с 1886 года и является одним из крупнейших производителей полов в мире. «Tarkett» сегодня — это быстро развивающая группа компаний, она объединяет 28 современных производственных центров и поставляет свою продукцию в более чем 100 стран по всему миру.">Tarkett</span>», «<span class="textaddr" data-title="Компания «Ютекс» — это вертикально интегрированная компания с мировым именем по производству напольных покрытий. «Juteks» образована в 1939 году. Все подразделения компании «Juteks», в том числе российский завод, в октябре 2012 года вошли в состав международной промышленной группы компаний «Beaulieu International Group» со штаб квартирой в Бельгии. Компания «Juteks» стал одним из подразделений головной организации «Beaulieu International Group», которая объединяет 9 компаний (в их числе «Juteks») с мировыми именами.">Juteks</span>», «<span class="textaddr" data-title="Группа компаний «Опус» — это отечественный дистрибьютор покрытий для пола и стен. Одно из направлений — это реализация напольных ПВХ-покрытий, в частности линолеума. Линолеум выпускается под брендом «iDEAL». ГК «Опус», одноименное название Opus Group на английском. Входит в подразделение «Juteks».">iDEAL</span>», «<span class="textaddr" data-title="Путь основания линии производства линолеума под брендом IVC Group начинается с 1997 г. Бельгийская компания быстро завоёвывает нишу разработки напольных покрытий. На <?php echo date("Y");?> год владеет 10 производственными линиями в Бельгии, Люксембурге, США, России. В 2019 году запускает в «чистом поле» новый завод в России, в г. Орёл, отвечающий всем вызовам современного производства линолеума гетерогенного типа.">Leoline</span>». А также, из напольных покрытий, есть в наличии хорошо зарекомендовавшее себя напольное покрытие, это <a class="text-primary" href="/kvarcvinilovaya-plitka/">кварцвиниловая плитка</a> — инвестируйте в долговечный и красивый интерьер, который непременно окупится со временем! Таркетт — один из ведущих в России производителей напольного покрытия, отвечающего всем нормам безопасности и долговечности. Из всего разнообразия линолеума, предлагаем доступные цены для широкого круга покупателей, достойный и широкий выбор модельного ряда.</p>
<p class="mbr-fonts-style panel-text display-8"><i>Магазин «СтройСити» — официальный дилер «Tarkett» в Башкирии в городе Стерлитамак.</i> Мы уверены, теперь вы знаете, где в Стерлитамаке можно <strong><a class="text-info" href="#buy">купить линолеум</a></strong>!</p>
   </div>
  </div>
 </div>
</section>
<section class="mbr-gallery mbr-slider-carousel photo-review-1" id="foto-gallery1">
    <div class="container"><h2 class="mbr-section-title mbr-black pb-0 mbr-fonts-style display-2" style="padding-left: 15px;">Фотографии линолеума «Tarkett» в магазине «СтройСити»</h2>
<p class="mbr-fonts-style panel-text display-6" style="padding-left: 15px;">Посмотрите представленные стенды линолеума «Tarkett». Именно такие витрины с линолеумом наши посетители видят в магазине. Большое разнообразие коллекций линолеума, нарезка на любую требуемую ширину.</p>
        <div><!-- Filter --><!-- Gallery --><div class="mbr-gallery-row">
          <div class="mbr-gallery-layout-default">
           <div>
            <div>
             <div class="mbr-gallery-item mbr-gallery-item--p5" data-video-url="false">
             <div href="#linolium-tarkett" data-slide-to="0" data-toggle="modal">
             <img src="/assets/images/linoleum/<?echo $original_img?>" height=260 width=539 alt="Линолеум «Tarkett» в магазине «СтройСити» фото №1" style="-webkit-user-select: none">
             <span class="icon-focus"></span>
             <span class="mbr-gallery-title mbr-fonts-style display-7">Линолеум «Tarkett» в магазине фото №1</span>
            </div>
           </div>
            <div class="mbr-gallery-item mbr-gallery-item--p5" data-video-url="false">
             <div href="#linolium-tarkett" data-slide-to="1" data-toggle="modal">
             <img src="/assets/images/linoleum/linolium-tarkett-v-magazibe-stroycity-2-min.jpg" alt="Линолеум «Tarkett» в магазине «СтройСити» фото №2" style="-webkit-user-select: none">
             <span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7">Линолеум «Tarkett» в магазине фото №2</span>
            </div>
           </div>
            <div class="mbr-gallery-item mbr-gallery-item--p5" data-video-url="false">
             <div href="#linolium-tarkett" data-slide-to="2" data-toggle="modal">
              <img src="/assets/images/linoleum/linolium-tarkett-v-magazibe-stroycity-3-min.jpg" alt="Линолеум «Tarkett» в магазине «СтройСити» фото №3" style="-webkit-user-select: none">
              <span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7">Линолеум «Tarkett» в магазине фото №3</span>
             </div>
            </div>
             <div class="mbr-gallery-item mbr-gallery-item--p5" data-video-url="false">
              <div href="#linolium-tarkett" data-slide-to="3" data-toggle="modal">
             <img src="/assets/images/linoleum/linolium-tarkett-v-magazibe-stroycity-4-min.jpg" alt="Линолеум «Tarkett» в магазине «СтройСити» фото №4" style="-webkit-user-select: none">
             <span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7">Линолеум «Tarkett» в магазине фото №4</span>
             </div>
            </div>
           </div>
          </div>
<div class="clearfix"></div></div></div>
<!-- Lightbox -->
          <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="linolium-tarkett"><div class="modal-dialog"><div class="modal-content">
          <div class="modal-body">
           <div class="carousel-inner">
            <div class="carousel-item"><img src="/assets/images/linoleum/<?echo $original_img?>" alt="Линолеум «Tarkett» в магазине «СтройСити» фото №1" style="-webkit-user-select: none"></div>
             <div class="carousel-item"><img src="/assets/images/linoleum/linolium-tarkett-v-magazibe-stroycity-2.jpg" alt="Линолеум «Tarkett» в магазине «СтройСити» фото №2" style="-webkit-user-select: none"></div>
              <div class="carousel-item"><img src="/assets/images/linoleum/linolium-tarkett-v-magazibe-stroycity-3.jpg" alt="Линолеум «Tarkett» в магазине «СтройСити» фото №3" style="-webkit-user-select: none"></div>
               <div class="carousel-item active"><img src="/assets/images/linoleum/linolium-tarkett-v-magazibe-stroycity-4.jpg" alt="Линолеум «Tarkett» в магазине «СтройСити» фото №4" style="-webkit-user-select: none"></div></div>
                <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#linolium-tarkett">
                <span class="mbri-left mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only">Назад</span></a>
                <a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#linolium-tarkett">
                <span class="mbri-right mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only">Вперед</span></a>
                <a class="close" href="#" role="button" data-dismiss="modal"><span class="sr-only">Закрыть</span></a>
               </div>
 </div></div></div></div></div>
</section>
<section class="cont-1" id="opisanie" style="padding-top: 20px;">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 col-md-12 mbr-fonts-style display-6"><strong>Завод «Tarkett»</strong> в России — это крупнейшая площадка по производству напольных покрытий. Линолеум «Tarkett» выбирают за его отличительно высокий показатель износостойкости. 
Благодаря прочности материала, значительно повышается его срок эксплуатации. Данное напольное покрытие обрабатывается дополнительно антибактериальными и противопожарными средствами. Средства защиты являются экологически чистыми. <a href="" class="spoilers_links" style="border-bottom: 1px dotted #4d90fe;">Показать ещё</a>
<div class="spoilers_body">
<p class="mbr-fonts-style panel-text display-6" style="padding-top: 10px;">Подложка линолеума «Tarkett» дополняет шумоизоляцию и теплоизоляцию данного материала. Таркетт отличается оптимальным соотношением толщины напольного покрытия и защитного слоя. Ведь важно, покупая линолеум, покупать не только толстый линолеум с самой толщей напольного покрытия, но и учитывать толщину защитного слоя. Приведем примеры использования линолеума, смотрите далее.</p>
<div class="mbr-figure" style="width: 100%;">
<img src="/assets/images/linoleum/linoleum-na-ljuboj-cvet-i-razmer.jpg" alt="Линолеум «Tarkett» на любой цвет и размер"  style="-webkit-user-select: none">
<div class="img-caption">
<p class="mbr-fonts-style panel-text display-6" style="padding-top: 10px;">Линолеум «Tarkett» на любой цвет и размер</p>
</div>
</div>
<p class="display-6" style="padding-top: 10px;"><strong>Бытовой линолеум</strong> «Tarkett» отличается толщиной защитного слоя 0,15-0,2 мм. Он чаще всего используется в спальной комнате, где меньшая проходимость.</p>
<p class="display-6"><strong>Полукоммерческий линолеум</strong> обладает защитным покрытием 0,4-0,6 миллиметров в самом тоньше, то есть меньше подвержен истиранию и меньше подвержен продавливанию. Такое напольное покрытие используется чаще в домах, в залах и коридорах, то есть в комнатах, где большая проходимость.</p>
<p class="display-6"><strong>Коммерческий линолеум</strong>, его отличительная черта это то, что его можно легко использовать в высоко проходимых помещениях. Толщина защитного покрытия у коммерческого линолеума здесь больше 0,6 мм, он в целом почти полностью состоит из защитного покрытия и он более тонкий. То есть он меньше подвержен деформации, обладает высокой устойчивостью к стиранию и выгоранию покрытия.</p>
<h3 class="mbr-section-title mbr-black pb-0 mbr-fonts-style display-2">Давайте протестируем линолеум «Tarkett» на реальных условиях</h3>
<p class="display-6">Начнем с коммерческого линолеума. Возьмем ножницы и будем слегка с усилием проводить по линолеуму. Мы видим, что с легкого нажима, коммерческому линолеуму в принципе воздействия никакого. Если мы будем нажимать сильнее, то воздействия минимальные, и он легко восстанавливается.</p>
<div class="mbr-figure" style="width: 100%;">
<img src="/assets/images/linoleum/testiruem-kommercheskij-linoleum.jpg" alt="Тестируем коммерческий линолеум «Tarkett»"  style="-webkit-user-select: none">
<div class="img-caption">
<p class="mbr-fonts-style panel-text display-6" style="padding-top: 10px;">Тестируем коммерческий линолеум «Tarkett»</p>
</div>
</div>
<p class="display-6" style="padding-top: 10px;">Полукоммерческий линолеум. Если мы будем проводить ножницами без усиленного нажима, слегка придавливая, то мы увидим, то, что линолеум продавливается, но не царапается. Если же мы возьмем острую часть и начнем давить сильнее, то мы увидим, то, что он деформируется сильно, но восстанавливается. Другими словами, так таковых царапин нет. Линолеум восстанавливается очень легко.</p>
<div class="mbr-figure" style="width: 100%;">
<img src="/assets/images/linoleum/testiruem-polukommercheskij-linoleum.jpg" alt="Тестируем полукоммерческий линолеум «Tarkett»" style="-webkit-user-select: none">
<div class="img-caption">
<p class="mbr-fonts-style panel-text display-6" style="padding-top: 10px;">Тестируем полукоммерческий линолеум «Tarkett»</p>
</div>
</div>
<p class="display-6" style="padding-top: 10px;">Бытовой линолеум деформируется сильнее, чувствуется толщина защитного слоя и соответственно, чем сильнее нажим ножницами, тем больше воздействие. При сильном нажиме, защитный слой легко вскрывается. То есть такой линолеум можно использовать в спальнях, но надо быть осторожней при передвижении мебели, при использовании острых предметов в обуви, либо каких-то других предметах.</p>
<div class="mbr-figure" style="width: 100%;">
<img src="/assets/images/linoleum/testiruem-bytovoj-linoleum.jpg" alt="Тестируем бытовой линолеум «Tarkett»"  style="-webkit-user-select: none">
<div class="img-caption">
<p class="mbr-fonts-style panel-text display-6" style="padding-top: 10px;">Тестируем бытовой линолеум «Tarkett»</p>
</div>
</div>
<p class="display-6" style="padding-top: 10px;">Популярный производитель полов «Tarkett» предоставляет качественный линолеум на Российском рынке. Покупайте линолеум «Tarkett» в магазине «СтройСити» в Стерлитамаке, либо посмотрите <a class="text-primary" href="/linoleum/">каталог линолеума</a>, на данном сайте.</p>
<div class="mbr-section-btn align-center">
<a class="btn btn-md btn-secondary display-3" href="#buy"><span class="mbri-idea mbr-iconfont mbr-iconfont-btn"></span> Заказать</a>
</div>
    </div>
   </div>
  </div>
 </div>
</section>
<section class="video-cont mbr-fullscreen mbr-parallax-background" id="header13-12" style="background-image: url(../../../assets/images/linoleum/bg-linoleum-tarkett-video.jpg);">
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
    <iframe width="100%" height="100%" frameborder="0" allowfullscreen="1" data-src="https://www.youtube.com/watch?v=C7HeE-VQa5Q"></iframe>
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
    <h2 class="mbr-section-title mbr-black pb-3 mbr-fonts-style display-2">Заказать линолеум «Tarkett»</h2>
    <? echo $orderform; ?>
   </div>
  <div class="media-content">
   <h2 class="mbr-section-title mbr-black pb-2 mbr-fonts-style display-2">Как купить линолеум «Tarkett»?</h2>
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