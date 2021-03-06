<!-- Ajeitar posteriormente
    <footer>
        <span>Banco de séries criado usando CodeIgniter4 + Bootstrap + MySQL<span>
    </footer>
    -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

<script>
  console.log('Teste');
  $(document).ready(function() {
    $('#seriesTabela').DataTable({
      "language": {
            "lengthMenu": "Exibir _MENU_ linhas por página",
            "zeroRecords": "Nenhum dado cadastrado",
            "info": "Página _PAGE_ de _PAGES_",
            "infoEmpty": "Nenhum dado disponível",
            "infoFiltered": "(Filtrado de _MAX_ total)",
            "search": "Pesquisar: ",
            "paginate": {
              "first": "Primeiro",
              "last": "Último",
              "next": "Próximo",
              "previous": "Anterior"
            }
        }
    });
  });
</script>

</body>

</html>