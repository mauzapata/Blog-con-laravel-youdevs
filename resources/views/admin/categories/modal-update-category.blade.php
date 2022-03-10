<div class="modal fade" id="modal-update-category-{{$category->id}}">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Actualizar Categoria</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>

            <form action="{{route('admin.categories.update', $category->id)}}" method="POST">
                {{csrf_field() }}
                <div class="modal-body">
                    <div class="form group">
                        <label for="name">Categoria</label>
                        <input type="text" name="name" class="form-control" id="category" value="{{$category->name}}">
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-warning" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-outline-primary">Guardar</button>
                </div>
            </form>
        </div>