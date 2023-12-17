$(document).ready(function () {
    // Add an event listener to the filter elements
    $('.filter-item input[type="checkbox"]').change(function () {
        // Get the selected filters
        var filters = {};
        $('.filter-item input[type="checkbox"]:checked').each(function () {
            filters[$(this).attr("name")] = $(this).val();
        });

        // Send an AJAX request to the server
        $.ajax({
            url: '{{ route("store.filter") }}',
            type: "POST",
            data: { filters: filters },
            dataType: "json",
            success: function (data) {
                // Update the product list on success
                // You need to implement this part based on your HTML structure
                console.log(data.products);
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            },
        });
    });
});
