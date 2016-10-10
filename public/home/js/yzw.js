(function($) {
    $.fn.yzw = function(opt) {
        var This = $(this);
        var len = This.find(".slides li").size();
        var _index = 0;
        var focuspic = This.find(".slides li");
        var pWidth = This.find(".slides li").width();
        var interval = null;
        var gdWidth = 0;
        var defalt = {
            auto: false,
            autotime: 2000,
            prvnext: true,
            isbtnlist: false,
            gdlinum: 1
        };
        var sert = $.extend({},
        defalt, opt);
        init();
        change();
        function init() {
            This.find(".slides").width(pWidth * len);
            if (sert.prvnext) {
                This.append("<span class=\"prv btn\" id=\"prv\"><span>");
                This.append("<span class=\"next btn\" id=\"next\"><span>")
            }
            if (sert.isbtnlist) {
                This.append("<ol class=\"btnlist\"></ol>");
                for (var i = 0; i < len / sert.gdlinum; i++) {
                    This.find("ol.btnlist").append("<li class=\"btn\"></li>")
                }
                var marginRight = parseInt(This.find("ol.btnlist li").css("marginRight").replace('px', '')) * 2;
                var btnliwidth = (This.find("ol.btnlist li").width() + marginRight) * Math.ceil(len / sert.gdlinum);
                This.find("ol.btnlist").width(btnliwidth);
                This.find("ol.btnlist").css({
                    zIndex: 10,
                    marginLeft: -(btnliwidth / 2)
                })
            }
        };
        function change() {
            if (_index > (Math.ceil(len / sert.gdlinum) - 1)) {
                _index = 0;
                gdWidth = 0
            }
            if (_index < 0) {
                _index = (Math.ceil(len / sert.gdlinum) - 1);
                gdWidth = (len - sert.gdlinum) * pWidth
            } else {
                _index = _index;
                if ((_index + 1) * sert.gdlinum > len) {
                    gdWidth = (len - sert.gdlinum) * pWidth
                } else {
                    gdWidth = _index * pWidth * sert.gdlinum
                }
            }
            This.find(".slides").animate({
                left: -gdWidth
            });
            This.find("ol.btnlist li").eq(_index).addClass("on").siblings().removeClass("on")
        }
        This.find("ol.btnlist li").stop().hover(function() {
            clearInterval(interval);
            _index = $(this).index();
            change()
        },
        function() {
            if (sert.auto) {
                interval = setTimeout(play, sert.autotime)
            }
        });
        function play() {
            _index++;
            change()
        };
        if (sert.auto) {
            interval = setTimeout(play, sert.autotime)
        }
        if (sert.prvnext) {
            This.find("#prv").click(function() {
                clearInterval(interval);
                _index--;
                change();
                if (sert.auto) {
                    interval = setTimeout(play, sert.autotime)
                }
            });
            This.find("#next").click(function() {
                clearInterval(interval);
                _index++;
                change();
                if (sert.auto) {
                    interval = setTimeout(play, sert.autotime)
                }
            })
        }
    }
})(jQuery);