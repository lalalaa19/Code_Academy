<?php $__env->startSection('title', 'Manage Courses'); ?>

<?php $__env->startSection('admin-content'); ?>
    <div class="container mx-auto py-10 px-4">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Manage Courses</h1>

        
        <?php if(session('success')): ?>
            <div class="bg-green-100 text-green-800 p-4 rounded mb-6">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        
        <a href="<?php echo e(route('admin.courses.create')); ?>"
            class="bg-blue-500 text-white font-semibold py-3 px-4 rounded-lg shadow hover:bg-blue-600">
            Add New Course
        </a>

        
        <div class="mt-6">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">#</th>
                        <th class="py-3 px-4 text-left">Title</th>
                        <th class="py-3 px-4 text-left">Description</th>
                        <th class="py-3 px-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php $__empty_1 = true; $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="hover:bg-gray-100">
                            <td class="py-3 px-4"><?php echo e($loop->iteration); ?></td>
                            <td class="py-3 px-4"><?php echo e($course->title); ?></td>
                            <td class="py-3 px-4"><?php echo e($course->description); ?></td>
                            <td class="py-3 px-4 text-center">
                                
                                <a href="<?php echo e(route('admin.courses.edit', $course)); ?>"
                                    class="bg-yellow-500 text-white p-2 px-4 rounded-lg font-semibold">Edit</a>

                                
                                <form action="<?php echo e(route('admin.courses.destroy', $course)); ?>" method="POST"
                                    class="inline-block">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="bg-red-500 text-white p-1.5 px-4 rounded-lg font-semibold"
                                        onclick="return confirm('Are you sure you want to delete this course?');">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="4" class="text-center py-4 text-gray-600">No courses available.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\awang\code-academy-main\code-academy-main\resources\views/admin/courses/index.blade.php ENDPATH**/ ?>