$(function() {
    $('#webinars-table').bootstrapTable({
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

    $('#books-table').bootstrapTable({
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
            field: 'price',
            title: 'Цена',
            sortable: true
        }, {
            field: 'controls',
            title: 'Управление'
        }]
    });

    $('.delete').on('click', function () {
        $('.delete-form').attr('action', location.pathname + '/' + $(this).closest('tr').find('td:first-child').text() );
    });

    $('thead').on('click', function () {
        setTimeout(function () {
            $('.delete').off().on('click', function () {
                $('.delete-form').attr('action', location.pathname + '/' + $(this).closest('tr').find('td:first-child').text() );
            });
        }, 100);
    });
});