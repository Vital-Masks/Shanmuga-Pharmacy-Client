jQuery.noConflict();
jQuery(document).ready(function ($) {
    function lightboxPhoto() {
        jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({
            animationSpeed: "fast",
            slideshow: 5000,
            theme: "light_rounded",
            show_title: false,
            overlay_gallery: false,
        });
    }

    if (jQuery().prettyPhoto) {
        lightboxPhoto();
    }

    if (jQuery().quicksand) {
        // Clone applications to get a second collection
        var $data = $(".portfolio-area").clone();

        //NOTE: Only filter on the main portfolio page, not on the subcategory pages
        $(".portfolio-categ li").click(function (e) {
            $(".filter li").removeClass("active");
            // Use the last category class as the category to filter by. This means that multiple categories are not supported (yet)
            var filterClass = $(this).attr("class").split(" ").slice(-1)[0];

            if (filterClass == "all") {
                var $filteredData = $data.find(".portfolio-item2");
            } else {
                var $filteredData = $data.find(
                    ".portfolio-item2[data-type=" + filterClass + "]"
                );
            }
            $(".portfolio-area").quicksand(
                $filteredData,
                {
                    duration: 600,
                    adjustHeight: "auto",
                },
                function () {
                    lightboxPhoto();
                }
            );
            $(this).addClass("active");
            return false;
        });
    } //if quicksand
});

$(".btn-number").click(function (e) {
    e.preventDefault();

    fieldName = $(this).attr("data-field");
    type = $(this).attr("data-type");
    var input = $("input[name='" + fieldName + "']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if (type == "minus") {
            if (currentVal > input.attr("min")) {
                input.val(currentVal - 1).change();
            }
            if (parseInt(input.val()) == input.attr("min")) {
                $(this).attr("disabled", true);
            }
        } else if (type == "plus") {
            if (currentVal < input.attr("max")) {
                input.val(currentVal + 1).change();
            }
            if (parseInt(input.val()) == input.attr("max")) {
                $(this).attr("disabled", true);
            }
        }
    } else {
        input.val(0);
    }
});
$(".input-number").focusin(function () {
    $(this).data("oldValue", $(this).val());
});
$(".input-number").change(function () {
    minValue = parseInt($(this).attr("min"));
    maxValue = parseInt($(this).attr("max"));
    valueCurrent = parseInt($(this).val());

    name = $(this).attr("name");
    if (valueCurrent >= minValue) {
        $(
            ".btn-number[data-type='minus'][data-field='" + name + "']"
        ).removeAttr("disabled");
    } else {
        alert("Sorry, the minimum value was reached");
        $(this).val($(this).data("oldValue"));
    }
    if (valueCurrent <= maxValue) {
        $(
            ".btn-number[data-type='plus'][data-field='" + name + "']"
        ).removeAttr("disabled");
    } else {
        alert("Sorry, the maximum value was reached");
        $(this).val($(this).data("oldValue"));
    }
});

$(".input-number").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if (
        $.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
        // Allow: Ctrl+A
        (e.keyCode == 65 && e.ctrlKey === true) ||
        // Allow: home, end, left, right
        (e.keyCode >= 35 && e.keyCode <= 39)
    ) {
        // let it happen, don't do anything
        return;
    }
    // Ensure that it is a number and stop the keypress
    if (
        (e.shiftKey || e.keyCode < 48 || e.keyCode > 57) &&
        (e.keyCode < 96 || e.keyCode > 105)
    ) {
        e.preventDefault();
    }
});
