<?php $__env->startSection('title', 'Selamat Datang di Fattiya Homestay'); ?>


<?php $__env->startSection('content'); ?>

    <div class="hero">
        <div class="hero-content">
            <h1>Comfortable Stays for a Memorable Holiday</h1>
            <p>We provide what you need to enjoy your holiday with family. Time to make another memorable moment.</p>
            <a href="#" class="hero-cta-btn">Show More</a>
        </div>
        <div class="hero-image">
            <img src="<?php echo e(asset('images/placeholder.jpg')); ?>" alt="Suasana kamar homestay yang nyaman">
            
        </div>
    </div>
    <section class="homestay-choice">
        <h2 class="section-title">Our Choice of Homestays</h2>
        <div class="homestay-list">
            <div class="homestay-card">
                <img src="<?php echo e(asset('images/placeholder1.jpg')); ?>" alt="Nama Homestay 1" class="card-img">
                <div class="card-price">$72 per night</div>
                <div class="card-body">
                    <h3 class="card-title">Beach House</h3>
                    <p class="card-location">Bandar Lampung, Indonesia</p>
                    <a href="<?php echo e(url('/homestay/1')); ?>" class="card-btn">Show Homestay</a>
                </div>
            </div>
            
            <div class="homestay-card">
                <img src="<?php echo e(asset('images/placeholder2.jpg')); ?>" alt="Nama Homestay 2" class="card-img">
                <div class="card-price">$85 per night</div>
                <div class="card-body">
                    <h3 class="card-title">Mountain Retreat</h3>
                    <p class="card-location">Bandar Lampung, Indonesia</p>
                    <a href="<?php echo e(url('/homestay/2')); ?>" class="card-btn">Show Homestay</a>
                </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\fattiya-homestay\resources\views/welcome.blade.php ENDPATH**/ ?>