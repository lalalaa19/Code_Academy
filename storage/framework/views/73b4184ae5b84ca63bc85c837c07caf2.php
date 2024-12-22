<?php $__env->startSection('title', "Quiz Bab {$chapter->title}"); ?>

<?php $__env->startSection('content'); ?>
    <div class="min-h-screen bg-[#FFF9EB] flex flex-col items-center py-10 px-4">
        <!-- Header -->
        <div class="w-full max-w-4xl flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-primary">Quiz Bab <?php echo e($chapter->title); ?></h1>
            <a href="<?php echo e(route('courses.chapter.show', ['course' => $course, 'chapter' => $chapter])); ?>"
                class="bg-green text-white flex items-center px-4 py-2 rounded-lg shadow">
                <span class="mr-2">←</span> Kembali
            </a>
        </div>

        <!-- Quiz Form -->
        <form action="<?php echo e(route('courses.chapter.quiz.submit-test', ['course' => $course, 'chapter' => $chapter])); ?>"
            method="POST">
            <?php echo csrf_field(); ?>
            <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="w-full max-w-4xl bg-white rounded-lg shadow p-6 mb-6">
                    <h2 class="text-lg font-bold text-secondary mb-4">Soal No. <?php echo e($index + 1); ?></h2>
                    <div class="mb-4 py-4">
                        <p class="text-gray-800 font-medium"><?php echo e($question->question); ?></p>
                    </div>

                    <!-- Options -->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <label
                            class="flex items-center gap-2 bg-[#D9EFFF] p-2 rounded-lg shadow cursor-pointer transition border-2 border-transparent hover:border-primary peer-checked:border-primary">
                            <input type="radio" name="answers[<?php echo e($question->id); ?>]" value="a" class="peer hidden">
                            <span class="peer-checked:text-primary"><?php echo e($question->option_a); ?></span>
                        </label>
                        <label
                            class="flex items-center gap-2 bg-[#D9EFFF] p-2 rounded-lg shadow cursor-pointer transition border-2 border-transparent hover:border-primary peer-checked:border-primary">
                            <input type="radio" name="answers[<?php echo e($question->id); ?>]" value="b" class="peer hidden">
                            <span class="peer-checked:text-primary"><?php echo e($question->option_b); ?></span>
                        </label>
                        <label
                            class="flex items-center gap-2 bg-[#D9EFFF] p-2 rounded-lg shadow cursor-pointer transition border-2 border-transparent hover:border-primary peer-checked:border-primary">
                            <input type="radio" name="answers[<?php echo e($question->id); ?>]" value="c" class="peer hidden">
                            <span class="peer-checked:text-primary"><?php echo e($question->option_c); ?></span>
                        </label>
                        <label
                            class="flex items-center gap-2 bg-[#D9EFFF] p-2 rounded-lg shadow cursor-pointer transition border-2 border-transparent hover:border-primary peer-checked:border-primary">
                            <input type="radio" name="answers[<?php echo e($question->id); ?>]" value="d" class="peer hidden">
                            <span class="peer-checked:text-primary"><?php echo e($question->option_d); ?></span>
                        </label>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <!-- Submit Button -->
            <div class="w-full max-w-4xl text-center">
                <button type="submit"
                    class="bg-secondary text-white p-2 px-4 rounded-xl hover:underline font-semibold text-sm">
                    Submit Test →
                </button>
            </div>
        </form>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\awang\code-academy-main\code-academy-main\resources\views/user/courses/quiz.blade.php ENDPATH**/ ?>