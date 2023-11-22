$(window).load(function() {
    let listmap = [];
    $('#searchThumb li a').each(function() {
        listmap.push($(this));
    });

    $('#searchThumb').empty();
    $(listmap).each(function() {
        $('#searchThumb').append($(this));
        $(this).wrap('<li></li>');
    });

    $('#searching').remove();
    $('#searchThumb').show();
    searchChart($('#inputSearch'), $('#searchThumb li'));
});

function normalizeChart(str) {
    return str.normalize('NFD').replace(/[\u0300-\u036f]/g, '');
}

function cleanChart(str) {
    return str.replace(/\s+/g, ' ').toLowerCase();
}

function searchChart(search, div) {

    $(document).on('keyup', search, function() {

        let rows = $(div), val = normalizeChart(cleanChart(search.val()));

        rows.show().filter(function() {

            let text = normalizeChart(cleanChart($(this).text()));

            let alink = $(this).children();

            let child = alink.find('#searchThumb li a').attr('href');

            if (typeof child !== 'undefined') {
                text += cleanChart(child);
            }
            
            return !~text.search(val);

        }).hide();
    })
}

function clearSearch() {
    ul = document.getElementById('searchThumb');
    li = ul.getElementsByTagName('li');
    for (i = 0; i < li.length; i++) {
        li[i].style.display = "";
    }
    
    document.getElementById('inputSearch').reset();
    document.getElementById('countResult').innerHTML = '';
    document.getElementById('inputSearch').focus();
}