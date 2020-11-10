<div class="container mt-5">
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
                            <button class="btn btn-success mr-1"><?php echo anchor('series/edit/'.$serie['id'], 'Editar')?></button>
                            <button class="btn btn-danger"><?php echo anchor('series/delete/'.$serie['id'], 'Excluir')?></button>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>