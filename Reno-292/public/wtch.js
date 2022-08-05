var movie_list = {};
const STORAGE_MOVIE = "storage-movie";

if (movie_listFromLocal = localStorage.getItem(STORAGE_MOVIE)) {
    movie_list = JSON.parse(movie_listFromLocal);

    for (var key in movie_list) {
        createList(key, movie_list[key]);
    }
}

$(document).ready(function () {
    $('.add').click(function () {
        var movie_name = $('.movie-name').val();
        var movie_rating = $('.movie-rating').val();

        createList(movie_name, movie_rating);

        syncLocalStorage('ADD', movie_name, movie_rating);
    });
    $('tbody').on('click', '.delete', function () {
        $(this).parent('tr').remove();
        syncLocalStorage('DELETE', $(this).prev().prev().text());
    });

    $('table').on('click', '.sort-name', function () {
        sort('tbody', 'tr', '.name');
    });

    $('table').on('click', '.sort-rating', function () {
        sort('tbody', 'tr', '.rating');
    });

    $('.search').on('keyup', function () {
        var value = $(this).val().toLowerCase();
        $('.table-item').filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
})

function createList(name, rating) {
    var newMovie =
        `<tr class='table-item'>
        <td class='name'>${name}</td>
        <td class='rating'>${rating}</td>
        <td class='delete'>DELETE</td>
    </tr>`;

    $('table').append(newMovie);
}
function sort(a, b, c) {
    $(a).children(b).sort(function (a, b) {
        var A = $(a).children(c).text();
        var B = $(b).children(c).text();

        if (c == '.name') {
            return (A < B) ? -1 : (A > B) ? 1 : 0;
        } else {
            return (A > B) ? -1 : (A > B) ? 1 : 0;
        }
    }).appendTo(a);
}

function syncLocalStorage(activity, name, rating) {
    switch (activity) {
        case 'ADD':
            movie_list[name] = rating;
            break;
        case 'DELETE':
            delete movie_list[name];
            break;
        default:
            break;
    }

    localStorage.setItem(STORAGE_MOVIE, JSON.stringify(movie_list));
    return;
}

