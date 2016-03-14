<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                Вы уверены?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                <form class="delete-form" action="" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger">Удалить</button>
                </form>
            </div>
        </div>
    </div>
</div>
