<div class="left-nav">
    <div id="side-nav">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <ul id="nav">
            <li>
                <a _href="javascript:;">
                    <i class="iconfont">&#xe6b8;</i>
                        <cite><?php echo e($v['menu_name']); ?></cite>
                    <i class="iconfont nav_right">&#xe697;</i>

                </a>
                <?php $__currentLoopData = $v['son']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kk=>$vv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <ul class="sub-menu">

                    <li date-refresh="1">

                        <a _href="<?php echo e($vv['url']); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite><?php echo e($vv['menu_name']); ?></cite>
                        </a>

                    </li >

                </ul>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </li>
        </ul>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH E:\study\PHPTutorial\WWW\shop\shop\resources\views/Layout/left.blade.php ENDPATH**/ ?>