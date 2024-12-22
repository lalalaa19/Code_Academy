<?php $__env->startSection('title', 'Edit Course'); ?>

<?php $__env->startSection('admin-content'); ?>
    <div class="container px-4 py-5 mx-auto">
        <h1 class="mb-6 text-3xl font-bold text-gray-800">Edit Course: "<?php echo e($course->title); ?>"</h1>

        
        <?php if(session('success')): ?>
            <div class="p-4 mb-6 text-green-800 bg-green-100 rounded">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php if($errors->any()): ?>
            <div class="p-4 mb-6 text-red-800 bg-red-100 rounded">
                <ul class="pl-6 list-disc">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        
        <form action="<?php echo e(route('admin.courses.update', $course)); ?>" method="POST" enctype="multipart/form-data"
            class="p-6 bg-white rounded-lg shadow-md">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            
            <div class="mb-4">
                <label for="title" class="block mb-2 font-medium text-gray-700">Course Title</label>
                <input type="text" name="title" id="title" class="w-full p-2 border border-gray-300 rounded-lg"
                    placeholder="Edit judul kursus.." value="<?php echo e(old('title', $course->title)); ?>">
            </div>

            
            <div class="mb-4">
                <label for="description" class="block mb-2 font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" rows="5" class="w-full p-2 border border-gray-300 rounded-lg"
                    placeholder="Edit deskripsi kursus.."><?php echo e(old('description', $course->description)); ?></textarea>
            </div>

            
            <div class="mb-4">
                <label for="image" class="block mb-2 font-medium text-gray-700">Course Image</label>
                <?php if($course->image): ?>
                    <div class="mb-4">
                        <img src="<?php echo e(asset('storage/' . $course->image)); ?>" alt="<?php echo e($course->title); ?>"
                            class="object-cover w-32 h-32 rounded">
                    </div>
                <?php endif; ?>
                <input type="file" name="image" id="image" class="w-full p-2 border border-gray-300 rounded-lg">
                <small class="text-gray-500">Upload a new image to replace the current one (optional).</small>
            </div>

            
            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 font-semibold text-white bg-green rounded-lg shadow">Update
                    Course</button>
                <a href="<?php echo e(route('admin.courses.index')); ?>" class="p-3 ml-4 text-gray-600 hover:text-gray-800">Cancel</a>
            </div>
        </form>

        <hr class="my-10">

        
        <div>
            <h2 class="mb-6 text-2xl font-bold text-gray-800">Chapters</h2>
            <a href="<?php echo e(route('admin.courses.chapters.create', $course)); ?>"
                class="inline-block px-4 py-2 mb-6 font-semibold text-white bg-blue-500 rounded-lg shadow hover:bg-blue-600">
                Add New Chapter
            </a>

            <?php if($course->chapters->isEmpty()): ?>
                <p class="text-gray-600">No chapters available for this course.</p>
            <?php else: ?>
                <table class="min-w-full overflow-hidden bg-white rounded-lg shadow-md">
                    <thead class="text-white bg-gray-800">
                        <tr>
                            <th class="px-4 py-3 text-left">#</th>
                            <th class="px-4 py-3 text-left">Title</th>
                            <th class="px-4 py-3 text-left">Content</th>
                            <th class="px-4 py-3 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <?php $__currentLoopData = $course->chapters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chapter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="hover:bg-gray-100">
                                <td class="px-4 py-3"><?php echo e($loop->iteration); ?></td>
                                <td class="px-4 py-3"><?php echo e($chapter->title); ?></td>
                                <td class="px-4 py-3"><?php echo e($chapter->content); ?></td>
                                <td class="px-4 py-3 text-center">
                                    
                                    <a href="<?php echo e(route('admin.courses.chapters.edit', [$course, $chapter])); ?>"
                                        class="p-2 px-4 font-semibold text-white bg-yellow-500 rounded-lg">
                                        Edit
                                    </a>

                                    
                                    <form action="<?php echo e(route('admin.courses.chapters.destroy', [$course, $chapter])); ?>"
                                        method="POST" class="inline-block">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit"
                                            class="bg-red-500 text-white p-1.5 ml-2 px-4 rounded-lg font-semibold"
                                            onclick="return confirm('Are you sure you want to delete this chapter?');">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\awang\code-academy-main\code-academy-main\resources\views/admin/courses/edit.blade.php ENDPATH**/ ?>