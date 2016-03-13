$(function() {
    $('#table').bootstrapTable({
        pagination: true,
        search: true,
        // pageSize: 10,
        columns: [{
            field: 'id',
            title: '№',
            sortable: true
        }, {
            field: 'name',
            title: 'Название',
            sortable: true
        }, {
            field: 'publshed_at',
            title: 'Дата публикации',
            sortable: true
        }, {
            field: 'controls',
            title: 'Управление'
        }]
    });

    $('.delete').on('click', function () {
        console.log($(this).closest('tr').find('td:first-child').text());
        $('.delete-form').attr('action', '/dashboard/webinars/' + $(this).closest('tr').find('td:first-child').text() );
    });
});