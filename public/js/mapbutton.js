$(document).ready(function() {
    $(".box_left").click(function() {
        $('.box_left').css('border-color', '#F03');
        $('.box_left').css('background-color', '#EEFFFF');
        $('.box_right').css('border-color', '#d9d9d9');
        $('.box_right').css('background-color', '#fff');
        $('.box_empty_spec').css('border-color', '#d9d9d9');
        $('.box_empty_spec').css('background-color', '#fff');
    });
    $(".box_right").click(function() {
        $('.box_left').css('border-color', '#d9d9d9');
        $('.box_left').css('background-color', '#fff');
        $('.box_right').css('border-color', '#F03');
        $('.box_right').css('background-color', '#EEFFFF');
        $('.box_empty_spec').css('border-color', '#d9d9d9');
        $('.box_empty_spec').css('background-color', '#fff');
    });
    $(".box_empty_spec").click(function() {
        $('.box_empty_spec').css('border-color', '#F03');
        $('.box_empty_spec').css('background-color', '#EEFFFF');
        $('.box_left').css('border-color', '#F03');
        $('.box_left').css('background-color', '#fff');
        $('.box_right').css('border-color', '#F03');
        $('.box_right').css('background-color', '#fff');
    });
    $('.map_area input').click(function() {
        var cname = '';
        var wkvalue = '';
        var idname = event.target.id;
        idname = idname.substr(idname.length - 6, 6);
        var inputValue = event.target.value;
        var divname = idname.substr(0, 4);
        if ($('.box_left').css('background-color') === 'rgb(238, 255, 255)') {
            cname = '.box_left';
            wkvalue = $('input[name="beginplace"]').val();

            if (wkvalue.match(inputValue)) {
                wkvalue = wkvalue.replace(inputValue + ',', '');
                $('input[name="beginplace"]').val(wkvalue);
            } else {
                $('input[name="beginplace"]').val(wkvalue + inputValue + ',');
            }
            wkvalue = $('input[name="beginplace"]').val();
            var wkarray = wkvalue.split(",");
            var t = wkarray.length - 2;
            var deleteid = "#" + idname;
            if (wkvalue.match(inputValue)) {
                if (divname === 'pref') {
                    $(cname).append('<input type="button" id="' + idname + '" class = "btn btn-danger mb-3 mr-3" value="' + inputValue + '">');
                } else {
                    $(cname).append('<input type="button" id="' + idname + '" class = "btn btn-info mb-3 mr-3" value="' + inputValue + '">');
                }
            } else {
                $(cname + " > " + deleteid).remove();
            }

        } else if ($('.box_right').css('background-color') === 'rgb(238, 255, 255)') {
            cname = '.box_right';
            wkvalue = $('input[name="endplace"]').val();

            if (wkvalue.match(inputValue)) {
                wkvalue = wkvalue.replace(inputValue + ',', '');
                $('input[name="endplace"]').val(wkvalue);
            } else {
                $('input[name="endplace"]').val(wkvalue + inputValue + ',');
            }
            wkvalue = $('input[name="endplace"]').val();
            var wkarray = wkvalue.split(",");
            var t = wkarray.length - 2;
            var deleteid = "#" + idname;
            console.log(deleteid);
            if (wkvalue.match(inputValue)) {
                if (divname === 'pref') {
                    $(cname).append('<input type="button" id="' + idname + '" class = "btn btn-danger mb-3 mr-3" value="' + inputValue + '">');
                } else {
                    $(cname).append('<input type="button" id="' + idname + '" class = "btn btn-info mb-3 mr-3" value="' + inputValue + '">');
                }
            } else {
                $(cname + " > " + deleteid).remove();
            }

        } else if ($('.box_empty_spec').css('background-color') === 'rgb(238, 255, 255)') {
            if (divname === 'pref') {
                cname = '.box_empty_spec';
                wkvalue = $('input[name="emptyplaceSpec"]').val();
                if (wkvalue.match(inputValue)) {
                    wkvalue = wkvalue.replace(inputValue, '');
                    $('input[name="emptyplaceSpec"]').val(wkvalue);
                } else {
                    $('input[name="emptyplaceSpec"]').val(inputValue);
                }
                wkvalue = $('input[name="emptyplaceSpec"]').val();
                $(cname).empty();
                $(cname).append('<input type="button" id="' + idname + '" class = "btn btn-danger mb-3 mr-3" value="' + inputValue + '">');
            }
        }

    });
    $(".box_left").on("click", "input", function() {
        var wkvalue = $('input[name="beginplace"]').val();
        var inputId = $(this).attr('id');
        $('.box_left > #' + inputId).remove();

    });
    $(".box_right").on("click", "input", function() {
        var wkvalue = $('input[name="endplace"]').val();
        var inputId = $(this).attr('id');
        console.log(inputId);
        $('.box_right > #' + inputId).remove();
    });
    $(".box_empty_spec").on("click", "input", function() {
        $('input[name="emptyplaceSpec"]').val('');
        $('.box_empty_spec > input').remove();
    });


    $(function() {
        var $children = $('#pref01');
        var original = $children.html();
        $('#area01').change(function() {
            //選択された地方のvalueを取得し変数に入れる
            var val1 = $(this).val();
            //削除された要素をもとに戻すため.html(original)を入れておく
            $children.html(original).find('option').each(function() {
                var val2 = $(this).data('val'); //data-valの値を取得
                //valueと異なるdata-valを持つ要素を削除
                if (val1 != val2 && val1 != 0) {
                    $(this).not(':first-child').remove();
                }
            });

            //地方側のselect要素が未選択の場合、都道府県をdisabledにする
            if ($(this).val() === "") {
                $children.attr('disabled', 'disabled');
            } else {
                $children.removeAttr('disabled');
            }
        });
    });



    $(function() {
        var $children = $('#pref02');
        var original = $children.html();
        $('#area02').change(function() {
            //選択された地方のvalueを取得し変数に入れる
            var val1 = $(this).val();

            //削除された要素をもとに戻すため.html(original)を入れておく
            $children.html(original).find('option').each(function() {
                var val2 = $(this).data('val'); //data-valの値を取得

                //valueと異なるdata-valを持つ要素を削除
                if (val1 != val2 && val1 != 0) {
                    $(this).not(':first-child').remove();
                }
            });

            //地方側のselect要素が未選択の場合、都道府県をdisabledにする
            if ($(this).val() === "") {
                $children.attr('disabled', 'disabled');
            } else {
                $children.removeAttr('disabled');
            }
        });
    });



    //$('#area11').addClass("place");
    $(function() {
        var $children = $('#pref11');
        var original = $children.html();
        $('#area11').change(function() {
            //選択された地方のvalueを取得し変数に入れる
            var val1 = $(this).val();

            //削除された要素をもとに戻すため.html(original)を入れておく
            $children.html(original).find('option').each(function() {
                var val2 = $(this).data('val'); //data-valの値を取得

                //valueと異なるdata-valを持つ要素を削除
                if (val1 != val2 && val1 != 0) {
                    $(this).not(':first-child').remove();
                }
            });

            //地方側のselect要素が未選択の場合、都道府県をdisabledにする
            if ($(this).val() === "") {
                $children.attr('disabled', 'disabled');
            } else {
                $children.removeAttr('disabled');
            }
        });
    });




    //$('#area12').addClass("place");
    $(function() {
        var $children = $('#pref12');
        var original = $children.html();
        $('#area12').change(function() {

            //選択された地方のvalueを取得し変数に入れる
            var val1 = $(this).val();

            //削除された要素をもとに戻すため.html(original)を入れておく
            $children.html(original).find('option').each(function() {
                var val2 = $(this).data('val'); //data-valの値を取得

                //valueと異なるdata-valを持つ要素を削除
                if (val1 != val2 && val1 != 0) {
                    $(this).not(':first-child').remove();
                }
            });

            //地方側のselect要素が未選択の場合、都道府県をdisabledにする
            if ($(this).val() === "") {
                $children.attr('disabled', 'disabled');
            } else {
                $children.removeAttr('disabled');
            }
        });
    });
});