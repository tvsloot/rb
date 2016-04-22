<?php

use App\Ingredient;

$selected = isset($entity)
    ? $entity->ingredients->lists('title', 'id')
    : [];

$element = BootForm::select('Ingredient Tags', 'ingredients')
    ->attribute('multiple', 'multiple')
    ->attribute('style', 'width:100%')
    ->attribute('name', 'ingredients[]')
    ->options($selected)
    ->select(array_keys($selected));

echo $element;

?>

@section('scripts')
    @parent
    <script type="text/javascript">

        $(function(){
            $('#ingredients').select2({
                placeholder: 'Select or add ingredients',
                tags: true,
                tokenSeparators: [','],
                ajax: {
                    url: '/ingredient/search',
                    dataType: 'json',
                    data: function (params) {
                        return {q: params.term};
                    },
                },
            });
        });
    </script>
@stop
