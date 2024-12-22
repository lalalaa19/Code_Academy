<?php $__env->startSection('title', $course->title); ?>

<?php $__env->startSection('content'); ?>
    <div class="min-h-screen bg-light flex flex-col items-center py-10 px-4">
        <!-- Header -->
        <div class="w-full max-w-4xl flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-primary"><?php echo e($chapter->title); ?></h1>
            <a href="<?php echo e(route('courses.show', $course)); ?>"
                class="bg-green text-white flex items-center px-4 py-2 rounded-lg shadow">
                <span class="mr-2">←</span> Kembali
            </a>
        </div>

        <!-- Video Section -->
        <div class="w-full max-w-4xl mb-8">
            <iframe class="w-full h-96 rounded-lg shadow" src="<?php echo e($chapter->video_url); ?>" title="Course Video" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>

        <!-- Artikel Section -->
        <div class="w-full max-w-4xl mb-10">
            <h2 class="text-xl font-bold text-secondary mb-4">Artikel</h2>
            <?php $__empty_1 = true; $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="flex justify-between items-center bg-white p-4 rounded-lg shadow mb-4">
                    <span class="text-primary font-semibold"><?php echo e($article->title); ?></span>
                    <a href="<?php echo e(route('courses.chapter.article', ['course' => $course, 'chapter' => $chapter, 'article' => $article->id])); ?>"
                        class="bg-primary text-white flex items-center justify-center px-4 py-2 rounded-lg shadow ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="text-gray-500">Belum ada artikel untuk chapter ini.</p>
            <?php endif; ?>
        </div>

        <!-- Quiz Section -->
        <?php if($quiz): ?>
            <div class="w-full max-w-4xl">
                <h2 class="text-xl font-bold text-secondary mb-4">Quiz <?php echo e($chapter->title); ?></h2>
                <div class="flex justify-between items-center bg-white p-4 rounded-lg shadow">
                    <span class="text-primary font-semibold">Quiz <?php echo e($chapter->title); ?></span>
                    <a href="<?php echo e(route('courses.chapter.quiz', ['course' => $chapter->course_id, 'chapter' => $chapter->id])); ?>"
                        class="bg-primary text-white flex items-center justify-center px-4 py-2 rounded-lg shadow ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>
        <?php else: ?>
            <p class="text-gray-500 mt-4">Quiz belum tersedia untuk chapter ini.</p>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\awang\code-academy-main\code-academy-main\resources\views/user/courses/chapter.blade.php ENDPATH**/ ?>