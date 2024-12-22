<?php $__env->startSection('title', 'Add New Chapter'); ?>

<?php $__env->startSection('admin-content'); ?>
    <div class="container px-4 py-10 mx-auto">
        <h1 class="mb-6 text-3xl font-bold text-gray-800">Add New Article for <?php echo e($chapter->title); ?></h1>

        
        <?php if($errors->any()): ?>
            <div class="p-4 mb-6 text-red-800 bg-red-100 rounded">
                <ul class="pl-6 list-disc">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>


        <form
            action="<?php echo e(route('admin.chapters.articles.update', ['chapter' => $chapter, 'course' => $course, 'article' => $article])); ?>"
            method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            
            <div class="mb-4">
                <label for="title" class="block mb-2 font-medium text-gray-700">Chapter Title</label>
                <input type="text" name="title" id="title" value="<?php echo e($article->title); ?>"
                    class="w-full p-2 border border-gray-300 rounded-lg" placeholder="Masukkan judul chapter.." required>
            </div>


            
            <div class="mb-4">
                <label for="content" class="block mb-2 font-medium text-gray-700">Content</label>
                <textarea placeholder="Describe yourself here..." name="content" id="content"
                    class="w-full p-2 border border-gray-300 rounded-lg" rows="3"> <?php echo e($article->content); ?></textarea>
            </div>

            
            <div class="flex justify-end">
                <button type="submit"
                    class="px-4 py-2 font-semibold text-white bg-blue-500 rounded-lg shadow hover:bg-blue-600">
                    Update Chapter
                </button>
                <a href="<?php echo e(route('admin.courses.chapters.edit', ['chapter' => $chapter, 'course' => $course])); ?>"
                    class="ml-4 text-gray-600 hover:text-gray-800">Cancel</a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\awang\code-academy-main\code-academy-main\resources\views/admin/articles/edit.blade.php ENDPATH**/ ?>