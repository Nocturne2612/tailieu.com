$(function () {
	var e = getInjectData();
	0 == uid && 1 == e.isAlert && Pngtree.BaseFun.IsLogin(), $(document).click(function () {
		$(".comment-search-dropdown-wrap").hide()
	}), $(".index-search-select").on("mouseenter", function () {
		$(".search-dropdown-wrap").hide()
	});
	var t = "";
	$(".index-search-input").on("input", "input", function () {
		t = $(this).val()
	}), $(".index-search").on("mouseenter", ".search-dropdown p", function () {
		var e = $(this).children(".value").text();
		$(".index-search-input .js_search-input").val(e)
	}).on("mouseleave", ".search-dropdown p", function () {
		$(".index-search-input .js_search-input").val(t)
	}), $(".js_search-input").on("focus", function () {
		var e = $.trim($(this).val()),
			t = $(this).data("type");
			that = $(this).parent().siblings(".comment-search-dropdown-wrap");
		$.getJSON("/api/index", {
			type: t,
			keyword: e
		}, function (e) {
			200 == e.status && "" != e.data ? (that.children(".search-dropdown").html(e.data), that.show()) : that.hide()
		})
	}), $(".search-box-input").on("focus", function () {
		var e = $(this).parents(".serach-box").find(".search-type a.on").data("type"),
			t = $.trim($(this).val());
		$.getJSON("/api/index", {
			type: e,
			keyword: t
		}, function (e) {
			200 == e.status && "" != e.data && ($(".comment-search-dropdown-wrap").children(".search-dropdown").html(e.data), $(".comment-search-dropdown-wrap").show())
		})
	}), $(".js_search-input").on("keyup", function () {
		var e = $.trim($(this).val()),
			t = $(this).data("type");
			that = $(this).parent().siblings(".comment-search-dropdown-wrap");
		$.getJSON("/api/index", {
			type: t,
			keyword: e
		}, function (e) {
			200 == e.status && "" != e.data ? (that.children(".search-dropdown").html(e.data), that.show()) : that.hide()
		})
	}), $(".search-dropdown").on("click", ".recent-search span", function () {
		if ("headen" == $(this).parents().parents().attr("data-type")) {
			var e = $(this).attr("data-val"),
				t = Number($(this).parents().parents().parents("").find(".serach-box a.on").attr("data-type"));
			Pngtree.BaseFun.SearchClick(t, e)
		} else {
			e = $(this).attr("data-val"), t = parseInt($(this).parents(".serach-box").find(".search-type a.on").data("type"));
			Pngtree.BaseFun.SearchClick(t, e)
		}
	}), $(".search-dropdown").on("click", "p", function () {
		if ("headen" == $(this).parents().attr("data-type")) {
			var e = $(this).attr("data-val"),
				t = Number($(this).parents().parents().parents("").find(".serach-box a.on").attr("data-type"));
			Pngtree.BaseFun.Ga_Deploy("Home", "Search_Drop_Down_bar", e), Pngtree.BaseFun.SearchClick(t, e)
		} else {
			e = $(this).attr("data-val");
			t = parseInt($(this).parents(".search-dropdown-wrap").siblings('.index-search-input').find("input").attr("data-type"));
			Pngtree.BaseFun.Ga_Deploy("Home", "Search_Drop_Down_bar", e), Pngtree.BaseFun.SearchClick(t, e)
		}
	}), $(".index-search-btn").on("click", function () {
		var e = $(".js_search-input").data("type"),
			t = $.trim($(this).siblings('.index-search-input').children('input').val());
		Pngtree.BaseFun.SearchClick(e, t);
	}),
	$(".res-search-btn").on("click", function () {
		var e = $(this).siblings('.res-search-input').find('input').attr("data-type"),
			t = $.trim($(this).siblings('.res-search-input').children('input').val());
		Pngtree.BaseFun.SearchClick(e, t);
	}),
	$(".rem-click").on("click", function () {
		var e = $(this).data("type");
		Pngtree.BaseFun.Ga_Deploy("Home", "Recommended_Words", e)
	}), $(".js_search-input").on("keydown", function (e) {
		if (13 == e.keyCode) {
			$(".index-search-btn").trigger("click");
			$(".res-search-btn").trigger("click");
			$(".search-click-btn").trigger("click");
		}
	}), $(".click_banner").on("click", function () {
		var e = $(this).data("id");
		
	}), $(".search-box-input-search-app").on("click", function () {
		var e = $(".search-keyword-box-input-app"),
			t = $(".js_search-select").data("type"),
			n = $.trim(e.val());
		Pngtree.BaseFun.SearchClick(t, n)
	}), 
	$("[data-index-click-type]").on("click", function () {
		var e = $(this).data("index-click-type");
		
	}), $("#base-new-version").on("click", ".close-span", function () {
		
	}), $(".btn-go").on("click", function () {
		$("#ar-activity-relay").fadeOut(10)
	}), $("#show_join,#show_join_link").on("click", function () {
		$(this).parent().addClass("slidedown");
		var e = {};
		"show_join_link" == this.id && (e = {
			is_click: 1
		})
	}), addLoadEvent(function () {}), Pngtree.BaseFun.Base_alert_register(".section-list-btn"), Png.BaseGA.IndexClick()
});