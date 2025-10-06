

<?php $__env->startSection('title', 'Detail Homestay'); ?>

<?php $__env->startSection('content'); ?>

    <div class="detail-container">
        
        <section class="homestay-details">
            
            <h1 class="detail-title">Beach House</h1>
            <p class="detail-location">Bandar Lampung, Indonesia</p>

            <div class="image-gallery">
                <img src="<?php echo e(asset('images/placeholder.jpg')); ?>" alt="Tampilan utama Beach House" class="main-image">
            </div>

            <div class="description">
                <h2>Tentang Homestay Ini</h2>
                <p>
                    Nikmati liburan tak terlupakan di Beach House kami yang menawan, terletak hanya beberapa langkah dari pantai. Dengan pemandangan laut yang menakjubkan dan akses pribadi ke pasir putih, tempat ini adalah surga bagi mereka yang mencari ketenangan. Homestay ini dilengkapi dengan fasilitas modern, dapur lengkap, dan area bersantai yang nyaman.
                </p>
            </div>

            <div class="facilities">
                <h2>Fasilitas yang Tersedia</h2>
                <ul>
                    <li>✓ WiFi Kecepatan Tinggi</li>
                    <li>✓ AC di Setiap Kamar</li>
                    <li>✓ Dapur Lengkap</li>
                    <li>✓ Parkir Gratis</li>
                    <li>✓ TV Kabel</li>
                </ul>
            </div>
        </section>

        <aside class="booking-panel">
            <div class="booking-form">
                <h3><span class="price">$72</span> / malam</h3>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="checkin">Check-in</label>
                        <input type="date" id="checkin" name="checkin">
                    </div>
                    <div class="form-group">
                        <label for="checkout">Check-out</label>
                        <input type="date" id="checkout" name="checkout">
                    </div>
                    <div class="form-group">
                        <label for="guests">Jumlah Tamu</label>
                        <select id="guests" name="guests">
                            <option value="1">1 Tamu</option>
                            <option value="2">2 Tamu</option>
                            <option value="3">3 Tamu</option>
                            <option value="4">4 Tamu</option>
                        </select>
                    </div>
                    <button type="submit" class="book-now-btn">Pesan Sekarang</button>
                </form>
            </div>
        </aside>

    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\fattiya-homestay\resources\views/detail.blade.php ENDPATH**/ ?>