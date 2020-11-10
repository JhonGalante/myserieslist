<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova série</title>
</head>

<body>


    <div class="container mt-3">
        <h1>Nova série</h1>
        <?php echo form_open('series/store') ?>
        
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo isset($serie['titulo']) ? ($serie['titulo']) : "";?>">
            </div>

            <div class="form-group">
                <label for="sinopse">Sinopse</label>
                <textarea class="form-control" name="sinopse" id="sinopse" rows="3"><?php echo isset($serie['sinopse']) ? ($serie['sinopse']) : "";?></textarea>
            </div>

            <div class="form-group">
                <label for="nota">Nota</label>
                <input type="text" class="form-control" name="nota" id="nota" value="<?php echo isset($serie['nota']) ? ($serie['nota']) : "";?>">
            </div>

            <div class="form-group">
                <label for="episodios">Episódios</label>
                <input type="text" class="form-control" name="episodios" id="episodios" value="<?php echo isset($serie['episodios']) ? ($serie['episodios']) : "";?>">
            </div>

            <button type="submit" class="btn btn-success">Salvar</button>
        
            <input type="hidden" name="id" value="<?php echo isset($serie['id']) ? ($serie['id']) : "";?>">

        </form>
    </div>

</body>

</html>