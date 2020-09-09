$(document).ready(function(){
    $('table').DataTable(
        {
            "bFilter": false,
            "language": {
                "paginate": {
                    "previous": "<",
                    "next": ">",                    
                },
                "emptyTable": "Não há registros"
            },
            "aoColumns": [
                { "bSortable": false },
                { "bSortable": true },
                { "bSortable": true },
                { "bSortable": true },
                { "bSortable": true },
                { "bSortable": true }
            ]

        }
    );
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });        
    
});