// WEEBLY MULTILANGUAGE TOOLS
// http://blessingsweb.weebly.com/weebly-multilanguage.html

/*
// Things that should go in SETTINGS -> SEO -> Header Code :
// (all page names in should go in lowercase)

var langs = [
    //lang_code, name of first page of that language, HTML of the language changing link 
    ['en', 'home',   'English'],
    ['es', 'inicio', 'Español'],
];

var not_clickable = [];
var all_langs = [];
*/

var all_langs = [];
var not_clickable = [];

//inner variables from now on
var localStorage_enabled = typeof(Storage) !== "undefined";
try {language = language;} catch(e) {var language = null;} //if language is not defined, use null

// Function that sets up all features of multilanguage.
// Alternatively, you can call these functions one by one. 
function setup_multilanguage() {
    hide_menus();
    hide_items();
    add_lang_links();
    make_not_clickable();
}

function add_lang_links() {
    setup_language();
    console.log('adding language links');
    if (is_weebly_mobile()) {
        jQuery('#header').after('<div id="lang_links"></div>');
    } else {
        jQuery('#header-wrap').append('<div id="lang_links" style="position: absolute; top:0; right:0;"></div>');
    }
    jQuery('#lang_links').css('text-align', 'right');
    jQuery('#lang_links').css('padding', '4px');
    append_lang_links();
}

function append_lang_links() {
    lang_links_div = jQuery('#lang_links');
    console.log('appending lang links to:');
    console.log(lang_links_div);
    //add the language links
    for (var i = 0; i < langs.length; i++) {
        var lang_code = langs[i][0];
        var lang_link_text = langs[i][2];
        var link = (lang_code == language)
            ? lang_link_text
            : '<a href="javascript:change_lang(\'' + lang_code + '\')">' + lang_link_text + '</a>';
        console.log('language ' + lang_code + ': ' + link);
        if (i > 0) lang_links_div.append(' ');
        lang_links_div.append('<span class="lang_link">' + link + '</span>');
    }
}



function hide_items() {
    setup_language();
    var lang_class = 'lang_'+language;
    console.log('hiding language items... checking for ' + lang_class);
    jQuery('begin_lang').each(function() {
        var begin = jQuery(this);
        var must_hide = !begin.hasClass(lang_class);
        console.log(this);
        console.log(must_hide ? 'HIDE' : 'SHOW');
        if (must_hide) {
            elems = begin.parent().parent().nextAll().toArray();
            for (var i = 0; i < elems.length; i++) {
                var elem = jQuery(elems[i]);
                var is_end_lang = elem.find('end_lang').is('end_lang');
                if (is_end_lang) break;
                elem.hide();
            }
        }
    });
}


function hide_menus() {
    var menu_selector = '.wsite-menu-default';

    setup_language();
    console.log('Language: ' + language);

    var current_lang = null;
    var matched_langs = [];
    //jQuery('.wsite-menu-item-wrap').each(function(){
    jQuery('.wsite-menu-default li').each(function(){
        var menu = jQuery(this);
        var a = menu.children('a');
        var page_url = a.attr('href');
        var text = get_menu_name(a);

        in_all_langs = all_langs.indexOf(text) >= 0;
        var lang_info = get_lang_info_for_page(text, matched_langs);
        if (lang_info != null) {
            if (lang_info.length == 3) lang_info.push(page_url);         
            current_lang = lang_info[0].toLowerCase();
            //if this is the first page of this language, set the logo to go to this page url
            if (current_lang == language) { 
                jQuery('.wsite-logo a').attr('href', page_url);
            }
        }
        if (in_all_langs) {
            current_lang = null;
            show = true;
        } else {
            show = (current_lang == language);
        }

        if (show) menu.show(); else menu.hide();

        console.log('MENU: '+ text + ' - current lang: ' + current_lang + ' - ' +  (show ? 'SHOW' : 'HIDE'));
        console.log((langs[text] != null  ? 'in langs: ' + langs[text] : 'not in langs') + ' - ' + (in_all_langs ? 'in all_langs' : 'not in all_langs'));
    });
}

function make_not_clickable() {
    //top_menus = jQuery('.wsite-menu-item-wrap'); 
    //submenus = jQuery('.wsite-menu-subitem-wrap'); 
    top_menus = jQuery('.wsite-menu-default li'); 
    submenus = jQuery('.wsite-menus li'); 
    menus = jQuery.merge(top_menus, submenus);
    menus.each(function(){
        var a = jQuery(this).children('a');
        var text = get_menu_name(a);
        clickable = (not_clickable.indexOf(text) < 0);
        console.log(text + ' - ' + (clickable ? 'clickable' : 'NOT clickable'));
        if (!clickable) {
            a.attr('href', 'javascript:void');
            a.hover(function() { 
                jQuery(this).css('cursor', 'default');
            });
        }
    });
}

function setup_language() {
    if (language == 'all' || language == null) {
        if(localStorage_enabled) language = localStorage.getItem("language");
        else language = langs[0][0]; //default_language
    } 
    language = language.toLowerCase();
    if(localStorage_enabled) localStorage.setItem("language", language);
}

function get_lang_info_for_page(page_name, matched_langs) {
    for (var i = 0; i < langs.length; i++) {
        var lang_info = langs[i];
        if ( lang_info[1].toLowerCase() == page_name.toLowerCase() && matched_langs.indexOf(lang_info[0]) == -1) {
            matched_langs.push(lang_info[0]);
            return lang_info;
        }
    }
    return null;
}


function get_lang_info_for_lang(lang) {
    for (var i = 0; i < langs.length; i++) {
        var lang_info = langs[i];
        if (lang_info[0].toLowerCase() == lang) 
            return lang_info;
    }
    return null;
}

function change_lang(lang) {
    var lang_info = get_lang_info_for_lang(lang);
    document.location.href = lang_info[3];
}

function get_menu_name(menu_a) {
    var span = menu_a.children('span');
    var text = (span.length == 0) ? menu_a.html() : span.html();
    return text.toLowerCase().trim();
}

// check if it is web or mobile version
function is_weebly_mobile() {
    return jQuery('.wsite-mobile').length > 0;
}


