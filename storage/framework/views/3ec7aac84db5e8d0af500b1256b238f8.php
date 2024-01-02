<!DOCTYPE html>
<html>

<body>
    <?php

    use App\Models\Menu;

    $menu = Menu::all();
    foreach($menu as $menus){
        $imageUrl = 'storage/image/' . $menus->image_url;
        $url = file_get_contents($imageUrl);
        dd($url);
        $binaryData = base64_encode(file_get_contents($url->path()));
    }
    


    ?>
</body>

</html><?php /**PATH C:\AD Project\AD-Project\resources\views/testingcss.blade.php ENDPATH**/ ?>