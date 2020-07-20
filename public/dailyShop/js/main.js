//
// $(document).ready(function () {
//     //Cài đặt màn hình to nhỏ
//     $(".setting").on("click",function(){
//         $(".containerAll").hasClass("container")?$(".containerAll").editClass("-container"):$(".containerAll").editClass("container");
//     })
//     //Click thay ảnh sản phẩm vào khung
//     $(".showProduct").on("click",".itemLink",function(){
//         var t = $(this);
//         t.closest(".showProduct").find(".itemLink").editClass("-bw2,-bss,-bcb1,cp");
//         t.editClass("-cp,bw2,bss,bcb1");
//         console.log(t.attr('style'));
//         t.closest(".showProduct").find(".imageProduct").attr({style:t.attr('style')})
//     })
//     //positin fix menu
//     var fixMenu = $.extend($(".fixMenu").offset(),{with:$(".fixMenu").width()});
//     $(window).scroll(function(){
//         $(window).scrollTop()>=fixMenu.top?$(".fixMenu").editClass("ps,bóng,bgcf,t0,l0,z999k")&&$(".item").editClass("-ptb25,ptb15"):$(".fixMenu").editClass("-ps,-bóng,-bgcf,-t0,-l0,-z999k")&&$(".item").editClass("ptb25,-ptb15");
//     })
// })
// $.fn.extend({
//     editClass: function (a) {
//         return this.each(function () {
//             var t = $(this),
//                 b = a.split(",");
//             b.map(function (d) {
//                 if (d.search("-") == 0) {
//                     var m = d.replace("-", "")
//                     t.removeClass(m);
//                 } else {
//                     t.addClass(d);
//                 }
//             })
//         })
//     },
//     iSelect: function (arr, o, fn) {
//         var t = $(this),
//             ar = arr || [{ text: "Lựa chọn 1", value: "Giá trị 1" }, { text: "Lựa chọn 2", value: "Giá trị 2" }],
//             o = $.extend({
//                 original: "",
//                 maxheight: 10,
//                 change: function (m) { console.log(m) }
//             }, o);
//         return this.each(function () {
//             arr.map(function (v) {
//                 v.value == o.original && t.iVal(v.value) && t.text(v.text)
//             })
//             t.changed(function (v) {
//                 o.change.call(t, v);
//                 fn && fn.call(t, v);
//             })
//             t.editClass("pr,bấmĐc,iSelect").attr({ tabindex: 0 }).data({ type: "select" }).focus(function () {
//                 t.editClass("bgcyl")
//                 t.append(
//                     $("<div>", { class: "pa t1 l0 df fdc bw1 bss bcd boxSelect oya bóng trắng" }).append(
//                         ar.map(function (d, i) {
//                             return $("<div>", { tabindex: 0, class: "bb1 bcd bsdo pa10 bgcf bgceh z999 wsn", text: d.text, data: { iVal: d.value } }).each(function () {
//                                 var t1 = $(this);
//                                 setTimeout(function () {
//                                     t.find(".boxSelect").css({ maxHeight: t1.outerHeight() * 5 + 5 })
//                                     t1.iVal() == t.iVal() && t1.focus();
//                                 }, 100)
//                                 t1.focus(function () {
//                                     t.editClass("bgcyl")
//                                     t1.editClass("-bgcf,bgce,selected")
//                                     var event = {
//                                         keydown: function (e) {
//                                             iA(e.keyCode, [38, 40, 13]) && e.preventDefault();
//                                             e.keyCode == 38 && t1.prev().focus();
//                                             e.keyCode == 40 && t1.next().focus();
//                                             e.keyCode == 13 && t1.trigger("click");
//                                         },
//                                         click: function (e) {
//                                             t.iVal(t1.iVal());
//                                             t.text(d.text);
//                                             t.editClass("-bgcyl");
//                                             t.find(".boxSelect").remove();
//                                             t1.off(event);
//                                         },
//                                         focusout: function (e) {
//                                             t1.off(event);
//                                             setTimeout(function () {
//                                                 !t.find(".boxSelect").find(".selected").length && t.find(".boxSelect").remove() && t.editClass("-bgcyl") && t.attr({ tabindex: "" }) && t.attr({ tabindex: 0 });
//                                             }, 100)
//                                             t1.editClass("bgcf,-bgce,-selected")
//                                         },
//                                     };
//                                     t1.on(event);
//                                 })
//                             })
//                         })
//                     )
//                 )
//             })
//         })
//     },
//     iVal: function (a) {
//         var b = this;
//         if (a != ud) {
//             return b.each(function () {
//                 switch ($(b).data("type")) {
//                     case "select":
//                         $(b).data({ iVal: a });
//                         break;
//                     default:
//                         $(b).text(a)
//                         break;
//                 }
//
//             })
//         } else {
//             return $(b).data("iVal") || b.text();
//         }
//     },
// })
