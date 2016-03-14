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

    console.log(location);

    $('.delete').on('click', function () {
        console.log($(this).closest('tr').find('td:first-child').text());
        $('.delete-form').attr('action', location.pathname + '/' + $(this).closest('tr').find('td:first-child').text() );
    });

    $('thead').on('click', function () {
        console.log('clcked thead');
        setTimeout(function () {
            $('.delete').off().on('click', function () {
                console.log($(this).closest('tr').find('td:first-child').text());
                $('.delete-form').attr('action', location.pathname + '/' + $(this).closest('tr').find('td:first-child').text() );
            });
            console.log("timeout");
        }, 100);
    });
});