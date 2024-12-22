<?php $__env->startSection('title', 'Add New Chapter'); ?>

<?php $__env->startSection('admin-content'); ?>
    <div class="container px-4 py-10 mx-auto">
        <h1 class="mb-6 text-3xl font-bold text-gray-800">Add New Chapter for "<?php echo e($course->title); ?>"</h1>

        
        <?php if($errors->any()): ?>
            <div class="p-4 mb-6 text-red-800 bg-red-100 rounded">
                <ul class="pl-6 list-disc">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        
        <form action="<?php echo e(route('admin.courses.chapters.store', $course)); ?>" method="POST"
            class="p-6 bg-white rounded-lg shadow-md">
            <?php echo csrf_field(); ?>

            
            <div class="mb-4">
                <label for="title" class="block mb-2 font-medium text-gray-700">Chapter Title</label>
                <input type="text" name="title" id="title" value="<?php echo e(old('title')); ?>"
                    class="w-full p-2 border border-gray-300 rounded-lg" placeholder="Masukkan judul chapter.." required>
            </div>


            
            <div class="mb-4">
                <label for="video_url" class="block mb-2 font-medium text-gray-700">Video URL</label>
                <input type="url" name="video_url" id="video_url" value="<?php echo e(old('video_url')); ?>"
                    class="w-full p-2 border border-gray-300 rounded-lg"
                    placeholder="Masukkan url video embed youtube chapter.." required>
            </div>

            
            <div class="flex justify-end">
                <button type="submit"
                    class="px-4 py-2 font-semibold text-white bg-blue-500 rounded-lg shadow hover:bg-blue-600">
                    Add Chapter
                </button>
                <a href="<?php echo e(route('admin.courses.edit', $course)); ?>"
                    class="ml-4 text-gray-600 hover:text-gray-800">Cancel</a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\awang\code-academy-main\code-academy-main\resources\views/admin/chapters/create.blade.php ENDPATH**/ ?>