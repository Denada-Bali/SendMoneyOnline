<?php if (count($errors) > 0) : ?>
    <div class="error">
        <?php
        $errorMessages = '';
        foreach ($errors as $error) {
            $errorMessages .= $error . '\n';
        }
        ?>
        <script>
            alert('<?php echo $errorMessages; ?>');
        </script>
    </div>
<?php endif ?>