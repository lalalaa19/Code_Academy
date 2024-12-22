<?php $__env->startSection('title', 'Add New Course'); ?>

<?php $__env->startSection('admin-content'); ?>
    <div class="container mx-auto py-5 px-4">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Add New Course</h1>

        
        <?php if($errors->any()): ?>
            <div class="bg-red-100 text-red-800 p-4 rounded mb-6">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        
        <form action="<?php echo e(route('admin.courses.store')); ?>" method="POST" enctype="multipart/form-data"
            class="bg-white p-6 rounded-lg shadow-md">
            <?php echo csrf_field(); ?>

            
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium mb-2">Course Title</label>
                <input type="text" id="title" name="title" value="<?php echo e(old('title')); ?>"
                    class="w-full border border-gray-300 p-2 rounded-lg" placeholder="Masukkan judul kursus.." required>
            </div>

            
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium mb-2">Description (Optional)</label>
                <textarea id="description" name="description" rows="4" class="w-full border border-gray-300 p-2 rounded-lg"
                    placeholder="Masukkan deskripsi kursus"><?php echo e(old('description')); ?></textarea>
            </div>

            
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-medium mb-2">Course Image</label>
                <input type="file" id="image" name="image" class="w-full border border-gray-300 p-2 rounded-lg">
                <small class="text-gray-500">Upload an image for the course (optional, max 2MB, formats: jpeg, png,
                    jpg).</small>
            </div>

            
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg shadow hover:bg-blue-600">
                    Add Course
                </button>
                <a href="<?php echo e(route('admin.courses.index')); ?>" class="ml-4 p-3 text-gray-600 hover:text-gray-800">Cancel</a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\awang\code-academy-main\code-academy-main\resources\views/admin/courses/create.blade.php ENDPATH**/ ?>