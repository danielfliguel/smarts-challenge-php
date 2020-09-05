
<script type="text/javascript">
    $(document).ready(function(){
        $('table').DataTable(
            {
                "bFilter": false,
                "language": {
                    "paginate": {
                        "previous": "Anterior",
                        "next": "Próxima"
                    }
                }

            }
        );
        $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });

        
        
    });
    
</script>

</body>
</html>