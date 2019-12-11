<div class="left-nav">
    <div id="side-nav">
        <ul id="nav">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6b8;</i>
                        <cite><?php echo e($v['menu_name']); ?></cite>
                    <i class="iconfont nav_right">&#xe697;</i>

                </a>
                <ul class="sub-menu">
                    <?php $__currentLoopData = $v['son']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kk=>$vv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li date-refresh="1">
                        <a _href="member-list.html">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite><?php echo e($vv['menu_name']); ?></cite>

                        </a>
                    </li >
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
<?php /**PATH D:\store\shop\shop\resources\views/Layout\left.blade.php ENDPATH**/ ?>