<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo $__env->yieldContent('title', 'Fattiya Homestay'); ?></title>
    
    
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <header class="navbar">
        <a href="<?php echo e(url('/')); ?>" class="navbar-logo">FattiyaHomestay</a>
        <nav class="navbar-nav">
            <a href="<?php echo e(url('/')); ?>">Home</a>
            <a href="#">Rooms</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </nav>
        <a href="#" class="navbar-login-btn">Login</a>
    </header>

    <main>
        
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer class="site-footer">
        <div class="footer-content">
            <div class="footer-brand">
                <a href="<?php echo e(url('/')); ?>" class="footer-logo">FattiyaHomestay.</a>
                <p class="footer-tagline">We unleash your beauty stay instantly and memorable.</p>
            </div>
        </div>
        <div class="footer-copyright">
            <p>Copyright 2025 • All rights reserved • Fattiya Homestay</p>
        </div>
    </footer>

</body>
</html><?php /**PATH C:\laragon\www\fattiya-homestay\resources\views/layouts/app.blade.php ENDPATH**/ ?>