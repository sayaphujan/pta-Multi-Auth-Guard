

<?php $__env->startSection('content'); ?>
<?php
  $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
  $orderId = substr(str_shuffle($permitted_chars), 0, 10);
  
?>
<style type="text/css">
  .wrapper-map{
  width: 800px;
  height: 400px;
  margin: 0 auto;
  border: #ccc solid 1px;
}

#searchfield{
  width: 100%;
}

#lat, #lng{
  width: 48%;
}
#lat{
  margin-right: 2%;
}

input{
  border: 1px solid #ccc;
  height: 35px;
  margin-bottom: 5px;
}

.wrapper-field{
  width: 800px;
  margin: 0 auto 10px;
}

input[readonly] {
  background: #eee; /*Simular campo inativo - Sugestão @GabrielRodrigues*/
  pointer-events: none;
  touch-action: none;
}  

</style>
  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">

                <div class="row">
                  <div class="col-lg-12">
                    <h3>Layanan Truk Tangki Air</h3>
                    <h4>Perumda Air Minum Tirto Panguripan</h4>
                    <p>Segera registrasi untuk dapat menikmati fasilitasnya</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-button">
                      <a href="<?php echo e(url('/daftar')); ?>"><i class="fa fa-user-plus"></i> DAFTAR </a>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="<?php echo e(asset('images/tangkipdam.png')); ?>" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>Pemesanan <em>Truk Tangki - Air</em></h4>
            <img src="<?php echo e(asset('assets/images/heading-line-dec.png')); ?>" alt="">
            <p>PTA merupakan Pemesanan Tangki Air yang menjual air dalam bentuk Truk Tangki (TTA). TTA dapat dipesan untuk kebutuhan Niaga, Sosial, maupun Kebutuhan Pribadi. Adapun daftar harga yang tersedia di PTA</p>
            <p>5.000lt = Rp.200.000,-</p>
            <p>8.000lt = Rp.350.000,-</p>
            <br/>
            <p>Sekarang Anda dapat melakukan pemesanan Truk Tangki - Air melalui beberapa metode dibawah ini :</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container" id="info">
      <div class="row">

        <div class="col-lg-3">
          <div class="service-item second-service">
            <div class="icon"></div>
            <h4>CS 1</h4>
            <p>081 2257 8484</p>
            <div class="border-button">
              <a href="whatsapp://send?text=Hai, saya ingin memesan Truk Tangki-Air!&phone=+628122578484">Pesan Sekarang</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="service-item second-service">
            <div class="icon"></div>
            <h4>CS 2</h4>
            <p>0821 3376 7611</p>
            <div class="border-button">
              <a href="whatsapp://send?text=Hai, saya ingin memesan Truk Tangki-Air!&phone=+6282133767611">Pesan Sekarang</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="service-item first-service">
            <div class="icon"></div>
            <h4>Hubungan Pelanggan</h4>
            <p>(0294) 3689942</p>
            <div class="border-button">
              <a href="tel:02943689942">Pesan Sekarang</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="service-item first-service">
            <div class="icon"></div>
            <h4>Water Canon</h4>
            <p>Silakan dapat diambil sendiri.</p>
            <div class="border-button">
              <a href="https://www.google.com/maps/dir/-6.9155911,109.653817/PERUMDA+AIR+MINUM+TIRTO+PANGURIPAN,+Jl.+Pemuda+No.62,+Kebondalem,+Langenharjo,+Kec.+Kendal,+Kabupaten+Kendal,+Jawa+Tengah+51314/@-6.95002,109.6482926,99589m/data=!3m2!1e3!4b1!4m17!1m6!3m5!1s0x0:0xa5414caf937466a3!2sPERUMDA+AIR+MINUM+TIRTO+PANGURIPAN!8m2!3d-6.9233225!4d110.2002648!4m9!1m1!4e1!1m5!1m1!1s0x2e705c680eb1a003:0xa5414caf937466a3!2m2!1d110.2002648!2d-6.9233225!3e0?hl=id">Pesan Sekarang</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

    <footer id="orders">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4><em>Form Pemesanan</em> Truk Tangki - Air</h4>
          </div>
        </div>
         <?php if(session('error')): ?>
            <div class="alert alert-danger">
              <?php echo e(session('error')); ?>

            </div>
            <?php endif; ?>
            <?php if(session('status')): ?>
            <div class="alert alert-success">
                <?php echo e(session('status')); ?>

            </div>
            <?php endif; ?>
        <div class="row">
          <div class="col-lg-12">
            <div class="col-lg-6 offset-lg-3">
              <form method="POST" action="<?php echo e(route('pesan')); ?>" id="contactForm" name="contactForm" class="contactForm" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row mt-3 mb-3">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="label" for="name">Jenis Peruntukan</label>
                      <select name="category" class="form-control <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="category" aria-describedby="category" required="required">
                        <option value="">-- Pilih Disini --</option>
                        <option value="Niaga" <?php echo e(old('category') == 'Niaga' ? 'selected' : ''); ?>>Niaga</option>
                        <option value="Sosial" <?php echo e(old('category') == 'Sosial' ? 'selected' : ''); ?>>Sosial</option>
                        <option value="Pribadi Rumah Tangga" <?php echo e(old('category') == 'Pribadi Rumah Tangga' ? 'selected' : ''); ?>>Pribadi Rumah Tangga</option>
                      </select>    

                      <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="label" for="name">Tujuan Pengiriman</label>
                      <select name="destination" class="form-control <?php $__errorArgs = ['destination'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="destination" aria-describedby="destination" required="required">
                        <option value="">-- Pilih Disini --</option>
                        <option data-id="1" value="Dalam Kota">Dalam Kota</option>
                        <!--<option data-id="2" value="Luar Kota">Luar Kota</option>-->
                        <option data-id="3" value="Pengambilan Sendiri">Pengambilan Sendiri</option>
                      </select> 

                      <?php $__errorArgs = ['destination'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="hidden" class="form-control" name="price_id" id="price_id"readonly="readonly" value="<?php echo e(old('price_id')); ?>">
                      <label class="label" for="name">Volume Tangki</label>
                      <select name="volume" class="form-control <?php $__errorArgs = ['volume'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="volume" aria-describedby="volume" required="required">
                        <option value="">-- Pilih Disini --</option>
                        <?php $__currentLoopData = $price; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option data-id=<?php echo e($price->price_id); ?> value=<?php echo e($price->price_volume); ?>><?php echo e($price->price_volume); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>

                      <?php $__errorArgs = ['volume'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>    
                    </div>
                  </div>
                </div>
                
                <div class="row mt-3 mb-3">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="label" for="name">Harga Air</label>
                      <input type="text" class="form-control <?php $__errorArgs = ['net_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="net_price" id="net_price" placeholder="Harga Air" readonly="readonly" value="0" required="required">

                      <?php $__errorArgs = ['net_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="label" for="name">Biaya Pengiriman</label>
                      <input type="text" class="form-control <?php $__errorArgs = ['deliv_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="deliv_price" id="deliv_price" placeholder="Biaya Pengiriman" readonly="readonly" value="0" required="required">

                      <?php $__errorArgs = ['deliv_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="label" for="name">Total</label>
                      <input type="text" class="form-control <?php $__errorArgs = ['total'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="total" id="total" placeholder="Total" readonly="readonly" value="0" required="required">

                      <?php $__errorArgs = ['total'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                  </div>
                </div>
                <?php if(auth()->guard()->check()): ?> 
                  <input type="hidden" class="form-control" name="flag" id="flag" value="1">
                <?php endif; ?>
                <?php if(auth()->guard()->guest()): ?>
                  <input type="hidden" class="form-control" name="flag" id="flag" value="0">
                <?php endif; ?>

                <div class="row mt-3 mb-3">
                  <input type="hidden" class="form-control" name="order_id" id="order_id" placeholder="No. Pesanan" readonly="readonly" value="<?php echo e($orderId); ?>">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label class="label" for="subject">Nama Pemohon</label>
                      <?php if(auth()->guard()->check()): ?> 
                      <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" id="name" placeholder="Nama Pemohon" readonly="readonly" value="<?php echo e(strtoupper(Auth::user()->name)); ?>">
                      <?php endif; ?>
                      <?php if(auth()->guard()->guest()): ?>
                      <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" id="name" placeholder="Nama Pemohon" required="required" value="<?php echo e(old('name')); ?>">
                      <?php endif; ?>
                      <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="label" for="subject">No. Telepon</label>
                      <input type="text" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="phone" id="phone" placeholder="No. Telepon" required="required" value="<?php echo e(old('phone')); ?>">

                      <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                  </div>
                </div>

                <div class="row mt-3 mb-3">
                  <div class="col-md-12">
                    <label class="label" for="#">Alamat Pengiriman</label>
                    <input type="text" class="form-control <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="address" id="address" placeholder="Alamat Pengiriman" required="required" value="<?php echo e(old('address')); ?>">

                    <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    
                  </div>
                </div>

                <div class="row mt-3 mb-3" style="display: none;">
                  <div class="col-md-6">
                    <label class="label" for="#">Latitude</label>
                    <input type="hidden" class="form-control" name="address_latitude" id="address-latitude" value="0" readonly="readonly" />
                  </div>

                  <div class="col-md-6">
                    <label class="label" for="#">Longitude</label>
                    <input type="text" class="form-control" name="address_longitude" id="address-longitude" value="0" readonly="readonly" />
                    <!--<ul id="geoData">
                      <li>Latitude: <span id="lat-span"></span></li>
                      <li>Longitude: <span id="lon-span"></span></li>
                    </ul>-->
                  </div>
                </div>

                <div class="row mt-3 mb-3">
                  <div class="col-md-12">
                    <div id="address-map-container" style="width:100%;height:400px; ">
                      <div style="width: 100%; height: 100%" id="map"></div>
                    </div>
                  </div>
                </div>

                <div class="row mt-3 mb-3">
                  <div class="col-md-12">
                    <label class="label" for="#">Detail Lokasi Pengiriman</label>
                    <textarea name="detail" class="form-control <?php $__errorArgs = ['detail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="detail" cols="30" rows="4" placeholder="Detail Lokasi Pengiriman" value="<?php echo e(old('detail')); ?>"><?php echo e(old('fullname')); ?></textarea>

                    <?php $__errorArgs = ['detail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                </div>
<!--
                <div class="row mt-3 mb-3">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="label" for="#">Foto Lokasi</label>
                      <input type="file" class="form-control <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="photo" id="photo" placeholder="Foto Lokasi" value="<?php echo e(old('photo')); ?>">
                      <p class="photo"><?php echo e(old('photo')); ?></p>
                      <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                  </div>
                </div>
-->
                <div class="row mt-3 mb-3">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="label" for="#">Keterangan Tambahan</label>
                      <input type="text" class="form-control <?php $__errorArgs = ['noted'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="noted" id="noted" placeholder="Keterangan Tambahan" value="<?php echo e(old('noted')); ?>">

                      <?php $__errorArgs = ['noted'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                   </div>
                </div>

                <div class="row mt-3 mb-3">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="label" for="name">Metode Pembayaran</label>
                      <select name="payment" class="form-control <?php $__errorArgs = ['payment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="payment" aria-describedby="payment" required="required">
                        <option value="">-- Pilih Disini --</option>
                        <option value="Tunai"> Bayar di Tempat </option>
                        <?php $__currentLoopData = $bank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option data-id=<?php echo e($bank->bank_id); ?> value=<?php echo e($bank->bank_id); ?>><?php echo e($bank->bank_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>

                      <?php $__errorArgs = ['volume'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>    
                    </div>
                  </div>
                </div>
                <div class="row mt-3 mb-3">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="submit" value="Kirim" class="btn btn-primary">
                      <div class="submitting"></div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="<?php echo e(asset( 'assets/js/jquery-1.9.1.js')); ?>"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  <script>
    window.onpageshow = function(event) {
      $('#volume').trigger("change");
      $('#destination').trigger("change");

      var net = parseInt($('#net_price').val());
      var deliv = parseInt($('#deliv_price').val());
      var sum = parseInt(net+deliv);
      $('#total').val(sum);
    };

  </script>
  <script type="text/javascript">
$(document).ready(function () {
  
    var txt = $("#phone");
    var func = function() {
        txt.val(txt.val().replace(/\s/g, ''));
    }
    txt.keyup(func).blur(func);

    var product = $('#volume').find(':selected').data('id'); 

    $('#destination').change(function(){
      var deliv = $('#destination').find(':selected').data('id'); 

        if(deliv == 1)
        {
          $('#deliv_price').val(0);
        }
        else if(deliv == 2)
        {
          $('#deliv_price').val(10000);
        }
        else if(deliv == 3)
        {
          $('#deliv_price').val(0);
        }
    })

    $('#volume').change(function(){
        var product = $(this).find(':selected').data('id');     
        $('#price_id').val(product);

        getPrice(product);
   });

    if( product >= 0){
        getPrice(product);
    }

    function getPrice(product){

        //alert(kecID);
        if(product){
            $.ajax({
               type:"GET",
               url:"<?php echo e(url('/getprice')); ?>/"+product,
               dataType: 'JSON',
               success:function(res){               
                console.log(res);
                
                var net = parseInt(res.price_net);
                var deliv = parseInt($('#deliv_price').val());
                var sum = parseInt(net+deliv);
                $('#total').val(sum);

                if(res){
                    $("#net_price").val(res.price_net);
                }else{
                   $("#net_price").val('0');
                }
               }
            });
        }else{
            $("#net_price").val('0');
        }    
    }

});
</script>
<script>
function initMap() {
    var myLatLng = {lat: -6.922237839463699, lng: 110.20010403863363};
  
    var map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      zoom: 20
    });
  
    var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Pin Me!',
          draggable: true,
        });
  
     google.maps.event.addListener(marker, 'dragend', function(marker) {
        var latLng = marker.latLng;
        $('#address-latitude').val(latLng.lat());
        $('#address-longitude').val(latLng.lng());
     });
}
  
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUQaOBIQIBCIfWQb3r8-8Vv1-XWLH_aOk&callback=initMap&libraries=places&v=weekly" defer></script>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.chain.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pta\resources\views/main/index.blade.php ENDPATH**/ ?>