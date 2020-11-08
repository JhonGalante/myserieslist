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
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>