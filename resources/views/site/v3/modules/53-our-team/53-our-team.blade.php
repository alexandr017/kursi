<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<h2 class="index_subtitle command">Команда</h2>
<div style="position: relative">
    <div class="person-list swiper_styles-slider slider_person_slider_31bd70ba83bb5ae47065 swiper-initialized swiper-horizontal" id="person_slider_31bd70ba83bb5ae47065" style="position: static">
        <div class="swiper_styles-wraper swiper-wrapper" id="swiper-wrapper-83fe791d272b75eb" aria-live="polite" style="transform: translate3d(0px, 0px, 0px); position: static">
            <?php $i = 1 ?>
            <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="swiper-slide <?php if($i == 1): ?> swiper-slide-active <?php else: ?> swiper-slide-next <?php endif; ?>" role="group" aria-label="<?php echo e($i); ?> / <?php echo e($team->count()); ?>">
                <div class="person-item">
                    <img class="person_picture" src="<?php echo e($employee->photo); ?>" alt="<?php echo e($employee->name); ?>" title="<?php echo e($employee->name); ?>" loading="lazy">
                    <div class="person_info">
                        <div class="person_name"><?php echo e($employee->name); ?></div>
                        <div class="person_post"><?php echo e($employee->job); ?></div>
                        <div class="person_link">
                            <a class="white_button_template" href="/<?php echo e($employee->url); ?>/">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
                <?php $i++ ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>


        <div class="swiper_styles-pagination_cont">
            <div class="slider_person_slider_31bd70ba83bb5ae47065-button-prev swiper_styles-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-83fe791d272b75eb" aria-disabled="true"></div>
            <div class="slider_person_slider_31bd70ba83bb5ae47065-pagination swiper_styles-pagination swiper-pagination swiper-pagination-fraction swiper-pagination-horizontal">
                <span class="swiper-pagination-current">1</span>
                /
                <span class="swiper-pagination-total">13</span>
            </div>
            <div class="slider_person_slider_31bd70ba83bb5ae47065-button-next swiper_styles-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-83fe791d272b75eb" aria-disabled="false"></div>
        </div>

        <div class="person-item last_element_label"></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    addEventListener("load", () => {
        const swiper_person_list = new Swiper('.person-list', {
            speed: 400,
            slidesPerView: 'auto',
            navigation: {
                nextEl: '.slider_person_slider_31bd70ba83bb5ae47065-button-next',
                prevEl: '.slider_person_slider_31bd70ba83bb5ae47065-button-prev',
            },
            pagination: {
                el: ".slider_person_slider_31bd70ba83bb5ae47065-pagination",
                type: "fraction",
            },
        });
    });
</script>

<?php /**PATH /var/www/kursi/kursi/resources/views/site/v3/modules/53-our-team/53-our-team.blade.php ENDPATH**/ ?>

<style>
    .person-list {
        width: 380px;
    }

    .swiper_styles-pagination_cont {
        position: absolute;
        bottom: 0;
    }
</style>
