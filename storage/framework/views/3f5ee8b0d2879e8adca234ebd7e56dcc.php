<?php $__env->startSection('title', 'Edit Chapter'); ?>

<?php $__env->startSection('admin-content'); ?>
    <div class="container px-4 py-10 mx-auto">
        <h1 class="mb-6 text-3xl font-bold text-gray-800">Edit Chapter for "<?php echo e($course->title); ?>"</h1>

        
        <?php if(session('success')): ?>
            <div class="p-4 mb-6 text-green-800 bg-green-100 rounded">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php if(session('error')): ?>
            <div class="p-4 mb-6 text-red-800 bg-red-100 rounded">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        
        <form action="<?php echo e(route('admin.courses.chapters.update', [$course, $chapter])); ?>" method="POST"
            class="p-6 bg-white rounded-lg shadow-md">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            
            <div class="mb-4">
                <label for="title" class="block mb-2 font-medium text-gray-700">Chapter Title</label>
                <input type="text" name="title" id="title" value="<?php echo e(old('title', $chapter->title)); ?>"
                    class="w-full p-2 border border-gray-300 rounded-lg" required>
            </div>

            
            <div class="mb-4">
                <label for="video_url" class="block mb-2 font-medium text-gray-700">Video URL</label>
                <input type="url" name="video_url" id="video_url" value="<?php echo e(old('video_url', $chapter->video_url)); ?>"
                    class="w-full p-2 border border-gray-300 rounded-lg">
            </div>

            
            <div class="flex justify-end">
                <button type="submit"
                    class="px-4 py-2 font-semibold text-white bg-green rounded-lg shadow hover:bg-green-600">
                    Update Chapter
                </button>
                <a href="<?php echo e(route('admin.courses.edit', $course)); ?>"
                    class="p-3 ml-4 text-gray-600 hover:text-gray-800">Cancel</a>
            </div>
        </form>

        <hr class="my-10">

        
        <h2 class="mb-6 text-2xl font-bold text-gray-800">Quiz & Questions</h2>

        <?php if($chapter->quiz): ?>
            <div class="p-6 bg-white rounded-lg shadow-md">
                <div class="flex items-center justify-between mb-2">
                    <h3 class="mb-4 text-xl font-bold text-gray-700">Quiz: <?php echo e($chapter->quiz->title); ?></h3>
                    <a href="<?php echo e(route('admin.chapters.quizzes.create', ['chapter' => $chapter->id, 'course' => $course->id])); ?>"
                        class="p-2 text-white bg-primary rounded-xl">Create a
                        Quiz</a>
                </div>

                <table class="w-full border border-gray-300 table-auto">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-2 border border-gray-300">#</th>
                            <th class="px-4 py-2 border border-gray-300">Question</th>
                            <th class="px-4 py-2 border border-gray-300">Option A</th>
                            <th class="px-4 py-2 border border-gray-300">Option B</th>
                            <th class="px-4 py-2 border border-gray-300">Option C</th>
                            <th class="px-4 py-2 border border-gray-300">Option D</th>
                            <th class="px-4 py-2 border border-gray-300">Correct Option</th>
                            <th class="px-4 py-2 border border-gray-300">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $chapter->quiz->questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="px-4 py-2 text-center border border-gray-300"><?php echo e($index + 1); ?></td>
                                <td class="px-4 py-2 border border-gray-300"><?php echo e($question->question); ?></td>
                                <td class="px-4 py-2 border border-gray-300"><?php echo e($question->option_a); ?></td>
                                <td class="px-4 py-2 border border-gray-300"><?php echo e($question->option_b); ?></td>
                                <td class="px-4 py-2 border border-gray-300"><?php echo e($question->option_c); ?></td>
                                <td class="px-4 py-2 border border-gray-300"><?php echo e($question->option_d); ?></td>
                                <td class="px-4 py-2 text-center border border-gray-300">
                                    <?php echo e(strtoupper($question->correct_option)); ?></td>
                                <td class="px-4 py-2 text-center border border-gray-300">
                                    <a href="<?php echo e(route('admin.quizzes.questions.edit', [$chapter->quiz, $question])); ?>"
                                        class="mr-1 text-primary hover:text-blue-700">Edit</a>
                                    <form
                                        action="<?php echo e(route('admin.quizzes.questions.destroy', [$chapter->quiz, $question])); ?>"
                                        method="POST" class="inline-block">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="text-red-500 hover:text-red-700"
                                            onclick="return confirm('Are you sure you want to delete this question?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="8" class="py-4 text-center text-gray-500">No questions available.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <p class="text-gray-500">No quiz available for this chapter. <a
                    href="<?php echo e(route('admin.chapters.quizzes.create', ['chapter' => $chapter->id, 'course' => $course->id])); ?>"
                    class="text-primary hover:text-blue-700">Create a
                    Quiz</a></p>
        <?php endif; ?>


        
        <h2 class="my-6 text-2xl font-bold text-gray-800">Artikel</h2>
        <?php if($chapter->articles->count() > 0): ?>
            <div class="p-6 bg-white rounded-lg shadow-md">
                <div class="flex items-center justify-between mb-2">
                    <h3 class="mb-4 text-xl font-bold text-gray-700">Artikel: </h3>
                    <a href="<?php echo e(route('admin.chapters.articles.create', ['chapter' => $chapter->id, 'course' => $course->id])); ?>"
                        class="p-2 text-white bg-primary rounded-xl">Create a
                        Article</a>
                </div>


                <table class="w-full border border-gray-300 table-auto">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-2 border border-gray-300">#</th>
                            <th class="px-4 py-2 border border-gray-300">Title</th>
                            <th class="px-4 py-2 border border-gray-300">Content</th>
                            <th class="px-4 py-2 border border-gray-300">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $chapter->articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="px-4 py-2 text-center border border-gray-300"><?php echo e($index + 1); ?></td>
                                <td class="px-4 py-2 border border-gray-300"><?php echo e($article->title); ?></td>
                                <td class="px-4 py-2 border border-gray-300"><?php echo e($article->content); ?></td>
                                <td class="px-4 py-2 text-center border border-gray-300">
                                    <a href="<?php echo e(route('admin.chapters.articles.edit', ['course' => $course, 'chapter' => $chapter, 'article' => $article])); ?>"
                                        class="mr-1 text-primary ">Edit</a>
                                    <form
                                        action="<?php echo e(route('admin.chapters.articles.destroy', ['course' => $course, 'chapter' => $chapter, 'article' => $article])); ?>"
                                        method="POST" class="inline-block">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="text-red-500 hover:text-red-700"
                                            onclick="return confirm('Are you sure you want to delete this question?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="8" class="py-4 text-center text-gray-500">No questions available.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <p class="text-gray-500">No article available for this chapter. <a
                    href="<?php echo e(route('admin.chapters.articles.create', ['chapter' => $chapter->id, 'course' => $course->id])); ?>"
                    class="text-primary">Create a
                    Article</a></p>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\awang\code-academy-main\code-academy-main\resources\views/admin/chapters/edit.blade.php ENDPATH**/ ?>