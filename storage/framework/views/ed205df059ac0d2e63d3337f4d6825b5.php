<?php $__env->startSection('title', 'Welcome to CodeAcademy'); ?>

<?php $__env->startSection('content'); ?>
    
    <section id="courses" class="container mx-auto py-20 px-4">

        <h3 class="text-2xl text-center font-bold text-green uppercase">semua</h3>
        <h1 class="text-[4rem] text-center font-bold text-green mb-6 uppercase">Kursus</h1>

        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\awang\code-academy-main\code-academy-main\resources\views/courses.blade.php ENDPATH**/ ?>