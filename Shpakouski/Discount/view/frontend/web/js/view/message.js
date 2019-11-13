define(
    [
        'uiComponent'
    ],
    function (Component) {
        "use strict";
        return Component.extend({
            defaults: {
                message: false
            },

            initialize: function () {
                this._super();
                this.message = window.checkoutConfig.totalmessage;
            },

            hasMessage: function () {
                if (this.message) {
                    return true;
                }

                return false;
            },

            getMessage: function () {
                return this.message;
            }
        });
    }
);