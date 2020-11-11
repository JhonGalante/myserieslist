<script>
    function confirmDelete(id){
        bootbox.confirm({
            message:'<p class="text-dark">Tem certeza que deseja excluir essa série?</p>',
            callback: function(confirmacao){
                if(confirmacao){
                    window.location.href= "<?php echo site_url('series/delete/')?>"+id;
                }else{
                    bootbox.alert('<p class="text-dark">Exclusão cancelada.</p>');
                }
            },
            buttons: {
                cancel: {label: '<i class="fa fa-times"></i> Cancelar', className:'btn-default'},
                confirm: {label: '<i class="fa fa-check"></i> Confirmar', className:'btn-danger'}
            }
        });
    }
</script>

<div class="container mt-4">
    <h3>Séries</h3>
    <table class="table table-hover table-light text-dark table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Título</th>
                <th>Sinopse</th>
                <th>Nota</th>
                <th>Episodios</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($series as $serie) : ?>
                <tr>
                    <th><?= $serie['id'] ?></th>
                    <td><?= $serie['titulo'] ?></td>
                    <td><?= $serie['sinopse'] ?></td>
                    <td><?= $serie['nota'] ?></td>
                    <td><?= $serie['episodios'] ?></td>
                    <td>
                        <div class="btn-group">
                            <?php echo anchor('series/edit/'.$serie['id'], '<button class="btn btn-success mr-1">Editar</button>')?>
                            <button class="btn btn-danger" onclick="confirmDelete(<?php echo $serie['id'] ?>)">Excluir</button>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>