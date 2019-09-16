var Pngtree = {};
$(function () {
    Pngtree.publicPopup = function (e, t, n) {
        $(".qbweb-win." + e).fadeIn("1500", function () {
            $("." + t).animate({
                height: n + "px"
            })
        })
    }, $(".btn-Cpmclose").on("click", function () {
        var e = this;
        $(e).parent().animate({
            height: 0
        }, "3000", function () {
            $(e).parents(".qbweb-win").fadeOut()
        })
    }), Pngtree.ScrollBar = function () {
        var e = $(window).scrollTop();
        $(window).height;
        500 <= e ? $(".scroll-Nav").addClass("show") : $(".scroll-Nav").removeClass("show")
    };
    var t = $(window).scrollTop();

    function n(e, t) {
        if (0 != uid)
            switch (t) {
                case 1:
                    e.attr("placeholder", "Search Graphic Design");
                    break;
                case 2:
                    e.attr("placeholder", "Search Backgrounds");
                    break;
                case 5:
                    e.attr("placeholder", "Search Templates");
                    break;
                case 3:
                    e.attr("placeholder", "Search Icons");
                    break;
                case 6:
                    e.attr("placeholder", "Search Powerpoint");
                    break;
                case 7:
                    e.attr("placeholder", "Search Fonts");
                    break;
                case 8:
                    e.attr("placeholder", "Search Illustration")
            }
        else
            e.attr("placeholder", "Millions of graphics for free download")
    }
    Pngtree.ScrollBar = function () {
        var e = $(window).scrollTop();
        $(window).height;
        e < t ? "help" != controll_name && $(".scroll-Nav").addClass("show") : $(".scroll-Nav").removeClass("show"), (t = $(window).scrollTop()) < 500 && $(".scroll-Nav").removeClass("show")
    }, $(".side-toTop").on("click", function () {
        $("body, html").animate({
            scrollTop: 0
        }, 800)
    }), Pngtree.BaseFun = {}, Pngtree.BaseFun.Base_IsEmail = function (e) {
        return !!/^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+\.){1,63}[a-z0-9]+$/g.test(e)
    }, Pngtree.BaseFun.pngtree_event = function (e, t, n) {
        if (void 0 === t && (t = 1), void 0 === n && (n = ""), !no_bot)
            return !1;
        $.getJSON("/api/statistics/pngtree-event", {
            _csrf: csrf,
            e: e,
            ei: t,
            et: n
        })
    }, Pngtree.BaseFun.get_now_time = function (e, i, o, s) {
        var r = $(".index-night-tips");
        setInterval(function () {
            var e = new Date,
                    t = e.getHours(),
                    n = e.getMinutes(),
                    a = e.getSeconds();
            t < 10 && (t = "0" + t), n < 10 && (n = "0" + n), a < 10 && (a = "0" + a), r.find(i).html(t), r.find(o).html(n), r.find(s).html(a)
        }, 1e3)
    }, Pngtree.BaseFun.Ga_Deploy = function (e, t, n) {
        ga("require", "GTM-PJ8J78F"), ga("pngtree.send", "event", e, "click", n + "_" + t)
    }, Pngtree.BaseFun.Go_Pay_card = function (e) {}, Pngtree.BaseFun.Ga_Deploy_Class = function (e, t, n, a) {
        $(e).on("click", function () {
            var e = $(this).data(a);
            "Local_Pay_Btn" == e && (t = "Recharge_Page"), Pngtree.BaseFun.Ga_Deploy(t, "click", n + e)
        })
    }, Pngtree.BaseFun.Ga_Deploy_Href = function (e, t, n) {
        $(e).on("click", function () {
            var e = $.trim($(this).text());
            Pngtree.BaseFun.Ga_Deploy(t, "click", n + e)
        })
    }, Pngtree.BaseFun.Base_OpenWin = function (e, t) {
        var n = (window.screen.availHeight - 30 - 500) / 2,
                a = (window.screen.availWidth - 10 - 650) / 2;
        return window.open(e, t, "height=500,,innerHeight=500,width=650,innerWidth=650,top=" + n + ",left=" + a + ",status=no,toolbar=no,menubar=no,location=no,resizable=no,scrollbars=0,titlebar=no")
    }, Pngtree.BaseFun.Countdown = function (g, h, f, m, w, v) {
        setInterval(function () {
            var e = new Date,
                    t = e.getUTCFullYear(),
                    n = e.getUTCMonth(),
                    a = e.getUTCDate(),
                    i = e.getUTCHours(),
                    o = e.getUTCMinutes(),
                    s = e.getUTCSeconds(),
                    r = Date.UTC(t, n, a, i, o, s),
                    c = 1e3 * parseInt(g) - r,
                    l = Math.floor(c / 864e5);
            c -= 864e5 * l;
            var d = Math.floor(c / 36e5);
            c -= 36e5 * d;
            var u = Math.floor(c / 6e4);
            c -= 6e4 * u;
            var p = Math.floor(c / 1e3);
            l < 0 && (l = "0"), d < 0 && (d = "0"), u < 0 && (u = "0"), p < 0 && (p = "0"), l < 10 && (l = "0" + l), d < 10 && (d = "0" + d), u < 10 && (u = "0" + u), p < 10 && (p = "0" + p), void 0 !== v && v(l, d, u, p), $(h).html(l), $(f).html(d), $(m).html(u), $(w).html(p)
        }, 1e3)
    }, Pngtree.BaseFun.captcha = function () {
        $(".verification-code img").prop("src", "/api/captcha/login-file-code?" + Math.random())
    }, Pngtree.BaseFun.RegisterLoadCareer = function (t) {
        // console.log(t);
        $.ajax({
            url: "/",
            type: "get",
            async: !1,
            data: {
            },
            dataType: "json",
            success: function (e) {
                t(e)
            }
        })
    }, Pngtree.BaseFun.IsLogin = function () {
        var t = $(this)
       return t.hasClass("loading") || (t.addClass("loading"), $.getJSON("/api/checklogin", {
        }, function (e) {
            console.log(e);
            if (e.error_code == '1') {
                $("#base-public-login").fadeIn(300);
                return false;
            } else {
                return true;
            }

        })), e.error_code == 1 ? true : false
    }, $(".language").on("click", function (e) {
        var t, n = $(this).data("type");
        t = "en" == n ? "https://pngtree.com" : ("jp" == n && (n = "ja"), "https://" + n + ".pngtree.com"), window.open(t, "_blank")
    }), Pngtree.BaseFun.Limit_Go_Pay = function () {
        var i = $("#downastrict-2");
        if (!i.hasClass("ing")) {
            i.addClass("ing");
            var t = $(".window-limit_christmas-price");
            $.getJSON("/api/async/down-limit-alert", function (e) {
                1 == e.data.status ? ($(".window-limit_christmas-main").addClass("hasCoupon"), $(".window-limit_christmas-main-time").data("time", e.data.time), t.find("._month").html("$" + e.data.f_c), t.find("._year").html("$" + e.data.y_c), t.find("._fover").html("$" + e.data.p_c), Pngtree.BaseFun.Countdown(e.data.time, "", ".timeout-h", ".timeout-i", ".timeout-s", function (e, t, n, a) {
                    0 == e && 0 == t && 0 == n && 0 == a && i.hide()
                })) : ($(".window-limit_christmas-main").addClass("hasCoupon"), $(".window-limit_christmas-main-time .timeout-span").hide(), t.find("._month").html("$" + e.data.f_c), t.find("._year").html("$" + e.data.y_c), t.find("._fover").html("$" + e.data.p_c)), t.find(".coupon_month").html("$" + e.old.f), t.find(".coupon_year").html("$" + e.old.y), t.find(".coupon_fover").html("$" + e.old.p)
            })
        }
        i.fadeIn()
    }, Pngtree.BaseFun.FaccTalk = function (e) {
        var t, n, a, i;
        window.fbAsyncInit = function () {
            FB.init({
                appId: "141858443049568",
                autoLogAppEvents: !0,
                xfbml: !0,
                version: "v3.0"
            })
        }, t = document, n = "facebook-jssdk", i = t.getElementsByTagName("script")[0], t.getElementById(n) || ((a = t.createElement("script")).id = n, a.src = "https://connect.facebook.net/en_US/sdk.js", i.parentNode.insertBefore(a, i)), $(e).on("click", function () {
            FB.ui({
                method: "send",
                link: "https://pngtree.com/"
            })
        })
    }, $(".base-public-login-button").on("click", function () {
        var e = localStorage.getItem("quick_login_email");
        e && quick_login_status && ($(".quick-login-box").show(), $(".other-account").hide(), $("#base-public-login-email-text").val(e), $(".quick-login-btn,.another-login-btn").trigger("click"));
        $("#base-public-login").fadeIn(300), $(" #base-register-window .rlg-with-box .small-tit").html('<span style="color: #888;font-size: 16px;">with your social network.</span>')
    }), $(".base-public-register-button").on("click", function () {
        $("#base-register-window").show();
        
    }), $(".tkw-main").on("click", ".cls-btn", function () {
        $(this).parents(".tkw-window ").fadeOut()
    }), $(".index-night-tips").on("click", ".cls-btn", function () {
        $(this).parents(".index-night-tips").fadeOut()
    }), $("#base-public-login-password-text").on("keypress", function (e) {
        if (13 == e.keyCode)
            return $("#base-sub-Login-Btn").trigger("click"), !1
    }), $(".password_toggle").click(function () {
        "password" === $("input.pwdPut").attr("type") ? ($("input.pwdPut").attr("type", "text"), $(".password_toggle").removeClass("icon-w_yanjingkai").addClass("icon-w_yanjingbi")) : ($("input.pwdPut").attr("type", "password"), $(".password_toggle").removeClass("icon-w_yanjingbi").addClass("icon-w_yanjingkai"))
    }), $("#base-sub-Login-Btn").on("click", function () {
        var t = $.trim($("#base-public-login-email-text").val()),
                e = $.trim($("#base-public-login-password-text").val());
        if ("" == t)
            return alert("please input your email"), !1;
        if ("" == e)
            return alert("please input your password"), !1;
        if (!Pngtree.BaseFun.Base_IsEmail(t))
            return alert("Please check the mailbox format"), !1;
        var n = $("#remember-me").prop("checked");
        console.log(document.getElementsByName('YII_CSRF_TOKEN'));
        var data = $('#login_form_header').serializeArray();
        $.ajax({
            url: "/tailieu/login",
            type: 'post',
            dataType: 'json',
            data: data
        }).done(function (e) {
            e.rsp ? (e.quick_status && (localStorage.setItem("quick_login_email", t), localStorage.setItem("quick_login_email_pwd", e.quick_status), localStorage.setItem("quick_login_username", e.data.username), localStorage.setItem("quick_login_head_img", e.data.head_img)), window.location.reload(!0)) : alert(e.errorr)
        });
    }), $(".base-go-login").on("click", function () {
        var e = $(this).data("type");
        Pngtree.BaseFun.Base_OpenWin("/login/gologin?type=" + e, e + "-login")
    }), $(".reg-trigger").on("click", function () {
        Pngtree.BaseFun.captcha(), $("#base-public-login").hide(), Pngtree.BaseFun.RegisterLoadCareer(function (e) {
            $("#register_career").html(e.data), $("#base-register-window").show().find(".tkw-registerCont").addClass("zoomIn").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function () {
                $(this).removeClass("zoomIn")
            })
        })
    }), $("#base-login-trigger").on("click", function () {
        Pngtree.BaseFun.captcha();
        var e = localStorage.getItem("quick_login_email");
        e && $("#base-public-login-email-text").val(e), $("#base-register-window").hide(), $("#base-public-login").show().find(".tkw-LoginCont").addClass("zoomIn").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function () {
            $(this).removeClass("zoomIn")
        })
    }), $("#base-sub-regist-Btn").on("click", function () {
        if ($(this).hasClass("loading"))
            return !1;
        var data = $('#register_form_header').serializeArray();
        $.ajax({
            url: "/tailieu/register",
            type: 'post',
            dataType: 'json',
            data: data
        }).done(function (e) {
            $(this).removeClass("loading");
            console.log(e);
            if(!e.rsp) {
                alert(e.errorr);
            }else {
                $(".register-success").fadeIn().addClass("zoomIn").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function () {
                    $(".register-success").removeClass("zoomIn")
                })
            }
            //e.rsp ? (e.quick_status && (localStorage.setItem("quick_login_email", t), localStorage.setItem("quick_login_email_pwd", e.quick_status), localStorage.setItem("quick_login_username", e.data.username), localStorage.setItem("quick_login_head_img", e.data.head_img)), window.location.reload(!0)) : alert(e.errorr)
        });
        return !1;
        var a = $(this);
        $(this).addClass("loading").html("loading...");
        $("#wrapper").append('<script src="https://www.recaptcha.net/recaptcha/api.js?render=' + g_sitekey + '&onload=onloadLgCallBack" async defer><\/script>'), window.onloadLgCallBack = function () {
            grecaptcha.ready(function () {
                grecaptcha.execute(g_sitekey, {
                    action: "register"
                }).then(function (e) {
                    t(e)
                })
            })
        };
        var t = function (e, t) {
            var n = {
                _csrf: csrf,
                username: o,
                email: s,
                password: r,
                code: e,
                career: c
            };
            void 0 !== t && (n.code_version = t), $.post("/api/register/index", n, function (e) {
                200 == e.rsp ? ($("#base-retry-send-email").attr("data-id", e.id), $(".register-success").fadeIn().addClass("zoomIn").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function () {
                    $(".register-success").removeClass("zoomIn")
                }), $(".tkw-registerCont").fadeOut()) : 304 == e.rsp ? $("#wrapper").append(e.v2) : (alert(e.errorr), clearInterval(i)), a.removeClass("loading").html("Register")
            }, "json")
        };
        $("#wrapper").on("click", ".submit-captcha-register", function () {
            var e = grecaptcha.getResponse();
            if ("" == e)
                return alert("Please click verification"), !1;
            $(this).parents(".googoe-captcha").hide(), t(e, "2")
        })
    }), $("#base-retry-send-email").on("click", function () {
        var e = $(this).data("id");
        $.post("/api/register/retry-send-email", {
            id: e,
            _csrf: csrf
        }, function (e) {
            e.rsp ? alert("Re-send success, may be into your mailbox trash, please pay attention.") : (alert(e.errorr), $("#base-verified").click())
        }, "json")
    }), $("#base-verified").click(function () {
        window.location.reload(!0)
    }), $(".side-feedback,.side-contact").on("click", function () {
        $(".window-contact-foot-img").attr("src", "https://www.9-bill.com/?v=WsiVwGTKS3rNMktfcZgx"), Pngtree.publicPopup("popup-contactus-bg", "popup-contactus", "690")
    }), $(".sb-items").on("click", "a", function () {
        $(this).addClass("on").siblings("a").removeClass("on");
        var e = $(this).data("type"),
                t = $(this).parents(".serach-box").find(".sb-form input");
        t.data("lg") ? t.attr("placeholder", t.data("lg") + " " + $(this).text()) : n(t, e)
    }), $(".detailsearch-select ul").on("click", "li", function () {
        $(this).addClass("on").siblings("li").removeClass("on");
        var e = $(this).data("type");
        n($("#detailsearch-input"), e), $(".detailsearch-select").data("type", e)
    }), $(window).on("scroll", Pngtree.ScrollBar), Pngtree.BaseFun.SearchClick = function (e, t) {
        if ("" != t) {
            // alert(e);
            var n;
            switch (t = (t = t.replace(/\s+/g, "-")).toLowerCase(), e) {
                case 1:
                    n = "tim-kiem";
                    break;
                case 2:
                    n = "tim-kiem";
                    break;
                default:
                    n = "tim-kiem"
            }
            7 == e && Pngtree.BaseFun.pngtree_event("Font-Search-En", 1, t), setTimeout(function () {
                window.location.href = "/" + n + "/" + t + "/" + e
            }, 10)
        }
    }, $(".search-click-btn").on("click", function () {
        e = $(this).siblings(".index-search-input").find("input").data("type");
        t = $(this).siblings(".index-search-input").find("input").val();
        Pngtree.BaseFun.SearchClick(e, t);
    }), $(".xs-header-search-btn").on("click", function () {
        var e = $(this).data("type"),
                t = $(this).siblings(".xs-header-search-input").val(),
                n = "Element";
        switch (e) {
            case 1:
                n = "Element";
                break;
            case 2:
                n = "Back";
                break;
            case 5:
                n = "Template";
                break;
            case 6:
                n = "PPT";
                break;
            case 7:
                n = "Font";
                break;
            case 8:
                n = "Illus"
        }
        Png.BaseGA.ScrolldownSearch(n), Pngtree.BaseFun.SearchClick(e, t)
    }), $(".xs-header-search-input").on("keydown", function (e) {
        if (13 == e.keyCode)
            return $(this).siblings(".xs-header-search-btn").trigger("click"), !1
    }), $(".search-box-input").on("keydown", function (e) {
        if (13 == e.keyCode)
            return $(this).siblings(".search-click-btn").trigger("click"), !1
    }), $(document).click(function () {
        $(".comment-search-dropdown-wrap").hide()
    }), $(".subpage-menu-search-btn").on("click", function () {
        var e = $(".subpage-menu-search-input"),
                t = $.trim(e.val());
        $(this).data("val");
        Pngtree.BaseFun.SearchClick(7, t)
    }), $(".subpage-menu-search-input").on("keypress", function (e) {
        if (13 == e.keyCode)
            return $(".subpage-menu-search-btn").trigger("click"), !1
    }), $(".detailsearch-btn").on("click", function () {
        var e = $(".detailsearch-select").data("type"),
                t = $("#detailsearch-input").val();
        $.getJSON("/api/statistics/detail-search", {
            type: e
        }), Pngtree.BaseFun.SearchClick(e, t, !0)
    }), $("#detailsearch-input").on("keydown", function (e) {
        if (13 == e.keyCode)
            return $(".detailsearch-btn").trigger("click"), !1
    }), $(".search-box-input").on("keyup", function () {
        $(this).next(".comment-search-dropdown-wrap").show()
    }), $(".sb-form").click(function (e) {
        e.stopPropagation()
    }),
    $("#fixed-search-tag").on("click", "li", function () {
        var e = $(this).text();
        var t = $(this).data("type");
        var p = $(this).data("placeholder");
        $(this).parents(".pulldown-title").find(".sb-val").text(e);
        $(this).parents(".pulldown-title").siblings(".index-search-input").find("input").attr("placeholder", p);
        $(this).parents(".pulldown-title").siblings(".index-search-input").find("input").attr("data-type", t);
    }), $(".mc-lists").hover(function () {
        $(this).addClass("on").siblings().removeClass("on")
    });
    var e = $(".masonry-element"),
            a = !!$(".masonry-element")[0],
            o = a;
    a && (e.masonry({
        itemSelector: ".li-box",
        gutter: ".gutter-sizer"
    }), o = function () {
        e.masonry("layout")
    }, setTimeout(function () {
        o()
    }, 0));
    try {
        $("img.lazy").lazyload({
            threshold: 200,
            effect: "fadeIn",
            load: o
        })
    } catch (e) {
    }
    $("#base-download-confirm").on("click", function () {
        $(this).fadeOut(200)
    }), $(".download-confirm").on("click", function (e) {
        var t = (e = e || window.event).target;
        e.stopPropagation(), (t.classList.contains("close-btn") || t.parentNode.classList.contains("close-btn")) && $(this).parents(".qbweb-win").fadeOut(200)
    }), $(".qbweb-win").on("click", ".close-btn", function () {
        $(this).parents(".qbweb-win").fadeOut(200)
    }), $("#wrapper").on("click", ".down-jpg-click,.down-rar-click,.down-no-login", function () {
        if (!Pngtree.BaseFun.IsLogin(3)) {
            return !1;
        }
        if ($(this).hasClass("ppt-down-file") && 0 == vip_type) {
            e_ppt = 1 & extra_privilege, console.log(e_ppt);
            var e = $(this).data("id");
            return !(!e_ppt && !$(this).hasClass("single-pay")) || ($("#ppt-singledown").show().find(".pay-btn").prop("href", "/pay/ppt-pay?id=" + e), !1)
        }
        return $(this).hasClass("template-down-file") && 0 == vip_type ? ($.getJSON("/api/statistics/template-down-limit", {
            _csrf: csrf,
            type: 5
        }, function (e) {
            $("#tpl-download-window .download-i").html(e.text), $("#tpl-download-window").fadeIn(200)
        }), !1) : $(this).hasClass("font-down-file") && 0 == vip_type ? ($.getJSON("/api/statistics/template-down-limit", {
            _csrf: csrf,
            type: 7
        }, function (e) {
            $("#tpl-download-window .download-i").html(e.text), $("#tpl-download-window").fadeIn(200)
        }), !1) : ($(this).hasClass("desc-click") && $.getJSON("/api/statistics/down-desc", {
            _csrf: csrf
        }), 0 == vip_type ? (down_count <= 0 ? (Pngtree.BaseFun.Limit_Go_Pay(), $.getJSON("/api/statistics/down-limit", {
            _csrf: csrf
        })) : ($("#base-download-confirm-true").attr("href", $(this).attr("href")), $("#base-download-confirm").fadeIn(200)), !1) : 200 < down_sum ? ($("#downastrict-3").fadeIn(200), !1) : 2 == vip_type ? down_count <= 0 ? ($("#downastrict-4").fadeIn(200), $.getJSON("/api/statistics/down-limit", {
            _csrf: csrf
        }), !1) : ($("#free-user-down-count").text(--down_count), !0) : void 0)
    }), $("#window-premium-limit").on("click", ".window-premium-limit-btn", function () {
        $("#window-premium-limit").hide()
    }), $("#base-download-confirm-true").on("click", function () {
        if (down_count <= 0)
            return $(".close-btn").trigger("click"), setTimeout(function () {
                Pngtree.BaseFun.Limit_Go_Pay()
            }, 500), !1;
        down_count--;
        var e = parseInt($(".ulc-two-num").html()),
                t = parseInt(e - 1);
        return 0 < t ? $(".ulc-two-num").html(t) : $(".close-btn").trigger("click"), setTimeout(function () {
            $("#free-user-down-count").html(down_count), $("#free-user-down-count-h").html(down_count), $(".close-btn").trigger("click")
        }, 3e3), !0
    }), $("#wrapper").on("click", ".star-btn-click", function () {
        if (!Pngtree.BaseFun.IsLogin(3)) {
            return !1;
        }
        var t = $(this),
                e = $(this).hasClass("on"),
                n = $(this).data("type"),
                a = $(this).data("id");
        t.hasClass("loading") || (t.addClass("loading"), $.getJSON("/api/fav", {
            id: a,
            type: n,
            is_like: e ? -1 : 1
        }, function (e) {
            if (e.error_code == '1') {
                return !1;
            } else {
                t.removeClass("loading");
            }

        })), $(this).hasClass("on") ? $(this).children("i").removeClass("heartAnimation") : $(this).children("i").addClass("heartAnimation"), e ? t.removeClass("on") : t.addClass("on")
    }), $("#wrapper").on("click", ".icon-like-btn", function () {
        if (!Pngtree.BaseFun.IsLogin(3))
            return !1;
        var t = $(this),
                e = $(this).hasClass("on"),
                n = $(this).data("type"),
                a = $(this).data("id");
        return t.hasClass("loading") || (t.addClass("loading"), $.getJSON("/api/like/index-icon", {
            _csrf: csrf,
            id: a,
            type: n,
            is_like: e ? -1 : 1
        }, function (e) {
            t.removeClass("loading")
        })), e ? t.removeClass("on") : t.addClass("on"), !1
    }), $(".color-boxs").on("click", "a", function () {
        $(this).addClass("color-on").siblings("a").removeClass("color-on")
    }), $("#coupon-window").on("click", ".COUPON-close", function () {
        $("#coupon-window").fadeOut()
    });
    addLoadEvent(function () {
        if (!no_bot)
            return !1;
        $("#coupon-window");

        try {
            var u = getInjectData()
        } catch (e) {
            u = ""
        }
        if ("" != u && void 0 !== u.type) {
            var p = "";
            switch (u.type) {
                case 1:
                    p = void 0 !== u.tags_type && 1 == u.tags_type ? "/popular-tags/vector" : "/popular-tags/png-clipart";
                    break;
                case 3:
                    p = "/popular-tags/icons";
                    break;
                case 6:
                    p = "/popular-tags/ppt";
                    break;
                case 2:
                    p = "/popular-tags/background";
                    break;
                default:
                    p = ""
            }
            if ("" != p) {
                var g = $(".goole-tags");
                g.attr("href", p), g.show()
            }
        }

        $(".qbweb-win .close-btn").html('<i class="iconfont icon-guanbi"></i>'), "index" != controll_name && "detail" != controll_action || alert_login_register()
    }), $("#dialog-teamPremium").on("click", ".js_window-close", function () {
        Pngtree.BaseFun.pngtree_event("team_big_window_close", -1)
    }), $("#dialog-teamPremium").on("click", ".dialog-teamPremium-btn", function () {
        Pngtree.BaseFun.pngtree_event("team_big_window_show", -1)
    }), $(".fixed-teamPremium-entry").on("click", ".fixed-teamPremium-entry-close", function (e) {
        return Pngtree.BaseFun.pngtree_event("team_side_close", -1), $(".fixed-teamPremium-entry").hide(), !0
    }), $(".fixed-teamPremium-entry").on("click", ".go-enterprise-vip", function (e) {
        return Pngtree.BaseFun.pngtree_event("team_side_go", -1), $(".fixed-teamPremium-entry").hide(), !0
    }), $(".bottom-tips-close").on("click", function () {
        $(".bottom-tips").hide(), Pngtree.BaseFun.pngtree_event("Code-Banner", 1, "close-times"), $.getJSON("/api/activity/code-close")
    }), $(".bottom-tips-btn").on("click", function () {
        $.getJSON("/api/activity/code-statis")
    }), $(".order-information-promo-inputBtn").on("click", function () {
        Pngtree.BaseFun.pngtree_event("Code-Banner", 1, "apply")
    }), $(".new-go_experience .new-link,.new-go_experience .header-tips-close").on("click", function () {}), addLoadEvent(function () {}), $(".side-alert-coupon").on("click", ".fixed-COUPON-close", function () {

    }), $(".head-notice-div").on("click", ".clean-all", function () {
        var t = $(this);
        $.getJSON("/api/message/allread", function (e) {
            t.parents(".head-notice-div").find(".clean_all span").remove(), t.parents(".head-notice-div").find(".infor-box ul").remove()
        })
    }), $(".head-notice-div").on("click", ".btn-view", function () {
        var n = $(this);
        return $.post("/api/message/isread", {
            nid: n.data("notice"),
            _csrf: csrf
        }, function (e) {
            var t = n.parents(".head-notice-div").find(".clean_all span").html() - 1;
            t <= 0 ? (n.parent("li").remove(), n.parents(".head-notice-div").find(".clean_all span").remove()) : (n.parents(".head-notice-div").find(".clean_all span").html(t), n.parent("li").remove())
        }), !0
    }), $(".appraise-box-open").on("click", function () {
        $.getJSON("/api/message/loss-count", {
            _csrf: csrf
        }), $(this).parents(".appraise-box").toggleClass("on")
    }), $(".appraise-box-close").on("click", function () {
        $(this).parents(".appraise-box-main").parents(".appraise-box").removeClass("on"), $(".appraise-box-form").removeClass("on"), $(".appraise-box-face").show(), $(".appraise-box-content").removeClass("on"), $(".appraise-box-title").show(), $(".appraise-box-title-empty").removeClass("on"), $(".appraise-box-error").removeClass("on"), $(".appraise-box-article").val(""), $(".appraise-box-email").find("input").val("")
    }), $(".appraise-box-face").on("click", "div", function () {
        $(this).parent().hide(), $(".appraise-box-title").hide(), $(".appraise-box-title-empty").addClass("on"), $(".appraise-box-content").addClass("on"), $(".appraise-box-form").eq($(this).index()).addClass("on").siblings().removeClass("on")
    }), $(".appraise-box-btn-refuse").on("click", function () {
        $(".appraise-box-close").trigger("click"), $(".appraise-box-form").removeClass("on"), $(".appraise-box-face").show(), $(".appraise-box-content").removeClass("on"), $(".appraise-box-title-empty").removeClass("on")
    }), $(".appraise-box-article").on("input", function () {
        var e = $(this).val();
        if ("" !== (e = $.trim(e)))
            return $(this).siblings(".appraise-box-error").removeClass("on"), !1
    }), $(".appraise-box-email input").on("input", function () {
        var e = $(this).val();
        if ("" !== (e = $.trim(e)))
            return $(this).siblings(".appraise-box-error").removeClass("on"), !1
    }), $(".appraise-box-btn-send").on("click", function () {
        var t = $(this).parent(".appraise-box-btn-group"),
                e = $(t).siblings(".appraise-box-article").val(),
                n = $(t).siblings(".appraise-box-email").find("input").val();
        e = $.trim(e);
        var a = $(this).data("type");
        console.log(a), console.log(e), console.log(n);
        var i = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
        console.log(i.test(n)), "" != e ? "" != n ? 3 != a || i.test(n) ? $.post("/api/message/loss-user-quest", {
            _csrf: csrf,
            type: a,
            content: e,
            email: n
        }, function (e) {
            console.log(e), 200 == e.rsp && ($(t).parents(".appraise-box-form").siblings(".appraise-box-success").addClass("on"), $(".appraise-box-form").removeClass("on"), $(".appraise-box-error").removeClass("on"), $(".appraise-box-article").val(""), $(".appraise-box-email").find("input").val(""))
        }, "json") : $(t).siblings(".appraise-box-email").find(".appraise-box-error-email").addClass("on") : $(t).siblings(".appraise-box-email").find(".appraise-box-error").addClass("on") : $(t).siblings(".appraise-box-error").addClass("on")
    }), $(".popup-contactus").on({
        blur: function () {
            $this = $(this), $this.siblings(".dropDown-typeList").removeClass("on"), setTimeout(function () {
                "" == $.trim($this.val()) ? ($this.addClass("warning"), $this.siblings(".label-title").removeClass("on")) : $this.removeClass("warning")
            }, 300)
        },
        focus: function () {
            $(this).siblings(".label-title").addClass("on"), $(this).siblings(".dropDown-typeList").addClass("on")
        }
    }, "input"), $(".dropDown-typeList").on("click", "li", function () {
        var e = $(this).text(),
                t = $(this).data("id");
        $(".cu-type").val(e), $(".cu-type").attr("data-id", t), $(this).parents(".dropDown-typeList").removeClass("on")
    }), $(".side-feedback").on("click", function () {
        Pngtree.publicPopup("popup-contactus-bg", "popup-contactus", "620")
    }), $(".popup-contactus .btn-send").on("click", function () {
        var e = $.trim($("input[name='username']").val()),
                t = $.trim($("input[name='mail']").val()),
                n = $.trim($(".cu-type").data("id")),
                a = $(".input-list textarea").val(),
                i = $(this);
        return "" == a ? alert("Please fill in the proposal") : Pngtree.BaseFun.Base_IsEmail(t) ? $(this).hasClass("locading") || ($(this).addClass("locading"), $.ajax({
            type: "post",
            data: {
                message: a,
                email: t,
                username: e,
                topic: n,
                _csrf: csrf
            },
            url: "/api/message/contact-us",
            dataType: "json",
            success: function (e) {
                1 == e.rsp ? (alert("Thank you for your message."), $("input[name='username']").val(""), $("input[name='mail']").val(""), $(".input-list textarea").val(""), $(".cu-type").val(""), $(".dropDown-typeList").removeClass("on"), $(".label-title").removeClass("on"), $(".btn-Cpmclose").trigger("click")) : alert("Failed to submit"), i.removeClass("loading")
            }
        })) : alert("Please enter the correct email address"), !1
    }), $(".contact-foot").on("click", function () {
        Pngtree.publicPopup("popup-contactus-bg", "popup-contactus", "690")
    }), $("#side-navigation").on("click", ".side-share", function () {
        if (!Pngtree.BaseFun.IsLogin(2))
            return !1;
        $.post("/api/share/side", {
            _csrf: csrf
        }, function (e) {
            -1 == e.status ? Pngtree.BaseFun.IsLogin() : 200 == e.status ? $("#downastrict-6").fadeIn(200) : 201 == e.status && ($("#base-share-success").html(e.data).fadeIn(200), $(".pop-share").css({
                top: 0,
                left: 0,
                height: "447px",
                width: "648px",
                opacity: 1
            }))
        }, "json")
    }), $("#share-facebook-down").on("click", function () {
        Pngtree.BaseFun.Base_OpenWin("/api/share/fb-share", "fb-share")
    }), Pngtree.BaseFun.base_close_limit = function () {
        $("#downastrict-6").fadeOut(200), $("#side-navigation .side-share").trigger("click")
    }, $("#share-twitter-down").on("click", function () {
        $.post("/api/share/twitter-share", {
            _csrf: csrf
        }, function (e) {
            if (200 == e.status)
                Pngtree.BaseFun.base_close_limit();
            else if (-1 == e.status && !Pngtree.BaseFun.IsLogin())
                return !1
        }, "json")
    }), $("#secret-activity").click(function () {
        $(this).fadeOut(200)
    }), $(".search-box-input").on("focus", function () {
        var e = $(this).parents(".serach-box").find(".search-type a.on").data("type"),
                t = $.trim($(this).val());
        $.getJSON("/api/index/get-keywords", {
            type: e,
            keyword: t
        }, function (e) {
            200 == e.status && "" != e.data && ($(".comment-search-dropdown-wrap").children(".search-dropdown").html(e.data), $(".comment-search-dropdown-wrap").show())
        })
    }), $(document).delegate("img", "contextmenu", function (e) {
        e.preventDefault()
    }), $("#side-navigation").on("click", ".activity-small-banner", function () {
        $.post("/api/statistics/activity-banner", {
            type: 3,
            _csrf: csrf
        }, function (e) {})
    }), $("#wrapper").on("click", ".ga-c", function () {
        var e = $(this).data("ga");
        void 0 === e && (e = $(this).parents(".ga-c").data("ga")), $.getJSON("/api/statistics/head-click", {
            type: e
        })
    }), addLoadEvent(function () {
        0 != uid && Pngtree.BaseFun.FaccTalk(".sp-msg")
    }), $("#date_enter_referral").on("click", function () {
        $.post("/api/statistics/referral-enter", {
            _csrf: csrf,
            type: "alert"
        }, function (e) {})
    }), $("[data-enter_referral]").on("click", function () {
        $.post("/api/statistics/referral-enter", {
            _csrf: csrf,
            type: $(this).data("enter_referral")
        }, function (e) {})
    }), $("span[data-referral='3']").on("click", function () {
        $.post("/api/activity/referral-alert", {
            type: 1,
            _csrf: csrf
        }, function (e) {})
    }), $(".quick-login-btn,.another-login-btn").on("click", function () {
        var e = localStorage.getItem("quick_login_email"),
                t = localStorage.getItem("quick_login_email_pwd");
        if ("" != e && "" != t) {
            var n = localStorage.getItem("quick_login_username"),
                    a = localStorage.getItem("quick_login_head_img");
            null != n && null != a ? ($(".quick-login-img img").attr("src", a), $(".quick-login-username").text(n), $(".quick-login-btn").parents("form").toggle(), $(".quick-login-box").toggle()) : $.post("/api/login/quick-login", {
                email: e,
                email_pwd: t,
                _csrf: csrf
            }, function (e) {
                e.data ? (localStorage.setItem("quick_login_username", e.data.username), localStorage.setItem("quick_login_head_img", e.data.head_img), $(".quick-login-img img").attr("src", e.data.head_img), $(".quick-login-username").text(e.data.username), $(".quick-login-btn").parents("form").toggle(), $(".quick-login-box").toggle()) : (alert("Sorry, please try again"), window.location.reload(!0))
            }, "json")
        }
    }), $(".quick-login-img").on("click", function () {
        var e = localStorage.getItem("quick_login_email"),
                t = localStorage.getItem("quick_login_email_pwd");
        "" != e && "" != t && $.post("/api/login/quick-login-ver", {
            email: e,
            email_pwd: t,
            _csrf: csrf
        }, function (e) {
            e.rep || alert("Sorry, please try again"), window.location.reload(!0)
        }, "json")
    }), $("#design").on("click", function () {
        $(this).slideUp("slow"), $.getJSON("/api/activity/act-enter-show", function (e) {})
    }), $(".share-one").on("click", function () {
        var e = $(this).data("type");
        Png.BaseGA.Ga_Share(e, "Twitter")
    }), $(".share-two").on("click", function () {
        var e = $(this).data("type");
        Png.BaseGA.Ga_Share(e, "Facebook")
    }), $(".share-three").on("click", function () {
        var e = $(this).data("type");
        Png.BaseGA.Ga_Share(e, "Pinterest")
    }), $(".vk-btn").on("click", function () {
        var e = $(this);
        document.write(e.button(!1, {
            type: "custom",
            text: '<img src="https://vk.com/images/share_32.png" width="32" height="32" />'
        }))
    });
    try {
        if ("ppt" == controll_name) {
            if (!no_bot)
                return !1;
            addLoadEvent(function () {
                Pngtree.BaseFun.pngtree_event("ppt_load_page", 1, pageGroup)
            })
        }
    } catch (e) {
    }
    $(".side-card-contain a[data-share]").on("click", function () {
        var e, t, n, a = $(this).data("share");
        switch ($.getJSON("/api/activity/referral-share", {
                type: a
            }), a) {
            case "sidelk":
                t = $(".side-card-copytext").text(), (n = document.createElement("input")).value = t, document.body.appendChild(n), n.select(), document.execCommand("Copy"), n.className = "oInput", n.style.display = "none", $(".side-card-contain a[data-share='sidelk']").html("Copied");
                break;
            case "sidefb":
                Pngtree.BaseFun.Base_OpenWin($(this).data("url"), "fb-share");
                break;
            case "sideme":
                e = $(this).data("url"), FB.ui({
                    method: "send",
                    link: e
                })
        }
    }), window.fbAsyncInit = function () {
        FB.init({
            appId: "141858443049568",
            autoLogAppEvents: !0,
            xfbml: !0,
            version: "v3.0"
        })
    }, addLoadEvent(function () {
        var e, t, n, a;
        e = document, t = "facebook-jssdk", a = e.getElementsByTagName("script")[0], e.getElementById(t) || ((n = e.createElement("script")).id = t, n.src = "https://connect.facebook.net/en_US/sdk.js", a.parentNode.insertBefore(n, a))
    }), $(".share-group-btn").on("click", ".share-user-btn", function () {
        $.getJSON("/api/share/user-center", {
            _csrf: csrf
        })
    }), 0 != alert_privilege && "pay" != controll_name && ($("#level-up").on("click", ".levelUp-window-close", function () {
        $("#level-up").hide()
    }), $("#level-up").on("click", ".levelUp-window-link", function () {
        Pngtree.BaseFun.pngtree_event("click_user_level_up", 1, "level_" + alert_privilege)
    }), $("#level-up").show(), addLoadEvent(function () {
        Pngtree.BaseFun.pngtree_event("user_level_up", 1, "level_" + alert_privilege)
    })), $("a[data-join]").on("click", function () {
        var e = $(this).data("join");
        $.getJSON("/api/async/join-us", {
            type: e
        })
    }), addLoadEvent(function () {
        try {
            var e = function () {
                c = !1, r.classList.remove("show"), a.stopVideo()
            },
                    t = function () {
                        var e = new Date(new Date((new Date).toLocaleDateString()).getTime());
                        864e5 < new Date - (window.localStorage.getItem("png_video_played") || 0) && (o.click(), $.getJSON("/api/index/index-video", {
                            type: 5
                        }), window.localStorage.setItem("png_video_played", e))
                    };
            $(".click-video").on("click", function () {
                $.getJSON("/api/index/index-video", {
                    type: 3
                })
            });
            var n = document.createElement("script");
            n.src = "https://www.youtube.com/iframe_api?rel=0";
            var a, i = document.getElementsByTagName("script")[0];
            i.parentNode.insertBefore(n, i);
            var o = document.querySelector(".adsorb-video-btn"),
                    s = document.querySelector(".adsorb-video-close-btn"),
                    r = document.querySelector(".adsorb-video-box"),
                    c = !1;
            o.addEventListener("click", function () {
                c ? (e(), $.getJSON("/api/index/index-video", {
                    type: 4
                })) : (c = !0, r.classList.add("show"))
            }), s.addEventListener("click", function () {
                e(), $.getJSON("/api/index/index-video", {
                    type: 4
                })
            }), window.onYouTubeIframeAPIReady = function () {
                a = new YT.Player("adsorb-video-inner", {
                    height: "260",
                    width: "400",
                    videoId: "qlS9uln_1fg",
                    events: {
                        onReady: t
                    }
                })
            }
        } catch (e) {
        }
    }), $(document).on("click", function (e) {
        "xs-search-selected" === e.target.className ? $(e.target).parents(".xs-search-select").toggleClass("on") : $(".xs-search-select").removeClass("on")
    }), $(".xs-search-options").on("click", "li", function () {
        var e = $(".xs-search-selected");
        e.text($(this).text());
        var t = $(this).data("type");
        e.attr("data-type", t)
    }), $(".xs-subpage-menu-sort-title").on("click", function () {
        $(this).parents(".subpage-menu-toggleBox").toggleClass("on")
    }), $(".js-hover").click(function () {
        $(".index-night-tips").toggleClass("on")
    }), $(".recruit-faqs-item li").on("click", function () {
        $(this).toggleClass("on").find(".recruit-faqs-question").slideToggle()
    }), $(".sort-btn").on("click", function () {
        $(this).parents(".subpage-menu-inneBox").toggleClass("on")
    }), $(".xs-subpage-menu-word-circle").on("click", function () {
        $(this).addClass("on").parent().parent().siblings().find(".xs-subpage-menu-word-circle").removeClass("on")
    }), $(".xs-tn-lists-circle").on("click", function () {
        $(this).addClass("on").parent().siblings().find(".xs-tn-lists-circle").removeClass("on")
    }), $(".window-black_friday-close").on("click", function () {
        $(this).parents(".window-black_friday").removeClass("on").delay(400).parents("#coupon-window").fadeOut()
    }), $(".detail-un_upgradeInfo-link").on("click", function () {
        $("#window-PRF").show(), $("html").addClass("overflow-hidden")
    }), $(".js_dialog-prf").on("click", function () {
        $("#window-PRF").show(), $("html").addClass("overflow-hidden")
    }), $("#window-PRF .cls-btn").on("click", function () {
        $("html").removeClass("overflow-hidden")
    }), $("#window-PRF").on("click", function () {
        $("#window-PRF .cls-btn").click()
    }), $(".window-PRF").on("click", function (e) {
        var t = (e = e || window.event).target;
        e.stopPropagation(), (t.classList.contains("cls-btn") || t.parentNode.classList.contains("cls-btn")) && $(this).parents(".tkw-window ").fadeOut(200)
    }), $(".window-PRF-attribute").on("click", "li", function () {
        $(this).addClass("on").siblings().removeClass("on"), $(".attribute-content").eq($(this).index()).addClass("on").siblings().removeClass("on")
    }), $(".xs-header-box-btn").on("click", function () {
        $(".xs-nav-box").toggleClass("on")
    }), $(".xs-nav-box-close").on("click", function () {
        $(".xs-nav-box").removeClass("on")
    }), $(".xs-header-search").on("click", function () {
        $(".xs-header-search-box").toggleClass("on")
    }), $(".xs-header-search-close").on("click", function () {
        $(".xs-header-search-box").removeClass("on")
    }), $(".xs-tabbar-sort").on("click", function () {
        $(".xs-nav-box").toggleClass("on")
    }), $(".xs-filters-btn").on("click", function () {
        $(".xs-subpage-menu-mask").toggle(), $(".subpage-menu").toggleClass("on"), $(".tags-nav").toggleClass("on")
    }), $(".xs-subpage-menu-mask").on("click", function () {
        $(".xs-filters-btn").click()
    }), $(".subpage-menu-close").on("click", function () {
        $(".xs-filters-btn").click()
    }), $(document).on("click", function (e) {
        e.target.classList.contains("js_search-check") ? $(e.target).parents(".js_search-select").toggleClass("on") : $(".js_search-select").removeClass("on")
    }), $(".js_search-select").on("click", "li", function () {
        $(this).addClass("on").siblings().removeClass("on");
        var e = $(this).parents(".js_search").find(".js_search-select"),
                t = $(this).parents(".js_search").find(".js_search-check"),
                n = $(this).parents(".js_search").find(".js_search-input"),
                a = $(this).data("placeholder"),
                i = $(this).data("type");
        t.text($(this).text()), e.attr("data-type", i), n.attr("placeholder", a), n.attr("data-type", i), $(this).parents(".js_search").find(".search-box-input-search-app").data("type", i)
    }), $(".js_search-btn").on("click", function () {
        var e = $(this).parents(".js_search").find(".js_search-select").data("type"),
                t = $(this).parents(".js_search").find(".js_search-input").val();
        $.getJSON("/api/statistics/detail-search", {
            type: e
        }), Pngtree.BaseFun.SearchClick(e, t, !0), Png.BaseGA.Ga_Search(e)
    }), $(".js_search-input").on("keydown", function (e) {
        if (13 == e.keyCode)
            return $(".js_search-btn").trigger("click"), !1
    }), $(".tkw-window").on("click", ".js_window-close", function () {
        $(this).parents(".tkw-window").hide()
    }), $(".COUPON").on("click", ".COUPON-close", function () {
        $(".COUPON").removeClass("on"), setTimeout(function () {
            $(".COUPON").remove()
        }, 1e3)
    }), $(".window-contact-foot-ctrl").on("click", function () {
        $(".window-contact-foot-img").show()
    }),
            function () {
                var e = document.getElementById("fixed-clock");
                if (!e)
                    return;
                var o = e.getContext("2d"),
                        s = o.canvas.width,
                        r = o.canvas.height,
                        c = s / 2,
                        l = s / 300;

                function t(e) {
                    o.clearRect(0, 0, s, r);
                    var t = new Date,
                            n = t.getHours(),
                            a = t.getMinutes(),
                            i = t.getSeconds();
                    !function (e) {
                        o.save(), o.translate(c, c), o.beginPath(), o.lineWidth = 10 * l, o.arc(0, 0, c - o.lineWidth / 2, 0, 2 * Math.PI, !1), o.stroke(), o.font = 18 * l + "px Arial", o.textAlign = "center", o.textBaseline = "middle", [3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 1, 2].forEach(function (e, t) {
                            var n = 2 * Math.PI / 12 * t,
                                    a = Math.cos(n) * (c - 30 * l),
                                    i = Math.sin(n) * (c - 30 * l);
                            o.fillText(e, a, i)
                        });
                        for (var t = 0; t < 60; t++) {
                            var n = 2 * Math.PI / 60 * t,
                                    a = Math.cos(n) * (c - 18 * l),
                                    i = Math.sin(n) * (c - 18 * l);
                            o.beginPath(), o.fillStyle = t % 5 == 0 ? "#000" : "#ccc", o.arc(a, i, 2 * l, 0, 2 * Math.PI, !1), o.fill()
                        }
                    }(),
                            function (e, t) {
                                o.save(), o.beginPath();
                                var n = 2 * Math.PI / 12 * e,
                                        a = 2 * Math.PI / 12 / 60 * t;
                                o.rotate(n + a), o.lineWidth = 6 * l, o.lineCap = "round", o.moveTo(0, 10 * l), o.lineTo(0, -c / 2), o.stroke(), o.restore()
                            }(n, a),
                            function (e) {
                                o.save(), o.beginPath();
                                var t = 2 * Math.PI / 60 * e;
                                o.rotate(t), o.lineWidth = 3 * l, o.lineCap = "round", o.moveTo(0, 10 * l), o.lineTo(0, 30 * l - c), o.stroke(), o.restore()
                            }(a),
                            function (e) {
                                o.save(), o.beginPath(), o.fillStyle = "#c14543";
                                var t = 2 * Math.PI / 60 * e;
                                o.rotate(t), o.moveTo(-2 * l, 20 * l), o.lineTo(2 * l, 20 * l), o.lineTo(1, 18 * l - c), o.lineTo(-1, 18 * l - c), o.fill(), o.restore()
                            }(i), o.beginPath(), o.fillStyle = "#fff", o.arc(0, 0, 3 * l, 0, 2 * Math.PI, !1), o.fill(), o.restore()
                }
                t(), setInterval(t, 1e3)
            }(), $(".renewal-plan").on("click", function () {
        var e = $(this).data("plan");
        "" != e && $.getJSON("/api/pay/renewal", {
            plan: e
        })
    }), $(".fixed-clock-close").on("click", function () {
        $(".fixed-clock-wrap").fadeOut("1000"), $.getJSON("/api/pay/renewal-close")
    }), $(".detail-report-click").on("click", function () {
        !0 === Pngtree.BaseFun.IsLogin() && $("#window-report_image").show()
    }), $(".window-report_image-group").on("change", "input", function () {
        $(this).data("required") ? $(".window-report_image").addClass("required") : $(".window-report_image").removeClass("required")
    }), $(".window-report_image-textarea textarea").on("input", function () {
        $(this).val().trim() ? $(this).parents(".window-report_image-textarea").addClass("hasVal") : $(this).parents(".window-report_image-textarea").removeClass("hasVal")
    }), $("#window-report_image").on("click", function () {
        $(this).hide()
    }), $(".window-report_image").on("click", function (e) {
        var t = (e = e || window.event).target;
        e.stopPropagation(), (t.classList.contains("cls-btn") || t.parentNode.classList.contains("cls-btn")) && $(this).parents(".tkw-window ").fadeOut(200)
    }), $("#window-login_usual").on("click", ".contact-us-btn", function () {
        $(this).parents("#window-login_usual").hide(), $("#side-navigation .side-contact").trigger("click")
    }), $(".topSearch-header-search-btn").on("click", function () {
        $this = $(".js_search-input"), $keyword = $this.val(), $type = $this.data("type"), Pngtree.BaseFun.SearchClick($type, $keyword)
    }), $(".js_search-input").on("keypress", function (e) {
        if (13 == e.keyCode)
            return $(".topSearch-header-search-btn").trigger("click"), !1
    }), $(".goToTwoYear-2-close").on("click", function () {

    }), addLoadEvent(function () {}), $(".twoyear-going-linear .icon-xiangyoujiantou,.twoyear-activity-logo").on("click", function () {
        window.location.href = "/pngtree-2nd-anniversary"
    }), $(".twoyear-going-linear .twoyear-going-time").on("click", function () {
        window.location.href = $(this).data("url")
    }), $(".goToTwoYear-2-link").on("click", function () {
        $(".goToTwoYear-2-close").trigger("click"), window.location.href = "/pngtree-2nd-anniversary/comment"
    });
    var s = $(".hover-show"),
            r = s.find(".hs-star i").hasClass("iconfont"),
            c = s.find(".hs-downPng i").hasClass("iconfont"),
            l = s.find(".hs-downEps i").hasClass("iconfont"),
            d = s.find("span").hasClass("commercial-use");
    0 == r && (s.find(".hs-star i").addClass("iconfont"), s.find(".hs-star i").addClass("icon-xin")), 0 == c && (s.find(".hs-downPng i").addClass("iconfont"), s.find(".hs-downPng i").addClass("icon-xiazai")), 0 == l && (s.find(".hs-downEps i").addClass("iconfont"), s.find(".hs-downEps i").addClass("icon-xiazai")), 1 == d && $(".hover-show .commercial-use").attr("title", "Copyright for Commercial"), Pngtree.BaseFun.Base_alert_register = function (e) {
        return !0
    }, $("#base-register-window .cls-btn").on("click", function () {
        $.getJSON("/api/statistics/close-alert-reg")
    }), addLoadEvent(function () {
        0 != uid && "user" == controll_name && $.post("/api/async/user-info", {
            _csrf: csrf
        }, function (e) {
            200 == e.status && $("#window-jobCollect").show().find(".tkw-main").html(e.data)
        }, "json"),
                function () {
                    $("#window-jobCollect").on("change", "select.industry_question", function () {
                        "0" == $(this).val() ? $(".window-jobCollect-group._other").show() : ($(".window-jobCollect-group._other input").val(""), $(".window-jobCollect-group._other").hide())
                    });
                    var e = 0;
                    $("#window-jobCollect").on("click", ".window-jobCollect-changed span", function () {
                        if (10 <= e && !$(this).hasClass("on"))
                            return !1;
                        $(this).toggleClass("on"), e = $(".window-jobCollect-changed .on").length
                    });
                    $("#window-jobCollect").on("click", ".question_submit", function () {
                        if (!$(this).hasClass("load")) {
                            var t = $(this);
                            if ($(this).addClass("load"), a = !0, 0 == $(".industry_question").val() && "" == $(".other_industry_question").val() && (a = !1), $(".industry_question").val() < 0 && (a = !1), "" == $(".position_question").val() && (a = !1), $(".window-jobCollect-changed .on").length <= 0 && (a = !1), !a)
                                return alert("Please enter your information."), $(this).removeClass("load"), !1;
                            var e = {};
                            e.industry_question = $(".industry_question").val(), e.other_industry_question = $(".other_industry_question").val(), e.position_question = $(".position_question").val();
                            var n = [];
                            $(".window-jobCollect-changed span.on").each(function () {
                                n.push($(this).data("val"))
                            }), e.user_category = n, e._csrf = csrf, $.post("/api/user/collect", e, function (e) {
                                t.removeClass("load"), 200 == e.status ? (alert("Submission complete"), $("#window-jobCollect").hide()) : alert("Failed to send")
                            }, "json")
                        }
                        var a
                    })
                }()
    }), $(".prf-detail-click").on("click", function () {
        var e = $("#window-PRF"),
                t = $(this).data("name");
        "" == t && (t = $("#authour").text());
        var n = "Vector Designed By " + t + ' from  <a href="' + window.location.href + '">Pngtree.com</a>';
        e.find(".section-text-input").val(n), e.find(".attribute-code i").html(t), e.show()
    }), $(".section-button-input").on("click", function () {
        var e = $(".section-text-input").val(),
                t = document.createElement("input");
        t.value = e, document.body.appendChild(t), t.select(), document.execCommand("Copy"), t.className = "oInput", t.style.display = "none", $(".section-button-input").html("Copied")
    }), addLoadEvent(function () {

    }), $("#page-num").on("keydown", function (e) {
        if (13 == e.keyCode) {
            var t = $(this).data("max"),
                    n = $(this).val();
            t <= n && (n = t), window.location.href = $(this).data("url") + n
        }
    })
});
var alert_login_register = function () {},
        click_pay_success_share = function (t) {},
        click_recovery_static = function (e) {};

function getCookie(e) {
    var t, n = new RegExp("(^| )" + e + "=([^;]*)(;|$)");
    return (t = document.cookie.match(n)) ? unescape(t[2]) : null
}

function setCookie(e, t, n) {
    n = n || 1;
    var a = new Date;
    a.setTime(a.getTime() + 86400 * n * 1e3), document.cookie = e + "=" + escape(t) + ";path=/;domain=pngtree.com;expires=" + a.toGMTString()
}
var notice_statis = function (e) {};