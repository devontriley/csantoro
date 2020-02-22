<!--
Hero
(Image, header, copy, meta data)

Image Carousel

Rich Text
(Header, copy, columns, centered)

Full Image
(Optional overlay box with copy)

Half Image

Desktop Screenshot

50/50 Image/Text
-->
<?php
$modules = get_field('modules');

if($modules)
{
    foreach($modules as $module)
    {
        switch($module['acf_fc_layout'])
        {
            case 'hero':
                include('modules/hero.php');
                break;

            case 'image_carousel':
                include('modules/image-carousel.php');
                break;

            case 'basic_content':
                include('modules/basic-content.php');
                break;

            case 'full_image':
                include('modules/full-image.php');
                break;

            case '5050_image_&_copy':
                include('modules/5050-image-copy.php');
                break;
        }
    }
}
?>