                

                <?php $__env->startSection('content'); ?>
                    <div class="right_col" role="main">
                        <?php if(Auth::check()): ?>
                            <form method="POST" action="/documentos/<?php echo e($documento->id); ?>">


                                <div class="row">
                                    <div class="col-md-12">
                                      <h4>Titulo: <?php echo e($documento->titulo); ?></h4>
                                        <h5>Autor: <?php echo e($documento->autor); ?></h5>
                                        <h5>Idioma: <?php echo e($documento->idioma); ?></h5>


                                    </div >


                                    <?php echo e(csrf_field()); ?>

                                </div>



                                <?php echo e(csrf_field()); ?>


                            </form>


                    </div>

                    <?php else: ?>
                        <h3>Você precisa fazer o login <a href="/login">Clique para fazer o login</a></h3>
                        <h3>Ir para o site <a href="/index">Ir para o site</a></h3>

                        <?php endif; ?>

                        </div>
            <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout-interno', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>