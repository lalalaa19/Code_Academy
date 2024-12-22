<?php $__env->startSection('title', 'Welcome to CodeAcademy'); ?>

<?php $__env->startSection('content'); ?>
    
    <section class="bg-primary text-white py-32 rounded-b-[2rem]">
        <div class="text-center mx-auto">
            <h1 class="text-xl">Yuk Kita Belajar</h1>
            <h1 class="text-secondary-light text-4xl md:text-[6rem] font-light tracking-widest my-10 uppercase font-barrio">
                Coding!</h1>
            <p class="text-lg md:text-xl mb-8">
                Jelajahi Dunia Coding, Mulai Petualanganmu Sekarang! <br> dengan CodeAcademy
            </p>
            <a href="#courses" class="bg-white text-primary font-semibold px-6 py-3 rounded-xl shadow-md">
                Cek Kursus Sekarang!
            </a>
        </div>
    </section>

    
    <section id="courses" class="container mx-auto py-20 px-4">

        <h3 class="text-2xl text-center font-bold text-green uppercase">Tersedia</h3>
        <h1 class="text-[4rem] text-center font-bold text-green mb-6 uppercase">Kursus</h1>

        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php $__currentLoopData = $courses->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white rounded-xl shadow overflow-hidden">
                    
                    <img src="<?php echo e($course->image ? asset('storage/' . $course->image) : 'https://cms-assets.themuse.com/media/lead/01212022-1047259374-coding-classes_scanrail.jpg'); ?>"
                        alt="<?php echo e($course->title); ?>" class="w-full h-40 object-cover">

                    
                    <div class="p-4">
                        <h2 class="text-xl font-semibold text-gray-800"><?php echo e($course->title); ?></h2>
                        <p class="text-gray-600 mt-2"><?php echo e($course->description); ?></p>
                        <a href="<?php echo e(route('courses.show', $course)); ?>"
                            class="mt-4 flex items-center ml-auto gap-2 px-3 rounded-lg text-sm bg-primary text-white p-2 w-fit">
                            Lihat Kursus
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <div class="mt-10 flex justify-center">
            <a href="<?php echo e(route('courses')); ?>" class="bg-green text-white font-bold py-3 px-8 rounded-xl shadow  transition">
                Cek Sekarang
            </a>
        </div>
    </section>

    <section class="bg-secondary-light py-24 rounded-t-3xl">
        <div class="container mx-auto text-center">
            <!-- Heading -->
            <h2 class="text-5xl font-bold text-white mb-4">BUTUH BANTUAN?</h2>
            <p class="text-lg font-semibold text-white mb-8">KAMI BERSEDIA MEMBANTUMU!</p>

            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-4">
                <!-- FAQ Card -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden">
                    <img src="<?php echo e(asset('image/help1.png')); ?>" alt="FAQ" class="w-full h-64 object-cover">
                    <div class="bg-pink-500 text-white text-center py-4">
                        <p class="font-bold">Pertanyaan yang sering ditanyakan</p>
                    </div>
                </div>

                <!-- Rate Us Card -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden">
                    <img src="<?php echo e(asset('image/help2.png')); ?>" alt="Rate Us" class="w-full h-64 object-cover">
                    <div class="bg-pink-500 text-white text-center py-4">
                        <p class="font-bold">Yuk Rate Kami!</p>
                    </div>
                </div>

                <!-- Contact Us Card -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden">
                    <img src="<?php echo e(asset('image/help3.png')); ?>" alt="Contact Us" class="w-full h-64 object-cover">
                    <div class="bg-pink-500 text-white text-center py-4">
                        <p class="font-bold">Hubungi Kami</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\awang\code-academy-main\code-academy-main\resources\views/landing.blade.php ENDPATH**/ ?>