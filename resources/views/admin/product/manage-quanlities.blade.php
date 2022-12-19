@for ($i = 1; $i <= $count_number_color_selected; ++$i)
    <div class="container-fluid mb-2">
        <div class="row">
            <div class="col-md-6 ">
                <select name="color_selection[]" class="form-select">
                    <option>.....Choose.....</option>
                    @foreach ($colors as $color)
                        <option value="{{ $color->id }}">{{ $color->color_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 ">
                <input type="number" name="product_quanlities[]" class="form-control"
                    placeholder="Enter product quanlities">
            </div>
        </div>
    </div>
@endfor
