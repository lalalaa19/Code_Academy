<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
    <div class="min-h-screen flex items-center justify-center bg-light">
        <div class="bg-white w-full max-w-md rounded-2xl shadow-md p-8">
            <h1 class="text-2xl font-bold text-center text-primary mb-6">Sign In</h1>

            
            <form action="<?php echo e(route('login')); ?>" method="POST" class="space-y-5">
                <?php echo csrf_field(); ?>

                
                <div>
                    <input type="email" name="email" id="email" placeholder="Email"
                        class="w-full border rounded-lg p-2 focus:outline-none focus:ring focus:ring-blue-200 text-gray-800"
                        value="<?php echo e(old('email')); ?>" required autofocus>
                </div>

                
                <div>
                    <input type="password" name="password" id="password" placeholder="Password"
                        class="w-full border rounded-lg p-2 focus:outline-none focus:ring focus:ring-blue-200 text-gray-800"
                        required>
                </div>

                
                <button type="submit" class="w-full bg-primary text-white font-semibold py-2 rounded-xl shadow transition">
                    Sign In
                </button>
            </form>

            
            <p class="text-center mt-4 text-primary">
                Belum punya akun? <a href="<?php echo e(route('register')); ?>" class="text-primary font-semibold">Daftar</a>
            </p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\awang\code-academy-main\code-academy-main\resources\views/auth/login.blade.php ENDPATH**/ ?>