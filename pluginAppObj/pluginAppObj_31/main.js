function loginlogout_pluginAppObj_31() {

    function showLogin() {
        imLogoutC.addClass("no_display");
        imLoginC.removeClass("no_display");
    }

    function showLogout() {
        imLoginC.addClass("no_display");
        imLogoutC.removeClass("no_display");
    }

    function isUserLogged() {
        return ($.imCookie("im_access_cookie_uid") !== null && $.imCookie("im_access_cookie_uid") !== "") ? true : false;
    }

    var w5mode = "online";
    var visualization = "both";
    var type = "login";

    var imLogoutC = $("#pluginAppObj_31 .imLogoutC");
    var imLoginC = $("#pluginAppObj_31 .imLoginC");
    
    var show_me = '';
    if (w5mode !== "online") { // if no preview, do not show anything yet
        if (visualization === 'both') {
            show_me = (type === 'login') ? 'login' : 'logout';
        } else {
            show_me = (visualization === 'login') ? 'login' : 'logout';
        }
        if (show_me === 'login') {
            showLogin();
        } else {
            showLogout();
        }
    } else {
        x5engine.boot.push(function(){ 
            if (visualization === 'both' || type === 'logout') {
                var imLogoutAnchor = $("#pluginAppObj_31 .imLogoutAnchor");
                imLogoutAnchor.attr("href", x5engine.settings.currentPath + "res/imlogout.php");
            }
            if (isUserLogged()) {
                showLogout();
                var logout_user = 'first';
                if (logout_user !== 'no_value') {
                    $.ajax({
                        url: x5engine.settings.currentPath + 'appsresources/whoisonline.php?type=' + logout_user
                    }).done(function (res) {
                        var el = document.querySelector('#pluginAppObj_31 .logout_intro');
                        el.insertAdjacentHTML('beforeend', ' ' + res);
                    });
                }

            } else {
                showLogin();
            }
        }); //close ready or push
    }

}