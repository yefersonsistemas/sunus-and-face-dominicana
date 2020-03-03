var buscador = $("#table").DataTable();

$("#input-search").keyup(function() {

    buscador.search($(this).val()).draw();
});