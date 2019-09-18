$(function () {
	try {
		var n = getInjectData()
	} catch (e) {
		n = 1
	}
	try {
		setTimeout(function () {
			$("#flexBox-images").flexImages({
				rowHeight: 280,
				container: ".bnPic-list",
				truncate: !0
			})
		}, 500)
	} catch (e) {}
	$(".window-wordart-limit-btn").on("click", function () {
		$(".cls-btn").click()
	});
	var e = function () {
			void 0 !== n && 1 == n.type && 1 == no_bot && ($(".details-lists").hasClass("loaded") || (console.log($(".details-lists").hasClass("loaded")), $(".details-lists").addClass("loaded"), $.post("/api/recommend/element", {
				_csrf: csrf,
				id: n.id,
				keyword: n.search_recommend_word
			}, function (e) {
				200 == e.status && ($(".recommend-detail-back").html(e.data.back), $("img.lazy").lazyload({
					effect: "fadeIn"
				}), $("#flexBox-images").flexImages({
					rowHeight: 280,
					container: ".bnPic-list",
					truncate: !0
				}))
			}, "json")))
		},
		a = $(window).height();
	try {
		var t = $(".details-lists").offset().top
	} catch (e) {
		t = 0
	}
	var i = $(window).scrollTop();
	0 < t && t < a + i + 100 && e(), $(window).scroll(function () {
			0 < t && t < a + $(this).scrollTop() + 100 && e()
		}),  $("#vrf_file").click(function () {
			if (!Pngtree.BaseFun.IsLogin()) return !1;
			var e = $(this).data("id");
			if (0 == vip_type) return Pngtree.publicPopup("bg-buyNow", "pop-buyNow", "199"), !1;
			
		}), $("#vrf_file_team").click(function () {
			if (!Pngtree.BaseFun.IsLogin()) return !1;
			var a = $(this),
				e = a.data("id");
			$(this).hasClass("loading") || ($(this).addClass("loading"), $("#base-loading-box-all").show(), $.getJSON("/api/message/vrf-file-team", {
				id: e
			}, function (e) {
				if (a.removeClass("loading"), !e.status || "" == e.url) return $("#base-loading-box-all").hide(), Pngtree.publicPopup("bg-addName-team", "pop-buyNow", "320"), !1;
				window.location.href = e.url, setTimeout(function () {
					$("#base-loading-box-all").hide()
				}, 5e3)
			}))
		}), $(".close-btn1").click("click", function () {
			$(".qbweb-win").hide()
		}), $(".btn-buynow").click(function () {
			$(".bg-buyNow").fadeOut(20)
		}), $("#add_name").click(function () {
			var e = $("[data-ele_id]").data("ele_id"),
				a = $("#u_name").val();
			if ("" == a) return alert("Sorry Name cannot be empty"), !1;
			$.getJSON("/api/message/vrf-name", {
				name: a,
				id: e
			}, function (e) {
				return console.log(e.url), e.status && "" != e.url && ($(".bg-addName").fadeOut(300), window.location.href = e.url), !1
			})
		}), $("#add-name-team").click(function () {
			var e = $("#vrf_file_team").data("id"),
				a = $("#u_name_team").val(),
				t = $("#u_company_name").val();
			if ("" == a) return alert("Sorry Name cannot be empty"), !1;
			if ("" == t) return alert("Sorry Company Name cannot be empty"), !1;
			var n = $(this);
			$(this).hasClass("loading") || ($(this).addClass("loading"), $("#base-loading-box-all").show(), $.post("/api/message/vrf-name-team", {
				_csrf: csrf,
				name: a,
				id: e,
				company_name: t
			}, function (e) {
				return console.log(e.url), console.log(e), n.removeClass("loading"), 1 == e.status && "" != e.url ? ($(".bg-addName-team").fadeOut(300), window.location.href = e.url, setTimeout(function () {
					$("#base-loading-box-all").hide()
				}, 5e3)) : $("#base-loading-box-all").hide(), !1
			}, "json"))
		}), $("#down-ele-vrf").on("click", function () {
			$(".bg-domnPng").fadeOut(10)
		}), $(".add-close").on("click", function () {
			var e = this;
			$(e).parent().animate({
				height: 0
			}, "3000", function () {
				$(e).parents(".qbweb-win").fadeOut()
			})
		}), $(".p-two").on("click", function () {
			Pngtree.publicPopup("Standard-LicenseBg", "Standard-License", 410)
		}), $(".complain-form").on({
			blur: function () {
				"" == $.trim($(this).val()) ? ($(this).addClass("warning"), $(this).siblings(".label-title").removeClass("on")) : $(this).removeClass("warning")
			},
			focus: function () {
				$(this).siblings(".label-title").addClass("on")
			}
		}, "input:not(.coop-issue)"), $(".complain-form").on({
			blur: function () {
				"" == $.trim($(this).val()) ? ($(this).addClass("warning"), $(this).parent().parent().children(".form-error").css("opacity", 1), $(this).siblings(".label-title").removeClass("on")) : ($(this).removeClass("warning"), $(this).parent().parent().children(".form-error").css("opacity", 0))
			},
			focus: function () {
				$(this).siblings(".label-title").addClass("on")
			}
		}, "textarea"), $(".complains").click(function () {
			$(".complain-for-commercial").show()
		}), $(".complain-for-commercial").click(function () {
			$(this).fadeOut(200)
		}), $(".complain-for-commercial .close-btn").on("click", function () {
			$(".complain-for-commercial").fadeOut(200)
		}), $(".complain-form").click(function (e) {
			(e = e || window.event).stopPropagation()
		}), $(".popup-thanks .btn").click(function () {
			$(".popup-thanks").fadeOut(200)
		}), $(".complain-form").click(function (e) {
			(e = e || window.event).stopPropagation()
		}), $(".complain-for-commercial .btn").on("click", function () {
			var e = $(".coop-name").val(),
				a = $(".coop-email").val(),
				t = $(".coop-original-link").val(),
				n = $(".coop-contact").val(),
				i = $.trim($("link[rel=alternate]").attr("href"));
			return "" == e ? ($(".coop-name").addClass("warning"), !1) : "" == a ? ($(".coop-email").addClass("warning"), !1) : "" == t ? ($(".coop-original-link").addClass("warning"), !1) : Pngtree.BaseFun.Base_IsEmail(a) ? !$(this).hasClass("warning") && void $.post("/api/message/info", {
				email: a,
				url: i,
				username: e,
				link: t,
				contact: n,
				_csrf: csrf
			}, function (e) {
				200 == e.rep ? ($(".complain-for-commercial").hide(), $(".popup-thanks").fadeIn(200)) : alert("Oops! Sorry, there is something wrong. Please try again."), $(".complain-for-commercial .btn").removeClass("warning")
			}, "json") : ($(".coop-email").addClass("warning"), !1)
		}), $(".del-data").on("click", function () {
			var e = $(this).data("id"),
				a = $(this).data("type");
			if (!confirm("Did you confirm the deletion?")) return !1;
			$.getJSON("/api/message/so-delete", {
				id: e,
				type: a
			}, function (e) {
				console.log(e), 200 == e.status ? (alert("Delete Success"), window.location.reload()) : alert("Delete Failed")
			})
		}), addLoadEvent(function () {
			var e = n.share_id;
			"" != e && $.getJSON("/api/message/share-statis", {
				_csrf: csrf,
				type: e
			})
		}), $("img").on("mousedown", function (e) {
			e.preventDefault()
		}), $(".share-way").on("click", ".share-two", function () {
			$.getJSON("/api/message/share-click", {
				_csrf: csrf,
				type: 2
			})
		}), $(".share-way").on("click", ".share-one", function () {
			$.getJSON("/api/message/share-click", {
				_csrf: csrf,
				type: 1
			})
		}), $(".share-way").on("click", ".share-three", function () {
			$.getJSON("/api/message/share-click", {
				_csrf: csrf,
				type: 3
			})
		}),
		function () {
			$(".fontdetails-banner-inp");
			for (var e = $(".fontdetails-banner-letter"), a = 0; a < e.length; a++) {
				var t = 2 * Math.random(),
					n = e[a];
				n.innerText, n.style.animationDelay = t + "s"
			}
		}(),
		$(".search-dropdown").on("click", ".recent-search span", function () {
			$(this).css("cursor", "pointer");
			var e = $(this).attr("data-val"),
				a = parseInt($(this).parents(".serach-box").find(".search-type a.on").data("type"));
			Pngtree.BaseFun.SearchClick(a, e)
		}), $(".search-dropdown").on("click", "p", function () {
			var e = $(this).attr("data-val"),
				a = parseInt($(this).parents(".search-dropdown-wrap").siblings('.res-search-input').find("input").data("type"));
			Pngtree.BaseFun.SearchClick(a, e)
		}), 
		$(".btn-copy").on("click", function () {
			var e = $(".un_upgradeInfor-copy-link").val(),
				a = document.createElement("input");
			a.value = e, document.body.appendChild(a), a.select(), document.execCommand("Copy"), a.className = "oInput", a.style.display = "none", $(this).html("Successful copy");
			var t = "";
			switch (n.type) {
				case 1:
					t = "Element_Detailpage";
					break;
				case 2:
					t = "Back_Detailpage";
					break;
				case 5:
					t = "Template_Detailpage";
					break;
				case 6:
					t = "PPT_Detailpage";
					break;
				case 7:
					t = "Font_Detailpage"
			}
			Pngtree.BaseFun.Ga_Deploy(t, "copy", "click")
		}), $(document).on("click", function (e) {
			"detailsearch-select-checked" === e.target.className ? $(e.target).parents(".detailsearch-select").toggleClass("on") : $(".detailsearch-select").removeClass("on")
		}), $(".detailsearch-select").on("click", "li", function () {
			$(".detailsearch-select-checked").text($(this).text())
		});
	var o = 0;
	$(".sharer-follow").on("click", function () {
			if (0 == uid) return $(".base-public-login-button").click();
			if (0 != o) return !1;
			o = 1;
			var a = $(this),
				e = a.data("follow");
			$.post("/api/async/designer-follow", {
				id: e,
				_csrf: csrf
			}, function (e) {
				o = 0, a.hasClass("on") ? a.removeClass("on").text("+ FOLLOW") : a.addClass("on").text(" FOLLOWED ")
			})
		}), $(".js_slick").slick({
			slide: ".slide-item",
			dots: !1,
			prevArrow: ".page_prev",
			nextArrow: ".page_next"
		}), $(".js_slick-auto").slick({
			autoplay: !0,
			slide: ".slide-item",
			dots: !1,
			prevArrow: ".page_prev",
			nextArrow: ".page_next"
		}), window.addEventListener("load", function () {
			$(".js_slick-auto").on("beforeChange", function (e, a, t, n) {
				$(".js_slick-auto").find(".lazy").each(function (e, a) {
					$(a).hasClass("lazy") && ($(a).attr("src", $(a).attr("data-original")), $(a).removeClass("lazy"))
				})
			})
		}), $(".detail-see-more").on("click", function () {
			var e = $(this).data("tag");
			Pngtree.BaseFun.pngtree_event("detail_see_more", 1, e)
		}), $(".icon-down-file").on("click", "a", function () {
			if (!Pngtree.BaseFun.IsLogin()) return !1;
			if (0 == vip_type && 1 != n.auth_click) {
				var e = $(this).prop("href");
				return Pngtree.publicPopup("base-download-free", "updold-login ", 284), $("#base-download-confirm-true-icon").prop("href", e), !1
			}
		}), $(".window-report_image-btn").on("click", function () {
			var e = $.trim($("input[name='report_image']:checked").val()),
				a = $(".window-report_image-textarea textarea").val();
			return "" == e ? (alert("Please fill the required information"), !1) : 1 == e && "" == a ? (alert("Please fill the required information"), !1) : void $.post("/api/message/complaint", {
				complaint_type: e,
				content: a,
				element_id: n.id,
				element_type: n.type,
				_csrf: csrf
			}, function (e) {
				200 == e.rsp ? (alert("Thank you for your message."), window.setTimeout(function () {
					window.location.reload()
				}, 1e3)) : alert("Failed to submit")
			}, "json")
		}), $("#base-download-confirm-true-icon").on("click", function () {
			$("#base-download-free").find(".not-see input").prop("checked") && $.getJSON("/api/down/remove-show", {
				_csrf: csrf
			}), $(this).parents(".base-download-free").find(".close-btn").trigger("click")
		}), $("#base-download-free").on("click", ".not-see", function () {
			var e = $(this).find("input"),
				a = e.prop("checked");
			e.prop("checked", !a)
		}), $(".detail-more").on("click", function () {
			$(this).parents(".keyWords-wrap").toggleClass("more")
		}), $(".detail-more").on("click", function () {
			$(this).parents(".add-recommend").toggleClass("more")
		}),
		function () {
			if (!$(".iconmore")[0]) return;
			var e = null,
				t = !0;
			$(window).on("scroll", function () {
				clearTimeout(e), e = setTimeout(function () {
					if (!t) return !1;
					var e = $(".iconmore")[0].offsetTop - $(window).scrollTop() <= $(window).height() + 200,
						a = parseInt($(".iconmore").attr("data-page"));
					e && (t = !1, console.log("scroll at button"), $.post("/api/recommend/icon-font", {
						_csrf: csrf,
						page: a,
						id: n.id,
						keyword: n.keyword
					}, function (e) {
						200 == e.status && ($(".more-icons-like").append(e.data.icon_font), $(".iconmore").attr("data-page", a + 1), t = !0)
					}, "json"))
				}, 1e3 / 60)
			})
		}();
	var s = {
		len: 1,
		isLoad: !1,
		isFirstClick: !0,
		isFirstHover: !0
	};

	function r() {
		s.load = !s.load;
		var e = parseInt($(this).attr("data-page"));
		
	}

	function l() {
		var e = "";
		switch (parseInt(n.type)) {
			case 1:
				e = "ElementDetail";
				break;
			case 2:
				e = "BackDetail";
				break;
			case 5:
				e = "TemplatesDetail";
				break;
			case 7:
				e = "FontsDetail";
				break;
			default:
				e = "ElementDetail"
		}
		return e
	}

	function c() {
		var e = $(".dl-keyWords").text().split("\n"),
			t = "";
		return $.each(e, function (e, a) {
			0 < e && e < 2 && (t += $.trim(a) + ",")
		}), t.substring(0, t.length - 1)
	}!!$(".detail_ele")[0] && (r.call(document.querySelector(".js-add-slide")), $(".recommend-list").slick("slickPlay")), $(".js-add-slide").on("click", function () {
		s.load || r.call(this)
	}), $(".detail-banner-item").on("click", ".detail-register", function () {
		Pngtree.BaseFun.IsLogin()
	}), $(".detail-banner-item").on("click", ".detail-register", function () {
		var e = $(this).data("type");
		Pngtree.BaseFun.pngtree_event("detail_register_banner", 1, e), Pngtree.BaseFun.IsLogin()
	}), $(".detail-banner-item").on("click", function () {
		var e = $(this).data("type");
		Pngtree.BaseFun.pngtree_event("detail-banner", 1, e)
	}), Png.BaseGA.Ga_Detail(), Pngtree.BaseFun.Ga_Deploy_Class(".icon-ga-down", "Icons_Detailpage", "Down_Btn", "ga"), $(".icons-class").on("click", function () {
		Pngtree.BaseFun.Ga_Deploy("Icons_Detailpage", "Keyword_List", "click")
	}), $(".un_upgradeInfor-download_font").on("click", function () {
		Pngtree.BaseFun.pngtree_event("font_detail", 1, "click"), $("#window-wordart-limit").show()
	}), addLoadEvent(function () {
		5 == n.type && Pngtree.BaseFun.pngtree_event("font_detail", 1, "come")
	}), $(".share-group").on("click", function () {
		var e = $(this);
		e.hasClass("statis-log") || ($.getJSON("/api/share/share-statis", {
			id: n.id,
			type: n.type
		}), e.addClass("statis-log"))
	}), Pngtree.BaseFun.Base_alert_register(".detail-see-more"), $(".dialog-detail-search-close").on("click", function () {
		$(".dialog-detail-search .search-input").val(c()), Pngtree.BaseFun.pngtree_event("Detail_side_search_en", 1, l() + "_CloseCounts"), $(this).parents(".dialog-detail-search").toggleClass("on")
	}), setTimeout(function () {
		console.log("trigger"), Pngtree.BaseFun.pngtree_event("Detail_side_search_en", 1, l() + "_ShowCounts"), $(".dialog-detail-search .search-input").val(c()), $(".dialog-detail-search").addClass("on")
	}, 6e3), $(".dialog-detail-search").on("keydown", ".search-input", function (e) {
		if (13 == e.keyCode) return $(".dialog-detail-search-btn").trigger("click"), !1
	}), $(".dialog-detail-search-btn,.search-btn").on("click", function () {
		var e = $(".search-input").val();
		Pngtree.BaseFun.SearchClick(n.type, e), Pngtree.BaseFun.pngtree_event("Detail_side_search_en", 1, l() + "_SearchCounts")
	}), $(".detail-widget-fix").on("click", ".save-picture", function () {
		if (!Pngtree.BaseFun.IsLogin(3)) return !1;
		$(this).siblings("#xs-download-dialog").show()
	}), $(".detail-widget-fix").on("click", ".login-alert", function () {
		console.log(1), $(".detail-down-click .down-jpg-click")[0].click()
	}), $(".detail-widget-fix").on("click", ".direct-save", function () {
		console.log(12), $(".detail-down-click .down-rar-click")[0].click()
	}), $("#xs-download-dialog").on("click", ":not(.xs-download-dialog)", function () {
		$(this).parents("#xs-download-dialog").hide()
	}), 1 == n.type && addLoadEvent(function () {
		
	})
});