<!DOCTYPE html>
<html>
<body>

    <?php
    // Assuming 'Test' is your Eloquent model

use App\Models\Menu;
use App\Models\Test;

    // Path to the image file
    $imagePath = public_path('image/return.png');

    // Check if the file exists before attempting to save
    if (file_exists($imagePath)) {
        $image = new Test();
        $image->image_data = file_get_contents($imagePath);
        $image->save();
    } else {
        echo 'Image file not found!';
    }

    // Retrieve the saved image from the database
    $savedImage = Test::find(1);

    // Display the saved image
    if ($savedImage) {
        $imageData = $savedImage->image_data;
        $menu = Menu::where('foodid', "F01")->update(['image_url' => $imageData]);
        $imageSrc = 'data:image/png;base64,' . base64_encode($imageData);
        echo '<img src="' . $imageSrc . '" width="30px" height="30px" alt="Saved Image">';
    } else {
        echo 'Saved image not found!';
    }
    ?>

</body>
</html><?php /**PATH C:\AD Project\AD-Project\resources\views/test.blade.php ENDPATH**/ ?>