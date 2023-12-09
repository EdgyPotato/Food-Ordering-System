<!DOCTYPE html>
<html>
    <body>
        <input id="test" type="checkbox">
        <input id="submit" type="submit" disabled>
        
        <script>
            // Get references to the checkbox and submit button elements
            var checkbox = document.getElementById('test');
            var submitButton = document.getElementById('submit');

            // Add an event listener to the checkbox
            checkbox.addEventListener('change', function() {
                // Update the disabled state of the submit button based on the checkbox state
                submitButton.disabled = !checkbox.checked;
            });
        </script>
    </body>
</html><?php /**PATH C:\AD Project\AD-Project\resources\views/notify.blade.php ENDPATH**/ ?>