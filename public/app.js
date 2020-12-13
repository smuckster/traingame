// Load the map array into memory
let map;

axios.get('/map')
    .then(response => map = JSON.parse(response.data.map));

$(document).ready(function(){
    let currentTerrain = $('.terrain-select').val();

    $('.node').click(function() {
        type = $('.terrain-select option:selected').data('type');
        x = $(this).data('x');
        y = $(this).data('y');

        // Change the appearance of the node
        $(this)
            .removeClass()
            .addClass('node')
            .addClass(currentTerrain)
            .data('type', type);

        // Edit the map array stored in memory with
        // new information about the node's type
        map[y][x] = type;

        // Update saved changes message
        $('.message').removeClass('success').addClass('warning').text('Some changes not saved.');
    });

    // When the terrain selector is changed, change the variable
    // used to determine terrain upon clicking a node
    $('.terrain-select').change(function() {
        currentTerrain = $(this).val();
    });

    // When the save button is clicked, send a copy
    // of the map array to the app to be persisted.
    $('.save').click(function() {
        axios.post('/map', {map: JSON.stringify(map)})
            .then($('.message').removeClass('warning').addClass('success').text('Changes saved!'));
    });
});
