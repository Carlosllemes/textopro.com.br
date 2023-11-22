$(document).ready(function() {
    const autoAside = document.querySelector('.aside--auto');
    if(autoAside != null) {
        const asideActivePage = $('header nav ul li a[href="' + window.location + '"]');       
        const asideMenuItems = asideActivePage.closest("ul").children("li").clone();
        const asideTitle = $(".aside-title");
        if(asideTitle != null) {
        	const asideHeading = asideActivePage.closest("ul").siblings("a").clone();
        	asideTitle.html(asideHeading);   
        }   
        asideMenuItems.removeAttr("style class");
	    asideMenuItems.appendTo(".aside--auto nav ul");     
    }
});