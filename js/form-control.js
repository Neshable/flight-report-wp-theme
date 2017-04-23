(function($) {
    // Validating and sending the main form via API
    var mainForm = {
        // Initialize function
        init: function() {
            this.cacheDom();
            this.bindEvents();
            this.getCars();
        },
        // Defining urls for ajax requests
        url: {
            sendlane: './forms/sendlane.php',
            cars: '/wp-cardata/cars.php'
        },
        // Caching the input fields in variables
        cacheDom: function() {
            this.$make = $("#carMake");
            this.$model = $("#carModel");
            this.$carsarray = [];
            this.$plate = $("input[name=number-plate]");
            this.$current = $("input[name=current-ml]");
            this.$year = $("input[name=car-year]");
            this.$title = $("#mrMrs");
            this.$first = $("input[name=first-name]");
            this.$last = $("input[name=last-name]");
            this.$email = $("input[name=email-address]");
            this.$phone = $("input[name=phone-number]");
            this.$post = $("input[name=post-code]");
            this.$time = $("input[name=time-to-call]");
            this.$btn = $("#quote-me");
            this.$msg = $("#message");
        },
        getCars: function() {
            var that = this;
            $.ajax({
                url: this.url.cars,
                type: 'POST',
                dataType: 'json',
                success: function(data) {
                    that.$carsarray = data;
                },
                complete: function() {
                    that.appendCars();
                }
            });
        },
        appendCars: function() {
            this.$make.append(this.$carsarray.map(function(make) {
                return '<option value="' + make.value + '">' + make.title + '</option>';
            }));
        },
        // Add models based on car make
        appendModels: function() {
            var selected = this.$make.val();
            // < ES6
            var _this = this;
            this.$carsarray.map(function(make) {
                if (make.value == selected) {
                    _this.$model.html('');
                    make.models.map(function(model) {
                        _this.$model.append('<option value="' + model.value + '">' + model.title + '</option>');
                    });
                }
            });
        },

        bindEvents: function() {
            // On submiting the form
            this.$btn.on("click", this.checkFields.bind(this));
            // Add action change for make and model dropdown
            this.$make.on("change", this.appendModels.bind(this));

        },

        checkFields: function(e) {
            e.preventDefault();
            if (!this.$make.val()) {
                this.$msg.html("Please, enter your car make.");
            } else if (!this.$model.val()) {
                this.$msg.html("Please, enter your car model.");
            } else if (this.$plate.val() === "") {
                this.$msg.html("Please, enter the number plate.");
                console.log(this.$make.val());
            } else if (!this.validEmail(this.$email.val())) {
                this.$msg.html("Please, enter a valid email.");
                console.log(this.$title.val());
            } else {
                this.$msg.html("Sending your request ...");
                this.sendForm();
            }
        },
        // Email validation
        validEmail: function(email) {
            var tt = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
            return tt.test(email);
        },
        // Postcode Validation
        validPost: function(postcode) {
            var tt = /^((([A-PR-UWYZ][0-9])|([A-PR-UWYZ][0-9][0-9])|([A-PR-UWYZ][A-HK-Y][0-9])|([A-PR-UWYZ][A-HK-Y][0-9][0-9])|([A-PR-UWYZ][0-9][A-HJKSTUW])|([A-PR-UWYZ][A-HK-Y][0-9][ABEHMNPRVWXY]))\s?([0-9][ABD-HJLNP-UW-Z]{2})|(GIR)\s?(0AA))$/i;
            return tt.test(postcode);
        },
        // Phone validation
        validPhone: function(phone) {
            var tt = /^(?:(?:(?:00\s?|\+)44\s?)|(?:\(?0))(?:\d{2}\)?\s?\d{4}\s?\d{4}|\d{3}\)?\s?\d{3}\s?\d{3,4}|\d{4}\)?\s?(?:\d{5}|\d{3}\s?\d{3})|\d{5}\)?\s?\d{4,5})$/i;
            return tt.test(phone);
        },
        // Submit the form via SOAP API
        sendForm: function() {
            console.log("Form send via API");
            console.log(this.$make.val());
        }

    };

    mainForm.init();

})(jQuery);
