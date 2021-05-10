(function($) {
    "use strict";
    $.HSCore.components.HSValidation = {
        defaults: { errorElement: "div", errorClass: "invalid-feedback" },
        init: function(el, options) {
            if (!el.length) return;
            var context = this,
                defaults = Object.assign({}, context.defaults),
                dataSettings = el.attr("data-hs-validation-options") ?
                JSON.parse(el.attr("data-hs-validation-options")) :
                {},
                settings = {
                    errorPlacement: context.errorPlacement,
                    highlight: context.highlight,
                    unhighlight: context.unHighlight,
                    submitHandler: context.submitHandler,
                    onkeyup: function(element) {
                        $(element).valid();
                    },
                };
            settings = $.extend(
                true,
                defaults,
                settings,
                dataSettings,
                options
            );
            if (el.hasClass("js-step-form")) {
                $.validator.setDefaults({
                    ignore: ":hidden:not(.active select)",
                });
            } else {
                $.validator.setDefaults({ ignore: ":hidden:not(select)" });
            }
            var newValidate = el.validate(settings);
            if (el.find("select").length) {
                el.find("select").change(function() {
                    $(this).valid();
                });
            }
            return newValidate;
        },
        rules: function(el) {
            var args = Array.prototype.slice.call(arguments, 1);
            $.fn.rules.apply(el, args);
        },
        errorPlacement: function(error, element) {
            var $this = $(element),
                errorMsgClasses = $this.data("error-msg-classes");
            error.addClass(errorMsgClasses);
            error.appendTo(element.parents(".js-form-message"));
        },
        highlight: function(element) {
            var $this = $(element),
                errorClass = $this.data("error-class") ?
                $this.data("error-class") :
                "is-invalid",
                successClass = $this.data("success-class") ?
                $this.data("error-class") :
                "is-valid";
            $this.removeClass(successClass).addClass(errorClass);
        },
        unHighlight: function(element) {
            var $this = $(element),
                errorClass = $this.data("error-class") ?
                $this.data("error-class") :
                "is-invalid",
                successClass = $this.data("success-class") ?
                $this.data("error-class") :
                "is-valid";
            $this.removeClass(errorClass).addClass(successClass);
        },
        submitHandler: function(form) {
            form.submit();
        },
    };
})(jQuery);