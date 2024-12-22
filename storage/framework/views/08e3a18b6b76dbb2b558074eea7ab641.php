<?php $__env->startSection('title', $course->title); ?>

<?php $__env->startSection('content'); ?>
    <div class="min-h-screen bg-light flex flex-col items-center py-10 px-4">
        <!-- Header -->
        <div class="w-full max-w-4xl flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-primary"><?php echo e($course->title); ?></h1>
            <a href="<?php echo e(route('landing')); ?>"
                class="bg-green text-white flex items-center px-4 py-2 rounded-lg shadow hover:bg-green-600">
                <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>
                </span> Kembali
            </a>
        </div>

        <!-- Chapters List -->
        <div class="w-full max-w-4xl space-y-4">
            <?php $__empty_1 = true; $__currentLoopData = $chapters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chapter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="flex justify-between items-center bg-white p-4 rounded-xl shadow">
                    <span class="text-primary font-semibold">Bab <?php echo e($loop->iteration); ?>. <?php echo e($chapter->title); ?></span>
                    <a href="<?php echo e(route('courses.chapter.show', [$course, $chapter])); ?>"
                        class="bg-primary text-white flex items-center justify-center px-4 py-2 rounded-lg shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="text-gray-500">Belum ada bab untuk kursus ini.</p>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\awang\code-academy-main\code-academy-main\resources\views/user/courses/show.blade.php ENDPATH**/ ?>