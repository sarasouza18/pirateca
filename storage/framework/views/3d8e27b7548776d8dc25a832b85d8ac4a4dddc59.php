<?php $__env->startSection('content'); ?>

    <div class="right_col" role="main">
        <?php if(Auth::check()): ?>

            <?php $__empty_1 = true; $__currentLoopData = $conteudo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cont): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <h3><?php echo e($cont->titulo); ?></h3>
                            <p><?php echo e($cont->arquivo); ?></p>
                            <a class="btn" href="<?php echo e(url('documentos').'/'.$cont->id); ?>" > Ver +</a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p>Nenhuma Categoria Cadastrada</p>
                <?php endif; ?>
        <?php else: ?>
            <h3>Você precisa fazer o login <a href="/login">Clique para fazer o login</a></h3>
            <h3>Ir para o site <a href="/index">Ir para o site</a></h3>


        <?php endif; ?>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout-interno', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>