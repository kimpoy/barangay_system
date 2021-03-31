    <!-- Search Table Script -->
    <script src="../includes/admin/scripts/search-table-script.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Modal Script -->
    <script src="../includes/admin/scripts/modals-script.js"></script>\
    <script src="../includes/scripts/alert_close.js"></script>
    <!-- View Graph Script -->
    <?php require_once '../includes/admin/view/graph.php' ?>
    <script>
        $(document).ready(function() {
            $('.editbtn').on('click', function() {
                $('#exampleModal').modal('show');
                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
                $('#username').val(data[1]);


            });
        });

        $(document).ready(function() {
            $('.createbtn').on('click', function() {
                $('#createModal').modal('show');


            });
        });
    </script>