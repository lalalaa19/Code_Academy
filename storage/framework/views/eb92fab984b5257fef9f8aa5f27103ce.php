<?php $__env->startSection('title', 'Admin Dashboard'); ?>

<?php $__env->startSection('admin-content'); ?>
    <div class="container mx-auto py-10">
        <h1 class="text-4xl font-bold text-center mb-8">Welcome to Admin Dashboard</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-6">
                    <h5 class="text-xl font-bold text-gray-800 mb-4">Manage Courses</h5>
                    <p class="text-gray-600 mb-4">Create, edit, and delete courses for users to learn.</p>
                    <a href="<?php echo e(route('admin.courses.index')); ?>"
                        class="inline-block bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-600">
                        Go to Courses
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\awang\code-academy-main\code-academy-main\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>