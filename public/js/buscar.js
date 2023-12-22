var id = null;
var dataTable;
$(document).ready(function() {
    dataTable = $('#table-elements').DataTable({
        "sDom": "<'row'<'col-sm-12'tr>>" + "<'card-footer p-0 pt-1'<'row'<'col-6'l><'col-6'p>>>",
        "lengthMenu": [[5], ["Exibir 5"]],
        "oLanguage": {
            "sEmptyTable": "Nenhum registro encontrado!",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado!",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente",
            },
        },
        "processing": true,
        "paging": true,
        "ordering": true,
        "info": true,
        "searching": false,
        responsive: {
            details: {
                type: 'column'
            }
        }
    });

    $("#buscarElement").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#table-elements tbody tr").filter(function() {
            $(this).toggle($(this).text()
            .toLowerCase().indexOf(value) > -1)
        });
    });
});

$("#table-elements tbody").on('click', 'tr', function(){
    // console.log(dataTable.row(this).data()[0]);  --- PEGA O ID DO ELEMENTO NO BANCO A PARTIR DA LINHA NO PHP
    $("tr").removeClass('selectede');
    if(id == dataTable.row(this).data()[0]){
        id = null;
        $(".btn").addClass('disabled');
    } else{
        id = dataTable.row(this).data()[0];
        $(this).toggleClass('selectede');
        $(".btn").removeClass('disabled');
    }
});


