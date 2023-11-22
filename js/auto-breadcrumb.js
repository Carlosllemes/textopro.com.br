$(document).ready(function() {
    const autoBread = document.querySelector(".bread--auto");
    if(autoBread != null) {
        let breadItem = $('header nav ul li a[href="' + window.location + '"]');

        while(true) {
            breadItem = breadItem.closest("ul").siblings("a");
            if(breadItem.attr("href")) {
                let itemTitle = breadItem.attr("title");
                let itemUrl = breadItem.attr("href");              

                $('#breadcrumb .bread__column:first-child').after(`
                    <li class="bread__column" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a  href="`+ itemUrl +`" itemprop="item" title="`+ itemTitle +`">
                            <span itemprop="name">`+ itemTitle +`</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                `);  
            } 
            else break; 
        }

        $('#breadcrumb').append(`
            <li class="bread__column active" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <span itemprop="name"><?=$h1?></span>
                <meta itemprop="position" content="1">
            </li>
        `);

        $('.bread__column [itemprop="position"]').each(function(index) {
            $(this).attr('content', index + 1);
        });
    }
});