<?php $__env->startSection('content'); ?>
    <div class="right_col" role="main">
        <?php if(Auth::check()): ?>

            <div>

                <form action="/filtro" method="POST" role="search">
                    <?php echo e(csrf_field()); ?>

                    <div class="input-group">
                        <input type="text" class="form-control" name="q"
                               placeholder="filtrar por titulo"> <span class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
                    </div>
                </form>
                    <h1>Listagem de Documentos:</h1>


                <?php $__empty_1 = true; $__currentLoopData = $documentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $documento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <h3><?php echo e($documento->titulo); ?></h3>
                            <p><?php echo e($documento->arquivo); ?></p>
                            <a class="btn" href="<?php echo e(url('documentos').'/'.$documento->id); ?>" > Ver +</a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p>Nenhuma Categoria Cadastrada</p>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <h3>Você precisa fazer o login <a href="/login">Clique para fazer o login</a></h3>
            <h3>Ir para o site <a href="/index">Ir para o site</a></h3>






         <?php endif; ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout-interno', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>