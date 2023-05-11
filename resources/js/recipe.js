$(function () {
    $('#servings').on('change', function () {
        let servings = $(this).val();
        let defaultServings = $(this).data('value');
        $('.ingredientValue').each(function () {
            $(this).text(($(this).data('value') / defaultServings * servings).toFixed(2))
        })
    });
})