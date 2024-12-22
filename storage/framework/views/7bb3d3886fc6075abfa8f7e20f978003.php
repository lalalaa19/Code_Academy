<?php $__env->startSection('content'); ?>
    <div class="flex min-h-screen">
        
        <aside class="w-64 bg-gray-800 text-white flex flex-col py-6 px-4">
            <h2 class="text-2xl font-bold mb-6 text-center">Admin Panel</h2>
            <ul class="space-y-4">
                <li>
                    <a href="<?php echo e(route('admin.dashboard')); ?>"
                        class="block text-gray-300 hover:text-white hover:bg-gray-700 rounded-lg py-2 px-4">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('admin.courses.index')); ?>"
                        class="block text-gray-300 hover:text-white hover:bg-gray-700 rounded-lg py-2 px-4">
                        Manage Courses
                    </a>
                </li>
            </ul>
        </aside>

        
        <section class="flex-1 bg-gray-100 p-6">
            <?php echo $__env->yieldContent('admin-content'); ?>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\awang\code-academy-main\code-academy-main\resources\views/layouts/admin.blade.php ENDPATH**/ ?>