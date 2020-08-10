$(document).ready(function () {
    // hover thay ảnh ở model trang chủ
    $(".simpleLens-thumbnail-wrapper").hover(function () {
        var t = $(this), url = t.attr("url"),
            th = t.closest(".simpleLens-gallery-container").find(".simpleLens-lens-image");
        console.log(url, th.find("img"))
        th.attr({ "data-lens-image": url });
        th.find("img").attr({ src: url })
    })
    //focus size -> chon size
    $(".sizeProduct").focus(function () {
        var t = $(this),
            qua = t.closest(".modal-body").find(".quantityProduct").length ? t.closest(".modal-body").find(".quantityProduct") : t.closest(".cartProduct").find(".quantityProduct"),
            q = t.attr("quantity");
        qua.closest(".formQuantity").editClass("-dn").find(".sumQuantity").text(q);
        qua.closest(".formQuantity").find(".quantityProduct").val(1).on("change", function () {
            qua.closest(".cartProduct").find(".totalPrice").text(qua.closest(".formQuantity").find(".quantityProduct").val() * 1 * qua.closest(".cartProduct").find(".priceProduct").text().notComma())//priceProduct
        });
        qua.attr({ max: q }).trigger("change");
    })
    //chọn size
    $(".sizeProduct").on("click", function () {
        var t = $(this),
            qua = t.closest(".modal-body").find(".quantityProduct").length ? t.closest(".modal-body").find(".quantityProduct") : t.closest(".cartProduct").find(".quantityProduct"),
            q = t.attr("quantity");
        t.editClass("sizeActive").siblings().editClass("-sizeActive");
        qua.closest(".formQuantity").editClass("-dn").find(".sumQuantity").text(q);
        qua.closest(".formQuantity").find(".quantityProduct").val(1).on("change", function () {
            qua.closest(".cartProduct").find(".totalPrice").text(comma(qua.closest(".formQuantity").find(".quantityProduct").val() * 1 * qua.closest(".cartProduct").find(".priceProduct").text().notComma()))
            $("#total").trigger("total");
        });
        qua.attr({ max: q }).trigger("change");
    });
    $(".aa-prod-view-size").find(".sizeProduct:eq(0)").trigger("click");
    // html
    //     <h4>Size</h4>
    //     <div class="aa-prod-view-size mb15">
    //         @foreach($product->size as $size)
    //         <a quantity="{{$size->pivot->quantity}}"
    // class="sizeProduct size dib wh25 tac"
    //     href="#">{{$size->pivot->quantity?$size->name:""}}</a>
    // @endforeach
    // </div>
    //     <div class="aa-prod-quantity">
    //         <form action="" class="formQuantity dn">
    //         <div class="mb10">
    //         <div class="dib">Kho:</div>
    //     <div class="sumQuantity dib ml10">10</div>
    //         </div>
    //         <input type="number" class="quantityProduct" style="width: 50px" value="1" min="1" max="">
    //         </form>
    //         </div>
    // focus size -> chon size (end)

    // add to cart

    $("[productId]").on("click", function () {
        var t = $(this), productId = t.attr("productId");
        $.ajax({
            method: "POST",
            url: "/cart",
            data: { productId: productId, size: null, quantity: 1 },
            success: function (v) {
                console.log("Du lieu tra ve", v)
                v != 0 && notification({ text: "Đăng ký thành công!!", type: "true" });
                v == 0 && notification({ text: "Sản phẩm đã tồn tại trong giỏ hàng!!", type: "note" });
                $(".productCart").trigger("loadCart");
            },
            error: function (data, textStatus, errorThrown) {
                console.log(data, textStatus, errorThrown);
                notification({ text: "Thêm sản phẩm thất bại!!", type: "false" })
            },
        })
    })
    //Hiển thị giỏ hàng
    $(".productCart").on("loadCart", function () {
        var t = $(this);
        $.ajax({
            method: "POST",
            url: "/showCart",
            success: function (v) {
                // console.log("Du lieu tra ve", v);
                if (v && typeof v == "object" && v.cart) {
                    var arr = [];
                    $.map(v.cart, function (d, i) {
                        arr.push(d)
                    })
                    console.log(v.cart);
                    $("body").data(v);
                    t.find(".aa-cart-notify").text((v && v.cart) ? Object.size(v.cart) : "");
                    !Object.size(v.cart) && $(".checkoutCart").append($('<div>', { id: '', class: 'ttu fwb c1 tac fs13', text: 'Cart empty' }));
                    t.find(".aa-cartbox-summary ul").empty().append(
                        !Object.size(v.cart) && $('<div>', { id: '', class: 'ttu fwb c1 tac fs13', text: 'Cart empty' }),
                        v.cart && $.map(v.cart, function (d, i) {
                            return d.productId ? $("<li>", { class: "oneProduct" }).append(
                                $("<a>", { class: "aa-cartbox-img", href: "/product/" + d.productId }).append(
                                    $("<div>", {
                                        class: "img-11 bgpti",
                                        style: "background-image: url('" + getAttrInObj(v.products, "id", d.productId, "thumbnail") + "')"
                                    }),
                                ),
                                $("<div>", { class: "aa-cartbox-info" }).append(
                                    $("<h4>", { class: "" }).append(
                                        $("<a>", {
                                            text: getAttrInObj(v.products, "id", d.productId, "name"),
                                            href: "/product/" + d.productId
                                        })
                                    ),
                                    $("<p>", { text: (getAttrInObj(v.cart, "productId", d.productId, "quantity") || 1) + " x " + getAttrInObj(v.products, "id", d.productId, "price").comma() + " VNĐ" })
                                ),
                                $("<a>", { class: "aa-remove-product cp productRemove" + d.productId }).append(
                                    $("<span>", { class: "fa fa-times" })
                                ).on("click", function () {
                                    // v.cart.splice(findWithAttr(v.cart, "productId", d.productId), 1);
                                    var t1 = $(this);
                                    $.ajax({
                                        method: "POST",
                                        url: "/removeProductInCart",
                                        data: { cartIndex: d.productId },
                                        // data: {cartIndex:v.cart.productId},
                                        success: function (v) {
                                            console.log("Du lieu tra ve", v)
                                            if (v == 1) {
                                                $("#total").trigger("total");
                                                t.trigger("loadCart");
                                                notification({ text: "Sản phẩm đã xoá!!", type: "true" });
                                            }

                                        },
                                        error: function (data, textStatus, errorThrown) {
                                            notification({ text: "Xoá sản phẩm thất bại!!", type: "false" });
                                        }
                                    });
                                })
                            ) :
                                ""
                        })
                    )
                } else {
                    t.find(".aa-cart-notify").text(0);
                    t.find(".aa-cartbox-summary ul").empty()
                }


            },
            error: function (data, textStatus, errorThrown) {
                console.log(data, textStatus, errorThrown);
            },
        })
        //
    })
    $(".productCart").trigger("loadCart");
    //remove product in checkout
    $(document).on("click", "[idRemove]", function () {
        var t = $(this),
            id = t.attr("idRemove"),
            r = ".productRemove" + id;
        $(r).trigger("click");
        t.closest(".cartProduct").remove();
        $("#total").trigger("total");
    });
    $(".informationShip").append(
        $('<div>', { id: '', class: 'tac ttu fs13 fwb', text: 'Đặt hàng' }),
        $('<div>', { id: '', class: '', text: 'Name:' }),
        $('<div>', { id: 'name', class: 'w1 bgcyl bra3 bw1 bss bce mb10 ta5', text: '', contenteditable: true }),
        $('<div>', { id: '', class: '', text: 'Phone:' }),
        $('<div>', { id: 'phone', class: 'w1 bgcyl bra3 bw1 bss bce mb10 ta5', text: '', contenteditable: true }),
        $('<div>', { id: '', class: '', text: 'Addres:' }),
        $('<div>', { id: 'address', class: 'w1 bgcyl bra3 bw1 bss bce mb10 ta5', text: '', contenteditable: true }),
        $('<div>', { id: '', class: 'dibc', text: '' }).append(
            $('<div>', { id: '', class: 'mr10 mb10', text: 'Total: ' }),
            $('<div>', { id: 'total', class: 'c1 fwb', text: comma('0') }).on("total", function () {
                var t = $(this), total = 0;
                $(".cartProduct").each(function () {
                    var m = $(this);
                    total = total + m.find(".totalPrice").text().notComma() * 1;
                });
                t.text(total.comma());
            }),
            $('<div>', { id: '', class: 'c1 fwb ml15', text: ' VNĐ' }),
        ),
        $('<div>', { id: '', class: 'tar', text: '' }).append(
            $('<div>', { id: '', class: 'btn bg1 bni cf', text: 'Đặt hàng' }).on("click", function () {
                var T = $(this).closest(".informationShip"), p = {}, allProduct = [];
                p.name = T.find("#name").text();
                p.phone = T.find("#name").text();
                p.address = T.find("#address").text();
                p.total = T.find("#total").text().notComma();
                T.find("[contenteditable]").each(function () {
                    !$(this).text() && $(this).editClass("bg1i");
                })
                setTimeout(function () {
                    T.find("[contenteditable]").editClass("-bg1i");
                }, 500)
                if (T.find("[contenteditable]").hasClass("bg1i")) {
                    notification({ text: "Yêu cầu nhập đầy đủ thông tin!!!", type: "note" })
                    return false;
                }
                $(".cartProduct").each(function () {
                    var T = $(this), o = {};
                    o.productId = T.find("[idRemove]").attr("idRemove");
                    o.sizeId = T.find(".sizeActive").attr("sizeId");
                    o.quantityProduct = T.find(".quantityProduct").val();
                    o.totalPrice = T.find(".totalPrice").text().notComma();
                    allProduct.push(o);
                })
                console.log(allProduct, p);
                $.ajax({
                    method: "POST",
                    url: "/saveOrder",
                    data: { orderDetails: allProduct, order: p },
                    success: function (v) {
                        console.log("Du lieu tra ve", v);
                    },
                    error: function (data, textStatus, errorThrown) {
                        notification({ text: "Lưu đơn hàng thất bại!!", type: "false" });
                    }
                });
            }),
        ),
    );
    $("#total").trigger("total");
})


$.fn.extend({
    editClass: function (a) {
        return this.each(function () {
            var t = $(this),
                b = a ? a.split(",") : [];
            b.map(function (d) {
                if (d.search("-") == 0) {
                    var m = d.replace("-", "")
                    t.removeClass(m);
                } else {
                    t.addClass(d);
                }
            })
        })
    },
    iSelect: function (arr, o, fn) {
        var t = $(this),
            ar = arr || [{ text: "Lựa chọn 1", value: "Giá trị 1" }, { text: "Lựa chọn 2", value: "Giá trị 2" }],
            o = $.extend({
                original: "",
                maxheight: 10,
                change: function (m) {
                    console.log(m)
                }
            }, o);
        return this.each(function () {
            arr.map(function (v) {
                v.value == o.original && t.iVal(v.value) && t.text(v.text)
            })
            t.changed(function (v) {
                o.change.call(t, v);
                fn && fn.call(t, v);
            })
            t.editClass("pr,cp,iSelect").attr({ tabindex: 0 }).data({ type: "select" }).focus(function () {
                t.editClass("bgcyl")
                t.append(
                    $("<div>", { class: "pa t1 l0 df fdc bw1 bss bcd boxSelect oya bóng trắng" }).append(
                        ar.map(function (d, i) {
                            return $("<div>", {
                                tabindex: 0,
                                class: "bb1 bcd bsdo pa10 bgcf bgceh z999 wsn",
                                text: d.text,
                                data: { iVal: d.value }
                            }).each(function () {
                                var t1 = $(this);
                                setTimeout(function () {
                                    t.find(".boxSelect").css({ maxHeight: t1.outerHeight() * 5 + 5 })
                                    t1.iVal() == t.iVal() && t1.focus();
                                }, 100)
                                t1.focus(function () {
                                    t.editClass("bgcyl")
                                    t1.editClass("-bgcf,bgce,selected")
                                    var event = {
                                        keydown: function (e) {
                                            iA(e.keyCode, [38, 40, 13]) && e.preventDefault();
                                            e.keyCode == 38 && t1.prev().focus();
                                            e.keyCode == 40 && t1.next().focus();
                                            e.keyCode == 13 && t1.trigger("click");
                                        },
                                        click: function (e) {
                                            t.iVal(t1.iVal());
                                            t.text(d.text);
                                            t.editClass("-bgcyl");
                                            t.find(".boxSelect").remove();
                                            t1.off(event);
                                        },
                                        focusout: function (e) {
                                            t1.off(event);
                                            setTimeout(function () {
                                                !t.find(".boxSelect").find(".selected").length && t.find(".boxSelect").remove() && t.editClass("-bgcyl") && t.attr({ tabindex: "" }) && t.attr({ tabindex: 0 });
                                            }, 100)
                                            t1.editClass("bgcf,-bgce,-selected")
                                        },
                                    };
                                    t1.on(event);
                                })
                            })
                        })
                    )
                )
            })
        })
    },
    iVal: function (a) {
        var b = this;
        if (a != ud) {
            return b.each(function () {
                switch ($(b).data("type")) {
                    case "select":
                        $(b).data({ iVal: a });
                        break;
                    default:
                        $(b).text(a)
                        break;
                }

            })
        } else {
            return $(b).data("iVal") || b.text();
        }
    },
})
{
    notification = function (o) {
        var o = $.extend(
            {
                text: "true",
                type: ""
            }, o
        ),
            color;
        console.log(o)
        o.type == "true" && (color = "bgcgl");
        o.type == "false" && (color = "bgcrd cf");
        o.type == "note" && (color = "bgcy");
        $("body").append(
            $("<div>", { class: "pf bra5 t50 l50 pa25 z999k ta5 tty o0 " + color, text: o.text }).each(function () {
                var t = $(this);
                setTimeout(function () {
                    t.editClass("o1,tt,-tty");
                    setTimeout(function () {
                        t.editClass("-o1,-tt,tty");
                        setTimeout(function () {
                            t.remove();
                        }, 500)
                    }, 1000)
                }, 100)
            })
        )
    }
    range = function (a, b) {
        var arr = [];
        for (var i = a; i <= b; i++) {
            arr.push(i);
        }
        return arr;
    }
    findWithAttr = function (array, attr, value) {
        for (var i = 0; i < array.length; i += 1) {
            if (array[i][attr] == value) {
                return i;
            }
        }
        return -1;
    }
    getObj = function (array, attr, value) {
        var i = findWithAttr(array, attr, value);
        if (i >= 0) {
            return array[i];
        }
    }
    getAttrInObj = function (array, attr, value, str) {
        if (getObj(array, attr, value)) {
            return getObj(array, attr, value)[str];
        }
    }
    notComma = function (t) {
        return t.replace(/,/g, "");
    };
    comma = function (n) {
        var b = [], str = "";
        if (n && typeof (n * 1) == "number") {
            n = (n + "").split("");
            while (n.length > 3) {
                var c = n.splice(-3);
                c.unshift(",");
                b = c.concat(b)
            }

            n.concat(b).map(function (d) {
                str = str + d;
            });
            return str;
        } else {
            return 0;
        }
    }
    String.prototype.notComma = function () {
        return notComma(this);
    }
    // number.prototype.notComma = function () {
    //     return notComma(this);
    // }
    String.prototype.comma = function () {
        return comma(this);
    }
    Number.prototype.comma = function () {
        return comma(this);
    }
    Object.size = function (obj) {
        var size = 0, key;
        for (key in obj) {
            if (obj.hasOwnProperty(key)) size++;
        }
        return size;
    };
}
