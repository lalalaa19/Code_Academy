<?php $__env->startSection('title', "Hasil Quiz Bab {$chapter->title}"); ?>

<?php $__env->startSection('content'); ?>
    <div class="min-h-[90vh] bg-[#FFF9EB] flex flex-col items-center justify-center py-10 px-4">
        <div class="w-full max-w-4xl text-center mb-3">
            <h1 class="text-[5rem] font-bold text-primary">SELAMAT</h1>
            <h2 class="text-3xl font-bold text-secondary">Kamu Sudah Menyelesaikan Test</h2>
            <h2 class="text-3xl font-bold text-green">"<?php echo e($chapter->title); ?>"</h2>
        </div>

        <div class="w-full max-w-4xl text-center">
            <div class="flex gap-3 justify-center">
                <p class="text-green-500 font-medium text-green">Jawaban Benar: <?php echo e($quizResults['correct_answers']); ?>

                </p>
                <p class="text-red-500 font-medium">Jawaban Salah: <?php echo e($quizResults['wrong_answers']); ?></p>
            </div>

            <div class="flex justify-center mt-6">
                <a href="<?php echo e(route('courses.chapter.show', ['course' => $course, 'chapter' => $chapter])); ?>"
                    class="bg-green text-white flex items-center px-4 py-2 rounded-lg shadow">
                    <span class="mr-2">←</span> Kembali
                </a>
            </div>

            <div class="flex justify-center items-center mt-6 gap-4">
                <img src="/image/badge1.png" alt="Badge" class="w-48 h-48">
                <a href="/image/badge1.png" download class="bg-blue-500 text-white flex items-center px-4 py-2 rounded-lg shadow hover:bg-blue-700">
                    Download Badge
                </a>
            </div>



        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\awang\code-academy-main\code-academy-main\resources\views/user/courses/quiz-result.blade.php ENDPATH**/ ?>